<?php

namespace Mnvx\Unoconv;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\NullLogger;
use Symfony\Component\Process\Process;

class Converter implements ConverterInterface
{
    use LoggerAwareTrait;

    const BINARY_DEFAULT = 'unoconv';

    /**
     * Path to binary
     * @var string
     */
    protected $binaryPath;

    /**
     * Timeout
     * @var int
     */
    protected $timeout;

    /**
     * Unoconv constructor.
     * @param string $binaryPath
     * @param int $timeout
     * @param LoggerInterface|null $logger
     */
    public function __construct(
        string $binaryPath = self::BINARY_DEFAULT,
        int $timeout = null,
        LoggerInterface $logger = null
    ) {
        if (!$logger) {
            $logger = new NullLogger();
        }
        $this->setLogger($logger);
        $this->binaryPath = $binaryPath;
        $this->timeout = $timeout;
    }

    /**
     * @inheritdoc
     */
    public function convert(UnoconvParameters $parameters)
    {
        if (!in_array($parameters->getOutputFormat(), Format::getAvailableFormats(), true)) {
            throw new UnoconvException(sprintf('Unknown output format: ', $parameters->getOutputFormat()));
        }

        $input = $parameters->getInputFile() ? '"' . $parameters->getInputFile() . '"' : '--stdin';
        $output = $parameters->getOutputFile() ? '--output="' . $parameters->getOutputFile() . '"' : '--stdout';
        $format = $parameters->getOutputFormat() ? '--format=' . $parameters->getOutputFormat() : '';
        $command = $this->binaryPath . sprintf(' %s %s %s', $format, $output, $input);

        $process = new Process($command);

        // Convert from stdin
        if (!$parameters->getInputFile()) {
            $process->setInput($parameters->getInputStream());
        }

        $this->logger->info(sprintf('Start: %s', $command));

        $result = null;
        $errors = null;
        $self = $this;
        $resultCode = $process->run(function ($type, $buffer) use (&$result, &$errors, $self) {
            if (Process::ERR === $type) {
                $self->logger->warning($buffer);
            }
            else {
                $result .= $buffer;
            }
        });

        if ($resultCode != 0) {
            $this->logger->error(sprintf('Failed with result code %d: %s', $resultCode, $command));
            throw new UnoconvException('Error on converting data with Unoconv: ' . $resultCode, $resultCode);
        }
        else {
            $this->logger->info(sprintf('Finished: %s', $command));
        }

        return $result;
    }

}
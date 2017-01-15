<?php

namespace Mnvx\Unoconv;

class UnoconvParameters
{

    /**
     * Full path to output file. In case when output is stdout - null.
     * @var null|string
     */
    protected $outputFile = null;

    /**
     * Output format.
     *
     * More info: https://github.com/dagwieers/unoconv/blob/260b815bf2c57118df439f381974f3f0987222a1/unoconv#L361
     *
     * @var null
     */
    protected $outputFormat = null;

    /**
     * Full path to input file. In case when input is stdin - null.
     * @var null|string
     */
    protected $inputFile = null;

    /**
     * Sttin data
     * @var mixed
     */
    protected $inputStream = null;

    public function __construct(
        string $outputFile = null,
        string $outputFormat = null,
        string $inputFile = null,
        string $inputStream = null
    ) {
        $this->setOutputFile($outputFile);
        $this->setOutputFormat($outputFormat);
        $this->setInputFile($inputFile);
        $this->setInputStream($inputStream);
    }

    /**
     * @return null|string
     */
    public function getInputFile()
    {
        return $this->inputFile;
    }

    /**
     * @param null|string $inputFile
     * @return UnoconvParameters
     */
    public function setInputFile($inputFile)
    {
        $this->inputFile = $inputFile;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getOutputFile()
    {
        return $this->outputFile;
    }

    /**
     * @param null|string $outputFile
     * @return UnoconvParameters
     */
    public function setOutputFile($outputFile)
    {
        $this->outputFile = $outputFile;
        return $this;
    }

    /**
     * @return null
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }

    /**
     * @param null $outputFormat
     * @return UnoconvParameters
     * @throws UnoconvException
     */
    public function setOutputFormat($outputFormat)
    {
        if ($outputFormat && !in_array($outputFormat, Format::getAvailableFormats())) {
            throw new UnoconvException('Unknown output format: ' . $outputFormat);
        }
        $this->outputFormat = $outputFormat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputStream()
    {
        return $this->inputStream;
    }

    /**
     * @param mixed $inputStream
     * @return UnoconvParameters
     */
    public function setInputStream($inputStream)
    {
        $this->inputStream = $inputStream;
        return $this;
    }

}
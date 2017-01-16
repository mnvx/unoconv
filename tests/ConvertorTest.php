<?php

use Mnvx\Unoconv\Converter;
use Mnvx\Unoconv\Format;
use Mnvx\Unoconv\UnoconvParameters;
use Symfony\Component\Process\Process;

class ConvertorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider converterProvider
     */
    public function testConvert(UnoconvParameters $parameters, string $command, string $binary = null)
    {
        $processStub = $this->getMockBuilder(Process::class)
            ->disableOriginalConstructor()
            ->getMock();
        $processStub->method('run')->willReturn(0);

        $mockBuilder = $this->getMockBuilder(Converter::class);
        if ($binary) {
            $mockBuilder->setConstructorArgs([$binary]);
        }
        $converterStub = $mockBuilder->setMethods(['createProcess'])
            ->getMock();

        $converterStub->expects($this->once())
            ->method('createProcess')
            ->with($this->equalTo($command));

        $converterStub->convert($parameters);

    }

    public function converterProvider()
    {
        return [
            'clear' => [
                new UnoconvParameters(),
                'unoconv  --stdout --stdin',
                null,
            ],
            'From stdin to HTML stdout' => [
                (new UnoconvParameters())
                    ->setOutputFormat(Format::FORMAT_WEB_HTML),
                'unoconv --format=html --stdout --stdin',
                null,
            ],
            'From HTML file to HTML stdout' => [
                (new UnoconvParameters())
                    ->setOutputFormat(Format::FORMAT_WEB_HTML)
                    ->setInputFile('test.html'),
                'unoconv --format=html --stdout "test.html"',
                null,
            ],
            'From stdin to docx file' => [
                (new UnoconvParameters())
                    ->setOutputFormat(Format::FORMAT_TEXT_DOCX)
                    ->setOutputFile('test.docx'),
                'unoconv --format=docx --output="test.docx" --stdin',
                null,
            ],
            'From HTML file to docx file' => [
                (new UnoconvParameters())
                    ->setInputFile('test.html')
                    ->setOutputFormat(Format::FORMAT_TEXT_DOCX)
                    ->setOutputFile('test.docx'),
                'unoconv --format=docx --output="test.docx" "test.html"',
                null,
            ],
            'Binary' => [
                new UnoconvParameters(),
                '/test/path  --stdout --stdin',
                '/test/path',
            ],
        ];
    }

}
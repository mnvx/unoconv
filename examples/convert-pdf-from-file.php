<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/Logger.php';


// Example start

use Mnvx\Unoconv\Converter;
use Mnvx\Unoconv\UnoconvParameters;
use Mnvx\Unoconv\Format;

$converter = new Converter();
$converter->setLogger(new Logger());

$parameters = (new UnoconvParameters())
    ->setInputFile(__DIR__ . '/data/pdf.pdf')
    ->setOutputFile(__DIR__ . '/output/pdf-to-png.png')
    ->setOutputFormat(Format::FORMAT_GRAPHICS_PNG);

$converter->convert($parameters);

// Example finish


$html = '<img src="output/pdf-to-png.png"/>';
include __DIR__ . '/layout/layout.html';
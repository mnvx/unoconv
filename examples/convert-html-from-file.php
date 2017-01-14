<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




// Example

use Unoconv\Converter;
use Unoconv\UnoconvParameters;
use Unoconv\Format;

$filename = __DIR__ . '/data/html.html';

$converter = new Converter();
$parameters = (new UnoconvParameters())
    ->setInputFile($filename)
    ->setOutputFormat(Format::FORMAT_TEXT_TEXT);

$result = $converter->convert($parameters);

$html = '<pre>' . $result . '</pre>';
include __DIR__ . '/layout/layout.html';
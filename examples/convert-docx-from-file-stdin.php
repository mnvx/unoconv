<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




// Example start

use Mnvx\Unoconv\Converter;
use Mnvx\Unoconv\UnoconvParameters;
use Mnvx\Unoconv\Format;

$converter = new Converter();
$parameters = (new UnoconvParameters())
    ->setInputFile(__DIR__ . '/data/docx.docx')
    ->setOutputFormat(Format::FORMAT_WEB_HTML);

$result = $converter->convert($parameters);

// Example finish


echo $result;

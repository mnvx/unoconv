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

$source = file_get_contents(__DIR__ . '/data/html.html');

$converter = new Converter(
    // Use last version for stdin with utf8 characters
    //'/home/mnv/tmp/unoconv/unoconv-new'
);
$converter->setLogger(new Logger());

$parameters = (new UnoconvParameters())
    ->setInputStream($source)
    ->setOutputFormat(Format::FORMAT_TEXT_TEXT);

$result = $converter->convert($parameters);

// Example finish


$html = '<pre>' . $result . '</pre>';
include __DIR__ . '/layout/layout.html';
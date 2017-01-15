# PHP wrapper over Unoconv
Simple way for documents conversion into various formats.

For example: html -> docx, html -> pdf, docx -> html and many more.

More about [supported formats](http://dag.wiee.rs/home-made/unoconv/).

## Usage

```
use Mnvx\Unoconv\Converter;
use Mnvx\Unoconv\UnoconvParameters;
use Mnvx\Unoconv\Format;

// Create converter
$converter = new Converter();

// Describe parameters for converter
$parameters = (new UnoconvParameters())
    // HTML document as string on input
    ->setInputStream('<!DOCTYPE html><html>Example of HTML document</html>')
    // Result file name
    ->setOutputFile('path-to-result-docx.docx')
    // Format of result document is docx
    ->setOutputFormat(Format::FORMAT_TEXT_DOCX);

// Run converter
$converter->convert($parameters);
```

## Install

```
sudo apt-get install unoconv
composer require mnvx/unoconv:dev-master
```

If you have problems with Unoconv utility, read instructions descibed 
in [official documentation](https://github.com/dagwieers/unoconv#problems-running-unoconv-from-nginxapachephp).

## License

Released under the MIT license
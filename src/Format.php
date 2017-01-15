<?php

namespace Mnvx\Unoconv;

class Format
{
    // TextDocument
    const FORMAT_TEXT_BIB = 'bib';
    const FORMAT_TEXT_DOC = 'doc';
    const FORMAT_TEXT_DOC6 = 'doc6';
    const FORMAT_TEXT_DOC95 = 'doc95';
    const FORMAT_TEXT_DOCBOOK = 'docbook';
    const FORMAT_TEXT_DOCX = 'docx';
    const FORMAT_TEXT_DOCX7 = 'docx7';
    const FORMAT_TEXT_FODT = 'fodt';
    const FORMAT_TEXT_HTML = 'html';
    const FORMAT_TEXT_LATEX = 'latex';
    const FORMAT_TEXT_MEDIAWIKI = 'mediawiki';
    const FORMAT_TEXT_ODT = 'odt';
    const FORMAT_TEXT_OOXML = 'ooxml';
    const FORMAT_TEXT_OTT = 'ott';
    const FORMAT_TEXT_PDB = 'pdb';
    const FORMAT_TEXT_PDF = 'pdf';
    const FORMAT_TEXT_PSW = 'psw';
    const FORMAT_TEXT_RTF = 'rtf';
    const FORMAT_TEXT_SDW = 'sdw';
    const FORMAT_TEXT_SDW4 = 'sdw4';
    const FORMAT_TEXT_SDW3 = 'sdw3';
    const FORMAT_TEXT_STW = 'stw';
    const FORMAT_TEXT_SXW = 'sxw';
    const FORMAT_TEXT_TEXT = 'text';
    const FORMAT_TEXT_TXT = 'txt';
    const FORMAT_TEXT_UOT = 'uot';
    const FORMAT_TEXT_VOR = 'vor';
    const FORMAT_TEXT_VOR4 = 'vor4';
    const FORMAT_TEXT_VOR3 = 'vor3';
    const FORMAT_TEXT_WPS = 'wps';
    const FORMAT_TEXT_XHTML = 'xhtml';

    // WebDocument
    const FORMAT_WEB_ETEXT = 'etext';
    const FORMAT_WEB_HTML10 = 'html10';
    const FORMAT_WEB_HTML = 'html';
    const FORMAT_WEB_MEDIAWIKI = 'mediawiki';
    const FORMAT_WEB_PDF = 'pdf';
    const FORMAT_WEB_SDW3 = 'sdw3';
    const FORMAT_WEB_SDW4 = 'sdw4';
    const FORMAT_WEB_SDW = 'sdw';
    const FORMAT_WEB_TXT = 'txt';
    const FORMAT_WEB_TEXT10 = 'text10';
    const FORMAT_WEB_TEXT = 'text';
    const FORMAT_WEB_VOR4 = 'vor4';
    const FORMAT_WEB_VOR = 'vor';

    // Spreadsheet
    const FORMAT_SPREADSHEET_CSV = 'csv';
    const FORMAT_SPREADSHEET_DBF = 'dbf';
    const FORMAT_SPREADSHEET_DIF = 'dif';
    const FORMAT_SPREADSHEET_FODS = 'fods';
    const FORMAT_SPREADSHEET_HTML = 'html';
    const FORMAT_SPREADSHEET_ODS = 'ods';
    const FORMAT_SPREADSHEET_OOXML = 'ooxml';
    const FORMAT_SPREADSHEET_OTS = 'ots';
    const FORMAT_SPREADSHEET_PDF = 'pdf';
    const FORMAT_SPREADSHEET_PXL = 'pxl';
    const FORMAT_SPREADSHEET_SDC = 'sdc';
    const FORMAT_SPREADSHEET_SDC4 = 'sdc4';
    const FORMAT_SPREADSHEET_SDC3 = 'sdc3';
    const FORMAT_SPREADSHEET_SLK = 'slk';
    const FORMAT_SPREADSHEET_STC = 'stc';
    const FORMAT_SPREADSHEET_SXC = 'sxc';
    const FORMAT_SPREADSHEET_UOS = 'uos';
    const FORMAT_SPREADSHEET_VOR3 = 'vor3';
    const FORMAT_SPREADSHEET_VOR4 = 'vor4';
    const FORMAT_SPREADSHEET_VOR = 'vor';
    const FORMAT_SPREADSHEET_XHTML = 'xhtml';
    const FORMAT_SPREADSHEET_XLS = 'xls';
    const FORMAT_SPREADSHEET_XLS5 = 'xls5';
    const FORMAT_SPREADSHEET_XLS95 = 'xls95';
    const FORMAT_SPREADSHEET_XLT = 'xlt';
    const FORMAT_SPREADSHEET_XLT5 = 'xlt5';
    const FORMAT_SPREADSHEET_XLT95 = 'xlt95';
    const FORMAT_SPREADSHEET_XLSX = 'xlsx';

    // Graphics
    const FORMAT_GRAPHICS_BMP = 'bmp';
    const FORMAT_GRAPHICS_EMF = 'emf';
    const FORMAT_GRAPHICS_EPS = 'eps';
    const FORMAT_GRAPHICS_FODG = 'fodg';
    const FORMAT_GRAPHICS_GIF = 'gif';
    const FORMAT_GRAPHICS_HTML = 'html';
    const FORMAT_GRAPHICS_JPG = 'jpg';
    const FORMAT_GRAPHICS_MET = 'met';
    const FORMAT_GRAPHICS_ODD = 'odd';
    const FORMAT_GRAPHICS_OTG = 'otg';
    const FORMAT_GRAPHICS_PBM = 'pbm';
    const FORMAT_GRAPHICS_PCT = 'pct';
    const FORMAT_GRAPHICS_PDF = 'pdf';
    const FORMAT_GRAPHICS_PGM = 'pgm';
    const FORMAT_GRAPHICS_PNG = 'png';
    const FORMAT_GRAPHICS_PPM = 'ppm';
    const FORMAT_GRAPHICS_RAS = 'ras';
    const FORMAT_GRAPHICS_STD = 'std';
    const FORMAT_GRAPHICS_SVG = 'svg';
    const FORMAT_GRAPHICS_SVM = 'svm';
    const FORMAT_GRAPHICS_SWF = 'swf';
    const FORMAT_GRAPHICS_SXD = 'sxd';
    const FORMAT_GRAPHICS_SXD3 = 'sxd3';
    const FORMAT_GRAPHICS_SXD5 = 'sxd5';
    const FORMAT_GRAPHICS_SXW = 'sxw';
    const FORMAT_GRAPHICS_TIFF = 'tiff';
    const FORMAT_GRAPHICS_VOR = 'vor';
    const FORMAT_GRAPHICS_VOR3 = 'vor3';
    const FORMAT_GRAPHICS_WMF = 'wmf';
    const FORMAT_GRAPHICS_XHTML = 'xhtml';
    const FORMAT_GRAPHICS_XPM = 'xpm';

    // Presentation
    const FORMAT_PRESENTATION_BMP = 'bmp';
    const FORMAT_PRESENTATION_EMF = 'emf';
    const FORMAT_PRESENTATION_EPS = 'eps';
    const FORMAT_PRESENTATION_FODP = 'fodp';
    const FORMAT_PRESENTATION_GIF = 'gif';
    const FORMAT_PRESENTATION_HTML = 'html';
    const FORMAT_PRESENTATION_JPG = 'jpg';
    const FORMAT_PRESENTATION_MET = 'met';
    const FORMAT_PRESENTATION_ODG = 'odg';
    const FORMAT_PRESENTATION_ODP = 'odp';
    const FORMAT_PRESENTATION_OTP = 'otp';
    const FORMAT_PRESENTATION_PBM = 'pbm';
    const FORMAT_PRESENTATION_PCT = 'pct';
    const FORMAT_PRESENTATION_PDF = 'pdf';
    const FORMAT_PRESENTATION_PGM = 'pgm';
    const FORMAT_PRESENTATION_PNG = 'png';
    const FORMAT_PRESENTATION_POTM = 'potm';
    const FORMAT_PRESENTATION_POT = 'pot';
    const FORMAT_PRESENTATION_PPM = 'ppm';
    const FORMAT_PRESENTATION_PPTX = 'pptx';
    const FORMAT_PRESENTATION_PPS = 'pps';
    const FORMAT_PRESENTATION_PPT = 'ppt';
    const FORMAT_PRESENTATION_PWP = 'pwp';
    const FORMAT_PRESENTATION_RAS = 'ras';
    const FORMAT_PRESENTATION_SDA = 'sda';
    const FORMAT_PRESENTATION_SDD = 'sdd';
    const FORMAT_PRESENTATION_SDD3 = 'sdd3';
    const FORMAT_PRESENTATION_SDD4 = 'sdd4';
    const FORMAT_PRESENTATION_SXD = 'sxd';
    const FORMAT_PRESENTATION_STI = 'sti';
    const FORMAT_PRESENTATION_SVG = 'svg';
    const FORMAT_PRESENTATION_SVM = 'svm';
    const FORMAT_PRESENTATION_SWF = 'swf';
    const FORMAT_PRESENTATION_SXI = 'sxi';
    const FORMAT_PRESENTATION_TIFF = 'tiff';
    const FORMAT_PRESENTATION_UOP = 'uop';
    const FORMAT_PRESENTATION_VOR = 'vor';
    const FORMAT_PRESENTATION_VOR3 = 'vor3';
    const FORMAT_PRESENTATION_VOR4 = 'vor4';
    const FORMAT_PRESENTATION_VOR5 = 'vor5';
    const FORMAT_PRESENTATION_WMF = 'wmf';
    const FORMAT_PRESENTATION_XPM = 'xpm';


    /**
     * More info: https://github.com/dagwieers/unoconv/blob/260b815bf2c57118df439f381974f3f0987222a1/unoconv#L361
     * @var string[]
     */
    protected static $formats = [
        // TextDocument
        self::FORMAT_TEXT_BIB,
        self::FORMAT_TEXT_DOC,
        self::FORMAT_TEXT_DOC6,
        self::FORMAT_TEXT_DOC95,
        self::FORMAT_TEXT_DOCBOOK,
        self::FORMAT_TEXT_DOCX,
        self::FORMAT_TEXT_DOCX7,
        self::FORMAT_TEXT_FODT,
        self::FORMAT_TEXT_HTML,
        self::FORMAT_TEXT_LATEX,
        self::FORMAT_TEXT_MEDIAWIKI,
        self::FORMAT_TEXT_ODT,
        self::FORMAT_TEXT_OOXML,
        self::FORMAT_TEXT_OTT,
        self::FORMAT_TEXT_PDB,
        self::FORMAT_TEXT_PDF,
        self::FORMAT_TEXT_PSW,
        self::FORMAT_TEXT_RTF,
        self::FORMAT_TEXT_SDW,
        self::FORMAT_TEXT_SDW4,
        self::FORMAT_TEXT_SDW3,
        self::FORMAT_TEXT_STW,
        self::FORMAT_TEXT_SXW,
        self::FORMAT_TEXT_TEXT,
        self::FORMAT_TEXT_TXT,
        self::FORMAT_TEXT_UOT,
        self::FORMAT_TEXT_VOR,
        self::FORMAT_TEXT_VOR4,
        self::FORMAT_TEXT_VOR3,
        self::FORMAT_TEXT_WPS,
        self::FORMAT_TEXT_XHTML,

        // WebDocument
        self::FORMAT_WEB_ETEXT,
        self::FORMAT_WEB_HTML10,
        self::FORMAT_WEB_HTML,
        self::FORMAT_WEB_MEDIAWIKI,
        self::FORMAT_WEB_PDF,
        self::FORMAT_WEB_SDW3,
        self::FORMAT_WEB_SDW4,
        self::FORMAT_WEB_SDW,
        self::FORMAT_WEB_TXT,
        self::FORMAT_WEB_TEXT10,
        self::FORMAT_WEB_TEXT,
        self::FORMAT_WEB_VOR4,
        self::FORMAT_WEB_VOR,

        // Spreadsheet
        self::FORMAT_SPREADSHEET_CSV,
        self::FORMAT_SPREADSHEET_DBF,
        self::FORMAT_SPREADSHEET_DIF,
        self::FORMAT_SPREADSHEET_FODS,
        self::FORMAT_SPREADSHEET_HTML,
        self::FORMAT_SPREADSHEET_ODS,
        self::FORMAT_SPREADSHEET_OOXML,
        self::FORMAT_SPREADSHEET_OTS,
        self::FORMAT_SPREADSHEET_PDF,
        self::FORMAT_SPREADSHEET_PXL,
        self::FORMAT_SPREADSHEET_SDC,
        self::FORMAT_SPREADSHEET_SDC4,
        self::FORMAT_SPREADSHEET_SDC3,
        self::FORMAT_SPREADSHEET_SLK,
        self::FORMAT_SPREADSHEET_STC,
        self::FORMAT_SPREADSHEET_SXC,
        self::FORMAT_SPREADSHEET_UOS,
        self::FORMAT_SPREADSHEET_VOR3,
        self::FORMAT_SPREADSHEET_VOR4,
        self::FORMAT_SPREADSHEET_VOR,
        self::FORMAT_SPREADSHEET_XHTML,
        self::FORMAT_SPREADSHEET_XLS,
        self::FORMAT_SPREADSHEET_XLS5,
        self::FORMAT_SPREADSHEET_XLS95,
        self::FORMAT_SPREADSHEET_XLT,
        self::FORMAT_SPREADSHEET_XLT5,
        self::FORMAT_SPREADSHEET_XLT95,
        self::FORMAT_SPREADSHEET_XLSX,

        // Graphics
        self::FORMAT_GRAPHICS_BMP,
        self::FORMAT_GRAPHICS_EMF,
        self::FORMAT_GRAPHICS_EPS,
        self::FORMAT_GRAPHICS_FODG,
        self::FORMAT_GRAPHICS_GIF,
        self::FORMAT_GRAPHICS_HTML,
        self::FORMAT_GRAPHICS_JPG,
        self::FORMAT_GRAPHICS_MET,
        self::FORMAT_GRAPHICS_ODD,
        self::FORMAT_GRAPHICS_OTG,
        self::FORMAT_GRAPHICS_PBM,
        self::FORMAT_GRAPHICS_PCT,
        self::FORMAT_GRAPHICS_PDF,
        self::FORMAT_GRAPHICS_PGM,
        self::FORMAT_GRAPHICS_PNG,
        self::FORMAT_GRAPHICS_PPM,
        self::FORMAT_GRAPHICS_RAS,
        self::FORMAT_GRAPHICS_STD,
        self::FORMAT_GRAPHICS_SVG,
        self::FORMAT_GRAPHICS_SVM,
        self::FORMAT_GRAPHICS_SWF,
        self::FORMAT_GRAPHICS_SXD,
        self::FORMAT_GRAPHICS_SXD3,
        self::FORMAT_GRAPHICS_SXD5,
        self::FORMAT_GRAPHICS_SXW,
        self::FORMAT_GRAPHICS_TIFF,
        self::FORMAT_GRAPHICS_VOR,
        self::FORMAT_GRAPHICS_VOR3,
        self::FORMAT_GRAPHICS_WMF,
        self::FORMAT_GRAPHICS_XHTML,
        self::FORMAT_GRAPHICS_XPM,

        // Presentation
        self::FORMAT_PRESENTATION_BMP,
        self::FORMAT_PRESENTATION_EMF,
        self::FORMAT_PRESENTATION_EPS,
        self::FORMAT_PRESENTATION_FODP,
        self::FORMAT_PRESENTATION_GIF,
        self::FORMAT_PRESENTATION_HTML,
        self::FORMAT_PRESENTATION_JPG,
        self::FORMAT_PRESENTATION_MET,
        self::FORMAT_PRESENTATION_ODG,
        self::FORMAT_PRESENTATION_ODP,
        self::FORMAT_PRESENTATION_OTP,
        self::FORMAT_PRESENTATION_PBM,
        self::FORMAT_PRESENTATION_PCT,
        self::FORMAT_PRESENTATION_PDF,
        self::FORMAT_PRESENTATION_PGM,
        self::FORMAT_PRESENTATION_PNG,
        self::FORMAT_PRESENTATION_POTM,
        self::FORMAT_PRESENTATION_POT,
        self::FORMAT_PRESENTATION_PPM,
        self::FORMAT_PRESENTATION_PPTX,
        self::FORMAT_PRESENTATION_PPS,
        self::FORMAT_PRESENTATION_PPT,
        self::FORMAT_PRESENTATION_PWP,
        self::FORMAT_PRESENTATION_RAS,
        self::FORMAT_PRESENTATION_SDA,
        self::FORMAT_PRESENTATION_SDD,
        self::FORMAT_PRESENTATION_SDD3,
        self::FORMAT_PRESENTATION_SDD4,
        self::FORMAT_PRESENTATION_SXD,
        self::FORMAT_PRESENTATION_STI,
        self::FORMAT_PRESENTATION_SVG,
        self::FORMAT_PRESENTATION_SVM,
        self::FORMAT_PRESENTATION_SWF,
        self::FORMAT_PRESENTATION_SXI,
        self::FORMAT_PRESENTATION_TIFF,
        self::FORMAT_PRESENTATION_UOP,
        self::FORMAT_PRESENTATION_VOR,
        self::FORMAT_PRESENTATION_VOR3,
        self::FORMAT_PRESENTATION_VOR4,
        self::FORMAT_PRESENTATION_VOR5,
        self::FORMAT_PRESENTATION_WMF,
        self::FORMAT_PRESENTATION_XPM,
    ];

    /**
     * List of available formats
     * @return string[]
     */
    public static function getAvailableFormats()
    {
        return static::$formats;
    }

}
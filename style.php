<?php
require_once "scssphp/scss.inc.php";

use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;

$format1 = 'Leafo\ScssPhp\Formatter\Expanded';
$format2 = 'Leafo\ScssPhp\Formatter\Nested';
$format3 = 'Leafo\ScssPhp\Formatter\Compressed';
$format4 = 'Leafo\ScssPhp\Formatter\Compact';
$format5 = 'Leafo\ScssPhp\Formatter\Crunched';

$primaryColor = '#0275d8';
$successColor = '#5cb85c';
$infoColor = '#5bc0de';
$dangerColor = '#d9534f';
$warningColor = '#f0ad4e';

$scss = new Compiler();
$scss->setFormatter($format1);
$scss->setVariables(array(
    'primaryColor'	=> $primaryColor,
    'successColor'	=> $successColor,
    'infoColor'		=> $infoColor,
    'dangerColor'	=> $primaryColor,
    'warningColor'	=> $warningColor,
));

$server = new Server('scss', null, $scss);
$server->compileFile('scss/style.scss', 'style.css');
$server->serve();
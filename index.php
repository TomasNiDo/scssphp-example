<?php
// require_once 'vendor/autoload.php';
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
$scss->setImportPaths('scss/');
$scss->setFormatter($format1);
$scss->setVariables(array(
    'primaryColor'	=> $primaryColor,
    'successColor'	=> $successColor,
    'infoColor'		=> $infoColor,
    'dangerColor'	=> $dangerColor,
    'warningColor'	=> $warningColor,
    'font'			=> 'sans-serif',
));

$server = new Server('scss', null, $scss);
$server->compileFile('scss/style.scss', 'css/style.css');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP SCSS</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<h1>Hello World</h1>
	</div>
</body>
</html>
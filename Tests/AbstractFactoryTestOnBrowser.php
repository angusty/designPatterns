<?php
namespace DesignPatterns\Tests;
//require_once '../vendor/autoload.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';



error_reporting(E_ALL);
ini_set('display_errors', '1');
use DesignPatterns\AbstractFactory\CsvParser;

$csv = new CsvParser(false);
$string = <<<EOF
大家好啊,我是tony
我来\,成都龙泉洛带
现在,在龙泉居住
welcome！！！
EOF;
$return = $csv->parse($string);
//$return = str_getcsv($string);
var_dump($return);

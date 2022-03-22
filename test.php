<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');

echo file_get_contents(filename: '1.txt'); /*достаем информацию из файла*/


?>


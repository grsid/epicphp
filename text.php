<?php
header('Content-Type: text/html; charset=utf-8');

//это необязательно
$file = 'referat.txt';

$text = file_get_contents($file);

var_dump($text);

//преобразование текста

$parts = explode("\n", $text);

var_dump($parts);

file_put_contents('result.txt', $text);


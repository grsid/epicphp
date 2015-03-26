<?php
header('Content-Type: text/html; charset=utf-8');
$name = "Jack";
echo "Hello, world! My name is " . $name . " I am
the new superstar!"; 

$digit = "12345";

$age = 14;

if ($age < 20 ) {
   echo "самое время взяться за ум, $name";
} elseif ($age > 30) {
   echo "пора подводить итоги";
} 

$sum = 0;

for ($i = 1; $i <= 50; $i++) {
  $sum += $i;
  }
    echo 'сумма чисел от 1 до 50:' . $sum;
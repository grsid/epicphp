<?php
$values =["rollover", "snake", "pullshot", "pushshot", "pullkick", "pinshot"];
var_dump($values);
$values[] = "pushkick";
var_dump($values);
echo $values[2];
$values['qwer'] = 1234123;
var_dump($values);
foreach ($values as $key => $value) {
echo $key . ': ' . $value . '<br />';
}
$values['inner'] = ['qwer', 12342, 'alsdkjf', 'vcvc' => 'oiwer'];
var_dump($values);
$values['inner'][] = ['qwerqwe', 'asoixc9'];
var_dump($values);
unset($values[4]);
var_dump($values);
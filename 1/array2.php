<?php
$products = array(
array(
'title' => 'Плюшевый динозавр',
'category' => '18+',
'description' => 'Экологически чистый динозавр',
'price' => '$100',
'country' => 'Japan',
),
array(
'title' => 'Резиновый медведь',
'category' => '70+',
'description' => 'ММММмммммм',
'price' => '$1',
'country' => 'China',
),
array(
'title' => 'Розовая корова',
'category' => '2+',
'description' => 'С розовыми ушами',
'price' => '$10',
'country' => 'Holland',
),
array(
'title' => 'Робоцып',
'category' => '12+',
'description' => 'Нананананананна',
'price' => '$1000',
'country' => 'USA',
),
);
// var_dump($products);

foreach ($products as $key => $product) {
echo $product['title'];
echo $product['price'];
var_dump($product);
}

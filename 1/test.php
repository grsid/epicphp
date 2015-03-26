<?php

header('Content-Type: text/html; charset=utf-8');

$title = 'TITLE';
if (isset($_GET['title'])) {
 $title = $_GET['title'];
}

echo 'Название - ' . htmlspecialchars($title) . '<br />';



$description = 'DESCRIPTION';
 if (isset($_GET['desc'])) {
 $description = $_GET['desc'];
}

echo 'Описание - ' . htmlspecialchars($description);

$category = 'CATEGORY';
if (isset($_GET['cat'])) {
 $category = $_GET['cat'];
}

echo 'Катгория - ' . htmlspecialchars($category);

$price = 'PRICE';
if (isset($_GET['price'])) {
 $price = $_GET['price'];
}

echo 'Цена - ' . htmlspecialchars($price);

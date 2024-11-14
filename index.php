<?php
require "vendor/autoload.php";
use Bangladesh\Dhaka\Book;

// require "helpers.php";

$book =new Book();

echo $book->getTitle();

/*

composer --version
composer init
composer dump-autoload


*/ 

echo "<br/>";
sayHello();
echo "<br/>";

$custom =new CustomClass();
$custom->greet();
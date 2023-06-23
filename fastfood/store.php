<?php 
$name = $_GET["name"];
$price = $_GET["price"];

$link = mysqli_connect("localhost", "root", "root", "fastfood");

$result = mysqli_query($link, "INSERT INTO products (name, price) VALUES('$name', '$price')");

header("Location: products.php");
?>
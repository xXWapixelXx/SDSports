<?php

include('connect.php');

print_r($_POST);
$pname = $_POST['pname'];
$pprice = $_POST['pprice']; 
$pimage = $_POST['ppic'];

$v = "INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, '$pname', '$pprice', '$pimage');";
$conn->query($v);

header('Location: ./producten.php');
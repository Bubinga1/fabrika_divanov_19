<?php
require "app\utils\Connect.php";

$id = $_POST["id"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirm = $_POST['confirm'];
$name = $_POST["name"];
$number = $_POST["number"];

$queryUpdate = "UPDATE `users` SET `id`='$id', `email`='$email',`password`='$password',`password_confirm`='$password_confirm',`name`='$name',`number`='$number' WHERE `users`.`id`='$id'";

$open = mysqli_query($connect, $queryUpdate);



header("Location:/tables.php");
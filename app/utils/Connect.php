<?php
$user="root";
$password="";
$host="127.0.0.1:3306";
$db="db_fabrika";
$dbh='mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);

$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'db_fabrika');

if (!$connect) {
    die('Error connect to DataBase');
}

// $data = $pdo->prepare("SELECT * FROM `images`");
// $data->execute();

// $result = $data->fetchAll();
?>
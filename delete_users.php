<?php
   require "app\utils\Connect.php";
    
    $id = $_GET["id"];

    $deleteQuery = "DELETE FROM `users` WHERE `id` = '$id'";

    $delete = mysqli_query($connect, $deleteQuery);
    
    header("Location:/tables.php");

    // if ($connect->query($deleteQuery) === TRUE) {
    //     echo "Пользователь успешно удален";
    // } else {
    //     echo "Ошибка при удалении пользователя: " . $connect->error;
    // }
    
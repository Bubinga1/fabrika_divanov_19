<?php
include_once 'app/utils/Connect.php';
if (isset($_GET["filename"])) {
    $filename = $_GET["filename"];
    $upload_dir = "img/";

    if (file_exists($upload_dir . $filename)) {
        if (unlink($upload_dir . $filename)) {
            echo "Изображение \"$filename\" успешно удалено.";
        } else {
            echo "Ошибка при удалении изображения.";
        }
    } else {
        echo "Файл не существует.";
    }
} else {
    echo "Не указано имя файла для удаления.";
}

$data = $pdo->prepare("DELETE FROM `images` WHERE `image_name` = '$filename'");
$data ->execute([$filename]);
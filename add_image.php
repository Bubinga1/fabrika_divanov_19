<?php
include_once 'app/utils/Connect.php';

if($_FILES['file']['name'] !== ''){
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = __DIR__.'/img/'.$name;


    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        echo 'error';
    }
}




// if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
//     $upload_dir = "uploads/";
//     $uploaded_file = $upload_dir . basename($_FILES["image"]["name"]);

//     $image_info = getimagesize($_FILES["image"]["tmp_name"]);
//     if ($image_info !== false) {
//         if (!file_exists($uploaded_file)) {
//             if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploaded_file)) {
//                 echo "Изображение успешно загружено.";
//             } else {
//                 echo "Ошибка при загрузке изображения.";
//             }
//         } else {
//             echo "Файл с таким именем уже существует.";
//         }
//     } else {
//         echo "Выбранный файл не является изображением.";
//     }
// } else {
//     echo "Ошибка при загрузке файла.";
// }

// include "app\utils\Connect.php";


// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
//     $targetDirectory = "/uploads"; // Директория для сохранения картинок
//     $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    
//     // Проверка на тип файла и размер
//     $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
//     $allowedExtensions = array("jpg", "png", "jpeg", "gif");
    
//     if (in_array($imageFileType, $allowedExtensions) && $_FILES["image"]["size"] < 500000) {
//         if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
//             echo "Картинка успешно загружена.";
//         } else {
//             echo "Ошибка при загрузке картинки.";
//         }
//     } else {
//         echo "Недопустимый формат файла или слишком большой размер.";
//     }
// }

$data = $pdo->prepare("INSERT INTO `images` (`image_name`) VALUES (?)");
$data ->execute([$name]);

header('Location:/adminka');

?>
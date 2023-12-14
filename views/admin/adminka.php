<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Загрузка и удаление изображений</h1>

<!-- Форма для загрузки изображения -->
<form action="add_image.php" method="POST" enctype="multipart/form-data">
    <label for="image">Выберите изображение для загрузки:</label>
    <input type="file" name="file" id="image">
    <input type="submit" value="Загрузить">
</form>

<?php
    include "app\utils\Connect.php";
    foreach($result as $img):
?>

<img src="/img/<?= $img['image_name']?>" alt="" width="200px">

<?php endforeach;?>

 Список изображений для удаления
<h2>Удалить изображение:</h2>
<ul>
    <?php
    $upload_dir = "img"; // Папка, где хранятся изображения

    // Перечисляем файлы в папке и создаем список для удаления
    $files = scandir($upload_dir);
    foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
        
            echo "<li><a href='delete_image.php?filename=$file'>$file</a></li>";
            
        }
    }
    ?>
</ul> 




<form action="/User_registration" method="POST">
<div class="container_flex">
    <div class="field-block">
    <h2 style="color: white;">Регистрация</h2>
        <div>
            <label>Почта</label>
            <input type="email" name="email" placeholder="Введите логин" >
        </div>
        <div>
            <label>Имя</label>
            <input  type="text" name="name" placeholder="Введите имя">
        </div>
        <div>
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" >
        </div>
        <div>
            <label>Проверка пароля</label>
            <input type="password" name="confirm" placeholder="Повторите пароль" >
        </div>
        <div>
            <label>Телефон</label>
            <input type="tel" name="tel" placeholder="Введите номер телефона" >
        </div>
        <button class="btn-registration"> Зарегестрироваться </button>
    </div>
    <div>
       
    </div>
</div>
</form>




</body>
</html>
<?php

$action_User=$_SERVER['REQUEST_URI'];

switch ($action_User) {
    case "/User_registration":
            include_once 'app/utils/Connect.php';

            $email = $_POST['email'];// проверить пост переменные на содержание данных если они пустые например отключиться от бд или редирект
            $password = $_POST['password'];
            $password_confirm = $_POST['confirm'];
            $name = $_POST['name'];
            $tel = $_POST['number'];
        
            if ($password != $password_confirm) {

                ?>
                    <script>
                        alert("Пароли не совпадают!");
                    </script>

                <?php 
            
                exit(header("Refresh: 0.0001; /register.php"));
            
                
            }

            $user_check_query = "SELECT * FROM `users` WHERE `email` ='$email' LIMIT 1";
            $result = mysqli_query($connect, $user_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) { 
                if ($user['email'] === $email) {

                    ?>
                    <script>
                        alert("Такой логин уже существует!");
                    </script>

                <?php 

                    exit(header("Refresh: 0.0001; /register.php"));
                
                }
            }
            
            if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['number'])) {

                ?>
                    <script>
                        alert("Пожалуйста, заполните все обязательные поля!");
                    </script>

                <?php 

                    exit(header("Refresh: 0.0001; /register.php"));

            } else {
                $addinfo=( "INSERT INTO `users` (`id`,  `email`, `password`,`password_confirm`,`name`,`number`) VALUES (NULL, '$email', '$password','$password_confirm','$name','$tel' )");
                mysqli_query($connect, $addinfo);

                ?>

                <script>
                    alert("Пользователь добавлен!");
                </script>

                <?php 

                    exit(header("Refresh: 0.0001; /register.php"));
            };
            
    break;
    
    case"/User_login":
        include_once 'app/utils/Connect.php';

        $email = $_POST['login'];
        $password = $_POST['password'];
    

        $check_user = mysqli_query($connect, "SELECT * FROM `admin` WHERE `login` = '$email' AND `password` = '$password'");
    
        if (mysqli_num_rows($check_user) > 0) {
        session_start();

        $_SESSION["login"]=$email;
        $_SESSION["password"]=$password;
        if($_SESSION["login"] =="login" AND $_SESSION["password"] == "admin"){
            header('Location: /views\admin\card.php');
        }else{
            header('Location: /views\user\card.php');
            
        }
        }else{
            
            ?>
                <script>
                alert("Неверный логин или пароль!");
                </script>

            <?php
        }
        
    break;


    case"/Redact_user":
        include_once 'app/utils/Connect.php';

             $id = $_POST['id'];
            $email = $_POST['email'];// проверить пост переменные на содержание данных если они пустые например отключиться от бд или редирект
            $password = $_POST['password'];
            $password_confirm = $_POST['confirm'];
            $name = $_POST['name'];
            $tel = $_POST['number'];

            $queryRedact = "SELECT *FROM `users` WHERE `users`.`id`='$id'";
            $open = mysqli_query($connect, $queryRedact);
            $open = mysqli_fetch_assoc($open);



        $queryUpdate = "UPDATE `users` SET `email`='$email',`password`='$password',`password_confirm`='$password_confirm', `name`='$name', `number`='$tel' WHERE `id`='$id'";

        $open = mysqli_query($connect, $queryUpdate);
    
        // header("Location:/#");

    break;

    case"/Delete_user":
        include_once 'app/utils/Connect.php';
        
        $id = $_GET["id"];

        $deleteQuery = "DELETE FROM `users` WHERE `id` = '$id'";
    
        $delete = mysqli_query($connect, $deleteQuery);
        
        header("Location:/tables.php");


    break;








































        // if($_FILES['file']['name'] !== ''){
        //     $file = $_FILES['file'];
        //     $name = $file['name'];
        //     $pathFile = __DIR__.'/img/'.$nameFile;


        //     if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        //         echo 'error';
        //     }
        // }

        // $data = $pdo->prepare("INSERT INTO `images` (`image_name`) VALUES (?)");
        // $data ->execute([$nameFile]);


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

        // break;


        // case"/Delete_img":
        //     include_once 'app/utils/Connect.php';

        //     if (isset($_GET["filename"])) {
        //         $filename = $_GET["filename"];
        //         $upload_dir = "uploads/";
            
        //         if (file_exists($upload_dir . $filename)) {
        //             if (unlink($upload_dir . $filename)) {
        //                 echo "Изображение \"$filename\" успешно удалено.";
        //             } else {
        //                 echo "Ошибка при удалении изображения.";
        //             }
        //         } else {
        //             echo "Файл не существует.";
        //         }
        //     } else {
        //         echo "Не указано имя файла для удаления.";
        //     }

        //     break;

        // case"/Add_img":
        //     include_once 'app/utils/Connect.php';

        //     if($_FILES['file']['name'] !== ''){
        //         $file = $_FILES['file'];
        //         $name = $file['name'];
        //         $pathFile = __DIR__.'/img/'.$nameFile;


        //         if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        //             echo 'error';
        //         }
        //     }

        //     $data = $pdo->prepare("INSERT INTO `images` (`image_name`) VALUES (?)");
        //     $data ->execute([$nameFile]);
        
}

?>
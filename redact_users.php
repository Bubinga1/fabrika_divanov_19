<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="delete_users.php" method="POST">
    <div class="mt-4 mb-0">
        <button type="submit" name="id" class="d-grid"><a class="btn btn-primary btn-block">Удалить</a></button>
    </div>
    </form>

    <?php 

require "app\utils\Connect.php";


$id = $_POST["id"];



$queryRedact = "SELECT *FROM `users` WHERE `id`='$id'";

$open = mysqli_query($connect, $queryRedact);
$open = mysqli_fetch_assoc($open);

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Панель администратора</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="css\admin-style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script>
document.addEventListener("DOMContentLoaded", function(){
    var myModal = document.getElementById("myModal");

    myModal.addEventListener("show.bs.modal", function(event){        
        // Get the button that triggered the modal
        var button = event.relatedTarget;
        
        // Extract value from the custom data-* attribute
        var titleData = button.getAttribute("data-title");

        var recipient1 = button.getAttribute('data-id');
        var recipient = button.getAttribute('data-bs-email');
        var recipient = button.getAttribute('data-bs-pass');
        var recipient = button.getAttribute('data-bs-conf');
        var recipient = button.getAttribute('data-bs-name');
        var recipient = button.getAttribute('data-bs-phone');

        // Change modal title
        myModal.querySelector(".modal-title").innerText = titleData;
        myModal.querySelector(".fc-email-data") = recipient1;
        var modalBodyInput = exampleModal.querySelector('.modal-body input')
    });
});

// var exampleModal = document.getElementById('myModal')
// exampleModal.addEventListener('show.bs.modal', function (event) {
//   // Button that triggered the modal
//   var button = event.relatedTarget
//   // Extract info from data-bs-* attributes
  
//   // If necessary, you could initiate an AJAX request here
//   // and then do the updating in a callback.
//   //
//   // Update the modal's content.
//   var modalTitle = exampleModal.querySelector('.modal-title')
 

//   modalTitle.textContent = 'New message to ' + recipient
//   modalBodyInput.value = recipient
// })
</script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="MainAdmin.php">Главная</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Найти..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Профиль</a></li>
                        <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Выйти</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Основное</div>
                            <a class="nav-link" href="MainAdmin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Главная
                            </a>
                            <div class="sb-sidenav-menu-heading">Интерфейс</div>
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div> -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Страницы
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Авторизация
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Авторизация</a>
                                            <a class="nav-link" href="register.php">Регистрация</a>
                                            <a class="nav-link" href="password.php">Восстановление пароля</a>
                                        </nav>
                                    </div>
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Данные</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Метрика
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                БД пользователи
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                        <h1 class="mt-4">БД пользователи</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="MainAdmin.php">Главная</a></li>
                            <li class="breadcrumb-item active"> БД пользователи</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Пользователи 
                            </div>
                    <div class="card-body">
                                <table id="datatablesSimple">
                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Confirm</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Confirm</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            
                                        </tr>
                                    </tfoot>
                            <tbody>
                                <?php

                                    require "app\utils\Connect.php";

                                    $queryInfo = "SELECT * FROM `users`";

                                    $allInfo = mysqli_query($connect, $queryInfo);

                                    $allInfo = mysqli_fetch_all($allInfo);// перемещает все строки в ассоциативный массив

                                    
                                    foreach ($allInfo as $email) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?= $email[0] ?>
                                                        </td>
                                                        <td>
                                                            <a style="font-weight:bold; font-size:1.2rem"><?= $email[1]  ?></a>
                                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end position-relative top-0 start-0">
                                                            <button id="<?php $email[0];?>" email="<?php $email[1];?>" password="<?php $email[2];?>" password_confirm="<?php $email[3];?>" name="<?php $email[4];?>" number="<?php $email[5];?>" type="button" class="btn-red btn btn-primary btn-sm mx-auto me-md-2" data-bs-toggle="modal" data-bs-target="#myModal" data-title=" Пользователь: <?= $email[1]?>"  
                                                            data-id="<?= $email[0]?>" data-bs-email="<?= $email[1]?>" data-pass="<?= $email[2]?>" data-conf="<?= $email[3]?>" data-name="<?= $email[4]?>" data-phone="<?= $email[5]?>">Редактирование</button>
                                                            <a  href="delete_users.php/?id=<?= $email[0] ?>"> <button type="button" class="btn btn-danger btn-sm ">Удалить</button></a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?= $email[2] ?>
                                                        </td>
                                                        <td>
                                                            <?= $email[3] ?>
                                                        </td>
                                                        
                                                        <td>
                                                            <?= $email[4] ?>
                                                        </td>
                                                        <td>
                                                            <?= $email[5] ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                    }
                                ?>                  
<script>
    $('.btn-red').click(function () {//клик на кнопку
var id = $(this).attr('id'); //получаем id этой кнопки
var email = $(this).attr('email'); //получаем категорию - имя таблицы из которой потом запрашивать данные
var password = $(this).attr('password');
var password_confirm = $(this).attr('password_confirm');
var name = $(this).attr('name');
var number = $(this).attr('number');
console.log(id);
console.log(email);
console.log(password);
console.log(password_confirm);
console.log(name);
console.log(number);
$.ajax({//передаем ajax-запросом данные
type: "POST", //метод передачи данных
url: 'function/cart/addtocart.php',//php-файл для обработки данных
data: {user_data: data-id, cat_tov: cat},//передаем наши данные
success: function(data) {//
$('.basker_kol').html(data);//меняем количество товаров на кнопке корзины
}
});

});
</script>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </main>

<!-- Модальное окно -->
<div class="m-4">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="update.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Модальное окно</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                    <input class="fc-email-data" type="hidden" name="id" value="data-id">     
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="text" class="form-control " name="email" value="data-bs-email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password:</label>
                                <input class="form-control" type="password" name="password" value="data-pass " ></input>
                            </div>    
                            <div class="mb-3">
                                <label class="form-label">Confirm:</label>
                                <input class="form-control" type="password" name="confirm"value="data-conf " ></input>
                            </div> 
                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input class="form-control" type="text" name="name" value="data-name "></input>
                            </div> 
                            <div class="mb-3">
                                <label class="form-label">Number:</label>
                                <input class="form-control" type="number" name="number" value="data-phone "></input>
                            </div>  
                                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <?php print_r($_POST) ;?>
            </div>
        </div>
    </div>
</div>


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="app\Admin\js\scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="app\Admin\js\datatables-simple-demo.js"></script>
    </body>
</html>

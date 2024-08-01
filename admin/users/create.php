<?php
include '../../app/controllers/new-users.php';
?>

<!doctype html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/9274d788a8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>World PC</title>

</head>
<body>

<?php
include("../../app/include/header-admin.php");
?>

<div class="container">
    <div class="row">
        <?php include "../../app/include/sidebar-admin.php" ?>

        <div class="posts col-10">
            <div class="row title-table">
                <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-2 btn  btn-success">Добавить</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-3  btn btn-warning">Управлять</a>
            </div>
            <div class="row title-table">
                <h2>Создать пользователя</h2>
            </div>

            <div class="mb-3 col-12 col-md-4 err">
                <!-- Вывод массива с ошибками -->
                <?php include "../../app/helps/errorinfo.php";?>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <select name="user" class="form-select" aria-label="Default select example">
                        <option value="0">user</option>
                        <option value="1">admin</option>
                    </select>
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input name="login" value="<?php echo $login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Логин">
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Ваш email</label>
                        <input name="email" value="<?php echo $email ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
                        <input name="password-one" type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="password-first" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите пароль">
                    </div>
                    <div class="col-12">
                        <button name="button-reg" class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>>
<?php
include("../../app/include/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>


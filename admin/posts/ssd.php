<?php
include '../../app/controllers/towar.php';
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
                <a href="<?php echo BASE_URL . "admin/posts/create.php?". $smen = "3";?>" class="col-2 btn  btn-success">Добавить</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/posts/ram.php";?>" class="col-3  btn btn-warning">Управлять</a>
            </div>
            <div class="row title-table">

                <h2>Управление SSD</h2>
                <div class="col-1">ID</div>
                <div class="col-2">Название</div>
                <div class="col-2">Цена</div>
                <div class="col-2">На складе</div>
                <div class="col-2">Гарантия</div>
                <div class="col-3">Управление</div>
            </div>
            <?php foreach ($ssde as $key => $rams):?>
                <div class="row post">
                    <div class="id col-1"><?= $key + 1; ?></div>
                    <div class="title col-2"><?= $rams['name']; ?></div>
                    <div class="title col-2"><?= $rams['chen']; ?></div>
                    <div class="title col-2"><?= $rams['nalich']; ?></div>
                    <div class="title col-2"><?= $rams['garant']; ?></div>
                    <div class="red col-2"><a href="edit.php?id_ssd=<?= $rams['id'];?>">Изменить</a></div>
                    <div class="del col-1"><a href="edit.php?del_ssd=<?= $rams['id']; ?>">Удалить</a></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

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



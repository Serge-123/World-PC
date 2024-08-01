<?php
include("path.php");
include SITE_ROOT . '/app/controllers/towar.php';
?>
<!doctype html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/9274d788a8.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>World PC</title>

</head>

<body>
<?php
include("app/include/header.php");
?>

<!--Main content-->
<div class="container">
    <div class="contact row">
        <div class="main-content col-12">
            <h1 class="text">Личный кабинет</h1>
            <div class="post row">
                <div class="col-12 col-md-4">
                    <div class="col">
                            <img src="<?=BASE_URL . 'assets/images/user.png'?>" class="s-block w-100" alt="...">
                    </div>
                </div>
                <div class="row post_text col-md-8 parents">
                    <div class="col-12">
                        <div class="container-opis">
                            <h2 class="text">Ваше имя: <?php echo $_SESSION['login']; ?></h2>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="container-opis">
                            <h3 class="text">Привязаная почта: <?php echo $_SESSION['email']?></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container-opis">
                            <?php if($_SESSION['admin']==="1"):?>
                                <h3 class="text">Ваш статус: Админ</h3>
                            <?php elseif ($_SESSION['admin'] === "0"):?>
                                <h3 class="text">Ваш статус: Клиент</h3>
                            <?php else:?>
                                <h3 class="text">Ваш статус: Клиент</h3>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post row">
            <div class="post_text col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <h2>Список заказов</h2>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="row accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <h3>Здесь в течении 10 дней будут висеть ваши заказы в ожидании вас в нашем магазине</h3>

                                <div class="post row">
                                    <div class="img  col-md-3">
                                        <img src="<?=BASE_URL . 'assets/images/mram/' . $ram['img']?>" alt="" class="img-thumbnail">
                                    </div>
                                    <div class="post_text col-12 col-md-8">
                                        <h3 class="text">
                                            <a href="<?php echo BASE_URL . "single.php?id_ram=".$ram['id'];?>"><?= $ram['name']?></a>
                                        </h3>
                                        <div class="text">
                                            <div class="col-8">
                                                <h3 class="text">В наличии: <?= $ram['nalich']?></h3>
                                            </div>
                                            <div class="col-4">
                                                <h3 class="text">Цена: <?=$ram['chen']?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include("app/include/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>

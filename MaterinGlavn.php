<?php
include 'path.php';
include SITE_ROOT . '/app/controllers/towar.php';
$ram =selectAll('mat');
$Karusel = selectAllFromKaruselWithUsers('mat');
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


<div class="container">
    <!--Блок карусель Start-->
    <div class="row">
        <h2 class="slider-titel">Новинки магазина</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <?php foreach ($Karusel as $key => $kar):?>
            <?php if($key == 0):?>
            <div class="carousel-item active">
                <?php else:?>
                <div class="carousel-item">
                    <?php endif;?>
                    <img src="<?=BASE_URL . 'assets/images/materinka/' . $kar['img']?>" class="d-block w-100 first" alt="...">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="<?php echo BASE_URL . "single.php?id_mat=" . $kar['id']?>"><?=$kar['name']?></a></h5>
                    </div>
                </div>

                <?php endforeach;?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Блок карусель END-->

    <!--Main content-->
    <div class="container">
        <div class="content row">
            <div class="main-content col-md-9 ">
                <h4>Материнская плата</h4>
                <?php foreach ($ram as $rams):?>
                    <div class="post row">
                        <div class="img  col-md-3">
                            <img src="<?=BASE_URL . 'assets/images/materinka/' . $rams['img']?>" alt="" class="img-thumbnail">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h4>
                                <a href="<?php echo BASE_URL . "single.php?id_mat=".$rams['id'];?>"><?= $rams['name']?></a>
                            </h4>
                            <div class="container row">
                                <div class="col-8">
                                    <h4>В наличии: <?= $rams['nalich']?></h4>
                                </div>
                                <div class="col-4">
                                    <h4>Цена: <?=$rams['chen']?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <!--sidebar content-->
            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3 class="kategor">Поиск</h3>
                    <form action="search.php" method="post">
                        <input type="text" name="search-mat" class="text-input" placeholder="Введите искомый товар...">
                    </form>
                </div>
                <div class="section topics">
                    <h3 class="kategor">Категории</h3>
                    <ul>
                        <li><a href="<?php echo BASE_URL . "index.php"?>">Оперативная память</a></li>
                        <li><a href="<?php echo BASE_URL . "VideoGlavn.php"?>">Видеокарты</a></li>
                        <li><a href="<?php echo BASE_URL . "SsdGlavn.php"?>">Твердотельные накопители SSD</a></li>
                        <li><a href="<?php echo BASE_URL . "ProccGlavn.php"?>">Процессоры</a></li>
                        <li><a href="<?php echo BASE_URL . "MaterinGlavn.php"?>">Материнские платы</a></li>
                        <li><a href="<?php echo BASE_URL . "PitGlavn.php"?>">Блоки питания</a></li>
                        <li><a href="<?php echo BASE_URL . "HddGlavn.php"?>">Жесткие диски HDD</a></li>
                        <li><a href="<?php echo BASE_URL . "OxladGlavn.php"?>">Охлаждения компьютера</a></li>
                    </ul>
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
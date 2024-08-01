<?php
include 'path.php';
include SITE_ROOT . '/app/controllers/towar.php';
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ram'])) {
    $ram = Poisk($_POST['search-ram'], 'ram');
    $teg = "id_ram=";
    $poisk = "ram";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-pit'])){
    $ram = Poisk($_POST['search-pit'], 'pitanie');
    $teg = "id_pit=";
    $poisk = "pit";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-hdd'])){
    $ram = Poisk($_POST['search-hdd'], 'hdd');
    $teg = "id_hdd=";
    $poisk = "hdd";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ssd'])){
    $ram = Poisk($_POST['search-ssd'], 'ssd');
    $teg = "id_ssd=";
    $poisk = "ssd";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-mat'])){
    $ram = Poisk($_POST['search-mat'], 'mat');
    $teg = "id_mat=";
    $poisk = "mat";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ven'])){
    $ram = Poisk($_POST['search-ven'], 'ventilator');
    $teg = "id_ven=";
    $poisk = "ven";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-pro'])){
    $ram = Poisk($_POST['search-pro'], 'procc');
    $teg = "id_pro=";
    $poisk = "pro";
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-vid'])){
    $ram = Poisk($_POST['search-vid'], 'videokarta');
    $teg = "id_vid=";
    $poisk = "vid";
}
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
<!--Main content-->
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9 ">
            <?php if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ram'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-ram']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-pit'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-pit']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ven'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-ven']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-vid'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-vid']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-pro'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-pro']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-mat'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-mat']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-hdd'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-hdd']?></h4>
            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ssd'])):?>
                <h4>Результаты поиска по запросу: <?=$_POST['search-ssd']?></h4>
            <?php endif;?>
            <?php foreach ($ram as $rams):?>
                <div class="post row">
                    <div class="img  col-md-3">
                        <?php if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ram'])):?>
                            <img src="<?=BASE_URL . 'assets/images/mram/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-pit'])):?>
                            <img src="<?=BASE_URL . 'assets/images/pit/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ven'])):?>
                            <img src="<?=BASE_URL . 'assets/images/oxlad/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-vid'])):?>
                            <img src="<?=BASE_URL . 'assets/images/ivideo/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-pro'])):?>
                            <img src="<?=BASE_URL . 'assets/images/procc/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-mat'])):?>
                            <img src="<?=BASE_URL . 'assets/images/materinka/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-hdd'])):?>
                            <img src="<?=BASE_URL . 'assets/images/HDD/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search-ssd'])):?>
                            <img src="<?=BASE_URL . 'assets/images/SSD/' . $rams['img']?>" alt="" class="img-thumbnail">
                        <?php endif;?>
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h4>
                            <a href="<?php echo BASE_URL . "single.php?" . $teg . $rams['id']?>"><?= $rams['name']?></a>
                        </h4>
                        <div class="container row">
                            <div class="col-8">
                                <h4>В наличии <?= $rams['nalich']?></h4>
                            </div>
                            <div class="col-4">
                                <h4><?=$rams['chen']?></h4>
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
                <input type="text" name="search-<?=$poisk?>" class="text-input" placeholder="Введите искомый товар...">
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
</div>
<?php
include("app/include/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
--><>
</body>
</html>
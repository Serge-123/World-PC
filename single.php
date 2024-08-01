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
            <h4><?=$name?></h4>
            <div class="post row">
                <div class="col-12 col-md-4">
                    <div class="col">
                        <?php if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ram"])):?>
                            <img src="<?=BASE_URL . 'assets/images/mram/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_vid"])):?>
                            <img src="<?=BASE_URL . 'assets/images/ivideo/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ssd"])):?>
                            <img src="<?=BASE_URL . 'assets/images/SSD/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_hdd"])):?>
                            <img src="<?=BASE_URL . 'assets/images/HDD/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pro"])):?>
                            <img src="<?=BASE_URL . 'assets/images/procc/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_mat"])):?>
                            <img src="<?=BASE_URL . 'assets/images/materinka/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pit"])):?>
                            <img src="<?=BASE_URL . 'assets/images/pit/' . $img?>" class="s-block w-100" alt="...">
                        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ven"])):?>
                            <img src="<?=BASE_URL . 'assets/images/oxlad/' . $img?>" class="s-block w-100" alt="...">
                        <?php endif;?>
                    </div>
                </div>
                <div class="row post_text col-md-8 parents">
                    <div class="col-8">
                        <div class="container-opis">
                            <h2 class="text">Стоимость товара: <?=$chen?></h2>
                        </div>
                    </div>
                    <div class="col">
                        <a href="<?php echo BASE_URL . "home.php?id_ram=2"?>" class="btn btn-single btn-info">Заказать</a>

                    </div>
                    <div class="col-5">
                        <div class="container-opis">
                            <h3 class="text">В наличии: <?=$nalich?></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container-opis">
                            <h3 class="text">Страна производитель: <?=$strana?></h3>
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
                                <h2>Характеристики</h2>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="row accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <?php if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ram"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Тип памяти</li>
                                        <li> Объем</li>
                                        <li> Тактовая частота</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$proizvod?></li>
                                        <li> <?=$tippam?></li>
                                        <li> <?=$obiem?></li>
                                        <li> <?=$takt?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_vid"])):?>
                            <div class="specifications-section specifications-topics col">
                                <ul>
                                    <li> Гарантия</li>
                                    <li> Код производителя</li>
                                    <li> Графический процессор</li>
                                    <li> Эффективная частота памяти</li>
                                    <li> Объем видеопамяти</li>
                                    <li> Модель</li>
                                </ul>
                            </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$GrafProce?></li>
                                        <li> <?=$Frequency?></li>
                                        <li> <?=$ObiemPam?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_hdd"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Объем кэш-памяти</li>
                                        <li> Объем HDD</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$obiemKesh?></li>
                                        <li> <?=$obiemHDD?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_mat"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Тип поддерживаемой памяти</li>
                                        <li> Чипсет</li>
                                        <li> Сокет</li>
                                        <li> Форм-фактор</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$TipPam?></li>
                                        <li> <?=$ChipSet?></li>
                                        <li> <?=$soket?></li>
                                        <li> <?=$FormFakt?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pit"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Мощность</li>
                                        <li> Форм-фактор</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$moshi?></li>
                                        <li> <?=$FormFakt?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pro"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Количество ядер</li>
                                        <li> Количество потокав</li>
                                        <li> Базовая частота</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$iadra?></li>
                                        <li> <?=$potoki?></li>
                                        <li> <?=$chastota?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ven"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Максимальная скорость вращения</li>
                                        <li> Максимальный воздушный поток</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$maxScor?></li>
                                        <li> <?=$maxPotok?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ssd"])):?>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> Гарантия</li>
                                        <li> Код производителя</li>
                                        <li> Объем</li>
                                        <li> Максимальная скорость чтения</li>
                                        <li> Максимальная скорость записи</li>
                                        <li> Модель</li>
                                    </ul>
                                </div>
                                <div class="specifications-section specifications-topics col">
                                    <ul>
                                        <li> <?=$garant?></li>
                                        <li> <?=$KodProizvod?></li>
                                        <li> <?=$Obiem?></li>
                                        <li> <?=$MaksSkorCtenia?></li>
                                        <li> <?=$MaksSkorZap?></li>
                                        <li> <?=$model?></li>
                                    </ul>
                                </div>
                                <?php endif;?>
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
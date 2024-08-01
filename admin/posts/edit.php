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
                <a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-2 btn  btn-success">Добавить</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/posts/ram.php";?>" class="col-3  btn btn-warning">Управлять</a>
            </div>
            <div class="row title-table">
                <h2>Редактирование товара</h2>
            </div>
            <div class="row add-post">
                <form action="edit.php" method="post">
                    <div class="mb-3 col-12 col-md-4 err">
                        <!-- Вывод массива с ошибками -->
                        <?php include "../../app/helps/errorinfo.php";?>
                    </div>
                    <?php if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ram"])):?>
                    <div class="col">
                        <input name="id" value="<?=$id;?>" type="hidden">
                    </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiem" value="<?=$obiem?>" type="text" class="form-control" placeholder="Объем" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="takt" value="<?=$takt?>" type="text" class="form-control" placeholder="Тактовая частота" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="proizvod"value="<?=$proizvod?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="tippam" value="<?=$tippam?>" type="text" class="form-control" placeholder="Тип памяти" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                    <div class="col-12">
                        <button name="edit-ram" class="btn btn-primary" type="submit">Изменить</button>
                    </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_hdd"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiemHDD" value="<?=$obiemHDD?>" type="text" class="form-control" placeholder="Объем HDD" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiemKesh" value="<?=$obiemKesh?>" type="text" class="form-control" placeholder="Объем кэш-памяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-hdd" class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_vid"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="ObiemPam" value="<?=$ObiemPam?>" type="text" class="form-control" placeholder="Объем видеопамяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="Frequency" value="<?=$Frequency?>" type="text" class="form-control" placeholder="Эффективная частота памяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="GrafProce" value="<?=$GrafProce?>" type="text" class="form-control" placeholder="Графический процессор" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-vid"  class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_mat"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="soket" value="<?=$soket?>" type="text" class="form-control" placeholder="Сокет" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="ChipSet" value="<?=$ChipSet?>" type="text" class="form-control" placeholder="Чипсет" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="TipPam" value="<?=$TipPam?>" type="text" class="form-control" placeholder="Тип поддерживаемой памяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="FormFakt" value="<?=$FormFakt?>" type="text" class="form-control" placeholder="Форм-фактор" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-mat" class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pit"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen;?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich;?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model;?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="moshi" value="<?=$moshi;?>" type="text" class="form-control" placeholder="Мощность" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana;?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant;?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod;?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="FormFakt" value="<?=$FormFakt;?>" type="text" class="form-control" placeholder="Форм-фактор" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-pit" class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pro"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen;?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich;?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant;?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model;?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="iadra" value="<?=$iadra;?>" type="text" class="form-control" placeholder="Количество ядер" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana;?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod;?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="potoki" value="<?=$potoki;?>" type="text" class="form-control" placeholder="Количество потокав" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chastota" value="<?=$chastota;?>" type="text" class="form-control" placeholder="Базовая частота" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-pro" class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ven"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen;?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich;?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="maxScor" value="<?=$maxScor;?>" type="text" class="form-control" placeholder="Максимальная скорость вращения" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model;?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="maxPotok" value="<?=$maxPotok;?>" type="text" class="form-control" placeholder="Максимальный воздушный поток" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana;?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant;?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod;?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-ven" class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ssd"])):?>
                        <div class="col">
                            <input name="id" value="<?=$id;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="spay-imd" value="<?=$img;?>" type="hidden">
                        </div>
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" value="<?=$chen;?>" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" value="<?=$nalich;?>" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" value="<?=$garant;?>" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" value="<?=$model;?>" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiem" value="<?=$Obiem;?>" type="text" class="form-control" placeholder="Объем" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" value="<?=$strana;?>" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" value="<?=$KodProizvod;?>" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="MaksSkorCtenia" value="<?=$MaksSkorCtenia;?>" type="text" class="form-control" placeholder="Максимальная скорость чтения" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="MaksSkorZap" value="<?=$MaksSkorZap;?>" type="text" class="form-control" placeholder="Максимальная скорость записи" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img"  type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Оставить в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="edit-ssd" class="btn btn-primary" type="submit">Изменить</button>
                        </div>
                    <?php endif;?>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    --></div>
<?php
include("../../app/include/footer.php");
?>
</body>
</html>



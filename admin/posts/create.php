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
                <span class="col-1"></span>
                <?php if($smena === "1"):?>
                <a href="<?php echo BASE_URL . "admin/posts/ram.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === ""):?>
                    <a href="<?php echo BASE_URL . "admin/posts/ram.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "2"):?>
                    <a href="<?php echo BASE_URL . "admin/posts/video.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "3"):?>
                    <a href="<?php echo BASE_URL . "admin/posts/ssd.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "4"):?>
                    <a href="<?php echo BASE_URL . "admin/posts/procc.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "5"):?>
                    <a href="<?php echo BASE_URL . "admin/posts/mat.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "6"):?>
                    <a href="<?php echo BASE_URL . "admin/posts/pit.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "7"):?>
                    <a href="<?php echo BASE_URL . "admin/posts/hdd.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php elseif ($smena === "8"):?>
                <a href="<?php echo BASE_URL . "admin/posts/vent.php";?>" class="col-2  btn btn-warning">Управлять</a>
                <?php endif;?>
            </div>
            <div class="row title-table">
                <h2>Добавление товара</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 col-12 col-md-4 err">
                        <!-- Вывод массива с ошибками -->
                        <?php include "../../app/helps/errorinfo.php";?>
                    </div>
                    <div class="container">
                        <div class="row">
                    <div class="col-9">
                    <select name="smena" id="smena" class="form-select" aria-label="Default select example">
                        <?php if ($smena === ""):?>
                            <option>Выбрать тип товара</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "1"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="1">Оперативная память</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "2"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="2">Видеокарты</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "3"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "4"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="4">Процессоры</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif($smena === "5"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="5">Материнские платы</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "6"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="6">Блоки питания</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "7"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="1">Оперативная память</option>
                            <option  value="8">Охлаждения компьютера</option>
                        <?php elseif ($smena === "8"):?>
                            <p style="color: red"><?=$errorMsg?></p>
                            <option  value="8">Охлаждения компьютера</option>
                            <option  value="2">Видеокарты</option>
                            <option  value="3">Твердотельные накопители SSD</option>
                            <option  value="4">Процессоры</option>
                            <option  value="5">Материнские платы</option>
                            <option  value="6">Блоки питания</option>
                            <option  value="7">Жесткие диски HDD</option>
                            <option  value="1">Оперативная память</option>
                        <?php endif;?>
                    </select>
                    </div>
                             <div class="col">
                                <button name="topic-smena"  class="btn btn-primary" type="submit">Сменить тип товара</button>
                             </div>
                        </div>
                    </div>
                    <?php if($smena === "1"):?>
                    <div class="col">
                        <input name="names" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="obiem" type="text" class="form-control" placeholder="Объем" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="takt" type="text" class="form-control" placeholder="Тактовая частота" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="proizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                    </div>
                    <div class="col">
                        <input name="tip-pam" type="text" class="form-control" placeholder="Тип памяти" aria-label="First name">
                    </div>
                    <div class="input-group mb-3">
                        <input name="img" type="file" class="form-control" id="img1">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                    <div class="col-12">
                        <button name="ram" class="btn btn-primary" type="submit">Сохранить запись</button>
                    </div>
                    <?php elseif ($smena === "2"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chens" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalichs" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garants" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="models" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="ObiemPam" type="text" class="form-control" placeholder="Объем видеопамяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="Frequency" type="text" class="form-control" placeholder="Эффективная частота памяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="stran" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="GrafProce" type="text" class="form-control" placeholder="Графический процессор" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="video" class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    <?php elseif($smena === "3"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiem" type="text" class="form-control" placeholder="Объем" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="MaksSkorCtenia" type="text" class="form-control" placeholder="Максимальная скорость чтения" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="MaksSkorZap" type="text" class="form-control" placeholder="Максимальная скорость записи" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="SSD" class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    <?php elseif($smena === "4"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="iadra" type="text" class="form-control" placeholder="Количество ядер" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="potoki" type="text" class="form-control" placeholder="Количество потокав" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chastota" type="text" class="form-control" placeholder="Базовая частота" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="proccesor" class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    <?php elseif($smena === "5"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="soket" type="text" class="form-control" placeholder="Сокет" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="ChipSet" type="text" class="form-control" placeholder="Чипсет" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="TipPam" type="text" class="form-control" placeholder="Тип поддерживаемой памяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="FormFakt" type="text" class="form-control" placeholder="Форм-фактор" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="materinka" class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    <?php elseif($smena === "6"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="moshi" type="text" class="form-control" placeholder="Мощность" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="FormFakt" type="text" class="form-control" placeholder="Форм-фактор" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="pit" class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    <?php elseif($smena === "7"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiemHDD" type="text" class="form-control" placeholder="Объем HDD" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="obiemKesh" type="text" class="form-control" placeholder="Объем кэш-памяти" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="HDD" class="btn btn-primary" type="submit">Сохранить запись</button>
                        </div>
                    <?php elseif($smena === "8"):?>
                        <div class="col">
                            <input name="name" type="text" class="form-control" placeholder="Название товара" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="chen" type="text" class="form-control" placeholder="Цена" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="nalich" type="text" class="form-control" placeholder="Наличие на складе" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="maxScor" type="text" class="form-control" placeholder="Максимальная скорость вращения" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="model" type="text" class="form-control" placeholder="Модель" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="maxPotok" type="text" class="form-control" placeholder="Максимальный воздушный поток" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="strana" type="text" class="form-control" placeholder="Страна" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="garant" type="text" class="form-control" placeholder="Гарантия" aria-label="First name">
                        </div>
                        <div class="col">
                            <input name="KodProizvod" type="text" class="form-control" placeholder="Код производителя" aria-label="First name">
                        </div>
                        <div class="input-group mb-3">
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="form-check form-switch">
                            <input name="karusel" class="form-check-input" value="1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Показать новинку в карусели</label>
                        </div>
                        <div class="col-12">
                            <button name="Oxlad" class="btn btn-primary" type="submit">Сохранить запись</button>
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


<?php
const SITE_RAAT = __DIR__;
include SITE_RAAT . '/../../app/database/db.php';
define("ROOT_PATH",realpath(dirname(__FILE__)));

$errorMsg = [];
$smena = '';
$id = '';
$ram = selectAll('ram');
$hdd = selectAll('hdd');
$vid = selectAll('videokarta');
$mat = selectAll('mat');
$pit = selectAll('pitanie');
$proccesor = selectAll('procc');
$ssde = selectAll('ssd');
$vent = selectAll('ventilator');
$msg = "";

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["msg"])){
    $msg = $_POST["msg"];
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["1"])){
    $smena = "1";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["2"])){
    $smena = "2";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["3"])){
    $smena = "3";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["4"])){
    $smena = "4";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["5"])){
    $smena = "5";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["6"])){
    $smena = "6";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["7"])){
    $smena = "7";
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["8"])){
    $smena = "8";
}

//Смена типа товара
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["topic-smena"])){
    $smena = $_POST["smena"];
}

//Добавление оперативной памяти
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["ram"])){

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\mram\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }
    $name= trim($_POST["names"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $obiem = trim($_POST["obiem"]);
    $model= trim($_POST["model"]);
    $takt = trim($_POST["takt"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $proizvod= trim($_POST["proizvod"]);
    $tip_pam = trim($_POST["tip-pam"]);



    if($name === '' || $chen === '' || $nalich === ''|| $obiem === '' || $model === '' || $takt === '' ||  $strana === '' ||$garant === '' || $proizvod === '' || $tip_pam === ''){
        array_push($errorMsg,  "Не все поля заполнены!");
    }elseif (mb_strlen($name,'UTF8') < 2) {
        $errorMsg =array_push($errorMsg,  "Имя должно быть более 2-х символов");
    }else {

        $existence = selectOne("ram", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg[] = "Такой товар уже есть";
        }else {

                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'obiem' => $obiem,
                    'model' => $model,
                    'takt' => $takt,
                    'strana' => $strana,
                    'garant' => $garant,
                    'proizvod' => $proizvod,
                    'TipPam' => $tip_pam,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];


            $id = insert('ram', $towar);
            $towar = selectOne('ram', ['id' => $id]);
            header('location: '. BASE_URL .'../../ram.php');
            }
        }
}

//Добавление видеокарты
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["video"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\ivideo\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chens"]);
    $nalich = trim($_POST["nalichs"]);
    $ObiemPam = trim($_POST["ObiemPam"]);
    $model = trim($_POST["models"]);
    $Frequency = trim($_POST["Frequency"]);
    $strana = trim($_POST["stran"]);
    $garant = trim($_POST["garants"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $GrafProce = trim($_POST["GrafProce"]);



    if ($name === '' || $chen === '' || $nalich === '' || $ObiemPam === '' || $model === '' || $Frequency === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $GrafProce === '') {
        $errorMsg[] = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg[] = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("videokarta", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg[] = "Такой товар уже есть";
        } else{
                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'ObiemPam' => $ObiemPam,
                    'model' => $model,
                    'Frequency' => $Frequency,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'GrafProce' => $GrafProce,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
        $id = insert('videokarta', $towar);
        $towar = selectOne('videokarta', ['id' => $id]);
            header('location: '. BASE_URL .'../../video.php');
        }
    }
}

//Добавления SSD
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["SSD"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\SSD\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $Obiem = trim($_POST["obiem"]);
    $model = trim($_POST["model"]);
    $MaksSkorZap = trim($_POST["MaksSkorZap"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $MaksSkorCtenia = trim($_POST["MaksSkorCtenia"]);



    if ($name === '' || $chen === '' || $nalich === '' || $Obiem === '' || $model === '' || $MaksSkorZap === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $MaksSkorCtenia === '') {
        $errorMsg[] = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("ssd", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg[] = "Такой товар уже есть";
        } else{
                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'Obiem' => $Obiem,
                    'model' => $model,
                    'MaksSkorZap' => $MaksSkorZap,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'MaksSkorCtenia' => $MaksSkorCtenia,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
            $id = insert('ssd', $towar);
            $towar = selectOne('ssd', ['id' => $id]);
            header('location: '. BASE_URL .'../../ssd.php');
        }
    }
}

//Добавления процессора
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["proccesor"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\procc\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $iadra = trim($_POST["iadra"]);
    $model = trim($_POST["model"]);
    $potoki = trim($_POST["potoki"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $chastota = trim($_POST["chastota"]);



    if ($name === '' || $chen === '' || $nalich === '' || $iadra === '' || $model === '' || $potoki === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $chastota === '') {
        $errorMsg[] = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg[] = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("procc", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg[] = "Такой товар уже есть";
        } else{

                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'iadra' => $iadra,
                    'model' => $model,
                    'potoki' => $potoki,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'chastota' => $chastota,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
            $id = insert('procc', $towar);
            $towar = selectOne('procc', ['id' => $id]);
            header('location: '. BASE_URL .'../../procc.php');
        }
    }
}

//Добавления материнская плата
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["materinka"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\materinka\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $soket = trim($_POST["soket"]);
    $model = trim($_POST["model"]);
    $ChipSet = trim($_POST["ChipSet"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $TipPam = trim($_POST["TipPam"]);
    $FormFakt = trim($_POST["FormFakt"]);
    $KodProizvod = trim($_POST["KodProizvod"]);


    if ($name === '' || $chen === '' || $nalich === '' || $soket === '' || $model === '' || $ChipSet === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $TipPam === ''|| $FormFakt === ''){
        $errorMsg[] = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg[] = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("mat", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg[] = "Такой товар уже есть";
        } else{

                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'soket' => $soket,
                    'model' => $model,
                    'ChipSet' => $ChipSet,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'TipPam' => $TipPam,
                    'FormFakt' => $FormFakt,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
            $id = insert('mat', $towar);
            $towar = selectOne('mat', ['id' => $id]);
            header('location: '. BASE_URL .'../../mat.php');
        }
    }
}

//Добавления блока питания
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["pit"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\pit\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $model = trim($_POST["model"]);
    $moshi = trim($_POST["moshi"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $FormFakt = trim($_POST["FormFakt"]);
    $KodProizvod = trim($_POST["KodProizvod"]);


    if ($name === '' || $chen === '' || $nalich === '' ||  $model === '' || $moshi === '' || $strana === '' || $garant === '' || $KodProizvod === '' ||  $FormFakt === ''){
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("pitanie", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg = "Такой товар уже есть";
        } else{
                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'model' => $model,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'moshi' => $moshi,
                    'FormFakt' => $FormFakt,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
            $id = insert('pitanie', $towar);
            $towar = selectOne('pitanie', ['id' => $id]);
            header('location: '. BASE_URL .'../../pit.php');
        }
    }
}

//Добавления HDD
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["HDD"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\HDD\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $model = trim($_POST["model"]);
    $obiemHDD = trim($_POST["obiemHDD"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $obiemKesh = trim($_POST["obiemKesh"]);
    $KodProizvod = trim($_POST["KodProizvod"]);


    if ($name === '' || $chen === '' || $nalich === '' ||  $model === '' || $obiemHDD === '' || $strana === '' || $garant === '' || $KodProizvod === '' ||  $obiemKesh === ''){
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("hdd", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg = "Такой товар уже есть";
        } else{
                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'model' => $model,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'obiemHDD' => $obiemHDD,
                    'obiemKesh' => $obiemKesh,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
            $id = insert('hdd', $towar);
            $towar = selectOne('hdd', ['id' => $id]);
            header('location: '. BASE_URL .'../../hdd.php');
        }
    }
}

//Добавления ventilator
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Oxlad"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $destination = ROOT_PATH . "\..\..\assets\images\oxlad\\" . $imgName;

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg = 'Ошибка загрузки изображения на серввер';
        }
    }else{
        $errorMsg = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $model = trim($_POST["model"]);
    $maxScor = trim($_POST["maxScor"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $maxPotok = trim($_POST["maxPotok"]);
    $KodProizvod = trim($_POST["KodProizvod"]);



    if ($name === '' || $chen === '' || $nalich === '' ||  $model === '' || $maxScor === '' || $strana === '' || $garant === '' || $KodProizvod === '' ||  $maxPotok === ''){
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("ventilator", ['name' => $name]);
        if ($existence['name'] === $name){
            $errorMsg = "Такой товар уже есть";
        } else{
                $towar = [
                    'name' => $name,
                    'chen' => $chen,
                    'nalich' => $nalich,
                    'model' => $model,
                    'strana' => $strana,
                    'garant' => $garant,
                    'KodProizvod' => $KodProizvod,
                    'maxScor' => $maxScor,
                    'maxPotok' => $maxPotok,
                    'img' => $_POST["img"],
                    'karusel' => $_POST["karusel"]
                ];
            $id = insert('ventilator', $towar);
            $towar = selectOne('ventilator', ['id' => $id]);
            header('location: '. BASE_URL .'../../vent.php');
        }
    }
}

//Изменения данных ram
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ram"])){
    $id = $_GET['id_ram'];
    $ram = selectOne("ram", ['id' => $id]);
    $id = $ram['id'];
    $name = $ram['name'];
    $nalich = $ram['nalich'];
    $chen = $ram['chen'];
    $obiem = $ram['obiem'];
    $model= $ram['model'];
    $takt = $ram['takt'];
    $strana = $ram['strana'];
    $garant = $ram['garant'];
    $proizvod= $ram['proizvod'];
    $tippam = $ram['TipPam'];
    $img = $ram['img'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-ram"])){

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\mram\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }
    $name= trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $obiem = trim($_POST["obiem"]);
    $model= trim($_POST["model"]);
    $takt = trim($_POST["takt"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $proizvod= trim($_POST["proizvod"]);
    $TipPams = trim($_POST["tippam"]);
    $img = $_POST["spay-img"];

    if($name === '' || $chen === '' || $nalich === ''|| $obiem === '' || $model === '' || $takt === '' ||  $strana === '' ||$garant === '' || $proizvod === '' || $TipPams === ''){
        $errorMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($name,'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    }else {
        $existence = selectOne("ram", ['name' => $name]);
        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }
            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'obiem' => $obiem,
                'model' => $model,
                'takt' => $takt,
                'strana' => $strana,
                'garant' => $garant,
                'proizvod' => $proizvod,
                'TipPam' => $TipPams,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id = update('ram', $id, $towar);
            header('location: '. BASE_URL .'../../ram.php');
        }
}

//Изменения данных hdd
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_hdd"])){
    $id = $_GET['id_hdd'];
    $hdd = selectOne("hdd", ['id' => $id]);
    $id = $hdd['id'];
    $name = $hdd['name'];
    $nalich = $hdd['nalich'];
    $chen = $hdd['chen'];
    $obiemKesh = $hdd['obiemKesh'];
    $model= $hdd['model'];
    $obiemHDD = $hdd['obiemHDD'];
    $strana = $hdd['strana'];
    $garant = $hdd['garant'];
    $KodProizvod= $hdd['KodProizvod'];
    $img = $hdd['img'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-hdd"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\HDD\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $model = trim($_POST["model"]);
    $obiemHDD = trim($_POST["obiemHDD"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $obiemKesh = trim($_POST["obiemKesh"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $img = $_POST["spay-img"];

    if ($name === '' || $chen === '' || $nalich === '' || $model === '' || $obiemHDD === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $obiemKesh === '') {
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("hdd", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

        $towar = [
            'name' => $name,
            'chen' => $chen,
            'nalich' => $nalich,
            'model' => $model,
            'strana' => $strana,
            'garant' => $garant,
            'KodProizvod' => $KodProizvod,
            'obiemHDD' => $obiemHDD,
            'obiemKesh' => $obiemKesh,
            'karusel' => $_POST["karusel"]
        ];

        $id = $_POST['id'];
        $towar_id = update('hdd', $id, $towar);
        header('location: ' . BASE_URL . '../../hdd.php');
    }
}

//Изменения видеокарты
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_vid"])){
    $id = $_GET['id_vid'];
    $vid = selectOne("videokarta", ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $nalich = $vid['nalich'];
    $chen = $vid['chen'];
    $ObiemPam = $vid['ObiemPam'];
    $model = $vid['model'];
    $Frequency = $vid['Frequency'];
    $strana = $vid['strana'];
    $garant = $vid['garant'];
    $KodProizvod= $vid['KodProizvod'];
    $GrafProce = $vid["GrafProce"];
    $img = $vid['img'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-vid"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\ivideo\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $ObiemPam = trim($_POST["ObiemPam"]);
    $model = trim($_POST["model"]);
    $Frequency = trim($_POST["Frequency"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $GrafProce = trim($_POST["GrafProce"]);
    $img = $_POST["spay-img"];


    if ($name === '' || $chen === '' || $nalich === '' || $ObiemPam === '' || $model === '' || $Frequency === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $GrafProce === '') {
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("videokarta", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'ObiemPam' => $ObiemPam,
                'model' => $model,
                'Frequency' => $Frequency,
                'strana' => $strana,
                'garant' => $garant,
                'KodProizvod' => $KodProizvod,
                'GrafProce' => $GrafProce,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id = update('videokarta', $id, $towar);
            header('location: '. BASE_URL .'../../video.php');

        }
}

//Изменения материнская плата
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_mat"])){
    $id = $_GET['id_mat'];
    $vid = selectOne("mat", ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $nalich = $vid['nalich'];
    $chen = $vid['chen'];
    $soket = $vid['soket'];
    $model = $vid['model'];
    $ChipSet = $vid['ChipSet'];
    $strana = $vid['strana'];
    $garant = $vid['garant'];
    $KodProizvod= $vid['KodProizvod'];
    $TipPam = $vid["TipPam"];
    $FormFakt = $vid["FormFakt"];
    $img = $vid['img'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-mat"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\materinka\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $soket = trim($_POST["soket"]);
    $model = trim($_POST["model"]);
    $ChipSet = trim($_POST["ChipSet"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $TipPam = trim($_POST["TipPam"]);
    $FormFakt = trim($_POST["FormFakt"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $img = $_POST["spay-img"];

    if ($name === '' || $chen === '' || $nalich === '' || $soket === '' || $model === '' || $ChipSet === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $TipPam === ''|| $FormFakt === ''){
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("mat", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'soket' => $soket,
                'model' => $model,
                'ChipSet' => $ChipSet,
                'strana' => $strana,
                'garant' => $garant,
                'KodProizvod' => $KodProizvod,
                'TipPam' => $TipPam,
                'FormFakt' => $FormFakt,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id = update('mat', $id, $towar);
            header('location: '. BASE_URL .'../../mat.php');
        }
}

//Изменения блока питания
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pit"])){
    $id = $_GET['id_pit'];
    $vid = selectOne("pitanie", ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $nalich = $vid['nalich'];
    $chen = $vid['chen'];
    $moshi = $vid['moshi'];
    $model = $vid['model'];
    $strana = $vid['strana'];
    $garant = $vid['garant'];
    $KodProizvod= $vid['KodProizvod'];
    $FormFakt = $vid["FormFakt"];
    $img = $vid['img'];
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-pit"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\pit\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $model = trim($_POST["model"]);
    $moshi = trim($_POST["moshi"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $FormFakt = trim($_POST["FormFakt"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $img = $_POST["spay-img"];

    if ($name === '' || $chen === '' || $nalich === '' ||  $model === '' || $moshi === '' || $strana === '' || $garant === '' || $KodProizvod === '' ||  $FormFakt === ''){
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("pitanie", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'model' => $model,
                'strana' => $strana,
                'garant' => $garant,
                'KodProizvod' => $KodProizvod,
                'moshi' => $moshi,
                'FormFakt' => $FormFakt,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id = update('pitanie', $id, $towar);
            header('location: '. BASE_URL .'../../pit.php');
        }
}

//Изменения процессора
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_pro"])){
    $id = $_GET['id_pro'];
    $vid = selectOne("procc", ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $nalich = $vid['nalich'];
    $chen = $vid['chen'];
    $potoki = $vid['potoki'];
    $model = $vid['model'];
    $strana = $vid['strana'];
    $garant = $vid['garant'];
    $KodProizvod= $vid['KodProizvod'];
    $chastota = $vid["chastota"];
    $iadra = $vid["iadra"];
    $img = $vid['img'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-pro"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\procc\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $iadra = trim($_POST["iadra"]);
    $model = trim($_POST["model"]);
    $potoki = trim($_POST["potoki"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $chastota = trim($_POST["chastota"]);
    $img = $_POST["spay-img"];


    if ($name === '' || $chen === '' || $nalich === '' || $iadra === '' || $model === '' || $potoki === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $chastota === '') {
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("procc", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'iadra' => $iadra,
                'model' => $model,
                'potoki' => $potoki,
                'strana' => $strana,
                'garant' => $garant,
                'KodProizvod' => $KodProizvod,
                'chastota' => $chastota,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id = update('procc', $id, $towar);
            header('location: '. BASE_URL .'../../procc.php');
        }
}

//Изменить SSD
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ssd"])){
    $id = $_GET['id_ssd'];
    $vid = selectOne("ssd", ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $nalich = $vid['nalich'];
    $chen = $vid['chen'];
    $Obiem = $vid['Obiem'];
    $model = $vid['model'];
    $strana = $vid['strana'];
    $garant = $vid['garant'];
    $KodProizvod= $vid['KodProizvod'];
    $MaksSkorZap = $vid["MaksSkorZap"];
    $MaksSkorCtenia = $vid["MaksSkorCtenia"];
    $img = $vid['img'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-ssd"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\SSD\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $Obiem = trim($_POST["obiem"]);
    $model = trim($_POST["model"]);
    $MaksSkorZap = trim($_POST["MaksSkorZap"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $MaksSkorCtenia = trim($_POST["MaksSkorCtenia"]);
    $img = $_POST["spay-img"];


    if ($name === '' || $chen === '' || $nalich === '' || $Obiem === '' || $model === '' || $MaksSkorZap === '' || $strana === '' || $garant === '' || $KodProizvod === '' || $MaksSkorCtenia === '') {
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("ssd", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'Obiem' => $Obiem,
                'model' => $model,
                'MaksSkorZap' => $MaksSkorZap,
                'strana' => $strana,
                'garant' => $garant,
                'KodProizvod' => $KodProizvod,
                'MaksSkorCtenia' => $MaksSkorCtenia,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id = update('ssd', $id, $towar);
            header('location: '. BASE_URL .'../../ssd.php');
        }
}

//Изменения ventilator
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id_ven"])){
    $id = $_GET['id_ven'];
    $vid = selectOne("ventilator", ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $nalich = $vid['nalich'];
    $chen = $vid['chen'];
    $model = $vid['model'];
    $strana = $vid['strana'];
    $garant = $vid['garant'];
    $KodProizvod= $vid['KodProizvod'];
    $maxScor = $vid["maxScor"];
    $maxPotok = $vid["maxPotok"];
    $img = $vid['img'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["edit-ven"])) {

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\..\..\assets\images\oxlad\\" . $imgName;

        if(strpos($fileType, 'img') === false){
            $errorMsg[] = "Можно загружать только изображения!!!";
        }

        $result = move_uploaded_file($fileTmpName, $destination);
        if($result){
            $_POST['img'] = $imgName;
        }else{
            $errorMsg[] = "Ошибка загрузки изображения";
        }
    }else{
        $errorMsg[] = 'Ошибка получения картинки';
    }

    $name = trim($_POST["name"]);
    $chen = trim($_POST["chen"]);
    $nalich = trim($_POST["nalich"]);
    $model = trim($_POST["model"]);
    $maxScor = trim($_POST["maxScor"]);
    $strana = trim($_POST["strana"]);
    $garant = trim($_POST["garant"]);
    $maxPotok = trim($_POST["maxPotok"]);
    $KodProizvod = trim($_POST["KodProizvod"]);
    $img = $_POST["spay-img"];

    if ($name === '' || $chen === '' || $nalich === '' ||  $model === '' || $maxScor === '' || $strana === '' || $garant === '' || $KodProizvod === '' ||  $maxPotok === ''){
        $errorMsg = "Не все поля заполнены!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errorMsg = "Имя должно быть более 2-х символов";
    } else {
        $existence = selectOne("ventilator", ['name' => $name]);

        if ($_POST["img"] === ""){
            $img = $_POST["spay-imd"];
        }else{
            $img = $_POST["img"];
        }

            $towar = [
                'name' => $name,
                'chen' => $chen,
                'nalich' => $nalich,
                'model' => $model,
                'strana' => $strana,
                'garant' => $garant,
                'KodProizvod' => $KodProizvod,
                'maxScor' => $maxScor,
                'maxPotok' => $maxPotok,
                'img' => $img,
                'karusel' => $_POST["karusel"]
            ];
            $id = $_POST['id'];
            $towar_id =update('ventilator', $id, $towar);
            header('location: '. BASE_URL .'../../vent.php');
        }
}

//удаление данных ram
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_ram'])){
    $id = $_GET['del_ram'];
    delete('ram', $id);
    header('location: '. BASE_URL .'../../ram.php');

}
//удаление данных hdd
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_hdd'])){
    $id = $_GET['del_hdd'];
    delete('hdd', $id);
    header('location: '. BASE_URL .'../../hdd.php');

}
//удаление данных видеокарта
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_vid'])){
    $id = $_GET['del_vid'];
    delete('videokarta', $id);
    header('location: '. BASE_URL .'../../video.php');

}
//удаление данных материнка
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_mat'])){
    $id = $_GET['del_mat'];
    delete('mat', $id);
    header('location: '. BASE_URL .'../../mat.php');

}
//удаление данных блок питания
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_pit'])){
    $id = $_GET['del_pit'];
    delete('pitanie', $id);
    header('location: '. BASE_URL .'../../pit.php');

}
//удаление данных процессор
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_pro'])){
    $id = $_GET['del_pro'];
    delete('procc', $id);
    header('location: '. BASE_URL .'../../procc.php');

}
//удаление данных процессор
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_ssd'])){
    $id = $_GET['del_ssd'];
    delete('ssd', $id);
    header('location: '. BASE_URL .'../../ssd.php');

}
//удаление вентилятор
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_ven'])){
    $id = $_GET['del_ven'];
    delete('ventilator', $id);
    header('location: '. BASE_URL .'../../vent.php');

}
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
            <h1 class="text">Информация о нас</h1>
            <div class="post row">
                <div class="col-12 col-md-4">
                    <div class="col">
                        <img src="<?=BASE_URL . 'assets/images/orig.jpg'?>" class="s-block w-100" alt="...">
                    </div>
                </div>
                <div class="post_text col-md-8 parents">
                    <div class="col-12">
                        <div class="container-opis">
                            <h3 class="text">Мы распологаемся в городе Камень-на-оби по ул. Ленина, 54 подвал</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container-opis">
                            <h3 class="text">Мы предоставляем такие услуги как продажа комплектующих
                                и аксесуаров для сборки и аформления вашего личного компьютера также их ремонт и обсолуживание</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container-opis">
                                <h3 class="text">Работаем без выходных с 9:00 до 19:00</h3>
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

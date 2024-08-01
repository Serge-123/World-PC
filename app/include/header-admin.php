<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo "../../index.php"?>">Мир компьютеров</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li>
                            <a href="">
                                <i class="fa-solid fa-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                                <li><a href="<?php echo  "../../logout.php"; ?>">Выйти</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

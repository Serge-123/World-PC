<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL ?>">Мир компьютеров</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Главное</a></li>
                    <li><a href="<?php echo BASE_URL . "info.php" ?>">О нас</a></li>
                    <li>
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="<?php echo BASE_URL . "home.php?id_ram=2"?>">
                                <i class="fa-solid fa-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']): ?>
                                 <li><a href="<?php echo BASE_URL . "admin/users/index.php";?>">Админ панель</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выйти</a></li>
                            </ul>
                        <?php else: ?>
                        <a href="<?php echo BASE_URL . "log.php"?>">
                            <i class="fa-solid fa-user"></i>
                            Войти
                        </a>
                                <ul>
                                    <li><a href="<?php echo BASE_URL . 'reg.php';?>">Регистрация</a></li>
                                </ul>
                                <?php endif;?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

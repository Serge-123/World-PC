<?php

include "app/database/db.php";

$isSubmit = false;
$errorMsg = '';

//Код для регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["button-reg"])){
    $admin = 0;
    $login = trim($_POST["login"]);
    $email = trim($_POST["email"]);
    $passwordA = trim($_POST["password-one"]);
    $passwordB = trim($_POST["password-first"]);
    if($login === '' || $email === '' || $passwordA === ''|| $passwordB === ''){
        $errorMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login,'UTF8') < 2) {
        $errorMsg = "Логин должен быть более 2-х символов";
    }elseif ($passwordA !== $passwordB) {
        $errorMsg = "Пароли в полях должны соответствовать";
    }else{
        $existence = selectOne("users", ["email" => $email]);
        if($existence['email'] === $email){
            $errorMsg = "Пользователь с такой почтай уже есть!";
        }else{
            $pass = password_hash($passwordA, PASSWORD_DEFAULT);
            $post =[
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne("users", ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if($_SESSION['admin']){
                header('Location:' . BASE_URL .'admin/users/index.php');
            }else{
                header('Location: '.BASE_URL);
            }
        }
    }
}else{
    $login = '';
    $email = '';
}
//Код формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["button-log"])){
    $email = trim($_POST["email"]);
    $pass = trim($_POST["password"]);

    if($email === '' ||  $pass === ''){
        $errorMsg="Не все поля заполнены";
    }else{
        $existence = selectOne("users", ['email' => $email]);

        if($existence && password_verify($pass, $existence['password'])){

            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];
            $_SESSION['email'] = $existence['email'];

            if($_SESSION['admin']){
                header('Location:' . BASE_URL .'admin/users/index.php');
            }else{
                header('Location: '.BASE_URL);
            }
        }else{
            $errorMsg = "Почта либо пароль введены неверно!";
        }
    }
}else{
    $email = '';
}

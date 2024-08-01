<?php

include '../../app/database/db.php';

$isSubmit = false;
$errorMsg = [];
$UserTabl = selectAll('users');

//Код для регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["button-reg"])){
    $user = $_POST["user"];
    $login = trim($_POST["login"]);
    $email = trim($_POST["email"]);
    $passwordA = trim($_POST["password-one"]);
    $passwordB = trim($_POST["password-first"]);

    if($login === '' || $email === '' || $passwordA === ''|| $passwordB === ''){
        array_push($errorMsg,  "Не все поля заполнены!");
    }elseif (mb_strlen($login,'UTF8') < 2) {
        array_push($errorMsg,  "Логин должен быть более 2-х символов");
    }elseif ($passwordA !== $passwordB) {
        array_push($errorMsg,  "Пароли в полях должны соответствовать");
    }else{
        $existence = selectOne("users", ["email" => $email]);
        if($existence['email'] === $email){
            array_push($errorMsg,  "Пользователь с такой почтай уже есть!");
        }else{
            $pass = password_hash($passwordA, PASSWORD_DEFAULT);
            $post =[
                'admin' => $user,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne("users", ['id' => $id]);
            header('location: '. BASE_URL .'../../index.php');
        }
    }
}else{
    $login = '';
    $email = '';
}

//Код для изменения данных
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["id"])){
    $id = $_GET['id'];
    $us = selectOne("users", ['id' => $id]);
    $id = $us['id'];
    $login = $us['username'];
    $user = $us['admin'];
    $email = $us['email'];
    $pass = $us['password'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["button-izmen"])){
    $user = $_POST["user"];
    $login = trim($_POST["login"]);
    $email = trim($_POST["email"]);
    $passwordA = trim($_POST["password-one"]);
    $passwordB = trim($_POST["password-first"]);

    if($login === '' || $email === ''){
        $errorMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login,'UTF8') < 2) {
        $errorMsg = "Логин должен быть более 2-х символов";
    }elseif ($passwordA !== $passwordB) {
        $errorMsg = "Пароли в полях должны соответствовать";
    }else{
        $existence = selectOne("users", ["email" => $email]);
        if($passwordA > 0 ||$passwordB > 0 ) {
            $pass = password_hash($passwordA, PASSWORD_DEFAULT);
            $post = [
                'admin' => $user,
                'username' => $login,
                'email' => $email,
                'password' => $pass

            ];
        }else{
            $post = [
                'admin' => $user,
                'username' => $login,
                'email' => $email
            ];
        }
            $id = $_POST['id'];
            $post_id =update('users', $id, $post);
            header('location: '. BASE_URL .'../../index.php');
        }
}

//удаление пользователя
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del'])){
    $id = $_GET['del'];
    delete('users', $id);
    header('location: '. BASE_URL .'../../index.php');

}

<?php

class User
{
    public $_css = "./css/main.css";
    static $_lang = ["fr", "en", "it"];
    public $_title = "Abonnement";
}

$_new_user = new User;

?>
<!DOCTYPE html>
<html lang="<?= User::$_lang[0] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./asset/Login_37128.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?= $_new_user->_css ?>">
</head>
<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-Type: application/json;charset=utf-8');
    $email = "example@mail.ru";
    $login = "log123";
    $password = "pass12321";
    $mysqli = mysqli_connect("mysql-160578.srv.hoster.ru", "srv160578_kosty", "123321", "srv160578_kosty");
    $mysqli->query("SET NAMES utf8");
    $sql = "INSERT INTO `userAccounts` (`id`, `email`, `login`, `pass`) VALUES (NULL, '$email', '$login', '$password')";
    $mysqli->query($sql); 
?>

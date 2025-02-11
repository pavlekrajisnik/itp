<?php
session_start();
include "./connection/connection.php";
if(isset($_REQUEST["username"]) && isset($_REQUEST["password"])){

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $sql = "SELECT * FROM `korisnik` WHERE `username`= '$username' AND `password`= '$password'";
    $result = $conn->query($sql);
    if($result->num_rows !=0){
        $user = $result->fetch_assoc();
        $_SESSION["user"] = $user;
        header("Location: /index.php");
        setcookie("login_notification", "Uspjesno ste se prijavili" , time() + (86400), "/");
    }else
        header("Location: /prijava.php");
}else
    header("Location: /prijava.php");
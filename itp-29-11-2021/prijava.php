<?php
session_start();
include("./connection/connection.php");
if(isset($_SESSION["user"])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="ba">
<head>
    <meta charset="utf-8">
    <title>Prijava</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="./js/script.js"></script>  <!--  ---------ZASTO OVDJE--------- ./-->
</head>
<body>
<?php require_once './notification/notification.php'; ?>
<div class="main_div">
    <form class="main_form" action="./checkPrijava.php" method="post">
        <label>Username:</label>
        <input type="text" id="username" name="username"><br>
        <label>Password:</label>
        <input type="password" id="password" name="password"><br>
        <button type="submit" id="submit_form">Prijavi se</button>
    </form>
</div>
</body>
</html>
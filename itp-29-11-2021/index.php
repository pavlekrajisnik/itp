<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: /prijava.php");
}
include("./connection/connection.php");


$sql = "SELECT * FROM `countries`";
$result = $conn->query($sql);
$countries = $result->fetch_all();
//?>

<!DOCTYPE html>
<html lang="ba">
<head>
    <meta charset="utf-8">
    <title>Protesti</title>
    <link rel="stylesheet" href="/css/style.css">
  <script src="./js/script.js"></script>  <!--  ---------ZASTO OVDJE--------- ./-->
</head>
<body>
<?php require_once './notification/notification.php'; ?>
<div class="wraper">
    <div class="left">
         <a id="slika_id" href="evidencija.php"><img src="assets/img/logo.png" alt="protesti.jpg"></a>
        <h1>Protesti 2025</h1>
    </div>
    <div class="right">
        <h2>Evidentiraj okupljanje</h2>
        <form action="./add-participans.php" method="POST" id="my_form" onsubmit="return validationForm()">
            <div>
            <label for="organizator">Organizator:</label>
            <input name="organizator" id="organizator" type="text">
            </div>
            <div>
            <label for="drzava">Drzava:</label>
            <select name="drzava" id="drzava" onchange="dohvatiGradove()">
                <option value="">-- Izaberi drzavu --</option>
                <?php foreach ($countries as $country): ?>
                    <option value="<?= $country[0];?>"> <?=$country[2];?> (<?= $country[1];?>)</option>
                <?php endforeach; ?>
            </select>
            </div>
            <div>
            <label for="grad">Grad:</label>
            <select name="grad" id="grad"></select>
            </div>
            <div>
            <label for="br_ucesnika">Broj ucesnika:</label>
            <input name="br_ucesnika"  id="br_ucesnika" type="text">
            </div>
            <div>
            <label for="datum">Datum:</label>
            <input name="datum" id="datum" type="date">
            </div>
            <div>
            <label for="napomena">Napomena:</label>
            <textarea name="napomena" id="napomena"></textarea>
            </div>
            <div class="button">
                <button class="buttons left" type="submit">Evidentiraj</button>
                <button class="buttons right" type="reset" ">Ponisti</button>
            </div>
        </form>
    </div>
    <a href="logout.php">Odjavi se</a>
</div>
</body>
</html>
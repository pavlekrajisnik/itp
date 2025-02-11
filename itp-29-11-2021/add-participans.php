<?php
include ("./connection/connection.php");

    if(!empty($_REQUEST['organizator']) && !empty($_REQUEST['drzava']) && !empty($_REQUEST['grad']) && !empty($_REQUEST['br_ucesnika']) && !empty($_REQUEST['datum'])) {
        $organiser = $_REQUEST['organizator'];
        $country = $_REQUEST['drzava'];
        $city = $_REQUEST['grad'];
        $number_participan = $_REQUEST['br_ucesnika'];
        $date = $_REQUEST['datum'];
        $note = !empty($_REQUEST['napomena']) ? $_REQUEST['napomena'] : NULL;

        $sql = "INSERT INTO `protests` (organizer,city_id,country_id,participiants_number,date,note) VALUES ('{$organiser}','{$city}','{$country}','{$number_participan}','{$date}','{$note}')";
        $result = $conn->query($sql);
        setcookie("register_notification","Uspjesno ste dodali u bazu novog organizatora!", time() + (86400 * 30), "/");
        header("Location:./index.php");
    }else{
        setcookie("error_notification","NISTE DOBRO UNIJELI ORGANIZATORA", time() + (86400 * 30), "/");
        header("Location:./index.php");
    }


<?php

include "./connection/connection.php";

if(isset($_REQUEST['country_id'])) {
    $upit = "SELECT * FROM `cities` WHERE country_id = {$_REQUEST['country_id']}";
    $rezultat = $conn->query($upit);

    $optionsHTML = "<option value=''>-- Izaberi grad --</option>";
    if ($rezultat->num_rows > 0) {
        while ($row = $rezultat->fetch_assoc()) {
            $cityID = $row["city_id"];
            $cityName = $row["name"];
            $countryCode = $row["country_id"];

            $optionsHTML .= "<option value='{$cityID}'>{$cityName} ({$countryCode})</option>";
        }

        echo $optionsHTML;
    }
}

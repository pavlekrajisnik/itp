<?php
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
<div class="evidencija">
  <table>
      <tr>
          <th>Redni broj</th>
          <th>Organizator</th>
          <th>Drzava</th>
          <th>Grad</th>
          <th>Broj ucesnika</th>
          <th>Datum</th>
          <th>Napomena</th>
      </tr>

      <?php
        include './connection/connection.php';
        $sql = "SELECT * FROM `protests` JOIN `countries` on countries.id = protests.country_id
                JOIN `cities` on cities.city_id = protests.city_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
         ?>
        <tr>
            <td><?=$row['protest_id']?></td>
            <td><?=$row['organizer']?></td>
            <td><?=$row['country_name']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['participiants_number']?></td>
            <td><?=$row['date']?></td>
            <td><?=$row['note']?></td>
            <td><a>Izbrisi</a></td>
            <td><a>Izmijeni</a></td>
        </tr>

      <?php
        }
      }
      ?>
  </table>
</div>
</body>
</html




<?php
//include './connection/connection.php';
//$sql = "SELECT * FROM `protests` JOIN `countries` on countries.id = protests.country_id
//                JOIN `cities` on cities.city_id = protests.city_id";
//$result = $conn->query($sql);
//while ($row = $result->fetch_assoc()) {
//    echo "<tr>
//            <td>{$row['protest_id']}</td>
//            <td>{$row['organizator']}</td>
//            <td>{$row['drzava']}</td>
//            <td>{$row['grad']}</td>
//            <td>{$row['broj_ucesnika']}</td>
//            <td>{$row['datum']}</td>
//            <td>{$row['napomena']}</td>
//            <td>IZMIJENI</td>
//            <td>IZBRISI</td>
//            </tr>";
//}
//?>
<!--</table>-->
<!--</div>-->
<!--</body>-->
<!--</html-->

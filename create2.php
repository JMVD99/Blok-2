<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "sint-site";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    $woonplaats = $_POST ["city"];
    $bezorgmethode = $_POST ["bezorgmethode"];
    $huiskleur = $_POST ["color"];

    $query = "INSERT INTO `bezorginfo`(`woonplaats`,
                                    `bezorgmethode`,
                                    `huiskleur`)
                           values  ('$woonplaats',
                                    '$bezorgmethode',
                                    '$huiskleur')";
    mysqli_query($conn, $query);

    header("Refresh: 5; index.php?content=home")
?>

<h3>Uw gegevens zijn verwerkt.<h3>
<h3>U zal terug gestuurd worden naar de homepagina.<h3>
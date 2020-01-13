<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "sint-site";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    $Woonplaats = $_POST ["city"];
    $Bezorgmethode = $_POST ["bezorgmethode"];
    $Huiskleur = $_POST ["color"];

    $query = "INSERT INTO `bezorgmethode`   (`woonplaats`,
                                    `bezorgmethode`,
                                    `huiskleur`)
                           Values  ('$Woonplaats',
                                    '$Bezorgmethode',
                                    '$Huiskleur')";
                    
    mysqli_query($conn, $query);

    header("Refresh: 5; index.php?content=home")
?>

<h3>Uw gegevens zijn verwerkt.<h3>
<h3>U zal terug gestuurd worden naar de homepagina.<h3>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "sint-site";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    $standplaats = $_POST ["standplaats"];
    $naam = $_POST ["naam"];
    $kleur = $_POST ["color"];

    $query = "INSERT INTO `pieteninfo`(`id`,
                                    `standplaats`,
                                    `naam`,
                                    `kleur`)
                           values  (NULL,
                                    '$standplaats',
                                    '$naam',
                                    '$kleur')";
    mysqli_query($conn, $query);

    header("Refresh: 5; index.php?content=home")
?>

<h3>Uw gegevens zijn verwerkt.<h3>
<h3>U zal terug gestuurd worden naar de homepagina.<h3>
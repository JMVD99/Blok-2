<?php
$leeftijd = 17;
$voornaam = "Marco";
$achternaam = "van Doeland";
$naam = $voornaam . $achternaam;
// echo "<p>" . $leeftijd . "</p>";
// echo "<p>" . $naam . "</p>";

$getal1 = 3;
$getal2 = 5;
$som = $getal1 + $getal2;
// echo "<p>De waarde van de variabele is: " . $getal1 . "</p>";
// echo "<p>De waarde van de tweede variabele is: " . $getal2 . "</p>";
// echo "<p>De som is: " . $som . "</p>";

$chocoladeletter = array("./IMG/Chocoladeletters.jpg",
                    "Chocoladeletters",
                    "Chocoladeletters zijn letters met chocolade smaak",
                    "Koop ze hier");

$schuimpje = array("./IMG/schuimpjes.jpg",
                    "Schuimpjes",
                    "Pepernoten is een heerlijk lekkernij dat al vanaf midden augustus in de winkel licht",
                    "Koop ze hier");

$kruidnoot = array("./IMG/kruidnoten.jfif",
                    "Kruidnoten",
                    "Kruidnoten is een heerlijk lekkernij dat al vanaf midden augustus in de winkel licht",
                    "Koop ze hier");
?>

<div class="row">
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $kruidnoot[0] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $kruidnoot[1] ?></h5>
                <p class="card-text"><?php echo $kruidnoot[2] ?></p>
                <a href="#" class="btn btn-primary"><?php echo $kruidnoot[3] ?></a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="<?php echo $schuimpje[0] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $schuimpje[1] ?></h5>
                <p class="card-text"><?php echo $schuimpje[2] ?></p>
                <a href="#" class="btn btn-primary"><?php echo $schuimpje[3] ?></a>
            </div>
        </div>
    </div>
    <div class="col-4">
    <div class="card">
            <img src="<?php echo $chocoladeletter[0] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $chocoladeletter[1] ?></h5>
                <p class="card-text"><?php echo $chocoladeletter[2] ?></p>
                <a href="#" class="btn btn-primary"><?php echo $chocoladeletter[3] ?></a>
            </div>
        </div> 
    </div>
</div>

<div class="row">
    <div class="col-12"></div>
</div>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4"></div>
    <div class="col-4"></div>
</div>
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

$card_image_2 = "./IMG/Chocoladeletters.jpg";
$card_title_2 = "Pepernoten";
$card_text_2 = "Pepernoten is een heerlijk lekkernij dat al vanaf midden augustus in de winkel licht";
$card_btn_2 = "Koop ze hier";

$card_image_3 = "./IMG/schuimpjes.jpg";
$card_title_3 = "Pepernoten";
$card_text_3 = "Pepernoten is een heerlijk lekkernij dat al vanaf midden augustus in de winkel licht";
$card_btn_3 = "Koop ze hier";

$kruidnoot = array("./IMG/kruidnoten.jfif",
                    "kruidnoten",
                    "kruidnoten noten is een heerlijk lekkernij dat al vanaf midden augustus in de winkel licht",
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
            <img src="<?php echo $card_image_2 ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $card_title_2 ?></h5>
                <p class="card-text"><?php echo $card_text_2 ?></p>
                <a href="#" class="btn btn-primary"><?php echo $card_btn_2 ?></a>
            </div>
        </div>
    </div>
    <div class="col-4">
    <div class="card">
            <img src="<?php echo $card_image_3 ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $card_title_3 ?></h5>
                <p class="card-text"><?php echo $card_text_3 ?></p>
                <a href="#" class="btn btn-primary"><?php echo $card_btn_3 ?></a>
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
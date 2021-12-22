<?php
 include("./connect_db.php");

 $sql = "SELECT * FROM `pieteninfo`";

 $result = mysqli_query($conn, $sql);

 $records = "";

 while ($record = mysqli_fetch_assoc($result)) {
    $records .=  "<tr><th scope='row'>" . $record["id"] . "</th>
                        <td>" . $record["standplaats"] . "</td>
                        <td>" . $record["naam"] . "</td>
                        <td>" . $record["kleur"] . "</td>
                        <td>
                            <a href = './update.php?id=" . $record["id"] . "'>
                                <img src='./IMG/icons/b_edit.png' alt='...' class='icon'></td>
                            </a>
                        <td>
                            <a href = './delete.php?id=" . $record["id"] . "''>
                                <img src='./IMG/icons/b_drop.png' alt='...' class='icon'></td>
                            </a>
                        </tr>";
 }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Sinterklaasverlanglijstje</title>
</head>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Sinterklaasverlanglijstje</h1>
        <p class="lead">Sinterklaas maakt al je dromen waar</p>
    </div>
        </div>
        <div class=col-12>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Standplaats</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Kleur</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo $records
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include("./footer.php");
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script scr="./JS/app.js"><script>
  </body>
</html>
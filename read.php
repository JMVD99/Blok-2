<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "sint-site";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    $result = mysqli_query($conn, $sql);
    $sql = "SELECT * FROM `users`";
    while ($record = mysqli_fetch_assoc($result)) {
        echo $record["id"] . " " . $record $record $record
    };

?>
<div class="col-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Tussenvoegsel</th>
                <th scope="col">Achternaam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>
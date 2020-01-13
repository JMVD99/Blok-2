<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "sint-site";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    $firstname = $_POST ["firstname"];
    $infix = $_POST ["infix"];
    $lastname = $_POST ["lastname"];

    $query = "INSERT INTO `users`   (`UserID`,
                                    `Firstname`,
                                    `Infix`,
                                    `Lastname`)
                           Values  (NULL,
                                    '$firstname',
                                    '$infix',
                                    '$lastname')";
                                
    mysqli_query($conn, $query);
                    
    header("Refresh: 5; index.php?content=home")
?>
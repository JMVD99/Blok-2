<?php
    echo "<H3>" . "de opgegeven naam is: " . $_POST ["firstname"] . " " . $_POST ["infix"] . " " . $_POST ["lastname"] . "<H3>";
    $query = "INSERT INTO `users`   (`UserID`,
                                     `Firstname`,
                                     `Infix`,
                                     `Lastname`)
                            Values  (NULL,
                                     '$_POST ["firstname"]',
                                     '$_POST ["infix"]',
                                     '$_POST ["lastname"]')";
                    
    echo $query;
?>
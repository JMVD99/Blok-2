<?php
include("./connect_db.php");

$id = $_GET["id"];

$sql = "select * from `pieteninfo` where id = $id";
$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

?>
<?php
include_once './dbconnect.php';

if(!$conn){
    die('Fuck this shit');
}
    $crateNum = $_POST['crateNum'];
    $qty = $_POST['qty'];
    $originalQty = $_POST['qty'];
    $type = $_POST['type'];
    $material = $_POST['material'];

    $sql = "INSERT INTO newcrate (crateNum, qty, kind, material, originalQty) VALUES ($crateNum, $qty, '$type', '$material', $originalQty)";
    mysqli_query($conn, $sql);

header("Location: ./viewCrate.php");

?>
<?php
include 'conectar.php';

$id = $_POST['ID_juego'];

$request = "DELETE FROM juego where id=$id";
$register = mysqli_query($con, $request) or die("Problema en select");
if ($register) {
    echo json_encode("Exito");
}
mysqli_close($con);

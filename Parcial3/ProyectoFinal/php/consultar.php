<?php
include 'conectar.php';

$id = $_POST['ID_juego'];

$request = "select * from juego where id=$id";
$register = mysqli_query($con, $request) or die("Problema en select");
$result = mysqli_fetch_array($register, MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);

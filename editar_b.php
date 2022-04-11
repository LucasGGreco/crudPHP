<?php
include ("con_db.php");

$id = $_POST['id'];
$name = $_POST['nombre'];
$color = $_POST['color'];
$email = $_POST['email'];

$sql = "UPDATE dato set nombre='$name', color='$color', email='$email' WHERE id = '$id' ";
$resultado = mysqli_query($conex,$sql);

header("Location:index.php");
?>

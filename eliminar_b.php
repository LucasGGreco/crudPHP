<?php
include ("con_db.php");

$id = $_GET['id'];

$sql = "DELETE FROM dato WHERE id = '$id' ";
$resultado = mysqli_query($conex,$sql);

header("Location:index.php");
?>

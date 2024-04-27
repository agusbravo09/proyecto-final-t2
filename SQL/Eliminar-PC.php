<?php

include('Conexion.php');
$con = conectar();

$id = $_GET['id'];

# COLOCAR EL WHERE O SE BORRA TODA LA BASE DE DATOS # 
$sql = "DELETE FROM computadoras WHERE NUMPC = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../Admin-Computadoras.php");
}
else{
    echo '<script> alert("No se pudo borrar el registro por alguna razón!") window.location = "../Admin-Computadoras.php" </script>';
}

?>
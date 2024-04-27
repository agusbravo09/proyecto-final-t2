<?php

include('Conexion.php');
$con = conectar();

$id = $_GET['id'];

# COLOCAR EL WHERE O SE BORRA TODA LA BASE DE DATOS # 
$sql = "DELETE FROM clientes WHERE DNI = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../Admin-Clientes.php");
}
else{
    echo '<script> alert("No se pudo borrar el registro por alguna razón!") window.location = "../Admin-Clientes.php" </script>';
}

?>
<?php
include('Conexion.php');
$con = conectar();

$idpc = $_POST['idpc'];
$link = $_POST['link'];
$fecha = $_POST['fecha'];
#null, link, idpc, fecha#

# COLOCAR EN EL ORDEN DE LA TABLA DE LA BASE DE DATOS # 
$sql = "INSERT INTO diagnosticos VALUES (NULL, '$link', '$idpc', '$fecha')";
$query = mysqli_query($con, $sql);

if($query){
    Header('Location: ../Admin-Diagnosticos.php');
    exit;
}
else{
    echo "<script> alert('No se han podido cargar los datos.'); window.location = '../Admin-Diagnosticos.php'; </script>";
    exit;
}


?>
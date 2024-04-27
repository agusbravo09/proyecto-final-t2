<?php

include('Conexion.php');
$con = conectar();

/* POST Computadoras */
$documento = $_POST['documento'];
$numpc = $_POST['numpc'];
$marca = $_POST['marca'];
$procesador = $_POST['procesador'];
$memoria = $_POST['memoria'];
$fecha = $_POST['fecha'];
$disco = $_POST['disco'];
$observaciones = $_POST['observaciones'];
$grafica = $_POST['grafica'];
$ingreso = $_POST['ingreso'];
$estado = $_POST['estado'];
$mother = $_POST['mother'];
$fuente = $_POST['fuente'];

# COLOCAR EN EL ORDEN DE LA TABLA DE LA BASE DE DATOS # 
$sql = "UPDATE computadoras SET MARCA = '$marca', PROCESADOR = '$procesador', MEMORIA = '$memoria', DISCO = '$disco', MOTHERBOARD = '$mother',
 FUENTE = '$fuente', OBSERVACIONES = '$observaciones', FECHA = '$fecha', ESTADO = '$estado', GRAFICA = '$grafica' WHERE DNI = '$documento' AND NUMPC = '$numpc'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../Admin-Computadoras.php");
}
else{
    echo "<script> alert('No se han podido actualizar los datos'); window.location = '../Admin-Clientes.php'; </script>";
}
  
?>
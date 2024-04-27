<?php

include('Conexion.php');
$con = conectar();

/*POST CLIENTES*/
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$domicilio = $_POST['domicilio'];

# COLOCAR EN EL ORDEN DE LA TABLA DE LA BASE DE DATOS # 
$sql = "UPDATE clientes SET NOMBRE = '$nombre', TELEFONO = '$telefono', CELULAR = '$celular', MAIL = '$correo', DIRECCION = '$domicilio' WHERE DNI = '$documento'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../Admin-Clientes.php");
}
else{
    echo "<script> alert('No se han podido actualizar los datos'); window.location = '../Admin-Clientes.php'; </script>";
}
  
?>
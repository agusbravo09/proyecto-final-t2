<?php

include("Conexion.php");
$con = conectar();

/* POST Clientes */
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$domicilio = $_POST['domicilio'];

/*SQL VAR Insert clientes*/
# COLOCAR EN EL ORDEN DE LA TABLA DE LA BASE DE DATOS # 
$sql = "INSERT INTO clientes VALUES('$documento', '$nombre', '$telefono', '$celular',
'$correo', '$domicilio')";

$query = mysqli_query($con, $sql);

if($query){
    Header('Location: ../Admin-Clientes.php');
    exit;
}
else{
    echo '<script> alert("¡No se han podido cargar los datos por alguna extraña razón!
    Contacte con el programador y mantenga la calma por favor :)"); window.location = "../Admin-Clientes.php"; </script>';
    exit;
}

?>
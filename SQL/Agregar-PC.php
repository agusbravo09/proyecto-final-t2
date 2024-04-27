<?php
include('Conexion.php');
$con = conectar();

/* POST Computadoras */
$documento = $_POST['documento'];
$marca = $_POST['marca'];
$grafica = $_POST['grafica'];
$procesador = $_POST['procesador'];
$ram = $_POST['memoria'];
$disco = $_POST['disco'];
$observaciones = $_POST['observaciones'];
$ingreso = $_POST['fecha'];
$estado = $_POST['estado'];
$mother = $_POST['mother'];
$fuente = $_POST['fuente'];

/*SQL VAR Insert Computadoras*/
# COLOCAR EN EL ORDEN DE LA TABLA DE LA BASE DE DATOS # 
$sql2 = "INSERT INTO computadoras VALUES (NULL, '$marca', '$procesador', '$ram', '$disco', '$mother', '$fuente',
'$observaciones', '$documento', '$grafica', '$ingreso', '$estado')";

$query = mysqli_query($con, $sql2);

if($query){
    Header('Location: ../Admin-Computadoras.php');
    exit;
}
else{
    echo '<script> alert("¡No se han podido cargar los datos!"); window.location = "../Admin-Computadoras.php"; </script>';
    exit;
}


?>
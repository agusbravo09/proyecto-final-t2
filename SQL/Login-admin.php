<?php

session_start();

include('Conexion.php');
$con = conectar();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM admins WHERE USUARIO='$usuario' AND CONTRASENA='$contraseña'";
$query = mysqli_query($con, $sql);

#Si hay 1 resultado (usuario y contraseña = coinciden) entonces entra #
if(mysqli_num_rows($query) > 0){
    $_SESSION['usuario'] = $usuario;
    Header('Location: ../Admin-Clientes.php');
    exit;
}
#si no hay resultados (usuario y contraseña = no coinciden) entonces salir#
else{
    echo '<script> alert("El usuario y/o contraseña son incorrectos");
            window.location = "../Admin-Login.php";
         </script>';
         exit;
}

?>
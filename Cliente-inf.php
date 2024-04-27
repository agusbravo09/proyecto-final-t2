<?php
include('SQL/Conexion.php');
$con = conectar();

$DNI = $_POST['documento'];

$sql = "SELECT * FROM clientes WHERE DNI='$DNI'";
$numpc = $_POST['numpc'];
$sql2 = "SELECT * FROM computadoras WHERE DNI='$DNI' AND NUMPC='$numpc'";


$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);

# SI EL DOCUMENTO EXISTE EN LA DB #
if(mysqli_num_rows($query) > 0 && $numpc == ""){
    header("location: index.php?id=$DNI");
}

else if(mysqli_num_rows($query) <= 0){
    echo'<script> alert("El documento ingresado no existe en la base de datos"); window.location = "index.php"; </script>';
exit;
}

else if(mysqli_num_rows($query2) <= 0){
    echo "<script> alert('El numero de computadora ingresado no existe en su perfil'); window.location = 'index.php?id=$DNI' </script>";
    exit;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href="css/Perfil-Cliente.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Consulta Cliente</title>
</head>
<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class=" container d-flex justify-content-center">
                <div class="contanier-fluid">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"></div>
                                        <?php
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                        <h6 class="f-w-600"><?php echo $row['NOMBRE']?></h6>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                    <form action="index.php" method="POST" style="text-align: right;">
                                                <input type="hidden" name="dni" value="<?php echo $DNI?>">
                                                <input type="submit" class="btn btn-secondary" value="← Volver al Inicio">
                                        </form>
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Información</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Documento</p>
                                            <h6 class="text-muted f-w-400"><?php echo $row['DNI']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Teléfono</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row['TELEFONO']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Celular</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row['CELULAR']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row['MAIL']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Dirección</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row['DIRECCION']?></h6>
                                            </div>
                                                <?php
                                                    }
                                                ?>
                                        </div>

                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Computadora</h6>
                                        <div class="row"> 
                                                    <?php
                                                        while($row2 = mysqli_fetch_array($query2)){
                                                    ?>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Nº PC</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['NUMPC']?></h6>

                                                </div>      
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Marca</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['MARCA']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Procesador</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['PROCESADOR']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Memoria RAM</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['MEMORIA']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Disco Duro</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['DISCO']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Observaciones</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['OBSERVACIONES']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Fecha de Ingreso</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['FECHA']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Tarjeta Gráfica</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['GRAFICA']?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Estado</p>
                                                <h6 class="text-muted f-w-400"><?php echo $row2['ESTADO']?></h6>
                                            </div>
                                            <?php
                                                        }
                                                        
                                                        ?>
                                            <?php
                                            $sql5 = "SELECT * FROM diagnosticos WHERE NUMPC = '$numpc'";
                                            $query5 = mysqli_query($con, $sql5);
                                            while($array = mysqli_fetch_array($query5)){
                                            ?>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Presupuesto - <?php echo $array['CREACION']?></p>
                                                <h6 class="text-muted f-w-400"><a target="_blank" href="<?php echo $array['INFORME']?>"> Link al Presupuesto. </a></h6>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
</body>
</html>
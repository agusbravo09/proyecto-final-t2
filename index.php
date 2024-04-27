<?php
include('SQL/Conexion.php');
$con = conectar();

$options = "";


if($_POST){
    $dni = $_POST['dni'];

    $sql = "SELECT NUMPC FROM computadoras WHERE DNI = '$dni'";
    $query = mysqli_query($con, $sql);
    $mensaje = "Seleccione un Número de Computadora";
        while($row = mysqli_fetch_array($query)){
            $options = $options."<option value='$row[NUMPC]'>$row[NUMPC]</option>";
        }
}

else if($_GET){
    $dni = $_GET['id'];
    $sql = "SELECT NUMPC FROM computadoras WHERE DNI = '$dni'";
    $query = mysqli_query($con, $sql);
    $mensaje = "Seleccione un Número de Computadora";
    while($row = mysqli_fetch_array($query)){
        $options = $options."<option value='$row[NUMPC]'>$row[NUMPC]</option>";
    }
}

else{
    $dni = "";
    $mensaje = "Ingresa el Número de Computadora";
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Login-Cliente.css" />

    <title>Seguimiento de PC</title>
</head>
<body class="bg-dark">
    <section>
        <div class="row g-0">
            <div class="align-center-now col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                    <h1 class="font-weight-bold mb-4">Seguimiento de PC</h1>
                    <form class="mb-5" method="POST" action="Cliente-inf.php" autocomplete="off"> <!-- Formulario Cliente -->
                        <div class="mb-4">
                            <label class="form-label font-weight-bold">Número de Documento</label>
                            <input type="int" class="form-control bg-dark-x border-0" name="documento" placeholder="Ingresa tu Número de Documento" value="<?php echo $dni?>" required>
                            <label class="form-label font-weight-bold">Número de Computadora</label>
                            <input type="int" class="form-control bg-dark-x border-0" name="numpc" placeholder="<?php echo $mensaje?>" list="datalist">
                            <datalist id="datalist">
                                <?php echo $options;?>
                            </datalist>
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="Buscar">
                        <P></P>
                        <input type="submit" class="btn btn-warning w-100" value="¿No recordas el número de PC? ¡Pone tu DNI y apreta acá!">
                        <P></P>
                        <a href="Admin-Login.php"><button type="button" class="btn btn-secondary w-100">Ingresar como Administrador</button></a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
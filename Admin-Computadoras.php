<?php
include('SQL/Conexion.php');
$con = conectar();
# verificar si la sesion esta iniciada #
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '<script> alert("¡Para entrar en esta página debes iniciar sesión!"); window.location = "index.php" </script>';
        session_destroy();
        die();
    }
# fin verificar si la sesion esta iniciada #

$sql = "SELECT * FROM computadoras";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es" style="overflow-x:scroll; overflow-y: scroll;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/Admin-Table.css">

    <title>Computadoras</title>
</head>
<body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="Admin-Clientes.php">Clientes</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active">Computadoras</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Admin-Diagnosticos.php">Diagnosticos</a>
            </li>
            <a href="SQL/cerrar-sesion.php"><button style="position: absolute; right: 0;" id="close-sesion-btn" class="btn btn-info">Cerrar Sesión</button></a>
        </div>
    </div>
    </nav>
    <!-- NAVBAR ENDS -->
    <section class="ftco-section">
            <div class="r">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section"> Computadoras </h2>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div style="padding-right: 65px; padding-left: 65px;">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por Documento"> <!-- Input Filtro javaScript --> 
                            <p></p>
                                <table id="miTabla" class="table table-bordered table-dark table-hover"> <!-- id="miTabla" (Identificador para el Script) -->
                                    <thead>
                                        <tr>
                                            <th> DNI Dueño </th>
                                            <th> Marca </th>
                                            <th> Procesador </th>
                                            <th> Memoria RAM </th>
                                            <th> Almacenamiento </th>
                                            <th> Motherboard </th>
                                            <th> Fuente </th>
                                            <th> Observaciones </th>
                                            <th> Gráfica </th>
                                            <th> Estado </th>
                                            <th> ID PC </th>
                                            <th></th>
                                            <th></th>
                                            <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-wathever="@holis"> +Añadir </button></th>
                                        </tr>
                                            <?php
                                                while($row = mysqli_fetch_array($query)){ # ARRAY con los datos de la base de datos #
                                            ?>
                                        <tr id="trLead"> <!-- id="trLead" (Identificador para el Script)-->
                                            <th scope="row"><?php echo $row['DNI']?></th> <!-- Colocar la etiqueta <th> donde se quiera filtrar. en este caso se filtra por DNI-->
                                            <td><?php echo $row['MARCA']?></td> 
                                            <td><?php echo $row['PROCESADOR']?></td>
                                            <td><?php echo $row['MEMORIA']?></td>
                                            <td><?php echo $row['DISCO']?></td>
                                            <td><?php echo $row['MOTHERBOARD'] ?></td>
                                            <td><?php echo $row['FUENTE'] ?></td>
                                            <td><?php echo $row['OBSERVACIONES']?></td>
                                            <td><?php echo $row['GRAFICA'] ?></td>
                                            <td><?php echo $row['ESTADO']?></td>
                                            <td><?php echo $row['NUMPC']?></td>
                                            <td></td>
                                            <td><a href="" class="btn btn-warning" data-toggle="modal" data-target="#editmodal<?php echo $row['NUMPC']?>"> Editar </a></td>
                                            <td><a href="" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal<?php echo $row['NUMPC']?>"> Eliminar </a></td>
                                        </tr>
                                            <?php
                                                include('Modal/Computadoras-editar.php'); # Include del modal editar #
                                                include('Modal/Computadoras-eliminar.php'); # Include del modal eliminar #
                                                } # FIN ARRAY con los datos de la base de datos #
                                            ?>
                                    </thlead>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <!-- MODAL AÑADIR -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- MODAL HEADER -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Añadir Cliente </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <!-- MODAL BODY -->
                    <div class="modal-body">
                        <form action="SQL/Agregar-PC.php" method="POST" autocomplete="off"> <!--Formulario de añadir computadora-->
                        <label for="documento"><b>Documento del Cliente</b></label>
                            <input type="int" maxlength="8" class="form-control mb-3" name="documento" placeholder="Obligatorio" required>
                        <label for="marca"><b>Marca de la Computadora</b></label>
                            <input type="text" class="form-control mb-3" name="marca" >
                        <label for="procesador"><b>Procesador</b></label>
                            <input type="int" class="form-control mb-3" name="procesador" >
                        <label for="memoria"><b>Memoria RAM</b></label>
                            <input type="int" class="form-control mb-3" name="memoria"  >
                        <label for="almacenamiento"><b>Almacenamiento</b></label>
                            <input type="text" class="form-control mb-3" name="disco" >
                        <label for="grafica"><b>Tarjeta Gráfica</b></label>
                            <input type="text" class="form-control mb-3" name="grafica" >
                        <label for="mother"><b>Placa Madre</b></label>
                            <input type="text" class="form-control mb-3" name="mother" >
                        <label for="grafica"><b>Fuente de Alimentación</b></label>
                            <input type="text" class="form-control mb-3" name="fuente" >
                        <label for="observaciones"><b>Observaciones</b></label>
                            <input type="text" class="form-control mb-3" name="observaciones" >
                        <label for="fecha"><b>Fecha de Ingreso</b></label>
                            <input type="date" class="form-control mb-3" name="fecha" placeholder="Obligatorio" required>
                        <label for="estado"><b>Estado de la PC</b></label>
                            <select class="form-control mb-3" name="estado" required>
                                <option hidden value selected>Seleccione un estado.</option>
                                <option value="Sin Diagnosticar">Sin Diagnosticar</option>
                                <option value="Diagnosticada">Diagnosticada</option>
                                <option value="Lista para Retirar">Lista para Retirar</option>
                                <option value="Retirada">Retirada</option>
                            </select>
                    </div>
                <!-- MODAL FOOTER -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cerrar </button>
                        <input type="submit" class="btn btn-success btn-block" value="Agregar Registro">
                    </form>
                </div>
            </div>
        </div>
    </body>

    <!--SCRIPTS-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
    <!--SCRIPT FILTRO JAVASCRIPT-->
    <script>
    function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("miTabla");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("th")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
    }
    </script>
</html>
<?php

function conectar(){

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "nuevadb";

    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $database);
    return $con;
}
?>
<?php

session_start();
session_destroy();
echo "<script> alert('¡Sesión Cerrada con Éxito!'); window.location = '../index.php'; </script>";


?>
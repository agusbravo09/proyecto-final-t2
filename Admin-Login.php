<!doctype html>
<html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>LOGIN ADMINISTRADOR</title>
    <link href="css/Login-Admin.css" rel="stylesheet">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</head>
<body class="color">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="SQL/Login-admin.php" method="POST" class="box" autocomplete="off">
                <h1>Panel de Administrador</h1>
                <p class="text-muted"> ¡Ingresa tu nombre de usuario y contraseña!</p>
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </div>
</div>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>
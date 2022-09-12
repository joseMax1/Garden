<?php

session_start();

if (!isset($_SESSION['usuario'])) {

    echo '
    
    <script>

        alert("por favor debes iniciar sesion");
        window.location = "index.php";

    </script>
    
    ';

   // header("location: index.php");

    session_destroy();

    die();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido </title>
</head>
<body>
    <h1>bienvenido  a mi  mundo </h1>

    <a href="php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>
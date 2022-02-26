<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel = stylesheet href = "style.css" type = "text/css">
    <title>Practica ZEO Technology</title>
</head>
<body>

<?php

include_once "bbdd.php";

if (isset($_POST['anyadir'])) {

    include_once "bbdd.php";

    $name = $_POST['altName'];
    $edad = $_POST['altEdad'];
    $email = $_POST['altMail'];
    $pass = $_POST['altPass'];

    if (anyadirUser($name, $edad, $email, $pass)) {

    } else {
        echo "Error al añadir usuario";
    }

}

if (isset($_POST['acceder'])){

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    checkUser($name, $pass);
}


?>

<div id="topnav">
    <div id="newUser" class = "click">Registrar usuario</div>
    <div id="acceder" class = "click">Acceder</div>
    <div id="listaUser" class = "click">Listado de usuarios</div>

</div>
<!--Alta de usuarios-->
<div id="formAltaUser" style="display: none">
    <form action="index.php" method = 'POST'>
        <label for="altName">Nombre:</label><input type="text" id="altName" name="altName"><br>
        <label for="altEdad">Fecha de nacimiento:</label><input type="date" id="altEdad" name="altEdad"><br>
        <label for="altMail">Email:</label><input type="email" id="altMail" name="altMail"><br>
        <label for="altPass">Contraseña:</label><input type="password" id="altPass" name="altPass"><br>
        <input type="submit" name="anyadir">
    </form>
</div>
<br>

<!--Ventana de autenticacion-->
<div id="autUser" style="display: none">
    <form action="index.php" method="POST">
        <label for="name">Email:</label><input type="text" id="name" name="name"><br>
        <label for="pass">Contraseña:</label><input type="text" id="pass" name="pass"><br>
        <input type="submit" name="acceder">
    </form>

</div>
<br>

<!--Lista de usuarios-->
<div id="tablaUser">
    <?php
    include_once 'bbdd.php';

    if(session_status() == PHP_SESSION_ACTIVE){
        //session has not started
        showUser();
    }

    ?>
</div>


</body>
<script src = "script.js"></script>
</html>
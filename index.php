<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=stylesheet href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica ZEO Technology</title>
</head>

<!--Me duele muchisimo añadir aqui el estilo al background, pero no se por que no lo aplica a todo el body desde la hoja de estilos-->
<body style="background-color: #004567">

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

if (isset($_POST['acceder'])) {

    $name = $_POST['name'];
    $pass = $_POST['pass'];
    checkUser($name, $pass);
}


?>

<nav class="navbar navbar-expand-lg navbar-light">
    <div id="topnav" class="container-fluid">
        <a href="https://zeotechnology.com/" class="navbar-brand">
            <img src="https://mlgoz2o88qp4.i.optimole.com/Z5RX2uE-Lx4Harws/w:600/h:250/q:auto/https://zeotechnology.com/wp-content/uploads/2021/05/zeo-technology-w-600.png"
                 alt="Logo Zeo"
                 width="120" height="50" class="d-sm-none, d-md-block">
        </a>
        <div id="newUser" class="click nav-item">Registrar usuario</div>
        <div id="acceder" class="click nav-item">Acceder</div>
        <div id="listaUser" class="click nav-item">Listado de usuarios</div>

    </div>
</nav>
<!--Alta de usuarios-->
<div id="formAltaUser" style="display: none">
    <form action="index.php" method='POST'>
    <fieldset class="form">
        <legend>Formulario de alta</legend>
        <label for="altName">Nombre:</label><br><input type="text" id="altName" name="altName"
                                                       placeholder="Nombre de usuario" required><br>
        <label for="altEdad">Fecha de nacimiento:</label><br><input type="date" id="altEdad" name="altEdad"
                                                                    required><br>
        <label for="altMail">Email:</label><br><input type="email" id="altMail" name="altMail"
                                                      placeholder="usuario@mail.com" required><br>
        <label for="altPass">Contraseña:</label><br><input type="password" id="altPass" name="altPass"
                                                           placeholder="Contraseña" required><br>
        <input type="submit" name="anyadir" value="Registrar usuario" class="boton">
    </fieldset>
    </form>

</div>

<!--Ventana de autenticacion-->
<div id="autUser" style="display: none">
    <form action="index.php" method="POST">
        <fieldset class="form">
            <legend>Acceso</legend>
            <label for="name">Email:</label><br><input type="text" id="name" name="name" placeholder="Nombre de usuario"
                                                       required><br>
            <label for="pass">Contraseña:</label><br><input type="password" id="pass" name="pass"
                                                            placeholder="Contraseña" required><br>
            <input type="submit" name="acceder" value="Acceder" class="boton">
        </fieldset>
    </form>

</div>

<!--Lista de usuarios-->
<div id="tablaUser">
    <?php
    include_once 'bbdd.php';

    if (session_status() == PHP_SESSION_ACTIVE) {

        showUser();
    }

    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<script src="script.js"></script>
</body>

</html>
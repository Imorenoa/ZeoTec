<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel = stylesheet href = "style.css" type = "text/css">
    <title>Practica ZEO Technology</title>
</head>
<body>
<div id="topnav">
    <div id="newUser" class = "click">Registrar usuario</div>
    <div id="acceder" class = "click">Acceder</div>
    <div id="listaUser" class = "click">Listado de usuarios</div>

</div>
<!--Alta de usuarios-->
<div id="formAltaUser">
    <form action="">
        <label for="altName">Nombre:</label><input type="text" id="altName"><br>
        <label for="altEdad">Edad:</label><input type="number" id="altEdad"><br>
        <label for="altMail">Email:</label><input type="email" id="altMail"><br>
        <label for="altPass">Contraseña:</label><input type="password" id="altPass"><br>
    </form>
</div>
<br>

<!--Ventana de autenticacion-->
<div id="autUser">
    <form action="">
        <label for="name">Email:</label><input type="text" id="name"><br>
        <label for="pass">Contraseña:</label><input type="text" id="pass"><br>
    </form>

</div>
<br>

<!--Lista de usuarios-->
<div id="tablaUser">
    <?php
    include 'bbdd.php';

    showUser();
    ?>
</div>


</body>
<script src = "script.js"></script>
</html>
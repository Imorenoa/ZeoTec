<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica ZEO Technology</title>
</head>
<body>
<div id="topnav">
    <a href="#newuser">Registrar usuario</a>
    <a href="#acceder">Acceder</a>
    <a href="#listauser">Listado de usuarios</a>

</div>
<!--Alta de usuarios-->
<!--<div id="formAltaUser">-->
<!--    <form action="">-->
<!--        <label for="altName">Nombre:</label><input type="text" id="altName"><br>-->
<!--        <label for="altEdad">Edad:</label><input type="number" id="altEdad"><br>-->
<!--        <label for="altMail">Email:</label><input type="email" id="altMail"><br>-->
<!--        <label for="altPass">Contraseña:</label><input type="password" id="altPass"><br>-->
<!--    </form>-->
<!--</div>-->
<!--<br>-->

<!--&lt;!&ndash;Ventana de autenticacion&ndash;&gt;-->
<!--<div id="autUser">-->
<!--    <form action="">-->
<!--        <label for="name">Email:</label><input type="text" id="name"><br>-->
<!--        <label for="pass">Contraseña:</label><input type="text" id="pass"><br>-->
<!--    </form>-->

<!--</div>-->
<!--<br>-->

<!--Lista de usuarios-->
<div id="tablaUser">
    <?php
    include 'bbdd.php';
    $usuarios = getUser();

    echo $usuarios;
?>
</div>


</body>
</html>
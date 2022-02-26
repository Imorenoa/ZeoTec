<!--Conexion a la bbdd-->

<?php

function conectarDb($database)
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $conexion = mysqli_connect($host, $user, $password, $database);

    return $conexion;
}
//Obtencion de los datos de la tabla user
function getUser()
{
    $DB = conectarDb("zeotec");

    $listaUser = "SELECT * FROM user";

    $resultado = mysqli_query($DB, $listaUser);

    return $resultado;

    mysqli_close($DB);

}
//Muestra tabla de usuarios
function showUser()
{
    $usuarios = getUser();

    echo "
<table>
    <tr>
        <th>UserID</th>
        <th>Nombre:</th>
        <th>Edad:</th>
        <th>Email:</th>
    </tr>
</table>";
    foreach ($usuarios as $row) {
        echo "<tr>
            <th>" . $row["UserID"] . "</th>";
        echo "<th>" . $row["Name"] . "</th>";
        echo "<th>" . $row["Birthdate"] . "</th>";
        echo "<th>" . $row["Email"] . "</th>";
        echo "</tr>";

    };
}

function anyadirUser ($altName, $altEdad, $altMail, $altPass) {

    $DB = conectarDb("zeotec");

    $query = "INSERT INTO `user`(`Name`, `Birthdate`, `Email`, `Password`) VALUES ('".$altName."','".$altEdad."','".$altMail."','".$altPass."')";

    $anyadir = mysqli_query($DB, $query);

    if ($anyadir) {
        return $anyadir;
    } else {
        echo "Error al añadir usuario";
    }

    mysqli_close($DB);
}

function checkUser($usuario, $contrasenya){

    $DB = conectarDb("zeotec");
    var_dump($usuario);
    var_dump($contrasenya);

    $query = mysqli_query($DB, "SELECT * FROM 'user' WHERE Name ='$usuario' AND Password '$contrasenya'");


    if (isset($query)){
        session_start();
    }

}

?>
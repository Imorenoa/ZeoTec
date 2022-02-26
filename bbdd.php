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

function getUser()
{
    $DB = conectarDb("zeotec");

    $listaUser = "SELECT * FROM user";

    $resultado = mysqli_query($DB, $listaUser);

    return $resultado;

    mysqli_close($DB);

}

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
    foreach ($usuarios as $row){
        echo "<tr>
            <th>".$row["UserID"]."</th>";
            echo  "<th>".$row["Name"]."</th>";
            echo "<th>".$row["Birthdate"]."</th>";
            echo "<th>".$row["Email"]."</th>";
            echo "</tr>";

    };
}
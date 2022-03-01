<!--Conexion a la bbdd-->

<?php

//Conexion a la base dee datos
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
<table class='table'>
    <tr>
        <th>UserID</th>
        <th>Nombre:</th>
        <th>Edad:</th>
        <th>Email:</th>
    </tr>";
    foreach ($usuarios as $row) {
        echo "<tr>
            <th>" . $row["UserID"] . "</th>";
        echo "<th>" . $row["Name"] . "</th>";
        echo "<th>" . calculaEdad($row["Birthdate"]) . "</th>";
        echo "<th>" . $row["Email"] . "</th>";
        echo "</tr>";


    };
    echo "</table>";
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

    $query = "SELECT * FROM user WHERE Name = '$usuario' AND Password = $contrasenya";

    $result = mysqli_query($DB, "$query");

    $row = mysqli_fetch_assoc($result);

    $filasEncontradas = mysqli_num_rows($result);

    if (isset($result)){
        if ($filasEncontradas >= 1){
            session_start();
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['Password'] = $row['Password'];
            return true;
        } else {

            return false;
        }
    } else {

        return false;
    }
    mysqli_close($DB);
}

//Transformar el formato fecha a la edad actual
function calculaEdad($fechaNac){
    $hoy = date("Y-m-d");

    $edadDif = date_diff(date_create($fechaNac), date_create($hoy) );

    $edad = $edadDif -> format('%y');

    return $edad;
};
?>
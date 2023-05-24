<?php

if(isset($_POST['submit'])){     
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

//Conexion con PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practicasql";

//Create connection
$conn = new mysqli ($servername, $username, $password, $dbname );

//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuario (nombre,apellido, email)
VALUES ('$nombre', '$apellido', '$email')";

$consulta = "SELECT * FROM usuario" ;

if ($conn->query($sql) ===TRUE){
    echo '<script language="javascript">alert("Usuario creado correctamente");</script>';
    
    echo '<p>Usuario creado correctamente <br> <a href="formulario.html">Volver al Formulario</a></p>';

    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>






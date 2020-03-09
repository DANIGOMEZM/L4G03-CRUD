<?php

//Datos de conexion
$host="localhost";//ip, maquina
$user="root";
$password="12345678";
$base="personas";
$con= new mysqli($host,$user,$password,$base);

if($con->connect_error){
    // ->, accede a connect-error
    echo "| Error de conexion |";
}else{
    echo "| Conectado a la BSD |<br>";
}
$nombre=$_POST["nombre"];
$email=$_POST["email"];
echo "Informacion enviada:<br>Nombre:$nombre <br>Email:$email ";
$query="insert into personas(nombre,email) values('$nombre','$email')";
$con->query($query);
$con->close();
header('location: crear.php');
?>
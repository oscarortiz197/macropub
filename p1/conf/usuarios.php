<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

require_once("confg.php");

$Codigo_Empleado=$_POST["Codigo_Empleado"];
$Nombre=$_POST["Nombre"];
$Apellido=$_POST["Apellido"];
$Clave=$_POST["Clave"];
$query="insert into usuarios (Codigo_Empleado,Nombre,Apellido,Clave) values ($Codigo_Empleado,'$Nombre','$Apellido','$Clave')";
$result=$mysql->query($query);
if ($result === true){
    echo "Usuario creado";
   
}else{
    echo "error";
    echo(" query: \n  ".$query);
}

$mysql->close();
}
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

require("confg.php");

$Codigo_Empleado=$_POST["Codigo_Empleado"];
$Clave=$_POST["Clave"];
$Lectura=$_POST["Lectura"];
$query = "SELECT nombre,clave FROM `usuarios` WHERE Codigo_Empleado= $Codigo_Empleado and clave ='$Clave'";
$result = $mysql->query($query);
if ($mysql->affected_rows>0){
    $fecha =date('Y-m-d');
$query2="insert into lecturas(fecha,Codigo_Empleado,lectura,img)values('$fecha',$Codigo_Empleado,$Lectura,null);";

$result2=$mysql->query($query2);
if ($result2 === true){
    echo "lectura ingresa correctamente";
   
}else{
    echo "error";
    echo(" query: \n  ".$query2);
    
}
$result2->close();
}else{
    echo ("error");
}




$result->close();
$mysql->close();
}
?>
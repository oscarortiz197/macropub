<?php
$url="localhost";
$user="root";
$password="Alex197oscar";
$db="macromedidor";
$mysql = new mysqli($url,$user,$password,$db);

if ($mysql->connect_error){
    die ("Error al conectar".mysqli_connect_error());
}
?>
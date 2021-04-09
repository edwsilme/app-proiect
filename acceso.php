<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";	
$dbname = "bdlina";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn)
{
	die("NO SE HA PODIDO ESTABLECER CONEXIÓN: ".mysqli_connect_error());
}

$usuario = $_POST["tusuario"];
$pass = $_POST["tpass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$usuario."' and password = '".$pass."'");
$ini = mysqli_num_rows($query);

if($ini > 1)
{
	header("Location: inicio.html");
}
else if($ini == 0)
{   
	header("Location: acceso.html");
}

?>
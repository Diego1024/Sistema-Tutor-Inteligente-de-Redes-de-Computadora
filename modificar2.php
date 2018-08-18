<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "sti";
$tbl_name = "estudiante";

$link= new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($link->connect_error) {
 die("La conexion falló: " . $link->connect_error);
}
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$aPa=$_POST['aPa'];
$aMa=$_POST['aMa'];
$matricula = $_POST['mtr'];
$pass = $_POST['pass'];
 
$sql = "SELECT * FROM estudiante WHERE matricula = '$matricula' and id != '$id' ";

$result = $link->query($sql);


if ($result->num_rows > 0) {     
 
header("Location: curso.php?id=".urldecode($id));
 } 
 else {
$sql= "UPDATE estudiante set Nombre ='$nombre', Paterno ='$aPa', Materno ='$aMa', Matricula ='$matricula', Pass ='$pass' where id='$id' ";

if(mysqli_query($link, $sql)){

	
	 
	  header("Location: curso.php?id=".urldecode($id));

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
 mysqli_close($link); 
 ?>
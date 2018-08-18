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
$nombre=$_POST['nombre'];
$aPa=$_POST['aPa'];
$aMa=$_POST['aMa'];
$matricula = $_POST['mtr'];
$pass = $_POST['pass'];
 
$sql = "SELECT * FROM estudiante WHERE matricula = '$matricula'";

$result = $link->query($sql);


if ($result->num_rows > 0) {     
 
echo "<br><a href='registro.html'>Usuario ya registrado</a>";
 } 
 else {
$sql= "INSERT INTO estudiante (Matricula,Nombre,Paterno,Materno,Pass)VALUES('$matricula','$nombre','$aPa','$aMa','$pass')";
 
 $consulta = "SELECT MAX(id) as pre_has FROM estudiante";  
 $result = mysqli_query($link, $consulta);
 $row = mysqli_fetch_assoc($result);
 $id = $row['pre_has']+1;
  
  

if(mysqli_query($link, $sql)){

	$sql= "INSERT INTO diagnostico (id,Aciertos,Estilo,estudiante_id) VALUES ('0','0','Ninguno','$id')";
	if(mysqli_query($link, $sql)){
	 
	   header('Location: index.html');


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
 mysqli_close($link); 
 ?>
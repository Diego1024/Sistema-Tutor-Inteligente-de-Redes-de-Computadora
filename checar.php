

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "sti";
$tbl_name = "estudiante";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['mtr'];
$password = $_POST['pass'];
$fi=fopen("usuario.txt","w");
fwrite($fi, $_POST['mtr']);
fclose($fi);
 $sql = "SELECT * FROM profesor WHERE Usuario = '$username' and Pass = '$password'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 
 header('Location: curso1.html');
 } else { 
  $sql = "SELECT * FROM $tbl_name WHERE Matricula = '$username' and Pass = '$password'";

	$result = $conexion->query($sql);
	$consulta = "SELECT id as pre_has FROM estudiante WHERE Matricula = '$username' ";  
 	$result = mysqli_query($conexion, $consulta);
 	$row = mysqli_fetch_assoc($result);
 	$id = $row['pre_has'];

	if ($result->num_rows > 0) {     
 
 	header("Location: curso.php?id=".urldecode($id));

 	} else { 
  	 echo "Username o Password estan incorrectos.";

   	echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 	}
 }



 mysqli_close($conexion); 
 ?>
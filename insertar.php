<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "sti";
$tbl_name = "capitulos";

$link= new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($link->connect_error) {
 die("La conexion falló: " . $link->connect_error);
}
$nombre=$_POST['nombre'];
$num=$_POST['num'];

 if($num >20){
	echo "<br><a href='formulario.html'>El numero maximo de Capitulos son 20</a>";
}

$sql = "SELECT * FROM capitulos WHERE Modulo = '$nombre'";
$result = $link->query($sql);
if ($result->num_rows > 0) {     
echo "<br><a href='formulario.html'>Materia ya registrada</a>";
 } 
 else {


for ($i = 1; $i <$num; $i++) {
    
				$sql= "INSERT INTO capitulos (Modulo,Capitulo)VALUES('$nombre','$i') ";
					if(mysqli_query($link, $sql)){

					}else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
							}
					}
			


}
  
   		$consulta = "SELECT MAX(id) as pre_has FROM capitulos";  
		 $result = mysqli_query($link, $consulta);
		 $row = mysqli_fetch_assoc($result);
		 $id = $row['pre_has']+1;

if(mysqli_query($link, $sql)){
	  
		
		 $sql ="UPDATE capitulos set Capitulo = Capitulo+1 where id = '$id' ";
		 	if(mysqli_query($link, $sql)){
	  
		

					   header('Location: formulario1.php');
				} else{
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 mysqli_close($link); 
 ?>
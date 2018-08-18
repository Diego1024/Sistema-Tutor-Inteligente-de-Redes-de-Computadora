<?php
session_start();
?>

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

$idSubtema = $_POST['id'];



                                     $fi=fopen("usuario.txt","r");
                                     $matricula=fread($fi, 10);
                                     fclose($fi);
                            foreach ($conexion->query("SELECT * from estudiante where Matricula ='$matricula' ") as $r){ 

                            }
                            $id2=$r['id'];
                            foreach ($conexion->query("SELECT * from diagnostico where estudiante_id ='$id2' ") as $fila){ 
                            
                            }
                            $Estilo=$fila['Estilo'];

echo $Estilo;
if ($Estilo=='Pragmatico') {     
 
 header("Location: info.php?id=".urldecode($idSubtema));

 } else if ($Estilo=='Teorico') {     
 
 header("Location: info1.php?id=".urldecode($idSubtema));

 } else if ($Estilo=='Activo') {     
 
 header("Location: info2.php?id=".urldecode($idSubtema));

 } else if ($Estilo=='Reflexivo') {     
 
 header("Location: info3.php?id=".urldecode($idSubtema));
 
 } 

 
  	
 



 mysqli_close($conexion); 
 ?>
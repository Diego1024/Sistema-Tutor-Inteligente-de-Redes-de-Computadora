<?php
session_start();
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "sti";

$link= new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($link->connect_error) {
 die("La conexion falló: " . $link->connect_error);
}

$id=$_POST['id'];
$nom=$_POST['nombre'];


$sql = "SELECT * FROM temas WHERE Nombre = '$nom'";
$result = $link->query($sql);

if ($result->num_rows > 0) {     
echo "<br><a href='curso2.php'>Ya existe un Tema con ese nombre</a>";
 } 
 else {
  echo '$id';

                                      $sql ="UPDATE temas set Nombre= '$nom' where idTema = '$id' ";
                                           if( mysqli_query( $link,$sql) )             
                                              { 
                                                 header('Location: curso2.php');                              
                                        } else {  
                                             echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>" . mysqli_error($link);
                                        }
                                      }
?>
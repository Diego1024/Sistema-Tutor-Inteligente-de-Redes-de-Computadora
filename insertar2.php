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
$nombre=$_POST['nombre'];
$num=$_POST['num'];

if($num >20){
  echo "<br><a href='formulario4.php'>El numero maximo de Subtemas son 20</a>";
}

                                    
                                      $sql ="UPDATE temas set Nombre= '$nombre' where idTema = '$id' ";
                                           if( mysqli_query( $link,$sql) )             
                                              { 


                                                    for ($i = 1; $i <$num; $i++) {
                                                              
                                                                  $sql= "INSERT INTO subtema (Subtema,temas_idTema)VALUES('$i','$id') ";
                                                                    if(mysqli_query($link, $sql)){

                                                                    }else{
                                                                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                                        }

                                                                    }
                                                                


                                                          
                                                            
                                                              $consulta = "SELECT MAX(idSubtema) as pre_has FROM subtema";  
                                                               $result = mysqli_query($link, $consulta);
                                                               $row = mysqli_fetch_assoc($result);
                                                               $id = $row['pre_has']+1;

                                                          if(mysqli_query($link, $sql)){
                                                              
                                                              
                                                               $sql ="UPDATE subtema set Subtema = Subtema+1 where idSubtema = '$id' ";
                                                                if(mysqli_query($link, $sql)){
                                                              
                                                              

                                                                       header('Location: formulario5.php');

                                                                  } else{
                                                                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                                  }
                                                          } else{
                                                              echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                          }

                                                 
                                               
                                        } else {  
                                          echo "1";
                                             echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>" . mysqli_error($link);
                                        }

                                
                             
                            

               
   


?>
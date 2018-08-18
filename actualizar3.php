<?php
$enlace =  mysqli_connect('localhost', 'root', '');
if (!$enlace) {
    die('No hay conexión con la base de datos' . mysqli_error());
}

$id1=$_POST['id'];

mysqli_select_db($enlace, 'sti');

$i=mysqli_query($enlace,"SELECT idSubtema from subtema where idSubtema = '$id1' ");

$fila = mysqli_fetch_row($i);
$id=$fila[0];

//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
  foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
  {
    //Validamos que el archivo exista
    if($_FILES["archivo"]["name"][$key]) {
      $filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
      $source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
      
      $directorio = 'img/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
      
      //Validamos si la ruta de destino existe, en caso de no existir la creamos
      if(!file_exists($directorio)){
        mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");  
      }
      
      $dir=opendir($directorio); //Abrimos el directorio de destino
      $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
      
      //Movemos y validamos que el archivo se haya cargado correctamente
      //El primer campo es el origen y el segundo el destino
      if(move_uploaded_file($source, $target_path)) { 
      	$sql= "UPDATE imagen set folder = '$filename', src='$target_path' where idSubtema= '$id1'";
         

                if( mysqli_query( $enlace,$sql) )             
                { 
            
                } 
        } else {  
        echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
      }
      closedir($dir); //Cerramos el directorio de destino
    }
  }
  //insertar datos propiedades

 

?>


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
$Intro=$_POST['Introduccion'];
$Con=$_POST['Introduccion2'];


$sql = "SELECT * FROM subtema WHERE Nombre = '$nom'";
$result = $link->query($sql);

if ($result->num_rows > 0) {     
echo "<br><a href='curso2.php'>Ya existe un Subtema con ese nombre</a>";
 } 
 else {
  echo '$id';

                                      $sql ="UPDATE subtema set Nombre= '$nom',Introduccion= '$Intro',Contenido= '$Con' where idSubtema = '$id' ";
                                           if( mysqli_query( $link,$sql) )             
                                              { 
                                                 header('Location: curso2.php');                              
                                        } else {  
                                             echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>" . mysqli_error($link);
                                        }
                                      }
?>
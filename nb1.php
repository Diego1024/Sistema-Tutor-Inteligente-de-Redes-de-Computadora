<?php 
require_once('vendor/autoload.php'); 
use Phpml\Classification\NaiveBayes;
use Phpml\ModelManager;
use PHPUnit\Framework\TestCase;
// Training data
$samples = [[.70],[.30],[.65],[.80],[1]];
$labels = ["conoce","conoce cerca del 50%","tiene la idea","conoce bien","domina el concepto"];

// Initialize classifier
$classifier = new NaiveBayes();
// Train classifier
$classifier->train($samples, $labels);

//$q="SELECT p/b from (select count(1) as p from cuestionario where b=1) as T1, (select count(1) as b from cuestionario) as T2"
  /*  $result = mysqli_query($enlace, $q) or oiError(mysql_error($enlace));  
    $ret = mysqli_fetch_array($result);  
    $progreso= $ret[0];  */
$con=$_GET['contador'];
//$query1="INSERT INTO tabla (progreso) VALUES ('$progreso') where id "
$con=$con/20;

// Make predictions	
$a=$classifier->predict([$con]); // return 'a'

$enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                    $consulta =
                     "SELECT MAX(idprogreso) as pre_has FROM progreso";  
					 $result = mysqli_query($enlace, $consulta);
					 $row = mysqli_fetch_assoc($result);
					 $id = $row['pre_has'];

$con=$con*100;
mysqli_query($enlace,"UPDATE progreso set Resultado = '$a', Promedio = '$con' where idprogreso= '$id'");


$fi=fopen("usuario.txt","r");
$matricula=fread($fi, 10);
 fclose($fi);

 foreach ($enlace->query("SELECT * from estudiante where Matricula = '$matricula'") as $row){
 					$id=$row['id'];
                    	
                    }

header("Location: curso.php?id=".urldecode($id));


?>
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

echo $id;

$Pregunta1=$_POST['Pregunta1'];
$Respuesta1=$_POST['Respuesta1'];
$OpcionA1=$_POST['OpcionA1'];
$OpcionB1=$_POST['OpcionB1'];
$OpcionC1=$_POST['OpcionC1'];
$OpcionD1=$_POST['OpcionD1'];

$Pregunta2=$_POST['Pregunta2'];
$Respuesta2=$_POST['Respuesta2'];
$OpcionA2=$_POST['OpcionA2'];
$OpcionB2=$_POST['OpcionB2'];
$OpcionC2=$_POST['OpcionC2'];
$OpcionD2=$_POST['OpcionD2'];

$Pregunta3=$_POST['Pregunta3'];
$Respuesta3=$_POST['Respuesta3'];
$OpcionA3=$_POST['OpcionA3'];
$OpcionB3=$_POST['OpcionB3'];
$OpcionC3=$_POST['OpcionC3'];
$OpcionD3=$_POST['OpcionD3'];

$Pregunta4=$_POST['Pregunta4'];
$Respuesta4=$_POST['Respuesta4'];
$OpcionA4=$_POST['OpcionA4'];
$OpcionB4=$_POST['OpcionB4'];
$OpcionC4=$_POST['OpcionC4'];
$OpcionD4=$_POST['OpcionD4'];

$Pregunta5=$_POST['Pregunta5'];
$Respuesta5=$_POST['Respuesta5'];
$OpcionA5=$_POST['OpcionA5'];
$OpcionB5=$_POST['OpcionB5'];
$OpcionC5=$_POST['OpcionC5'];
$OpcionD5=$_POST['OpcionD5'];

$Pregunta6=$_POST['Pregunta6'];
$Respuesta6=$_POST['Respuesta6'];
$OpcionA6=$_POST['OpcionA6'];
$OpcionB6=$_POST['OpcionB6'];
$OpcionC6=$_POST['OpcionC6'];
$OpcionD6=$_POST['OpcionD6'];

$Pregunta7=$_POST['Pregunta7'];
$Respuesta7=$_POST['Respuesta7'];
$OpcionA7=$_POST['OpcionA7'];
$OpcionB7=$_POST['OpcionB7'];
$OpcionC7=$_POST['OpcionC7'];
$OpcionD7=$_POST['OpcionD7'];

$Pregunta8=$_POST['Pregunta8'];
$Respuesta8=$_POST['Respuesta8'];
$OpcionA8=$_POST['OpcionA8'];
$OpcionB8=$_POST['OpcionB8'];
$OpcionC8=$_POST['OpcionC8'];
$OpcionD8=$_POST['OpcionD8'];

$Pregunta9=$_POST['Pregunta9'];
$Respuesta9=$_POST['Respuesta9'];
$OpcionA9=$_POST['OpcionA9'];
$OpcionB9=$_POST['OpcionB9'];
$OpcionC9=$_POST['OpcionC9'];
$OpcionD9=$_POST['OpcionD9'];

$Pregunta10=$_POST['Pregunta10'];
$Respuesta10=$_POST['Respuesta10'];
$OpcionA10=$_POST['OpcionA10'];
$OpcionB10=$_POST['OpcionB10'];
$OpcionC10=$_POST['OpcionC10'];
$OpcionD10=$_POST['OpcionD10'];

$Pregunta11=$_POST['Pregunta11'];
$Respuesta11=$_POST['Respuesta11'];
$OpcionA11=$_POST['OpcionA11'];
$OpcionB11=$_POST['OpcionB11'];
$OpcionC11=$_POST['OpcionC11'];
$OpcionD11=$_POST['OpcionD11'];

$Pregunta12=$_POST['Pregunta12'];
$Respuesta12=$_POST['Respuesta12'];
$OpcionA12=$_POST['OpcionA12'];
$OpcionB12=$_POST['OpcionB12'];
$OpcionC12=$_POST['OpcionC12'];
$OpcionD12=$_POST['OpcionD12'];

$Pregunta13=$_POST['Pregunta13'];
$Respuesta13=$_POST['Respuesta13'];
$OpcionA13=$_POST['OpcionA13'];
$OpcionB13=$_POST['OpcionB13'];
$OpcionC13=$_POST['OpcionC13'];
$OpcionD13=$_POST['OpcionD13'];

$Pregunta14=$_POST['Pregunta14'];
$Respuesta14=$_POST['Respuesta14'];
$OpcionA14=$_POST['OpcionA14'];
$OpcionB14=$_POST['OpcionB14'];
$OpcionC14=$_POST['OpcionC14'];
$OpcionD14=$_POST['OpcionD14'];

$Pregunta15=$_POST['Pregunta15'];
$Respuesta15=$_POST['Respuesta15'];
$OpcionA15=$_POST['OpcionA15'];
$OpcionB15=$_POST['OpcionB15'];
$OpcionC15=$_POST['OpcionC15'];
$OpcionD15=$_POST['OpcionD15'];

$Pregunta16=$_POST['Pregunta16'];
$Respuesta16=$_POST['Respuesta16'];
$OpcionA16=$_POST['OpcionA16'];
$OpcionB16=$_POST['OpcionB16'];
$OpcionC16=$_POST['OpcionC16'];
$OpcionD16=$_POST['OpcionD16'];

$Pregunta17=$_POST['Pregunta17'];
$Respuesta17=$_POST['Respuesta17'];
$OpcionA17=$_POST['OpcionA17'];
$OpcionB17=$_POST['OpcionB17'];
$OpcionC17=$_POST['OpcionC17'];
$OpcionD17=$_POST['OpcionD17'];

$Pregunta18=$_POST['Pregunta18'];
$Respuesta18=$_POST['Respuesta18'];
$OpcionA18=$_POST['OpcionA18'];
$OpcionB18=$_POST['OpcionB18'];
$OpcionC18=$_POST['OpcionC18'];
$OpcionD18=$_POST['OpcionD18'];

$Pregunta19=$_POST['Pregunta19'];
$Respuesta19=$_POST['Respuesta19'];
$OpcionA19=$_POST['OpcionA19'];
$OpcionB19=$_POST['OpcionB19'];
$OpcionC19=$_POST['OpcionC19'];
$OpcionD19=$_POST['OpcionD19'];

$Pregunta20=$_POST['Pregunta20'];
$Respuesta20=$_POST['Respuesta20'];
$OpcionA20=$_POST['OpcionA20'];
$OpcionB20=$_POST['OpcionB20'];
$OpcionC20=$_POST['OpcionC20'];
$OpcionD20=$_POST['OpcionD20'];

$arreglo1=array($Pregunta1,$Pregunta2,$Pregunta3,$Pregunta4,$Pregunta5,$Pregunta6,$Pregunta7,$Pregunta8,$Pregunta9,$Pregunta10,$Pregunta11,$Pregunta12,$Pregunta13,$Pregunta14,$Pregunta15,$Pregunta16,$Pregunta17,$Pregunta18,$Pregunta19,$Pregunta20);

$arreglo2=array($Respuesta1,$Respuesta2,$Respuesta3,$Respuesta4,$Respuesta5,$Respuesta6,$Respuesta7,$Respuesta8,$Respuesta9,$Respuesta10,$Respuesta11,$Respuesta12,$Respuesta13,$Respuesta14,$Respuesta15,$Respuesta16,$Respuesta17,$Respuesta18,$Respuesta19,$Respuesta20);

$arreglo3=array($OpcionA1,$OpcionA2,$OpcionA3,$OpcionA4,$OpcionA5,$OpcionA6,$OpcionA7,$OpcionA8,$OpcionA9,$OpcionA10,$OpcionA11,$OpcionA12,$OpcionA13,$OpcionA14,$OpcionA15,$OpcionA16,$OpcionA17,$OpcionA18,$OpcionA19,$OpcionA20);

$arreglo4=array($OpcionB1,$OpcionB2,$OpcionB3,$OpcionB4,$OpcionB5,$OpcionB6,$OpcionB7,$OpcionB8,$OpcionB9,$OpcionB10,$OpcionB11,$OpcionB12,$OpcionB13,$OpcionB14,$OpcionB15,$OpcionB16,$OpcionB17,$OpcionB18,$OpcionB19,$OpcionB20);

$arreglo5=array($OpcionC1,$OpcionC2,$OpcionC3,$OpcionC4,$OpcionC5,$OpcionC6,$OpcionC7,$OpcionC8,$OpcionC9,$OpcionC10,$OpcionC11,$OpcionC12,$OpcionC13,$OpcionC14,$OpcionC15,$OpcionC16,$OpcionC17,$OpcionC18,$OpcionC19,$OpcionC20);

$arreglo6=array($OpcionD1,$OpcionD2,$OpcionD3,$OpcionD4,$OpcionD5,$OpcionD6,$OpcionD7,$OpcionD8,$OpcionD9,$OpcionD10,$OpcionD11,$OpcionD12,$OpcionD13,$OpcionD14,$OpcionD15,$OpcionD16,$OpcionD17,$OpcionD18,$OpcionD19,$OpcionD20);

$sql = "SELECT * FROM cuestionario WHERE capitulos_id = '$id'";
$result = $link->query($sql);
if ($result->num_rows > 0) {     
echo "<br><a href='formulario.html'>Este Capitulo ya tiene Cuestionario </a>";
 } 
 else {

 	for ($i=0; $i<19 ; $i++) { 
 		$R=$i+1;


 		               $sql= "INSERT INTO cuestionario (Pregunta,Num,Respuesta,opcionA,opcionB,opcionC,opcionD,capitulos_id
)VALUES('$arreglo1[$i]','$R','$arreglo2[$i]','$arreglo3[$i]','$arreglo4[$i]','$arreglo5[$i]','$arreglo6[$i]','$id') ";
                                                   
                                                   if(mysqli_query($link, $sql)){

                                                   			



                                                          }else{

                                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

                                                           }

                                                                 
 	}



 							$consulta = "SELECT MAX(idCuestionario) as pre_has FROM cuestionario";  
                                                               $result = mysqli_query($link, $consulta);
                                                               $row = mysqli_fetch_assoc($result);
                                                               $id = $row['pre_has']+1;

                                                          if(mysqli_query($link, $sql)){
                                                              
                                                              
                                                               $sql ="UPDATE cuestionario set Pregunta = '$arreglo1[19]', Num ='20',Respuesta = '$arreglo2[19]',OpcionA = '$arreglo3[19]',OpcionB = '$arreglo4[19]',OpcionC = '$arreglo5[19]',OpcionA = '$arreglo6[19]' where idCuestionario = '$id' ";
                                                                if(mysqli_query($link, $sql)){
                                                              
                                                              

                                                                       header('Location: formulario3.php');

                                                                  } else{
                                                                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                                  }


				}
}
 
 mysqli_close($link); 
 ?>
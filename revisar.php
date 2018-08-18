<?php 

$id=$_POST['id'];
$arreglo[]=20;
$i=0;
$contador=0;;
foreach ($_POST['Uno'] as $answer) {
    
         $arreglo[$i]= $answer;
$i++;
}

$fi=fopen("usuario.txt","r");
$matricula=fread($fi, 10);
 fclose($fi);

	$enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                    foreach ($enlace->query("SELECT * from capitulos where id = '$id'") as $row){

                    	$Mod=$row['Modulo'];
                    	$Cap=$row['Capitulo'];
                    }
				
                               
                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 1") as $row1){ 

                 if ($row1['Respuesta'] == $arreglo[0]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 2") as $row2){ 

                 if ($row2['Respuesta'] == $arreglo[1]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row1['Respuesta']== $arreglo[0] && $row2['Respuesta'] == $arreglo[1]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',1,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',1,'No paso','$matricula')");

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 3") as $row3){ 

                 if ($row3['Respuesta'] == $arreglo[2]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 4") as $row4){ 

                 if ($row4['Respuesta'] == $arreglo[3]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[2] && $row4['Respuesta'] == $arreglo[3]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',2,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',2,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 5") as $row5){ 

                 if ($row5['Respuesta'] == $arreglo[4]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }



                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 6") as $row6){ 

                 if ($row6['Respuesta'] == $arreglo[5]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[4] && $row4['Respuesta'] == $arreglo[5]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',3,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',3,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 7") as $row7){ 

                 if ($row7['Respuesta'] == $arreglo[6]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 8") as $row8){ 

                 if ($row8['Respuesta'] == $arreglo[7]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[6] && $row4['Respuesta'] == $arreglo[7]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',4,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',4,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 9") as $row9){ 

                 if ($row9['Respuesta'] == $arreglo[8]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 10") as $row10){ 

                 if ($row10['Respuesta'] == $arreglo[9]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[8] && $row4['Respuesta'] == $arreglo[9]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',5,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',5,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 11") as $row11){ 

                 if ($row11['Respuesta'] == $arreglo[10]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 12") as $row12){ 

                 if ($row12['Respuesta'] == $arreglo[11]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[10] && $row4['Respuesta'] == $arreglo[11]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',6,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',6,'No paso','$matricula')");
                 }
                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 13") as $row13){ 

                 if ($row13['Respuesta'] == $arreglo[12]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 14") as $row14){ 

                 if ($row14['Respuesta'] == $arreglo[13]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[12] && $row4['Respuesta'] == $arreglo[13]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',7,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',7,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 15") as $row15){ 

                 if ($row15['Respuesta'] == $arreglo[14]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 16") as $row16){ 

                 if ($row16['Respuesta'] == $arreglo[15]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[14] && $row4['Respuesta'] == $arreglo[15]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',8,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',8,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 17") as $row17){ 

                 if ($row17['Respuesta'] == $arreglo[16]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 18") as $row18){ 

                 if ($row18['Respuesta'] == $arreglo[17]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[16] && $row4['Respuesta'] == $arreglo[17]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',9,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',9,'No paso','$matricula')");
                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 19") as $row19){ 

                 if ($row19['Respuesta'] == $arreglo[18]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 20") as $row20){ 

                 if ($row20['Respuesta'] == $arreglo[19]) {
                  	
                  	$contador=$contador+1;
                  } 

                 }

                 if($row3['Respuesta']== $arreglo[18] && $row4['Respuesta'] == $arreglo[19]){
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',10,'Paso','$matricula')");

                 }else{
                 	mysqli_query($enlace,"INSERT INTO arbol (Modulo,Capitulo,Tema,Status,Matricula) VALUES ('$Mod','$Cap',10,'No paso','$matricula')");
                 }

mysqli_query($enlace,"INSERT INTO progreso (Modulo,Capitulo,Correctas,Matricula) VALUES ('$Mod','$Cap','$contador','$matricula')");

		$contador=$contador%20;
header("Location: nb1.php?contador=".urldecode($contador));
                 

?>
<?php
$enlace = mysqli_connect("localhost", "root", "", "sti");
$a1=0;
$b1=0;
$a2=0;
$b2=0;
$a3=0;
$b3=0;
$a4=0;
$b4=0;
$ap=0;
$as=0;
$at=0;
$ac=0;
// obtenemos los valores del test y procesamos

foreach ($_POST['uno'] as $answer) {
    if ($answer=='a')
    {
    	$a1++;

    }else
    $b1++;
}


$ap=abs($a1-$b1);

// evaluamos el primer segmento
 
 // evaluamos el segundo segmento
 $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                            $fi=fopen("usuario.txt","r");
                                            $matricula=fread($fi, 10);
                                            fclose($fi);
                                    
                                $consulta = "SELECT id as pre_has FROM estudiante WHERE Matricula = '$matricula' ";  
                                $result = mysqli_query($enlace, $consulta);
                                $row = mysqli_fetch_assoc($result);
                                $id = $row['pre_has'];


if($a1>$b1)
 {
    if($ap>=1&&$ap<=3){
        mysqli_query($enlace,"UPDATE  diagnostico set Aciertos ='$ap', Estilo='Activo' where estudiante_id='$id'");
        header("Location: curso.php?id=".urldecode($id));
    }
    if($ap>=5&&$ap<=7){
        mysqli_query($enlace,"UPDATE  diagnostico set Aciertos ='$ap', Estilo='Reflexivo' where estudiante_id='$id'");
        header("Location: curso.php?id=".urldecode($id));
    }
    if($ap>=9&&$ap<=11){
        mysqli_query($enlace,"UPDATE  diagnostico set Aciertos ='$ap', Estilo='Teorico' where estudiante_id='$id'");
        header("Location: curso.php?id=".urldecode($id));
    }
 }else if($b1>$a1){
    if($ap>=1&&$ap<=3){
        mysqli_query($enlace,"UPDATE  diagnostico set Aciertos ='$ap', Estilo='Pragmatico' where estudiante_id='$id'");
        header("Location: curso.php?id=".urldecode($id));
    }
    
    }

 






?>
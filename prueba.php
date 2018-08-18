<!doctype html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ======= titles ======= -->
    <title>Believed - Nonprofit HTML5 Responsive Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="themewarehouse">
    <!-- ======= favicon ======= -->
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- ======= Google Fonts ======= -->
    <!-- Lato+Raleway Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- ======= all css ======= -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- hover css -->
    <link rel="stylesheet" href="css/hover.css">
    <!-- hover css -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- slicknav css -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- ======= preloader part start ======= -->
    <div class="preloader">
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
            <h1>Loading&hellip;</h1>
        </div>
    </div>
    <!-- ======= preloader part start ======= -->

    <!-- ======= header part start ======= -->
    <header class="header-area">
        <!-- top  header area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- header contact -->
                      
                    </div>
                    <div class="col-md-5 text-right">
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- menu area -->
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <!-- logo part -->
                        <div class="believed-logo">
                            <a href="index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <!-- mobile menu wraper -->
                        <div class="responsive-menu-wrap"></div>
                    </div>
                    <div class="col-md-10">
                        <!-- menu part -->
                        <nav class="main-menu">
                            <ul class="navigation">
                                <li><a href="curso1.html">Progreso de Alumnos</a></li>
                                
                            </ul>
                        </nav>
                        <!-- donate box -->
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= header part end ======= -->

    <!-- ======= page title part srat ======= -->
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <h2>Introduce los datos correspondientes</h2>
                        </div>
                        <ul class="breadcrumb">
                            
                            <li class="active">Nueva Materia</a></li>
                            <li><a href="volunteers-3col.html">Ver Materia</a></li>
                            <li><a href="volunteers-3col.html">Actualizar Contenido</a></li>
                            <li><a href="volunteers-3col.html">Eliminar Contenido</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= Contact Area Start ======= -->
    <section class="contact-area section-padding parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <?php 
                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                    $id=$_POST['id'];
                                foreach ($enlace->query("SELECT * from capitulos where id ='$id' ") as $r){ 
                            }   
                                $Num=$r['Capitulo'];

                         ?>
                        <h2>Cuestionario Capitulo <?php echo $Num ?></h2>
                        <br>
                        <br>
                        <h3>Responde las siguientes preguntas</h3>
                                    INSTRUCCIONES 
                                    <p>• Seleccione la opción "a" , "b" , "c" , "d" para indicar su respuesta a cada
                                    pregunta</p>
                                    
                                    <p>• Al terminar este Cuestionario puedes consultar tu resultado en tu perfil</p>
                               
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="contact-form bg-trans">
                        
                            <div class="title" align="center">
                              
                <form method="post" action="revisar.php">
                               
                               <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 1") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[1]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[1]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[1]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[1]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 2") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[2]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[2]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[2]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[2]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 3") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[3]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[3]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[3]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[3]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 4") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[4]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[4]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[4]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[4]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 5") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[5]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[5]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[5]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[5]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 6") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[6]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[6]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[6]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[6]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 7") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[7]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[7]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[7]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[7]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 8") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[8]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[8]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[8]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[8]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 9") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[9]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[9]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[9]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[9]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 10") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[10]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[10]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[10]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <input type="checkbox" name="Uno[10]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 11") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[11]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[11]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[11]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[11]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 12") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[12]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[12]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[12]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[12]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 13") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[13]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[13]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[13]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[13]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 14") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[14]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[14]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[14]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[14]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 15") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[15]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[15]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[15]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[15]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 16") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[16]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[16]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[16]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[16]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 17") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[17]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[17]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[17]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[17]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 18") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[18]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[18]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[18]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[18]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 19") as $row){  ?>
                            
                                
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[19]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[19]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[19]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[19]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $id=$_POST['id'];

                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                        
                                mysqli_set_charset($enlace,"UTF8");

                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 20") as $row){  ?>
                            
                                    <h2> Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <input type="checkbox" name="Uno[20]" value="<?php echo $row['opcionA'] ?>"><?php echo $row['opcionA'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[20]" value="<?php echo $row['opcionB'] ?>"><?php echo $row['opcionB'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[20]" value="<?php echo $row['opcionC'] ?>"><?php echo $row['opcionC'] ?>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="Uno[20]" value="<?php echo $row['opcionD'] ?>"><?php echo $row['opcionD'] ?>
                                    <br>
                                    <br>





                            <?php $a=$a+1; 
                        } ?>


            <button value=<?php echo $row['capitulos_id'] ?> name='id' type="submit" name="submit" class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal">Continuar </button>          

                </form>

                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Contact Area End ======= -->

    <!-- ======= Map Area Start ======= -->
    <section class="map-area">
        <div class="google-map-area">
            <!-- map -->
            <div id="map"></div>
            <!-- /.map -->
            <!-- address info -->
            <div class="address">
                <!-- heading -->
                <div class="heading">
                    <h2>contact info</h2>
                </div>
                <!-- /.heading -->
                <div class="address-info">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>(+1) 1234 567 8900</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>info@yormail.com</li>
                        <li><i class="fa fa-home" aria-hidden="true"></i>Architecture Downtown St, Melbourne Australia</li>
                    </ul>
                    <div class="footer-social-link">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.address info -->
        </div>
    </section>
    <!-- ======= Map Area End ======= -->

    <!-- ======= call to action part start ======= -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-to-main">
                        <h2>We care for children, protect their welfare, and prepare them for the future.</h2>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <div class="donate-call">
                        <a href="#" class="donate-btn more-btn hvr-shutter-out-horizontal"><i class="fa fa-send"></i>donate now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= call to action part end ======= -->

    <!-- ======= footer area start ======= -->
    <footer class="footer-area parallax">
        <div class="top-footer-area section-padding">
            <div class="container">
                <div class="row">
                    <!-- footer widgets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets">
                            <h2>Head Office</h2>
                            <p>Lorem ipsum dolor sit amet, sed do eiusmod temporia.</p>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="#">+256-4516-556</a></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">support@beieved.com</a></li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> 100 Main St, Blacktown NSW 2148, Australia</li>
                            </ul>
                            <!-- footer social link -->
                            <div class="footer-social-link">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer widgets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets">
                            <h2>quick links</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Our Recent Project</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Latest Blog</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Terms of Use</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>About Our Company</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>latest Project</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>helping hand</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Contact With Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer widgets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets ">
                            <h2>Useful Pages</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Our Recent Project</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Latest Blog</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Terms of Use</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>latest Project</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>helping hand</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>About Our Company</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Contact With Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer widgets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets m-unset">
                            <h2>Photo Gallery</h2>
                            <ul class="list">
                                <li><a href="img/gallery/01.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/01.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/02.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/02.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/03.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/03.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/04.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/04.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/05.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/05.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/06.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/06.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/07.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/07.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/08.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/08.jpg" alt="#"></a></li>
                                <li><a href="img/gallery/03.jpg" data-lightbox="example-set" data-title="believed"><img src="img/gallery/03.jpg" alt="#"></a></li>
                            </ul>
                            <div class="subscribe-box">
                                <input type="text" placeholder="subscribe here">
                                <button type="submit" class="donate-btn more-btn hvr-shutter-out-horizontal"><i class="fa fa-send"></i>sent</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer-area">
            <div class="container">
                <!-- copy right -->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="copy-right">
                            <p>Copyright &copy; 2018 <a href="https://themeforest.net/user/urosd/portfolio" target="_blank">| urosd |</a> all rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======= footer area end ======= -->

    <!-- ======= All js ======= -->
    <!-- modernizr js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jQuery min js -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- sticky js -->
    <script src="js/jquery.sticky.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- jarallax js -->
    <script src="js/jarallax.min.js"></script>
    <!-- waypoints js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- barfiller js -->
    <script src="js/jquery.barfiller.js"></script>
    <!-- countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- countdown js -->
    <script src="js/isotope.min.js"></script>
    <!-- lightbox js -->
    <script src="js/lightbox.min.js"></script>
    <!-- scrollUp js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- slick js -->
    <script src="js/slicknav.min.js"></script>
    <!-- ====== gmap3 js ======= -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq4jmXOSB3mlhBKAmVhWq5BUmFzvwWIsk"></script>
    <script src="js/gmap3.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>





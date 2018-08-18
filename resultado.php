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
                                <li><a href="CURSOO.php">Progreso de Alumnos</a></li>
                                
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
                            <h2>Resultado</h2>
                        </div>
                        <ul class="breadcrumb">
                            
                            <li><a href="CURSOO.php">Volver</a></li>
                            <li class="active">Resultados</li>
                            
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
                                    $Mat=$_POST['Mat'];
                                    $Mod=$_POST['Mod'];
                                    $Cap=$_POST['Cap'];
                                    

                                    
                                    
                                    $consulta = "SELECT id as pre_has FROM capitulos WHERE Modulo = '$Mod' and Capitulo ='$Cap' ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $row = mysqli_fetch_assoc($result);
                                    $id = $row['pre_has'];

                                foreach ($enlace->query("SELECT * from capitulos where Capitulo ='$Cap' and Modulo ='$Mod' ") as $r){ 
                            }   
                                

                         ?>
                        <h2>Cuestionario Capitulo <?php echo $Cap ?></h2>
                        <br>
                        <br>
                        <h3>Resultados del Alumno <?php echo $Mat ?></h3>
                                 
                                    
                               
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="contact-form bg-trans">
                        
                            <div class="title" align="center">
                              
                
                               
                               <?php 
                                

                        
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 1") as $row){  
                                    $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 1";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>




                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                            
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 2") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 1";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 3") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 2";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 4") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 2";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 5") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 3";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>




                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                               
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 6") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 3";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                               
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 7") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 4";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>


                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 8") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 4";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>



                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                               
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 9") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 5 ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 10") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 5";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 11") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 6";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 12") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 6";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                               
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 13") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 7 ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>




                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 14") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 7";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>




                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 15") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 8 ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 16") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 8 ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 17") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 9";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 18") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 9";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                               
                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 19") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 10 ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>

                        <?php 
                                
                                        
                               

                                $a=0;
                            foreach ($enlace->query("SELECT * from cuestionario where capitulos_id = '$id' and Num = 20") as $row){  $consulta = "SELECT status as pre_has FROM arbol WHERE Modulo = '$Mod' and Capitulo ='$Cap' and Matricula= '$Mat' and Tema = 10 ";  
                                    $result = mysqli_query($enlace, $consulta);
                                    $fila = mysqli_fetch_assoc($result);
                                    $Status = $fila['pre_has'];
                                        ?>
                                    <?php if($Status=='Paso'){ ?>
                                    
                                    
                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:green"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:green"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>

                                    <?php } else { ?>

                                    <h2 > Pregunta <?php echo $row['Num'] ?> </h2>
                                    <br>
                                    <br>
                                    <h4 style="color:red"><?php echo $row['Pregunta'] ?> </h4>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionA'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionB'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionC'] ?></p>
                                    <br>
                                    <br>
                                    <p style="color:red"><?php echo $row['opcionD'] ?></p>
                                    <br>
                                    <br>
                                    <?php } ?>





                            <?php $a=$a+1; 
                        } ?>


                  

               

                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Contact Area End ======= -->

    <!-- ======= Map Area Start ======= -->
   
    <!-- ======= Map Area End ======= -->

    <!-- ======= call to action part start ======= -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="call-to-main">
                        
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <div class="donate-call">
                       
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
                            
                           
                        </div>
                    </div>
                    <!-- footer widgets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets ">
                            
                        </div>
                    </div>
                    <!-- footer widgets -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets m-unset">
                            
                            <div class="subscribe-box">
                               
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
                            <p>Copyright &copy; 2018  all rights reserved.</p>
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





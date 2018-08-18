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
    <title>Curso</title>
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

        <!-- menu area -->
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <!-- logo part -->
                        <div class="believed-logo">
                            
                        </div>
                        <!-- mobile menu wraper -->
                        <div class="responsive-menu-wrap"></div>
                    </div>
                    <div class="col-md-10">
                        <!-- menu part -->
                        
                        <nav class="main-menu">
                            <ul class="navigation">
                                <li><a class="menu-active">Progreso de alumnos</a></li>
                                <li><a href="#">Curso<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="drop-menu">
                                        <li><a href="formulario.html">Nueva Materia</a></li>
                                        <li><a href="curso2.php">Ver Materias / Actualizar Materias</a></li>
                                        <li><a href="curso2.php">Eliminar Materias</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- donate box -->
                        <div class="donate-box">
                            <a href="salir.php" class="donate-btn hvr-shutter-out-horizontal">Cerrar sesión</a>
                        </div>
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
                            <h2>Progreso de los Alumnos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= events details part start ======= -->
    <section class="causes-area section-padding">
        <div class="container">
            <div class="row">
                        <?php 
                            $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                    
                                    $consulta = "SELECT * FROM progreso";  
                                         $result = mysqli_query($enlace, $consulta);
                                    
                                        
                                        
                                            if ($result->num_rows > 0) {
                                                foreach ($enlace->query("SELECT * from progreso") as $fila){

                              ?>

                <div class="col-md-3 col-sm-6">
                    <!-- single causes -->
                    <div class="causes-info">
                        <div class="causes-img">
                            <?php if($fila['Promedio']>69){ ?>
                                            <img src="img/Paloma.jpg" alt="" width="50" height="300">
                                            <?php }else{ ?>
                                            <img src="img/tache2.png" alt="">
                                            <?php }?>
                            <div class="project-count-info">
                                <span style="background-color: black" class="counter" data-count= <?php echo $fila['Promedio'] ?> >0</span> 
                            </div>
                        </div>
                        <form method="post" action="resultado.php" target="_blank">
                        <div class="causes-details">
                            <h2>Resultado</h2>
                            <p><?php echo $fila['Resultado']?></p>
                            <div class="right">
                                <span>Matricula:<?php echo $fila['Matricula'] ?></span>
                                <span>Modulo:<?php echo $fila['Modulo'] ?></span>
                                <span>Capitulo:<?php echo $fila['Capitulo'] ?></span>
                                <span>Promedio:</span>
                            </div>
                            <div class="condition-donate causes">
                                
                                <input type="hidden" name="Mod" value='<?php echo $fila['Modulo'] ?>' >
                                <input type="hidden" name="Cap" value=<?php echo $fila['Capitulo'] ?>>
                                    <button value=<?php echo $fila['Matricula'] ?> name='Mat' type="submit" name="submit" class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal">Ver Resultados </button>
                                
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <?php  }?>
                                
                                <?php }else{ ?>

                                  <h2>No hay ningún examen realizado</h2>

                                  <?php } ?>
                
                
                
            </div>
            <div class="row">
                
                
               
                
            </div>
        </div>
    </section>

    
    <!-- ======= events details part end ======= -->

    <!-- ======= events registration part start ======= -->
    
    <!-- ======= events registration part end ======= -->

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
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>

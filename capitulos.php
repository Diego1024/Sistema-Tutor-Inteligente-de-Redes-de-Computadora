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
                        <div class="top-header-info">
                            <i class="fa fa-clock-o"></i> Sun - Sat, 9am - 5pm<span class="seprator">|</span>
                            <a href="#"><i class="fa fa-phone"></i>11-22-33-44-55</a><span class="seprator">|</span>
                            <a href="mailto:believed@gmail.com"><i class="fa fa-envelope"></i>believed@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-5 text-right">
                        <div class="top-header-info header-right">
                            <!-- header support -->
                            <a href="#">faq</a><span class="seprator">|</span>
                            <a href="#">contact us</a><span class="seprator">|</span>
                            <a href="#">live chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- ======= header part end ======= -->

    <!-- ======= page title part srat ======= -->
    <section class="page-title-area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title -->
                    <div class="page-title">
                        <div class="title">
                            <?php
                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $Mod=$_POST['Modulo'];

                            foreach ($enlace->query("SELECT * from capitulos where Modulo like '%$Mod%'") as $row){  ?>
                            
                            <?php } ?>
                            <h2><?php echo $row['Modulo']?></h2>
                        </div>
                        <ul class="breadcrumb">
                            <?php 
                            $fi=fopen("usuario.txt","r");
                                     $matricula=fread($fi, 10);
                                     fclose($fi);
                            foreach ($enlace->query("SELECT * from estudiante where Matricula ='$matricula' ") as $r){ 

                            }
                            $id2=$r['id'];
                            ?>

                            <li><a href="curso.php?id=<?php echo $r['id'] ?> ">Volver</a></li>
                            <li><a >Materias</a></li>
                            <li class="active">Capitulos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->
              <?php
                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                $Mod=$_POST['Modulo'];

                            foreach ($enlace->query("SELECT * from capitulos where Modulo like '%$Mod%'") as $row){  ?>
    <!-- ======= volunteers details part start ======= -->
    <section class="volunteers-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="volunteers-img">
                        <img src="img/redes.jpg" alt="">
                    </div>
                </div>
                

                
                <div class="col-md-8 col-sm-7">
                    <div class="volunteers-info">
                        <h4>Capitulo <?php echo $row['Capitulo'] ?></h4>

                        <span> <?php echo $row['Nombre'] ?> </span>
                        
                        <p><?php echo $row['Introduccion'] ?></p>
                        <?php if ($row['Capitulo']>1){
                                    $fi=fopen("usuario.txt","r");
                                     $matricula=fread($fi, 10);
                                     fclose($fi);
                                       $Cap=$row['Capitulo']-1;
                $consulta = "SELECT * FROM progreso WHERE Matricula ='$matricula' and Promedio >=70 and Capitulo= '$Cap' ";  
                                        $result = mysqli_query($enlace, $consulta) ;
                                        if ($result->num_rows > 0) { ?>
                                             <form method="post" action="temas.php" target="">     
                                                <button value=<?php echo $row['id'] ?> name='id' type="submit" name="submit"  class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal" dir="temas.php"> Ver Capitulo</button>
                                            </form>
                                            <form method="post" action="prueba.php" target="">
                                                <button value=<?php echo $row['id'] ?> name='id' type="submit"  class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal"> Realizar Cuestionario</button>
                                             </form>

                                       <?php }else{ 

                                        echo 'Materia Bloqueda';
                                        } ?>
                        <?php }else{?>
                            <form method="post" action="temas.php" target="">     
                                                <button value=<?php echo $row['id'] ?> name='id' type="submit" name="submit"  class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal" dir="temas.php"> Ver Capitulo</button>
                                            </form>
                                            <form method="post" action="prueba.php" target="">
                                                <button value=<?php echo $row['id'] ?> name='id' type="submit"  class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal"> Realizar Cuestionario</button>
                                             </form>

                        <?php } ?>
                  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>
    <!-- ======= volunteers details part end ======= -->
    

    <!-- ======= call to action part start ======= -->
    
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
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>

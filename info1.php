<!doctype html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx" class="no-js">
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

    <!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
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
                        
                                           </div>
                </div>
            </div>
        </div>
    </header>

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
                                $id=$_GET['id'];

                            foreach ($enlace->query("SELECT * from subtema where idSubtema = '$id' ") as $row){  ?>
                            
                            <?php } ?>
                            <h2>Subtema <?php echo $row['Subtema']?></h2>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="curso.php">Volver</a></li>
                            <li><a >Materias</a></li>
                            <li><a >Capitulos</a></li>
                            <li><a >Temas</a></li>
                            <li class="active">Subtemas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= causes part start ======= -->
    <div class="single-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- blog article -->
                        <?php
                        $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }

                                $id=$_GET['id'];
                                
                            foreach ($enlace->query("SELECT * from subtema where idSubtema = '$id'") as $row){  ?>


                    <article class="single-blog-content">
                        <h4><?php echo $row['Nombre'] ?> </h4>
                        <br>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">



                                <div class="item active">
                                            <?php
                                            
                                                $id1=$row['idSubtema'];
                                            $enlace =  mysqli_connect('localhost', 'root', '','sti');
                                            if (!$enlace) {
                                                die('No hay conexión con la base de datos' . mysqli_error());
                                            }
                                                
                                            $consulta = "SELECT  folder,src FROM imagen  where  idSubtema = $id1 and id_foto=1";
                                            $sql = mysqli_query($enlace, $consulta) or trigger_error("error de consulta");
                                            $f=mysqli_fetch_array($sql);
                                            echo'<img src="'.$f['src'].'"/>';
                                            ?>

                                </div>
                                
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <h2>Introducción</h2>
                        <div class="blog-get-info">
                            
                        </div>
                        <p><?php echo $row['Introduccion'] ?> </p>
                        <br>
                        <br>
                        
                        
                        
                    </article>
  
                </div>
                <div class="col-md-4">
                    <aside class="sidebar-widget widget-search">
                        <form method="get" action="#">
                            <input placeholder="Buscar" value="" name="search" type="search">
                            <button title="Search" name="submit" type="submit" class="sub_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </aside>
                    <!-- single sidebar -->
                    <aside class="sidebar-widget">
                        <div class="widget-title">
                            <h2>Contenido</h2>
                        </div>
                        <ul>
                            <p><?php echo $row['Contenido'] ?></p>
                        </ul>
                    </aside>
                     <?php } ?>
                    <!-- single sidebar -->
                   




                    
                
                </div>
            </div>
        </div>
    </div>
    <!-- ======= causes part end ======= -->

    <!-- ======= call to action part start ======= -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    
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

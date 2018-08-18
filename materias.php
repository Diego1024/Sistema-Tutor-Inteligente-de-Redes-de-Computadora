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

    <style type="text/css">
    
    body {
    text-align: center;
    font-family: sans-serif;
    margin: 0;
}

.modal {
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.8);
    
    position: absolute;
    top: 0;
    left: 0;
    
    display: flex;
    
    animation: modal 0s forwards;
    visibility: hidden;
    opacity: 0;
}

.contenido {
    margin: auto;
    width: 40%;
    height: 40%;
    background: white;
    border-radius: 10px;
}

#cerrar {
    display: none;
}

#cerrar + label {
    position: fixed;
    color: #fff;
    font-size: 25px;
    z-index: 50;
    background: darkred;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border-radius: 50%;
    right: 150px;
    top: 150px;
    cursor: pointer;
    
    animation: modal 2s 3s forwards;
    visibility: hidden;
    opacity: 0;
}

#cerrar:checked + label, #cerrar:checked ~ .modal {
    display: none;
}

@keyframes modal {
    100% {
        visibility: visible;
        opacity: 1;
    }

    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
}
</style>
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
                        
                        </div>
                    </div>
                    <div class="col-md-5 text-right">
                        <div class="top-header-info header-right">
                            <!-- header support -->
                           
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
                        <!-- menu part -->
                        <nav class="main-menu">
                            <ul class="navigation">
                                <li><a href="index.html">home</a></li>
                                <li><a href="about.html">about us</a></li>
                                
                            </ul>
                        </nav>
                        <!-- donate box -->
                        <div class="donate-box">
                           
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
                            <h2>Materias</h2>
                           
                            <ul class="breadcrumb">

                            <li class="active"><a>Materias</a></li>
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= Team part Start ======= -->
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <?php 
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
                                $id2 = $row['pre_has'];
                           
                                        
                                    foreach ($enlace->query("SELECT * from diagnostico where estudiante_id ='$id2' ") as $row){
                                }


                                if ($row['Aciertos'] > 0) {   ?>

                                                          <?php
                                                $enlace =  mysqli_connect('localhost', 'root', '','sti');
                                                    if (!$enlace) {
                                                         die('No hay conexión con la base de datos' . mysqli_error());
                                                                }


                                                    foreach ($enlace->query("SELECT DISTINCT Modulo from capitulos ") as $row){   ?>
                                                    <div class="col-sm-6 col-md-3">
                                                            <!-- Single Member -->
                                                            <form action="capitulos.php" method="post">
                                                            <div class="team-member">
                                                                <div class="member-top">
                                                                            <?php                           
                                                                            if ($row['Modulo']=="") {   ?>  
                                                                             
                                                                            <img src="img/tache.jpg" alt="">

                                                                           <?php  } 
                                                                             else { ?>
                                                                                <img src="img/Paloma.jpg" alt="">
                                                                                 <?php   } ?>
                                                                    <div class="team-social">
                                                                        
                                                                        <button value=<?php echo $row['Modulo'] ?> name='Modulo' type="submit" name="submit" class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal"> Ver Materia</button>
                                                                    </div>
                                                                </div>
                                                                <div class="member-dec">
                                                                    <span><?php echo $row['Modulo'] ?></span>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                   <?php } ?>

                                 <?php } else { ?>


                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <p>.</p>
                                            <p>.</p>
                                            <p>.</p>
                                            <p>.</p>
                                            <p>.</p>
                                            <p>.</p>
                                            

                                            <h5 class="modal-title" id="exampleModalLabel">Aún no realizas tu Test para identificar tu Estilo de Aprendizaje </h5>
                                          </div>
                                          <div class="modal-footer">
                                            <form action="test.php">
                                            <button type="submit" class="btn btn-primary">Iniciar Test</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>




                                 <?php } ?>






                   

                            
                          
                

                 
                
                
            
                
                
            </div>
        </div>
    </section>
    <!-- ======= Team part end ======= -->

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
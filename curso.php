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
                                <li><a class="menu-active">Perfil</a></li>
                                <li><a href="#">Curso<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="drop-menu">
                                        <li><a href="materias.php">Ver Unidades</a></li>
                                        
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
                            <h2>Información de usuario</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= page title part end ======= -->

    <!-- ======= events details part start ======= -->
    <section class="events-details-area section-padding">
        <div class="container">
            <div class="row">
                 <div class="col-md-8 col-sm-7">
                    <div class="single-events">
                        <img src="img/logo1.jpg" alt="" >
                        <h2 class="text-center">Estilo de aprendizaje</h2>
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


                                if ($row['Aciertos'] > 0) {     
                                 
                                 echo 'Tu estilo de aprendizaje es: ' ;
                                 
                                            if($row['Estilo']== 'Activo'){
                                                echo $row['Estilo'];
                                                echo '<br>';
                                                echo 'Busca experiencias nuevas, son de mente abierta, nada escépticos y acometen con entusiasmo las tareas nuevas.';
                                                    echo '<br>';
                                                    echo '<br>';
                                                     echo   'Son muy activos, piensan que hay que intentarlo todo por lo menos una vez. En cuanto desciende la excitación de una novedad comienzan a buscar la próxima. Se crecen ante los desafíos que suponen nuevas experiencias, y se aburren con los largos plazos. Son personas muy de grupo que se involucran en los asuntos de los demás y centran a su alrededor todas las actividades: ';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo '<br>';
                                                         

                                                     echo'–     Animador';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Improvisador';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Descubridor';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –       Arriesgado';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –       Espontáneo';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                      echo'  Les cuesta trabajo aprender:';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                       echo' –       Cuando tienen que asimilar, analizar e interpretar datos';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       Cuando tienen que trabajar solos';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       Cuando tienen que adoptar un papel pasivo';
                                            }else if($row['Estilo']== 'Reflexivo' ){
                                                echo $row['Estilo'];
                                                echo '<br>';
                                                echo 'Antepone la reflexión a la acción y observa con detenimiento las distintas experiencias. Les gusta considerar las experiencias y observarlas desde diferentes perspectivas. Recogen datos, analizándolos con detenimiento antes de llegar a alguna conclusión. Son prudentes les gusta considerar todas las alternativas posibles antes de realizar un movimiento. Disfrutan observando la actuación de los demás, escuchan a los demás y no intervienen hasta que no se han adueñado de la situación. Crean a su alrededor un aire ligeramente distante y Condescendiente.';
                                        
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo '<br>';
                                                         

                                                     echo'–     Ponderado';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Concienzudo';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Receptivo';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –       Analítico';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –       Exhaustivo';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                      echo'  Les cuesta trabajo aprender:';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                       echo' –       Cuando se les fuerza a convertirse en el centro de la atención';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       Cuando se les apresura de una actividad a otra';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       Cuando tienen que actuar sin poder planificar previamente';
                                            }else if($row['Estilo']=='Teorico'){
                                                echo $row['Estilo'];
                                                echo '<br>';
                                                echo 'Enfoque lógico de los problemas, necesitan integrar la experiencia en un marco teórico de referencia.';
                                                echo '<br>';
                                                    echo '<br>';
                                                echo 'Enfocan los problemas de forma vertical escalonada, por etapas lógicas. Tienden a ser perfeccionistas Integran los hechos en teorías coherentes. Les gusta analizar y sintetizar. Son profundos en su sistema de pensamiento, a la hora de establecer principios, teorías y modelos. Para ellos si es lógico es bueno. Buscan la racionalidad y la objetividad huyendo de lo subjetivo y de lo ambiguo.';
                                        
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo '<br>';
                                                         

                                                     echo'–     Lógico';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Objetivo';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–      Crítico';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –       Estructurado';
                                                      echo '<br>';
                                                      echo '<br>';
                                                     
                                                         

                                                      echo'  Les cuesta trabajo aprender:';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                       echo' –       Con actividades que impliquen ambigüedad e incertidumbre';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       En situaciones que enfaticen las emociones y los sentimientos';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       Cuando tienen que actuar sin un fundamento teórico';
                                            }else if($row['Estilo']== 'Pragmatico' ){
                                                echo $row['Estilo'];
                                                echo '<br>';
                                                echo 'Su punto fuerte es la experimentación y la aplicación de ideas. Descubren el aspecto positivo de las nuevas ideas y aprovechan la primera oportunidad para experimentarlas. Les gusta actuar rápidamente y con seguridad con aquellas ideas y proyectos que les atraen. Tienden a ser impacientes cuando hay personas que teorizan.';
                                                    echo '<br>';
                                                    echo '<br>';
                                                    echo 'Pisan la tierra cuando hay que tomar una decisión o resolver un Problema. Su filosofía es “siempre se puede hace mejor; si funciona es bueno”.';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo '<br>';
                                                         

                                                     echo'–     Experimentador';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Práctico';
                                                     echo '<br>';
                                                     echo '<br>';
                                                     echo'–     Directo';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –        Eficaz';
                                                      echo '<br>';
                                                      echo '<br>';
                                                      echo'  –        Realista';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                      echo'  Les cuesta trabajo aprender:';
                                                      echo '<br>';
                                                      echo '<br>';
                                                         

                                                       echo' –        Cuando lo que aprenden no se relacionan con sus necesidades inmediatas';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –        Con aquellas actividades que no tienen una finalidad aparente';
                                                       echo '<br>';
                                                      echo '<br>';
                                                       echo' –       Cuando lo que hacen no está relacionado con la ‘realidad’';
                                            }



                                            




                                 ?>






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
                <div class="col-md-4 col-sm-5">
                    <div class="events-sidbar">
                        <article class="events-article">
                            <?php 
                            $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                    $id=$_GET["id"]; 
                                    
                            foreach ($enlace->query("SELECT * from estudiante where id ='$id' ") as $row){  ?>
                            
                            <ul>

                                <li>
                                    <h5>Nombre:</h5>
                                    <p><?php echo $row['Nombre'] ?></p>
                                </li>
                                <li>
                                    <h5>Apellido Paterno:</h5>
                                    <p><?php echo $row['Paterno'] ?></p>
                                </li>
                                <li>
                                    <h5>Apellido Materno:</h5>
                                    <p><?php echo $row['Materno'] ?></p>
                                </li>
                                <li>
                                    <h5>Matricula:</h5>
                                    <p><?php echo $row['Matricula'] ?></p>
                                </li>
                                <li>
                                    <h5>Contraseña:</h5>
                                    <p><?php echo $row['Pass'] ?></p>
                                </li>
                                <form method="post" action="modificar.php">
                                    <button value=<?php echo $row['id'] ?> name='id' type="submit" name="submit" class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal">Editar Información </button>
                                </form>
                                
                            </ul>
                            <?php } ?>
                        </article>
                        <article class="events-article events-slider">
                            <h2>Examenes Realizados</h2>
                            <div class="upcoming-events owl-carousel">
                                <!-- Single news -->
                                
                                <!-- Single news -->
                                    <?php 
                            $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                    $id=$_GET["id"]; 

                                        foreach ($enlace->query("SELECT * from estudiante where id = '$id'") as $row){

                                          $mat=$row['Matricula'];
                                                                                  }
                                        $consulta = "SELECT * FROM progreso WHERE Matricula ='$mat' ";  
                                        $result = mysqli_query($enlace, $consulta) ;
                                        
                                if ($result->num_rows > 0) {

                            foreach ($enlace->query("SELECT * from progreso WHERE Matricula ='$mat' ") as $fila){  ?>


                                <div class="single-events events-info">
                                    <div class="news-img">
                                        <?php if($fila['Resultado']>=70){ ?>
                                            <img src="img/Paloma.jpg" alt="">
                                            <?php }else{ ?>
                                            <img src="img/tache2.png" alt="">
                                            <?php }?>
                                        <div class="post-date-info events-date">
                                            <p>Resultado</p> <?php echo $fila['Resultado']?>
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        
                                        <h2>Modulo</h2>
                                        <p><?php echo $fila['Modulo'] ?></p>
                                        <h2>Capítulo</h2>
                                        <p><?php echo $fila['Capitulo'] ?></p>
                                        
                                    </div>
                                </div>


                                <?php } ?>
                                <?php }else{ ?>

                                  <h2>No hay ningún examen realizado</h2>

                                  <?php } ?>


                                <!-- Single news -->
                                
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= events details part end ======= -->

    

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
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>

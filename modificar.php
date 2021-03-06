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
    <title>Tutor</title>
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

   
        <!-- menu area -->
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <!-- mobile menu wraper -->
                        <div class="responsive-menu-wrap"></div>
                    </div>
                    <div class="col-md-10">
                        <!-- menu part -->
                        <nav class="main-menu">
                            <ul class="navigation">
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ======= header part end ======= -->


    <!-- ======= Contact Area Start ======= -->
    <section class="contact-area section-padding parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- section title -->
                    <div class="title">
                        <h2>Modificar Información</h2>
                        <p>Rellena los datos para completar la modificación</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="contact-form bg-trans">

                    	<?php 
                            $enlace =  mysqli_connect('localhost', 'root', '','sti');
                            if (!$enlace) {
                                 die('No hay conexión con la base de datos' . mysqli_error());
                                        }
                                    $id=$_POST["id"]; 
                                    
                            foreach ($enlace->query("SELECT * from estudiante where id ='$id' ") as $row){  ?>

                        <form action="modificar2.php" method="post" name=mi_formulario onSubmit="return validar_clave()">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="nombre" value="<?php echo $row['Nombre'] ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="aPa" value="<?php echo $row['Paterno'] ?>" required>
                                </div>
                            </div>                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="aMa" value="<?php echo $row['Materno'] ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="mtr" value="<?php echo $row['Matricula'] ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="password" name=pass type="text"  value="<?php echo $row['Pass'] ?>" required>
                                </div>
                            </div>                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="password" name=pass2 type="text"  placeholder="Confirmar contraseña" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button  value=<?php echo $row['id'] ?> name='id' type="submit" name="submit"  class="sub-btn donate-btn more-btn hvr-shutter-out-horizontal">Continuar</button>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Contact Area End ======= -->

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
      <SCRIPT LANGUAGE="JavaScript">
function validar_clave() {
var caract_invalido = " ";
var caract_longitud = 6;
var cla1 = document.mi_formulario.pass.value;
var cla2 = document.mi_formulario.pass2.value;
if (cla1 == '' || cla2 == '') {
alert('Debes introducir tu clave en los dos campos.');
return false;
}
if (document.mi_formulario.mi_clave.value.length < caract_longitud) {
alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
return false;
}
if (document.mi_formulario.mi_clave.value.indexOf(caract_invalido) > -1) {
alert("Las claves no pueden contener espacios");
return false;
}
else {
if (cla1 != cla2) {
alert ("Las claves introducidas no son iguales");
return false;
}
else {
return true;
      }
   }
}
</script>
 

</body>

</html>

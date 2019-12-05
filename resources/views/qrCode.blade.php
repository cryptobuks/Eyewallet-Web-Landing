<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Eyewallet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">

    <!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <script src="assets/js/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/plugins.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css"/>
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css"/>

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body style="overflow-y: hidden" data-spy="scroll" data-target="#navbar-menu" data-offset="110">


<div class="culmn">
    <nav class="container-fluid navbar navbar-default bootsnav navbar-fixed no-background navbar-transparent">

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand" href="#brand">
                <img src="assets/images/logo_color.png" class="logo-display" alt="">
                <img src="assets/images/logo_blanco.png" class="logo-scrolled" alt="">
            </div>
            <!-- <span class="form-inline alineado_brand"><h3 class="titulo_marca">EYEWALLET</h3><p class="subtitulo_marca">CRYPTO BANK</p></span> -->
        </div>
        <!-- End Header Navigation -->

        <!-- navbar menu -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-center scroll">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#features">Vender</a></li>
                <li><a href="#comprar">Comprar</a></li>
                <li><a href="#API">API</a></li>
                <li><a href="#">Contacto</a></li>
                <button href="" class="btn btn1 logo-display">EYEWALLET WEB</button>
                <button href="" class="btn btn2 logo-scrolled">EYEWALLET WEB</button>
                <a href="index_en.html" class="btn btnIdioma">English</a>
            </ul>
        </div>
    </nav>
</div>

<section id="noticias" class="back-fx-purple" style="margin-top: 5em;">
    <div class="">
        <h1 class="text-center text-white p-top-40 p-bottom-40">COMPLETE SU PROCESO DE PAGO</h1>
        <div class="container m-bottom-100">
            <div id="msj">
                <div class="alert alert-success" role="alert">Información copiada correctamente</div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4 style="text-align: right" class="text-blanco">Valor</h4>
                    <h4 style="text-align: right" class="text-blanco">Eyewallet<br> monto</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4 class="text-blanco">$80.00 (USD)</h4>
                    <h4 class="text-blanco"><br> 0.00173466 BTC</h4>
                </div>
            </div>
            <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                    <h4 style="text-align: center; font-weight: bold" class="text-blanco" id="txId">Dirección de
                        Wallet</h4>
                </div>
                <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                    <div style="border: 2px solid #00be96; border-radius: 16px; padding: 1em">
                        <h4 style="text-align: center;" class="text-blanco" id="txId">{{$pago->fw_address}}</h4>
                    </div>
                </div>
                <div style="margin-top: 2em" class="row row-news-al text-center col-lg-12 col-md-7 col-sm-7 col-xs-12">
                    <img style="border-radius: 22px"
                         src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{$pago->fw_address}}" alt="">
                </div>
                
                <div style="margin-top: 15em; visibility: hidden"
                     class="row row-news-al text-center col-lg-12 col-md-7 col-sm-7 col-xs-12">
                    &nbsp;
                </div>
            </div>

        </div>

    </div>
</section><!-- End off Brand section -->


<!-- JS includes -->

<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<script src="assets/js/jquery.magnific-popup.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/bootsnav.js"></script>


<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form.js"></script>

</body>

</html>

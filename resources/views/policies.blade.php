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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//geodata.solutions/includes/countrystatecity.js"></script>


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css"/>

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar-menu" data-offset="110">
<!-- Sticky -->
<!-- <button onclick="topFunction()" id="myBtn" title="Up"></button> -->

<a onclick="topFunction()" id="myBtn"><i class="fa fa-chevron-up"></i></a>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- Modal -->
<form method="POST" enctype="multipart/form-data" charset="UTF-8">

    <div class="modal" id="solicitarCard" tabindex="-1" role="dialog" aria-labelledby="solicitarCardLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5 class="modal-title btn-inner2" id="solicitarCardLabel"><img
                                    src="assets/images/modal/step1.png" alt=""
                                    class="step_img">Solicitud de tarjeta</h5></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--<div class="modal-body">-->
                <!--&lt;!&ndash; Body &ndash;&gt;-->
                <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                <!--&lt;!&ndash; Indicators &ndash;&gt;-->
                <!--<ol class="carousel-indicators">-->
                <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                <!--</ol>-->

                <!--&lt;!&ndash; Wrapper for slides &ndash;&gt;-->
                <!--<div class="carousel-inner">-->
                <!--<div class="item active">-->
                <!--<img src="assets/images/modal/card-classic.png" alt="">-->
                <!--</div>-->

                <!--<div class="item">-->
                <!--<img src="assets/images/modal/card-golden.png" alt="">-->
                <!--</div>-->

                <!--<div class="item">-->
                <!--<img src="assets/images/modal/card-black.png" alt="">-->
                <!--</div>-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; Body &ndash;&gt;-->
                <!--</div>-->
                <h4 style="text-align: center; padding-top: 1em">
                    Elige tu tarjeta de preferencia.
                </h4>
                <div>
                    <!-- Body -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--<ol class="carousel-indicators">-->
                        <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                        <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                        <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                        <!--</ol>-->
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a onClick="document.getElementById('comboTarjeta').value='1'">
                                    <img class="tarjetaIMG" style="opacity: 1; cursor: pointer;"
                                         src="assets/images/modal/card-classic.png" alt="">
                                </a>
                            </div>

                            <div class="item">
                                <!-- <a onClick="document.getElementById('comboTarjeta').value='3'"> -->
                                <img class="tarjetaIMG" style="opacity: 0.5; cursor: not-allowed;"
                                     src="assets/images/modal/card-golden.png" alt="">
                                <!-- </a> -->
                            </div>

                            <div class="item">
                                <!-- <a onClick="document.getElementById('comboTarjeta').value='2'"> -->
                                <img class="tarjetaIMG" style="opacity: 0.5; cursor: not-allowed;"
                                     src="assets/images/modal/card-black.png" alt="">
                                <!-- </a> -->
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <select disabled id="comboTarjeta" class="form-control3">
                                <option selected value="1">Classic</option>
                                <option value="2">Black</option>
                                <option value="3">Gold</option>
                            </select>
                        </div>
                    </div>
                    <!-- Body -->
                </div>
                <div class="modal-footer">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        &nbsp;
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <button type="button" class="btn btn-grad2" data-toggle="modal" data-target="#solicitarCard2"
                                data-dismiss="modal">Siguiente
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal2 -->
    <div class="modal" id="solicitarCard2" tabindex="-1" role="dialog" aria-labelledby="solicitarCard2Label"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5 class="modal-title btn-inner2" id="solicitarCard2Label"><img
                                    src="assets/images/modal/step1.png" alt=""
                                    class="step_img">Solicitud de tarjeta</h5></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info" role="alert" id="msj">Todos los datos son obligatorios.</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="countryId">País</label>
                            <select name="country" class="form-control countries order-alpha presel-byip"
                                    id="countryId">
                                <option value="">País</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="stateId">Estado</label>
                            <select name="state" class="form-control states order-alpha" id="stateId">
                                <option value="">Estado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cityId">Ciudad</label>
                            <select name="city" class="form-control cities order-alpha" id="cityId">
                                <option value="">Ciudad</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputName">Nombre y apellido</label>
                            <input type="text" class="form-control" id="inputName"
                                   placeholder="Ingrese nombre y apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese dirección">
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                    <!-- Body -->
                </div>
                <div class="modal-footer">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <button id="" type="button" class="btn btn-grAtras"
                                data-toggle="modal" data-target="#solicitarCard"
                                data-dismiss="modal">Atrás
                        </button>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <button id="button1" type="button" class="btn btn-grad2">Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal3 -->
    <div class="modal" id="solicitarCard3" tabindex="-1" role="dialog" aria-labelledby="solicitarCard3Label"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5 class="modal-title btn-inner2" id="solicitarCard3Label"><img
                                    src="assets/images/modal/step2.png" alt=""
                                    class="step_img">Solicitud de tarjeta</h5></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Body -->
                    <div class="alert alert-info" role="alert" id="msj2">Todos los datos son obligatorios.
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputId">ID</label>
                            <input type="email" class="form-control" id="inputId" placeholder="ID">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputTel">Teléfono</label>
                            <input type="email" class="form-control" id="inputTel" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputTel">Código Postal</label>
                            <input type="email" class="form-control" id="inputPostal" placeholder="Código Postal">
                        </div>
                    </div>
                    <!-- Body -->
                </div>
                <div class="modal-footer">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <button id="back" type="button" class="btn btn-grAtras" data-toggle="modal"
                                data-target="#solicitarCard2"
                                data-dismiss="modal">Atrás
                        </button>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <button id="button2" type="button" class="btn btn-grad2">Siguiente
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal4 -->
    <div class="modal" id="solicitarCard4" tabindex="-1" role="dialog" aria-labelledby="solicitarCard4Label"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span><h5 class="modal-title btn-inner2" id="solicitarCard4Label"><img
                                    src="assets/images/modal/step3.png" alt=""
                                    class="step_img">Solicitud de tarjeta</h5></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info" role="alert" id="msj3"></div>
                    <div class="input-group col-md-12 form-control">
                        <label for="comboCiudad" class="form-group form-upload-label">Tipo identificacion</label>
                        <select id="comboIdentificacion" class="form-control2"
                                style="width: 80% !important; margin-left: 3em;">
                            <option selected value="">Seleccione</option>
                            <option value="1">ID</option>
                            <option value="2">Pasaporte</option>
                        </select>
                        <!-- <div class="form-group" id="div1">
                            <label for="image1">
                                <input type="file" name="image" id="image1"/>
                            </label>
                        </div> -->
                        <div class="form-group col-md-12" id="div2">
                            <label for="image1" class="form-group form-upload-label">
                                <div class="form-control2">
                                    <input type="file" name="image1" id="image1" class="form-control2"
                                           style="display:none;"/>
                                    <img src="assets/images/modal/cargar.png"/>
                                    </input>
                                </div>
                            </label>
                        </div>
                        <div class="form-group" id="div1">
                            <div class="input-group col-md-12">
                                <label for="image2" class="form-group form-upload-label">Frontal
                                    <div class="form-control2">
                                        <input type="file" name="image2" id="image2" class="form-control2"
                                               style="display:none;"/>
                                        <img src="assets/images/modal/cargar.png"/>
                                        </input>
                                    </div>
                                </label>
                            </div>
                            <div class="input-group col-md-12">
                                <label for="image3" class="form-group form-upload-label">Posterior
                                    <div class="form-control2">
                                        <input type="file" name="image3" id="image3" class="form-control2"
                                               style="display:none;"/>
                                        <img src="assets/images/modal/cargar.png"/>
                                        </input>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- pasaporte -->
                    <div class="input-group col-md-12">
                        <label for="image4" class="form-group form-upload-label"> Ingrese Selfie (*)
                            <div class="form-control2">
                                <input type="file" name="image4" id="image4" class="form-control2" style="display:none;"
                                       placeholder="Subir una selfie con tu Documento"/>
                                <img src="assets/images/modal/cargar.png"/>
                                </input>
                            </div>
                        </label>
                        <div class="input-group col-md-12">
                            <label for="image5" class="form-group form-upload-label"> Ingrese documento de Domicilio(**)
                                <div class="form-control2">
                                    <input type="file" name="image5" id="image5" class="form-control2"
                                           style="display:none;" placeholder="Extratos o Facturas de Servicio"/>
                                    <img src="assets/images/modal/cargar.png"/>
                                    </input>
                                </div>
                            </label>
                            <p>(*): Subir una Selfie con tu Documento, en buena calidad. <br>
                                (**): Extractos Bancarios o Facturas de Servicios. <br> Solo aceptamos documentos en los
                                siguientes formatos: PNG, JPG, JPEG, PDF. </p>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button id="finalizar" type="button" class="btn btn-grad2">Finalizar -->
                    <button id="finalizar" type="button" class="btn btn-grad2">Finalizar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal5 -->
    <div class="modal" id="solicitarCard5" tabindex="-1" role="dialog" aria-labelledby="solicitarCard5Label"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="">
                <div class="modal-header2">
                    <span><h5 class="modal-title2" id="solicitarCard5Label"><img src="assets/images/modal/step3.png"
                                                                                 alt="" class="step_img2">      Confirmar pago     <button
                                    type="button" class="close2 step_img2" data-dismiss="modal"
                                    aria-label="Close">+</button></h5></span>

                </div>
                <div class="roomy-20"></div>
                <div style="margin: auto !important">
                    <div class="modal-body modal-header2 col-md-12"
                         style="width: 80% !important; height: auto; margin-left: 10% !important; margin-right: 10% !important">
                        <div class="row solicitud1">
                            <div class="text-center">
                                <img src="assets/images/logo_color.png" class=""
                                     style="width: 60% !important; margin:auto" alt="">
                            </div>
                            <div class="roomy-20"></div>
                            <div class="col-md-6" style="float: left; position: relative;">
                                <h5 class="text-white"><strong>Pagar con</strong></h5>
                            </div>
                            <div class="col-md-6" style="float: right; position: relative;">
                                <img style="width: 20px; float: left; position: relative;"
                                     src="assets/images/bitcoin.svg"/>
                                <h5 class="text-white" style="float: left; position: relative;">&nbsp;Bitcoin</h5>
                            </div>
                            <div class="col-md-12 text-center">
                                <form method="POST" action="https://btcpayjungle.com/api/v1/invoices" novalidate
                                      name="formulario_pago">
                                    <input type="hidden" name="storeId"
                                           value="GE4DtrzLSRVA9KweadN3bbp1u2iQm2hdUGSwjyMMk5ZW"/>
                                    <input type="hidden" name="price" value="80"/>
                                    <input type="hidden" name="currency" value="USD"/>
                                    <input type="hidden" name="checkoutDesc" value="CREDIT CARD REQUEST"/>
                                    <input type="hidden" name="browserRedirect" value="https://eyewallet.com/"/>
                                    <input type="hidden" name="notifyEmail" value="support@eyewallet.com"/>
                                    <input class="text-center" type="image"
                                           src="https://eyewallet.com/assets/images/boton2.svg" name="submit"
                                           style="width:209px;"
                                           alt="Pay with BtcPay, Self-Hosted Bitcoin Payment Processor">
                                </form>
                                <iframe src="assets/images/load.gif" id="iframe_pago" name="iframe_pago"
                                        frameborder="0"
                                        style="width: 500px; height: 700px !important;"></iframe>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- Preloader -->
<!-- <div id="">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div> -->
<!--End off Preloader -->


<div class="culmn">
    <!--Home page style-->
    <nav class="container-fluid navbar navbar-default bootsnav navbar-fixed no-background navbar-transparent">

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a href="/">
            <div class="navbar-brand" href="/home">
                <img src="assets/images/logo_color.png" class="logo-display" alt="">
                <img src="assets/images/logo_blanco.png" class="logo-scrolled" alt="">
            </div>
            </a>
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
                <!-- <li class="dropdown">
                    <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Idioma <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index_en.html">English</a></li>
                        <li><a href="index.html">Español</a></li>
                    </ul>
                </li> -->

                <button href="" class="btn btn1 logo-display">EYEWALLET WEB</button>
                <button href="" class="btn btn2 logo-scrolled">EYEWALLET WEB</button>
                <a href="index_en.html" class="btn btnIdioma">English</a>
                <!-- <span class="inlineb"><img src="/assets/images/en.png" alt=""><p class="text-white">English</p></span> -->

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>

<section id="product" class="product text-center back-fx-product">
    <div class="container">
        <div class="main_product roomy-80">
            <div class="head_title text-center fix">
                <h2 class="text-black">Policies</h2>
            </div>

            <div class="content">
            <div class="cookies__LegalContainer-sc-8rfkvh-1 eUvsrc DocContainer-sc-134rzd-0 jcDzzs">
    <h3>Eyewallet Cookies Policy</h3>
    <h5>Last Updated: May 24, 2018</h5>
    <hr>
    <div>
        <p>The Eyewallet group of companies ("Eyewallet") use cookies, pixel tags, web beacons, mobile device IDs and similar files or technologies to collect and store the information we automatically collect about your computer, device, and use of the websites operated by Eyewallet ("Websites"). You can find out more about cookies and how to control them in the information below.</p>
        <p>If you do not accept the use of these cookies, please disable them using the instructions in this cookie policy, by following the 'opt-out' links provided below or by changing your browser settings so that cookies from the Websites cannot be placed on your computer or mobile device.</p>
    </div>
    <div>
        <h4>1. What is a cookie?</h4>
        <p>Cookies are text files containing small amounts of information which are downloaded to your computer or mobile device when you visit a certain webpage. Cookies are then sent back to the originating webpage on each subsequent visit, or to another webpage that recognises that cookie. Cookies are widely used in order to make the Websites work, or to work more efficiently, as well as to provide information to the owners of the Website.</p>
        <p>Cookies do lots of different jobs, like letting you navigate between pages efficiently, remembering your preferences, and generally improving the user experience. Cookies may tell us, for example, whether you have visited the Websites before or whether you are a new visitor. They can also help to ensure that adverts you see online are more relevant to you and your interests.</p>
        <p>There are two broad categories of cookies:</p>
        <ul>
            <li><b>First party cookies</b>, served directly by us to your computer or mobile device.</li>
            <li><b>Third party cookies</b>, which are served by a third party on our behalf. We use third party cookies for [functionality, performance / analytics, advertising and social media purposes].</li>
        </ul>
        <p>Cookies can remain on your computer or mobile device for different periods of time. Some cookies are 'session cookies', meaning that they exist only while your browser is open. These are deleted automatically once you close your browser. Other cookies are 'permanent cookies', meaning that they survive after your browser is closed. They can be used by the Websites to recognise your computer when you open your browser and browse the Internet again.</p>
    </div>
    <div>
        <h4>2. How do we use cookies?</h4>
        <p>We use cookies to:</p>
        <ul>
            <li>track traffic flow and patterns of travel in connection with the Websites;</li>
            <li>understand the total number of visitors to our Website on an ongoing basis and the types of internet browsers (e.g. Firefox, Chrome or Internet Explorer) and operating systems (e.g. Windows or Mac OS) used by our visitors;</li>
            <li>monitor the performance of the Websites and to continually improve them;</li>
            <li>customise and enhance your online experience; and</li>
            <li>enable Eyewallet and third-party to advertise both on and off the Websites.</li>
        </ul>
    </div>
    <div>
        <h4>3. How to control or delete cookies</h4>
        <p>You have the right to choose whether or not to accept cookies and we have explained how you can exercise this right below. However, please note that if you choose to refuse cookies you may not be able to use the full functionality of our Websites.</p>
        <p>Most browsers allow you to change your cookie settings. These settings will typically be found in the “options” or “preferences” menu of your browser. In order to understand these settings, the following links may be helpful, otherwise you should use the “Help” option in your browser for more details.</p>
        <ul>
            <li><a href="https://windows.microsoft.com/en-gb/windows7/how-to-manage-cookies-in-internet-explorer-9" rel="nofollow noopener noreferrer" target="_blank">Cookie settings in Internet Explorer</a></li>
            <li><a href="https://support.mozilla.org/en-US/kb/cookies" rel="nofollow noopener noreferrer" target="_blank">Cookie settings in Firefox</a></li>
            <li><a href="https://support.google.com/chrome/answer/95647?hl=en" rel="nofollow noopener noreferrer" target="_blank">Cookie settings in Chrome</a></li>
            <li><a href="https://support.apple.com/kb/PH5042" rel="nofollow noopener noreferrer" target="_blank">Cookie settings in Safari web</a>
                <!-- -->and
                <!-- --><a href="https://support.apple.com/kb/HT1677" rel="nofollow noopener noreferrer" target="_blank">iOS</a>.</li>
        </ul>
        <br>
        <p>If you only want to limit third party advertising cookies, you can turn such cookies off by visiting the following links:</p>
        <ul>
            <li>Your Online Choices (<a href="http://www.youronlinechoices.com/uk/" rel="nofollow noopener noreferrer" target="_blank">http://www.youronlinechoices.com/uk/</a>)</li>
            <li>Network Advertising Initiative (<a href="http://www.networkadvertising.org/" rel="nofollow noopener noreferrer" target="_blank">http://www.networkadvertising.org/</a>)</li>
            <li>Digital Advertising Alliance (<a href="http://www.aboutads.info/consumers" rel="nofollow noopener noreferrer" target="_blank">http://www.aboutads.info/consumers</a>)</li>
        </ul>
        <br>
        <p>Please bear in mind that there are many more companies listed on these sites than those that drop cookies via the Websites.</p>
        <h4>4. Changes to this Cookie Policy</h4>
        <p>We will occasionally update this Cookie Policy to reflect changes in our practices and services. When we post changes to this Cookie Policy, we will revise the "Last Updated" date at the top of this Cookie Policy. If we make any material changes in the way we collect, use, and/or share information held in cookies, we will notify you by prominently posting notice of the changes on the Websites. We recommend that you check this page from time to time to inform yourself of any changes in this Cookie Policy or any of our other policies.</p>
    </div>
    <div>
        <h4>5. Need More Information?</h4>
        <p>If you would like to find out more about cookies and their use on the Internet, you may find the following links useful:</p>
        <ul>
            <li><a href="http://www.allaboutcookies.org/" rel="nofollow noopener noreferrer" target="_blank">All About Cookies</a></li>
            <li><a href="http://www.youronlinechoices.com/uk/" rel="nofollow noopener noreferrer" target="_blank">youronlinechoices.co.uk/uk</a></li>
        </ul>
    </div>
    <div>
        <h4>6. Cookies that have been set in the past</h4>
        <p>If you have disabled one or more Cookies, we may still use information collected from cookies prior to your disabled preference being set, however, we will stop using the disabled cookie to collect any further information.</p>
    </div>
    <div>
        <h4>7. Contact us</h4>
        <p>If you have any questions or comments about this cookies policy, or privacy matters generally, please contact us via email at
            <!-- --><a href="mailto:privacy@Eyewallet.com">[email&nbsp;protected]</a> or the address provided below:</p>
        <p>Eyewallet New Zealand S.A.,
            <br>L-2340 New Zealand,
            <br>1, rue Philippe II</p>
    </div>
</div>
            </div>

            
        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off Product section -->
   
    
<!-- footer section -->
<hr class="hr-color">

<footer id="contact" class="footer bg-white p-top-80 m-top-80 text-center back-fx-footer">
    <div class="container">
        <div class="row">
            <div class="widget_area">
                {{--<div class="col-lg-3 col-md-2 col-sm-2 col-xs-4">--}}
                {{--<div class="widget_item widget_about">--}}
                {{--<h5 class="text-black">Servicios</h5>--}}
                {{--<div class="widget_ab_item m-top-30">--}}
                {{--<ul class="widget_ab_item_text">--}}
                {{--<li class="text-black p-top-10">Comprar</li>--}}
                {{--<li class="text-black p-top-10">Vender</li>--}}
                {{--<li class="text-black p-top-10">Billetera</li>--}}
                {{--<li class="text-black p-top-10">Bóveda</li>--}}
                {{--<li class="text-black p-top-10">Api Key</li>--}}
                {{--<li class="text-black p-top-10">Eyepaycard</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div><!-- End off col-md-3 -->--}}

                {{--<div class="col-lg-3 col-md-2 col-sm-2 col-xs-4">--}}
                {{--<div class="widget_item widget_latest">--}}
                {{--<h5 class="text-black">Recursos</h5>--}}
                {{--<div class="widget_ab_item m-top-30">--}}
                {{--<ul class="widget_ab_item_text">--}}
                {{--<li class="text-black p-top-10">Descargar</li>--}}
                {{--<li class="text-black p-top-10">Afiliacion</li>--}}
                {{--<li class="text-black p-top-10">Comisiones</li>--}}
                {{--<li class="text-black p-top-10">Marca</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div><!-- End off widget item -->--}}
                {{--</div><!-- End off col-md-3 -->--}}

                {{--<div class="col-lg-3 col-md-2 col-sm-2 col-xs-4">--}}
                {{--<div class="widget_item widget_latest">--}}
                {{--<h5 class="text-black">Acerca de</h5>--}}
                {{--<div class="widget_ab_item m-top-30">--}}
                {{--<ul class="widget_ab_item_text">--}}
                {{--<li class="text-black p-top-10">Nosotros</li>--}}
                {{--<li class="text-black p-top-10">Contacto</li>--}}
                {{--<li class="text-black p-top-10">FAQ</li>--}}
                {{--<li class="text-black p-top-10">Noticias</li>--}}
                {{--<li class="text-black p-top-10">Soporte</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div><!-- End off widget item -->--}}
                {{--</div><!-- End off col-md-3 -->--}}

                {{--<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 col-res-foot">--}}
                {{--<img class="img-responsive" src="/assets/images/Logo Eyewallet Footer.png" alt="">--}}
                {{--<ul>--}}
                {{--<button class="btn-footer btn-primary btn-circle m-lr-5"><i--}}
                {{--class="fa fa-instagram"></i></button>--}}
                {{--<button class="btn-footer btn-primary btn-circle m-lr-5"><i--}}
                {{--class="fa fa-facebook"></i></button>--}}
                {{--<button class="btn-footer btn-primary btn-circle m-lr-5"><i--}}
                {{--class="fa fa-twitter"></i></button>--}}
                {{--<button class="btn-footer btn-primary btn-circle m-lr-5"><i--}}
                {{--class="fab fa-telegram-plane"></i></button>--}}
                {{--</ul>--}}
                {{--</div><!-- End off col-md-3 -->--}}
            </div>
        </div>
    </div>
    <div class="main_footer fix text-center p-top-40 p-bottom-30 ">
        <!-- inicio de footer mastercard -->
        <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 col-res-foot">
            <div class="container p-top-40">
                <img src="/assets/images/WEB 3final-47.png" alt="">
                <img src="/assets/images/WEB 3final-48.png" alt="">
                <img src="/assets/images/WEB 3final-49.png" alt="">
                <img src="/assets/images/WEB 3final-50.png" alt="">
                <img src="/assets/images/WEB 3final-51.png" alt="">
                <img style="width: 16em" src="/assets/images/Logo Eyewallet Footer.png" alt="">
            </div>
        </div>
        {{--<div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 col-res-foot">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 col-res-foot">--}}

                {{--</div>--}}
            {{--</div>--}}


        {{--</div><!-- End off col-md-3 -->--}}
        <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 col-res-foot">
            <div>
                <ul>
                    <button class="btn-footer btn-primary btn-circle m-lr-5"><i
                                class="fa fa-instagram"></i></button>
                    <button class="btn-footer btn-primary btn-circle m-lr-5"><i
                                class="fa fa-facebook"></i></button>
                    <button class="btn-footer btn-primary btn-circle m-lr-5"><i
                                class="fa fa-twitter"></i></button>
                    <button class="btn-footer btn-primary btn-circle m-lr-5"><i
                                class="fab fa-telegram-plane"></i></button>
                </ul>
            </div>
             <div class="container m-top-20 m-bottom-20">
                <a class="m-lr-15" href="/legal">Legal</a>
                <a class="m-lr-15" href="/privacy">Privacy</a>
                <a class="m-lr-15" href="/policies">Policies</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 col-res-foot">
            <div class="container p-bottom-20 text-black">
                Copyright © 2019, Eyewallet
            </div>
        </div>
        <div class="col-lg-12 col-md-5 col-sm-6 col-xs-12 col-res-foot">
            <p class="wow fadeInRight text-black m-bottom-100" data-wow-duration="1s">
                All Rights Reserved. Eyewallet SAPI,CV. Perifercio. Blvd. Manuel Avila Camacho 118, Lomas de
                Chapultepec V Secc,11000. Green Tower Ciudad de México, México.
            </p>
        </div>
    </div>
</footer>


</div>

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

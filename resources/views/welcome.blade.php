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
    <title>Eyewallet: Cryptocurrency Wallet | Send & Receive Cryptocurrencies in your Mobile</title>
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


<!--Home Sections-->
<section id="home" class="home">
    <div class="corrido">
        <div id="p-7">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        <div id="p-8">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        <div id="p-9">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        <div id="p-10">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        <div id="p-11">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        <div id="p-12">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        <div id="p-13">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 69.8 72.7" style="enable-background:new 0 0 69.8 72.7;"
                 xml:space="preserve"><style type="text/css">    .st0 {
                        fill: #5C3BD2;
                    }</style>
                <g>
                    <path class="st0"
                          d="M60.4,31.4l-1.7-2.1l-0.9-1.1l-3.5-4.4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-3.2-4c0,0,0,0,0,0l-4.4-5.5c0,0,0,0,0,0l-1.6-2l-1-1.3l0,0l-4.2-5.2c-0.3-0.3-0.7-0.3-1,0.1l-11.4,19l-0.8,1.3L9.2,42.5c-0.4,0.7-0.4,1.6,0.1,2.2l20.8,25.8c2.4,3,7.2,2.7,9.2-0.6l21.3-35.6C61.1,33.4,61,32.3,60.4,31.4z"/>
                </g></svg>
        </div>
        -->
    </div>
    <canvas id="chart1" style="display: block;" class="chartjs-render-monitor">
    </canvas>
    <div class="container">
        <div class="row" id="moo">
            <div class="">
                <div class="col-md-12">
                    <div class="hello_slid">
                        <div class="slid_item xs-text-center">
                            <div class="col-sm-6">
                                <div class="home_text xs-m-top-30">
                                    <h1 class="text-white"><strong> Compra y vende</strong></h1>
                                    <h1 class="text-white">Bitcoins cerca de ti</h1>
                                    <br>
                                    <h2 class="subti1">Con facilidad, rapidez y seguridad.</h2>
                                </div>
                                <div class="home_btns m-top-40">
                                    <a href="" class="btn btn-grad1">Comprar</a>
                                    <a href="" class="btn btn-grad2">Vender</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <img class="img1" src="assets/images/movil-home.png" alt=""/>
                                <!-- h -->
                            </div>
                        </div><!-- End off slid item -->
                    </div>
                </div>
            </div>
        </div><!--End off row-->
    </div>
    <!-- info cards -->
    <a href="#homeS">
        <div class="slide-slow col-12">
            <div class="animation">
                <div class="XRP info_card" id="XRP">
                        <span class="info_card-icon" style="background-color: rgb(125, 152, 248);">
                            <img class="info_card-img" src="assets/images/ripple.svg" alt="">                                
                        </span>
                    <span class="info_card-body">
                            <h5 class="info_card-titleIzq">XRP</h5>
                            <h5 class="info_card-titleDer">Ripple</h5>                            
                            <h6 class="info_card-limpiarIzq info_card-data1"><strong>$</strong></h6> 
                            <h6 class="info_card-data1 XRP-val" style="color:rgb(173, 196, 235)">Loading</h6>
                            <h5 class="info_card-limpiarIzq info_card-subtitleIzq" style="color:rgb(173, 196, 235)">Cambio 24hr</h5>     
                            <h5 class="info_card-button text-center XRP-cam">...</h5>
                        </span>
                </div>
                <div class="ETH info_card"
                     style="background-image: linear-gradient(to right bottom, rgb(78, 111, 218) 10%, rgb(62, 85, 203)  100%) !important;">
                        <span class="info_card-icon" style="background-color: rgb(133, 170, 237);">
                            <img class="info_card-img" src="assets/images/ethereum.svg">                                
                        </span>
                    <span class="info_card-body">
                            <h5 class="info_card-titleIzq">ETH</h5>
                            <h5 class="info_card-titleDer">Ethereum</h5>                            
                            <h6 class="info_card-limpiarIzq info_card-data1"><strong>$</strong></h6> 
                            <h6 class="info_card-data1 ETH-val" style="color:rgb(173, 196, 235)">Loading</h6>
                            <h5 class="info_card-limpiarIzq info_card-subtitleIzq" style="color:rgb(173, 196, 235)">Cambio 24hr</h5>     
                            <h5 class="info_card-button text-center ETH-cam">...</h5>
                        </span>
                </div>
                <div class="MONERO info_card" id="MONERO"
                     style="background-image: linear-gradient(to right bottom, rgb(66, 96, 203) 10%, rgb(52, 73, 187)  100%) !important;">
                        <span class="info_card-icon" style="background-color: rgb(110, 143, 228);">
                            <img class="info_card-img" src="assets/images/monero.svg" alt="">                                
                        </span>
                    <span class="info_card-body">
                            <h5 class="info_card-titleIzq">XMR​</h5>
                            <h5 class="info_card-titleDer">Monero</h5>                            
                            <h6 class="info_card-limpiarIzq info_card-data1"><strong>$</strong></h6> 
                            <h6 class="info_card-data1 XMR​-val" style="color:rgb(173, 196, 235)">Loading</h6>
                            <h5 class="info_card-limpiarIzq info_card-subtitleIzq" style="color:rgb(173, 196, 235)">Cambio 24hr</h5>     
                            <h5 class="info_card-button text-center MONERO-cam">...</h5>
                        </span>
                </div>
                <div class="ZEC info_card" id="MONERO"
                     style="background-image: linear-gradient(to right bottom, rgb(66, 96, 203) 10%, rgb(52, 73, 187)  100%) !important;">
                        <span class="info_card-icon" style="background-color: rgb(110, 143, 228);">
                            <img class="info_card-img" src="assets/images/zcash.svg" alt="">                                
                        </span>
                    <span class="info_card-body">
                            <h5 class="info_card-titleIzq">ZEC</h5>
                            <h5 class="info_card-titleDer">Zcash</h5>                            
                            <h6 class="info_card-limpiarIzq info_card-data1"><strong>$</strong></h6> 
                            <h6 class="info_card-data1 ZEC-val" style="color:rgb(173, 196, 235)">Loading</h6>
                            <h5 class="info_card-limpiarIzq info_card-subtitleIzq" style="color:rgb(173, 196, 235)">Cambio 24hr</h5>     
                            <h5 class="info_card-button text-center ZEC-cam">...</h5>
                        </span>
                </div>
                <div class="XEM info_card" id="MONERO"
                     style="background-image: linear-gradient(to right bottom, rgb(57, 83, 187) 10%, rgb(48, 66, 167)  100%) !important;">
                        <span class="info_card-icon" style="background-color: rgb(92, 79, 208);">
                            <img class="info_card-img" src="assets/images/nem.svg" alt="">                                
                        </span>
                    <span class="info_card-body">
                            <h5 class="info_card-titleIzq">XEM</h5>
                            <h5 class="info_card-titleDer">Nem</h5>                            
                            <h6 class="info_card-limpiarIzq info_card-data1"><strong>$</strong></h6> 
                            <h6 class="info_card-data1 XEM-val" style="color:rgb(173, 196, 235)">Loading</h6>
                            <h5 class="info_card-limpiarIzq info_card-subtitleIzq" style="color:rgb(173, 196, 235)">Cambio 24hr</h5>     
                            <h5 class="info_card-button text-center XEM-cam">...</h5>
                        </span>
                </div>
                <div class="BTC info_card"
                     style="background-image: linear-gradient(to right bottom, rgb(57, 83, 187) 10%, rgb(48, 66, 167)  100%) !important;">
                        <span class="info_card-icon" style="background-color: rgb(92, 79, 208);">
                            <img class="info_card-img" src="assets/images/bitcoin.svg" alt="">                                
                        </span>
                    <span class="info_card-body">
                            <h5 class="info_card-titleIzq">BTC</h5>
                            <h5 class="info_card-titleDer">Bitcoin</h5>                            
                            <h6 class="info_card-limpiarIzq info_card-data1"><strong>$</strong></h6> 
                            <h6 class="info_card-data1 BTC-val" style="color:rgb(173, 196, 235)">Loading</h6>
                            <h5 class="info_card-limpiarIzq info_card-subtitleIzq" style="color:rgb(173, 196, 235)">Cambio 24hr</h5>     
                            <h5 class="info_card-button text-center BTC-cam">...</h5>
                        </span>
                </div>
            </div>
        </div>
    </a>  <!-- End row -->
</section> <!--End off Home Sections-->
<div class="container-fluid seccion_home">
    <div class="col-md-12">
        <div class="col-md-3 col-sm-6 col-xs-12"><h3 class="text-white no_espacios text-center">10M+</h3><h4
                    class="subti2 text-center">Billeteras</h4></div>
        <div class="col-md-3 col-sm-6 col-xs-12"><h3 class="text-white no_espacios text-center">$200M+</h3><h4
                    class="subti2 text-center">Ejecutadas</h4></div>
        <div class="col-md-3 col-sm-6 col-xs-12"><h3 class="text-white no_espacios text-center">28</h3><h4
                    class="subti2 text-center">Paises</h4></div>
        <div class="col-md-3 col-sm-6 col-xs-12"><h3 class="text-white no_espacios text-center">2018</h3><h4
                    class="subti2 text-center">Fundada</h4></div>
    </div>
</div>
</div><!--End off container -->
<!--product section-->
<section id="product" class="product text-center back-fx-product">
    <div class="container">
        <div class="main_product roomy-80">
            <div class="head_title text-center fix">
                <h2 class="text-black">Bienvenidos a Bitcoin, mundo de fronteras Digitales</h2>
            </div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active" data-interval="999900">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <h1 class="text-left d-flex">Billetera Eyewallet</h1>
                                        <h5 class="text-left" style="">Tus bitcoins de manera óptima fácil y segura.
                                            sitio, comience a enviar y recibir. Eyewallet cuenta con
                                            sistemas de transacción blockchain logrando eficacia
                                            todo en un mismo lugar
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img class="imgTama1" src="assets/images/slides/slides-01.png" alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="item" data-interval="999900">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <h1 class="text-left d-flex">Compra con tarjeta de Crédito/Débito</h1>
                                        <h5 class="text-left">Lo hacemos fácil: Aceptamos tarjetas Visa/Mastercard y
                                            Maestro. Es rápido, fácil y seguro obtenga su bitcoin.
                                            Compra tus bitcoins en segundos.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img class="imgTama2" src="assets/images/slides/slides-06.png" alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item" data-interval="999900">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <h1 class="text-left d-flex">Criptomonedas en tu comercio</h1>
                                        <h5 class="text-left">Tienes un comercio; nosotros te brindamos la facilidad y
                                            gestión a través de nuestro equipo para la recepción de
                                            bitcoins y pagos a través de nuestro API KEY.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img class="imgTama3" src="assets/images/slides/slides-07.png" alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item" data-interval="999900">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <h1 class="text-left d-flex">Bóveda</h1>
                                        <h5 class="text-left">En nuestra bóveda con funcionalidad de almacenamiento.
                                            Segura, confidencial, versátil. Almacene sus criptomonedas
                                            en frío, cuenta con los más altos estándares de seguridad
                                            y protección horas del día, 365 días al año. Gana por tu
                                            almacenamiento de activos digitales con contratos digitales
                                            en servicios que garantizan préstamos de bajo riesgo, gana dinero
                                            almacenando.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img class="imgTama4" src="assets/images/slides/slides-08.png" alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item" data-interval="999900">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <h1 class="text-left d-flex">EYEWALLET Card</h1>
                                        <h5 class="text-left">Es una tarjeta preparada donde puedes realizar depósitos
                                            a través de bitcoin. Realiza retiros desde cajeros de cualquier parte
                                            del mundo y paga en comercioes electrónicos ATM.
                                            Será elegida por nuestros usuarios por ser oportuna, felxible, confiable y
                                            segura.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img class="imgTama5" src="assets/images/slides/slides-09.png" alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item" data-interval="999900">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <h1 class="text-left d-flex">Compra sencilla, segura y rápida</h1>
                                        <h5 class="text-left">Compra y vende criptomonedas desde cualquier parte del
                                            mundo de diferentes formas, fácil, rápido y sencillo. Con soporte y atención
                                            personalizada. ¿Necesitas más de 20.000 USD? Llámanos y lo gestionamos
                                            personalmente.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img class="imgTama6" src="assets/images/slides/slides-10.png" alt=""/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off Product section -->

<div class="container-fluid">
    <div class="row" id="API">
        <div class="col-md-12 text-center seccion_api">
            <div class="col-md-12 text-center imagen_api">
                <h1 class="text-white">Procesador de comercio API</h1>
                <h3 class="text-white">Nuestra herramienta de comercio te permite recibir pagos y realizar pagos desde
                    tu comercio electrónico <br></h3>
                <h3 class="text-white">Fácil, Rápido y Seguro.</h3>
                <span class=""><a href="" class="btn btn3 float-right">Solicitar API KEY</a></span>
                <span class=""><a href="" class="btn btn3 float-right">Documentación</a></span>
            </div>
        </div>
    </div>
</div>

<!--Featured Section-->
<section id="features" class="features back-fx-product">
    <div class="container roomy-80" id="comprar">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="text-left d-flex">Solicita tu Tarjeta Eyewallet</h1>
                <h5 class="text-left">No tomes riesgos con tu dinero, confía sólo en el mejor equipo,
                    un equipo que trabaja para usted con la mejor tecnología.
                    Cualquier duda que tengas puedes consultarnos, aunque no seas nuestro cliente. <br><br>
                    ¿Eres nuevo en las criptomonedas? Visita nuestra Guía Bitcoin, la mejor información sobre
                    criptomonedas en español.
                </h5>
                <div class="home_btns m-top-40 text-center">
                    <a href="{{route('solicitar')}}" class="btn btn-grad2 btn-big">Solicitar tarjeta</a>
                    <img class="btn-inner" src="assets/images/WEB 3final-05.png" alt=""/>

                </div>
            </div>
            <div class="col-sm-6">
                <img src="assets/images/WEB 3final-35.png" alt=""/>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <h1 class="text-center d-flex">¿Por qué usar Eyewallet?</h1>
            <div class="main_features fix roomy-70 col-md-12">
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-26.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Seguro</h3>
                            <p>Todas tus transacciones son 100% seguras conexiones
                                cifradas y métodos de pago líderes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-27.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Instantáneo</h3>
                            <p>una experiencia completamente fluída. La operación se realiza
                                de forma instantánea.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-30.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Fácil</h3>
                            <p>Con solo 3 pasos podrás comprar y vender bitcoinslos 365 días del
                                año a través de una interfaz sencilla.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--Segunda linea-->
            <div class="main_features fix col-md-12">
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-32.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Fuerte en el mercado</h3>
                            <p>Cada día, miles de usuarios de todo el mundo usan EYEWALLET,
                                su satisfacción es nuestra mejor carta de presentación.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-34.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Seguro y confiable</h3>
                            <p>Si busca seguridad para sus criptomonedas, elija
                                nuestro monedero.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-28.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Soporte</h3>
                            <p>Contamos con un soporte en línea
                                que le permite estar en contacto con nosotros cada vez
                                que necesite ayuda.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--Tercera línea-->
            <div class="main_features fix col-md-12">
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-33.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Tu negocio en cualquier parte</h3>
                            <p>Cada día, miles de usuarios de todo el mundo usan EYEWALLET,
                                su satisfacción es nuestro mejor carta de presentación.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-31.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Compra y vende</h3>
                            <p>Si busca seguridad para sus criptomonedas, elija nuestro
                                monedero de confianza.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                        <div class="f_item_icon">
                            <img src="assets/images/WEB 3final-29.png" alt=""/>
                        </div>
                        <div class="f_item_text">
                            <h3>Estamos a nivel mundial</h3>
                            <p>Contamos con un soporte en línea que le permite estar en Contacto
                                con nosotros cada vez que necesite ayuda.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off Featured Section-->

<!-- Reemplazar noticias con cards-->

<!-- <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="assets/images/WEB 3final-24.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Titulo noticia</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-body">
        <a href="#" class="card-link">Leer más</a>
    </div>
</div>  -->
<!--Brand Section-->
<section id="noticias" class="back-fx-purple">
    <div class="">
        <h1 class="text-center text-white p-top-40 p-bottom-40">Últimas noticias</h1>
        <div class="container m-bottom-100">
           
            <div class="row row-news-al">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col2-res-news">
                    <img src="{{$articles1->urlToImage}}" alt="">
                    <h4 class="text-white text-res-ti news-title">{{$articles1->title}}</h4>
                    <!-- <h6 class="text-white text-res-det">{{$articles1->description}}...</h6> -->
                   <a href="{{$articles1->url}}"><h6 class="text-white text-read">LEER MÁS</h6></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-res-news">
                    <img src="{{$articles2->urlToImage}}" alt="">
                    <h2 class="text-white text-res-ti news-title">{{$articles2->title}}</h2>
                    <h5 class="text-white text-res-det">{{$articles2->description}}...</h5>
                   <a href="{{$articles2->url}}"><h6 class="text-white text-read">LEER MÁS</h6></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img src="{{$articles3->urlToImage}}" alt="">
                    <h4 class="text-white text-res-ti news-title">{{$articles3->title}}</h4>
                    <!-- <h6 class="text-white text-res-det">{{$articles3->description}}...</h6> -->
                    <a href="{{$articles3->url}}"><h6 class="text-white text-read">LEER MÁS</h6></a>

                    <img src="{{$articles4->urlToImage}}" alt="">
                    <h4 class="text-white text-res-ti news-title">{{$articles4->title}}</h4>
                    <!-- <h6 class="text-white text-res-det">{{$articles4->description}}...</h6> -->
                    <a href="{{$articles4->url}}"><h6 class="text-white text-read">LEER MÁS</h6></a>
                </div>
            </div>
        </div>

    </div>
</section><!-- End off Brand section -->


<!--Seccion para descargar la app-->
<section class="back-fx-product" id="descarga">
    <img class="pos-cel" src="/assets/images/WEB 3final-37.png">
    <div class="carousel slide carousel-fade carousel-move" data-ride="carousel">
        <div class="carousel-inner carousel-move2" role="listbox">
            <div class="item active">
                <div class="">
                    <div class="test_item fix">
                        <div class="test_img fix">
                            <img src="/assets/images/WEB 3final-38.png" class="carousel-dimension"/>
                        </div>
                    </div>
                </div>
            </div><!-- End off item -->
            <div class="item">
                <div class="">
                    <div class="test_item fix">
                        <div class="test_img fix">
                            <img src="/assets/images/WEB 3final-39.png" class="carousel-dimension"/>
                        </div>
                    </div>
                </div>
            </div><!-- End off item -->

            <div class="item">
                <div class="">
                    <div class="test_item fix">
                        <div class="test_img fix">
                            <img src="/assets/images/WEB 3final-40.png" class="carousel-dimension"/>
                        </div>
                    </div>
                </div>
            </div><!-- End off item -->
        </div><!-- End off carosel inner -->
    </div> <!-- End of carousel slide -->

    <div class="descarga">
        <div class="hr-sangria"></div>
        <h1 class="fnt-bold">Eyewallet siempre a tu alcance</h1>
        <h2 class="p-bottom-80 p-top-20 fnt-dis">Disponible para iOS y Android.</h2>
        <div class="center-obj">
            <button class="btn-appstore"><i class="fa fa-apple logo-align"></i>
                <h6 class="text-white a-textxl-btn-align ">Descarga en la </h6>
                <h3 class="text-white a-textsm-btn-align">App Store</h3>
            </button>
            <button class="btn-gplay"><i class="fab fa-google-play logo-align"></i>
                <h5 class="textxl-btn-align">Disponible en</h5>
                <h5 class="textsm-btn-align">Google Play</h5>
            </button>
        </div>
    </div>
</section><!-- End off test section -->


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

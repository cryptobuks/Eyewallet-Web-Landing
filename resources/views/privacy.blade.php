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
            <div class="navbar-brand" href="/">
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
                <h2 class="text-black">Privacy</h2>
            </div>

            <div class="content">
               <div class="privacy__LegalContainer-sc-17b45fd-1 dUFVoi DocContainer-sc-134rzd-0 jcDzzs"><h3>Eyewallet Privacy Policy</h3><h5>Last Updated: October 18, 2018</h5><hr><div><p>Privacy is of utmost importance at the Eyewallet group of companies (“Eyewallet”). We recognize the significance of protecting information which is stored on our computers or is intended to be stored on our computers and which relates to an individual. The data we protect are the “Personal Data” which is any information relating to an identified or identifiable natural person, sometimes called a data subject, and have made protecting privacy and the confidentiality of Personal Data a fundamental component of the way we do business. This Privacy Policy informs you of the ways we work to ensure privacy and the confidentiality of Personal Data. This policy describes the information we gather, how we use those Personal Data and the circumstances under which we disclose such information to third parties.</p><p>In this Policy “Services” means the web site, any feature provided by us via that website or any local application (mobile desktop or otherwise), including without limitation wallet services or Eyewallet information services, but excluding API services, which are governed by a separate agreement.</p><p>If you do not agree with this Privacy Policy in general or any part of it, you should not use the Services.</p></div><div><h4>Contents</h4><ol><li><a href="#collecting">Collecting of Personal Information</a></li><li><a href="#use_of_personal">Use of Personal Data</a></li><li><a href="#disclosure_of_personal">Disclosure of Personal Data</a></li><li><a href="#security_of_personal">Security of Your Personal Data</a></li><li><a href="#retention_of_personal">Retention of Your Personal Data</a></li><li><a href="#storage_of_personal">Storage of Personal Data</a></li><li><a href="#rights">Your Rights</a></li><li><a href="#acceptance">Acceptance</a></li><li><a href="#questions">Questions and Complaints</a></li></ol></div><div><h4 id="collecting">1. Collecting of Personal Information</h4><p>When you access or use the Services, we collect the following information:</p><p><b>Information you may provide to us:</b> You may give us information about you by filling in forms on our website or through our app or by corresponding with us by phone, email or otherwise. This includes information you provide when you register to use the Services and when you report a problem with the website or with our app</p><p><b>Information we collect about you:</b> With regard to each of your visits to our website or our app we automatically collect the following information:</p><ul><li><b><u>Login Information:</u></b> <!-- -->We log technical information about your use of the Services, including the type of browser and version you use, last access time of your wallet, the Internet Protocol (IP) address used to create the wallet and the most recent IP address used to access the wallet.</li><li><b><u>Device Information:</u></b> <!-- -->We collect information about the device you use to access your account, including the hardware model, operating system and version, and unique device identifiers, but this information is anonymized and not tied to any particular person.</li><li><b><u>Wallet Information:</u></b> <!-- -->If you create a Eyewallet wallet through our Services, you may choose to generate a public and private key pair. When you log out of the wallet, we collect an encrypted file, that, if unencrypted, would contain these keys, along with your transaction history. When you enable notifications through your Account Settings, we will collect the unencrypted public key in order to provide such notifications. Under no circumstances do we ever collect an unencrypted private key from you, nor can we decrypt any wallet file data.</li><li><b><u>Transaction Information:</u></b> <!-- -->In connection with our Conversion Service, as such term is defined in our User Agreement, we may collect and maintain information relating to transactions you effect in your Wallet that convert one Virtual Currency to another (e.g. Bitcoin for Ether).</li></ul><p><b>Information We Collect from Other Sources:</b> We also receive information from other sources and combine that with information we collect through our Services. For instance:</p><ul><li>We use third-party services that may be co-branded as Eyewallet but will do so with clear notice. Any third-party services may collect information as determined by their own privacy policies.</li><li>We also use "cookies" from time to time to help personalize your online experience with us. A cookie is a small text file that is stored on your computer to help us make your visit to our site more “user-friendly.” Please see our<!-- --> <a href="https://www.Eyewallet.com/legal/cookies" target="_blank" rel="nofollow noopener noreferrer">Cookies Policy</a> <!-- -->for more details about the cookies we use. Cookies provide us with information about your use of the site that can help us improve the site and your experience with it. We will process Personal Data collected through cookies in accordance with this Privacy Policy. If you have set your browser to warn you before accepting cookies, you should receive a warning message with each cookie. You may refuse cookies by turning them off in your browser, however, you should be aware that our site, like most other popular sites, may not work well with cookies disabled.</li></ul></div><div><h4 id="use_of_personal">2. Use of Personal Data</h4><p>As it is in our legitimate interest to be responsive to you and to ensure the proper functioning of our products and organization, we will use your information to:</p><ul><li>Understand and meet your needs and preferences in using our Services;</li><li>Develop new and enhance existing service and product offerings;</li><li>Manage and develop our business and operations;</li><li>Carry out any actions for which we have received your consent;</li><li>Prevent fraudulent or other criminal activity; and</li><li>Meet legal and regulatory requirements.</li></ul><p>We also reserve the right to use aggregated Personal Data to understand how our users use our Services, provided that those data cannot identify any individual.</p><p>We also use third party web analytic tools that help us understand how users engage with the website. These third parties may use first-party cookies to track user interactions to collect information about how users use our website. This information is used to compile reports and to help us improve our website. The reports disclose website trends without identifying individual visitors. You can opt out of such third party analytic tools without affecting how you visit our site – for more information on opting out, please contact<!-- --> <a href="mailto:privacy@Eyewallet.com">privacy@Eyewallet.com</a>.</p><p>We will process your Personal Data legally and fairly and not use it outside the purposes of which we have informed you. So far as we are able we shall ensure that all of your Personal Data is accurate and up to date.</p></div><div><h4 id="disclosure_of_personal">3. Disclosure of Personal Data</h4><p>We may share your information with selected recipients to perform functions required to operate your Eyewallet account on our behalf. All such third parties will be contractually bound to protect data in compliance with our Policy. The categories of recipients include:</p><ul><li>Companies within the Eyewallet corporate family located in the United States and the United Kingdom, in order to provide the Services to you.</li><li>Cloud services providers to store certain personal data and for disaster recovery services, as well as for the performance of any contract we enter into with you.</li></ul><p>We also may share personal information with a buyer or other successor in the event of a merger, divestiture, restructuring, reorganization, dissolution or other sale or transfer of some or all of Eyewallet’s assets, whether as a going concern or as part of bankruptcy, liquidation or similar proceeding, in which Personal Data held by Eyewallet is among the assets transferred.</p><p>Except where we are required by law to disclose Personal Data or are exempted from, released from or not subject to any legal requirement concerning the disclosure of Personal Data, we will require any person to whom we provide your Personal Data to agree to comply with our Privacy Policy in force at that time or requirements substantially similar to such policy. We will make reasonable commercial efforts to ensure that they comply with such policy or requirements, however, where not expressly prohibited by law, we will have no liability to you if any person fails to do so. We shall require any third party, including without limitation any government or enforcement entity, seeking access to data we hold to have obtained a Court Order, or equivalent proof that they are statutorily empowered to access your data and that their request is valid and within their power.</p></div><div><h4 id="security_of_personal">4. Security of Your Personal Data</h4><p>We protect Personal Data with appropriate physical, technological and organizational safeguards and security measures. Your Personal Data comes to us via the internet which chooses its own routes and means whereby information is conveyed from location to location. As such we cannot give any warranty or assurance that the means where information is conveyed to us are safe, reliable or have integrity. We audit our procedures and security measures regularly to ensure they are being properly administered and remain effective and appropriate. Every member of Eyewallet is committed to our privacy policies and procedures to safeguard Personal Data. Our site has security measures in place to protect against the loss, misuse and unauthorized alteration of the information under our control. More specifically, our server uses SSL (Secure Sockets Layer) security protection by encrypting your Personal Data to prevent individuals from reading these Data as they travel over the Internet.</p><h4 id="retention_of_personal">5. Retention of Your Personal Data</h4><p>The length of time we retain Personal Data outside our back up system varies depending on the purpose for which it was collected and used, as follows:</p><ul><li>Data you provide to us when subscribing for our services: while user remains active, stored in the UK.</li><li>Country Location data: while user remains active, stored in the UK.</li><li>Data on your preferences: while user remains active, stored in the UK.</li><li>IP address login: until subsequent login from a new IP, stored in the UK.</li></ul><p>Except where prohibited by law, this period may extend beyond the end of the particular relationship with us but only for so long as we are contractually bound to do so, or so far as is necessary for audit, regulatory or other accounting purposes. When Personal Data are no longer needed we have procedures either to destroy, delete, erase or convert it to an anonymous form.</p><p>After you have terminated your use of our Services, we reserve the right to maintain your Personal Data as part of our standard back-up procedures in an aggregated format.</p></div><div><h4 id="storage_of_personal">6. Storage of Personal Data</h4><p>Eyewallet stores your Personal Data at secure locations in the EU. Eyewallet has ensured that appropriate security standards are in place regarding the safeguarding, confidentiality and security of Data. The information that we collect from you will be transferred to, and stored in, destinations outside of your country and the European Economic Area ("EEA") as described below:</p><p>The information that we collect from you will be transferred to, and stored in, destinations outside of your country and the European Economic Area ("<b>EEA</b>") as described below:</p><p><i>Adequacy Decision:</i> The personal data that we collect from you will be transferred to, and stored at/processed in, the UK via encrypted communications channels and stored on hardware owned by Eyewallet for the purpose of operation of Services and disaster recovery, which were found to have an adequate level of protection for personal data under Commission Decision 2000/518/EC of 26 July 2000.</p><p><i>Model Clauses:</i> The personal data that we collect from you will be transferred to, and stored at/processed in the UK via encrypted communications channels and stored on hardware owned by Eyewallet for the purpose of operation of Services and disaster recovery, under the Commission’s model contracts for the transfer of personal data to third countries (i.e., the standard contractual clauses), pursuant to Decision 2010/87/EU.</p><p><i>Privacy Shield:</i> The personal data that we collect from you will be transferred to, and stored at/processed by Eyewallet which complies with the US Department of Commerce's EU-US Privacy Shield and Swiss–US Privacy Shield and has certified that we adhere to the EU-US Privacy Shield Principles of Notice, Choice, Accountability for Onward Transfer, Security, Data Integrity and Purpose Limitation, Access, Recourse, Enforcement and Liability. For more information about the EU-US Privacy Shield Framework and Swiss-US Privacy Shield Framework, visit the U.S. Department of Commerce's Privacy Shield<!-- --> <a href="https://www.commerce.gov/page/eu-us-privacy-shield" target="_blank" rel="nofollow noopener noreferrer">website</a>.</p></div><div><h4 id="rights">7. Your Rights</h4><p>If you are resident in the EU, in certain circumstances you have the right to access and receive a copy of information we hold about you, to rectify any personal data held about you that is inaccurate and to request the deletion of personal data held about you. Any access request after the first such request by you may be subject to a reasonable fee to meet our costs in providing you with details of the information we hold about you. You also have the right to data portability for information you provide to us – this means that you can obtain a copy of your data in a commonly used electronic format so that you can manage and move it. You may have the right to restrict or object to the processing of your personal data by us. You can exercise your rights by contacting us at<!-- --> <a href="mailto:privacy@Eyewallet.com">privacy@Eyewallet.com</a>.</p></div><div><h4 id="acceptance">8. Acceptance</h4><p>By using the Services, you signify your agreement to this Policy. Eyewallet reserves the right to change this Policy at any time. If we make any material changes to this Policy, the revised Policy will be posted here and notified to our users at least 30 days prior to the changes taking effect, so that you are always aware of what information we collect, how we use it and under what circumstances we disclose it. Please check this page frequently to see any updates or changes to this Policy</p></div><div><h4 id="questions">9. Questions and Complaints</h4><p>Any questions about this Policy, the collection, use and disclosure of Personal Data by Eyewallet or access to your Personal Data which is required by law (or would be so subject had the storage in question taken place in a relevant EU member state if the case may be but not otherwise) to be disclosed should be directed to<!-- --> <a href="mailto:privacy@Eyewallet.com">privacy@Eyewallet.com</a>.</p><p>In the event that you wish to make a complaint about how we process your personal data, please contact us in the first instance at<!-- --> <a href="mailto:privacy@Eyewallet.com">privacy@Eyewallet.com</a> and we will endeavor to deal with your request as soon as possible. This is without prejudice to your right to launch a claim with the data protection supervisory authority in the country in which you live or work where you think we have infringed data protection laws.</p></div></div>
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

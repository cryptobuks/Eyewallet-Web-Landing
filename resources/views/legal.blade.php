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
            <div class="navbar-brand">
                <img src="assets/images/logo_color.png" class="logo-display" alt="">
                <img src="assets/images/logo_blanco.png" class="logo-scrolled" alt="">
            </div>
            <!-- <span class="form-inline alineado_brand"><h3 class="titulo_marca">EYEWALLET</h3><p class="subtitulo_marca">CRYPTO BANK</p></span> -->
            </a>
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
                <h2 class="text-black">Legal</h2>
            </div>

            <div class="content">
                <div class="terms__LegalContainer-sc-19cko09-1 hrjjqt DocContainer-sc-134rzd-0 jcDzzs"><h3>Eyewallet New Zealand S.A. User Agreement</h3><h5>Last Updated: November 6, 2018</h5><hr><p>This is an agreement between Eyewallet New Zealand S.A., its affiliates and subsidiaries (collectively referred to herein as “Eyewallet”, “we”, “us”, or “our”) and you (together with Eyewallet, the “Parties” and each a “Party”). By using any Eyewallet service, whether through Eyewallet.com, any associated website, API, or mobile application (collectively, “Services”), you agree that you have read, understood, and accept all of the terms and conditions contained herein (the “User Agreement”), as well as our Privacy Policy located at<!-- --> <a href="https://www.Eyewallet.com/privacy" target="_blank" rel="nofollow noopener noreferrer">https://www.Eyewallet.com/privacy</a>, and Cookie Policy, located at<!-- --> <a href="https://www.Eyewallet.com/cookies" target="_blank" rel="nofollow noopener noreferrer">https://www.Eyewallet.com/cookies</a>.</p><div><h4>THIS AGREEMENT CONTAINS AN ARBITRATION PROVISION. YOU AGREE AND UNDERSTAND THAT IF WE CANNOT RESOLVE A DISPUTE THROUGH OUR USER OPERATIONS TEAM, ALL DISPUTES ARISING UNDER THIS USER AGREEMENT SHALL BE SETTLED IN BINDING ARBITRATION. YOU ALSO AGREE AND UNDERSTAND THAT ENTERING INTO THIS AGREEMENT CONSTITUTES A WAIVER OF YOUR RIGHT TO A TRIAL BY JURY AND PARTICIPATION IN A CLASS ACTION LAWSUIT.</h4><h4>1. GENERAL USE</h4><p>1.1 <i>Eligibility</i>. By entering into this User Agreement, you affirm that you are an individual, at least 18 years of age or older, have the capacity to enter into this User Agreement and agree to be legally bound by the terms and conditions of this User Agreement, including the Cookie Policy and the Privacy Policy as incorporated herein, as amended from time to time. In order to use Services provided by Eyewallet, you may be required to provide certain identifying information pursuant to our know-your-customer and anti-money laundering compliance program (“Compliance Program”).</p><p>1.2 <i>Modification</i></p><p>1.2.1 We may change the terms of this User Agreement at any time. Any such changes will take effect when posted on the Eyewallet website, or when you use the Services. If you have supplied us with an email address, we will also attempt to notify you by email of changes to this User Agreement.</p><p>1.2.2 It is your responsibility to update your contact information, including but not limited to the email address provided to us (if any); failure to do so may result in you not receiving notice of any such changes to the User Agreement.</p><p>1.2.3 Read the User Agreement carefully on each occasion you use the Services. Your continued use of the Services shall signify your acceptance to be bound by the current User Agreement. Our failure or delay in enforcing or partially enforcing any provision of this User Agreement shall not be construed as a waiver of any</p></div><div><h4>2. DEFINITIONS</h4><p>2.1 <i>"API"</i> means application programming interface, and is not a Service, as defined below.</p><p>2.2 <i>"Fork"</i> means a change to the underlying protocol of a Virtual Currency network that results in more than one version of a Virtual Currency, the result of which may be one or more versions that are not supported by Eyewallet.</p><p>2.3 <i>"Service"</i> means one or more features provided or operated by Eyewallet via website or local application (mobile, desktop, or otherwise), including but not limited to: (a) a wallet service consisting of software that permits you to self-custody virtual currency, organize network addresses, view transaction history and transact in virtual currencies (the “Wallet”), (b) a noncustodial conversion service that allows you to exchange or convert one virtual currency for another (“Conversion Service”); (c) third party conversion services that allow you to convert one virtual currency for another (“Third Party Conversion Service”); and (d) the Airdrop Program.</p><p>2.4 <i>"User Account"</i> means an account for Services associated with both (i) a Wallet and (ii) a verified identity approved in accordance with Eyewallet’s Compliance Program. A Wallet is not, by itself, a User Account.</p><p>2.5 <i>"Virtual Currency"</i> means a cryptocurrency, digital currency, digital asset, cryptoasset or other such similar term describing, for example, Bitcoin or Ether but does not include a derivative of a virtual currency or a security.</p></div><div><h4>3. APPLICABLE LAW</h4><p>Your relationship with Eyewallet and use of any of the Services may be subject to the laws, regulations, and rules of governmental or regulatory authorities in your or our jurisdiction (“Applicable Law”). By entering into this User Agreement, you agree to act in compliance with and be legally bound to any and all Applicable Law.</p><h4>4. Eyewallet USER ACCOUNT</h4><p>4.1 <i>Account Creation</i></p><p>4.1.1 Creating your own User Account may require you to use multiple methods of authentication or verification, and depending on the specific Service provided, may require you to complete our Compliance Program.</p><p>4.1.2 You agree and understand that you are solely responsible for managing and maintaining the security of any information relating to your login credentials and agree that Eyewallet will not be held responsible (and you will not hold us responsible) for any unauthorized access to the Services or any resulting harm you may suffer.</p><p>4.1.3 You agree that you will not permit access to your login credentials to any other party and will not hold Eyewallet responsible for any actions taken by individuals unauthorized to access your User Account.</p><p>4.2 <i>Compliance Program.</i> Your access to one or more Eyewallet Services may be contingent upon successful completion of onboarding processes, which includes verification of your identity and source of funds, and additional information we may request from time-to-time. The information we request may include, without limitation, personally identifiable information such as name, address, telephone number, date of birth, taxpayer identification or social security number, official government-issued photo identification, and bank account information. In providing this information to us you represent that it is accurate and agree to update your User Account information promptly, but in no event later than 30 days following any change in your User Account information. Failure to provide this information or update it promptly may result in certain Eyewallet Services being unavailable to you.</p><p>4.3 <i>Communications.</i></p><p>4.3.1 By entering into this User Agreement, you understand and agree that any and all communications from Eyewallet may be provided to you via electronic mail at the address you provided when creating your User Account. You agree and acknowledge that Eyewallet shall not be responsible for any harm you may suffer as a result of your failure to receive any notice provided to you in connection with this User Agreement your use of Services so long as such notice is provided to the email address associated with your User Account.</p><p>4.3.2 You further acknowledge and agree that Eyewallet shall also be permitted to communicate with you through other methods including via telephone call or instant messaging or chat applications either operated by Eyewallet or a third party.</p><p>4.4 <i>User Account Suspension or Termination.</i> </p><p>4.4.1 You may close your User Account at any time, at your sole discretion. Depending on the Services available to you in your User Account, you may be required to take certain actions in order to complete a pending transaction or providing additional information prior to closing such User Account. You are solely responsible for any fees already incurred or associated with the closing of your User Account, whether incurred directly by you from Eyewallet, or incurred by Eyewallet on your behalf with a third party in order to complete any such action. Closing your User Account may not result in the deletion of information we hold about you.</p><p>4.4.2 You agree and understand that Eyewallet reserves the right, in our sole discretion, to immediately suspend, freeze, or terminate your User Account or any Wallet in the event that you are suspected of having violated any provision of this User Agreement, believed to be in violation of Applicable Law, or are believed to be involved in activities or conduct detrimental to Eyewallet.</p></div><div><h4>5. THE WALLET</h4><p>5.1. <i>Description</i></p><p>5.1.1 The Wallet is provided to you exclusively by Eyewallet New Zealand S.A. At no point will Eyewallet ever take custody or control over Virtual Currency stored in your Wallet. The Wallet is only capable of supporting certain Virtual Currencies. Under no circumstances should you attempt to store Virtual Currencies in your Wallet that the Wallet does not support. The Wallet does not store, send, or receive Virtual Currency.</p><p>5.1.2 When you create a Wallet, the Wallet software generates a cryptographic private and public key pair that you may use to send and receive any supported Virtual Currency via the relevant Virtual Currency network. You are solely responsible for storing, outside of the Services, a backup of any Wallet, private key or transaction information that you maintain in your Wallet or otherwise with the Services. If you do not maintain a backup of your Wallet data outside of the Services, you will be may not be able to access Virtual Currency previously accessed using your Wallet in the event that we discontinue or no longer offer some or all of the Services or may otherwise lose access to Virtual Currency. We are not responsible for maintaining this data on your behalf.</p><p>5.2 <i>Risk Disclosures Relating to the Wallet</i>.</p><p>5.2.1 In order to be completed, any Virtual Currency transaction created with the Wallet must be confirmed and recorded in the Virtual Currency ledger associated with the relevant Virtual Currency network. Such networks are decentralized, peer-to-peer networks supported by independent third parties, which are not owned, controlled or operated by Eyewallet.</p><p>5.2.2 Eyewallet has no control over any Virtual Currency network and therefore cannot and does not ensure that any transaction details you submit via our Services will be confirmed on the relevant Virtual Currency network. You agree and understand that the transaction details you submit via our Services may not be completed, or may be substantially delayed, by the Virtual Currency network used to process the transaction. We do not guarantee that the Wallet can transfer title or right in any Virtual Currency or make any warranties whatsoever with regard to title.</p><p>5.2.3 Once transaction details have been submitted to a Virtual Currency network, we cannot assist you to cancel or otherwise modify your transaction or transaction details. Eyewallet has no control over any Virtual Currency network and does not have the ability to facilitate any cancellation or modification requests.</p><p>5.3 Forks. In the event of a Fork, Eyewallet may not be able to support activity related to your Virtual Currency. You agree and understand that, in the event of a Fork, the transactions may not be completed, completed partially, incorrectly completed, or substantially delayed. Eyewallet is not responsible for any loss incurred by you in caused in whole or in part, directly or indirectly, by a Fork.</p><p><i>5.4 No Password Retrieval.</i></p><p>5.4.1 With respect to the Wallet, Eyewallet does not receive or store your Wallet password, nor any keys, network addresses or transaction history. We cannot assist you with Wallet password retrieval. You are solely responsible for remembering, storing and keeping secret your Wallet password. Any Virtual Currency you have associated with such Wallet may become inaccessible if you do not know or keep secret your Wallet password. Any third party with knowledge of one or more of your credentials (including, without limitation, a backup phrase, wallet identifier or password) can dispose of virtual currency in your wallet.</p><p>5.4.2 When you create a Wallet, you must: (a) create a strong password that you do not use for any other website or online service; (b) provide accurate and truthful information; (c) protect and keep secret all credentials for the Wallet; (d) protect access to your device and your Wallet; (e) promptly notify us if you discover or otherwise suspect any security breaches related to your Wallet; and (f) use the backup functionality provided through the Wallet and safeguard your backup files. You agree to take responsibility for all activities that occur under your Wallet and accept all risks of any authorized or unauthorized access to your Wallet, to the maximum extent permitted by law.</p><p>5.5 <i>Fees</i>. Eyewallet does not currently charge a fee for Wallet, receiving, sending or controlling Virtual Currency. However, we reserve the right to do so in the future, and in such case any applicable fees will be displayed prior to you incurring the fee. Network fees (including, without limitation “miner’s fees”) required to use a Virtual Currency network may apply to a transaction. We may attempt to calculate such a fee for you. Our calculation may not be sufficient, or it may be excessive. You may select a greater or lesser fee. You are solely responsible for paying any such fee and Eyewallet will neither advance nor fund such a fee on your behalf, nor be responsible for any excess or insufficient fee calculation.</p></div><div><h4>6. CONVERSION SERVICE</h4><p>6.1 <i>Description</i>. The Conversion Service is provided to you exclusively by Eyewallet Access UK LTD. Through its Conversion Service, Eyewallet will display to you a conversation rate that may include a fee, which you agree to pay. The Conversion Service works in connection with the Wallet, by which we will deliver you the requested Virtual Currency, less any applicable fees, by executing a transaction from a Virtual Currency address we control to one associated with your Wallet.</p><p>6.2 <i>Due Diligence</i>. We may, at our sole discretion and from time-to-time, require you to satisfy our Compliance Program before participating in the Conversion Service. In order to use the Conversion Service, you agree to cooperate with any such request and pay any associated fees, which may be modified or supplemented at any time.</p><p>6.3 <i>No Cancellation</i>. You may not cancel, reverse or change any Conversion Service transaction. We may suspend, delay, redirect, reverse or cancel any Conversion Service transaction at any time if we suspect any risk of fraud, crime, breach of this User Agreement, or illicit activity and will not be liable for any resulting loss.</p><p>6.4 <i>Transaction Limitation</i>. We may implement Conversion Service transaction limits. These may vary based on a variety of factors, including without limitation the time of your transaction, your location, the Virtual Currency purchased, and the Virtual Currency sold. We implement, raise and lower Conversion Service transaction limits in our sole discretion.</p><p>6.5 <i>Third Party Conversion Service</i>. On occasion, Eyewallet may use a third party service provider, selected by Eyewallet in our sole discretion, to facilitate the Conversion Service. In the event that we elect to use a third party in connection with your use of the Conversion Service, it shall be on an ‘as-is’ basis. Eyewallet is not your counterparty in any transaction completed via any third party service and cannot be held liable for any loss caused in whole or in part, directly or indirectly, by such third party.</p></div><div><h4>7. LOCKBOX</h4><p>7.1 <i>Description</i>. We may advertise to you a Eyewallet Lockbox hardware device (“Lockbox”) to be used in connection with the Wallet or other Services. A Lockbox is manufactured, offered and supported (if applicable) by third parties, not Eyewallet. You have no relationship, contractual or otherwise, with Eyewallet in connection with your purchase of a Lockbox from such third party. We may, from time-to-time, include features permitting you to use a Lockbox in connection with the Services. We do not guarantee support for, or access to, any Lockbox as part of the Services. We will not be responsible for any damages caused in whole or in part, directly or indirectly, by a Lockbox or any use of a Lockbox, whether or not it was used in connection with the Services.</p><p>7.2 <i>No Password Retrieval</i>.</p><p>7.2.1 Eyewallet does not receive or store passwords, keys, network addresses, transaction history, personal identification numbers (“PINs”) or other credentials associated with a Lockbox. We cannot assist you with Lockbox credential retrieval. You are solely responsible for remembering, storing and keeping secret any Lockbox credentials. Any Virtual Currency you have associated with a Lockbox may become inaccessible if you do not know or keep secret your credentials. Any third party with knowledge of one or more of your credentials (including, without limitation, a backup phrase or PIN) can dispose of Virtual Currency in your wallet.</p><p>7.2.2 When you set up a Lockbox, you must: (a) create strong credentials (like PINs) that you do not use for any other service; (b) protect and keep secret all credentials; (c) protect access to your Lockbox; (d) promptly notify us if you discover or otherwise suspect any security breaches related to your Lockbox; and (e) use the backup functionality provided with the Lockbox, keeping all backup information secure and confidential. You agree to take responsibility for all activities that occur in connection with your Lockbox and accept all risks of any authorized or unauthorized access to your Lockbox, to the maximum extent permitted by law.</p><p>7.3 <i>Risk Disclosures Relating to the Lockbox</i>.</p><p>7.3.1 At no point will Eyewallet ever take custody or control over any Virtual Currency stored using a Lockbox, nor will we have access to any credentials associated with your Lockbox or the ability to recover any Virtual Currency used in connection with a Lockbox.</p><p>7.3.2 Information relating to Virtual Currency, like balances, availability or value, may not reflect the actual balance in real-time. Just as with use of your Wallet, you agree and understand that you should independently verify all information before relying on it, and any decisions or actions taken based upon such information are your sole responsibility.</p><p>7.4 <i>Disclaimer of Warranties</i>.</p><p>7.4.1 Any Services offered in connection with the Lockbox are provided on an "as is" basis without any representation or warranty, whether express, implied or statutory. To the maximum extent permitted by applicable law, we specifically disclaim any implied warranties of title, merchantability, fitness for a particular purpose and/or non-infringement. We do not make any representations or warranties that use of the Lockbox will be continuous, uninterrupted, timely, or error-free.</p><p>7.4.2 We make no warranty that any Lockbox will be free from viruses, malware, or other related harmful material and make no representation that your ability to access any Lockbox will be uninterrupted. Any defects or malfunction in the product should be directed to the third party offering the Lockbox and not Eyewallet. We will not be responsible or liable to you for any loss of any kind, from action taken, or taken in reliance on material, or information, contained on or through the Lockbox.</p></div><div><h4>8. AIRDROP PROGRAM</h4><p>8.1 <i>Description</i>. We may offer you the opportunity to receive Virtual Currency at no cost (“Airdrop”), subject to the terms described in this section. The Virtual Currency is delivered by us to you, but is manufactured, offered and supported by the network creator or developer, if any, and not Eyewallet.</p><p>8.2 <i>Terms of Airdrop Program</i>.</p><p>8.2.1<!-- --> <i><u>No Purchase Necessary</u></i>. There is no purchase necessary to receive Virtual Currency in an Airdrop. However, you must have a User Account. Although Eyewallet does not charge a fee for participation in the Airdrop Program, we reserve the right to do so in the future and shall provide notice to you in such case.</p><p>8.2.2<!-- --> <i><u>Timing</u></i>. Each Airdrop will be subject to any terms displayed in the Services and marked with an asterisk (*).</p><p>8.2.3<!-- --> <i><u>Limited Supply</u></i>. An offer to receive Virtual Currency in an Airdrop is only available to you while supplies last. Once the amount of Virtual Currency offered by Eyewallet in an Airdrop is exhausted, any party who has either been placed on a waitlist, or has completed certain additional steps, but not yet received notice of award of Virtual Currency in such Airdrop, shall no longer be eligible to receive Virtual Currency in that Airdrop. Eyewallet reserves the right, in our sole discretion, to modify or suspend any Airdrop requirements at any time without notice, including the amount previously advertised as available.</p><p>8.2.4<!-- --> <i><u>Eligibility</u></i>. You may not be eligible to receive Virtual Currency from an Airdrop in your jurisdiction. In the event that you have multiple Wallets with Eyewallet, you are only eligible to receive Virtual Currency from an Airdrop in one Wallet and for one User Account.</p><p>8.2.5<!-- --> <i><u>Notice of Award</u></i>. In the event you are selected to receive Virtual Currency in an Airdrop, you will be provided written notice of the pending delivery of such Virtual Currency. Eligibility may be limited as to time. We are not liable to you for failure to receive any notice associated with the Airdrop Program due to change in your contact information that was not updated by you prior to such time as the notice was delivered by us to you.</p><p>8.3 <i>Risk Disclosures Relating to Airdrop Program</i>.</p><p>8.3.1 You are solely responsible for researching and understanding the Virtual Currency network subject to the Airdrop. You may not rely on any of our representations concerning the foregoing.</p><p>8.3.2 We are not your legal or tax advisor and that you should consult your own attorney, financial advisor, tax advisor or accountant as to the legal, financial, tax, accounting, or other related implications prior to participating in an Airdrop. We make no guarantees whatsoever as to title, functionality or value of the Virtual Currency subject to the Airdrop.</p></div><div><h4>9. GENERAL RISK FACTORS</h4><p>9.1 You agree and understand that there are risks associated with utilizing Services involving Virtual Currencies including, but not limited to, the risk of failure of hardware, software and internet connections, the risk of malicious software introduction, and the risk that third parties may obtain unauthorized access to information stored within your Wallet, including, but not limited to your public and private keys. You agree and understand that Eyewallet will not be responsible for any communication failures, disruptions, errors, distortions or delays you may experience when using the Services, however caused.</p><p>9.2 You accept and acknowledge that there are risks associated with utilizing any virtual currency network, including, but not limited to, the risk of unknown vulnerabilities in or unanticipated changes to the network protocol. You acknowledge and accept that Eyewallet has no control over any cryptocurrency network and will not be responsible for any harm occurring as a result of such risks, including, but not limited to, the inability to reverse a transaction, and any losses in connection therewith due to erroneous or fraudulent actions.</p><p>9.3 The risk of loss in using Services involving Virtual Currencies may be substantial and losses may occur over a short period of time. In addition, price and liquidity are subject to significant fluctuations that may be unpredictable.</p><p>9.4 Virtual Currencies are not legal tender and are not backed by any sovereign government. In addition, the legislative and regulatory landscape around Virtual Currencies is constantly changing and may affect your ability to use, transfer, or exchange Virtual Currencies.</p></div><div><h4>10. GENERAL PROVISIONS</h4><p>10.1 <i>Intellectual Property.</i></p><p>10.1.1 Unless otherwise indicated by us, all intellectual property rights and any content provided in connection with our Services, are the property of Eyewallet or our licensors or suppliers and are protected by applicable intellectual property laws. We do not give any implied license for the use of the contents of the Services.</p><p>10.1.2 You accept and acknowledge that the material and content contained through our Services is made available for your personal, lawful, non-commercial use only and that you may only use such material and content for the purpose of using the Services.</p><p>10.1.3 You further acknowledge that any other use of content from the Services is strictly prohibited and you agree not to infringe or enable others to infringe our intellectual property rights. You agree to retain all copyrighted and other proprietary notices contained in the material provided via our Services on any copy you make of the material but failing to do so shall not prejudice Eyewallet’s intellectual property rights therein.</p><p>10.1.4 You may not sell or modify materials derived or created from our Services or reproduce, display, publicly perform, distribute or otherwise use the materials in any way for any public or commercial purpose. Your use of the materials on any other website or on a file-sharing or similar service for any purpose is strictly prohibited. You may not copy any material or content derived or created from our Services without our express, written permission.</p><p>10.1.5 Any rights not expressly granted herein to use the materials contained on or through our Services are reserved by Eyewallet in full.</p><p>10.2 <i>Accuracy of Information.</i></p><p>10.2.1 We will use reasonable efforts to verify the accuracy of any information displayed, supplied, passing through or originating from the Services, but such information may not always be accurate or current. Accordingly, you should independently verify all information before relying on it, and any decisions or actions taken based upon such information are your sole responsibility.</p><p>10.2.2 You agree and understand that we make no representation or warranty of any kind, express or implied, statutory or otherwise, regarding the contents of the Services, information and functions made accessible through the Services, any hyperlinks to third party websites, or the security associated with the transmission of information through the Services, or any website linked to the Services.</p><p>10.3 <i>Third Party Services and Content.</i></p><p>10.3.1 In using the Services, you may view content or services provided by third parties, including links to web pages and services of such parties (“Third Party Content”). We do not control, endorse or adopt any Third Party Content and have no responsibility for Third Party Content including, without limitation, material that may be misleading, incomplete, erroneous, offensive, indecent or otherwise objectionable in your jurisdiction. In addition, your dealings or correspondence with such third parties are solely between you and the third party.</p><p>10.3.2 You agree and understand that we are not responsible or liable for any loss or damage of any sort incurred as a result of any such dealings and your use of Third Party Content is at your own risk.</p><p>10.4 <i>Cooperation with Law Enforcement</i>. Eyewallet may, from time-to-time, respond to requests from law enforcement, regulators and policymakers by producing certain information about or relating to your use of the Services.</p><p>10.5 <i>Recordkeeping</i>. You agree and understand that, depending on the Services used by you, Eyewallet reserves the right, in our sole discretion, to create and maintain certain records of your activity and communications relating to your User Account.</p></div><div><h4>11. FEEDBACK, COMPLAINTS, AND DISPUTE RESOLUTION</h4><p><i>11.1 Feedback</i>.</p><p>11.1.1 Eyewallet strives to improve its Services to address feedback. If you have ideas or suggestions regarding improvements or additions to the Services, we would like to hear them; however, any submission will be subject to this User Agreement.</p><p>11.1.2 Under no circumstances will disclosure of any idea or feedback, or any related material to Eyewallet be subject to any obligation of confidentiality or expectation of compensation.</p><p>11.1.3 By submitting an idea or feedback or any related material that would be subject to intellectual property rights (the “Work”) to Eyewallet, you grant to Eyewallet, with respect to the Work submitted, a non-exclusive, perpetual, global, royalty-free license to use all of the content of such ideas and feedback, for any purpose whatsoever.</p><p>11.1.4 Furthermore, by submitting any such idea or feedback, you are waiving any moral rights to the fullest extent permitted under law that you may have in the Work and are representing and warranting to Eyewallet that the Work originated with you, no one else has any rights in the Work, and that Eyewallet is free of any royalty to implement the Work and to use the related material if so desired, as provided or modified by Eyewallet, without obtaining permission or license from any third party.</p><p>11.1.5 You further accept that Eyewallet may sub-license in any way all Work and material you have submitted to Eyewallet.</p><p>11.2 <i>Technical Support and Dispute Resolution</i></p><p>11.2.1<!-- --> <i><u>Technical Support</u></i>. We will use commercially-reasonable efforts to supply email-based technical support services, but cannot guarantee immediate responses, especially during times of high volume.</p><p>11.2.2 <u>Disputes</u>. You agree and understand that any dispute arising under this User Agreement shall be settled in binding arbitration, in accordance with the American Arbitration Association’s rules.</p><p>11.2.2.1 <i>Arbitration</i>. The arbitration will be conducted by a single, neutral arbitrator and shall take place in the county in which you reside, or another mutually agreeable location, in the English language. The arbitrator may award any relief that a court of competent jurisdiction could award, including attorneys' fees when authorized by law, and the arbitration decision may be enforced in any court. You agree that the arbitrator shall have the authority to order relief, and you agree to abide by all decisions and awards rendered in such a proceeding, which shall be final and conclusive. At your request, hearings may be conducted in person or by telephone and the arbitrator may provide for submitting and determining motions on briefs, without oral hearings. The prevailing party in any action or proceeding to enforce this agreement shall be entitled to reasonable costs and attorneys' fees.</p><p>11.2.2.2 If the arbitrator(s) or administrator imposes filing fees or other administrative costs on you, we will reimburse you, upon request, to the extent such fees or costs would exceed those that you would otherwise have to pay if you were proceeding instead in a court. If a court decides that any provision of this section concerning Arbitration is invalid or unenforceable, that provision shall be severed and resolved in accordance with New Zealand law exclusively and the other parts of this section concerning Arbitration shall still apply. In no case shall the remainder of this User Agreement be affected. If the invalidity or unenforceability of a provision causes a dispute to proceed in a court instead of arbitration, the Parties agree that such court must be located in New Zealand, applying New Zealand law.</p><p>11.2.3<!-- --> <i><u>No Trial by Jury</u></i>. You agree and understand that by entering into this User Agreement, you expressly waive your right to a trial by jury and right to participate in a class action lawsuit.</p></div><div><h4>12. REPRESENTATIONS AND WARRANTIES, INDEMNIFICATION, AND LIMITATION OF LIABILITY</h4><p>12.1 <i>Acceptable Use of Eyewallet Services</i>. When accessing or using the Services, you agree that you are solely responsible for your conduct while accessing and using our Services. Without limiting the generality of the foregoing, you agree that you will not:</p><ul><li>(a) Use the Services in any manner that could interfere with, disrupt, negatively affect or inhibit other users from fully enjoying the Services, or that could damage, disable, overburden or impair the functioning of our Services in any manner;</li><li>(b) Use the Services to pay for, support or otherwise engage in any illegal activities, including, but not limited to illegal gambling, fraud, money laundering, or terrorist activities;</li><li>(c) Use any robot, spider, crawler, scraper or other automated means or interface not provided by us to access our Services or to extract data;</li><li>(d) Use or attempt to use another user’s Wallet or credentials without authorization;</li><li>(e) Attempt to circumvent any content filtering techniques we employ, or attempt to access any service or area of our Services that you are not authorized to access;</li><li>(f) Introduce to the Services any virus, Trojan, worms,logic bombs or other harmful material;</li><li>(g) Develop any third-party applications that interact with our Services without our prior written consent;</li><li>(h) Provide false, inaccurate, or misleading information; or</li><li>(i) Encourage or induce any other person to engage in any of the activities prohibited under this Section.</li></ul><p>12.2 <i>Disclaimer of Warranties</i>.</p><p>12.2.1 THE Eyewallet SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT ANY REPRESENTATION OR WARRANTY, WHETHER EXPRESS, IMPLIED OR STATUTORY. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, WE SPECIFICALLY DISCLAIM ANY IMPLIED WARRANTIES OF TITLE, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND/OR NON-INFRINGEMENT. WE DO NOT MAKE ANY REPRESENTATIONS OR WARRANTIES THAT ACCESS TO THE SERVICES WILL BE CONTINUOUS, UNINTERRUPTED, TIMELY, OR ERROR-FREE.</p><p>12.2.2 We make no warranty that Services are free of viruses or errors, that its content is accurate, that it will be uninterrupted, or that defects will be corrected. We will not be responsible or liable to you for any loss of any kind, from action taken, or taken in reliance on material, or information, contained on or through our Services.</p><p>12.3 <i>Limitation of Liability</i>.</p><p>12.3.1 IN NO EVENT SHALL Eyewallet, ITS AFFILIATES AND SERVICE PROVIDERS, OR ANY OF THEIR RESPECTIVE OFFICERS, DIRECTORS, AGENTS, EMPLOYEES OR REPRESENTATIVES, BE LIABLE FOR: (A) ANY AMOUNT GREATER THAN THE VALUE OF THE VIRTUAL CURRENCY ACTUALLY DELIVERED TO US BY YOU OR BY YOU TO US IN CONNECTION WITH A SUPPORTED CONVERSION SERVICE TRANSACTION COMPLETED ON ITS DISPLAYED TERMS OVER THE LAST SIX MONTHS, VALUED AT THE TIME OF THE TRANSACTION; OR (B) FOR ANY LOST PROFITS OR ANY SPECIAL, INCIDENTAL, INDIRECT, INTANGIBLE, OR CONSEQUENTIAL DAMAGES, WHETHER BASED IN CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR OTHERWISE, ARISING OUT OF OR IN CONNECTION WITH AUTHORIZED OR UNAUTHORIZED USE OF THE SERVICES, OR THIS AGREEMENT, EVEN IF AN AUTHORIZED REPRESENTATIVE OF Eyewallet HAS BEEN ADVISED OF, KNEW OF, OR SHOULD HAVE KNOWN OF THE POSSIBILITY OF SUCH DAMAGES. FOR EXAMPLE (AND WITHOUT LIMITING THE SCOPE OF THE PRECEDING SENTENCE), YOU MAY NOT RECOVER FOR LOST PROFITS, LOST BUSINESS OPPORTUNITIES, OR OTHER TYPES OF SPECIAL, INCIDENTAL, INDIRECT, INTANGIBLE, OR CONSEQUENTIAL DAMAGES. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION MAY NOT APPLY TO YOU.</p><p>12.3.2 UNDER NO CIRCUMSTANCES WILL WE BE REQUIRED TO DELIVER TO YOU ANY VIRTUAL CURRENCY AS DAMAGES, SPECIFIC PERFORMANCE OR ANY OTHER REMEDY. IF YOU WOULD BASE YOUR CALCULATIONS OF DAMAGES IN ANY WAY ON THE VALUE OF VIRTUAL CURRENCY, YOU AND WE AGREE THAT THE CALCULATION WILL BE BASED ON THE LOWEST VALUE OF THE VIRTUAL CURRENCY DURING THE PERIOD BETWEEN THE ACCRUAL OF THE CLAIM AND THE AWARD OF DAMAGES.</p><p>12.3.3 We will not be responsible or liable to you for any loss and take no responsibility for damages or claims arising in whole or in part, directly or indirectly from: (a) user error such as forgotten passwords, incorrectly constructed transactions, or mistyped Virtual Currency addresses; (b) server failure or data loss; (c) corrupted or otherwise non-performing Wallets or Wallet files; (d) unauthorized access to applications; (e) any unauthorized activities, including without limitation the use of hacking, viruses, phishing, brute forcing or other means of attack against the Services.</p><p><i>12.4 Indemnification</i>.</p><p>12.4.1 You agree to indemnify and hold harmless Eyewallet, its affiliates, subsidiaries, directors, managers, members, officers, and employees from any and all claims, demands, actions, damages, losses, costs or expenses, including without limitation, reasonable legal fees, arising out of or relating to your or any other person’s use of your credentials or User Account in connection with: (a) use of the Services; (b) breach of this User Agreement or any other policy; (c) feedback or submissions you provide; or (d) violation of any rights of any other person or entity; provided however, that you shall not indemnify Eyewallet for claims or losses arising out of Eyewallet’s gross negligence or willful misconduct. This indemnity shall apply to your successors and assigns and will survive any termination or cancellation of this User Agreement.</p><p>12.4.2 Any and all of our indemnities, warranties, and limitations of liability (whether express or implied) are hereby excluded to the fullest extent permitted under law except as set forth herein. We will not be liable, in contract, or tort (including, without limitation, negligence), other than where we have been fraudulent or made knowing misrepresentations. Nothing in this User Agreement excludes or limits liability which may not be limited or excluded under law.</p></div><div><h4>13. MISCELLANEOUS</h4><p>13.1 <i>Force Majeure</i>. If by reason in whole or in part of any Force Majeure Event, either you or Eyewallet is delayed or prevented from complying with this User Agreement, then such delay or non-compliance shall not be deemed to be a breach of this User Agreement and no loss or damage shall be claimed by you or Eyewallet by reason thereof. “Force Majeure Event” means any event beyond Eyewallet’s reasonable control, including, but not limited to, flood, extraordinary weather conditions, earthquake, or other act of God, fire, war, insurrection, riot, labor dispute, accident, action of government, communications, power failure, or equipment or software malfunction including network splits or “forks” or unexpected changes in a computer network upon which the Services rely.</p><p>13.2 <i>Taxes</i>. It is your responsibility to determine what, if any, taxes apply due to your use of Eyewallet Services, and it is your responsibility to report and remit the correct tax to the appropriate tax authority. You agree that Eyewallet is not responsible for determining whether taxes apply to your Virtual Currency transactions or for collecting, reporting, withholding or remitting any taxes arising from any virtual currency transactions.</p><p>13.3 <i>Governing Law</i>. This User Agreement shall be governed by and construed in accordance with New Zealand Law, without regard to principles of conflict of laws. Nothing in this User Agreement shall be deemed to affect your statutory rights under New Zealand law.</p><p>13.4 <i>Severability</i>. If any part of this User Agreement is held to be invalid or unenforceable in whole or in part, the validity or enforceability of the other sections of this User Agreement shall not be affected. Any headings contained in this User Agreement are for informational purposes only and are not enforceable provisions of this User Agreement.</p><p>13.5 <i>Assignment</i>. This User Agreement shall be binding on your successors, heirs, personal representatives, and assigns. You may not assign or transfer any of your rights or obligations under this User Agreement without prior written consent of Eyewallet, which may be withheld in Eyewallet’s sole discretion. We may assign rights or delegate duties under this User Agreement to an affiliate or subsidiary in our sole discretion.</p><p>13.6 <i>Relationship of the Parties</i>. Nothing in this User Agreement is intended to, nor shall create any partnership, joint venture, agency, consultancy or trusteeship. You and Eyewallet are independent contractors for purposes of this User Agreement.</p><p>13.7 <i>Entire Agreement</i>. This User Agreement constitutes the entire agreement among the Parties with respect to the subject matter described herein and shall supersede all prior agreements and understandings, written or oral, among the Parties. Subsequent discussions or negotiations between you and Eyewallet will only become part of this User Agreement by way of a written amendment specifically referencing the date and name of this User Agreement.</p><p>13.8 <i>Contact Information</i>. For any purpose other than technical support requests, you may contact us by registered post or courier: Eyewallet New Zealand S.A.; 4eme etage a L-2340; New Zealand 1, rue Philippe II. For technical support requests only, you may submit a request via our Support tool at:<!-- --> <a href="https://support.Eyewallet.com" target="_blank" rel="nofollow noopener noreferrer">https://support.Eyewallet.com</a>. Email requests may also be sent to<!-- --> <a href="mailto:legal@Eyewallet.com">legal@Eyewallet.com</a>.</p></div></div>
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

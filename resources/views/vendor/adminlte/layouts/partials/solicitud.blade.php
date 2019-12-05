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
                <!-- <span class="inlineb"><img src="/assets/images/en.png" alt=""><p class="text-white">English</p></span> -->

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>


<section id="noticias" class="back-TARJETA" style="margin-top: 5em;">
    <div class="">

        <div class="container m-bottom-100">
            <div class="row row-news-al">
                <form method="POST" enctype="multipart/form-data" charset="UTF-8" action="{{route('registrar')}}">
                    {{ csrf_field() }}
                    <h1 style="text-align: left; padding-top: 1em">
                        Solicitud de tarjeta.
                    </h1>
                    <div>
                        <!-- Body -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
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

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label style="visibility: hidden;">Cla</label>
                                <select disabled id="comboTarjeta" class="form-control3">
                                    <option selected value="1">Classic</option>
                                    <option value="2">Black</option>
                                    <option value="3">Gold</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="countryId">País</label>
                                <select name="pais"
                                        class="form-control countries order-alpha presel-byip"
                                        id="countryId" required>
                                    <option value="">País</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="stateId">Estado</label>
                                <select name="stateId" class="form-control states order-alpha" id="stateId" required>
                                    <option value="">Estado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="cityId">Ciudad</label>
                                <select name="ciudad" class="form-control cities order-alpha" id="cityId" required>
                                    <option value="">Ciudad</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="inputName">Nombre y apellido</label>
                                <input type="text" class="form-control" id="nombres"
                                       name="nombres"
                                       placeholder="Ingrese nombre y apellido" required>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" class="form-control" id="email"
                                       name="email"
                                       placeholder="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="inputAddress">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                       placeholder="Ingrese dirección" required>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="inputId">ID</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion"
                                       placeholder="ID" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="inputTel">Teléfono</label>
                                <input type="text" class="form-control" id="celular"
                                       name="celular" placeholder="Teléfono" required>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="inputTel">Código Postal</label>
                                <input type="text" class="form-control" id="postal" name="postal"
                                       placeholder="Código Postal" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="comboCiudad" class="form-group form-upload-label">Tipo
                                    identificacion</label>
                                <select id="tipo" name="tipo" class="form-control22" required>
                                    <option selected value="">Seleccione</option>
                                    <option value="1">ID</option>
                                    <option value="2">Pasaporte</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="url_domicilio" class="form-group form-upload-label2"> Ingrese documento
                                de Domicilio(**)
                                <div class="form-control222">
                                    <input type="file" name="url_domicilio" id="url_domicilio"
                                           placeholder="Extratos o Facturas de Servicio" required/>
                                </div>
                            </label>
                        </div>

                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12" id="div2">
                            <div class="form-group">
                                <label for="url_identidad1" class="form-group form-upload-label">Pasaporte
                                    <div class="form-controPasaporte">
                                        <input type="file" name="url_identidad1" id="url_identidad1"/>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="div1">
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="url_identidad3" class="form-group form-upload-label">Frontal
                                <div class="form-controFrontal">
                                    <input type="file" name="url_identidad3" id="url_identidad3"/>
                                </div>
                            </label>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label for="url_identidad2" class="form-group form-upload-label">Posterior
                                <div class="form-controPosterior">
                                    <input type="file" name="url_identidad2" id="url_identidad2"/>
                                </div>
                            </label>
                        </div>
                    </div>


                    <!-- pasaporte -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>(*): Subir una Selfie con tu Documento, en buena calidad. <br>
                                (**): Extractos Bancarios o Facturas de Servicios. <br> Solo aceptamos
                                documentos en los
                                siguientes formatos: PNG, JPG, JPEG, PDF. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="url_foto" class="form-group form-upload-label"> Ingrese Selfie (*)
                            <div class="form-control222end">
                                <input type="file" name="url_foto" id="url_foto"
                                       placeholder="Subir una selfie con tu Documento" required/>
                            </div>
                        </label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="pregunta" class="form-group form-upload-label">¿Por donde te
                                enteraste?</label>
                            <select id="pregunta" name="pregunta" class="form-control22" required>
                                <option selected value="">Seleccione</option>
                                <option value="Buscadores">Buscadores</option>
                                <option value="Redes sociales">Redes sociales</option>
                                <option value="Wealth boss">Wealth boss</option>
                                <option value="Publicidad">Publicidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <input type="submit" name="PROCESAR PAGO" class="btn btn-lg btn-success text-center">
                    </div>
                </form>
            </div>
        </div>

    </div>
</section><!-- End off Brand section -->


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

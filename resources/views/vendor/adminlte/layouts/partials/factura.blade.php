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
                    <div style="text-align: left; padding-top: 1em" class="row">
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                            <h1>
                                Factura.
                            </h1>
                        </div>
                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                            <div style="margin-top: 1em">
                                <div style="border: 1px solid #00be96; border-radius: 8px; width: 20%">
                                    <p style="font-weight: bold; margin: 2%; margin-left: 6%">
                                        PAGADO - SIN VERIFICAR
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>eyewalletsuport@eyewallet.com</p>
                        </div>
                    </div>
                    <div style="margin-top: 4em" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="texLeft">
                                    <label>Cantidad a pagar</label>
                                </div>
                                <input type="text" class="form-control texLeft txtResult" id="" name="pagar" disabled
                                       placeholder="$80.00">
                            </div>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textCenter">
                                    <label>Título</label>
                                </div>
                                <input type="text" class="form-control textCenter txtResult" id="" name="title" disabled
                                       placeholder="Pago con tarjeta de crédito">
                            </div>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textRight maRight">
                                    <label>ID de la factura</label>
                                </div>
                                <input type="text" class="form-control textRight txtResult" id="" name="facturId"
                                       disabled
                                       placeholder="177">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="texLeft">
                                    <label>Fecha de vencimiento</label>
                                </div>
                                <input type="text" class="form-control texLeft txtResult" id="" name="fec" disabled
                                       placeholder="24 de febrero, 2020">
                            </div>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textCenter">
                                    <label>Facturado a</label>
                                </div>
                                <input type="text" class="form-control textCenter txtResult" id="" name="namId" disabled
                                       placeholder="Nombre Usuario">
                            </div>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textRight maRight">
                                    <label>Fecha de facturación</label>
                                </div>
                                <input type="text" class="form-control textRight txtResult" id="" name="fecFacId"
                                       disabled
                                       placeholder="24 de febrero, 2020">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="texLeft">
                                    <label>Descripción</label>
                                </div>
                                <input type="text" class="form-control texLeft" id="" name="tjetaId" disabled
                                       placeholder="Tarjeta de crédito Eyewallet - Classic">
                            </div>
                        </div>
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textCenter">
                                    <label>Cantidad</label>
                                </div>
                                <input type="text" class="form-control textCenter txtResult" id="" name="cantId"
                                       disabled
                                       placeholder="1">
                            </div>
                        </div>
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textCenter">
                                    <label>Precio unitario</label>
                                </div>
                                <input type="text" class="form-control textCenter txtResult" id="" name="precId"
                                       disabled
                                       placeholder="1">
                            </div>
                        </div>
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="textRight maRight">
                                    <label>Cantidad</label>
                                </div>
                                <input type="text" class="form-control textRight txtResult" id="" name="cantiId"
                                       disabled
                                       placeholder="$80.00">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                &nbsp;
                            </div>
                        </div>
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                &nbsp;
                            </div>
                        </div>
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group textRight">
                                <label class="txtTotal">Total a pagar</label>
                            </div>
                        </div>
                        <div class="form-row col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control textRight txtResult" id="" name="cantiId"
                                       disabled
                                       placeholder="$80.00">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-row col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <div class="texLeft">
                                    <label>Notas:</label>
                                </div>
                                <textarea style="max-width: 100%; max-height: 200px; min-width: 100%; min-height: 50px"
                                          type="textarea" class="form-control" id="" name="cantiId"
                                          placeholder="...">
                                </textarea>
                            </div>
                        </div>
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

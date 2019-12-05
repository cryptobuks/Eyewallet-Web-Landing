"use strict";
jQuery(document).ready(function ($) {

//for Preloader

    $(window).load(function () {
        $("#loading").fadeOut(500);
        actualizarDatos();
        initSmoothScrolling('.slide-slow','smoothscroll');
        aleatorios(30);
        crearGrafico();
        actualizarHistorial();
    });

    // var API_URL='https://744b6efb.ngrok.io';
    var API_URL='https://gmmclub.com:3001';

    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-menu').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 70)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();

// magnificPopup

    $('.popup-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.video-link').magnificPopup({
        type: 'iframe'
    });



// slick slider active Home Page Tow
//    $(".hello_slid").slick({
//        dots: true,
//        infinite: false,
//        slidesToShow: 1,
//        slidesToScroll: 1,
//        arrows: true,
//        prevArrow: "<i class='icon icon-chevron-left nextprevleft'></i>",
//        nextArrow: "<i class='icon icon-chevron-right nextprevright'></i>",
//        autoplay: true,
//        autoplaySpeed: 2000
//    });
    /*---------------------------------------------*
     * Actualizar precios
     ---------------------------------------------*/
    function actualizarDatos(){
        // console.log('ACTUALIZANDO ÚLTIMOS VALORES')
        $.post(API_URL+"/general/obtener-precios",
        function(data,status){
            var descripciones = JSON.parse(data.descripcion);
                
            // console.log("ACTUALES:", descripciones);
            // Fix en for para que todos los elementos nuevos recreados por la animación sean cambiados
            for(var i = 0; i < document.getElementsByClassName("XRP-val").length; i++){
                document.getElementsByClassName("XRP-val")[i].innerText = descripciones.XRP.USD;
            }
            for(var i = 0; i < document.getElementsByClassName("ETH-val").length; i++){
                document.getElementsByClassName("ETH-val")[i].innerText = descripciones.ETH.USD;
            }
            for(var i = 0; i < document.getElementsByClassName("XMR​-val").length; i++){
                document.getElementsByClassName("XMR​-val")[i].innerText = descripciones.XMR.USD;
            }
            for(var i = 0; i < document.getElementsByClassName("ZEC-val").length; i++){
                document.getElementsByClassName("ZEC-val")[i].innerText = descripciones.ZEC.USD;
            }
            for(var i = 0; i < document.getElementsByClassName("XEM-val").length; i++){
                document.getElementsByClassName("XEM-val")[0].innerText = descripciones.XEM.USD;
            }
            for(var i = 0; i < document.getElementsByClassName("BTC-val").length; i++){
                document.getElementsByClassName("BTC-val")[0].innerText = descripciones.BTC.USD;
            }
            // console.log('Cantidad de', 'XRP', document.getElementsByClassName("XRP-val").length);
            // console.log('Cantidad de', 'ETH', document.getElementsByClassName("ETH-val").length);
            // console.log('Cantidad de', 'XMR​', document.getElementsByClassName("XMR​-val").length);
            // console.log('Cantidad de', 'ZEC', document.getElementsByClassName("ZEC-val").length);
            // console.log('Cantidad de', 'XEM', document.getElementsByClassName("XEM-val").length);
            // console.log('Cantidad de', 'BTC', document.getElementsByClassName("BTC-val").length);
        });
    }

    /*---------------------------------------------*
     * Historial
     ---------------------------------------------*/
     var valores = new Array(50);
     var fechas = new Array(50);
     var activeBtn = 0;
     var cambio = new Array(6);
     var vi=new Array(6);
     var vf=new Array(6);
     function actualizarHistorial(){
        // console.log('ACTUALIZANDO HISTORIAL')
        $.get(API_URL+"/general/historial",
        function(data,status){
            data.forEach(element => {
                element.descripcion = JSON.parse(element.descripcion);
            });
            var registro = data;
            
            //for que recorre y asigna
            var XRP = Array(registro.length);
            var ETH = Array(registro.length);
            var XMR = Array(registro.length);
            var ZEC = Array(registro.length);
            var XEM = Array(registro.length);
            var BTC = Array(registro.length);
            var fechaPos = Array(registro.length);

            // console.log('HISTORIAL:')
            for(var i = 0; i < registro.length; i++){
                XRP[i] = registro[i].descripcion.XRP.USD;
                ETH[i] = registro[i].descripcion.ETH.USD;
                XMR[i] = registro[i].descripcion.XMR.USD;
                ZEC[i] = registro[i].descripcion.ZEC.USD;
                XEM[i] = registro[i].descripcion.XEM.USD;
                BTC[i] = registro[i].descripcion.BTC.USD;
                fechaPos[i] = moment(registro[i].createdAt).format('DD/MM/YY hh:mm'); 

                // console.log('\nREGISTRO #', i,':' ,fechaPos[i]);
                // console.log('XRP:  \t', XRP[i]);
                // console.log('ETH:  \t', ETH[i]);
                // console.log('XMR:  \t', XMR[i]);
                // console.log('ZEC:  \t', ZEC[i]);
                // console.log('XEM:  \t', XEM[i]);
                // console.log('BTC:  \t', BTC[i]);
            }
            vi[0]= XRP[2];
            vf[0]= XRP[49];
            vi[1]= ETH[2];
            vf[1]= ETH[49];
            vi[2]= XMR[2];
            vf[2]= XMR[49];
            vi[3]= ZEC[2];
            vf[3]= ZEC[49];
            vi[4]= XEM[2];
            vf[4]= XEM[49];
            vi[5]= BTC[2];
            vf[5]= BTC[49];
            for (i=0; i<=5; i++) {
                cambio[i]= vf[i] - vi[i];
                cambio[i]= Math.round(((cambio[i]/vi[i])*100) * 100) / 100;
            }

            // console.log('CAMBIO DEL XRP: ', cambio[0]);
            // console.log('CAMBIO DEL ETH: ', cambio[1]); 
            // console.log('CAMBIO DEL XMR: ', cambio[2]); 
            // console.log('CAMBIO DEL ZEC: ', cambio[3]); 
            // console.log('CAMBIO DEL XEM: ', cambio[4]); 
            // console.log('CAMBIO DEL BTC: ', cambio[5]); 

            for(var i = 0; i < document.getElementsByClassName("XRP-cam").length; i++){
                document.getElementsByClassName("XRP-cam")[i].innerText = cambio[0]+'%';
            }
            for(var i = 0; i < document.getElementsByClassName("ETH-cam").length; i++){
                document.getElementsByClassName("ETH-cam")[i].innerText = cambio[1]+'%';
            }
            for(var i = 0; i < document.getElementsByClassName("MONERO-cam").length; i++){
                document.getElementsByClassName("MONERO-cam")[i].innerText = cambio[2]+'%';
            }
            for(var i = 0; i < document.getElementsByClassName("ZEC-cam").length; i++){
                document.getElementsByClassName("ZEC-cam")[i].innerText = cambio[3]+'%';
            }
            for(var i = 0; i < document.getElementsByClassName("XEM-cam").length; i++){
                document.getElementsByClassName("XEM-cam")[i].innerText = cambio[4]+'%';
            }
            for(var i = 0; i < document.getElementsByClassName("BTC-cam").length; i++){
                document.getElementsByClassName("BTC-cam")[i].innerText = cambio[5]+'%';
            }

            valores = XRP;
            fechas = fechaPos; 
            actualizarGrafico(); //default para grafico
            // Agregar un event listener a cada botón según el valores correspondiente, que 
            // le haga un update al chart según éstos valoreses, que se actualizarán cada
            // X Tiempo
            
            //MONEDAS
            for(var i = 0; i < document.getElementsByClassName("XRP").length; i++){
                document.getElementsByClassName("XRP")[i].addEventListener('mouseover', function() {
                    chart.config.data.datasets[0].data= XRP;
                    chart.config.data.labels= fechaPos;
                    chart.update();
                });
            }
            for(var i = 0; i < document.getElementsByClassName("ETH").length; i++){
                document.getElementsByClassName("ETH")[i].addEventListener('mouseover', function() {
                    chart.config.data.datasets[0].data= ETH;
                    chart.config.data.labels= fechaPos;
                    chart.update();
                });
            }
            for(var i = 0; i < document.getElementsByClassName("MONERO").length; i++){
                document.getElementsByClassName("MONERO")[i].addEventListener('mouseover', function() {
                    chart.config.data.datasets[0].data= XMR;
                    chart.config.data.labels= fechaPos;
                    chart.update();
                });
            }
            for(var i = 0; i < document.getElementsByClassName("ZEC").length; i++){
                document.getElementsByClassName("ZEC")[i].addEventListener('mouseover', function() {
                    chart.config.data.datasets[0].data= ZEC;
                    chart.config.data.labels= fechaPos;
                    chart.update();
                });
            }
            for(var i = 0; i < document.getElementsByClassName("XEM").length; i++){
                document.getElementsByClassName("XEM")[i].addEventListener('mouseover', function() {
                    chart.config.data.datasets[0].data= XEM;
                    chart.config.data.labels= fechaPos;
                    chart.update();
                });
            }
            for(var i = 0; i < document.getElementsByClassName("BTC").length; i++){
                document.getElementsByClassName("BTC")[i].addEventListener('mouseover', function() {
                    chart.config.data.datasets[0].data= BTC;
                    chart.config.data.labels= fechaPos;
                    chart.update();
                });
            }
            //
            //CARDS
            for(var i = 0; i < document.getElementsByClassName("info_card").length; i++){
                document.getElementsByClassName("info_card")[i].addEventListener('mouseover', function() {
                   
                        chart.config.options.scales.xAxes[0] = {
                            display: true
                        };
                        chart.config.options.scales.yAxes[0] = {
                            display: true
                        };
                        chart.update();
                        document.getElementById("moo").style.opacity=0.1;
                        //document.getElementById("chart1").style.bottom='15%';
                });
                document.getElementsByClassName("info_card")[i].addEventListener('click', function() {
                    //desplazar elementos
                    if (activeBtn>0) {
                        activeBtn=0;
                        document.getElementById("moo").style.animation='fadeInDownBig 1s forwards';
                        document.getElementById("chart1").style.bottom='0';                        
                        chart.config.options.scales.xAxes[0] = {
                            display: false
                        };
                        chart.config.options.scales.yAxes[0] = {
                            display: false
                        };
                        chart.update();
                    } 
                    else 
                    {
                        activeBtn=1;
                        document.getElementById("moo").style.animation='fadeOutUpBig 1s forwards';
                        document.getElementById("chart1").style.bottom='15%';
                        chart.config.options.scales.xAxes[0] = {
                            display: true
                        };
                        chart.config.options.scales.yAxes[0] = {
                            display: true
                        };
                        chart.update();
                    }
                    
                        // -webkit-filter: grayscale(100%);
                        // -moz-filter: grayscale(100%);
                        // -ms-filter: grayscale(100%);
                        // -o-filter: grayscale(100%);
                        // filter: grayscale(100%);
                });
            }   
            for(var i = 0; i < document.getElementsByClassName("info_card").length; i++){
                document.getElementsByClassName("info_card")[i].addEventListener('mouseout', function() {
                    
                    if (activeBtn<1) {
                        chart.config.options.scales.xAxes[0] = {
                            display: false
                        };
                        chart.config.options.scales.yAxes[0] = {
                            display: false
                        };
                        chart.update();
                        document.getElementById("moo").style.opacity=1;
                        //document.getElementById("chart1").style.bottom='0';
                    }
                });
            }          
        });
    }

    /*---------------------------------------------*
     * Animación de precios
     ---------------------------------------------*/

    function initSmoothScrolling(container,animation){
    /*
       * @param {String} container Class or ID of the animation container
       * @param {String} animation Name of the animation, e.g. smoothscroll
       */
       var sliderWidth = 0;	
       var animationWidth = 0;	
       var sliderHeight = $('>div>div:first-of-type',container).outerHeight(true);
   
       $('>div>div', container).each(function(){				
           animationWidth += $(this).outerWidth(true);		
       });
       
       // detect number of visible slides
       var slidesVisible = $(container).width() / $('>div>div:first-of-type',container).outerWidth(true);	
       slidesVisible = Math.ceil(slidesVisible);
   
     // count slides to determine animation speed
       var slidesNumber = $('>div>div', container).length;
       var speed = slidesNumber*5;
       
   // append the tail	
       $('>div>div',container).slice(0,slidesVisible).clone().appendTo($('>div',container));	
   
       // Detect the slider width with appended tail
       $('>div>div', container).each(function(){
           sliderWidth += $(this).outerWidth(true) + $('>div>div:first-of-type',container).outerWidth(true); // pulir èste fix
       });
   
       // set slider dimensions
       $('>div',container).css({'width':sliderWidth,'height':sliderHeight});
       
   // Insert styles to html
       $("<style type='text/css'>@keyframes "+animation+" { 0% { margin-left: 0px; } 100% { margin-left: -"+animationWidth+"px; } } "+$(".animation").selector+" { -webkit-animation: "+animation+" "+speed+"s linear infinite; -moz-animation: "+animation+" "+speed+"s linear infinite; -ms-animation: "+animation+" "+speed+"s linear infinite; -o-animation: "+animation+" "+speed+"s linear infinite; animation: "+animation+" "+speed+"s linear infinite; }"+$(".animation").selector+":hover{ -webkit-animation-play-state: paused; -moz-animation-play-state: paused; -o-animation-play-state: paused; animation-play-state: paused;}</style>").appendTo("head");	
   
       // restart the animation (e.g. for safari & ie)	
       var cl = $(container).attr("class");
       $(container).removeClass(cl).animate({'nothing':null}, 1, function () {
           $(this).addClass(cl);
       });
   }


//---------------------------------------------
// Gráficos
//---------------------------------------------

    //asignar valoreses aleatorios temporales
    var dateFormat = 'MMMM DD YYYY';
    moment.locale('es');
    var date = moment('April 01 2017', dateFormat);
    // console.log('LOCALE:', moment.locale());
    //
     function randomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }

    function aleatorios(base) {     

        for (var i=0; i<50; i++) {
            var open = randomNumber(base * 0.95, base * 1.05).toFixed(2);
            var close = randomNumber(open * 0.95, open * 1.05).toFixed(2);
            valores[i] = close;
        }

        fechas = [ '2019-05-25', '2019-05-24', '2019-05-23', '2019-05-22', '2019-05-21', '2019-05-20', '2019-05-19', '2019-05-18', '2019-05-17', '2019-05-16', '2019-05-15', '2019-05-14', '2019-05-13', '2019-05-12', '2019-05-11', '2019-05-10', '2019-05-09', '2019-05-08', '2019-05-07', '2019-05-06', '2019-05-05', '2019-05-04', '2019-05-03', '2019-05-02', '2019-05-01','2019-06-25', '2019-06-24', '2019-06-23', '2019-06-22', '2019-06-21', '2019-06-20', '2019-06-19', '2019-06-18', '2019-06-17', '2019-06-16', '2019-06-15', '2019-06-14', '2019-06-13', '2019-06-12', '2019-06-11', '2019-06-10', '2019-06-09', '2019-06-08', '2019-06-07', '2019-06-06', '2019-06-05', '2019-06-04', '2019-06-03', '2019-06-02', '2019-06-01']
    }

    function actualizarGrafico() {
        chart.config.data.datasets[0].data= valores;
        chart.config.data.labels= fechas;
        // console.log('CHART ACTUALIZADO')
        chart.update();
    }
        
    var chart = null;
    function crearGrafico() {       
        
        var ctx = document.getElementById('chart1').getContext('2d');
        var grd = ctx.createLinearGradient(700 / 2, 0, 700 / 2, 700);
        grd.addColorStop(0, 'rgba(108, 207, 236, 1)');
        grd.addColorStop(1, 'rgba(48, 60, 141, 0)');

        Chart.defaults.global.defaultFontColor = '#FFFFFF';

        var cfg = {
            data: {
                labels: fechas, //fecha
                datasets: [{
                    label: 'Valor',
                    backgroundColor: grd,
                    borderColor: '#46CFEC',
                    data: valores,  //valor
                    type: 'line',
                    pointRadius: 0,
                    fill: true,
                    lineTension: 0.4,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false, //TRUE PARA VER LEYENDA
                    },
                ],
                    yAxes: [{
                        display: false, //TRUE PARA VER LEYENDA
                        ticks: {
                            reverse: false,
                        },
                        scaleLabel: {
                            labelString: 'Precio de cierre ($)',  
                            fontColor: '#000000',                          
                        }
                    }]
                },
                tooltips: {
                    intersect: false,
                    mode: 'index',
                }
            }
        };

        chart = new Chart(ctx, cfg);
        
    };
//---------------------------------------------
// Scroll Up 
//---------------------------------------------

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });





//Team Skillbar active js

    jQuery('.teamskillbar').each(function () {
        jQuery(this).find('.teamskillbar-bar').animate({
            width: jQuery(this).attr('data-percent')
        }, 6000);
    });





    //End

});




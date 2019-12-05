"use strict";
jQuery(document).ready(function ($) {

    ocultarElementos();

    function ocultarElementos(e) {
        $('#div1').hide();
        $('#div2').hide();
        $('#msj').hide();
    }

    $('#tipo').change(function () {
        console.log("ingresa a combo")
        var value = $(this).val();
        if (value == 1) {
            $('#div1').show();
            $('#div2').hide();
        } else if (value == 2) {
            $('#div2').show();
            $('#div1').hide();
        }
    });
    $('#txId').click(function (e) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#txId').text()).select();
        document.execCommand("copy");
        $temp.remove();
        $('#msj').show();
    });
});

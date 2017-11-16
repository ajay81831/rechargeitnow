
$('.datacard_continue a').click(function(){
    $('#datacard_circle').show();
    $('.datacard_continue').hide();
});

$('.dth_subs_input').click(function(){
    $('.dth_subscriber').addClass('m-t-14');
});

$(".data_drop").click(function(){
    $('.datacard_step1').show();
});



$(".dth_step1 a").click(function(){
    $('.dth-image-circle').hide();
});

$(".dth_drop li a").click(function(){
    $('.dth_note').show();
});

// $(".dth-cont-second a").click(function(){
// 	$('.dth-cont-second').hide();
//     $('#dth_amount').show();
// });


$("#support_escalate_button button").click(function(){
	$('#support_escalate_button').hide();
	$('#support_escalate').show();
});

$("#subBtn_1 button").click(function(){
    $('#subBtn_1').hide();
    $('#support_escalate_detail').show();
});

$("#supportHistory_1").click(function(){
    $('#supportHistoryDetail_2').hide();
    $('#supportHistoryDetail_1').show();
});

$("#supportHistory_2").click(function(){
    $('#supportHistoryDetail_1').hide();
    $('#supportHistoryDetail_2').show();
});



$("#jio-input input").click(function(){
    $('#jio_circle').show();
});
$("#jio-input input").click(function(){
    $('#jio_product').show();
});
$(".jio-circle-drop li a").click(function(){
    $('.jio-cont-one').show();
});


$(".drop-contact-1 li a").click(function(){
    $('.selectSubject').show();
});
$(".drop-contact-2 li a").click(function(){
    $('.userSecondInput').show();
});


var plantabheight = $("#plan_holder").height();
$("#plansNav").css({ height: plantabheight});




jQuery(function($){
   $("#coupon").mask("99-9999-9999",{placeholder:" "});
});

$(document).ready(function() {

    var owl = $("#quickPick");

    owl.owlCarousel({
        autoPlay: false,
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1000, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [700, 3], // 3 items betweem 900px and 601px
        itemsTablet: [600, 2], //1 item between 600 and 0;
        itemsMobile: [340, 1], // itemsMobile disabled - inherit from itemsTablet option
        lazyLoad: true

    });

    $('#quickPick .mob_recharge').on('click',function(){
        window.location.href = "screen_second.php";
    });
    

    // Custom Navigation Events
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    })

    //=========================Payment
    $('#paymentHeaderOp').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items: 5, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [700, 4], // 3 items betweem 900px and 601px
        itemsTablet: [600, 4], //1 item between 600 and 0;
        itemsMobile: [380, 3], // itemsMobile disabled - inherit from itemsTablet option
        lazyLoad: true
})

    //=========================Coupons
    $('#couponShopHeader').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items: 5, //10 items above 1000px browser width
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [700, 4], // 3 items betweem 900px and 601px
        itemsTablet: [600, 4], //1 item between 600 and 0;
        itemsMobile: [380, 3], // itemsMobile disabled - inherit from itemsTablet option
        lazyLoad: true
    // responsive:{
    //     0:{
    //         items:1
    //     },
    //     600:{
    //         items:3
    //     },
    //     1000:{
    //         items:3
    //     }
    // }
})


    $('.userDrop').on("click", function(){
        $( ".profileDropDown" ).slideToggle();
    });


    $(".amount").click(function() {
        $('.rechargeAmount').val($(this).find(".amount-figure").text());
        // $('.rs').hide();
        $('input.rechargeAmount').css('padding', '0px');
    })

    $("#owl-demo").owlCarousel({
        autoPlay: 2000,
        loop: true,
        items: 5,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [768, 4],
        itemsTabletSmall: [600, 3],
        itemsMobile: [550, 3]
    });

 



    $("#selectColor").change(function() {
        $(this).css('color', '#0148a0');
        $('.message').css('display', 'block');
        $('.operator_logo').css('display', 'block');

    })
    $("#selectCircle").change(function() {
        $(this).css('color', '#0148a0');
        $('.messages').css('display', 'block');
    })

   
    $('input[name=radio1]').change(function(){
        if ($("#pre-option").is(":checked")) {
            $('#pre-content').show();
            $('#post-content').hide();
            $(".quickRecharge").attr("data-quickRecharge","preSelectOperator")
        } else{
            $('#post-content').show();
            $('#pre-content').hide();
            $(".quickRecharge").attr("data-quickRecharge","postSelectOperator")
        }
    });
    $('.prepaid-select li').click(function(){
         $('.stepThree').hide();
    });
    $('.post-select li').click(function(){
        $('.stepTwo').show();
        $('.stepOne').hide();
        $('.stepThree').hide();
        
    });
    $('.stepTwo').click(function(){
        window.location.href = "postpaid-screen-2.php";
    });
    $('.amount').click(function() {
        $('.amount').removeClass('selectedPlan');
        $(this).addClass("selectedPlan");
        $('.noBorder').removeClass('colorAdd');
        // $(this).parent().prev().addClass('colorAdd');
    });
    $('.provider-list_select li').click(function(){
        $('.stepThree').show();
        $('.stepTwo').hide();
        $('.stepOne').hide();

    });
    $('.stepThree').click(function(){
        window.location.href = "dth_screen_2.php";
    });
   
    $('.apply').click(function() {
        $(this).hide();
        $('.trashIcon').show();
        $('.offerGet').show();
        // $('.tabContentWrapper').css('height', '274px');
        $('.applycode').addClass('mob_code');
    });
    $('.trashIcon').click(function() {
        $('.offerGet').fadeOut();
        $(this).fadeOut();
        $('.apply').fadeIn();
        // $('.tabContentWrapper').css('height', '274px');
        $('.applycode').removeClass('mob_code');
    });


    $('.apply').click(function() {
        $(this).fadeOut();
        $('.trashIcon').fadeIn();
        $('.jioredeemText').fadeIn();
        // $('.tabContentWrapper').css('height', '274px');
        $('.applycode').addClass('mob_code');
    });
    $('.trashIcon').click(function() {
        $('.jioredeemText').fadeOut();
        $(this).fadeOut();
        $('.apply').fadeIn();
        // $('.tabContentWrapper').css('height', '274px');
        $('.applycode').removeClass('mob_code');
    });
    
    $('#payMoney').click(function() {
        $('#prepaidPayment').show();
        $(this).hide();
        $('.coupon').hide();
        $('.form_with-submit').hide();
        $('.totalOffer').hide();
        $('.unlockCoupon').hide();
        $('.tabContentWrapper ').hide();
    });

    //PAYMENT TAB ARROW (DOWN ARROW WHEN TAB IS OPEN AND UP ARROW WHEN TAB IS CLOSED)
    var $activePanelHeading = $('.panel-group .panel .panel-collapse.in').prev().addClass('active');
    $activePanelHeading.find('a').prepend('<span class="fa fa-angle-up"></span> ');
    $('.panel-group .panel-heading').not($activePanelHeading).find('a').prepend('<span class="fa fa-angle-down"></span> ');
    $('.panel-group').on('show.bs.collapse', function(e) {
        $(e.target).prev().addClass('active').find('.fa').toggleClass('fa-angle-down fa-angle-up');
    });
    $('.panel-group').on('hide.bs.collapse', function(e) {
        $(e.target).prev().removeClass('active').find('.fa').removeClass('fa-angle-up').addClass('fa-angle-down');
    });

    //google advertise fixed at mobile bottom, 
    //show only when user stope scrolling and hide when user scrolling.

    $(window).scroll(function(event) {
        $('#offerBanner').css('max-height', '0px');
    });


    $.fn.scrollStopped = function(callback) {
        var that = this,
            $this = $(that);
        $this.scroll(function(ev) {
            clearTimeout($this.data('scrollTimeout'));
            $this.data('scrollTimeout', setTimeout(callback.bind(that), 1200, ev));
        });
    };

    $(window).scrollStopped(function(ev) {
        $('#offerBanner').css('max-height', '100px');
    });

    $('.bankList li').on('click', function() {
        $('.bankList li').removeClass('border-color');
        $(this).addClass('border-color');
    });


    $('.cardselect').on('click', function() {
        $('.cardselect').removeClass('selectBank');
        $(this).addClass('selectBank');
    });
    $('#nav-icon3').click(function(){
        $(this).toggleClass('open');
    });

    $('.rechargeHistory').click(function(){
        $('.rechargeHistory').removeClass('activeHistory');
        $(this).addClass('activeHistory');
        $('.back').hide();
    });
     $('.sliderheader .item').click(function(){
        $('.item').removeClass('selected');
        $(this).addClass('selected');
        $('.item').removeClass('active');
        
    });


    // Pawan Javascript for index page

    $(".dropdown-menu li a").click(function(){
        var s = $(this).parents(".dropdown-menu").attr("aria-labelledby");
        var qr = $(".quickRecharge").attr("data-quickRecharge");
        $("." + s).find('.dropdown_button').html($(this).text() + ' <img src="assets/img/down-arrow.png">');
        $("." + s).find('.dropdown_button').val($(this).data('value'));
        $("." + s).find('.floatLabel').show();
        $("." + s).next('.messages').show();
        $("." + s).parents('.operator.op').find('.operator_logo').show();
        $('.circularImg').hide();


        if ($(this).parents('ul').hasClass('data_drop'))
            {
                $('.submitRightside').hide();
            }
        else if ($(this).parents('ul').hasClass('dth_drop'))
            {
                $('.submitRightside').hide();
            }
        else if ($(this).parents('ul').hasClass('jio_drop'))
            {
                $('.submitRightside').hide();
            }
        else 
            {
                $('.submitRightside').show();   
                $('#mobile .valign').css('height', '285px'); 
            }

        
        
        $('.stepTwo').hide();
        // Quick recharge section show 
        if(s===qr){
            $(".quickRecharge").show();
            $('.tabContentWrapper').css('height', '378px');
        }
    });

    $('.postpaid-op .post-select > li > a').click(function(){
        $(".quickRecharge").hide();
    });

    $(".stepOne").click(function(){
        var inputVal = $("#cno").val();
        if(inputVal.length === 0) {
            $("#cno").parents("#singleLineInput").find(".mob_error").html('Please enter mobile number');
        } else if(inputVal == 0 && inputVal.length !== 0) {
            $("#cno").parents("#singleLineInput").find(".mob_error").html('Mobile number not valid');
        } else if(inputVal.length !== 10 && inputVal != 0 && inputVal.length !== 0){
            $("#cno").parents("#singleLineInput").find(".mob_error").html('Mobile number should be 10 digits');
        } else{
            window.location.href = "screen_second.php";
        }
    });

    $('.checkNumeric').on("keyup", function () {
        var value = $(this).val();
        var regex_cell = /[^[0-9 +]]*/gi;
        var new_value = value.replace(regex_cell, '');
        $(this).val(new_value);
    });
    $('.checkNumeric').on("focus", function(){
       $("#cno").parents("#singleLineInput").find(".mob_error").html('');
    });

    $('#redeem').change(function() {
        var checked = $('#redeem').is(':checked');
        if(checked){
            $('.applycode').show();
            $('.redeem_check').css('top', '-6px');
        }else{
            $('.applycode').hide();
            $('.redeem_check').css('top', '15px');
        }
    });
    

    $('#selectOffer').change(function() {
        var checked = $('#selectOffer').is(':checked');
        if(checked){
            $('.checkedOffer').addClass("slideInLeft").removeClass("slideOutRight");
            $('.missedOffer').addClass("slideOutRight").removeClass("slideInLeft");
            $('.checkedOffer').show();
            $('.missedOffer').hide();

            // slideInLeft
        }else{
            $('.checkedOffer').addClass("slideOutRight").removeClass("slideInLeft");
            $('.missedOffer').addClass("slideInLeft").removeClass("slideOutRight");
            $('.checkedOffer').hide();
            $('.missedOffer').show();
        }
    });

    $('input[name=loginMethod]').change(function(){
        if ($("#havePassword").is(":checked")) {
            $('.havePassword').show();
            $('.noPassowrd').hide();
            $('.login_Btn').show();
        } else{
            $('.havePassword').hide();
            $('.genrate_otp').show();
            $('.noPassowrd').show();
            $('.login_Btn').hide();
            $('.enter_otp').hide();

        }
    });
    $('.genrate_otp').click(function(){
        $(this).hide();
        $('.enter_otp').show();
        $('.login_Btn').show();
    });
    $('#fGetpwd').on("click", function(){
        $('#loginDiv').hide();
        $('#forgotDiv').show();
    });
    $('a.backToLogin, .login_register').on("click", function(){
        $('#loginDiv').show();
        $('#forgotDiv').hide();
    });

    $(".autogeoloc").placepicker();
     
    /* Auto suggection google location------*/

    
    
    /* Hint message on focus -------*/

    $( ".hintShow" ).on("focus", function() {
        console.log('hi');
        $('.hintToolTip').removeClass('displayTable');
        $(this).parents('.group').find('.hintToolTip').addClass('displayTable');
    });
    $( ".hintShow" ).on("blur", function() {
        $(this).parents('.group').find('.error').remove();
        $('.hintToolTip').removeClass('displayTable');
    });

    $('#regForm input[name="gender"]').on("change", function() {
        $('#regForm .genderRadio').find('.error').remove();
    });

    $( ".hintShow" ).on("keyup", function() {
        $(this).parents('.group').find('.error').remove();
    });
    $('.desk-btn').click(function(){
        $('.scheme-table').show();
    });
    // $('.viewScheme').click(function(){
    //     $('.mobile-plan-view').show();
    // });

    $('.close-tool').click(function(){
        $(this).parents('.wrap').parents('.rechargeToolTip').hide();
    });


    $('.genrate_otp').click(function(){
        $('.otp-msg ').show();
        $('.before-otp').hide();
    });

     // Configure/customize these variables.
    var showChar = 90;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "more >>";
    var lesstext = "<< less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

    $(".arrow").click(function() {
          var box = $(".box-inner"),
            x;
          if ($(this).hasClass("arrow-right")) {
            x = ((box.width() / 2)) + box.scrollLeft();
            box.animate({
              scrollLeft: x,
            })
          } else {
            x = ((box.width() / 2)) - box.scrollLeft();
            box.animate({
              scrollLeft: -x,
            })
          }
    });

    /*MOBILE-APP-DOWNLOAD-HEADER*/
    $('.mobile-app-download button').click(function(){
        $(this).parent('.mobile-app-download').hide();
        $('#product').css('padding-top', '45px');
        $('#product .nav-pills').css('top', '50px');
        //$('#product.tab-wrapp ').css('padding-top', '128px');
    });

    $('input').keypress(function(){
        $(this).siblings('.hintToolTip').hide();
    })

    $('.ticket').click(function(){
        $('.indvidualDetails table').hide();
        $('#open-support').show();
        $('.accordionTicket').show();
        $('.back').show();
    });

    $('.ticket').click(function(){
        $(this).removeClass('active');
        $(this).addClass('active');
    });

    $( ".enterCaptcha" ).focusin(function() {
      $(".captcha-placeholder").fadeOut();
    });
    $( ".enterCaptcha" ).focusout(function() {
        if(!$(this).val().length){
            $(".captcha-placeholder").fadeIn();
        }
    });

     
     $('.operator_select').click(function(){
        $('.tab-content').css('padding', '48px 15px 20px');
     });
     $('.jio-circle-drop').click(function(){
        $('.tab-content').css('padding', '44px 15px 20px');
     });

     $('#personalEdit').click(function(){
        $('.personalDetail table').hide();
        $('#personalEditField').show();
     });
     $('#editAddressBtn').click(function(){
        $('.address').hide();
        $('#editAddress').show();
     });
     $('.bankNotWork').click(function(){
        $('.bankErrorBox').fadeIn();
     });
     $('.closeError').click(function(){
        $('.bankErrorBox').fadeOut();
     });
     $('#mobProfEdit').click(function(){
        $('.personalDetail table').hide();
        $('#mobProfField').show();
     });
     $('#mobAddressBtn').click(function(){
        $('.address').hide();
        $('#mobEditAddress').show();
     });

     $('input[name=radio1]').change(function(){
        if ($("#pre-option-dth").is(":checked")) {
            $('#pre-content-dth').show();
            $('#post-content-dth').hide();
            // $(".quickRecharge").attr("data-quickRecharge","preSelectOperator")
        } else{
            $('#post-content-dth').show();
            $('#pre-content-dth').hide();
            // $(".quickRecharge").attr("data-quickRecharge","postSelectOperator")
        }
    });

     $('.passBtn').click(function(){
        $('.passForget').show();
        $('.loginF').hide();
        $('#popUpNav').hide();
        $('#forgPass').show();
     });

     $('.loginClose').click(function(){
        $('.passForget').hide();
        $('.loginF').show();
        $('#forgPass').hide();
        $('#popUpNav').show();
        $('.forgetSuccessMsg').hide();
     });

     $('#forgotBtn').click(function(){
        $('.forgetSuccessMsg').show();
        $('.loginF').hide();
        $('.passForget').hide();
     });

     $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 

    $("#editDob").mask("99-99-9999",{placeholder:" "});
    $("#mEditDob").mask("99-99-9999",{placeholder:" "});

    
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}

function goBack() {
    window.history.back();
}

$("input").focus(function(){
    $("#scroll").hide();
});

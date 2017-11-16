$(document).ready(function() {
    /* ====================================================
                Registration form validation start
    ======================================================*/
    $('#regBtn').on("click", function(){
        $('#regForm').find('.error').remove();
        var name = $('#regForm input[name="name"]').val();
        var mob_num = $('#regForm input[name="mob"]').val();
        var email = $('#regForm input[name="email"]').val();
        var age = $('#regForm input[name="age"]').val();
        var password = $('#regForm input[name="password"]').val();
        var gender = $('#regForm input[name="gender"]').is(':checked');
        var city = $('#regForm input[name="city"]').val();
        var emailfilter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var mobFilter = /^\d{10}$/;
        if(name.length===0){
            $('#regForm input[name="name"]').after('<div class="mob_error error">Type your name</div>');
            $('#regForm input[name="name"]').focus();
            return false;
        }
        if (!mobFilter.test(mob_num)) {
            if(mob_num == 0){
                $('#regForm input[name="mob"]').after('<div class="mob_error error">Type your valid mobile</div>');
            } else if(mob_num.length === 0){
                $('#regForm input[name="mob"]').after('<div class="mob_error error">Type your mobile number</div>');
            } else if(mob_num.length > 0 && mob_num.length < 10){
                $('#regForm input[name="mob"]').after('<div class="mob_error error">Type 10 digit mobile number</div>');
            }
            $('#regForm input[name="mob"]').focus();
            return false;
        }

        if(!emailfilter.test(email)){
            if(email.langth !== 0){
                $('#regForm input[name="email"]').after('<div class="mob_error error">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>');
            } else{
                $('#regForm input[name="email"]').after('<div class="mob_error error">Type your email id</div>');
            }
            $('#regForm input[name="email"]').focus();
            return false;
        }

        if(age.length === 0){

            $('#regForm input[name="age"]').after('<div class="mob_error error">Type your age</div>');
            $('#regForm input[name="age"]').focus();
            return false;
        }
        
        if(age < 18){

            $('#regForm input[name="age"]').after('<div class="mob_error error">Age should be greater than 18.</div>');
            $('#regForm input[name="age"]').focus();
            return false;
        }

        if(password.length === 0){
            $('#regForm input[name="password"]').after('<div class="mob_error error">Password should be not blank.</div>');
            $('#regForm input[name="password"]').focus();
            return false;
        }
        if(password.length < 8){
            $('#regForm input[name="password"]').after('<div class="mob_error error">Password is minimum 8 characters.</div>');
            $('#regForm input[name="password"]').focus();
            return false;
        }
        if(!gender){
            $('#regForm .genderRadio ul').append('<div class="mob_error error">Choose your gender</div>');
            //$('#regForm input[name="gender"]').focus();
            return false;
        }
        if(city.length === 0){

            $('#regForm input[name="city"]').after('<div class="mob_error error">Type your city</div>');
            $('#regForm input[name="city"]').focus();
            return false;
        }

    });

    /* ====================================================
                Guest Login form validation start
    ======================================================*/
    $('#gusetLoginBtn').on("click", function(){
        $('#guestForm').find('.error').remove();
        var name = $('#guestForm input[name="name"]').val();
        var mob_num = $('#guestForm input[name="mob"]').val();
        var email = $('#guestForm input[name="email"]').val();
        var emailfilter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var mobFilter = /^\d{10}$/;
        if(name.length===0){
            $('#guestForm input[name="name"]').after('<div class="mob_error error">Type your name</div>');
            $('#guestForm input[name="name"]').focus();
            return false;
        }
        if(!emailfilter.test(email)){
            if(email.langth !== 0){
                $('#guestForm input[name="email"]').after('<div class="mob_error error">Type your valid email id</div>');
            } else{
                $('#guestForm input[name="email"]').after('<div class="mob_error error">Type your email id</div>');
            }
            $('#guestForm input[name="email"]').focus();
            return false;
        }
        if (!mobFilter.test(mob_num)) {
            if(mob_num == 0){
                $('#guestForm input[name="mob"]').after('<div class="mob_error error">Type your valid mobile number</div>');
            } else if(mob_num.length === 0){
                $('#guestForm input[name="mob"]').after('<div class="mob_error error">Type your mobile number</div>');
            } else if(mob_num.length > 0 && mob_num.length < 10){
                $('#guestForm input[name="mob"]').after('<div class="mob_error error">Type 10 digit mobile number</div>');
            }
            $('#guestForm input[name="mob"]').focus();
            return false;
        }

    });

    /* ====================================================
                Forgot password form validation start
    ======================================================*/
    $('#forgotBtn').on("click", function(){
        $('#forgotForm').find('.error').remove();
        var email = $('#forgotForm input[name="email"]').val();
        var emailfilter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if(!emailfilter.test(email)){
            if(email.langth !== 0){
                $('#forgotForm input[name="email"]').after('<div class="mob_error error">Type your valid email id</div>');
            } else{
                $('#forgotForm input[name="email"]').after('<div class="mob_error error">Type your email id</div>');
            }
            $('#forgotForm input[name="email"]').focus();
            return false;
        }
    });
});
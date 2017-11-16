<div id="login" class="tab-pane fade in active">
<!--Forget Password Success Message-->
<div class="forgetSuccessMsg">
  <h1>Thank You</h1>
  <p>We have sent a link to your registerd email. Please check your email.</p>
</div>
<!--Forget Password Success Message End-->
<!--Forget Password-->
<div class="passForget">
  <form id="forgotForm" novalidate>
        <div class="wrapperForm">
          <div class="leftLogin">
            <div class="group">
              <input class="modalInput hintShow" name="email" type="text" autocomplete="off" required="">
              <span class="highlight"></span>
              <label class="floatingLabel">Email*</label>
              <div class="hintToolTip animated fadeIn">Enter your valid email id</div>
            </div>
            <div class="captcha">
              <span>text<br>verfication</span>
              <small></small>
              <i class="refresh"><img src="assets/img/refresh.png"></i>
            </div>
            <div class="group">
                <input class="modalInput enterCaptcha" type="text" placeholder="Type the characters you see above" required="">
                <span class="highlight"></span>
            </div>
            <div class="bottonSubmit">
              <p>(* MARKED FIELDS ARE MANDATORY)</p>
              <div class="loginBtn">
                <button id="forgotBtn" type="submit" class="forgotBtn">Submit</button>
              </div>
            </div>
          </div>
           <div class="clearfix"></div>
        </div>
      </form>
</div>
<!--Forget Password-->
  <div class="modalFormWrapper">
    <form class="loginF">
      <div class="wrapperForm">
        <div class="leftLogin">
          <div class="group">
            <input name="name" class="modalInput hintShow" type="text" autocomplete="off" spellcheck="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">Registered Email</label>
            <div class="hintToolTip animated fadeIn">Enter your email</div>
          </div>
          <div class="genderRadio queRadio loginRadio">
            <ul>
              <li>
                <input type="radio" id="havePassword" name="loginMethod" value="" checked="checked">
                <label for="havePassword">Use Password</label>
                <div class="check"></div>                                    
              </li>
              <li>
                <input type="radio" id="hasOtp" name="loginMethod" value="">
                <label for="hasOtp">Use OTP</label>
                <div class="check"></div>                                    
              </li>
            </ul>
          </div>
          <div class="havePassword">
            <div class="group">
              <input name="name" class="modalInput hintShow" type="password" autocomplete="off" spellcheck="off" required>
              <span class="highlight"></span>
              <label class="floatingLabel">Password</label>
              <div class="hintToolTip animated fadeIn">Enter your password</div>
            </div>
            <div class="linkWrapper">
                <button class="passBtn">forgot password?</button>

            </div>
          </div>
        <!--   <div class="genderRadio queRadio">
            <ul>
              <li>
                <input type="radio" id="notPassword" name="loginMethod" value="">
                <label for="notPassword">if not, generate one time password (OTP)</label>
                <div class="check"></div>                                    
              </li>
            </ul>
            <span class="before-otp">(we will send OTP on your registered email id &amp; mobile number)</span>
          </div> -->
          <div class="noPassowrd hideon">
            <div class="loginBtn g-otpBtn">
              <a href="javascript:void(0);" class="genrate_otp">Generate OTP</a>
            </div>
            <div class="group enter_otp">
              <input class="modalInput" type="text" spellcheck="off" required>
              <span class="highlight"></span>
              <label class="floatingLabel">Enter OTP</label>
            </div>
            <div class="linkWrapper">
              <a class="forgetPassword" href="javascript:void(0);">Regenerate OTP</a>
            </div>
          </div>
          <div class="loginBtn login_Btn">
            <div class="otp-msg">Your OTP has been sent.</div>
            <a href="account.php">login</a>
          </div>
        </div>
        <div class="rightLogin">
          <b>OR</b>
          <div class="loginWithSocial">
            <ul>
              <li>
                <a href=""><img src="assets/img/twitter-logo-silhouette.png"> login with twitter</a>
              </li>
              <li>
                <a href=""><img src="assets/img/facebook-letter-logo.png">  login with facebook</a>
              </li>
              <li>
                <a href=""><img src="assets/img/google-plus.png"> login with google+</a>
              </li>
              <li>
                <a href=""><img src="assets/img/yahoo-big-logo.png">  login with yahoo</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </form>
  </div>
</div>
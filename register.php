<div id="register" class="tab-pane fade">
<p class="mendatoryText">ALL FIELDS ARE MANDATORY</p>
  <div class="modalFormWrapper">
    <form id="regForm" novalidate>
      <div class="wrapperForm">
        <div class="leftLogin">
          <div class="group">
            <input name="name" class="modalInput hintShow" type="text" autocomplete="off" spellcheck="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">Name</label>
            <div class="hintToolTip animated fadeIn">Enter your name</div>
          </div>
          <div class="group">
            <input class="modalInput hintShow checkNumeric" name= "mob" maxlength="10" type="number" autocomplete="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">Mobile Number</label>
            <div class="hintToolTip animated fadeIn">Enter 10 digit mobile number</div>
          </div>
          <div class="group">
            <input name = "email" class="modalInput hintShow" type="email" autocomplete="off" spellcheck="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">Email</label>
            <div class="hintToolTip animated fadeIn">Enter valid email Id</div>
          </div>
          <div class="group">
            <input class="modalInput hintShow checkNumeric" name="age" type="text" autocomplete="off" spellcheck="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">Age</label>
            <div class="hintToolTip animated fadeIn">Enter your age</div>
          </div>
          <div class="group">
            <input name="password" class="modalInput hintShow" type="text" autocomplete="off" spellcheck="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">Password</label>
            <div class="hintToolTip animated fadeIn">Enter password</div>
          </div>
          <div class="genderRadio hintShow">
            <ul>
              <span>GENDER</span>
                <li>
                  <input type="radio" id="z-option" name="gender" value="female">
                  <label for="z-option">FEMALE</label>
                  <div class="check"></div>                                    
                </li>
                <li>
                  <input type="radio" id="r-option" name="gender" value="male">
                  <label for="r-option">MALE</label>
                  <div class="check"></div>                                    
                </li>
            </ul>
          </div>
        </div>
        <div class="rightLogin leftLogin">
          <div class="group">
            <input class="modalInput autogeoloc hintShow" name="city" type="text" placeholder="" spellcheck="off" required>
            <span class="highlight"></span>
            <label class="floatingLabel">City</label>
            <div class="hintToolTip animated fadeIn">Enter your city</div>
          </div>              
          <div class="captcha">
            <span>text<br>verfication</span>
            <small></small>
            <i class="refresh"><img src="assets/img/refresh.png"></i>
          </div>
          <div class="group">
              <span class="captcha-placeholder">Type the character you see above</span>
              <input class="modalInput enterCaptcha" type="text" spellcheck="off" required>
              <span class="highlight"></span>
          </div>
          <div class="newCheck control-group deviceMt">
            <label class="control check">I wish to receive promotional communication from partners of rechargeitnow.com
              <input type="checkbox"/>
              <div class="control__indicator"></div>
            </label>
          </div>
          <div class="newCheck control-group">
            <label class="control check">I have read and understood the <a class="termofuse" target="_blank" href="terms.php">terms of usage</a> and agree to it.
              <input type="checkbox"/>
              <div class="control__indicator"></div>
            </label>
          </div>
        </div>
         <div class="clearfix"></div>
      </div>
      <div class="bottonSubmit">
      
        <div class="loginBtn">
          <button id="regBtn" type="submit">login</button>
        </div>
      </div>
    </form>
  </div>
</div>
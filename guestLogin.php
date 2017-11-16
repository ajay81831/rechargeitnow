<div id="guestLogin" class="tab-pane fade">
  <div class="modalFormWrapper">
      <form id="guestForm" novalidate>
        <div class="wrapperForm">
          <div class="leftLogin">
            <div class="group">
              <input class="modalInput hintShow" name="name" type="text" autocomplete="off" spellcheck="off" required>
              <span class="highlight"></span>
              <label class="floatingLabel">Name*</label>
              <div class="hintToolTip animated fadeIn">Enter your name</div>
            </div>
            <div class="group">
              <input class="modalInput hintShow" name="email" type="text" autocomplete="off" spellcheck="off" required>
              <span class="highlight"></span>
              <label class="floatingLabel">Email*</label>
              <div class="hintToolTip animated fadeIn">Enter your valid email id</div>
            </div>
            <div class="group">
              <input class="modalInput hintShow" name="mob" maxlength="10" type="number" spellcheck="off" autocomplete="off" required>
              <span class="highlight"></span>
              <label class="floatingLabel">Mobile Number*</label>
              <div class="hintToolTip animated fadeIn">Enter 10 digit mobile number</div>
            </div>
          </div>
          <div class="rightLogin leftLogin">
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
            <button type="submit" id="gusetLoginBtn">login</button>
          </div>
        </div>
      </form>
  </div>
</div>
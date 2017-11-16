<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
    <section id="product">
        <div class="container">
            <div class="scheme-plan">
                <div class="col-md-12">     
                    <h2 class="page-title">Contact Us</h2>
                    <!-- <p>
                        We are focused on your shopping experience at RechargeItNow.com. Please fill out the form below and we promise to get back to you within 2 working days.
                    </p>
                    <p>
                    NOTE: if you are a registered user, please click here to select a transaction &amp; raise a ticket or post a query.</p> -->
                </div>
                <div class="col-lg-12 contactPage no-background customeSelect selectWithLabel mobSelectMb">
                    <form>
                        <div class="userFirstInput">
                            <div class="operator selectService position_rel">
                                <label>CHOOSE SERVICE</label>
                                <button class="dropdown_button dropdown-toggle" type="button" id="selectService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                SELECT
                                    <img src="assets/img/down-arrow.png">
                                </button>
                                <ul class="dropdown-menu animated fadeIn" aria-labelledby="selectService">
                                   <li><a href="javascript:void(0)" data-value="action">Recharge</a></li>
                                   <li><a href="javascript:void(0)" data-value="another action">Bill Payment</a></li>
                                   <li><a href="javascript:void(0)" data-value="another action">Other Services</a></li>
                                </ul>
                            </div>
                            <div class="operator selectSubject position_rel">
                                <label>CHOOSE SUBJECT</label>
                                <button class="dropdown_button dropdown-toggle" type="button" id="selectSubject" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                SELECT
                                    <img src="assets/img/down-arrow.png">
                                </button>
                                <ul class="dropdown-menu animated fadeIn" aria-labelledby="selectSubject">
                                   <li><a href="javascript:void(0)" data-value="action">Failed Recharge</a></li>
                                   <li><a href="javascript:void(0)" data-value="another action">Escalation</a></li>
                                   <li><a href="javascript:void(0)" data-value="another action">Recharge Coupon</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="contactus-form userSecondInput">
                            <div class="form_with-submit planBrowse newclass">
                                <div class="group">
                                    <input type="text" required="" name="name">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="floatingLabel">name</label>
                                </div>
                                <div class="group">
                                    <input type="text" required="" name="number">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="floatingLabel">contact mobile number</label>
                                </div>
                                <div class="group">
                                    <input type="text" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="floatingLabel">mobile no./subscriber id recharged</label>
                                </div>
                                <div class="group">
                                    <input type="text" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="floatingLabel">order id</label>
                                </div>
                                <div class="group">
                                    <input type="text" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="floatingLabel">amount</label>
                                </div>
                                <div class="group">
                                    <input type="text" required="" name="name">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="floatingLabel">email</label>
                                </div>
                               
                            </div>
                            <div class="form_with-submit planBrowse newclass pull-right">
                                <div class="group">
                                    <label class="mobile-date">Select Date</label>
                                    <input type="date" required="" name="number">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="operator selectProblem position_rel">
                                    <label>CHOOSE SERVICE</label>
                                    <button class="dropdown_button dropdown-toggle" type="button" id="selectProblem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    SELECT
                                        <img src="assets/img/down-arrow.png">
                                    </button>
                                    <ul class="dropdown-menu animated fadeIn" aria-labelledby="selectProblem">
                                       <li><a href="javascript:void(0)" data-value="action">Recharge</a></li>
                                       <li><a href="javascript:void(0)" data-value="another action">Bill Payment</a></li>
                                       <li><a href="javascript:void(0)" data-value="another action">Other Services</a></li>
                                    </ul>
                                </div>
                                
                                <div class="group">
                                    <textarea placeholder="Comment"></textarea>
                                </div>
                                <div class="group">
                                    <div class="enterCaptcha">
                                        <span>Text <br>verification</span>
                                        <figure><img src="assets/img/Captcha-ex.jpg"></figure>
                                        <button><img src="assets/img/refresh.png""></button>
                                    </div>
                                    <input class="modalInput" type="text" placeholder="Type the characters you see above" required="">
                                    <span class="highlight"></span>
                                    <span class="error-msg">Characters you entered does not match.</span>
                                </div>
                               
                            </div>
                        </div>
                        <div class="subBtn">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="advertise hidden-xs hidden-xs">
                <ul>
                    <li><img src="assets/img/side-img-1.jpg"></li>
                    <li><img src="assets/img/side-img-2.jpg"></li>
                </ul>
            </div>
        </div>
    </section>
</div>
<!--********************************CONTENT PART END**********************************-->
 <?php include_once 'footer.php'; ?>

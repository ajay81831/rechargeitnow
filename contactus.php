<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
    <section id="product">
        <div class="container">
            <div class="scheme-plan">
                <div class="col-md-12">     
                    <h2 class="page-title">Contact Us</h2>
                
                    <div class="row">
                        <div class="col-lg-12 contact-left">
                            <h3>Hi Rahul!
                            <span class="date-stamp">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                Thu, 29 dec 2016
                            </span>
                            </h3>

                            <p>
                                We are focused on your shopping experience at RechargeItNow.com. Please fill out the form below and we promise to get back to you within 2 working days.
                            </p>
                            <p>
                                <strong>NOTE:</strong> if you are a registered user, please <a href="#">click here</a> to select a transaction &amp; raise a ticket or post a query.
                            </p> 
                            <div class="contact-graphic">
                                <img src="assets/img/contact-graphic.png">
                            </div>   
                        </div>
                        <div class="col-lg-12 contact-form contactPage no-background customeSelect selectWithLabel mobSelectMb">
                            
                            <form>
                                <h3>Open Support Ticket</h3>
                                <div class="userFirstInput">
                                    <div class="operator selectService position_rel">
                                        <label>CHOOSE SERVICE</label>
                                        <button class="dropdown_button dropdown-toggle" type="button" id="selectService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Recharge
                                            <img src="assets/img/down-arrow.png">
                                        </button>
                                        <ul class="dropdown-menu drop-contact-1 animated fadeIn" aria-labelledby="selectService">
                                           <li><a href="javascript:void(0)">Recharge</a></li>
                                           <li><a href="javascript:void(0)">Bill Payment</a></li>
                                           <li><a href="javascript:void(0)">Other Services</a></li>
                                        </ul>
                                    </div>
                                    <div class="operator selectSubject position_rel">
                                        <label>CHOOSE SUBJECT</label>
                                        <button class="dropdown_button dropdown-toggle" type="button" id="selectSubject" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Failed Recharge
                                            <img src="assets/img/down-arrow.png">
                                        </button>
                                        <ul class="dropdown-menu drop-contact-2 animated fadeIn" aria-labelledby="selectSubject">
                                           <li><a href="javascript:void(0)">Failed Recharge</a></li>
                                           <li><a href="javascript:void(0)">Escalation</a></li>
                                           <li><a href="javascript:void(0)">Recharge Coupon</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contactus-form userSecondInput">
                                    <div class="form_with-submit planBrowse">
                                        <div class="group leftAlign">
                                            <input type="text" required="" name="name">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">name</label>
                                        </div>
                                        <div class="group rightAlign">
                                            <input type="number" required="" name="number">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">contact mobile number</label>
                                        </div>
                                        <div class="group leftAlign">
                                            <input type="number" required="" name="msid">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">mob no./sub id recharged</label>
                                        </div>
                                        <div class="group rightAlign">
                                            <input type="text" required="">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">order id</label>
                                            <a href="#" class="hints-text idHint">What is order id?</a>
                                            <div class="clearfloat"></div>
                                        </div>
                                        <div class="group leftAlign">
                                            <input type="number" required="">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">amount</label>
                                        </div>
                                        <div class="group rightAlign">
                                            <input type="email" required="" name="name">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">email</label>
                                        </div>
                                        <div class="group leftAlign">
                                            <span class="datepick">
                                                <img src="assets/img/calendar.png">
                                            </span>
                                            <input type="text" id="datepicker" class="datePicker-contact" required="" name="number">
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label class="floatingLabel">Select Date</label>
                                        </div>
                                        <div class="operator selectProblem position_rel mb-bottom rightAlign">
                                            <label class="newLabel">TYPE OF PROBLEM</label>
                                            <button class="dropdown_button dropdown-toggle" type="button" id="selectProblem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            SELECT
                                                <img src="assets/img/down-arrow.png">
                                            </button>
                                            <ul class="dropdown-menu animated fadeIn" aria-labelledby="selectProblem">
                                               <li><a href="javascript:void(0)">Payment Deducted/Recharge Fail</a></li>
                                               <li><a href="javascript:void(0)">Payment Deducted/Session Timeout</a></li>
                                               <li><a href="javascript:void(0)">Confirmed but no recharge received</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="group leftAlign">
                                            <label>COMMENTS</label>
                                            <textarea placeholder="Enter your comment"></textarea>
                                        </div>
                                        <div class="group rightAlign">
                                            <div class="enterCaptcha">
                                                <span>Text <br>verification</span>
                                                <figure><img src="assets/img/Captcha-ex.jpg"></figure>
                                                <button><img src="assets/img/refresh.png""></button>
                                            </div>
                                            <div class="group">
              <span class="captcha-placeholder">Type the character you see above</span>
              <input class="modalInput enterCaptcha" type="text" spellcheck="off" required>
              <span class="highlight"></span>
          </div>
                                        </div>
                                        <div class="subBtn">
                                            <button type="button" data-toggle="modal" data-target="#contactThank">Submit</button>
                                        </div>
                                        <div class="modal fade succMsg" id="contactThank" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  
                                                </div>
                                                <div class="modal-body">
                                                  <figure><img src="assets/img/Success.png"></figure>
                                                  <h2>Your Email has been Submitted Successfully</h2>
                                                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                </div>
                                               
                                              </div>
                                              
                                            </div>
                                      </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>  
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
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

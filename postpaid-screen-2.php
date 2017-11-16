<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
	<section id="product">
		<div class="container mobileContainerFullWidth">
			<!--RECHARGE-CATEGORIES-TAB START-->
            <?php include_once 'sidebar_nav.php'; ?>
 			<!--RECHARGE-CATEGORIES-TAB END-->

 			<!--GOOGLE-ADVERTISE-RIGHT-SIDE START-->
 			<div class="advertise hidden-xs hidden-xs">
				<ul>
					<li><img src="assets/img/side-img-1.jpg"></li>
					<li><img src="assets/img/side-img-2.jpg"></li>
				</ul>
			</div>
			<!--GOOGLE-ADVERTISE-RIGHT-SIDE END-->

			<!--RECHARGE-CATEGORIES-FORM-START-->
			<div class="customerDetail">
				<div class="row tabContentWrapper valign no-top-padding">
					<div class="tab-content full-width-form">
						<div id="mobile" class="tab-pane fade in active">
							<form autocomplete="on" class="secondScreenForm">
								<div class="form_with-submit planBrowse newclass">					                      
									<div class="col-md-6 col-sm-5 group">
										<label>MOBILE NUMBER</label>      
										<input type="text" value="7065196404" readonly>
										<span class="fixedText">+91</span>
									</div>
					                            
		                            <div class="col-md-6 col-sm-7 inputPaddingL mobSelectMb">
			                            <div class="group">
											<label>OPERATOR</label>      
											<input type="text" value="Vodafone" readonly>
										</div>
		                            </div>
								</div>
		                        <div class="form_with-submit planBrowse newclass">
		                         	<div class="col-md-5 group rs-select">
		                         		<label class="floatingLabel">AMOUNT</label>
		                                <input class="rechargeAmount" type="text" required>
			                            <span class="highlight"></span>
			                           	<span class="bar"></span>
			                            <span class="rs">&#8377;</span>
			                            <div class="rechargeToolTip">
						                	<div class="wrap">
						                		<img src="assets/img/arrow-navigate-close.png">
						                		<i class="fa fa-times fa-2x close-tool" aria-hidden="true"></i>
						                		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						                	</div>
					                	</div>
					                	<div class="error-box">
			                            	<p>Note: Collection Charge (inclusive service tax) of Rs. 10 will be added to your payable amount.</p>
			                            </div>
		                          	</div>
		                          	
		                          	<div class="col-md-7 continueBtn" id="secondContinueBtn">
			                         	<a href="postpaid-screen-3.php">Continue</a>
			                        </div>
			                    </div>
			                    <!-- <div class="col-md-12 service-tax">
			                    	<p>Note: Collection Charge (inclusive service tax) of Rs. 10 will be added to your payable amount.</p>
			                    </div> -->
	                        </form>
						</div>
					</div>
					
					
				</div>
				<!--OPERATOR-PLANS-START-->

              	<!--OPERATOR-PLANS-END-->
			</div>
			<!--RECHARGE-CATEGORIES-FORM-END-->
 		</div>
	</section>
	<?php include_once 'operator-section.php'; ?>
	<?php //include_once 'billpayment.php'; ?>
	<?php include_once 'downloadSection.php'; ?>
	<?php include_once 'alloperators.php'; ?>
</div>
<!--********************************CONTENT PART END**********************************-->
 <?php include_once 'footer.php'; ?>
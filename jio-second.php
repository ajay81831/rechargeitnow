<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
	<section id="product" class="tab-wrapp">
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
								<div class="form_with-submit planBrowse newclass">					     <div class="col-md-4 inputPaddingL group">
										<label>SERVICE ID</label>      
										<input type="text" value="1ADTV677840M" readonly>
									</div>
					                            
		                            <div class="col-md-8 inputPaddingL mobSelectMb">
			                            <div class="group">
											<label>SERVICE TYPE</label>      
											<input type="text" value="Prepaid" readonly>
										</div>
			                            <div class="operator circle">
											<div class="group">
												<label>CIRCLE</label>      
												<input type="text" value="Delhi/NCR" readonly>
											</div>
										</div>
		                            </div>
								</div>
		                        <div class="form_with-submit noMT planBrowse newclass">
		                        	<div class="col-md-4 group">
										<label>PRODUCT TYPE</Label>      
										<input type="text" class="no-prefix" value="Product Type 2" readonly>
									</div>
		                         	<div class="col-md-4 group rs-select jioAmount">
		                         		<label class="floatingLabel">AMOUNT</label>
		                                <input class="rechargeAmount checkNumeric"  id="cno" type="text" maxlength="4" required>
			                            <span class="highlight"></span>
			                           	<span class="rs">&#8377;</span>
			                            <span class="bar"></span>
			                            <div class="error-box">
			                            	<p>Please Fill the Amount</p>
			                            </div>
			                            <a href="#plan_scroll" id="view_plans"><img src="assets/img/eye.svg">Plans</a>
		                          	</div>
		                          	
		                          	<div class="col-md-4 continueBtn" id="secondContinueBtn">
			                         	<a href="jio-third.php"> Continue</a>
			                        </div>
		                        </div>
	                        </form>
						</div>
					</div>
					
					
				</div>
				<!--OPERATOR-PLANS-START-->
				<div id="openPlan">
                  	<div class="operatorLogoHeading">
                     	<div class="simLogo"><img src="assets/img/jio-logo-official.png"></div>
                     	<div class="planHeading"><p>Topup plans of <span>JIO </span> in Delhi NCR</p></div>
                    </div>
                    <div class="planTabs" id="plan_scroll">
						<div class="col-md-9 col-md-offset-3">
	    					<div class="row">
	        					<ul class="plansList header">
	        						<li class="amount-heading">Amount</li>
	        						<li class="val">Validity</li>
	        						<li class="tt">Talktime</li>
	        						<li class="desc">Description</li>
	        					</ul>
	    					</div>
	    				</div>
	    				<div class="clearfloat plansHeadBorder"></div>
					    <div class="col-md-3 tabHead-mobile">
					     	<div class="box-outer">
							  <a class="arrow-left arrow hidden-lg hidden-md hidden-sm "><img src="assets/img/angle-pointing-to-left.png"></a>
							  <a class="arrow-right arrow hidden-lg hidden-md hidden-sm"><img src="assets/img/angle-arrow-pointing-to-right.png"></a>
							  <div class="box-inner">
				            	<ul id="plansNav" class="nav nav-tabs tabs-left box-inner">
					                <li class="active">
					                	<a href="#all_offers" data-toggle="tab">All</a>
					                </li>
					            </ul>
				            </div>
				            </div>
				        </div>
				        <div class="col-md-9">
				            <div class="row white" id="plan_holder">
					            <div class="tab-content">
					                <div class="tab-pane active animated fadeIn" id="all_offers">
					               		<ul class="plansList selected">
			        						<li class="amount btn">₹96</li>
			        						<li class="val"><span>Validity: </span>1 Day</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							750 MB Unlimited (Speed will be throttled down post threshold usage is exceeded)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹101</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Roaminng STV - 200 MB Data
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹255</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Roaminng STV - 512 MB Data
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹299</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							2 GB with Balance Carry Forward Feature
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹399</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹499</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹655</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
				        						<span class="more">
				        							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				        						</span>
			        							
											</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹699</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹999</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹1198</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹1599</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt"><span>Talktime:</span> NA</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                
					            </div>
				            </div>
				        </div>
				        <div class="clearfix"></div>
					</div>
                    
                    <div class="productDescription">
                    	<p>MRP shown above includes Service Tax, Swach Bharat Cess and Krishi Kalyan Cess at the current rates</p>
                    	<p>The tariff plans are subject to change by the service provider.</p>
                    	<p>Plans have been provided for information purpose only. RechargeItNow does not take any responsibility in case these have been changed by the service provider.</p>
                    </div>
                </div>
              	<!--OPERATOR-PLANS-END-->
			</div>
			<!--RECHARGE-CATEGORIES-FORM-END-->
 		</div>
	</section>
	<?php //include_once 'operator-section.php'; ?>
	<?php include_once 'billpayment.php'; ?>
	<?php include_once 'downloadSection.php'; ?>
	<?php include_once 'alloperators.php'; ?>
</div>
<!--********************************CONTENT PART END**********************************-->
 <?php include_once 'footer.php'; ?>
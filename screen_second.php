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
								<div class="form_with-submit planBrowse newclass">					                      
									<div class="col-md-4 col-sm-5 group">
										<label>MOBILE NUMBER</label>      
										<input type="text" value="7065196404" readonly>
										<span class="fixedText">+91</span>
									</div>
					                            
		                            <div class="col-md-8 col-sm-7 inputPaddingL mobSelectMb">
			                            <div class="group">
											<label>OPERATOR</label>      
											<input type="text" value="Vodafone" readonly>
										</div>
			                            <div class="operator circle">
											<div class="group">
												<label>CIRCLE</label>      
												<input type="text" value="Delhi/NCR" readonly>
											</div>
										</div>
		                            </div>
								</div>
		                        <div class="form_with-submit planBrowse newclass">
		                         	<div class="col-md-5 col-sm-3 group rs-select" id="amountField">
		                         		<label class="floatingLabel">AMOUNT</label>
		                                <input class="rechargeAmount checkNumeric"  id="cno" type="number" maxlength="4" required>
			                            <span class="highlight"></span>
			                           	<span class="rs">&#8377;</span>
			                            <span class="bar"></span>
			                            <div class="error-box">
			                            	<p>Enter any valid denomination from Rs. 10 to Rs. 2000 OR choose a popular plan from the table on the right</p>
			                            </div>
			                            <a href="#openPlan" id="view_plans"><img src="assets/img/eye.svg">Plans</a>
		                          	</div>
		                          	<div class="col-md-7 continueBtn" id="secondContinueBtn">
			                         	<a href="" data-toggle="modal" data-target="#vodaValidate">Continue</a>
			                         	<div class="modal fade modalRIN" id="vodaValidate" role="dialog">
										    <div class="modal-dialog">
										    
										      <!-- Modal content-->
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title">
										          <img src="assets/img/voda-fone.png">
										          	<span>Validated Plan(s) from Vodafone</span></h4>
										        </div>
										        <div class="modal-body">
										          	<div class="subs_detail vodaValidation">
							                        	<h3>Vodafone plans as applicable to your mobile number</h3>
							                        	<div class="vodaDetails">
								                        	<label>Description</label>
								                        	<span>Plan</span>
								                        	<div class="clearfloat"></div>
								                        	<label style="border: 0;">MRP</label>
								                        	<span style="border: 0;">&#8377; 10</span>
								                        	<div class="clearfloat"></div>
								                        	<label style="border: 0;">Recharge Type</label>
								                        	<span style="border: 0;">TopUp</span>
								                        	<div class="clearfloat"></div>
								                        	<label style="border: 0;">Talk Time</label>
								                        	<span style="border: 0;">&#8377; 7.7</span>
								                        	<div class="clearfloat"></div>
								                        	<label style="border: 0;">Benefits</label>
								                        	<span style="border: 0;">Talk Time of &#8377; 7.7</span>
								                        	<div class="clearfloat"></div>
							                        	</div>
							                        </div>
							                        <div class="validationDesc">
							                        	<b>Desclaimer:</b>
							                        	<ul>
							                        		<li>
							                        			The Plans displayed above are as provided by Vodafone and are for your information only.The site does not provide any warranty towards correctness of the plans. The benefits delivered to the customers will be as per your specific plan activated by Vodafone .
							                        		</li>
							                        	</ul>
							                        </div>
										        </div>
										        <div class="modal-footer">
										          	<a href="screen_third.php">Continue</a>
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
				<!--OPERATOR-PLANS-START-->
				<div id="openPlan" class="hidden-sm">
                  	<div class="operatorLogoHeading">
                     	<div class="simLogo"><img src="assets/img/vodafone-150x150.png"></div>
                     	<div class="planHeading"><p>Browse plans of <span>Vodafone </span> in Delhi NCR</p></div>
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
					    <div class="col-md-3 col-sm-4 tabHead-mobile">
					     	<div class="box-outer">
							  <a class="arrow-left arrow hidden-lg hidden-md hidden-sm "><img src="assets/img/angle-pointing-to-left.png"></a>
							  <a class="arrow-right arrow hidden-lg hidden-md hidden-sm"><img src="assets/img/angle-arrow-pointing-to-right.png"></a>
							  <div class="box-inner">
				            	<ul class="nav nav-tabs tabs-left box-inner" id="plansNav">
				                <li class="active">
				                	<a href="#best_offer" data-toggle="tab">Best Offer</a>
				                </li>
				                <li>
				                	<a href="#all_offers" data-toggle="tab">All Offers</a>
				                </li>
				                <li>
				                	<a href="#full_talktime" data-toggle="tab">Full Talktime</a>
				                </li>
				                <li>
				                	<a href="#3g4g_data" data-toggle="tab">3G/4G Data</a>
				                </li>
				                <li>
				                	<a href="#topup" data-toggle="tab">Topup</a>
				                </li>
				                <li>
				                	<a href="#spl_recharge" data-toggle="tab">Special Recharge</a>
				                </li>
				                <li>
				                	<a href="#roaming" data-toggle="tab">Roaming</a>
				                </li>
				            </ul></div></div>
				        </div>
				        <div class="col-md-9 col-sm-8">
				            <div class="row white" id="plan_holder">
					            <div class="tab-content">
					                <div class="tab-pane active animated fadeIn" id="best_offer">
					               		<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
				        						<span class="more">
				        							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				        						</span>
			        							
											</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="full_talktime">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="3g4g_data">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="topup">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="spl_recharge">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="roaming">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
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
	                <div id="openPlan" class="hidden-xs hidden-md hidden-lg">
                  	<div class="operatorLogoHeading">
                     	<div class="simLogo"><img src="assets/img/vodafone-150x150.png"></div>
                     	<div class="planHeading"><p>Browse plans of <span>Vodafone </span> in Delhi NCR</p></div>
                    </div>
                    <div class="planTabs" id="plan_scroll">
						<div class="col-md-9 col-md-offset-3 col-sm-offset-3">
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
					    <div class="col-md-3 col-sm-3 tabHead-mobile">
					     	<div class="box-outer">
							  <a class="arrow-left arrow hidden-lg hidden-md hidden-sm "><img src="assets/img/angle-pointing-to-left.png"></a>
							  <a class="arrow-right arrow hidden-lg hidden-md hidden-sm"><img src="assets/img/angle-arrow-pointing-to-right.png"></a>
							  <div class="box-inner">
				            	<ul class="nav nav-tabs tabs-left box-inner" id="plansNav">
				                <li class="active">
				                	<a href="#best_offer" data-toggle="tab">Best Offer</a>
				                </li>
				                <li>
				                	<a href="#all_offers" data-toggle="tab">All Offers</a>
				                </li>
				                <li>
				                	<a href="#full_talktime" data-toggle="tab">Full Talktime</a>
				                </li>
				                <li>
				                	<a href="#3g4g_data" data-toggle="tab">3G/4G Data</a>
				                </li>
				                <li>
				                	<a href="#topup" data-toggle="tab">Topup</a>
				                </li>
				                <li>
				                	<a href="#spl_recharge" data-toggle="tab">Special Recharge</a>
				                </li>
				                <li>
				                	<a href="#roaming" data-toggle="tab">Roaming</a>
				                </li>
				            </ul></div></div>
				        </div>
				        <div class="col-md-9 col-sm-9">
				            <div class="row white" id="plan_holder">
					            <div class="tab-content">
					                <div class="tab-pane active animated fadeIn" id="best_offer">
					               		<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
				        						<span class="more">
				        							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				        						</span>
			        							
											</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn"><a href="#product">₹ <span class="amount-figure">69</span></a></li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="full_talktime">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="3g4g_data">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="topup">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="spl_recharge">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
			        						<li class="desc">
			        							Full Talktime
			        						</li>
			        					</ul>
					                </div>
					                <div class="tab-pane animated fadeIn" id="roaming">
					                	<ul class="plansList">
			        						<li class="amount btn">₹69</li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList selected">
			        						<li class="amount btn">₹100</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>83.96</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹110</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>92.65</li>
			        						<li class="desc">
			        							Regular Talktime
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹147</li>
			        						<li class="val"><span>Validity: </span>28 Days</li>
			        						<li class="tt">0</li>
			        						<li class="desc">
			        							1 GB 3G Data for Home and national roaming(on Aircel and Vodafone network)
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹150</li>
			        						<li class="val"><span>Validity: </span>NA</li>
			        						<li class="tt"><span>Talktime:</span>150</li>
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
	<?php include_once 'operator-section.php'; ?>
	<?php //include_once 'billpayment.php'; ?>
	<?php include_once 'downloadSection.php'; ?>
	<?php include_once 'alloperators.php'; ?>
</div>
<!--********************************CONTENT PART END**********************************-->
 <?php include_once 'footer.php'; ?>
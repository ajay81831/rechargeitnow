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
						<div id="dth" class="tab-pane fade in active">
							<form autocomplete="on" class="secondScreenForm">
								<div class="form_with-submit planBrowse newclass">					                      
									<div class="col-md-6 group dth">
										<label>V.C.No./RMN</label>      
										<input type="text" placeholder="01519704797" required>
										<span class="bar"></span>
									</div>
					                            
		                            <div class="col-md-6 customeSelect selectWithLabel mobSelectMb dth-service-provider">
			                            <div class="operator op selectOperator position_rel">
	    									<!-- <label>OPERATOR</label> -->
	    									<label class="second-label">service provider</label>
										  	<button class="dropdown_button dropdown-toggle" type="button" id="selectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    DTH
										    	<img src="assets/img/down-arrow.png">
											</button>
											<ul class="dropdown-menu animated fadeIn" aria-labelledby="selectOperator">
											   <li><a href="javascript:void(0)" data-value="action">AIRTEL DIGITAL</a></li>
											   <li><a href="javascript:void(0)" data-value="another action">SUN DIRECT</a></li>
											</ul>
											
										</div>
			                            
		                            </div>
								</div>
		                        <div class="form_with-submit planBrowse newclass">
		                         	<div class="col-md-4 group rs-select">
		                         		<label class="floatingLabel">AMOUNT</label>
		                                <input class="rechargeAmount checkNumeric"  id="cno" type="text" maxlength="4" required>
			                            <span class="highlight"></span>
			                           	<span class="rs">&#8377;</span>
			                            <span class="bar"></span>
			                            <div class="error-box">
			                            	<p>Please Fill the Amount</p>
			                            </div>
		                          	</div>
		                          	<div class="col-md-8 continueBtn" id="secondContinueBtn">
			                         	<a href="dth_screen_third.php">Continue</a>
			                        </div>
		                        </div>
	                        </form>
						</div>
					</div>
					
					
				</div>
				<!--OPERATOR-PLANS-START-->
				<div id="openPlan">
                  	<div class="operatorLogoHeading">
                     	<div class="simLogo"><img src="assets/img/vodafone-150x150.png"></div>
                     	<div class="planHeading"><p>Browse plans of <span>Vodafone </span> in Delhi NCR</p></div>
                    </div>
                    <div class="planTabs">
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
				            	<ul class="nav nav-tabs tabs-left box-inner">
				                <li class="active">
				                	<a href="#best_offer" data-toggle="tab">Best Offer</a>
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
				        <div class="col-md-9">
				            <div class="row white">
					            <div class="tab-content">
					                <div class="tab-pane active animated fadeIn" id="best_offer">
					               		<ul class="plansList">
			        						<li class="amount btn">₹ <b class="amount-figure">69</b></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹ <b class="amount-figure">69</b></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹ <b class="amount-figure">69</b></li>
			        						<li class="val"><span>Validity: </span>10 Days</li>
			        						<li class="tt"><span>Talktime:</span> 69</li>
			        						<li class="desc">
			        							Exclusive Offer- ₹ 69 TT for 10 Days
			        						</li>
			        					</ul>
			        					<ul class="plansList">
			        						<li class="amount btn">₹ <b class="amount-figure">69</b></li>
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
				        						<span class="more">
				        							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
				        						</span>
			        							
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
                    <!-- <div class="planListTable">
						<table>
							<tr>
								<th class="tableBorderRight">Plans</th><th>Amount</th><th>Validity</th><th>Talktime</th><th>Description</th>
							</tr>
							<tr>
								<th class="tableBorderRight noBorder" nowrap>Best Offer</th>
								<td nowrap><span class="amount">&#x20B9; 69</span></td>
								<td nowrap>10 Days</td>
								<td nowrap>69</td>
								<td nowrap>Exclusive Offer- &#x20B9; 69 TT for 10 Days</td>
							</tr>
							<tr>
								<th class="tableBorderRight noBorder" nowrap>Top Up</th>
								<td nowrap><span class="amount">&#x20B9; 150</span></td>
								<td nowrap>21 Days</td>
								<td nowrap>0</td>
								<td nowrap>1 GB 2G data for 21 Days</td>
							</tr>
							<tr>
								<th class="tableBorderRight noBorder" nowrap>Full Talktime</th>
								<td nowrap><span class="amount">&#x20B9; 250</span></td>
								<td nowrap>NA</td>
								<td nowrap>250</td>
								<td nowrap>Regular Talktime</td>
							</tr>
							<tr>
								<th class="tableBorderRight noBorder" nowrap>3G Data</th>
								<td nowrap><span class="amount">&#x20B9; 185</span></td>
								<td nowrap>24 Days</td>
								<td nowrap>0</td>
								<td nowrap>1.5 GB Data</td>
							</tr>
							<tr>
								<th class="tableBorderRight noBorder" nowrap>2G Data</th>
								<td nowrap><span class="amount">&#x20B9; 70</span></td>
								<td nowrap>10 Days</td>
								<td nowrap>0</td>
								<td nowrap>2 GB Data</td>
							</tr>
						</table>
                    </div> -->
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
	<?php include_once 'operator-section.php'; ?>
	<?php //include_once 'billpayment.php'; ?>
	<?php include_once 'downloadSection.php'; ?>
	<?php include_once 'alloperators.php'; ?>
</div>
<!--********************************CONTENT PART END**********************************-->
 <?php include_once 'footer.php'; ?>
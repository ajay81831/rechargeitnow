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
				<div class="row tabContentWrapper">
					<div class="col-md-12 col-sm-12 tab-content">
						<div id="mobile" class="tab-pane fade in active">
							<div class="valign">
								<div class="col-md-7 col-sm-7">
									<div class="group wow animated fadeInDown" id="singleLineInput" >
										<p>Invalid mobile number</p>
										<input id="cno" class="checkNumeric" type="number" maxlength="10" required>
										<span class="highlight"></span>
										<span class="fixedText">+91</span>
										<span class="bar"></span>
										<label class="floatingLabel">MOBILE NUMBER</label>
										<div class="clearfix"></div>
										<div class="mob_error error"></div>
		                          	</div>
									<div class="customeRadio wow animated fadeInUp" id="singleLineInput2">
		                                <ul>
		                                    <li>
		                                        <input type="radio" id="pre-option" name="radio1" value="prepaid">
		                                        <label for="pre-option">PREPAID</label>
		                                        <div class="check"></div>                                    
		                                    </li>
		                                    <li>
		                                        <input type="radio" id="post-option" name="radio1" value="postpaid">
		                                        <label for="post-option">POSTPAID</label>
		                                        <div class="check"></div>                                    
		                                    </li>
		                                </ul>
		                        	</div>
		                        	<!--Prepaid Section-->
									<div id="pre-content" class="hideon prePostWrap animated fadeInUp">
										<div class="operator op">
											<div class="position_rel preSelectOperator">
												<label class="floatLabel">OPERATOR</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="preSelectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											    OPERATOR
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu operator_select prepaid-select animated fadeIn" aria-labelledby="preSelectOperator">
												   <li><a href="javascript:void(0)" data-value="BSNL">BSNL</a></li>
												   <li><a href="javascript:void(0)" data-value="Reliance CDMA">Reliance CDMA</a></li>
												   <li><a href="javascript:void(0)" data-value="Airtel">Airtel</a></li>
												   <li><a href="javascript:void(0)" data-value="Aircel">Aircel</a></li>
												   <li><a href="javascript:void(0)" data-value="India">India</a></li>
												</ul>											
											</div>
											<p class="messages hidden-xs animated fadeIn">Change operator if ported</p>
											<figure class="operator_logo animated fadeIn">
												<img src="assets/img/voda-fone.png">
											</figure>
										</div>
										<div class="operator circle">
											<div class="position_rel preSelectCircle">
												<label class="floatLabel">CIRCLE</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="preSelectCircle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											    CIRCLE
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu animated fadeIn" aria-labelledby="preSelectCircle">
												   <li><a href="javascript:void(0)" data-value="action">Utter Pradesh West and Uttarakhand</a></li>
												   <li><a href="javascript:void(0)" data-value="another action">Utter Pradesh West</a></li>
												   <li><a href="javascript:void(0)" data-value="something else here">Utter Pradesh East</a></li>
												</ul>
												
											</div>
											<p class="messages hidden-xs animated fadeIn">Change circle if different</p>
										</div>
										<div class="clearfloat"></div>	
									</div>
									
									<!--Postpaid Section-->
									<div id="post-content" class="hideon prePostWrap animated fadeInUp">
		    							<div class="operator op postpaid-op">
											<div class="position_rel postSelectOperator">
												<label class="floatLabel">OPERATOR</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="postSelectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											     OPERATOR
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu operator_select post-select animated fadeIn" aria-labelledby="postSelectOperator">
												   <li><a href="javascript:void(0)" data-value="BSNL">BSNL</a></li>
												   <li><a href="javascript:void(0)" data-value="Reliance Jio">Reliance Jio</a></li>
												   <li><a href="javascript:void(0)" data-value="Reliance CDMA">Reliance CDMA</a></li>
												   <li><a href="javascript:void(0)" data-value="Airtel">Airtel</a></li>
												   <li><a href="javascript:void(0)" data-value="Aircel">Aircel</a></li>
												   <li><a href="javascript:void(0)" data-value="India">India</a></li>
												</ul>
												
											</div>
											<p class="messages hidden-xs animated fadeIn">Change operator if ported</p>
											<figure class="operator_logo animated fadeIn">
												<img src="assets/img/voda-fone.png">
											</figure>
										</div>
										<div class="clearfloat"></div>
									</div>
								</div>
								<div class="col-md-5 col-sm-5">
									<div class="submitRightside hideon stepOne animated fadeInRight" id="rechargeContinue">
						                <a href="javascript:void(0);">Continue</a>
						            </div>
						            <div class="submitRightside hideon stepTwo animated fadeInRight" id="rechargeContinue-1">
						                <a href="javascript:void(0);">Continue</a>
						            </div>
						            <div class="image-circle circularImg wow animated fadeInRight">
						            	<img src="assets/img/circle-img.png">	
						            </div>
								</div>
							</div>
						</div>

						<div id="jio" class="tab-pane fade">
							<div class="valign">
								<div class="col-md-7">
									<div class="group wow animated fadeInDown" id="singleLineInput" >
										<p>Invalid Service id</p>
										<input id="cno" class="checkNumeric no-prefix" type="number" maxlength="10" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="floatingLabel left-zero">SERVICE ID</label>
										<div class="clearfix"></div>
										<div class="mob_error error"></div>
		                          	</div>
									<div class="customeRadio wow animated fadeInUp" id="jio-input">
		                                <ul>
		                                    <li>
		                                        <input type="radio" id="pre-jio" name="radio1" value="prepaid">
		                                        <label for="pre-jio">PREPAID</label>
		                                        <div class="check"></div>           
		                                    </li>
		                                    <li>
		                                        <input type="radio" id="post-jio" name="radio1" value="postpaid">
		                                        <label for="post-jio">POSTPAID</label>
		                                        <div class="check"></div>
		                                    </li>
		                                </ul>
		                        	</div>

		                        	<div class="btn-continue-in jio_continue">
										<a href="javascript:void(0);">Continue</a>
									</div>
		                        	<div class="jioproCir">
			                        	<div id="jio_circle" class="circleLeft wow animated fadeInUp">
											<div class="position_rel jioCircle">
												<label class="floatLabel">CIRCLE</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="preSelectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											    CIRCLE
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu jio-circle-drop tabPad animated fadeIn data_drop" aria-labelledby="jioCircle">
												   <li><a href="javascript:void(0)">Utter Pradesh West and Uttarakhand</a></li>
												   <li><a href="javascript:void(0)">Utter Pradesh West</a></li>
												   <li><a href="javascript:void(0)">Utter Pradesh East</a></li>
												</ul>
											</div>
											<p class="messages hidden-xs animated fadeIn">Change the circle if different</p>
										</div>
										<div id="jio_product" class="productRight jioCommon wow animated fadeInUp">
											<div class="position_rel jioProduct">
												<label class="floatLabel">PRODUCT TYPE</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="preSelectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											    PRODUCT TYPE
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu jio-circle-drop animated fadeIn data_drop" aria-labelledby="jioProduct">
												   <li><a href="javascript:void(0)">Product type 1</a></li>
												   <li><a href="javascript:void(0)">Product type 2</a></li>
												   <li><a href="javascript:void(0)">Product type 3</a></li>
												</ul>
											</div>
											<p class="messages hidden-xs animated fadeIn">Change product if different</p>
										</div>
									</div>

								</div>
								<div class="col-md-5">
									<div class="hideon col-xs-12 jio-cont-one wow animated fadeInRight">
						                <a href="jio-second.php">Continue</a>
						            </div>
						            <div class="image-circle circularImg wow animated fadeInRight">
						            	<img src="assets/img/jio-logo-circle.png">	
						            </div>
								</div>
							</div>

						</div>
						<div id="datacard" class="tab-pane fade">
							<div class="valign">
								<div class="col-md-7">
									<div class="group wow animated fadeInDown" id="singleLineInput" >
										<p>Invalid mobile number</p>
										<input id="cno" class="checkNumeric" type="text" maxlength="10" required>
										<span class="highlight"></span>
										<span class="fixedText">+91</span>
										<span class="bar"></span>
										<label class="floatingLabel">MOBILE NUMBER</label>
										<div class="clearfix"></div>
										<div class="mob_error error"></div>
		                          	</div>
									<div class="customeRadio wow animated fadeInUp" id="singleLineInput2">
		                                <ul>
		                                    <li>
		                                        <input type="radio" id="pre-option-dth" name="radio1" value="prepaid">
		                                        <label for="pre-option-dth">PREPAID</label>
		                                        <div class="check"></div>                                    
		                                    </li>
		                                    <li>
		                                        <input type="radio" id="post-option-dth" name="radio1" value="postpaid">
		                                        <label for="post-option-dth">POSTPAID</label>
		                                        <div class="check"></div>                                    
		                                    </li>
		                                </ul>
		                        	</div>
		                        	<!--Prepaid Section-->
									<div id="pre-content-dth" class="hideon prePostWrap animated fadeInUp">
										<div class="operator op">
											<div class="position_rel preSelectOperator">
												<label class="floatLabel">OPERATOR</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="preSelectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											    OPERATOR
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu operator_select prepaid-select animated fadeIn" aria-labelledby="preSelectOperator">
												   <li><a href="javascript:void(0)" data-value="BSNL">BSNL</a></li>
												   <li><a href="javascript:void(0)" data-value="Reliance CDMA">Reliance CDMA</a></li>
												   <li><a href="javascript:void(0)" data-value="Airtel">Airtel</a></li>
												   <li><a href="javascript:void(0)" data-value="Aircel">Aircel</a></li>
												   <li><a href="javascript:void(0)" data-value="India">India</a></li>
												</ul>											
											</div>
											<p class="messages hidden-xs animated fadeIn">Change operator if ported</p>
											<figure class="operator_logo animated fadeIn">
												<img src="assets/img/voda-fone.png">
											</figure>
										</div>
										<div class="operator circle">
											<div class="position_rel preSelectCircle">
												<label class="floatLabel">CIRCLE</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="preSelectCircle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											    CIRCLE
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu animated fadeIn" aria-labelledby="preSelectCircle">
												   <li><a href="javascript:void(0)" data-value="action">Utter Pradesh West and Uttarakhand</a></li>
												   <li><a href="javascript:void(0)" data-value="another action">Utter Pradesh West</a></li>
												   <li><a href="javascript:void(0)" data-value="something else here">Utter Pradesh East</a></li>
												</ul>
												
											</div>
											<p class="messages hidden-xs animated fadeIn">Change circle if different</p>
										</div>
										<div class="clearfloat"></div>	
									</div>
									
									<!--Postpaid Section-->
									<div id="post-content-dth" class="hideon prePostWrap animated fadeInUp">
		    							<div class="operator op postpaid-op">
											<div class="position_rel postSelectOperator">
												<label class="floatLabel">OPERATOR</label>
											  	<button class="dropdown_button dropdown-toggle" type="button" id="postSelectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											     OPERATOR
											    	<img src="assets/img/down-arrow.png">
												</button>
												<ul class="dropdown-menu operator_select post-select animated fadeIn" aria-labelledby="postSelectOperator">
												   <li><a href="javascript:void(0)" data-value="BSNL">BSNL</a></li>
												   <li><a href="javascript:void(0)" data-value="Reliance Jio">Reliance Jio</a></li>
												   <li><a href="javascript:void(0)" data-value="Reliance CDMA">Reliance CDMA</a></li>
												   <li><a href="javascript:void(0)" data-value="Airtel">Airtel</a></li>
												   <li><a href="javascript:void(0)" data-value="Aircel">Aircel</a></li>
												   <li><a href="javascript:void(0)" data-value="India">India</a></li>
												</ul>
												
											</div>
											<p class="messages hidden-xs animated fadeIn">Change operator if ported</p>
											<figure class="operator_logo animated fadeIn">
												<img src="assets/img/voda-fone.png">
											</figure>
										</div>
										<div class="clearfloat"></div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="submitRightside hideon stepOne animated fadeInRight" id="rechargeContinue">
						                <a href="datacard-second.php">Continue</a>
						            </div>
						            <div class="submitRightside hideon col-xs-12 stepTwo animated fadeInRight" id="rechargeContinue-1">
						                <a href="datacard-second.php">Continue</a>
						            </div>
						            <div class="image-circle circularImg wow animated fadeInRight">
						            	<img src="assets/img/circle-img.png">	
						            </div>
								</div>
							</div>
						</div>
						

						<div id="dth" class="tab-pane fade">
							<div class="valign">
								<div class="col-md-7">
									<div class="position_rel dth_service wow animated fadeInDown">
										<label class="floatLabel">SERVICE PROVIDER</label>
									  	<button class="dropdown_button dropdown-toggle" type="button" id="dth_service" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    SERVICE PROVIDER
									    	<img src="assets/img/down-arrow.png">
										</button>
										<ul class="dropdown-menu dth_drop" aria-labelledby="dth_service">
										   <li><a href="javascript:void(0)" data-value="">DishTV</a></li>
										   <li><a href="javascript:void(0)" data-value="">Sun Direct</a></li>
										   <li><a href="javascript:void(0)" data-value="">Videocon D2H</a></li>
										   <li><a href="javascript:void(0)" data-value="">Airtel Digital TV</a></li>
										   <li><a href="javascript:void(0)" data-value="">Reliance Digital TV</a></li>
										   <li><a href="javascript:void(0)" data-value="">Tata Sky</a></li>
										</ul>										
									</div>

									<div class="group dth_subscriber wow animated fadeInDown" id="singleLineInput" >
										<!-- <p>Invalid mobile number</p> -->
										<input id="cno" class="checkNumeric no-prefix dth_subs_input" type="text" maxlength="10" required>
										<span class="highlight"></span>
										<span class="bar"></span>
										<label class="floatingLabel left-zero">
											Subscriber id/RMN
										</label>
										<div class="clearfix"></div>
										<div class="mob_error error"></div>
		                          	</div>
		                          	<div class="clearfix"></div>
		                          	<div class="dth_step1 wow animated down">
										<a href="" data-toggle="modal" data-target="#dthValidate">Continue</a>
										<div class="modal fade modalRIN" id="dthValidate" role="dialog">
										    <div class="modal-dialog">
										    
										      <!-- Modal content-->
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title">Validated Plan(s) from Vodafone</h4>
										        </div>
										        <div class="modal-body">
										          	<div class="subs_detail vodaValidation">
							                        	<h3>DTH Validation</h3>
							                        	<div class="vodaDetails">
								                        	<label>ID:</label>
								                        	<span>AB20154558N</span>
								                        	<div class="clearfloat"></div>
								                        	<label style="border: 0;">NAME:</label>
								                        	<span style="border: 0;">AJAY GUPTA</span>
								                        	<div class="clearfloat"></div>
							                        	</div>
							                        </div>
							                        
										        </div>
										        <div class="modal-footer">
										          	<a href="dth-second.php">Continue</a>
										        </div>
										      </div>
										      
										    </div>
										  </div>
									</div>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs">
									<div class="image-circle dth-image-circle wow animated fadeInRight">
						            	<img src="assets/img/dth-icon-circle.png">	
						            </div>
								</div>
							</div>
							<div class="col-md-12 dth_note">
								<p>
									<strong>Important: </strong><br>
									Recharging for the first time? please ensure you have correct customer id (customer id is different from smart card no.) 
								</p>
								<p>To get your customer id through sms:</p>
								<ul>
									<li>SMS id from your registered mobile no. to 9212012299 or 566777; or</li>
									<li>SMS "CID (smart card no.)" from any mobile to 9212012299 or 566777. </li>
								</ul>
								<p>e.g. "CID 4104908174" where 14908174 is your smart card no.</p>
							</div>
						</div>

						
					</div>
					<!--********INDEX-PAGE-CONTINUE-BUTTON-START*********-->
					
				</div>
			    <!--QUICK RECHARGE START-->
            	<div class="quickRecharge" data-quickRecharge = "selectOperator">
                  	<h2>one click recharge</h2>
                  	<div id="quickPick" class="owl-carousel">
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_1">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure>
		                			<img src="assets/img/mob-operator/voda-fone.png">
		                		</figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 200</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_1">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			                	</div>
		                	</div>
		                </div>
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_2">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure><img src="assets/img/mob-operator/voda-fone.png"></figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 250</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_2">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			                	</div>
		                	</div>
		                </div>
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_3">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure><img src="assets/img/mob-operator/voda-fone.png"></figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 320</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_3">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>Lorem Ipsum is simply dummy text</p>
			                	</div>
		                	</div>
		                	
		                </div>
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_4">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure><img src="assets/img/mob-operator/voda-fone.png"></figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 350</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_4">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>Lorem Ipsum is simply dummy text</p>
			                		
			                	</div>
		                	</div>
		                </div>
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_5">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure><img src="assets/img/mob-operator/voda-fone.png"></figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 400</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_5">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			                	</div>
		                	</div>
		                </div>
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_6">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure><img src="assets/img/mob-operator/voda-fone.png"></figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 450</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_6">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			                	</div>
		                	</div>
		                </div>
		                <div class="item">
		                	<a href="javascript:void(0);" class="infoIcon" id="info_7">
		                		<img src="assets/img/info_icon.svg">
		                	</a>
		                	<div class="mob_recharge lazyOwl">
		                		<figure><img src="assets/img/mob-operator/voda-fone.png"></figure>
		                		<section>
		                			<span>Vodafone</span>
		                			<span>7065196404</span>
		                			<b>Rs. 500</b>
		                		</section>
		                	</div>
		                	<div class="rechargeToolTip" id="infotool_7">
			                	<div class="wrap">
			                	<img src="assets/img/arrow-navigate-close.png">
			                		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
			                		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			                	</div>
		                	</div>
		                </div>
					</div>
					<a class="prev customNav"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		            <a class="next customNav"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		        </div>
                <!--QUICK RECHARGE END-->

             
				<div class="partnerSlider">
	                  	<div class="offer">
	                  		<div class="offerText1">Get</div>
	                  		<div class="offerText2">80</div>
	                  		<div class="offerText3">Exclusive<br>Partner Discount Coupons @ Rs.10/-</div>
	                  	</div>
	                  	<div class="slide">
	                  		<div id="owl-demo" class="owl-carousel">
				               <div class="item"><img src="assets/img/crousel/myntra.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/m2all.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/amazon.png" alt="Owl Image"></div>
				              	<div class="item"><img src="assets/img/crousel/paytm.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/Snapdeal-Logo.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/flipkart.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/BigBasket-Logo.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/Craftsvilla-Logo.png" alt="Owl Image"></div>
				                <div class="item"><img src="assets/img/crousel/Urban-Ladder-Logo.png" alt="Owl Image"></div>
				            </div>
	                  	</div>
	                  	
				        <section id="offerBanner-desk" class="hidden-xs hidden-sm">
				            <figure><img src="assets/img/green-banner.png"></figure>
				        </section>
				</div>
			</div>
			<!--RECHARGE-CATEGORIES-FORM-END-->
 		</div>
	</section>
	<?php include_once 'billpayment.php'; ?>
	<?php include_once 'downloadSection.php'; ?>
	<?php include_once 'alloperators.php'; ?>
</div>
<?php include_once 'footer.php'; ?>
<script>
$(function () {
    $(document).ready(function(){
    	<?php
    	for($i = 1; $i < 10; $i++){
    		?>
				$('#info_<?php echo $i;?>').mouseover(function(){
			        $('#infotool_<?php echo $i;?>').show();
			    });
			    $('#info_<?php echo $i;?>').mouseout(function(){
			        $('#infotool_<?php echo $i;?>').hide();
			    });
    		<?php
    	}
    	?>
    });
});
</script>





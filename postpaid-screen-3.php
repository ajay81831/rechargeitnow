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
							<form autocomplete="on">
								<div class="form_with-submit planBrowse coupon">
									<div class="col-md-4 group">
										<label>MOBILE NUMBER</label> 
										<div class="customerDetailWrap">
											<span class="fixedText">+91</span>   
											<span class="customerOperator">7065196404</span>
										</div>  
									</div>

									<div class="col-md-4 group">
										<label>OPERATOR / CIRCLE</label>
										<div class="customerDetailWrap">
											<span class="customerOperator">Vodafone / Delhi NCR</span>
										</div>
									</div>
									<div class="col-md-4 group">
										<label>AMOUNT
										<a class="editAmount" href="screen_second.php">
											<i class="fa fa-pencil"></i>
											<span class="editCaption">Edit</span>
										</a>
										</label>
										<div class="customerDetailWrap">
											<span class="customerOperator">150</span>	
										</div>
									</div>
								</div>
								<div class="form_with-submit planBrowse coupon sm">
									<div class="col-md-4 group">
										<label>COLLECTION CHARGE</label> 
										<div class="customerDetailWrap">
											<span class="fixedText">&#8377;</span>   
											<span class="customerOperator">10</span>
										</div>  
									</div>
									<div class="col-md-8 group">
										<div class="control-group">
											<div class="checkbox redeem_check">
												<label class="control control--checkbox redem_check">
													<input type="checkbox" name="redeem" id="redeem"/>
													<div class="control__indicator"></div>
												</label>
												<label for="redeem" class="redeem">REDEEM RECHARGE COUPON</label> 
												<div class="help" data-toggle="modal" data-target="#howToUse">
												</div> 
											</div>
										</div>										
										<div class="applycode hideon animated fadeIn">
											<input type="text" id="coupon" placeholder="XX-XXXX-XXXX">
											<span class="highlight"></span>
											<span class="bar"></span>
											<span class="apply">APPLY</span>
											<span class="trashIcon"><img src="assets/img/trash.png"></span>
										</div>
										<span class="bar"></span>
										<div class="offerGet postpiad-redeem">
											<p><span>&#8377; 100 </span><strong>redeem,</strong>
												please pay these difference of &#8377;400 during checkout
											</p>
										</div>
									</div>
									<div class="col-md-12 continueBtn">
										<a href="screen_fourth.php" id="payMoney">Continue</a>
									</div>

									<div class="clearfloat"></div>
									<!-- <div class="offerGet postpiad-redeem">
										<p><span>&#8377; 100 </span><strong>redeem,</strong>
											please pay these difference of &#8377;400 during checkout
										</p>
									</div> -->
								</div>
								
							</form>
						</div>
					</div>
				</div>

				<div class="totalOffer">
					<div class="control-group">
						<div class="checkbox">
							<label class="control control--checkbox">
								<input type="checkbox" id="selectOffer" checked="checked" name="selectOffer"/>
								<div class="control__indicator"></div>
							</label>
							<p>
								Get <span><b>72 </b>PARTNER DISCOUNT COUPONS</span> WORTH THOUSANDS ONLY @ &#x20B9;10
							</p>
						</div>
					</div>
				</div>
				<div class="unlockCoupon checkedOffer animated">
					<div class="header"><h2>unlocked coupon</h2></div>
					<div class="couponShop">
						<ul class="nav nav-pills userOff">
						    <li class="active"><a data-toggle="pill" href="#justadded">Latest</a></li>
						    <li><a data-toggle="pill" href="#food">food</a></li>
						    <li><a data-toggle="pill" href="#travel">Travel</a></li>
						    <li><a data-toggle="pill" href="#shopping">shopping</a></li>
						    <li><a data-toggle="pill" href="#others">others</a></li>
						</ul>
						<div class="tab-content">
							<div id="justadded" class="tab-pane fade in active">
								<ul class="listOfCompany">
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/dominos.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Domino's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
									</li>
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/mac.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Mcdonald's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
					      			</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/goibibo-logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Goibibo</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/flip.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Flipkart</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/snapdeal_logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Snapdeal</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/myntra.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Myntra</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/unnamed2-200x200.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Uber</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/nearby.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Nearbuy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/swiggy.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Swiggy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
								</ul>
							</div>
							<div id="food" class="tab-pane fade">
								<ul class="listOfCompany">
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/dominos.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Domino's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
									</li>
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/mac.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Mcdonald's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
					      			</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/goibibo-logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Goibibo</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/flip.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Flipkart</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/snapdeal_logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Snapdeal</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/myntra.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Myntra</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/unnamed2-200x200.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Uber</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/nearby.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Nearbuy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/swiggy.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Swiggy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
								</ul>
							</div>
							<div id="travel" class="tab-pane fade">
								<ul class="listOfCompany">
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/dominos.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Domino's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
									</li>
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/mac.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Mcdonald's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
					      			</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/goibibo-logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Goibibo</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/flip.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Flipkart</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/snapdeal_logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Snapdeal</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/myntra.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Myntra</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/unnamed2-200x200.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Uber</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/nearby.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Nearbuy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/swiggy.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Swiggy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
								</ul>
							</div>
							<div id="shopping" class="tab-pane fade">
								<ul class="listOfCompany">
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/dominos.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Domino's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
									</li>
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/mac.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Mcdonald's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
					      			</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/goibibo-logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Goibibo</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/flip.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Flipkart</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/snapdeal_logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Snapdeal</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/myntra.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Myntra</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/unnamed2-200x200.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Uber</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/nearby.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Nearbuy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/swiggy.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Swiggy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
								</ul>
							</div>
							<div id="others" class="tab-pane fade">
								<ul class="listOfCompany">
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/dominos.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Domino's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
									</li>
									<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/mac.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Mcdonald's</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
					      			</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/goibibo-logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Goibibo</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/flip.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Flipkart</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/snapdeal_logo.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Snapdeal</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/myntra.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Myntra</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/unnamed2-200x200.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Uber</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/nearby.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Nearbuy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
							      	<li class="col-lg-4 col-sm-6 celebCoupon">
							      		<a href="">
							      			<span class="offerCompanyLogo valign">
							      				<img src="assets/img/swiggy.png">
							      			</span>
							      			<span class="offerDetails valign">
							      				<b class="nameOfCompany">Swiggy</b>
							      				<span class="offerName">Monday Munchy:</span>
							      				<span class="offerpercent">Get 20% off on 400 at Dominos</span>
							      			</span>
							      		</a>
							      	</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="unlockCoupon missedOffer hideon animated slideInLeft">
					<div class="header"><h2>Missed Coupons</h2></div>
					<div class="couponShop missedCoupon">
						<h3>You are missing out on availing great partner offers!</h3>
						<h4>You may select checkbox to include all partnet coupons</h4>
					</div>
					<div class="offer">
                  		<div class="offerText1">Get</div>
                  		<div class="offerText2">80</div>
                  		<div class="offerText3">Exclusive<br>Partner Discount Coupons @ Rs.10/-</div>
                  	</div>
				</div>
			</div>
			<!--RECHARGE-CATEGORIES-FORM-END-->
 		</div>
	</section>
	<?php include_once 'billpayment.php'; ?>
	<?php include_once 'downloadSection.php'; ?>
	<?php include_once 'alloperators.php'; ?>
</div>
<!--********************************CONTENT PART END**********************************-->
<!-- How to use Modal -->
<?php include_once 'howToUseCoupon.php'; ?>
           
<?php include_once 'footer.php'; ?>
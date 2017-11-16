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
			<div id="prepaidPayment">
				<div class="container">
			    	<div class="row">
			      		<div class="paymentHeader">
			        		<h3>CONFIRM YOUR PAYMENT METHOD</h3>
			      		</div>
			      		<div class="paymentBody">
							<div class="mobDivider">
								<ul>
								  <li>mobile number</li>
								  <li>operator</li>
								  <li>service type</li>
								  <li>Circle</li>
								  <li>Plan</li>
								</ul>
								<ul>
								  <li>8459171067</li>
								  <li>MTS</li>
								  <li>MBlaze</li>
								  <li>delhi &amp; ncr</li>
								  <li>Topup</li>
								</ul>
							</div>
							<div class="mobDivider-2">
								<ul>
								  <li>Recharge Amount</li>
								  <li>COUPONS PURCHASED</li>
								  <li>DISCOUNT</li>
								</ul>
								<ul>
								  <li>&#8377;399</li>
								  <li>&#8377;30</li>
								  <li>&#8377;20</li>
								</ul>
							</div>
			      		</div>
						<div class="totalAmount">
							<figure>
								<img src="assets/img/vodafone.gif">
							</figure>
							<div class="payableAmount">
								<b>total payable amount</b>
								<span>&#8377;359</span>
							</div>
						</div>
			      	</div>
			  	</div>

				<div class="paymentGateway">
					<div class="payDeskWrapper hidden-xs">
						<div class="payUsing">
							<b>pay using</b>
						</div>
					  	<div class="container">
							<ul class="nav nav-pills paymentHeader">
								<li class="active"><a data-toggle="pill" href="#netbank">netbanking</a></li>
								<li><a data-toggle="pill" href="#debit">debit card</a></li>
								<li><a data-toggle="pill" href="#credit">credit card</a></li>
								<li><a data-toggle="pill" href="#payu">payumoney</a></li>
								<li><a data-toggle="pill" href="#imps">imps</a></li>
								<li><a data-toggle="pill" href="#wallet">wallet</a></li>
							</ul>
					  		<div class="tab-content">
							    <div id="netbank" class="tab-pane fade in active">
								    <h4>select your card type</h4>
								    <ul class="bankList">
								      	<li class="bankname">
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li class="bankname">
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/hdfc.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li class="bankname">
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/icici.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li class="bankname">
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/hdfc.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li class="bankSearch" id="searchfield">
								      		<form><input type="text" name="currency" class="biginput" id="autocomplete" placeholder="Other Banks">
								      		<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								      		</form>
								      	</li>
								    </ul>
									<div class="continueBtn payBtn">
										<a href="payment_success.php">Continue</a>
									</div>
							    </div>

							    <div id="debit" class="tab-pane fade">
									<h4>select your card type</h4>
									<ul class="bankList">
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/hdfc.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/icici.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li class="bankSearch">
									  		<input type="search" name="otherbank" placeholder="Other Bank">
									  		<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									  	</li>
									</ul>
								    <div class="continueBtn payBtn">
								      	<a href="payment_success.php">Continue</a>
								    </div>
							    </div>

							    <div id="credit" class="tab-pane fade">
									<h4>select your card type</h4>
									<ul class="bankList">
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/visa.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>

								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/mastercard.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/visa.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/american-express.jpg"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								    </ul>
									<div class="continueBtn payBtn">
										<a href="payment_failure.php">Continue</a>
									</div>
							    </div>

							    <div id="payu" class="tab-pane fade">
							      <h4>select your card type</h4>
									<ul class="bankList">
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/visa.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/mastercard.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/visa.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/american-express.jpg"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								    </ul>
									<div class="continueBtn payBtn">
										<a href="account.php">Continue</a>
									</div>
							    </div>

							    <div id="imps" class="tab-pane fade">
							     <h4>select your card type</h4>
									<ul class="bankList">
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/Paytm-Logo.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/mobikwik-logo.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/logo-payu.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								      	<li>
								      		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/mobikwik-logo.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
								      	</li>
								    </ul>
									<div class="continueBtn payBtn">
										<a href="account.php">Continue</a>
									</div>
							    </div>

							    <div id="wallet" class="tab-pane fade">
									<h4>select one to make payment</h4>
									<ul class="bankList">
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/Paytm-Logo.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/mobikwik-logo.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/logo-payu.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									  	<li>
									  		<label class="cardselect">
									      		<figure><img src="assets/img/banklogo/logo-payu.png"></figure>
									      		<input type="radio" name="radio">
									      	</label>
									  	</li>
									</ul>
									<div class="continueBtn payBtn">
										<a href="account.php">Continue</a>
									</div>
							    </div>
					  		</div>
						</div>
					</div>
					<div class="payMobWrapper hidden-sm hidden-md hidden-lg">
						<div class="container">
							<div class="row">
								<div class="payHeader"><b>Pay using</b></div>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">netbanking</a>
											</h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="panel-body">
												<b>Select your card type</b>
												<ul class="bankList">
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/hdfc.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/icici.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankSearch" id="searchfield">
											      		<form><input type="text" name="currency" class="biginput" id="autocomplete" placeholder="Other Banks">
											      		<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
											      		</form>
											      	</li>
											    </ul>
												<div class="col-md-12 continueBtn payBtn">
													<a href="account.php">Continue</a>
												</div>
											    
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">debit card</a>
											</h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="panel-body">
												<b>Select your card type</b>
												<ul class="bankList">
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/hdfc.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/sbi.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/icici.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankSearch" id="searchfield">
											      		<form><input type="text" name="currency" class="biginput" id="autocomplete" placeholder="Other Banks">
											      		<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
											      		</form>
											      	</li>
											    </ul>
												<div class="col-md-12 continueBtn payBtn">
													<a href="account.php">Continue</a>
												</div>
											    
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">credit card</a>
											</h4>
										</div>
										<div id="collapse3" class="panel-collapse collapse">
											<div class="panel-body">
											<b>Select your card type</b>
											<ul class="bankList">
										      	<li class="bankname">
										      		<label class="cardselect cardType">
											      		<figure><img src="assets/img/banklogo/visa.png"></figure>
											      		<input type="radio" name="radio">
											      	</label>
										      	</li>
										      	<li class="bankname">
										      		<label class="cardselect cardType">
											      		<figure><img src="assets/img/banklogo/mastercard.png"></figure>
											      		<input type="radio" name="radio">
											      	</label>
										      	</li>
										      	<li class="bankname">
										      		<label class="cardselect cardType">
											      		<figure><img src="assets/img/banklogo/visa.png"></figure>
											      		<input type="radio" name="radio">
											      	</label>
										      	</li>
										      	<li class="bankname">
										      		<label class="cardselect cardType">
											      		<figure><img src="assets/img/banklogo/american-express.jpg"></figure>
											      		<input type="radio" name="radio">
											      	</label>
										      	</li>
										    </ul>
											<div class="col-md-12 continueBtn payBtn">
												<a href="account.php">Continue</a>
											</div>
											
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">payumoney</a>
											</h4>
										</div>
										<div id="collapse4" class="panel-collapse collapse">
											<div class="panel-body">
												<b>Select your card type</b>
												<ul class="bankList">
											      	<li class="bankname">
											      		<label class="cardselect cardType">
												      		<figure><img src="assets/img/banklogo/visa.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect cardType">
												      		<figure><img src="assets/img/banklogo/mastercard.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect cardType">
												      		<figure><img src="assets/img/banklogo/visa.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											      	<li class="bankname">
											      		<label class="cardselect cardType">
												      		<figure><img src="assets/img/banklogo/american-express.jpg"></figure>
												      		<input type="radio" name="radio">
												      	</label>
											      	</li>
											    </ul>
												<div class="col-md-12 continueBtn payBtn">
													<a href="account.php">Continue</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">imps</a>
											</h4>
										</div>
										<div id="collapse5" class="panel-collapse collapse">
											<div class="panel-body">
												<b>Select your card type</b>
												<ul class="bankList">
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/Paytm-Logo.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/mobikwik-logo.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/logo-payu.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/Paytm-Logo.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												</ul>
												<div class="col-md-12 continueBtn payBtn">
													<a href="account.php">Continue</a>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">wallet</a>
											</h4>
										</div>
										<div id="collapse6" class="panel-collapse collapse">
											<div class="panel-body">
												<b>select one to make payment</b>
												<ul class="bankList">
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/Paytm-Logo.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/mobikwik-logo.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/logo-payu.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												  	<li class="bankname">
												  		<label class="cardselect">
												      		<figure><img src="assets/img/banklogo/mobikwik-logo.png"></figure>
												      		<input type="radio" name="radio">
												      	</label>
												  	</li>
												</ul>
												<div class="col-md-12 continueBtn payBtn">
													<a href="account.php">Continue</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
 <?php include_once 'footer.php'; ?>
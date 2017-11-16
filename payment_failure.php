<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
	<section id="product">
		<div class="container">
			<div class="static-page">
				<div class="col-md-12">
					<div class="successWrapper failure animated slideInDown">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-4">
									<figure>
										<img src="assets/img/something-wrong_1.png">
									</figure>
								</div>
								<div class="col-md-8">
									<h3>We are sorry but the transaction is failed.</h3>
									<p>Transaction failed because the customer does not have the necessary funds or he has given a wrong expiry date.</p>	
									<ul>
										<li>
											<a href="index.php"><i class="fa fa-repeat" aria-hidden="true"></i> Retry</a>
										</li>
										<li>
											<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>home</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="successDetails animated slideInUp">
						<div class="redirect-text">
							<p>
								Retry transaction with corrected card details. Alternatively, retry the transaction using another means of payments..
							</p>
							
						</div>	
						<div class="add-banner-success">
							<img src="assets/img/payment-banner.png">
						</div>
						
					</div>
					<div class="secure-notification">
						<p>
							<b>NOTE:</b>
							Making Payment on PayU is 100% safe. Your transaction is processed through a secure https internet connection based on secure socket layer technology.
						</p>
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

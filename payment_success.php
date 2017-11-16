<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
	<section id="product">
		<div class="container">
			<div class="static-page">
				<div class="col-md-12">
					<div class="successWrapper animated slideInDown">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-4">
									<figure><img src="assets/img/Success.png"></figure>	
								</div>
								<div class="col-md-8">
									<h3>Thank you for the Payment!</h3>
									<p>Your request has been submitted for recharge/bill pay.</p>
									<span>To check recharge / bill pay status, click on <a href="account.php">my account</a></span>
									<ul>
										<li>
											<a href="index.php"><i class="fa fa-repeat" aria-hidden="true"></i> start again</a>
										</li>
										<li>
											<a href="account.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> my account</a>
										</li>
										<li>
											<a href="printreceipt.php"><i class="fa fa-print" aria-hidden="true"></i> print receipt</a>
										</li>
									</ul>	
								</div>
							</div>
						</div>
					</div>
					
					<div class="successDetails animated slideInUp">
						<div class="redirect-text">
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page.
								<a href="javascript:void(0);" data-toggle="modal" data-target="#redirectModal">Click Here.</a>
							</p>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when you are being redirected...
								<a href="javascript:void(0);">Click Here</a> to stop. 
								<i class="fa fa-spinner fa-pulse fa fa-fw"></i>
							</p>
						</div>	
						<div class="add-banner-success">
							<img src="assets/img/payment-banner.png">
						</div>
						<div class="summury">
							<h3>RECEIPT</h3>
							<table>
								<tr>
									<th nowrap>order id</th>
									<td nowrap>ID00866129B6</td>
								</tr>
								<tr>
									<th nowrap>date &amp; time</th>
									<td nowrap>28/11/2016 | 12:27</td>
								</tr>
								<tr>
									<th nowrap>mobile no. / subscriber id</th>
									<td nowrap>7065196404</td>
								</tr>
								<tr>
									<th nowrap>recharge / bill pay amount</th>
									<td nowrap><span>Rs.</span> 20</td>
								</tr>
								<tr>
									<th nowrap>convenience fee*<span>(for partner discount coupon)</span></th>
									<td nowrap><span>Rs.</span> 10</td>
								</tr>
								<tr>
									<th nowrap>coupon face value</th>
									<td nowrap>n/a</td>
								</tr>
								<tr>
									<th nowrap>amount paid</th>
									<td nowrap><span>Rs.</span> 10</td>
								</tr>
							</table>
						</div>
						<span class="serviceTax">** Inclusive of Service Tax</span>
						<div class="partnerDiscount">
							<p>Partner Discount Coupons are on your way. Please check your registered email ID.</p>
						</div>
						<div class="receipt-address">
							<h4>Online Recharge Services Pvt Ltd</h4>
							<p>
								Estel House, Plot No. 126,<br>
								Sector-44, Institutional Area,<br>
								Gurgaon 122002 (Haryana) India<br>
								PAN No. AABCG8267F
							</p>
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

 <div class="modal fade redirect-modal" id="redirectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmation Popup</h4>
      </div>
      <div class="modal-body">
        	<p>Are you sure want to be redirected?</p>
	      <div class="redirect-btn">
	        <button type="button" class="btn btn-no" data-dismiss="modal">NO</button>
	        <button type="button" class="btn btn-yes" data-dismiss="modal">YES</button>
	      </div>
      </div>
    </div>
  </div>
</div>

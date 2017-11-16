<?php include_once 'header-account.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
	<section id="product">
		<div class="container mobileContainerFullWidth">
			<div id="customerAccount">
				<div class="accountWrapper">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7">
								<div class="customerName">
									<span class="firstLetter">a</span>
									<div class="nameEmail">
										<b>ajay kumar gupta</b>
										<span class=userEmail>ajay.gupta@canbrand.in</span>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-5">
								<div class="rewardsBtn">
								
									<a href="account.php"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
				<div class="receipt-container">
					<div class="col-md-8 col-md-offset-2">
						<!-- <h3 class="receipt-title">Transaction Summary Slip</h3> -->
						<h4>
							Hi Rahul,<br>
							Please Enter Email Id to Send your Transaction Receipt with Order ID <strong>AIB1199813A6</strong>
						</h4>

						<form class="emailReceiptForm">
							<div class="form_with-submit changePasswordForm planBrowse newclass">
	                         	<div class="group">
									<input type="text" required="" spellcheck="off">
									<span class="highlight"></span>
									<span class="bar"></span>
									<label class="floatingLabel">Enter your Email Id</label>
	                          	</div>
	                          	
	                          	<div class="subBtn">
	                          		<button type="button" class="" data-toggle="modal" data-target="#emailSubmit">Submit</button>
	                          		<div class="modal fade succMsg" id="emailSubmit" role="dialog">
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

<?php include_once 'header.php'; ?>
<!--********************************CONTENT PART START**********************************-->
<div id="content">
	<section id="product">
		<div class="container">
			<div class="scheme-plan">
				<div class="col-md-12">		
					<h2 class="page-title">Prepaid Plans &amp; Schemes</h2>
				</div>
				<div class="col-md-12 customeSelect selectWithLabel mobSelectMb">
                    <div class="operator selectOperator position_rel">
						<label>SERVICE</label>
					  	<button class="dropdown_button dropdown-toggle" type="button" id="selectOperator" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    SELECT
					    	<img src="assets/img/down-arrow.png">
						</button>
						<ul class="dropdown-menu animated fadeIn" aria-labelledby="selectOperator">
						   <li><a href="javascript:void(0)" data-value="action">MOBILE</a></li>
						   <li><a href="javascript:void(0)" data-value="another action">DATA</a></li>
						</ul>
					</div>
                    <div class="operator selectCircle position_rel ">
						<label>OPERATOR</label>
					  	<button class="dropdown_button dropdown-toggle" type="button" id="selectCircle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    SELECT
					    	<img src="assets/img/down-arrow.png">
						</button>
						<ul class="dropdown-menu animated fadeIn" aria-labelledby="selectCircle">
						   <li><a href="javascript:void(0)" data-value="action">AIRTEL</a></li>
						   <li><a href="javascript:void(0)" data-value="another action">BSNL</a></li>
						   <li><a href="javascript:void(0)" data-value="something else here">IDEA</a></li>
						</ul>
					</div>
					<div class="operator selectCircle-2 position_rel ">
						<label>CIRCLE</label>
					  	<button class="dropdown_button dropdown-toggle" type="button" id="selectCircle-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    SELECT
					    	<img src="assets/img/down-arrow.png">
						</button>
						<ul class="dropdown-menu animated fadeIn" aria-labelledby="selectCircle-2">
						   <li><a href="javascript:void(0)" data-value="action-2">DELHI/NCR</a></li>
						   <li><a href="javascript:void(0)" data-value="another action-3">UP EAST</a></li>
						   <li><a href="javascript:void(0)" data-value="something else here-3">ANDHRA</a></li>
						</ul>
					</div>
					<div class="operator selectCircle-3 position_rel ">
						<label>SERVICE TYPE</label>
					  	<button class="dropdown_button dropdown-toggle" type="button" id="selectCircle-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    SELECT
					    	<img src="assets/img/down-arrow.png">
						</button>
						<ul class="dropdown-menu animated fadeIn" aria-labelledby="selectCircle-3">
						   <li><a href="javascript:void(0)" data-value="action">2G DATA</a></li>
						   <li><a href="javascript:void(0)" data-value="another action">3G DATA</a></li>
						   <li><a href="javascript:void(0)" data-value="something else here">4G DATA</a></li>
						</ul>
					</div>

                </div>
                <div class="col-md-8 continueBtn">
                 	<button class="viewScheme hidden-lg hidden-md hidden-sm" data-toggle="modal" data-target="#plans-modal">Continue</a>
                 	<button class="viewScheme desk-btn hidden-xs">Continue</a>
                </div>
                <div class="clearfix"></div>
                <!--DESKTOP-PLANS-TABLE-->
				<div class="col-lg-12 col-md-12 hidden-xs animated slideInUp scheme-table">
					<table>
						<tr>
							<th>mrp</th>
							<th nowrap>talk time</th>
							<th nowrap>validity</th>
							<th nowrap>plan type</th>
							<th nowrap>description</th>
						</tr>
						<tr>
							<td>10.00</td>
							<td>7.70</td>
							<td>N/A</td>
							<td>T</td>
							<td>7.7 Talk Time</td>
						</tr>
						<tr>
							<td>21.00</td>
							<td>N/A</td>
							<td>7 Days</td>
							<td>S</td>
							<td nowrap>All Local Calls @ 30p/min</td>
						</tr>
						<tr>
							<td>22.00</td>
							<td>N/A</td>
							<td>10 Days</td>
							<td>S</td>
							<td nowrap>85 MB (Data 2G/3G)</td>
						</tr>
						<tr>
							<td>25.00</td>
							<td>N/A</td>
							<td>5 Days</td>
							<td>S</td>
							<td nowrap>All Local A-A calls @ 10p/min (1st 60 sec call of the day @1.6p/sec )</td>
						</tr>
						<tr>
							<td>10.00</td>
							<td>7.70</td>
							<td>N/A</td>
							<td>T</td>
							<td nowrap>7.7 Talk Time</td>
						</tr>
						<tr>
							<td>25.00</td>
							<td>N/A</td>
							<td>5 Days</td>
							<td>S</td>
							<td nowrap>All Local A-A calls @ 10p/min (1st 60 sec call of the day @1.6p/sec )</td>
						</tr>
						<tr>
							<td>25.00</td>
							<td>N/A</td>
							<td>5 Days</td>
							<td>S</td>
							<td nowrap>All Local A-A calls @ 10p/min (1st 60 sec call of the day @1.6p/sec )</td>
						</tr>
						<tr>
							<td>10.00</td>
							<td>7.70</td>
							<td>N/A</td>
							<td>T</td>
							<td nowrap>7.7 Talk Time</td>
						</tr>
						<tr>
							<td>10.00</td>
							<td>7.70</td>
							<td>N/A</td>
							<td>T</td>
							<td nowrap>7.7 Talk Time</td>
						</tr>
						<tr>
							<td>10.00</td>
							<td>7.70</td>
							<td>N/A</td>
							<td>T</td>
							<td nowrap>7.7 Talk Time</td>
						</tr>
					</table>
				</div>
				<!--MOBILE-PLANS-TABLE-->
				<div class="mobile-plans-wrapper modal fade hidden-sm hidden-md hidden-lg" id="plans-modal">
					<div class="modal-header" style="background: #fff">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <div class="operator-name">
			          	<h1><img src="assets/img/voda-symbol.png"></h1>
			          	<span class="name-of-operator">VODAFONE</span>
			          </div>
			        </div>
					<div class="">
					<div class="mobile-plan-view">
						<ul class="container">
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
							<li>
								<a href="">
									<strong>
										<span class="bold-head left-align">mrp : <b>10</b></span>
										<span class="bold-head right-align">talk time : <b>7.70</b></span>
									</strong>
									<strong>
										<span class="validity left-align">plan type : <b>T</b></span>
										<span class="validity right-align">validity : <b>N / A</b></span>
									</strong>
									<strong>
										<p><b>Description : </b>7.7 talk time</p>
									</strong>
								</a>
							</li>
						</ul>
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

@extends('layout')
@section('content')<!DOCTYPE html>

	
	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/banner/bnr3.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Become A Fundraiser</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Become A Fundraiser</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Form Contant -->
		<section class="content-inner-1 section-pattren1 overlay-white-dark" style="background-image:url('images/background/bg4.jpg'); background-repeat: no-repeat; background-size: cover;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="form-wrapper overflow-hidden">
							<div id="smartwizard" class="form-wizard">
								<ul class="nav nav-wizard">
									<li><a class="nav-link" href="#wizard_Time">01</a></li>
									<li><a class="nav-link" href="#wizard_Service">02</a></li>
									<li><a class="nav-link" href="#wizard_contact">03</a></li>
									<li><a class="nav-link" href="#wizard_info">04</a></li>
								</ul>
								<div class="tab-content">
									<div id="wizard_Time" class="tab-pane" role="tabpanel">
										<h4 class="title">Where are you located? </h4>
										<div class="row sp15">
											<div class="col-md-6">
												<label class="form-label">Country</label>
												<div class="input-group">
													<select class="default-select form-select style-3">
														<option>India</option>
														<option>United Kingdom</option>
														<option>United State Of America</option>
														<option>Japan</option>
														<option>England</option>
														<option>Russia</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<label class="form-label">Postcode</label>
												<div class="input-group">
													<input name="dzName" required="" type="text" class="form-control" placeholder="324009">
												</div>
											</div>
										</div>
										<div class="tag-donate style-1">
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
												   <label class="form-check-label" for="flexCheckDefault1">
														<span>Animals</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
												   <label class="form-check-label" for="flexCheckDefault2">
														<span>Business</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
												   <label class="form-check-label" for="flexCheckDefault3">
														<span>Community</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
												   <label class="form-check-label" for="flexCheckDefault4">
														<span>Creative</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
												   <label class="form-check-label" for="flexCheckDefault5">
														<span>Education</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
												   <label class="form-check-label" for="flexCheckDefault6">
														<span>Emergencies</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
												   <label class="form-check-label" for="flexCheckDefault7">
														<span>Environment</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
												   <label class="form-check-label" for="flexCheckDefault8">
														<span>Events</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
												   <label class="form-check-label" for="flexCheckDefault9">
														<span>Faith</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
												   <label class="form-check-label" for="flexCheckDefault10">
														<span>Family</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
												   <label class="form-check-label" for="flexCheckDefault11">
														<span>Funeral & Memorial</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
												   <label class="form-check-label" for="flexCheckDefault12">
														<span>Medical</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
												   <label class="form-check-label" for="flexCheckDefault13">
														<span>Other</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
												   <label class="form-check-label" for="flexCheckDefault14">
														<span>Sports</span>
												   </label>
												</div>
											</div>
											<div class="donate-categories">
												<div class="form-check">
												   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
												   <label class="form-check-label" for="flexCheckDefault15">
														<span>Travel</span>
												   </label>
												</div>
											</div>
										</div>
									</div>
									<div id="wizard_Service" class="tab-pane" role="tabpanel">
										<h4 class="title">What's your name?</h4>
										<div class="row sp15">
											<div class="col-md-6">
												<label class="form-label">First Name</label>
												<div class="input-group">
													<input name="dzName" required="" type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-md-6">
												<label class="form-label">Last Name</label>
												<div class="input-group">
													<input name="dzName" required="" type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-6">
												<label class="form-label">Phone Number</label>
												<div class="input-group">
													<input name="dzPhoneNumber" required="" type="text" class="form-control" placeholder="832141251">
												</div>
											</div>
											<div class="col-md-6">
												<label class="form-label">Email address</label>
												<div class="input-group">
													<input name="dzEmail" required="" type="text" class="form-control" placeholder="marseloque@mail.com">
												</div>
											</div>
										</div>
									</div>
									<div id="wizard_contact" class="tab-pane" role="tabpanel">
										<h4 class="title">Your initial target</h4>
										<div class="row sp15">
											<div class="col-md-12">
												<div class="form-group mb-0 row style-1 align-items-center">
													<label class="form-label">Amount</label>
													<div class="input-group">
														<input type="number" class="form-control" placeholder="Amount">
													</div>
												</div>
											</div>
										</div>
										<p>Bear in mind that transaction fees, including credit and debit charges, are deducted from each donation.</p>
										<div class="target-bx bg-grey">
											<p>To receive money raised, please make sure:</p>
											<ol>
												<li>A passport or an Australian driving licence</li>
												<li>A bank account in Australia</li>
												<li>A postal address in Australia</li>
											</ol>
										</div>
									</div>
									<div id="wizard_info" class="tab-pane" role="tabpanel">
										<h4 class="title">Tell Me about Patient</h4>
										<div class="row">
											<div class="col-md-12">
												<label class="form-label">Name</label>
												<div class="input-group">
													<input name="dzName" required="" type="text" class="form-control" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Phone Number</label>
												<div class="input-group">
													<input name="dzPhoneNumber" required="" type="text" class="form-control" placeholder="832141251">
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Medical Condition</label>
												<div class="clearfix m-b0 m-b20 m-sm-b10">
													<select class="default-select form-select style-3">
														<option>Does Not Require Hospitalisation</option>
														<option>Require Hospitalisation</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Age</label>
												<div class="clearfix m-b0 m-b20 m-sm-b10">
													<select class="default-select form-select style-3">
														<option>40 Years</option>
														<option>50 Years</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<label class="form-label">Enter Your City</label>
												<div class="input-group">
													<input name="dzName" required="" type="text" class="form-control" placeholder="Kota,Rajathan,India">
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
		</section>
		<!-- Form Contant -->
		
	</div>
		
   @endsection
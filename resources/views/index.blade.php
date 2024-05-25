<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="description" content="Akcel Crowdfunding & Charity is a Responsive HTML Template that can be used to build Non-Profit, Charity Website. Template is well designed and well coded and flexible">
	<meta property="og:title" content="Akcel - Crowdfunding & Charity HTML5 Template">
	<meta property="og:description" content="Akcel Crowdfunding & Charity is a Responsive HTML Template that can be used to build Non-Profit, Charity Website. Template is well designed and well coded and flexible">
	<meta property="og:image" content="https://akcel.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>Akcel - Crowdfunding & Charity HTML5 Template</title>
	
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('/favicon.png')}}">
    
	<!-- Stylesheet -->
    <link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
	
	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	
	<link rel="stylesheet" href="{{asset('vendor/switcher/switcher.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/rangeslider/rangeslider.css')}}">
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	
</head>
<body id="bg">
<div id="loading-area" class="loading-page-1">
	<div class="loading-inner">
		<div class="item-wrapper">
			<img class="item1" src="{{asset('images/hand1.png')}}" alt="">
			<img class="item2" src="{{asset('images/hand2.png')}}" alt="">
			<img class="item3" src="{{asset('images/heart.png')}}" alt="">
		</div>
		<div class="load-text">
			<span data-text="A" class="text-load">A</span>
			<span data-text="k" class="text-load">k</span>
			<span data-text="C" class="text-load">C</span>
			<span data-text="E" class="text-load">E</span>
			<span data-text="L" class="text-load">L</span>
		</div>
	</div>
</div> 
<div class="page-wraper">

	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Top Header -->
		<div class="top-bar">
			<div class="container">
				<div class="dz-topbar-inner d-flex justify-content-between align-items-center">
					<div class="dz-topbar-left">
						<ul>
							<li>Welcome to Akcel, Crowdfunding & Charity Agency</li>
							<li>
								<a href="javascript:void(0);" class="badge badge-primary btn-login" data-bs-toggle="modal" data-bs-target="#modalLogin">
									<i class="flaticon-logout me-2" ></i>Login / Sign Up
								</a>
							</li>
						</ul>
					</div>
					<div class="dz-topbar-right">
						<ul>
							<li><i class="fas fa-map-marker-alt"></i> 394-091-3312</li>
							<li><i class="fas fa-envelope"></i>support@akcel.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header mostion logo-dark">
						<a href="{{url('/')}}"><img src="{{asset('images/tamil_final_logo.jpg')}}" alt=""></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- Extra Nav -->
					<div class="extra-nav">
						<div class="extra-cell">
							<a href="{{url('/contact')}}" class="btn btn-outline-secondary btnhover1">
								<i class="fa-solid fa-user"></i>
								<span class="m-l10">My Account</span>
							</a>
						</div>
					</div>
					
					<!-- Header Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
						</div>
						<ul class="nav navbar-nav navbar navbar-left">	
							<li class="sub-menu-down"><a href="javascript:void(0);">Home</a>
								<ul class="sub-menu">
									<li><a href="{{url('/')}}">Home 1</a></li>
									<li><a href="{{url('/index2')}}">Home 2</a></li>
									<li><a href="{{url('/index3')}}">Home 3</a></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);">Pages</a>
								<ul class="sub-menu">
									<li><a href="{{url('/about_us')}}">About Us</a></li>
									<li><a href="javascript:void(0);">Volunteer <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="{{url('/volunteer')}}">Volunteer</a></li>
											<li><a href="{{url('/become_volunteer')}}">Become A Volunteer</a></li>
										</ul>
									</li>
									<li><a href="{{url('/faq')}}">Faq</a></li>
									<li><a href="{{url('/certificates')}}">Certificates</a></li>
									<li><a href="{{url('/ask_qn')}}">Ask A Question</a></li>
									<li><a href="{{url('/happy_clients')}}">Happy Clients</a></li>
									<li><a href="{{url('/how_work')}}">How It Works</a></li>
									<li><a href="{{url('/mission')}}">Mission</a></li>
									<li><a href="{{url('/terms_condition')}}">Terms And Condition</a></li>
									<li><a href="{{url('/coming_soon')}}">Coming Soon</a></li>
									<li><a href="{{url('/maintenance')}}">Under Maintenance</a></li>
									<li><a href="{{url('/error')}}">Error 404</a></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);">Fundraiser</a>
								<ul class="sub-menu">
									<li><a href="{{url('/browse_fundraiser')}}">Browse Fundraiser</a></li>
									<li><a href="{{url('/become_fundraiser')}}">Become A Fundraiser</a></li>
									<li><a href="{{url('/fundraiser_detail')}}">Fundraiser Detail</a></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);">Projects</a>
								<ul class="sub-menu">
									<li><a href="{{url('/project')}}">Project</a></li>
									<li><a href="{{url('/project_categories')}}">Project Categories</a></li>
									<li><a href="{{url('/project_sidebar')}}">Project Sidebar</a></li>
									<li><a href="{{url('/project_story')}}">Project Story</a></li>
								</ul>
							</li>
							<li class="sub-menu-down"><a href="javascript:void(0);">Blog</a>
								<ul class="sub-menu">
									<li><a href="{{url('/blog')}}">Blog</a></li>
									<li><a href="{{url('/blog_grid')}}">Blog Grid</a></li>
									<li><a href="{{url('/blog_list')}}">Blog List</a></li>
									<li><a href="{{url('/blog_details')}}">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="{{url('/contact_us')}}">Contact Us</a></li>
						</ul>
						<div class="header-bottom">
							<a href="javascript:void(0);" class="btn btn-light btn-login btn-sm" data-bs-toggle="modal" data-bs-target="#modalLogin">
								<i class="flaticon-logout me-3"></i>Login / Sign Up
							</a>
							<div class="dz-social-icon">
								<ul>
									<li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
									<li><a class="fab fa-twitter" href="https://twitter.com/"></a></li>
									<li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
									<li><a class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
	</header>
	<!-- Header End -->
	
	<div class="page-content bg-white">	
		<!-- Banner Start -->
		<div class="banner-one">
			<div class="container">
				<div class="row banner-inner">
					<div class="col-lg-8 col-md-7">
						<div class="banner-content">
							<h5 class="sub-title text-primary">Crowdfunding</h5>
							<h1 class="title">
								We Help Surface Innovations In Technology 
							</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
							<a href="{{url('/about_us')}}" class="btn btn-secondary btnhover2 m-r15">Learn More <i class="flaticon-right-arrows ms-3 scale1"></i></a>
							<a href="javascript:void(0);" class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#modalDonate">Donate</a>
							<div class="swiper banner-clients-swiper">
								<h5 class="text-primary m-b30">Our Partners</h5>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="clients-logo">
											<img class="logo-main" src="{{asset('images/clients-logo/logo1.png')}}" alt="">
										</div>
									</div>	
									<div class="swiper-slide">
										<div class="clients-logo">
											<img class="logo-main" src="{{asset('images/clients-logo/logo2.png')}}" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="clients-logo">
											<img class="logo-main" src="{{asset('images/clients-logo/logo3.png')}}" alt="">
										</div>
									</div>	
									<div class="swiper-slide">
										<div class="clients-logo">
											<img class="logo-main" src="{{asset('images/clients-logo/logo4.png')}}" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="clients-logo">
											<img class="logo-main" src="{{asset('images/clients-logo/logo5.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="banner-media">
							<img src="{{asset('images/pic1.png') }}" class="main-img" alt="">
							<div class="dz-media">
								<img src="{{asset('images/shape.png')}}" class="main-img" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="dz-shape">
					<svg class="shape-1 move-2" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"/><circle cx="12.296" cy="21.975" r="3.497"/><circle cx="7.896" cy="40.453" r="3.497"/><circle cx="3.497" cy="58.931" r="3.497"/><circle cx="36.933" cy="3.497" r="3.497"/><circle cx="32.534" cy="21.975" r="3.497"/><circle cx="28.134" cy="40.453" r="3.497"/><circle cx="23.735" cy="58.931" r="3.497"/><circle cx="57.171" cy="3.497" r="3.497"/><circle cx="52.772" cy="21.975" r="3.497"/><circle cx="48.372" cy="40.453" r="3.497"/><circle cx="43.973" cy="58.931" r="3.497"/><circle cx="77.409" cy="3.497" r="3.497"/><circle cx="73.01" cy="21.975" r="3.497"/><circle cx="68.61" cy="40.453" r="3.497"/><circle cx="64.211" cy="58.931" r="3.497"/></svg>
					<svg class="shape-2 move-2" viewBox="0 0 57 43" xmlns="http://www.w3.org/2000/svg" width="57" height="43" fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"/><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"/><circle cx="5.375" cy="27.897" r="2.303"/><circle cx="2.559" cy="40.438" r="2.559"/><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"/><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"/><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"/><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"/><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"/><circle cx="36.599" cy="15.1" r="2.303"/><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"/><circle cx="30.713" cy="40.438" r="2.559"/><circle cx="54.259" cy="2.559" r="2.559"/><circle cx="50.42" cy="15.1" r="2.303"/><circle cx="47.349" cy="27.897" r="2.303"/><circle cx="44.533" cy="40.438" r="2.559"/></svg>
					<svg class="shape-3 move-2" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"/><circle cx="12.296" cy="21.975" r="3.497"/><circle cx="7.896" cy="40.453" r="3.497"/><circle cx="3.497" cy="58.931" r="3.497"/><circle cx="36.933" cy="3.497" r="3.497"/><circle cx="32.534" cy="21.975" r="3.497"/><circle cx="28.134" cy="40.453" r="3.497"/><circle cx="23.735" cy="58.931" r="3.497"/><circle cx="57.171" cy="3.497" r="3.497"/><circle cx="52.772" cy="21.975" r="3.497"/><circle cx="48.372" cy="40.453" r="3.497"/><circle cx="43.973" cy="58.931" r="3.497"/><circle cx="77.409" cy="3.497" r="3.497"/><circle cx="73.01" cy="21.975" r="3.497"/><circle cx="68.61" cy="40.453" r="3.497"/><circle cx="64.211" cy="58.931" r="3.497"/></svg>
					<svg class="shape-4 move-2" viewBox="0 0 57 43" xmlns="http://www.w3.org/2000/svg" width="57" height="43" fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"/><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"/><circle cx="5.375" cy="27.897" r="2.303"/><circle cx="2.559" cy="40.438" r="2.559"/><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"/><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"/><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"/><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"/><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"/><circle cx="36.599" cy="15.1" r="2.303"/><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"/><circle cx="30.713" cy="40.438" r="2.559"/><circle cx="54.259" cy="2.559" r="2.559"/><circle cx="50.42" cy="15.1" r="2.303"/><circle cx="47.349" cy="27.897" r="2.303"/><circle cx="44.533" cy="40.438" r="2.559"/></svg>
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<div class="content-inner-3 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h5 class="sub-title">CATEGORIES</h5>
					<h2 class="title">Explore Our Crowdfunding <br> Featured Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="swiper categories-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-raw-food"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Health</a></h6>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-responsibility"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Care</a></h6>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.6s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-vr-glasses"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte text-capitalize"><a href="{{url('project_categories')}}">Technology</a></h6>
								</div>
							</div>
						</div>	
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.8s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-open-book"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Education</a></h6>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.0s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-video"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Videos</a></h6>
								</div>
							</div>
						</div>	
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.2s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-like-1"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Fashion</a></h6>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.4s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-transformation"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Design</a></h6>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.6s">
								<div class="icon-lg m-sm-b20 m-b30"> <a href="{{url('project_categories')}}" class="icon-cell">
									<i class="flaticon-doctor-bag"></i>
								</a> </div>
								<div class="icon-content">
									<h6 class="dz-tilte m-b5 text-capitalize"><a href="{{url('project_categories')}}">Medical</a></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination style-1 text-center"></div>
				</div>
			</div>
		</div>
		
		<!-- Our Team -->
		<section class="content-inner-3 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.1s">
					<h6 class="sub-title">TEAM MEMBER</h6>
					<h2 class="title">Meet Our Great Member</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="swiper team-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<a href=""><img src="{{asset('images/team/team1.jpg')}}" alt=""></a>
									<ul class="team-social">
										<li><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></li>
										<li><a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
										<li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
									</ul>
								</div>
								<div class="dz-content">
									<h5 class="dz-name">Kaylynn Donin</h5>
									<span class="dz-position text-primary">Managing Director</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="instructor.html"><img src="{{asset('images/team/team2.jpg')}}" alt=""></a>
									<ul class="team-social">
										<li><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></li>
										<li><a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
										<li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
									</ul>
								</div>
								<div class="dz-content">
									<h5 class="dz-name">Jakob Bothman</h5>
									<span class="dz-position text-primary">District Accounts Analyst</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.3s">
								<div class="dz-media">
									<a href="instructor.html"><img src="{{asset('images/team/team3.jpg')}}" alt=""></a>
									<ul class="team-social">
										<li><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></li>
										<li><a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
										<li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
									</ul>
								</div>
								<div class="dz-content">
									<h5 class="dz-name">Lindsey Botosh</h5>
									<span class="dz-position text-primary">National Web Assistant</span>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-team style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="instructor.html"><img src="{{asset('images/team/team4.jpg')}}" alt=""></a>
									<ul class="team-social">
										<li><a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a></li>
										<li><a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"></a></li>
										<li><a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a></li>
									</ul>
								</div>
								<div class="dz-content">
									<h5 class="dz-name">Phillip Schleifer</h5>
									<span class="dz-position text-primary">National Intranet Specialist</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<svg class="shape-1 move-1" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"/><circle cx="12.296" cy="21.975" r="3.497"/><circle cx="7.896" cy="40.453" r="3.497"/><circle cx="3.497" cy="58.931" r="3.497"/><circle cx="36.933" cy="3.497" r="3.497"/><circle cx="32.534" cy="21.975" r="3.497"/><circle cx="28.134" cy="40.453" r="3.497"/><circle cx="23.735" cy="58.931" r="3.497"/><circle cx="57.171" cy="3.497" r="3.497"/><circle cx="52.772" cy="21.975" r="3.497"/><circle cx="48.372" cy="40.453" r="3.497"/><circle cx="43.973" cy="58.931" r="3.497"/><circle cx="77.409" cy="3.497" r="3.497"/><circle cx="73.01" cy="21.975" r="3.497"/><circle cx="68.61" cy="40.453" r="3.497"/><circle cx="64.211" cy="58.931" r="3.497"/></svg>
			<svg class="shape-4 move-2" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="57" height="43" fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"></circle><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"></ellipse><circle cx="5.375" cy="27.897" r="2.303"></circle><circle cx="2.559" cy="40.438" r="2.559"></circle><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"></ellipse><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"></ellipse><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"></ellipse><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"></ellipse><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"></ellipse><circle cx="36.599" cy="15.1" r="2.303"></circle><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"></ellipse><circle cx="30.713" cy="40.438" r="2.559"></circle><circle cx="54.259" cy="2.559" r="2.559"></circle><circle cx="50.42" cy="15.1" r="2.303"></circle><circle cx="47.349" cy="27.897" r="2.303"></circle><circle cx="44.533" cy="40.438" r="2.559"></circle></svg>
			<svg class="shape-6 move-1" xmlns="http://www.w3.org/2000/svg" width="81" height="48" viewBox="0 0 81 48" fill="none">
				<path d="M2 19L15.744 6.73604C18.6614 4.1328 23.1457 4.42415 25.7017 7.383L30.3669 12.7835C33.1839 16.0444 38.2501 16.0101 41.0227 12.7114L44.878 8.12464C47.6031 4.88238 52.5608 4.78406 55.4124 7.91574L59.9639 12.9144C62.8687 16.1045 67.9399 15.9329 70.6223 12.5537L79 2" stroke="var(--primary)" stroke-width="5"/>
				<path d="M2 46L15.744 33.736C18.6614 31.1328 23.1457 31.4241 25.7017 34.383L30.3669 39.7835C33.1839 43.0444 38.2501 43.0101 41.0227 39.7114L44.878 35.1246C47.6031 31.8824 52.5608 31.7841 55.4124 34.9157L59.9639 39.9144C62.8687 43.1045 67.9399 42.9329 70.6223 39.5537L79 29" stroke="var(--primary)" stroke-width="5"/>
			</svg>
			<svg class="shape-2 rotating" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" xmlns:v="https://vecta.io/nano" width="95" height="95" fill="none">
				<mask id="A" maskUnits="userSpaceOnUse" x="0" y="0" width="95" height="95" mask-type="alpha">
				  <circle cx="47.5" cy="47.5" r="47" fill="#d9d9d9" stroke="#3b6ff5" />
				</mask>
				<g mask="url(#A)">
				  <path d="M35.044-64.787L-48.721 55.222M85.098-11.882L1.332 108.127M43.387-55.969L-40.379 64.039M93.44-3.064L9.674 116.944M51.729-47.152L-32.037 72.857M101.782 5.753L18.017 125.762M60.071-38.334L-23.695 81.674m133.82-67.103L26.359 134.579M68.414-29.517L-15.352 90.492m133.819-67.104L34.701 143.397M76.755-20.699L-7.01 99.309M39.215-60.378L-44.55 59.631M89.269-7.473L5.503 112.535M47.558-51.56L-36.208 68.448M97.611 1.344L13.846 121.353M55.9-42.743L-27.866 77.266m133.819-67.104L22.187 130.17M64.242-33.925L-19.523 86.083m133.819-67.104L30.53 138.987M72.585-25.108L-11.181 94.9m133.819-67.104L38.872 147.805M80.927-16.291L-2.839 103.718" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round" />
				</g>
			</svg>
			<svg class="shape-5 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
			<svg class="shape-3 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
		</section>
		<!-- Our Team -->
		
		<!-- About Us -->
		<section class="content-inner-3">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
						<div class="section-head">
							<h5 class="sub-title">SUCCESS STORY</h5>
							<h2 class="title">Read They Story With Akcel</h2>
							<p>Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 m-b30 text-end d-none d-lg-block wow fadeInUp" data-wow-delay="0.4s">
						<a href="{{url('project_story')}}" class="btn btn-primary btnhover2">View More <i class="fa-solid fa-angle-right ms-2"></i></a>
					</div>
				</div>
				<div class="row align-items-center project-bx left m-b30">
					<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">	
						<div class="dz-media split-box">
							<div>
								<img src="{{asset('images/project/large/pic1.jpg')}}" alt="" class="app-1">
							</div>
						</div> 
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="dz-content wow fadeInUp" data-wow-delay="0.4s">
							<h3 class="title m-b15">Samcung Okulus Rivt PC - Powered VR  Gaming Headset</h3>
							<p class="m-b0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
							<div class="fund-count m-t30 m-md-t20">
								<div class="icon-content">
									<h2 class="text-primary">$ <span class="counter">24,553,852.24</span></h2>
									<h6>Total funded</h6>
								</div>
							</div>
							<div class="author-wrappper">
								<div class="author-media">
									<img src="{{asset('images/avatar/avatar1.jpg')}}" alt=""> 
								</div>
								<div class="author-content">
									<div class="author-head">
										<h6 class="author-name">Hendric Anderson</h6>
										<ul class="rating-list">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star gray-light"></i></li>
											<li><i class="fa fa-star gray-light"></i></li>
										</ul>
									</div>
									<ul class="author-meta">
										<li class="campaign">12 Campaign</li>
										<li class="location">New York, London</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Us -->
		
		<!-- Client Logo -->
		<section class="clients-wrapper wow fadeInUp" data-wow-delay="0.2s">
			<div class="container">
				<div class="section-head text-center">
					<h4 class="title">Our Partnership</h4>
				</div>
				<div class="swiper clients-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="clients-logo">
								<img class="logo-main" src="{{asset('images/clients-logo/logo1.png')}}" alt="">
							</div>
						</div>	
						<div class="swiper-slide">
							<div class="clients-logo">
								<img class="logo-main" src="{{asset('images/clients-logo/logo2.png')}}" alt="">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="clients-logo">
								<img class="logo-main" src="{{asset('images/clients-logo/logo3.png')}}" alt="">
							</div>
						</div>	
						<div class="swiper-slide">
							<div class="clients-logo">
								<img class="logo-main" src="{{asset('images/clients-logo/logo4.png')}}" alt="">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="clients-logo">
								<img class="logo-main" src="{{asset('images/clients-logo/logo5.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Client Logo -->
		
		<!-- Online Courses -->
		<section class="content-inner-3 overflow-hidden section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h2>Recent Projects</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="swiper recent-blog p-b5">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dz-card style-2 overlay-skew wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="{{url('fundraiser_detail')}}"><img src="{{asset('images/project/pic1.jpg')}}" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">EDUCATION</a></li>
									</ul>
									<h5 class="dz-title"><a href="{{url('fundraiser_detail')}}">New vaccine for cattle calf loss learned</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> <span>Total Raised $ 3,542</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> <span>43 Days left</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="{{asset('images/avatar/avatar1.jpg')}}" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Cheyenne Curtis</h6>
												<ul class="rating-list">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star gray-light"></i></li>
													<li><i class="fa fa-star gray-light"></i></li>
												</ul>
											</div>
											<ul class="author-meta">
												<li class="campaign">12 Campaign</li>
												<li class="location">New York, London</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 overlay-skew wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="{{url('fundraiser_detail')}}"><img src="{{asset('images/project/pic2.jpg')}}" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">TECHNOLOGY</a></li>
									</ul>
									<h5 class="dz-title"><a href="{{url('fundraiser_detail')}}">He Created the Web. Now He’s Out to Remake </a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> <span>Total Raised $ 5,789</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> <span>42 Days left</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="{{asset('images/avatar/avatar2.jpg')}}" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Kaylynn Donin</h6>
												<ul class="rating-list">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star gray-light"></i></li>
													<li><i class="fa fa-star gray-light"></i></li>
												</ul>
											</div>
											<ul class="author-meta">
												<li class="campaign">12 Campaign</li>
												<li class="location">New York, London</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-2 overlay-skew wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="{{asset('images/project/pic3.jpg')}}" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="{{url('fundraiser_detail')}}">4 Things parents learned for they jids in 2020 </a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> <span>Total Raised $ 3,542</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> <span>32 Days left</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="{{asset('images/avatar/avatar3.jpg')}}" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Adam Jordon</h6>
												<ul class="rating-list">
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star gray-light"></i></li>
													<li><i class="fa fa-star gray-light"></i></li>
												</ul>
											</div>
											<ul class="author-meta">
												<li class="campaign">12 Campaign</li>
												<li class="location">New York, London</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<svg class="shape-1 move-1" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"></circle><circle cx="12.296" cy="21.975" r="3.497"></circle><circle cx="7.896" cy="40.453" r="3.497"></circle><circle cx="3.497" cy="58.931" r="3.497"></circle><circle cx="36.933" cy="3.497" r="3.497"></circle><circle cx="32.534" cy="21.975" r="3.497"></circle><circle cx="28.134" cy="40.453" r="3.497"></circle><circle cx="23.735" cy="58.931" r="3.497"></circle><circle cx="57.171" cy="3.497" r="3.497"></circle><circle cx="52.772" cy="21.975" r="3.497"></circle><circle cx="48.372" cy="40.453" r="3.497"></circle><circle cx="43.973" cy="58.931" r="3.497"></circle><circle cx="77.409" cy="3.497" r="3.497"></circle><circle cx="73.01" cy="21.975" r="3.497"></circle><circle cx="68.61" cy="40.453" r="3.497"></circle><circle cx="64.211" cy="58.931" r="3.497"></circle></svg>
			<svg class="shape-2 move-2" viewBox="0 0 95 95"  xmlns="http://www.w3.org/2000/svg" width="81" height="63"  fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"></circle><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"></ellipse><circle cx="5.375" cy="27.897" r="2.303"></circle><circle cx="2.559" cy="40.438" r="2.559"></circle><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"></ellipse><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"></ellipse><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"></ellipse><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"></ellipse><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"></ellipse><circle cx="36.599" cy="15.1" r="2.303"></circle><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"></ellipse><circle cx="30.713" cy="40.438" r="2.559"></circle><circle cx="54.259" cy="2.559" r="2.559"></circle><circle cx="50.42" cy="15.1" r="2.303"></circle><circle cx="47.349" cy="27.897" r="2.303"></circle><circle cx="44.533" cy="40.438" r="2.559"></circle></svg>
			<svg class="shape-3 move-1" xmlns="http://www.w3.org/2000/svg" width="81" height="48" viewBox="0 0 81 48" fill="none">
				<path d="M2 19L15.744 6.73604C18.6614 4.1328 23.1457 4.42415 25.7017 7.383L30.3669 12.7835C33.1839 16.0444 38.2501 16.0101 41.0227 12.7114L44.878 8.12464C47.6031 4.88238 52.5608 4.78406 55.4124 7.91574L59.9639 12.9144C62.8687 16.1045 67.9399 15.9329 70.6223 12.5537L79 2" stroke="var(--primary)" stroke-width="5"></path>
				<path d="M2 46L15.744 33.736C18.6614 31.1328 23.1457 31.4241 25.7017 34.383L30.3669 39.7835C33.1839 43.0444 38.2501 43.0101 41.0227 39.7114L44.878 35.1246C47.6031 31.8824 52.5608 31.7841 55.4124 34.9157L59.9639 39.9144C62.8687 43.1045 67.9399 42.9329 70.6223 39.5537L79 29" stroke="var(--primary)" stroke-width="5"></path>
			</svg>
			<svg class="shape-4 rotating" viewBox="0 0 95 95" xmlns="http://www.w3.org/2000/svg" xmlns:v="https://vecta.io/nano" width="95" height="95" fill="none">
				<mask id="A" maskUnits="userSpaceOnUse" x="0" y="0" width="95" height="95" mask-type="alpha">
				  <circle cx="47.5" cy="47.5" r="47" fill="#d9d9d9" stroke="#3b6ff5"></circle>
				</mask>
				<g mask="url(#A)">
				  <path d="M35.044-64.787L-48.721 55.222M85.098-11.882L1.332 108.127M43.387-55.969L-40.379 64.039M93.44-3.064L9.674 116.944M51.729-47.152L-32.037 72.857M101.782 5.753L18.017 125.762M60.071-38.334L-23.695 81.674m133.82-67.103L26.359 134.579M68.414-29.517L-15.352 90.492m133.819-67.104L34.701 143.397M76.755-20.699L-7.01 99.309M39.215-60.378L-44.55 59.631M89.269-7.473L5.503 112.535M47.558-51.56L-36.208 68.448M97.611 1.344L13.846 121.353M55.9-42.743L-27.866 77.266m133.819-67.104L22.187 130.17M64.242-33.925L-19.523 86.083m133.819-67.104L30.53 138.987M72.585-25.108L-11.181 94.9m133.819-67.104L38.872 147.805M80.927-16.291L-2.839 103.718" stroke="var(--secondary)" stroke-width="2" stroke-linecap="round"></path>
				</g>
			</svg>
			<svg class="shape-5 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
			<svg class="shape-6 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
		</section>
		<!-- Online Courses End -->
		
		<!-- Testimonials -->
		<section class="testimonial-wrapper1 content-inner">
			<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
				<h2 class="title">Testimonials</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
			</div>
			<div class="swiper testimonial-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
							<div class="testimonial-text">
								<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni..</p>
							</div>
							<div class="testimonial-details">
								<div class="testimonial-info">
									<div class="testimonial-pic">
										<img src="{{asset('images/testimonials/pic1.jpg')}}" alt="">
									</div>
									<div class="clearfix">
										<h5 class="testimonial-name">Johan Lee</h5>
										<span class="testimonial-position">Joe’s Parents</span>
									</div>
								</div>
								<div class="testimonial-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
							<div class="testimonial-text">
								<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni..</p>
							</div>
							<div class="testimonial-details">
								<div class="testimonial-info">
									<div class="testimonial-pic">
										<img src="{{asset('images/testimonials/pic2.jpg')}}" alt="">
									</div>
									<div class="clearfix">
										<h5 class="testimonial-name">Lee Jordon</h5>
										<span class="testimonial-position">Joe’s Parents</span>
									</div>
								</div>
								<div class="testimonial-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
							<div class="testimonial-text">
								<p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni..</p>
							</div>
							<div class="testimonial-details">
								<div class="testimonial-info">
									<div class="testimonial-pic">
										<img src="{{asset('images/testimonials/pic3.jpg')}}" alt="">
									</div>
									<div class="clearfix">
										<h5 class="testimonial-name">Alex Costa</h5>
										<span class="testimonial-position">Joe’s Parents</span>
									</div>
								</div>
								<div class="testimonial-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
										<li><i class="fa fa-star gray-light"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-btn container swiper-btn-center-lr">
					<div class="test-swiper-prev btn-prev style-1"><i class="fa fa-arrow-left-long"></i></div>
					<div class="test-swiper-next btn-next style-1"><i class="fa fa-arrow-right-long"></i></div>
				</div>
			</div>
		</section>
		<!-- Testimonials End -->
		
		<!-- Counter -->
		<div class="counter-wrapper-1 content-inner-3">
			<div class="container">
				<div class="counter-inner bg-secondary">
					<div class="row">
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.2s">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num">23,577</span>
								<p class="counter-text">Total Donor</p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.4s">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num">978</span>
								<p class="counter-text">Donations</p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.6s">
							<div class="counter-style-1 text-center">
								<span class="counter-num counter">762</span>
								<p class="counter-text">Happy Clients</p>
							</div>
						</div>
						<div class="col-lg-3 col-6 m-b30 wow fadeInUp" data-wow-delay="0.8s">
							<div class="counter-style-1 text-center">
								<span class="counter counter-num">852</span>
								<p class="counter-text">Volunteer</p>
							</div>
						</div>
					</div>
					<img src="{{asset('images/counter/pattren1.png')}}" class="pattren1 move-2" alt="">
					<img src="{{asset('images/counter/pattren2.png')}}" class="pattren2 move-2" alt="">
					<img src="{{asset('images/counter/pattren3.png')}}" class="pattren3 move-2" alt="">
					<img src="{{asset('images/counter/pattren4.png')}}" class="pattren4 move-2" alt="">
					<img src="{{asset('images/counter/pattren5.png')}}" class="pattren5 move-2" alt="">
					<img src="{{asset('images/counter/pattren6.png')}}" class="pattren6 move-2" alt="">
				</div>
			</div>
		</div>
		<!-- Counter End -->
		
		<!-- Our Blog  -->
		<section class="content-inner-2 section-pattren1">
			<div class="container">
				<div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
					<h2 class="title">Akcel News</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="swiper blog-slider-full">
					<div class="swiper-wrapper m-b5">
						<div class="swiper-slide">
							<div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<a href="{{url('blog_details')}}"><img src="{{asset('images/blog/blog-grid/pic4.jpg')}}" alt=""></a>
									<ul class="dz-badge-list">
										<li><a href="javascript:void(0);" class="dz-badge">HEALTH</a></li>
									</ul>
									<a href="{{url('blog_details')}}" class="btn btn-secondary">Read More</a>
								</div>
								<div class="dz-info">
									<h5 class="dz-title"><a href="{{url('blog_details')}}">New vaccine for cattle calf loss learned </a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
									
									<div class="author-wrappper">
										<div class="author-media">
											<img src="{{asset('images/avatar/avatar2.jpg')}}" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Hawkins Junior</h6>
											</div>
											<ul class="author-meta">
												<li class="date">November 21th, 2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.4s">
								<div class="dz-media">
									<a href="{{url('blog_details')}}"><img src="{{asset('images/blog/blog-grid/pic3.jpg')}}" alt=""></a>
									<ul class="dz-badge-list">
										<li><a href="javascript:void(0);" class="dz-badge">TECHNOLOGY</a></li>
									</ul>
									<a href="{{url('blog_details')}}" class="btn btn-secondary">Read More</a>
								</div>
								<div class="dz-info">
									<h5 class="dz-title"><a href="{{url('blog_details')}}">4 Things parents learned for they jids in 2020 </a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
									
									<div class="author-wrappper">
										<div class="author-media">
											<img src="{{asset('images/avatar/avatar3.jpg')}}" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Tom wilson</h6>
											</div>
											<ul class="author-meta">
												<li class="date">November 21th, 2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.6s">
								<div class="dz-media">
									<a href="{{url('blog_details')}}"><img src="{{asset('images/blog/blog-grid/pic2.jpg')}}" alt=""></a>
									<ul class="dz-badge-list">
										<li><a href="javascript:void(0);" class="dz-badge">EDUCATION</a></li>
									</ul>
									<a href="{{url('blog_details')}}" class="btn btn-secondary">Read More</a>
								</div>
								<div class="dz-info">
									<h5 class="dz-title"><a href="{{url('blog_details')}}">He Created the Web. Now He’s Out to Remake </a></h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et aliqua.</p>
									
									<div class="author-wrappper">
										<div class="author-media">
											<img src="{{asset('images/avatar/avatar4.jpg')}}" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Adam Jordon</h6>
											</div>
											<ul class="author-meta">
												<li class="date">November 21th, 2022</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<svg class="shape-6 move-2" xmlns="http://www.w3.org/2000/svg" width="57" height="43" fill="var(--secondary)" xmlns:v="https://vecta.io/nano"><circle cx="11.261" cy="2.559" r="2.559"></circle><ellipse cx="8.19" cy="15.1" rx="2.559" ry="2.303"></ellipse><circle cx="5.375" cy="27.897" r="2.303"></circle><circle cx="2.559" cy="40.438" r="2.559"></circle><ellipse cx="25.85" cy="2.559" rx="2.303" ry="2.559"></ellipse><ellipse cx="23.035" cy="15.1" rx="2.559" ry="2.303"></ellipse><ellipse cx="19.963" cy="27.897" rx="2.559" ry="2.303"></ellipse><ellipse cx="16.124" cy="40.438" rx="2.303" ry="2.559"></ellipse><ellipse cx="39.67" cy="2.559" rx="2.303" ry="2.559"></ellipse><circle cx="36.599" cy="15.1" r="2.303"></circle><ellipse cx="33.784" cy="27.897" rx="2.559" ry="2.303"></ellipse><circle cx="30.713" cy="40.438" r="2.559"></circle><circle cx="54.259" cy="2.559" r="2.559"></circle><circle cx="50.42" cy="15.1" r="2.303"></circle><circle cx="47.349" cy="27.897" r="2.303"></circle><circle cx="44.533" cy="40.438" r="2.559"></circle></svg>
			<svg class="shape-5 move-1" xmlns="http://www.w3.org/2000/svg" width="81" height="48" viewBox="0 0 81 48" fill="none">
				<path d="M2 19L15.744 6.73604C18.6614 4.1328 23.1457 4.42415 25.7017 7.383L30.3669 12.7835C33.1839 16.0444 38.2501 16.0101 41.0227 12.7114L44.878 8.12464C47.6031 4.88238 52.5608 4.78406 55.4124 7.91574L59.9639 12.9144C62.8687 16.1045 67.9399 15.9329 70.6223 12.5537L79 2" stroke="var(--primary)" stroke-width="5"></path>
				<path d="M2 46L15.744 33.736C18.6614 31.1328 23.1457 31.4241 25.7017 34.383L30.3669 39.7835C33.1839 43.0444 38.2501 43.0101 41.0227 39.7114L44.878 35.1246C47.6031 31.8824 52.5608 31.7841 55.4124 34.9157L59.9639 39.9144C62.8687 43.1045 67.9399 42.9329 70.6223 39.5537L79 29" stroke="var(--primary)" stroke-width="5"></path>
			</svg>
			<svg class="shape-1 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
			<svg class="shape-3 move-1" xmlns="http://www.w3.org/2000/svg" width="81" height="63" fill="var(--primary)" xmlns:v="https://vecta.io/nano"><circle cx="16.695" cy="3.497" r="3.497"></circle><circle cx="12.296" cy="21.975" r="3.497"></circle><circle cx="7.896" cy="40.453" r="3.497"></circle><circle cx="3.497" cy="58.931" r="3.497"></circle><circle cx="36.933" cy="3.497" r="3.497"></circle><circle cx="32.534" cy="21.975" r="3.497"></circle><circle cx="28.134" cy="40.453" r="3.497"></circle><circle cx="23.735" cy="58.931" r="3.497"></circle><circle cx="57.171" cy="3.497" r="3.497"></circle><circle cx="52.772" cy="21.975" r="3.497"></circle><circle cx="48.372" cy="40.453" r="3.497"></circle><circle cx="43.973" cy="58.931" r="3.497"></circle><circle cx="77.409" cy="3.497" r="3.497"></circle><circle cx="73.01" cy="21.975" r="3.497"></circle><circle cx="68.61" cy="40.453" r="3.497"></circle><circle cx="64.211" cy="58.931" r="3.497"></circle></svg>
			<svg class="shape-4 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
			<svg class="shape-2 rotating" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 114 114" fill="none">
				<g opacity="0.2">
				  <rect x="63.3936" y="11.6357" width="15.3997" height="89.934" transform="rotate(18.3505 63.3936 11.6357)" fill="var(--primary)"></rect>
				  <rect x="93.6138" y="30.0967" width="15.3997" height="89.934" transform="rotate(63.3505 93.6138 30.0967)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.314829 -0.949148 -0.949148 -0.314829 96.9966 78.5947)" fill="var(--primary)"></rect>
				  <rect width="15.3997" height="89.934" transform="matrix(0.893767 -0.448532 -0.448532 -0.893767 70.1479 100.841)" fill="var(--primary)"></rect>
				</g>
			</svg>
		</section>
		<!-- Our Blog End  -->
		
		<!-- Call Action -->
		<div class="call-action style-1 content-inner-1">
			<div class="container">
				<div class="inner-action overlay-primary-dark" style="background-image:url('{{asset('/background/bg1.jpg')}};background-size: cover; background-repeat: no-repeat;">
					<div class="row inner-content justify-content-center">
						<div class="col-xl-6 col-lg-9 wow fadeInUp" data-wow-delay="0.2s">
							<div class="section-head text-center">
								<h2 class="title text-white">Don’t miss our weekly updates about donations</h2>
							</div>
							<form class="dzSubscribe" action="script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg text-white"></div>
								<div class="input-group">
									<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Enter your email address...">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn btn-secondary btn-rounded-lg">
											<span>SUBSCRIBE</span>
											<i class="fa-solid fa-paper-plane"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Call Action End -->	
		
	</div>
	
	<!-- Footer -->
    <footer class="site-footer style-1" id="footer">
		<div class="footer-top">
            <div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
						<div class="widget widget_about">
							<div class="footer-logo logo-white">
								<a href="{{url('/')}}"><img src="{{asset('images/logo-white.png')}}" alt=""></a> 
							</div>
							<p>Akcel is a Crowdfunding & Charity Website by DexignZone lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
							<div class="dz-social-icon style-1">
								<ul>
									<li><a target="_blank" class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
									<li><a target="_blank" class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
									<li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a></li>
									<li><a target="_blank" class="fab fa-youtube" href="https://youtube.com/"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="widget widget_services">
							<h5 class="footer-title">Resources</h5>
							<ul>
								<li><a href="{{url('how_work')}}">How It Works</a></li>
								<li><a href="{{url('ask_an')}}">Ask A Question</a></li>
								<li><a href="{{url('project_story')}}">Project Story</a></li>
								<li><a href="{{url('mission')}}">Mission</a></li>
								<li><a href="{{url('certificates')}}">Certificates</a></li>
								<li><a href="{{url('terms_conditon')}}terms-and-condition.html">Terms And Condition</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
						<div class="widget widget_services">
							<h5 class="footer-title">Company</h5>
							<ul>
								<li><a href="{{url('about_us')}}">About Us</a></li>
								<li><a href="{{url('volunteer')}}">Volunteer</a></li>
								<li><a href="{{url('happy_clients')}}">Happy Clients</a></li>
								<li><a href="{{url('project')}}">Project</a></li>
								<li><a href="{{url('contact')}}">Contact Us</a></li>
								<li><a href="{{url('faq')}}">Faq</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Get in Touch with Us</h5>
							<ul>
								<li>
									<i class="fas fa-map-marker-alt"></i>
									<span>832  Thompson Drive, San Fransisco CA 94107, United States</span>
								</li>
								<li>
									<i class="fa-solid fa-phone"></i>
									<span>394-091-3312</span>
								</li>
								<li>
									<i class="fa fa-envelope"></i> 
									<span>support@gmail.com</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
            </div>
			
			<div class="shape-1 move-2"></div>
			<svg class="shape-2 move-2" viewBox="0 0 86 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="0.5" y="0.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="0.5" y="22.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="0.5" y="44.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="22.5" y="0.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="22.5" y="22.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="44.5" y="0.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="44.5" y="22.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="44.5" y="44.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="66.5" y="0.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
				<rect x="66.5" y="22.5" width="19" height="19" rx="9.5" stroke="var(--primary)"/>
			</svg>
			<svg class="shape-3 move-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="var(--secondary)" fill-opacity="1" d="M0,64L120,101.3C240,139,480,213,720,213.3C960,213,1200,139,1320,101.3L1440,64L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
			</svg>
		</div>
        <!-- Footer Bottom Part -->
        <div class="footer-bottom">
            <div class="container">
				<div class="text-center"> 
					<span class="copyright-text">Copyright © 2024 <a href="https://dexignzone.com/" target="_blank">DexignZone</a>. All rights reserved.</span> 
				</div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
	
	<!-- Authentication Modal -->
	<div class="modal fade modal-wrapper auth-modal" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<!-- Login Your Account -->
			<div class="modal-content">
				<h2 class="title">Login Your Account</h2>
				<form action="index.html">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email Address">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
						<div class="reset-password">
							<a class="btn-link collapsed" data-bs-toggle="collapse" href="#reset-password" role="button" aria-expanded="false" aria-controls="reset-password">Reset password?</a>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-outline-primary btn-block">Login</button>
					</div>
					<div class="form-group">
						<a href="javascript:void(0);" class="btn facebook btn-block"><i class="fa-brands fa-facebook-f m-r10"></i>Log in with Facebook</a>
					</div>
					<div class="form-group">
						<a href="javascript:void(0);" class="btn google-plus btn-block"><i class="fa-brands fa-google m-r10"></i>Log in with Google</a>
					</div>
					<div class="sign-text">
						<span>Don't have a Crowdfunding account? <a class="btn-link collapsed" data-bs-toggle="collapse" href="#sign-up" role="button" aria-expanded="false" aria-controls="sign-up">Sign up</a></span>
					</div>
				</form>
			</div>
			
			<!-- Reset Password -->
			<div class="modal-content collapse reset-password" id="reset-password">
				<h2 class="title">Reset password?</h2>
				<form>
					<div class="form-group password-icon-bx">
						<i class="fa fa-lock"></i>
						<p>Enter your email address associated with your account, and we'll email you a link to reset your password...</p>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter email address">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-outline-primary btn-block">Send reset link</button>
					</div>
					<a data-bs-toggle="collapse" href="#reset-password" class="sign-text" role="button" aria-expanded="false" aria-controls="reset-password">Back</a>
				</form>
			</div>
			
			<!-- Sign Up Your Account -->
			<div class="modal-content collapse sign-up" id="sign-up">
				<h2 class="title">Sign Up Your Account</h2>
				<form action="index.html">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email Address">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-outline-primary btn-block">Sign Up</button>
					</div>
					<div class="form-group">
						<a href="javascript:void(0);" class="btn facebook btn-block"><i class="fa-brands fa-facebook-f m-r10"></i>Log in with Facebook</a>
					</div>
					<div class="form-group">
						<a href="javascript:void(0);" class="btn google-plus btn-block"><i class="fa-brands fa-google m-r10"></i>Log in with Google</a>
					</div>
					<div class="sign-text">
						<span>Don't have a Crowdfunding account? <a class="btn-link collapsed" data-bs-toggle="collapse" href="#sign-up" role="button" aria-expanded="false" aria-controls="sign-up">Login</a></span>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Choose a donation amount -->
	<div class="modal fade modal-wrapper" id="modalDonate" tabindex="-1" role="dialog" aria-labelledby="modalDonate" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Choose a donation amount</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="flaticon-close"></i></button>
				</div>
				<div class="modal-body">
					<form action="index.html">
						<div class="row">
							<div class="col-lg-12">
								<div class="tag-donate style-1">
									<div class="donate-categories">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											<label class="form-check-label" for="flexRadioDefault1">
												$500
											</label>
										</div>
									</div>
									<div class="donate-categories">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
											<label class="form-check-label" for="flexRadioDefault2">
												$1000
											</label>
										</div>
									</div>
									<div class="donate-categories">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
											<label class="form-check-label" for="flexRadioDefault3">
												$2000
											</label>
										</div>
									</div>
									<div class="donate-categories">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
											<label class="form-check-label" for="flexRadioDefault4">
												$5000
											</label>
										</div>
									</div>
									<p>Most Donors donate approx <span>$1000</span> to this Fundraiser</p>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Other Amount</label>
									<div class="input-group">
										<input type="number" class="form-control"  placeholder="Other Amount">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Name</label>
									<div class="input-group">
										<input name="dzName" required="" type="text" class="form-control" placeholder="Jakob Bothman">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Email address</label>
									<div class="input-group">
										<input name="dzEmail" required type="text" class="form-control" placeholder="info@mail.com">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Phone Number</label>
									<div class="input-group">
										<input type="number" class="form-control" placeholder="Phone Number">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Address</label>
									<div class="input-group">
										<input required type="text" class="form-control" placeholder="Address">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Pancard</label>
									<div class="input-group">
										<input type="number" class="form-control" placeholder="Pancard">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-0 text-center">
									<button name="submit" type="submit" value="Submit" class="btn btn-primary btn-block">Proceed To Pay</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
	
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('vendor/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('vendor/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('vendor/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script><!-- OWL-CAROUSEL -->
<script src="{{asset('js/dz.carousel.js')}}"></script><!-- OWL-CAROUSEL -->
<script src="{{asset('js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM JS -->
<script src="{{asset('js/dznav-init.js')}}"></script><!-- DZNAV INIT -->

<script src="{{asset('vendor/rangeslider/rangeslider.js')}}"></script><!-- RANGESLIDER -->
</body>
</html>
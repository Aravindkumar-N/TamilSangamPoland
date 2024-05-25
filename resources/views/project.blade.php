@extends('layout')
@section('content')

	
	<div class="page-content bg-white">
		
		<!-- Banner  -->
		<div class="dz-bnr-inr dz-bnr-inr-sm style-1 text-center overlay-primary-dark" style="background-image:url('images/banner/bnr5.jpg');">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Project</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Project</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Find Wrapper -->
		<div class="find-bx-wrapper">
			<div class="container">
				<div class="find-bx bg-white">
					<form>
						<div class="row align-items-center">
							<div class="col-lg-3 col-md-4">
								<div class="input-group">
									<select class="default-select form-select">
										<option>All Category</option>
										<option>New York</option>
										<option>Tokyo</option>
									</select>
								</div>
							</div>
							<div class="col-lg-9 col-md-8">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Find Projects">
									<div class="input-group-prepend">
										<button class="btn"><i class="las la-search"></i></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="tag-list"> 
					<span class="title text-black">Popular Search:</span>
					<a href="javascript:void(0);">Technology,</a>
					<a href="javascript:void(0);">Charity,</a>
					<a href="javascript:void(0);">Health,</a>
					<a href="javascript:void(0);">Medical</a>
				</div>
			</div>
		</div>
		<!-- Find Wrapper End -->
		
		<!-- Projects -->
		<section class="content-inner-2">
			<div class="container">
				<div class="row m-b30">
					<div class="col-xl-10 col-lg-9">
						<div class="site-filters style-1 clearfix">
							<ul class="filters" data-bs-toggle="buttons">
								<li class="btn active">
									<input type="radio">
									<a href="javascript:void(0);">All Projects</a> 
								</li>
								<li data-filter=".Technology" class="btn">
									<input type="radio">
									<a href="javascript:void(0);">Technology</a> 
								</li>
								<li data-filter=".Medical" class="btn">
									<input type="radio">
									<a href="javascript:void(0);">Medical</a> 
								</li>
								<li data-filter=".Business" class="btn">
									<input type="radio">
									<a href="javascript:void(0);">Business</a> 
								</li>
								<li data-filter=".Fashion" class="btn">
									<input type="radio">
									<a href="javascript:void(0);">Fashion</a> 
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 text-start text-lg-end m-b20">
						<select class="default-select form-select style-1">
							<option>Newest</option>
							<option>Oldest</option>
						</select>
					</div>
				</div>
				<div class="clearfix">
					<ul id="masonry"  class="row">
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic1.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">EDUCATION</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">New vaccine for cattle calf loss learned </a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar1.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Technology m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic2.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">TECHNOLOGY</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">He Created the Web. Now He’s Out to Remake </a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width:52%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar2.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Technology m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic3.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">4 Things parents learned for they jids in 2020 </a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width:78%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar3.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Medical m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic4.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">Partnering to create a community</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar4.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Technology m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic5.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">Primary School Build for Children</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width:59%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar5.jpg" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Richard Hart</h6>
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Business m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic6.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">Best & Less published their supplier lists</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width:36%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar6.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Technology m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic7.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">New vaccine for cattle calf loss learned </a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width:66%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar7.jpg" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Hawkins Junior</h6>
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic8.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">Smallest of donations can help change a life</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width:91%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar8.jpg" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Tom wilson</h6>
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic9.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">It is a long established fact that a reader</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:48%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar9.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Technology m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic10.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">Charity can help make smile of poor people</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar5.jpg" alt=""> 
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic11.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">Benefits Earned From Charity Donations</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar4.jpg" alt=""> 
										</div>
										<div class="author-content">
											<div class="author-head">
												<h6 class="author-name">Richard Hart</h6>
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
						</li>
						<li class="card-container col-xl-4 col-lg-6 col-md-6 col-sm-12 Fashion m-b30">
							<div class="dz-card style-2 overlay-skew">
								<div class="dz-media">
									<a href="fundraiser-detail.html"><img src="images/project/pic12.jpg" alt=""></a>
								</div>
								<div class="dz-info">
									<ul class="dz-category">
										<li><a href="javascript:void(0);">HEALTH</a></li>
									</ul>
									<h5 class="dz-title"><a href="fundraiser-detail.html">The Shameful Story Of Airline Cabin Waste</a></h5>
									<div class="progress-bx style-1">
										<div class="progress">
											<div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width:88%"></div>
										</div>
										<ul class="progress-tag">
											<li class="raised">
												<i class="las la-coins"></i> Raised: <span class="text-primary">$ 5,345</span>
											</li>
											<li class="goal">
												<i class="lar la-calendar"></i> Goal: <span class="text-primary">$70,000</span>
											</li>
										</ul> 
									</div>
									<div class="author-wrappper">
										<div class="author-media">
											<img src="images/avatar/avatar3.jpg" alt=""> 
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
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-12 m-sm-t0 m-t30">		
						<nav aria-label="Blog Pagination" class="pagination-bx">
							<div class="page-item">
								<a class="page-link prev" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a>
							</div>
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link active" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
							</ul>
							<div class="page-item">
								<a class="page-link next" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Call Action -->
		<div class="call-action style-1 content-inner-1">
			<div class="container">
				<div class="inner-action overlay-primary-dark" style="background-image:url('images/background/bg1.jpg'); background-size: cover; background-repeat: no-repeat;">
					<div class="row inner-content justify-content-center">
						<div class="col-xl-6 col-lg-9">
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
		<!-- Call Action -->
		
	</div>
	@endsection
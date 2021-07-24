@extends('user.site_user.master_user')
@section('title')
   About | WLK Foundation
@endsection
@section('content')
    	{{-- <section class="section transheader customtitle">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>About</h2>
						 <p class="lead">Discover why over 5,1000 website owners trust SeoTime.</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section --> --}} 

		<section class="section normalhead lb" style="background-image:url({{asset('/images/wlk_banner12.jpeg')}}); background-repeat:no-repeat; background-size:cover;">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>About Us</h2>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-widget">
							<i class="flaticon-cup"></i>
							<h3>About Us</h3>
						<p style="text-align:justify;">{{$office->about}}</p>
							
	                        {{-- <div class="skills-style">
	                            <div class="skills-wrapper">
	                                <h3>Search Engine Optimization</h3>
	                                <div class="progress">
	                                    <div class="progress-bar progress-bar-primary wow slideInLeft" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
	                                    </div>
	                                </div>
	                            </div><!-- end skills-wrapper -->

	                            <div class="skills-wrapper">
	                                <h3>Conversion Rate Optimization</h3>
	                                <div class="progress">
	                                    <div class="progress-bar progress-bar-primary wow slideInLeft" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
	                                    </div>
	                                </div>
	                            </div><!-- end skills-wrapper -->

	                            <div class="skills-wrapper">
	                                <h3>Online Reputation Management</h3>
	                                <div class="progress">
	                                    <div class="progress-bar progress-bar-primary wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	                                    </div>
	                                </div>
	                            </div><!-- end skills-wrapper -->

	                            <div class="skills-wrapper">
	                                <h3>Backlink Management</h3>
	                                <div class="progress">
	                                    <div class="progress-bar progress-bar-primary wow slideInLeft" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
	                                    </div>
	                                </div>
	                            </div><!-- end skills-wrapper -->
	                        </div><!-- end skills --> --}}
						</div><!-- end about-widget -->	
					</div><!-- end col -->

					<div class="col-md-7">
						<div class="">
						<img src="{{asset('upload/office/'.$office->photo)}}" alt="" class="img-responsive">
						</div>
					</div>
				</div><!-- end row -->

				<hr class="invis">

				<div class="row service-list text-center" style="margin-top:-80px;">
					{{-- <div class="col-md-4 col-sm-12 col-xs-12 first">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-competition"></i>
							<div class="service-details">
								<h4><a href="service-01.html" title="">What We Do</a></h4>
								<p>Phasellus consequat egestas tempor. Fusce faucibus et ligula consequat imperdiet vel non ligula. Aliquam lorem leo, dapibus eu cras amet.</p>
								<a href="#" class="readmore">View Details</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col --> --}}

					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="service-wrapper wow fadeIn">	
							<i class="fa fa-eye"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Our Vision</a></h4>
								<p>{{$office->vision}}</p>
								{{-- <a href="#" class="readmore">View Details</a> --}}
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-6 col-sm-12 col-xs-12 last">
						<div class="service-wrapper wow fadeIn">	
							<i class="fa fa-bullseye"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Our Mission</a></h4>
								<p>{{$office->mission}}</p>
								{{-- <a href="#" class="readmore">View Details</a> --}}
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->
				</div><!-- end row -->

				{{-- <div class="row support-center">
					<div class="col-md-6 support-desc">
						<h3>Outstanding Support</h3>
						<p> Morbi quis porta dolor. Nullam feugiat sapien et libero elementum faucibus. Praesent sagittis venenatis ipsum, eget tristique odio pharetra quis. Sed maximus a eros quis ornare. Proin tempor dolor a auctor convallis. Nam accumsan commodo elit..</p>
						<a href="#" class="readmore">Get Support</a>
					</div><!-- end col -->
					<div class="col-md-6 nopad">
						<div class="support-center-left"></div>
					</div><!-- end col -->
				</div><!-- end row --> --}}
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section ldp">
			<div class="container">
				<div class="row text-center">
					@foreach($blogs as $blog_data)
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="{{asset('/upload/blog/'.$blog_data->photo)}}" alt="" style="width:200px; height:140px;" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					@endforeach
					{{-- <div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_03.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->	
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_04.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_05.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->
					<div class="col-md-2 col-sm-2 col-xs-6">
						<div class="client-box">
							<a href="#"><img src="upload/client_06.png" alt="" class="img-responsive"></a>
						</div>
					</div><!-- end col -->	 --}}
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

@endsection
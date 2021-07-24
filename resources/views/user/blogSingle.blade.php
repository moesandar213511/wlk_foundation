@extends('user.site_user.master_user')
@section('title')
   Blog | WLK Foundation
@endsection
@section('css')
    <style>
        h1,h2,h3,h4,h5,h6,p{
            font-family:Pyidaungsu,Zawgyi-One;
        }
    </style>
@endsection
@section('content')
    {{-- <section class="section normalhead lb">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Blog & News</h2>
						<p class="lead">WordPress » How to Make Professional SEO Links</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
        </section><!-- end section --> --}}
        
        <section class="section normalhead lb" style="background-image:url({{asset('/images/blog.jpg')}}); background-repeat:no-repeat; background-size:cover;">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Blog Detail</h2>
						<!-- <p class="lead">We publish latest news, activities about foundation for our client.</p> -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
                    {{-- <div class="sidebar col-md-4 col-sm-4">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Subscribe</h4>
                    		<div class="newsletter-widget">
                    			<p>You can opt out of our newsletters at any time. See our privacy policy.</p>
		                        <form class="form-inline" role="search">
		                            <div class="form-1">
		                              	<input type="text" class="form-control" placeholder="Enter email here..">
										<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
		                            </div>
								</form>
                    		</div><!-- end newsletter -->
                    	</div><!-- end widget -->

                    	<div class="widget clearfix">
                    		<h4 class="widget-title">ADVERTISING</h4>
                    		<div class="category-widget">
                    			<img src="images/banner.gif" alt="" class="img-responsive img-thumbnail">
                    		</div><!-- end category -->
                    	</div><!-- end widget -->

                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Blog Categories</h4>
                    		<div class="category-widget">
                    			<ul>
                    				<li><a href="#">SEO Tips and Tricks</a></li>
                    				<li><a href="#">e-Commerce SEO</a></li>
                    				<li><a href="#">SEO Tools and Modules</a></li>
                    				<li><a href="#">Google Updates for Algoritms</a></li>
                    				<li><a href="#">SEO for CMS Systems</a></li>
                    			</ul>
                    		</div><!-- end category -->
                    	</div><!-- end widget -->
                    </div><!-- end col --> --}}
                    
					<div class="content col-md-12 blog-alt">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="blog-box clearfix">
                                    <div class="media-box">
                                        <img src="{{$blog_obj['photo']}}" alt="" class="img-responsive img-thumbnail" style="width:150%;height:30%;">
                                    </div><!-- end media-box -->
                                    
                                </div><!-- end blogbox -->
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="blog-single">
                                        <div class="blog-meta">
                                            <ul class="list-inline">
                                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{$blog_obj['date']}}</a></li>
                                                {{-- <li><a href="#"><i class="fa fa-folder-open-o"></i> SEO Tips</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i> 21 Comments</a></li> --}}
                                            </ul>
                                        </div><!-- end meta -->
                                        <h3 class="post-title"><div class="myanmar">{{$blog_obj['title']}}</div></h3>
                                    <font class="myanmar">{!!$blog_obj['detail']!!}</font>
                                </div><!-- end blog-desc -->
                            </div>
						</div>
						<br>
						{{-- <div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="row">
									<div class="col-md-4">
									<div class="thumbnail"><img src="{{asset('img/poor4.jpg')}}" alt="" class="img-responsive"></div>
									</div>
									<div class="col-md-4">
										<div class="thumbnail"><img src="{{asset('img/poor5.jpg')}}" alt="" class="img-responsive"></div>
									</div>
									<div class="col-md-4">
										<div class="thumbnail"><img src="{{asset('img/poor3.jpg')}}" alt="" class="img-responsive"></div>
									</div>
								</div>
							</div>
						</div> --}}

                        {{-- <div class="sharethis-inline-share-buttons" data-url="http://greenhackersinstitute.com/blogsingle/{{$blog_obj['id']}}" data-title="Sharing is great!"></div> --}}

					</div><!-- end content -->
				</div><!-- end row -->
			</div><!-- end container -->
        </section><!-- end section -->
@endsection

@extends('user.site_user.master_user')
@section('title')
   Contact | WLK Foundation
@endsection
@section('content')
		{{-- <section class="section transheader bgcolor">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Contact Us</h2>
						<p class="lead">We offer the best offer for your business search engine optimization</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section --> --}}

		<section class="section normalhead lb" style="background-image:url({{asset('/images/contact.jpeg')}}); background-repeat:no-repeat; background-size:cover;">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Contact Us</h2>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->
		

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-details">
							<h3>Welcome to the Our Foundation</h3>
							<p>If you have information about any security or abuse issue on any of foundation's services, let us know immediately.</p>

							<p>Please use the options below to find and report the problem.</p>

							<hr>
							@foreach($offices as $office_data)
							<ul>
								<li><i class="fa fa-envelope"></i> <span>{{$office_data->email}}</span></li>
								<li><i class="fa fa-whatsapp"></i> <span>{{$office_data->phone}}</span></li>
								<li><i class="fa fa-fax"></i> <span>{{$office_data->address}}</span></li>
								{{-- <li><i class="fa fa-phone"></i> <span><a href="mailto:#">info@yoursite.com</a></span></li>
								<li><i class="fa fa-twitter"></i> <span><a href="#">twitter.com/yourhandle</a></span></li>
								<li><i class="fa fa-facebook"></i> <span><a href="#">facebook.com/yourhandle</a></span></li>
								<li><i class="fa fa-instagram"></i> <span><a href="#">instagram.com/yourhandle</a></span></li>
								<li><i class="fa fa-google-plus"></i> <span><a href="#">google.com/+yourhandle</a></span></li> --}}
							</ul>
							@endforeach
						</div>
					</div>

					<div class="col-md-6">
					<form role="form" action="{{url('/insert_contact')}}" class="contactform" method="post">
						{{csrf_field()}}
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						    </div>
						    <div class="form-group">
						        <textarea class="form-control" id="message" name="message" placeholder="Message" maxlength="140" rows="7" required></textarea>
						    </div>
						    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
						</form>
					</div><!-- end col -->

					{{-- <div class="col-md-3 mb30">
						<div class="contact-details">
							<ul>
								<li><i class="fa fa-phone"></i> <span>444 01 444</span></li>
								<li><i class="fa fa-whatsapp"></i> <span>+01 (543) 987 65 432</span></li>
								<li><i class="fa fa-fax"></i> <span>+01 (543) 987 65 431</span></li>
								<li><i class="fa fa-envelope"></i> <span><a href="mailto:#">info@yoursite.com</a></span></li>
								<li><i class="fa fa-twitter"></i> <span><a href="#">twitter.com/yourhandle</a></span></li>
								<li><i class="fa fa-facebook"></i> <span><a href="#">facebook.com/yourhandle</a></span></li>
								<li><i class="fa fa-instagram"></i> <span><a href="#">instagram.com/yourhandle</a></span></li>
								<li><i class="fa fa-google-plus"></i> <span><a href="#">google.com/+yourhandle</a></span></li>
							</ul>
						</div><!-- end contact details -->
					</div><!-- end col --> --}}
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="map" style="width:100%;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1939.6392315990845!2d96.19513662884454!3d16.817418389812623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c192d54d482b33%3A0x17221b5e91597524!2sW+L+K+Foundation!5e1!3m2!1smy!2smm!4v1562316683036!5m2!1smy!2smm" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
  @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
  @endif
@endsection

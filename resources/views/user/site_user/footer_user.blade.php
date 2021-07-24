 <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=375244603347949&autoLogAppEvents=1"></script>

<style>
	.main--footer *{
		color: #fff;
	}
</style>

		<footer class="main--footer" style="background: linear-gradient(45deg, #3ac5c8 1%, #0b509e 100%);">
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 class="widget-title maincolor1">
							Facebook
						</h2>
						<div class="fb-page" data-href="https://www.facebook.com/wlkfoundation/" data-tabs="timeline" data-width="300px" data-height="220px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/wlkfoundation/" class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/wlkfoundation/">WLK Foundation</a>
							</blockquote>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="widget-title maincolor1">
						 About
						</h2>
						<p style="line-height: 26px;font-size: 16px;">

							{{strlen($office->about) > 400 ? substr($office->about,0,400).'...' : ($office->about)}}
						</p>
					</div>
					<div class="col-md-4">
						<h2 class="widget-title maincolor1">Contact</h2>
						<ul class="list-unstyled">
							<li  style="line-height: 26px;font-size: 16px;"><i class="fa fa-whatsapp" style="line-height: 30px;">&nbsp;&nbsp;{{$office->phone}}</i></li>
							<li  style="line-height: 26px;font-size: 16px;"><i class="fa fa-envelope" style="line-height: 30px;">&nbsp;&nbsp;{{$office->email}}</i></li>
							<li><i class="fa fa-fax" style="line-height: 30px;">&nbsp;&nbsp;{{$office->address}}</i></li>
						</ul>
					</div>
				</div>
			</div>
			<br>
		</footer>
		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-12">
						<p style="text-align:center;">Copyright@ <script>
							var date = new Date();
							document.write(date.getFullYear());
							</script> All rights reserved.Designed by <a href="https://greenhackersinstitute.com/" style="color:green" target="_blank">GREEN HACKERS</a>.</p>
                    </div>

                    {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline">
                            <li>Designed: <a href="https://html.design">HTML Design</a></li>
                        </ul>
                    </div><!-- end col --> --}}
                </div><!-- end row -->
            </div><!-- end container -->
		</footer><!-- end second footer -->


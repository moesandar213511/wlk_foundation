<header class="header site-header">
			<div class="container">
				<nav class="navbar navbar-default yamm">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
							<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('upload/office/'.$office->photo)}}" style="width:150px;height:100px;margin-top:-30px;" alt="Linda"></a>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class="@if ($url == "home") active @endif"><a href="{{url('/')}}">Home</a></li>
				                <li text-center class="@if ($url == "about") active @endif"><a href="{{url('/about')}}">About</a></li>
				                <!-- <li><a href="service-06.html">Donating</a></li> -->
				                <li class="@if ($url == "blog") active @endif"><a href="{{url('/blog')}}">News</a></li>
				                <li class="@if ($url == "contact") active @endif"><a href="{{url('/contact')}}">Contact</a></li>
                                <li class="lastlink hidden-xs hidden-sm @if ($url == "donate") @endif"><a class="btn btn-primary" href="{{url('/donate')}}">Donate</a></li>
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->
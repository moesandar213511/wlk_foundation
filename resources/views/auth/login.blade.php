<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="card-header mx-auto" style="background-color:#0984e3">
        <span style="font-family: 'Frank Ruhl Libre', serif;font-size: 30px">
           WLK <br>
           <b>FOUNDATION</b>
        </span><br/>
        <span class="mt-5" style="font-family: 'Frank Ruhl Libre' , serif;font-size: 20px"> Login Dashboard </span>
    </div>
    <!-- Login Form -->
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color:#0984e3"><i class="fas fa-at text-white"></i></span>
                    </div>
                     <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="background-color:#0984e3"><i class="fas fa-key text-white"></i></span>
                    </div>
                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                   <button type="submit" style="border-radius: 20px;background-color:#0984e3;" class="btn text-white container-fluid">
                    {{ __('Login') }}
                    </button>
                </div>

            </form>
        </div>
    <div id="formFooter">
      <a class="underlineHover" style="text-decoration: none;" href="{{url('/')}}">Go to the Site</a>
    </div>

  </div>
</div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
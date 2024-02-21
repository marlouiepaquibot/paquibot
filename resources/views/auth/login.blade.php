<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login -Pinoy Recipe </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link href="{{ asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
  <style>
    html,
    body {
      height: 100%;
      background-color: #f0f0f0; 
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
    }


    .card-header {
      background-color:  blue; 
      color: #fff;  
    }

    .card-footer-item {
      color: #3498db;
    }

    .btn-primary {
      background-color: blue; /* Airsoft theme color for the sign-in button */
      border-color: #3498db; /* Airsoft theme color for the button border */
    }

    .btn-primary:hover {
      background-color: #2980b9; /* Darker shade on hover */
      border-color: #2980b9;
    }
  </style>
</head>

<body>
  <!-- ============================================================== -->
  <!-- login page  -->
  <!-- ============================================================== -->
  <div class="splash-container">
    <div class="card">
      <div class="card-header text-center"><a href="{{ url('/')}}"><img class="logo-img" src="{{  asset('pinoylogo.jpg')}}" width="50" alt="logo"></a><span class="splash-description">Please enter your credentials.</span></div>
      <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message  }}</strong>
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label class="custom-control custom-checkbox">
              <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </form>
      </div>
      <div class="card-footer bg-white p-0  ">
        <div class="card-footer-item card-footer-item-bordered">
          <a href="{{ route('register') }}" class="footer-link">Create An Account</a>
        </div>
        <div class="card-footer-item card-footer-item-bordered">
          <a href="{{ route('password.request') }}" class="footer-link">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- end login page  -->
  <!-- ============================================================== -->
  <!-- Optional JavaScript -->
  <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>

</html>

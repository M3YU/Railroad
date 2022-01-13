<!DOCTYPE html>
<html>

<head>
  <title>You Login Template</title>
  <!-- Site favicon -->

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
  <!-- Icon Font -->
  <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.css')}}">
  <!-- Text Font -->
  <link rel="stylesheet" href="{{asset('fonts/font.css')}}">
  <link rel="stylesheet" href="{{asset('css/login/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/login/media.css')}}">
</head>

<body>

  <div class="header-wrap">
    <div class="clearfix">
      <div class="logo">
        <a href="index.php"></a>
      </div>
      <div class="menu">
        <div class="dropdown">
          <a class="dropdown-toggle hamburgler" href="#" role="button" data-toggle="dropdown">
            <span class="menu-icon">
              <div class="bun top"></div>
              <div class="meat"></div>
              <div class="bun bottom"></div>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <ul>
              <li><a class="dropdown-item selected" href="{{asset('/')}}">回到首頁</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main class="cd-main">
    <section class="cd-section index visible ">
      <div class="cd-content style1">
        <div class="login-box d-md-flex align-items-center">
          <h1 class="title">Good Morning</h1>
          <h3 class="subtitle">Have a great journey ahead!</h3>
          <div class="login-form-box">
            <div class="login-form-slider">
              <!-- login slide start -->
              <div class="login-slide slide login-style1">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label class="label">User name</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1" {{
                        old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="submit" value="Sign In">
                  </div>
                </form>
                <div class="sign-up-txt">
                  Don't have an account? <a href="javascript:;" class="sign-up-click">Sign Up</a>
                </div>
                <div class="forgot-txt">
                  <a href="javascript:;" class="forgot-password-click">Forgot Password</a>
                </div>
                <div class="login-with">
                  <h3>Login with social</h3>
                  <ul class="social-login-btn">
                    <li class="facebook-btn"><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li class="twitter-btn"><a href="#"><i class="ion-social-twitter"></i></a></li>
                  </ul>
                </div>
              </div>
              <!-- login slide end -->
              <!-- signup slide start -->
              <div class="signup-slide slide login-style1">
                <div class="d-flex height-100-percentage">
                  <div class="align-self-center width-100-percentage">
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="form-group">
                        <label class="label">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                          name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                          name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="label">Password</label>
                        <input id="password" type="password"
                          class="form-control @error('password') is-invalid @enderror" name="password" required
                          autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                          required autocomplete="new-password">
                      </div>
                      <div class="form-group padding-top-15px">
                        <input type="submit" class="submit" value="Sign Up">
                      </div>
                    </form>
                    <div class="sign-up-txt">
                      if you have an account? <a href="javascript:;" class="login-click">login</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- signup slide end -->
              <!-- forgot password slide start -->
              <div class="forgot-password-slide slide login-style1">
                <div class="d-flex height-100-percentage">
                  <div class="align-self-center width-100-percentage">
                    <form action="{{ route('password.request') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label class="label">Enter your email address to reset your password</label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="submit" value="Submit">
                      </div>
                    </form>
                    <div class="sign-up-txt">
                      if you remember your password? <a href="javascript:;" class="login-click">login</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- forgot password slide end -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div id="cd-loading-bar" data-scale="1"></div>
  <!-- JS File -->
  <script src="{{asset('js/login/modernizr.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/login/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/login/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/login/bootstrap.js')}}"></script>
  <script src="{{asset('js/login/velocity.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/login/script.js')}}"></script>
</body>

</html>
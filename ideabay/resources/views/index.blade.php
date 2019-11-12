<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IDEAbay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
      $("#login").hide();
      $("#link").click(function(){
        $("#login, #register").toggle();
      }); 
      $("#link_back").click(function(){
        $("#register, #login").toggle();
      });
    });
</script>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>


<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
  
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <div class="site-logo mr-auto w-25"><a href="index.html">IDEABay</a></div>

    </div>
  </div>
  
</header>

<div class="intro-section" id="home-section">
  
  <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
              <h1  data-aos="fade-up" data-aos-delay="100">WELCOME TO IDEABay</h1>
              <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">The only platform that brings investors and entrepreneurs together.Sign up now to use all features.</p>
              
            </div>

            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
              <div id="register">
              <form action="create_new_idea.html" method="post" class="form-box">
                <h3 class="h4 text-black mb-4">Register</h3>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group mb-4">
                  <input type="password" class="form-control" placeholder="Re-type Password">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                  <a href="#" id="link">Signed up already?</a>
                </div>
              </form>
              </div>

              <div id="login">
              <form action="create_new_idea.html" method="post" class="form-box">
                <h3 class="h4 text-black mb-4">Login</h3>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-pill" value="Login">
                  <a href="#" id="link_back">Didn't register yet? Sign up!</a>
                </div>
              </form>
            </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

    
  
    


  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>

  
  <script src="{{ asset('js/main.js') }}"></script>
    
  </body>
</html>
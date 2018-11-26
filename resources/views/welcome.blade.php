
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NETIJEN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Bootstrap core CSS -->
        <link href="https://blackrockdigital.github.io/startbootstrap-grayscale/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://blackrockdigital.github.io/startbootstrap-grayscale/css/grayscale.min.css" rel="stylesheet">
        
    </head>
    
    <body>
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="{{ url('/') }}">NETIJEN</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-white" href="{{route('home.about')}}">About</a>
            </li>
             @if (Route::has('login'))
              {{--   <div class="top-right links"> --}}
                    @auth
                    <li class="nav-item">
                        <a class="nav-link disabled text-white" href="{{ url('/home') }}"><h6>Home</h6></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link disabled text-white" href="{{ route('login') }}"><h6>Login</h6></a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link disabled text-white" href="{{ route('register') }}"><h6>Register</h6></a>
                        </li>
                        @endif
                    @endauth
            {{--     </div> --}}
            @endif
          </ul>
        </div>
      </div>
    </nav>

            <div class="content">

                <!-- Header -->

                <header class="masthead">
                  <div class="container d-flex h-100 align-items-center">
                    <div class="mx-auto text-center">
                      <img src="img/logo.png" alt="">
                      <h1 class="mx-auto my-0 text-uppercase">Netijen</h1>
                      <h2 class="text-white-50 mx-auto mt-2 mb-5">Situs berkumpulnya para netizen untuk membicarakan trending topic masalah terkini</h2>
                      <div class="">
           
        </div>
                    </div>
                  </div>
                </header>
                <!-- Footer -->
                <footer class="bg-black small text-center text-white-50">
                  <div class="container">
                    Copyright &copy; NETIJEN 2018
                  </div>
                </footer>

                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Plugin JavaScript -->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for this template -->
                <script src="js/grayscale.min.js"></script>
            </div>
        
    </body>
</html>


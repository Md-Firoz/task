<html>
    <head>
        <title>Laravel- login and registration page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <style type="text/css">
            @import url(http://fonts.googleapis.com/css?family=Raleway:300,400,600);

            body{

                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 2;
                color: black;
                text-align: left;
                background-color: violet;
            }

            .navbar-laravel

            {
                box-shadow: 0 2px 4px rgba(0, 0, 0, .06);
            }

            .navbar-brand, .nav-link, my-form, .login-form

            {
                font-family: Raleway, sans-serif;
            }

            .my-form 
            {
                padding: 1.9rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }

            .login-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .login-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }
        </style>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
      <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login') }}">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">register</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
      @endguest
      
    </ul>
  </div>
  </div>
</nav>
@yield('content')
    </body>
</html>
<!--<!DOCTYPE html>
<html>
  <head>
    <title>Myweb</title>

    <style type="text/css">
        body{margin: 0;padding: 0;background-color: #DEDEDE;}
        a{text-decoration:none;}
        .header{padding:10px 50px 10px 50px;border-bottom: 1px solid #eeeeee;}
        .header>.logo{display:inline-block;}
        .header>.menu{display:inline-block;margin-left:20px;}
        .content{}
        .left{background-color: white;margin: 25px 300px 25px 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;}
        .right{background-color: white;width: 200px;margin: 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;position: absolute;top: 92px;right: 0;}
        .footer{padding:10px 50px 10px 50px;background-color:gray;}
    </style>
  </head>
-->
<!--
  <body>
      <div class="header">
          <div class="logo">
              <a href="#"><h2>Myweb</h2></a>
          </div>

          <div class="menu">
              <a href="{{ route('articles.index') }}">Articles</a>
          </div>
      </div> 

      <div class="content">
          <div class="left">
              @yield('content')
          </div>

          <div class="right">
            <div style="padding:20px;border:1px solid black;">
              <h3>Author</h3>
              <p>name : Thxit</p>
              <p>age : 22</p>
              <p>Tel : 182-xxxx-xxxx</p>

          </div>    
      </div>
-->


    <!-- footer -->
    <!--
      <div class="footer">
          <p>contact me : 1234567</p>
      </div> 
  </body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel-Auth</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<!-- bootstrap ??? -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Home
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                {{--</ul>--}}

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Sign in</a></li>
                        <li><a href="{{ url('/auth/register') }}">Sign up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sign out</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
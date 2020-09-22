


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description">
 
  <title>Bricoleur</title>
 

  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
   

</head>

<body>
 <header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img  src="{{ asset('images/logo/logo5.png')}}"  class="logo-light" alt="logo">
           
          
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
              <li class="nav__item with-dropdown">
                <a href="index.html" class="dropdown-toggle nav__item-link active">Home</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
          
              </li>
              <li class="nav__item with-dropdown">
                <a href="" class="dropdown-toggle nav__item-link">Company</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li  class="nav__item"><a href="{{url('/about')}}" class="nav__item-link">About Us</a></li>
                 
                 
                  <li class="nav__item"><a href="{{url('/faqs')}}" class="nav__item-link">Help & FAQs</a></li>
                  
                  
                </ul>
              </li>
              <li class="nav__item with-dropdown">
                <a href="{{url('/secteur')}}" class="dropdown-toggle nav__item-link">Services</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                
              </li>
              <li class="nav__item with-dropdown">
                <a href="{{url('#project')}}" class="dropdown-toggle nav__item-link">Projects</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                
              </li>
            
              <li class="nav__item">
                <a href="{{url('/contact')}}" class="nav__item-link">Contacts</a>
              </li>
              
            </ul>
          </div>
          <div class="contact__number d-flex align-items-center">
            <i class="icon-phone"></i>
            <a href="tel:0677512233">06 775 12 233</a>
          </div>
          
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
      </nav>
    </header>
<main>
    @yield('contact')
    @yield('faqs')
</main>
</body>
</html>
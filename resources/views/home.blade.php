@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description">
 
  <title>Bricoleur</title>
 
  <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  
  <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href= "{{ asset('images/favicon/favicon.png')}}"rel="icon">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap"> -->

<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('css/libraries.css') }}"> -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
   

</head>

<body>
  <!-- <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div> -->
    <!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img  src="{{ asset('images/logo/logo5.png')}}"  class="logo-light" alt="logo">
           
            <!-- <img src="{{ asset('images/logo/logoBri.jpg')}}" class="logo-dark" alt="logo"> -->
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
              <li class="nav__item with-dropdown">
                <a href="index.html" class="dropdown-toggle nav__item-link active">Home</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="index.html" class="nav__item-link">Home Moderm</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Home classic</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="home-architecture.html" class="nav__item-link">Home Architecture</a>
                  </li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="about-us.html" class="dropdown-toggle nav__item-link">Company</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="about-us.html" class="nav__item-link">About Us</a></li>
                  <!-- /.nav-item -->
                  
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="faqs.html" class="nav__item-link">Help & FAQs</a></li>
                  <!-- /.nav-item -->
                  
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="services.html" class="dropdown-toggle nav__item-link">Services</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="#" class="nav__item-link">Construction
                      Manage</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">Construction
                      Consultants</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">Architecture &
                      Building</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">Home
                      Renovations</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">Tiling &
                      Painiting</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">Interior
                      Design</a></li>
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="projects-grid.html" class="dropdown-toggle nav__item-link">Projects</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item"><a href="#" class="nav__item-link">projects grid</a></li>
                  <!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">projects standard</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">projects carousel</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item"><a href="#" class="nav__item-link">projects
                      single</a></li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="blog.html" class="dropdown-toggle nav__item-link">News & Media</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="#" class="nav__item-link">Blog Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="#" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
              
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="contact__number d-flex align-items-center">
            <i class="icon-phone"></i>
            <a href="tel:0677512233">06 775 12 233</a>
          </div><!-- /.contact__numbr -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
    <section class=home>
    <div class=slider>
      <div class="slide active" style="background-image:url({{url('images/backgrounds/bcg7.jpg')}})"> 
        <div class=container>
          <div class=caption>
            <h1>Plumbing. Painting. Anything!</h1>
            <p>Guaranted solutopn to your home repair and maintenance needs</p>
            <a href="">Red more</a>
            <a id=link href=""> Get involved</a>

          </div>
        </div>
      </div>
      <div class=slide style="background-image:url({{url('images/backgrounds/bcg6.jpg')}})">
        <div class=container>
          <div class=caption>
            <h1>Trusted and reliable Handyman services</h1>
            <p>Guaranted solutopn to your home repair and maintenance needs</p>
            <a href=""> Red more</a>
            <a id=link href=""> Get involved</a>

          </div>
        </div>
      </div>
      <div class=slide style="background-image:url({{url('images/backgrounds/bcg3.jpg')}})">
        <div class=container>
          <div class=caption>
            <h1>Handyman that perform all types of installation works</h1>
            <p>Guaranted solutopn to your home repair and maintenance needs</p>
            <a href="">Red more</a>
            <a id=link href=""> Get involved</a>

          </div>
        </div>
      </div>
    </div>

    <!-- controls -->
    <div class="controls">
      <div class="prev">
        < </div>
          <div class="next">></div>

      </div>
      <div class="indicator">

      </div>
  </section>
    <!-- <section class="slider slider-layout1">
      <div class="slick-carousel carousel-arrows-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-2">
          <div class="bg-img"><img src="{{ asset('images/sliders/2.jpg')}}" alt="background"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <h2 class="slide__title">Provide Effective Building Solutions!</h2>
                  <p class="slide__desc">A leading developer of A-grade commercial, industrial and residential projects
                    in USA. Since its foundation the company has doubled its turnover year on year, with its staff
                    numbers swelling accordingly. </p>
                  <a href="services.html" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>Our Services</span><i class="icon-arrow-right"></i>
                  </a>
                  <a href="about-us.html" class="btn btn__white">More About Us!</a> -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <!-- <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{ asset('images/sliders/2.jpg')}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <h2 class="slide__title">Bigger, Better, <br> Faster & Stronger</h2>
                  <p class="slide__desc">A leading developer of A-grade commercial, industrial and residential projects
                    in USA. Since its foundation the company has doubled its turnover year on year, with its staff
                    numbers swelling accordingly. </p> -->
                  <!-- <a href="services.html" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>Our Services</span><i class="icon-arrow-right"></i>
                  </a>
                  <a href="about-us.html" class="btn btn__white">More About Us!</a> -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ==========================
       Contact Info
    ============================ -->
    <section class="contact-info-layout2 pt-60 pb-30">
      <div class="container">
        <div class="row align-items-end">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
                <i class="icon-envelope"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Quick Contact</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>Email: <a href="#">Bricoleur@maroc.com</a></li>
                  <li>Phone: <a href="tel:0677512233">06 775 12 233</a></li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
              <i class="icon-location-arrow"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Our Location</h4>
                <ul class="contact__info-list list-unstyled">
                  <li>2307 Agendis, youssoufia 11226 Morocco.</li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="cta__banner">
              <h5 class="cta__title color-white">WELCOME TO Bricoleur COMMERCIAL AND DOMESTIC SPECIALISTS </h5>
              <p class="cta__desc color-gray">Today Bricoleur has over 4,000 professionals on its payroll All Over The
                Country.</p>
              <a href="services.html" class="btn btn__primary btn__link color-white">
                <span>Learn More</span> <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact Info -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 pt-120 bg-gray">
      <div class="services-bg">
        <div class="bg-img"><img src="{{ asset('images/backgrounds/map.png')}}" alt="background"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">The Best A Grade Commercial & Residential Services</span>
              <h2 class="heading__title">High Quality Construction Solutions
                For Residentials & Industries!</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <i class="icon-home"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Home Maintenance</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="{{ asset('images/services/service-overlay.png')}}" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <i class="icon-cogs"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Renovation</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="{{ asset('images/services/service-overlay.png')}}" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <i class="icon-wrench"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Plumbing services</h4>
                <p class="service__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="services-single-service.html" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="{{ asset('images/sliders//services/service-overlay.png')}}"  alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="text__link">Offering Big handyman community. <a href="contacs.html">Repair Your House
                Now!</a>
            </p>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- =========================
       Banner layout 4
      =========================== -->
    <section class="banner-layout4 mt--100 pb-0">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="inner-padding bg-theme ">
              <div class="heading-layout2 heading-light mb-40">
                <p class="heading__subtitle">World's Leading Industry Corporation!</p>
                <h2 class="heading__title">Best A Gra de Commercial & Residential Services</h2>
                <p class="heading__desc">The world is changing faster than ever before, business is no exception, yet
                  those that embrace change are thriving, building bigger, better, faster & stronger products than ever
                  before. We can help you build on your past and prepare for future.</p>
              </div><!-- /.heading -->
              <div class="row fancybox-light">
                <!-- fancybox item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-welding"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Powerfull Product<br> Strategy</h4>
                      <p class="fancybox__desc">Our facilities meet high security requirements and are certified to the
                        highest local standards.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-6 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-checklist"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Award Winning <br>Projects </h4>
                      <p class="fancybox__desc">Our facilities meet high security requirements and are certified to the
                        highest local standards.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 background-banner">
            <div class="bg-img">
              <img class=img-banner src="{{ asset('images/backgrounds/bcg3.jpg')}}" alt="banner">
            
            </div><!-- /.video__box -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 4 -->

    
<!-- Recent work section -->
<section class="Client">
<span class="heading__subtitle">Featured Projects</span>
<h2 class="heading__title">Our Recent Works</h2>
    <div class="wrapper">
      <section id="section1">
        <a href="#section3" class="arrow__btn">‹</a>
        <div class="item">
          <img
          src="{{ asset('images/blog/blog-1.jpg')}}">
          <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
        <div class="item">
        <img
        src="{{ asset('images/blog/blog-2.jpg')}}">
        <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
        <div class="item">
        <img
        src="{{ asset('images/blog/blog-3.jpg')}}">
        <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
        <div class="item">
          <img
          src="{{ asset('images/blog/blog-4.jpg')}}">
          <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
       
        <a href="#section2" class="arrow__btn">›</a>
      </section>

      <section id="section2">
        <a href="#section1" class="arrow__btn">‹</a>
        <div class="item">
          <img
          src="{{ asset('images/blog/blog-1.jpg')}}">
          <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
        <div class="item">
        <img
        src="{{ asset('images/blog/blog-2.jpg')}}">
        <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
        <div class="item">
        <img
        src="{{ asset('images/blog/blog-3.jpg')}}">
        <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
        <div class="item">
          <img
          src="{{ asset('images/blog/blog-4.jpg')}}">
          <div class="sub-main">
    <button class="button-two"><span>Read More</span></button>
    </div>
        </div>
       
        <a href="#section2" class="arrow__btn">›</a>
      </section>
        
       
    </div>
  </section>
<!-- </section> -->

    <!-- =====================
         Clients
      ======================== -->
   

    <!-- =========================
       Banner layout 2
      =========================== -->
    

      <!-- ==========================
        contact layout 1
      =========================== -->
      <section class="contact-layout2 p-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="contact-panel mt--140">
                <div class="contact__panel-info">
                  <div class="contact__panel-info-top">
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Our Location</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>2307 Agendis, youssoufia 11226 Morocco.</li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Quick Contact</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>Email: <a href="#">Bricoleur@maroc.com</a></li>
                        <li>Support: <a href="#">Bricoleur@maroc.com</a></li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                  </div><!-- /.contact__panel-info-top -->
                  <div class="contact__panel-info-bottom bg-theme2">
                    <strong class="contact__panel-info-title">We will get back to you within 24 hours, or call us
                      everyday, 09:00 AM - 12:00 PM</strong>
                    <div class="contact__number d-flex align-items-center">
                      <i class="icon-phone"></i>
                      <a href="tel:0677512233">06 775 12 233</a>
                    </div>
                  </div><!-- /.contact__panel-info-bottom -->
                </div><!-- /.contact__panel-info -->
                <form method="post" action="assets/php/contact.php" id="contactForm" class="contact__panel-form">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact__panel-title">Subscription request</h4>
                      <!-- <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our
                        customers receive the best quality prices and service. We take great pride in everything that we
                        do in our factory.</p> -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <select class="form-control" style="display: none;">
                          <option>select your industry</option>
                          <option>Petroleum &amp; Gas Energy</option>
                          <option>Construction &amp; Engineering</option>
                          <option>Mechanical Engineering</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Additional Details!" id="contact-messgae"
                          name="contact-messgae" required></textarea>
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                      <button type="submit" class="btn btn__secondary mr-40">
                        <span class="mx-2">Submit Request</span><i class="icon-arrow-right mx-2"></i>
                      </button>
                      <div class="form-group input-radio my-3">
                        <label class="label-radio">I accept the privacy and terms.
                          <input type="checkbox" checked="">
                          <span class="radio-indicator"></span>
                        </label>
                      </div>
                    </div><!-- /.col-lg-12 -->
                  </div>
                </form>
              </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 2 -->

      <!-- ========================= 
      Testimonials layout 1
      =========================  -->
      <!-- <section class="container__testemonial">
    <div class="slider1">
      <div class="slide1 slide-1">
        <div class="slide-text">
          <p class="testimonial-text">
            “ I’ve been interested in coding for a while but never taken the jump, until now. 
  I couldn’t recommend this course enough. I’m now in the job of my dreams and so 
  excited about the future. ”
          </p>
          <p class="author-text">Tanya Sinclair
            <span>UX Engineer</span></p>
        </div>
        <div class="slide-img">
          <img src="{{ asset('images/blog/blog-1.jpg')}}" alt="img">
        </div>
      </div>
      <div class="slide1 slide-2">
        <div class="slide-text">
          <p class="testimonial-text">
            “ If you want to lay the best foundation possible I’d recommend taking this course. 
  The depth the instructors go into is incredible. I now feel so confident about 
  starting up as a professional developer. ”
          </p>
          <p class="author-text">John Tarkpor
            <span>Junior Front-end Developer</span></p>
        </div>
        <div class="slide-img">
          <img src="{{ asset('images/blog/blog-1.jpg')}}" alt="img">
        </div>
      </div>
      <div class="buttons">
        <div class="next"></div>
        <div class="prev"></div>
      </div>
    </div>
  </section>
  
  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Your Name Here</a>.
  </div> -->
    <!-- ======================
      Blog 
    ========================= -->
   
    <section class=section__blog>
    <div class="container2">
      <header class=header__blog>
        <h1>Recent Articles</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse laborum, officia delectus corrupti modi natus?</p>
      </header>

      <main class=main__blog>
        <div class="singleBlog">
          <img class=blog__img src="{{ asset('images/blog/project-1.jpg')}}" alt="">
          <div class="blogContent">
          <h3>Handyman <span>Service</span></h3>
            <p>By <a href="#">douha</a> | <a href="#">Jul 21, 2020</a></p>
            <a class=link__blog href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="singleBlog">
          <img class=blog__img src="{{ asset('images/blog/project-2.jpg')}}" alt="">
          <div class="blogContent">
          <h3>Handyman <span>Service</span></h3>
            <p>By <a href="#">Jihad</a> | <a href="#">Jul 21, 2020</a></p>
            <a class=link__blog  href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="singleBlog">
          <img class=blog__img src="{{ asset('images/blog/project-3.jpg')}}" alt="">
          <div class="blogContent">
          <h3>Handyman <span>Service</span></h3>
            <p>By <a href="#">Taha</a> | <a href="#">Jul 21, 2020</a></p>
            <a class=link__blog  href="#" class="btn">Read More</a>
          </div>
        </div>
        <div class="singleBlog">
          <img  class=blog__img src="{{ asset('images/blog/project-4.jpg')}}" alt="">
          <div class="blogContent">
          <h3>Handyman <span>Service</span></h3>
            <p>By <a href="#">Manal</a> | <a href="#">Jul 21, 2020</a></p>
            <a class=link__blog  href="#" class="btn">Read More</a>
          </div>
        </div>
      </main>
    </div>
  </section>
    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="google-map-layout2 p-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 ">
            <div class="contact-info-carousel">
              <h5 class="contact__info-title">Locations</h5>
              <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false}'>
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Youssoufia Office</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>2307 Agendis, youssoufia 11226 Morocco.</li>
                    <li>Email: <a href="#">bricoleur@maroc.com</a></li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
                <div class="contact-info-box">
                  <h4 class="contact__info-box-title">Casablanca Office</h4>
                  <ul class="contact__info-list list-unstyled">
                    <li>2307 Agendis, youssoufia 11226 Morocco.</li>
                    <li>Email: <a href="#">bricoleur@maroc.com</a></li>
                    <li>Hours: Mon-Fri: 8am – 7pm</li>
                  </ul><!-- /.contact__info-list -->
                </div><!-- /.contact-info-box -->
              </div><!-- /.slick-carousel -->
            </div><!-- /.contact-info-carousel -->
            <div id="map" style="height: 460px;"></div>
            <script src="assets/js/google-map.js"></script>
            <script src="assets/js/google-map.js"></script>
            <script
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&callback=initMap"
              async defer></script>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.GoogleMap -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 col-xl-4 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="{{ asset('images/logo/logo5.png')}}"  alt="logo" class="mb-30">
                <p class="mb-20">A leading developer of A-grade commercial, industrial and residential projects in USA.
                  Since its foundation the company has doubled its turnover year on year with its staff.</p>
                <ul class="social__icons list-unstyled">
                  <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div>
            </div><!-- /.col-xl-4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Services</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Construction Manage</a></li>
                    <li><a href="#">Construction Consultants</a></li>
                    <li><a href="#">Architecture & Building</a></li>
                    <li><a href="#">Home Renovations</a></li>
                    <li><a href="#">Tiling & Painiting</a></li>
                    <li><a href="#">Interior Design</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">Company</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="leadership-team.html">Meet Our Team</a></li>
                    <li><a href="blog.html">News & Media</a></li>
                    <li><a href="projects-grid.html">Case Studies</a></li>
                    <li><a href="contacs.html">Contacts</a></li>
                    <li><a href="careers.html">Careers</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 footer__widget footer__widget-newsletter">
              <h6 class="footer__widget-title">Newsletter</h6>
              <div class="footer__widget-content">
                <p>Sign up for Handyman alerts, our latest news, thoughts, and insights from Bricoleur.</p>
                <form class="widget__newsletter-form">
                  <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <button type="submit" class="btn btn__primary">
                      <i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </form>
              </div><!-- /.footer-widget-content -->
              <p class="text-right footer__more-info mt-20 mb-0">Have a question? <a href="#">Click here</a></p>
            </div><!-- /.col-xl-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap justify-content-between">
              <nav>
                <ul class="footer__copyright-links list-unstyled d-flex flex-wrap mb-0">
                  <li><a href="#">Terms & Conditions </a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </nav>
              <p class="mb-0 color-white"> &copy; 2020 Bricoleur. With Love by
                <a href="#">Bricoleur.com</a>
              </p>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

  </div><!-- /.wrapper -->

                      <script src="{{ asset('js/slider.js') }}"></script>
                      <script src="{{ asset('js/news.js') }}"></script>
                      <script src="{{ asset('js/Testemonial.js') }}"></script>
                      <script src="{{ asset('js/google-map.js') }}"></script>
                    
              
</body>

</html>


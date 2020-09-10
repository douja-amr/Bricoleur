<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Bricoleur">
    <title>Bricoleur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="assets/css/company.css">
    <link rel="stylesheet" href="{{ asset ('css/company.css') }}">

</head>

<body>
<script src="{{ asset('https://use.fontawesome.com/1d7bf7174c.js') }}"></script>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->

  


        <!-- ========================
       page title 
    =========================== -->
       
        <!-- ========================
      About Layout 2
    =========================== -->
        <section class="about-layout2">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-block">
                        <div class="heading-layout2 mb-30">
                            <span class="heading__subtitle1">Leading The Way In Handyman busnisses</span>
                            <h2 class="heading__title1"> Better  Home maintenance Than Ever!!</h2>
                            <p class="heading__desc mb-30 mt-40">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Doloremque laborum quis assumenda ullam laboriosam animi, aut sapiente molestias omnis corporis 
                                 voluptas illum dignissimositaque dicta beatae officiis dolore aspernatur accusamus!.</p>
                            <p class="heading__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div><!-- /heading -->
                        <ul class="list-items list-unstyled mb-40">
                            <li><i></i>Paint & Floor </li>
                            <li>Kitchen / cleaning </li>
                            <li>Electricity</li>
                            <li>Plumbing</li>
                            <li>Outdoor gardener</li>
                            <li>Small Works</li>
                    
                        </ul>
                        <a href="projects-grid.html" class="btn btn__secondary btn__icon">
                            <span>Latest Projects</span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div><!-- /.col-xl-7 -->
                    <div class="imgs-block mt-50">
                        <div class="about__img">
                            <img src="{{asset('images/about1.jpg')}}" alt="about" class="img-fluid w-100">
                        </div><!-- /.about-img -->
                      
                    </div><!-- /.col-xl-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.About Layout 2 -->

        <!-- =========================
       Banner layout 1
      =========================== -->
        <section class="banner-layout1 p-0">
            <div class="container-fluid col-padding-0 bg-theme">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 background-banner">
                        <div class="bg-img"><img src="{{asset('images/about2.png')}}"></div>
                        <div class="cta__banner">
                            <div class="bg-img"
                            style="background-image:url({{url('images/11.jpg')}})">
                                
                </div>
                           
                        </div><!-- /.cta__banner -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="inner-padding">
                            <div class="heading-layout2 heading-light mb-40">
                                <h2 class="heading__title">Find All Handyman Here</h2>
                                <p class="heading__desc">Lorem ipsum dolor sit amet consectetur, 
                                    adipisicing elit. Nobis qui at omnis natus dignissimos, aperiam voluptates
                            .</p>
                            </div><!-- /.heading -->
                            <div class="row fancybox-light">
                                <!-- fancybox item #1 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="fancybox-item">
                                        <div class="fancybox__icon">
                                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                        </div><!-- /.fancybox-icon -->
                                        <div class="fancybox__content">
                                            <h4 class="fancybox__title">Find a handyman<br> Now</h4>
                                            <p class="fancybox__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi earum autem 
                                                consequatur soluta harum eaque sed voluptatem,</p>
                                        </div><!-- /.fancybox-content -->
                                    </div><!-- /.fancybox-item -->
                                </div><!-- /.col-lg-6 -->
                                <!-- fancybox item #2 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="fancybox-item">
                                        <div class="fancybox__icon">
                                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                        </div><!-- /.fancybox-icon -->
                                        <div class="fancybox__content">
                                            <h4 class="fancybox__title">Make a deal <br>easly </h4>
                                            <p class="fancybox__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi earum autem 
                                                consequatur soluta harum eaque sed voluptatem,</p>
                                        </div><!-- /.fancybox-content -->
                                    </div><!-- /.fancybox-item -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <a href="request-quote.html" class="btn btn__white btn__bordered btn__icon box-shadow-none">
                                <span>Request A Service</span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.Banner layout 1 -->

        
        
</body>

</html>
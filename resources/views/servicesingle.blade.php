@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Bricoleur">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>servicesingle</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/srvcsingle.css') }}">
</head>

<body>

 <!----------------------- page title  -------------------------->
<section class="page-title page-title-layout6 bg-overlay bg-overlay-2 bg-parallax">
    <div class="bg-img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <h1 id="pagetitle" class="pagetitle__heading mb-0">Good Work Only Happens With The Best Handyman</h1>
                </div>
            </div>
        </div>
    </div>
</section>

 <!---------------- Text Content Section ------------------>
<section class="text-content-section pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar mb-30">
                    <div class="widget widget-categories">
                        <h5 class="widget__title">Services</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="active"><span>Paint & Floor</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Kitchen / cleaning</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Electricity</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Plumbing</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Outdoor gardener</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><span>Small Works</span><i class="icon-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                                <!-- /.widget-content -->
                    </div>
                            <!-- /.widget-categories -->
                    <div class="widget widget-help bg-theme">
                        <div class="widget__content">
                            <h5>Multiple professions and good services.</h5>
                                <p>We have many professionals from different cities.</p>
                                <a href="request-quote.html" class="btn btn__white btn__link">
                                  <span class="color-white">Get A Quote</span> 
                                  <i class="icon-arrow-right"></i>
                                </a>
                        </div>  
                    </div>
                </aside> 
            </div>
                    <!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                <h5 class="mb-40">Our site brings the handyman closer to the customer
                         With just one click, you can choose an autonomous handyman in your city
                         to provide you with the service you need.</h5>
                <h6>here are some pictures of the work of our handymen</h6>
                <div class="portfolio-grid-layout2">
                    <div class="row">
                        <!-- portfolio item #1 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('images/service/peint1.jpg')}}" alt="portfolio img">
                                </div>
                        <!-- /.portfolio-img -->
                                <div class="portfolio__content">
                                    <h4 class="portfolio__title"><a href="#">Laying the parquet</a></h4>
                                            <!-- /.portfolio-cat -->
                                </div>
                                        <!-- /.portfolio-content -->
                            </div>
                                    <!-- /.portfolio-item -->
                        </div>
                         <!-- /.col-lg-4 -->
                         <!-- portfolio item #2 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('images/service/peint2.jpg')}}" alt="portfolio img">
                                </div>
                                <!-- /.portfolio-img -->

                                <div class="portfolio__content">
                                    <h4 class="portfolio__title"><a href="#"> earthenware laying</a></h4>
                                    <!-- /.portfolio-cat -->
                                </div>
                                <!-- /.portfolio-content -->
                            </div>
                                    <!-- /.portfolio-item -->
                        </div>
                        <!-- /.col-lg-4 -->

                        <!-- portfolio item #3 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="{{ asset('images/service/peint3.jpg')}}" alt="portfolio img">
                                </div>
                                <!-- /.portfolio-img -->
                                <div class="portfolio__content">
                                    <h4 class="portfolio__title"><a href="#">Moroccan Gypsum</a></h4>
                                    <!-- /.portfolio-cat -->
                                </div>
                                <!-- /.portfolio-content -->
                                </div>
                                <!-- /.portfolio-item -->
                            </div>
                            <!-- /.col-lg-4 -->
                                
                            <!-- portfolio item #4 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('images/service/peint4.jpg')}}" alt="portfolio img">
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="portfolio__content">
                                      <h4 class="portfolio__title"><a href="#">Applying wallpaper</a></h4>
                                       <!-- /.portfolio-cat -->
                                    </div>
                                <!-- /.portfolio-content -->
                                </div>
                                    <!-- /.portfolio-item -->
                            </div>
                                <!-- /.col-lg-4 -->
                                <!-- portfolio item #5 -->
                            <div class="col-sm-6 col-md-6 col-lg-6 portfolio-hidden">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('images/service/peint5.jpg')}}" alt="portfolio img">
                                    </div>
                                        <!-- /.portfolio-img -->
                                        <div class="portfolio__content">
                                            <h4 class="portfolio__title"><a href="#">laying marble</a></h4>
                                         <!-- /.portfolio-cat -->
                                        </div>
                                        <!-- /.portfolio-content -->
                                </div>
                                    <!-- /.portfolio-item -->
                            </div>
                                <!-- /.col-lg-4 -->
                                <!-- portfolio item #6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6 portfolio-hidden">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('images/service/peint6.jpg')}}" alt="portfolio img">
                                    </div>
                                    <!-- /.portfolio-img -->
                                    <div class="portfolio__content">
                                        <h4 class="portfolio__title"><a href="#">Hedge trimmer</a></h4>
                                        <!-- /.portfolio-cat -->
                                    </div>
                                    <!-- /.portfolio-content -->
                                </div>
                                    <!-- /.portfolio-item -->
                            </div>
                                <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center mb-60">
                            <button type="button" class="btn btn__link btn__loadMore loadMoreportfolio">
                                <span>More Project</span><i>+</i>
                            </button>
                        </div>
                    <!-- /.col-lg-12 -->
                    </div>
            </div>            
        </div>
    </div>    
</section>    

    <!-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/secte.js') }}"></script> -->
</body>

</html>

@endsection
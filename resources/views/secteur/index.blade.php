@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
    <meta name="description" content="Bricoleur">
    <!-- <link href="assets/images/favicon/favicon.png" rel="icon"> -->
    <title>page secteur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <!-- <link rel="stylesheet" href="assets/css/libraries.css"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/secteur.css') }}">
    
</head>

<body>
<section class="contain">
    <div class="bg-image">
        <div class="title1">
            <p>Quickly</p>
            <p>Find</p>
            <p>A</p>
            <p>Professional</p>
        </div>
        <div class="gri">
            <div class="form-group">
                <select name="villes" id="villes" class="form-control1">
	                <option value='0' selected='selected'>Cities</option>
	                <option class="" value="1">YOUSSOUFIA</option>
	                <option class="" value="2">MARRAKECH</option>
	                <option class="" value="3">SAFI</option>
	                <option class="" value="4">AGADIR</option>
	                <option class="" value="5">ESSAOUIRA</option>
	                <option class="" value="6">ELJADIDA</option>
	                <option class="" value="7">RABAT</option>
                    <option class="" value="8">FES</option>
                    <option class="" value="9">CASABLANCA</option>
                    <option class="" value="10">TANGER</option>
                </select>
            
            </div>
            <div class="select-style">
                <select name="search_category" id="search_category" class="form-control1">
	                <option value='0' selected='selected'>Categories</option>
	                <option class="" value="1">Paint & Floor</option>
	                <option class="" value="2">Kitchen / cleaning</option>
	                <option class="" value="3">Electricity</option>
	                <option class="" value="4">Plumbing</option>
	                <option class="" value="5">Outdoor gardener</option>
	                <option class="" value="6">Small Works</option>  
                </select>
            </div>
                        
            <div>
                <a href="categories"> 
                    <button class="butn1" id="input" onclick="myFunction()" value="Submit">&#8981</button>
                </a>
            </div>
        </div>   
    </div>     
    </section>   
    
    <!------------------------ Services Layout 1-------------------->
        <section class="services-layout1 pt-120 pb-90 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="heading text-center mb-40">
                            <span class="heading__subtitle">The Best Services For You</span>
                            <h2 class="heading__title">With us, find the best solution for your needs!</h2>
                        </div>
                        <!-- /.heading -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__content">
                                <div class="service__icon">
                                    <img class="fit-picture"  src="{{ asset('images/service/paint-roller.png')}}"  alt="icone">
                                </div>
                                <!-- /.service__icon -->
                                <h4 class="service__title">Paint<br> & Floor</h4>
                                <p class="service__desc">painting and floors <br> Laying parquet or wallpaper <br> painting from floor to ceiling <br> Assembling furniture <br> Installing shelves <br> Attaching a curtain rod.</p>
                                <a href="servicesingle" class="btn btn__secondary btn__link">
                                    <span>Read more</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.service-content -->
                            <div class="service__overlay bg-overlay bg-overlay-theme">
                                <div class="bg-img"><img src="{{ asset('images/service/13.jpg')}}" alt="background"></div>
                            </div>
                            <!-- /.service__overlay -->
                        </div>
                        <!-- /.service-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__content">
                                <div class="service__icon">
                                    <img class="fit-picture"  src="{{ asset('images/service/cleaning.png')}}"  alt="icone">
                                </div>
                                <!-- /.service__icon -->
                                <h4 class="service__title">Kitchen <br> & cleaning</h4>
                                <p class="service__desc">Install the extractor hood <br> Install the oven <br> Replace the sink
                                                         <br> Prepare a complete kitchen <br> Clean the kitchen <br>
                                                         Marble installation</p>
                                <a href="servicesingle" class="btn btn__secondary btn__link">
                                    <span>Read more</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.service-content -->
                            <div class="service__overlay bg-overlay bg-overlay-theme">
                                <div class="bg-img"><img src="{{ asset('images/service/13.jpg')}}" alt="background"></div>
                            </div>
                            <!-- /.service__overlay -->
                        </div>
                        <!-- /.service-item -->
                    </div> 
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__content">
                                <div class="service__icon">
                                <img class="fit-picture"  src="{{ asset('images/service/farming.png')}}"  alt="icone">
                                </div>
                                <!-- /.service__icon -->
                                <h4 class="service__title">Outdoor <br> & gardener</h4>
                                <p class="service__desc">Lawn <br> Hedge trimming <br> Cutting a tree <br> Growing a garden
                                     <br> Lawn maintenance <br> Other gardening job</p>
                                <a href="servicesingle" class="btn btn__secondary btn__link">
                                    <span>Read more</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.service-content -->
                            <div class="service__overlay bg-overlay bg-overlay-theme">
                                <div class="bg-img"><img src="{{ asset('images/service/13.jpg')}}" alt="background"></div>
                            </div>
                            <!-- /.service__overlay -->
                        </div>
                        <!-- /.service-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__content">
                                <div class="service__icon">
                                    <img class="fit-picture"  src="{{ asset('images/service/electrician.png')}}"  alt="icone">
                                </div>
                                <!-- /.service__icon -->
                                <h4 class="service__title">Electricity</h4>
                                <p class="service__desc">Installation of electrical outlets <br> Installation of lamps and lights <br> Changing a bulb <br> Installation of connected objects Nest <br> Home automation <br> Installation of an electric heater.</p>
                                <a href="servicesingle" class="btn btn__secondary btn__link">
                                    <span>Read more</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.service-content -->
                            <div class="service__overlay bg-overlay bg-overlay-theme">
                                <div class="bg-img"><img src="{{ asset('images/service/13.jpg')}}" alt="background"></div>
                            </div>
                            <!-- /.service__overlay -->
                        </div>
                        <!-- /.service-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__content">
                                <div class="service__icon">
                                    <img class="fit-picture"  src="{{ asset('images/service/tools.png')}}"  alt="icone">
                                </div>
                                <!-- /.service__icon -->
                                <h4 class="service__title">Plumbing</h4>
                                <p class="service__desc">Repairing water leaks <br> Changing a toilet flush <br> Changing a faucet <br> Connecting a washing machine <br> Connecting a dishwasher
                                                        <br> Make the joints of the bathroom.</p>
                                <a href="servicesingle"class="btn btn__secondary btn__link">
                                    <span>Read more</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.service-content -->
                            <div class="service__overlay bg-overlay bg-overlay-theme">
                                <div class="bg-img"><img src="{{ asset('images/service/13.jpg')}}" alt="background"></div>
                            </div>
                            <!-- /.service__overlay -->
                        </div>
                        <!-- /.service-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service__content">
                                <div class="service__icon">
                                    <img class="fit-picture"  src="{{ asset('images/service/package.png')}}"  alt="icone">
                                </div>
                                <!-- /.service__icon -->
                                <h4 class="service__title">Small Works</h4>
                                <p class="service__desc">Assembly of furniture <br> Disassembly of furniture <br> Installation of curtain rods <br> Attach a television <br> Installation of a shower bar <br> Installation of exterior fencing</p>
                                <a href="servicesingle" class="btn btn__secondary btn__link">
                                    <span>Read more</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.service-content -->
                            <div class="service__overlay bg-overlay bg-overlay-theme">
                                <div class="bg-img"><img src="{{ asset('images/service/13.jpg')}}" alt="background"></div>
                            </div>
                            <!-- /.service__overlay -->
                        </div>
                        <!-- /.service-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <div class="add">
                    <a class="btn-add"type="button" href="{{url('bricoleur/create')}}">Add A Handyman</a>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.Services Layout 1 -->
    <!-- <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>-->
    <script src="{{ asset('js/secte.js') }}"></script>
     
</body>
</html>

@endsection










<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Secteurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-5 text-center">Les Secteurs</h2>
    <ul class="mx-auto" style="width: 75vw;">
      @foreach ($secteur as $sector)
      <li class="d-flex flex-row bd-highlight mb-3">
        {{$sector->nom_secteur}}
        <a type="button" class="btn btn-warning ml-auto" href="{{url('/secteur/'.$sector->id.'/edit')}}">Edit</a>
        <form action="{{url('secteur/'.$sector->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger mx-2" type="submit">Delete</button>
        </form>
      </li>
        @endforeach
    </ul>
    <div class="text-center">
      <a type="button" class="btn bg-secondary mt-3 px-5" href="{{url('secteur/create')}}">Ajouter un secteur</a>
    </div>
  </body>
</html> -->

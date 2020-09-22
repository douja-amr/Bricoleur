@extends('layouts.app')
@extends('layouts.nav')

@section('faqs')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/faqs.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/company.css')}}">
  </head>
  <body>

    
      
        <!-- ======================
           FAQ
        ========================= -->
        <section class="faq">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar mb-30">
                  <div class="widget widget-help bg-theme">
                    <div class="widget__content">
                      <h5>Dedicated Customer Teams & Agile Services</h5>
                      <p>Today Bricoleur has over 4,000 professionals on its payroll All Over The Country.</p>
                      <a href="request-quote.html" class="btn btn__white btn__link">
                        <span class="color-white">Get A Quote</span>
                      </a>
                    </div><!-- /.widget-download -->
                  </div><!-- /.widget-help -->
                  <div class="widget widget-download">
                    <h5 class="widget__title">Download</h5>
                    <div class="widget__content">
                    <a href="#" class="btn btn__primary btn__block mb-20">
                        <span>Company Report 2020</span>
                        <img class="icn" src="{{asset('images/icones/pdf.png')}}" alt="pdf">
                      </a>
                      <a href="#" class="btn btn__secondary btn__block btn__hover3">
                        <span>Company Brochure</span>
                        <img class="icn1" src="{{asset('images/icones/pdf.png')}}" alt="pdf">
                      </a>
                    </div><!-- /.widget-content -->
                  </div><!-- /.widget-download -->
                </aside><!-- /.sidebar -->
              </div><!-- /.col-lg-4 -->
              <div id="accordion" class="col-sm-12 col-md-12 col-lg-8">
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse1">
                    <a class="accordion__item-title" href="#">How do our DIY services work?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>1__Request a service <br> 2__Choose your city <br> 3__Smile, it's done!</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse2">
                    
                  <a class="accordion__item-title" href="#">What do-it-yourself work at home can be entrusted to Bricoleur?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>No more worrying, by calling on one of our jobeurs for your small DIY jobs, you are guaranteed to see your mission carried out in just a few hours by a handyman available, reliable and competent.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item ">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion__item-title" href="#">What is your goal for this site?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse show" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>Our goal is to bring our customers closer to you and to keep everyone happy. Our clients are the best team of dedicated experts</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse4">
                    <a class="accordion__item-title" href="#">Do you intend to add other services to the site?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse4" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>We can do this in the future depending on the needs of our website visitors</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse5">
                    <a class="accordion__item-title" href="#">Any contracts or obligations?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse5" class="collapse" data-parent="#accordion">
                    <div class="accordion__item-body">
                      <p>You don't need any of this.You only have to contact the worker and understand him about the work and the price of the service</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div>
        </section><!-- /.FAQ -->
    
    
        <!-- ========================
          Footer
        ========================== -->
      
       
    
      </div><!-- /.wrapper -->

      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
          crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
          integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
          crossorigin="anonymous"></script>
  </body>
</html>
@endsection
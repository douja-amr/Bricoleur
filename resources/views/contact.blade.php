@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Contacts</title> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <!-- ==========================
        contact layout
    =========================== -->

    <section class="contact-layout1 pt-0 pb-70">
      <div class="container contact">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
              <div class="contact__panel-info">
                <div class="contact__panel-info-top">
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Our Location</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>123 Dis. Alqods, Youssoufia 46300 Morocco.</li>
                    </ul>

                  </div>

                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Quick Contact</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>Email: <a href="mailto:bricoleur@gmail.com">bricoleur@gmail.com</a></li>
                      <li>Support: <a href="mailto:bricoleur@gmail.com">bricoleur@gmail.com</a></li>
                    </ul>

                  </div>

                </div>

                <div class="contact__panel-info-bottom">
                  <strong class="contact__panel-info-title">We will get back to you within 24 hours, or call us
                    everyday, 09:00 AM - 12:00 PM</strong>
                  <div class="contact__number d-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:212523456789">212 5 23456789</a>
                  </div>
                </div>

              </div>

              <form method="post" action="assets/php/contact.php" id="contactForm" class="contact__panel-form">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact__panel-title">Get In Touch</h4>
                    <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our customers receive the best quality prices and service. We take great pride in everything that we do in our platform.</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="FirstName" id="contact-name" name="contact-name" required>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="LastName" id="contact-subject" name="contact-subject" required>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email" required>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone" required>
                    </div>
                  </div>


                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details!" placeholder="Message" id="contact-messgae" name="contact-messgae" required></textarea>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__primary btn__block  btn__lg">
                      <span class="mx-2">Submit Request</span><i class="icon-arrow-right mx-2"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div>

                </div>

              </form>
            </div>

          </div>

        </div>

      </div>

    </section>

  </body>
</html>
@endsection

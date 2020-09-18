<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/secteur.css') }}">
    
</head>
<body>
  <div>
    <h2 class="text-secondary mt-5 text-center text3">Add a city</h2>
    <form action="{{url('/ville')}}" method="post">
      @csrf
      <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control form3" type="text" name="nom_ville" aria-describedby="button-addon2">
      <div class="input-group-append input3">
      <a class="btn btn-outline-secondary" id="button-addon2" type="submit" href="{{url('bricoleur/create')}}">Add</a>
      </div>
    </form>
  </div>
  

</body>
</html>




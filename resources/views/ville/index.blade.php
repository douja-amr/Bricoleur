<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/brico.css') }}">
    
</head>

<body class="bg-light">
<h2 class="text-secondary mb-5 text-center">the cities</h2>


<div class="container">
  @foreach ($ville as $vill)
    <div>
    {{$vill->nom_ville}}
    </div>
    <div>
    <a href="{{url('/ville/'.$vill->id.'/edit')}}">Edit</a>
    </div>
    <div>
    <form action="{{url('ville/'.$vill->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
    </form>
    </div>
    @endforeach

</div>

</body>
</html>

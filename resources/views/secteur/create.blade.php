<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/secteur.css') }}">
  </head>
  <body class="bg-light">
  <div>
    <h2 class="text-secondary mt-5 text-center text2">add a category</h2>
    <form action="{{url('/secteur')}}" method="post">
      @csrf
      <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control form2" type="text" name="nom_secteur" aria-describedby="button-addon2">
      <div class="input-group-append input2">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ajouter</button>
      </div>
    </form>
  </div>
  <div class="add">
      <a class="btn-add" type="button"  href="{{url('ville/create')}}">click to add a city</a>
    </div>
  </body>
</html>

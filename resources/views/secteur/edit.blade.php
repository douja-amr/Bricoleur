<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mt-5 text-center">Modifier une secteur</h2>
    <form class="" action="{{url('/secteur/'.$secteur->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="input-group mx-auto" style="width: 500px; margin-top: 30vh">
      <input class="form-control" type="text" name="nom_secteur" value="{{$secteur->nom_secteur}}">
      <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">Modify</button>
    </div>
    </form>
  </div>
  </body>
</html>

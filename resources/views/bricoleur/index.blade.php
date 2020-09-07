<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bricileurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-5 text-center">Les Bricoleurs</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nom</th>
          <th scope="col">prénom</th>
          <th scope="col">téléphone</th>
          <th scope="col">CIN</th>
          <th scope="col">émail</th>
          <th scope="col">image</th>
          <th scope="col">ville_id</th>
          <th scope="col">secteur_id</th>
          <th scope="col">user_id</th>
          <th scope="col">approuver</th>
          <th scope="col">Modifier</th>
          <th scope="col">Suprimer</th>


        </tr>
      </thead>
      @foreach ($bricoleur as $bricolor)
      <tbody>
        <tr>

          <th scope="row">{{$bricolor->id}}</th>
          <td>{{$bricolor->nom}}</td>
          <td>{{$bricolor->prenom}}</td>
          <td>{{$bricolor->telephone}}</td>
          <td>{{$bricolor->CIN}}</td>
          <td>{{$bricolor->email}}</td>
          <td>{{$bricolor->image}}</td>
          @foreach($villes as $ville)
          @if($bricolor->ville_id == $ville->id)
          <td>{{$ville->nom_ville}}</td>
          @endif
          @endforeach
          @foreach($secteurs as $sector)
          @if($bricolor->secteur_id == $sector->id)
          <td>{{$sector->nom_secteur}}</td>
          @endif
          @endforeach
          @foreach($users as $user)
          @if($bricolor->user_id == $user->id)
          <td>{{$user->name}}</td>
          @endif
          @endforeach
          <td>{{$bricolor->approuver}}</td>
          <td><a type="button" class="btn btn-warning ml-auto" href="{{url('/bricoleur/'.$bricolor->id.'/edit')}}">Edit</a></td>
          <td><form action="{{url('bricoleur/'.$bricolor->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
          </form></td>


        </tr>
      </tbody>
      @endforeach
    </table>

    <div class="text-center">

      <a type="button" class="btn bg-secondary mt-3 px-5" href="{{url('bricoleur/create')}}">Ajouter un bricoleur</a>
    </div>
  </body>
</html>

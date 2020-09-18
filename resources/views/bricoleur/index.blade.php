<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bricileurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/brico.css') }}">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-5 text-center">Our Handymen</h2>
    <table class="table table-striped">
      <thead>
        <tr id="myth">
          
          <th class="th" id="myth" scope="col">#</th>
          <th scope="col">image</th>
          <th scope="col">F Name</th>
          <th scope="col">L Name</th>
          <th scope="col">Phone</th>
          <th scope="col">NIC</th>
          <th scope="col">Email</th>
          <th scope="col">City</th>
          <th scope="col">Category</th>
          <th scope="col">User</th>
          <th scope="col">Approved</th>
          <th scope="col">Modifier</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      @foreach ($bricoleur as $bricolor)
      <tbody class="list">
        <tr>
          <th scope="row">{{$bricolor->id}}</th>
          <td><img class="brico-img" src="{{Storage::disk('local')->url($bricolor->image)}}" alt=""></td>
          <td class="th-info">{{$bricolor->nom}}</td>
          <td class="th-info">{{$bricolor->prenom}}</td>
          <td class="th-info">{{$bricolor->telephone}}</td>
          <td class="th-info">{{$bricolor->CIN}}</td>
          <td class="th-info">{{$bricolor->email}}</td>
          
          @foreach($villes as $ville)
          @if($bricolor->ville_id == $ville->id)
          <td class="th-info">{{$ville->nom_ville}}</td>
          @endif
          @endforeach
          @foreach($secteurs as $sector)
          @if($bricolor->secteur_id == $sector->id)
          <td class="th-info">{{$sector->nom_secteur}}</td>
          @endif
          @endforeach
          @foreach($users as $user)
          @if($bricolor->user_id == $user->id)
          <td class="th-info">{{$user->name}}</td>
          @endif
          @endforeach
          <td class="th-info">{{$bricolor->approuver}}</td>
          <td class="th-info"><a type="button" class="btn btn-warning ml-auto" href="{{url('/bricoleur/'.$bricolor->id.'/edit')}}">Edit</a></td>
          <td class="th-info"><form action="{{url('bricoleur/'.$bricolor->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mx-2" type="submit">Delete</button>
          </form></td>
        </tr>
      </tbody>
      @endforeach
    </table>

    <!-- <div class="text-center">
      <a type="button" class="btn btnn bg-secondary mt-3 px-5" href="{{url('bricoleur/create')}}">Add A New Handyman</a>
    </div> -->
    <script src="{{ asset('js/secte.js') }}"></script>
  </body>
</html>

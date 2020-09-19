<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <h2 class="text-secondary mb-3 text-center">Add a Handyman</h2>
    <form action="{{url('/bricoleur/'.$bricol->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="input-group mx-auto" style="width: 500px; ">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">L.Name</span>
          </div>
          <input type="text" class="form-control" value="{{$bricol->nom}}" name="nom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">F.Name</span>
          </div>
          <input type="text" class="form-control" value="{{$bricol->prenom}}" name="prenom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
          </div>
          <input type="text" class="form-control" value="{{$bricol->telephone}}" name="telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">I.D</span>
          </div>
          <input type="text" class="form-control" value="{{$bricol->CIN}}" name="CIN" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          </div>
          <input type="text" class="form-control" value="{{$bricol->email}}" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"  id="inputGroupFileAddon01">Image</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" value="{{$bricol->image}}" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">City</span>
        </div>
        <select class="custom-select" name="ville_id">
          @foreach ($villes as $ville)

          <option value="{{$ville->id}}">{{$ville->nom_ville}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Sector</span>
        </div>
        <select class="custom-select" name="secteur_id">
          @foreach ($sectors as $sector)

          <option value="{{$sector->id}}">{{$sector->nom_secteur}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">User</span>
        </div>
        <select class="custom-select" name="user_id">
          @foreach ($usrs as $usr)

          <option value="{{$usr->id}}">{{$usr->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Approved</span>
        </div>
        <input type="text" class="form-control" value="{{$bricol->approuver}}" name="approuver" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Modify</button>
        </div>
      </div>
      </div>
    </form>
  </body>
</html>

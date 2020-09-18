<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/brico.css') }}">
  </head>

  <body>
    <section class="bg">
    <h2 class="text-secondary mb-3 text-center">Add A Handyman</h2>
    <form class="formul" action="{{url('/bricoleur')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="input-group mx-auto" style="width: 500px;">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
          </div>
          <input type="text" class="form-control" value="" name="nom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
          </div>
          <input type="text" class="form-control" value="" name="prenom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">phone</span>
          </div>
          <input type="text" class="form-control" name="telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">N.I.C</span>
          </div>
          <input type="text" class="form-control" name="CIN" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          </div>
          <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
      </div>
      <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
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
          <span class="input-group-text" id="inputGroup-sizing-default">category</span>
        </div>
        <select class="custom-select" name="secteur_id">
          @foreach ($secteurs as $sector)

          <option value="{{$sector->id}}">{{$sector->nom_secteur}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">User</span>
        </div>
        <select class="custom-select" name="user_id">
          @foreach ($users as $usr)
          <option value="{{$usr->id}}">{{$usr->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Approved</span>
        </div>
        <input type="text" class="form-control" name="approuver" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
        </div>
      </div>
      </div>
      <div class="add">
          <a class="btn-add"type="button" href="{{url('ville/create')}}">Add A City</a>
          <a class="btn-add"type="button" href="{{url('secteur/create')}}">Add A Category</a>
    </div>
    </form>  
  </section>
  </body>
</html>

<form class="" action="{{url('/ville')}}" method="post">
  @csrf
  <input type="text" name="nom_ville">
  <button type="submit">Ajouter</button>
</form>

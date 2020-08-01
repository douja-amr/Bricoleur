<form class="" action="{{url('/ville/'.$ville->id)}}" method="post">
  @csrf
  @method('PUT')
  <input type="text" name="nom_ville" value="{{$ville->nom_ville}}">
  <button type="submit">Modify</button>
</form>

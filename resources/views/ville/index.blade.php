<h1>Les villes</h1>
<ul>
  @foreach ($ville as $vill)
  <li>
    {{$vill->nom_ville}}
    <a href="{{url('/ville/'.$vill->id.'/edit')}}">Edit</a>
    <form action="{{url('ville/'.$vill->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
    </form>
  </li>
    @endforeach
</ul>

<h1>Crops</h1>
<ul>
  @foreach($crops as $crop)
    <li>{{ $crop->name }}</li>
  @endforeach
</ul>

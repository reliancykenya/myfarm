<h1>Edit {{ $crop->name }}</h1>
<form method="POST" action="{{ route('crops.update', $crop->id) }}">
  @csrf
  @method('PUT')
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $crop->name }}" required>
  </div>
  <div>
    <label for="description">Description:</label>
    <textarea name="description" id="description">{{ $crop->description }}</textarea>
  </div>
  <div>
    <label for="planting_date">Planting Date:</label>
    <input type="date" name="planting_date" id="planting_date" value="{{ $crop->planting_date }}" required>
  </div>
  <div>
    <label for="harvest_date">Harvest Date:</label>
    <input type="date" name="harvest_date" id="harvest_date" value="{{ $crop->harvest_date }}" required>
  </div>
  <button type="submit">Update Crop</button>
</form>

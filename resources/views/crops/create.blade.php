<h1>Add New Crop</h1>
<form method="POST" action="{{ route('crops.store') }}">
  @csrf
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
  </div>
  <div>
    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>
  </div>
  <div>
    <label for="planting_date">Planting Date:</label>
    <input type="date" name="planting_date" id="planting_date" required>
  </div>
  <div>
    <label for="harvest_date">Harvest Date:</label>
    <input type="date" name="harvest_date" id="harvest_date" required>
  </div>
  <button type="submit">Add Crop</button>
</form>

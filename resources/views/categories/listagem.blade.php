<label for="category">Categoria:</label>
<select id="category" name="category_id">
@foreach ($categories as $category):
    <option value=" {{$category->id}} "> {{$category->name}} </option>
@endforeach
</select>
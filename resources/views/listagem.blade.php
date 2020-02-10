@extends('main')

@section('selectCategory')
    <h2>Selecione uma categoria</h2>

    <label for="cars">Categoria:</label>

    <select>
        <?php foreach ($categories as $category): ?>
            <option value=" {{$category->id}} "> {{$category->name}} </option>
        <?php endforeach ?>
    </select>
@stop
        
@extends('layout/main')

@section('selectCategory')
    <h2>Selecione uma categoria</h2>

    <label for="cars">Categoria:</label>

    <select>
       @foreach ($categories as $category):
            <option value=" {{$category->id}} "> {{$category->name}} </option>
        @endforeach
    </select>
@stop
        
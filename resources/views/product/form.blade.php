@extends('layout/main')

@section('newProduct')
    <h1>Castro de Produtos</h1>
    <form>
        <label>Nome</label>
        <input/>
        <label>Descricao</label>
        <input/>
        <label>Valor</label>
        <input/>
        <label>Quantidade</label>
        <input type="number"/>
        <label for="cars">Categoria:</label>
        <button type="submit">Submit</button>
    </form>
@stop
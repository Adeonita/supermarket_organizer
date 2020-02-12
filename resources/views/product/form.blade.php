@extends('layout/main')

@section('newProduct')
    <h1>Castro de Produtos</h1>
    <form action="/product/add" method="post">
        <!--Inserção de token para evitar envios maliciosos-->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label>Nome</label>
            <input name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="description" class="form-control">
        </div>
            <div class="form-group">
            <label>Preço</label>
            <input name="price" class="form-control">
        </div>
        <div class="form-group">
            @include('categories/listagem', ['categories'=> $categories])
        </div>
        <button type="submit" class="btn
        btn-primary btn-block">Submit</button>
    </form>
            
@stop
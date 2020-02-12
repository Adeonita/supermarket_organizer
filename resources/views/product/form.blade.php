@extends('layout/main')

@section('newProduct')
    <h1>Castro de Produtos</h1>
    <form action="product/add" method="post">
        <div class="form-group">
            <label>Nome</label>
            <input name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="description" class="form-control">
        </div>
            <div class="form-group">
            <label>Valor</label>
            <input name="value" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="amount" type="number" class="form-control">
        </div>
        <div class="form-group">
            <label>Categoria</label>
        </div>
        <button type="submit" class="btn
        btn-primary btn-block">Submit</button>
    </form>
            
@stop
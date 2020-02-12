@extends('layout/main')

@section('newProduct')
    <h1>Castro de Produtos</h1>
    <form>
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input class="form-control">
        </div>
            <div class="form-group">
            <label>Valor</label>
            <input class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control">
        </div>
        <div class="form-group">
            <label>Categoria</label>
        </div>
        <button type="submit" class="btn
        btn-primary btn-block">Submit</button>
    </form>
            
@stop
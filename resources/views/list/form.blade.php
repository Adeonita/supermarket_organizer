@extends('layout/main')

@section('conteudo')
<h1>Castro de Listas</h1>
    <form action="{createList}" method="post">
        <!--Inserção de token para evitar envios maliciosos-->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label>Lista</label>
            <input name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="description" class="form-control">
        </div>
        <button type="submit" class="btn
        btn-primary btn-block">Submit</button>
    </form>
@stop
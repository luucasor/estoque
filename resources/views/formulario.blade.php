@extends('principal')

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@section('conteudo')
  <form action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="form-group">
      <label>Nome</label>
      <input name="nome" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input name="valor" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input name="quantidade" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Tamanho</label>
      <input name="tamanho" class="form-control"/>
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <input name="descricao" class="form-control"/>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>
  </form>
@stop

@extends('principal')

@section('conteudo')
  <form action="/produtos/altera" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{ $produto->id }}" />

    <div class="form-group">
      <label>Nome</label>
      <input name="nome" class="form-control" value="{{$produto->nome}}"/>
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input name="valor" class="form-control" value="{{$produto->valor}}"/>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input name="quantidade" class="form-control" value="{{$produto->quantidade}}"/>
    </div>
    <div class="form-group">
      <label>Tamanho</label>
      <input name="tamanho" class="form-control" value="{{$produto->tamanho}}"/>
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <input name="descricao" class="form-control" value="{{$produto->descricao}}"/>
    </div>

    <button class="btn btn-primary" type="submit">Alterar</button>
  </form>
@stop

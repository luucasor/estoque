@extends('principal')

@section('conteudo')
  <form action="/produtos/adiciona">

    <input type="hidden" name="_token" value="{{ csrf_token }}" />
    
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
      <label>Descrição</label>
      <input name="descricao" class="form-control"/>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>
  </form>
@stop

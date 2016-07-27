@extends('principal')

@section('conteudo')
<h1>Listagem de produtos</h1>
<table class="table table-striped table-bordered table-hover">
  @foreach($produtos as $p)
  <tr class="{{ $p->quantidade <=1 ? 'danger' : ''}}">
    <td> {{$p->nome}} </td>
    <td> {{$p->valor}} </td>
    <td> {{$p->descricao}} </td>
    <td> {{$p->quantidade}} </td>
    <td> {{$p->tamanho}} </td>
    <td>
        <a href="/produtos/mostra/{{$p->id}}">
          <span class="glyphicon glyphicon-search"></span>
        </a>
    </td>
    <td>
        <a href="/produtos/remove/{{$p->id}}">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
    </td>
    <td>
        <a href="/produtos/edita/{{$p->id}}">
          <span class="glyphicon glyphicon-pencil"></span>
        </a>
    </td>
  </tr>
  @endforeach
</table>

@if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong>
      O produto {{ old('nome') }} foi adicionado.
  </div>
@endif

@stop

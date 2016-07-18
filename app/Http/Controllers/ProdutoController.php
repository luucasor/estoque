<?php
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra(){
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        return view('detalhes')->with('p', $produto[0]);
    }

    public function novo(){
      return view('formulario');
    }

    public function adiciona(){

      $nome = Request::input('nome');
      $valor = Request::input('valor');
      $quantidade = Request::input('quantidade');
      $descricao = Request::input('descricao');

      DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)',
      array($nome, $valor, $descricao, $quantidade));

      return view('adicionado')->with('nome', $nome);
    }
}

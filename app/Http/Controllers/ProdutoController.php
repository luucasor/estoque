<?php
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function getProdutos(){
      return DB::select('select * from produtos');
    }

    public function lista(){
        return view('listagem')->with('produtos', $this->getProdutos());
    }

    public function listaJson(){
      return response()->json($this->getProdutos());
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

      //return redirect('/produtos')->withInput(Request::only('nome'));
      return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }
}

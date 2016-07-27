<?php
namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

class ProdutoController extends Controller {

    public function getProdutos(){
      return Produto::all();
    }

    public function lista(){
        return view('listagem')->with('produtos', $this->getProdutos());
    }

    public function listaJson(){
      return response()->json($this->getProdutos());
    }

    public function mostra($id){
        return view('detalhes')->with('p', Produto::find($id));
    }

    public function novo(){
      return view('formulario');
    }

    public function adiciona(){
        Produto::create(Request::all());
      return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function edita($id){
        $produto = Produto::find($id);
        return view('formulario-edita')->with('produto', $produto);
    }

    public function altera(){
        $id = Request::input('id');
        $produto = Produto::find($id);
        $produto->nome = Request::input('nome');
        $produto->quantidade = Request::input('quantidade');
        $produto->tamanho = Request::input('tamanho');
        $produto->valor = Request::input('valor');
        $produto->descricao = Request::input('descricao');
        $produto->save();
        return redirect()->action('ProdutoController@lista');
    }
}

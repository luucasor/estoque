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
}

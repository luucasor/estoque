<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //declarar o nome da tabela (se não definir por padrão é o nome da classe no plural ex: produtos)
    protected $table = 'produtos';
    //remove a adição dos campos update_at e create_at
    public $timestamps = false;

    //define os parâmetros passados para o construtor da classe model
    protected $fillable = array('nome', 'descricao', 'valor', 'quantidade', 'tamanho');

    //impedir que um determinado atributo seja alterado por parâmetro (usando o construtor da classe model)
    protected $guarded = ['id'];
}

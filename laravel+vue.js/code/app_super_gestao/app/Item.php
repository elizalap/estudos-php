<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Model Item que mapeia a tabela produtos tem um (hasOne) ItemDetalhe
 * que mapeia a tabela produto_detalhes
 */
class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function itemDetalhe()
    {
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor');
    }
}

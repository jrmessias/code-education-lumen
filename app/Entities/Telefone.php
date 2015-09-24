<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 23/09/2015
 * Time: 21:52
 */

namespace app\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function pessoa(){

    }

}
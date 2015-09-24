<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 23/09/2015
 * Time: 21:52
 */

namespace app\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        //$this->hasMany()
    }
}
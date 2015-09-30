<?php
/**
 * Created by PhpStorm.
 * User: Junior
 * Date: 23/09/2015
 * Time: 21:52
 */

namespace app\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Entities\Pessoa;

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

    public function getNumeroAttribute(){
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
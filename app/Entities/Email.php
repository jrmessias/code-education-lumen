<?php

namespace app\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Entities\Pessoa;

class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = [
        'descricao',
        'email'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
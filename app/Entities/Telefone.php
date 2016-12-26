<?php
namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descrição',
        'cod_país',
        'ddd',
        'prefixo',
        'sufixo'
    ];
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
    public function getNumeroAttribute(){
        return "{$this ->cod_país} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}
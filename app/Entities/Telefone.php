<?php
/**
 * Created by PhpStorm.
 * User: swr2d2
 * Date: 28/11/2016
 * Time: 22:29
 */

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
    public function getNumeroAttribute(){
        return "{$this ->cod_país} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: swr2d2
 * Date: 28/11/2016
 * Time: 22:25
 */

namespace CodeAgenda\Entities;


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
        //
     }
}
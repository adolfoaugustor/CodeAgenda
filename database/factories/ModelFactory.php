<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(CodeAgenda\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//    ];
//});

$factory->define(\CodeAgenda\Entities\Pessoa::class, function ($faker) {
    return [
        'nome'=> $faker ->name,
        'apelido'=> $faker ->firstname,
        'sexo'=> $faker ->randomElement(['F', 'M']),
    ];
});

$factory->define(\CodeAgenda\Entities\Telefone::class, function ($faker) {
    return [
        'descrição'=> $faker ->randomElement(['Residencial', 'Comercial', 'Celular', 'Recados']),
        'cod_país'=> $faker ->optional(0.7, 55)->numberBetween(1,197),
        'ddd'=> $faker ->numberBetween(11, 85),
        'prefixo'=> $faker ->randomNumber(4),
        'sufixo'=> $faker ->randomNumber(4),
        'pessoa_id'=> $faker ->faker->randomBetween(1, 30)
    ];
});
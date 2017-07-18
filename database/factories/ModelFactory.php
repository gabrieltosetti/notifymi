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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//PADRÃO, NÃO USAR (NÃO ESTÁ PRONTA
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nome' => $faker->name,
        'rg' => $faker->unique()->randomNumber,
        'cpf' => $faker->unique()->randomNumber,
        'cidade' => $faker->name,
        'telefone' => '(19)3232-4242',
        'celular' => '(19)98765-4321',
        'cidade' => $faker->city,
        'bairro' => $faker->name,
        'rua' => $faker->name,
        'numero' => '99',
        'email' => $faker->unique()->safeEmail,
        'password' => $password = Hash::make('secret'),
        'permissao' => '0',
        'id_cargo' => '1',
        'id_assistencia' => '1',
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nome' => $faker->name,
        'rg' => $faker->unique()->randomNumber,
        'cpf' => $faker->unique()->randomNumber,
        'cidade' => $faker->name,
        'telefone' => '(19)3232-4242',
        'celular' => '(19)98765-4321',
        'cidade' => $faker->city,
        'bairro' => $faker->name,
        'rua' => $faker->name,
        'numero' => '99',
        'email' => $faker->unique()->safeEmail,
        'senha' => $password ?: $password = 'secret',
        ];
});

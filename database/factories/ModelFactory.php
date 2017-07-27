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
        'telefone' => '(19)3232-4242',
        'celular' => '(19)98765-4321',
        'cidade' => $faker->city,
        'bairro' => $faker->citySuffix,
        'rua' => $faker->streetName,
        'numero' => $faker->numberBetween($min = 1, $max = 999),
        'email' => $faker->unique()->safeEmail,
        'password' => $password = Hash::make('secret'),
        'permissao' => $faker->numberBetween($min = 1, $max = 3),
        'id_cargo' => $faker->numberBetween($min = 1, $max = 3),
        'id_assistencia' => $faker->numberBetween($min = 1, $max = 21),
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nome' => $faker->name,
        'rg' => $faker->unique()->randomNumber,
        'cpf' => $faker->unique()->randomNumber,
        'telefone' => '(19)3232-4242',
        'celular' => '(19)98765-4321',
        'cidade' => $faker->city,
        'bairro' => $faker->citySuffix,
        'rua' => $faker->streetName,
        'numero' => $faker->numberBetween($min = 1, $max = 999),
        'email' => $faker->unique()->safeEmail,
        'senha' => $password ?: $password = 'secret',
        ];
});

$factory->define(App\Assistencia::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->company,
        'descricao' => $faker->text($maxNbChars = 254),
        'email' => $faker->unique()->companyEmail,
        'especialidade' => $faker->text($maxNbChars = 49),
        'site' => 'www.naotemsite.com.br',
        'cnpj' => $faker->unique()->randomNumber,
        'telefone1' => '(19)3232-3232',
        'telefone2' => '(19)2323-2323',
        'celular' => '(19)98989-9898',
        'cidade' => $faker->city,
        'bairro' => $faker->citySuffix,
        'rua' => $faker->streetName,
        'numero' => $faker->numberBetween($min = 1, $max = 999),
        'completemento' => $faker->streetSuffix,
        ];
});

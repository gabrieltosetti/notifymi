<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    // $this->call(UsersTableSeeder::class);

    //Usuarios padroes
    DB::table('users')->insert([
      'name' => 'Matheus Luz',
      'email' => 'matheusluz@gmail.com',
      'password' => Hash::make('123'),
      'permissao' =>'4'
    ]);
    DB::table('users')->insert([
      'name' => 'Gabriel Tosetti',
      'email' => 'gt@notify.com',
      'password' => Hash::make('123'),
      'permissao' =>'4'
    ]);
    DB::table('users')->insert([
      'name' => 'Rafael Bella',
      'email' => 'rb@notify.com',
      'password' => Hash::make('123'),
      'permissao' =>'4'
    ]);

    //Assistencia Teste

    DB::table('assistencias')->insert([
      'nome' => 'AssisTeste',
      'descricao' => 'Assistencia dos Testes',
      'email' => 'suporte@assisteste.com',
      'site' => 'www.assisteste.com.br',
      'cnpj' => '60.335.977/0001-91',
      'telefone1' => '(19)3232-3232',
      'telefone2' => '(19)2323-2323',
      'celular' => '(19)98989-9898',
      'cidade' => 'Testinas',
      'bairro' => 'Vila dos Testes',
      'rua' => 'Rua dos Testes',
      'numero' => '969',
      'completemento' => 'Sala 69',


    ]);

    //Cargos Teste
    DB::table('cargos')->insert([
      'id' => '1',
      'cargo' => 'Atendente',
      'id_assistencia' => '1',
    ]);
    DB::table('cargos')->insert([
      'id' => '2',
      'cargo' => 'Assistente Técnico',
      'id_assistencia' => '1',
    ]);
    DB::table('cargos')->insert([
      'id' => '3',
      'cargo' => 'Técnico',
      'id_assistencia' => '1',
    ]);
    DB::table('cargos')->insert([
      'id' => '4',
      'cargo' => 'Gerente',
      'id_assistencia' => '1',
    ]);
    DB::table('cargos')->insert([
      'id' => '5',
      'cargo' => 'Chefe',

      'id_assistencia' => '1',
    ]);

    DB::table('cargos')->insert([
      'id' => '6',
      'cargo' => 'Admins',
      'id_assistencia' => '1',
    ]);


    //Usuario Teste


    DB::table('usuarios')->insert([

      'nome' => 'Testônio dos Testes',
      'email' => 'testonio@mail.com',
      'telefone' => '(19)3232-4242',
      'celular' => '(19)98765-4321',
      'cpf' => '123.456.789-01',
      'rg' => '12.345.678-9',
      'cidade' => 'Testinas',
      'bairro' => 'Vila dos Testes',
      'rua' => 'Rua dos Testes',
      'numero' => '969',
      'permissao' => '1',
      'senha' => Hash::make('123456'),
      'id_cargo' => '1',
      'id_assistencia' => '1',
    ]);

    //Usuario Admin Teste

    DB::table('admins')->insert([
      'name' => 'notify',
      'email' => 'notify@mi.com',
      'password' => Hash::make('321321'),
      'permissao' => '4',
    ]);



}
}

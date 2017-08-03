<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
    // DB::table('users')->insert([
    //   'name' => 'Matheus Luz',
    //   'email' => 'matheusluz@gmail.com',
    //   'password' => Hash::make('123'),
    //   'permissao' =>'4'
    // ]);
    // DB::table('users')->insert([
    //   'name' => 'Gabriel Tosetti',
    //   'email' => 'gt@notify.com',
    //   'password' => Hash::make('123'),
    //   'permissao' =>'4'
    // ]);
    // DB::table('users')->insert([
    //   'name' => 'Rafael Bella',
    //   'email' => 'rb@notify.com',
    //   'password' => Hash::make('123'),
    //   'permissao' =>'4'
    // ]);

    //Assistencia Teste

    DB::table('assistencias')->insert([
      'nome' => 'AssisTeste',
      'descricao' => 'Assistencia dos Testes',
      'email' => 'suporte@assisteste.com',
      'especialidade' => 'Profissional na Assistencia de Testes',
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


    //20 Assistencias de teste
    factory(App\Assistencia::class, 20)->create();

    //50 Usuarios de teste
    factory(App\Usuario::class, 50)->create();

    //50 Clientes de teste
    factory(App\Cliente::class, 50)->create();



    DB::table('usuarios')->insert([

      'nome' => 'Testônio dos Testes',
      'email' => 'testonio@mail.com',
      'telefone' => '(19)3232-4242',
      'celular' => '(19)98765-4321',
      'cpf' => '123.456.789-01',
      'rg' => '12.345.678-1',
      'cidade' => 'Testinas',
      'bairro' => 'Vila dos Testes',
      'rua' => 'Rua dos Testes',
      'numero' => '969',
      'permissao' => '1',
      'password' => Hash::make('321'),
      'id_cargo' => '1',
      'id_assistencia' => '1',
    ]);

    DB::table('usuarios')->insert([

      'nome' => 'Rafael Bella',
      'email' => 'rb@notify.com',
      'telefone' => '(19)3232-4242',
      'celular' => '(19)98765-4321',
      'cpf' => '123.456.789-02',
      'rg' => '12.345.678-2',
      'cidade' => 'Testinas',
      'bairro' => 'Vila dos Testes',
      'rua' => 'Rua dos Testes',
      'numero' => '969',
      'permissao' => '6',
      'password' => Hash::make('123'),
      'id_cargo' => '1',
      'id_assistencia' => '1',
    ]);

    DB::table('usuarios')->insert([

      'nome' => 'Matheus Luz',
      'email' => 'matheusluz@gmail.com',
      'telefone' => '(19)3232-4242',
      'celular' => '(19)98765-4321',
      'cpf' => '123.456.789-03',
      'rg' => '12.345.678-3',
      'cidade' => 'Testinas',
      'bairro' => 'Vila dos Testes',
      'rua' => 'Rua dos Testes',
      'numero' => '969',
      'permissao' => '6',
      'password' => Hash::make('123'),
      'id_cargo' => '1',
      'id_assistencia' => '1',
    ]);

    DB::table('usuarios')->insert([

      'nome' => 'Gabriel Tosetti',
      'email' => 'gt@notify.com',
      'telefone' => '(19)3232-4242',
      'celular' => '(19)98765-4321',
      'cpf' => '123.456.789-04',
      'rg' => '12.345.678-4',
      'cidade' => 'Testinas',
      'bairro' => 'Vila dos Testes',
      'rua' => 'Rua dos Testes',
      'numero' => '969',
      'permissao' => '6',
      'password' => Hash::make('123'),
      'id_cargo' => '1',
      'id_assistencia' => '1',
    ]);




    //Usuario Admin Teste

    DB::table('admins')->insert([
      'name' => 'notify',
      'email' => 'notify@mi.com',
      'password' => Hash::make('321321'),
      'permissao' => '6',
    ]);


      DB::table('consertos')->insert([
      'modelo' => 'modelo',
      'defeito' => 'Tela quebrada',
      'orcamento' => '450.00',
<<<<<<< HEAD
      'data_entrega' => '2008-7-04',
      'detalhes' => 'O celular caiu no chão e a tela está trincada, iremos verificar os danos causados e prosseguir com os reparos',
=======
      'data_entrega' => Carbon::now()->addDays(7),
      'observacao' => 'O celular caiu no chão e a tela está trincada, iremos verificar os danos causados e prosseguir com os reparos',
>>>>>>> origin/master
      'status' => 'Em andamento',
      'prioridade' => 'Baixo',
      'titulo' => 'iPhone 7',
      'id_usuario' => '23',
      'id_assistencia' => '1',
      'id_cliente' => '1',
      'created_at' => Carbon::now()->subDays(2),
      'updated_at' => Carbon::now(),
    ]);

      DB::table('atividades')->insert([
      'status' => 'Em andamento',
      'iniciada' => Carbon::now()->subDays(1),
      'finalizada' => null,
      'titulo' => 'Troca de tela',
      'descricao' => 'Estamos iniciando os reparos necessários para o conserto da tela. Assim que a peça chegar poderemos abrir e verificar o interior do aparelho por eventuais danos.',
      'id_usuario' => '24',
      'id_conserto' => '1',
      'created_at' => Carbon::now()->subDays(1),
      'updated_at' => Carbon::now(),
    ]);
      DB::table('atividades')->insert([
      'status' => 'Cancelado',
      'iniciada' => Carbon::now()->subDays(2),
      'finalizada' => null,
      'titulo' => 'Troca do botão',
      'descricao' => 'Botão de volumes apresentando mal funcionamento.',
      'id_usuario' => '24',
      'id_conserto' => '1',
      'created_at' => Carbon::now()->subDays(2),
      'updated_at' => Carbon::now(),
    ]);

      DB::table('atividades_comentarios')->insert([
      'status' => 'iniciou esta atividade.',
      'comentario' => null,
      'id_usuario' => '24',
      'id_atividade' => '1',
      'created_at' => Carbon::now()->subDays(1),
      'updated_at' => Carbon::now(),
    ]);
      DB::table('atividades_comentarios')->insert([
      'status' => 'comentou: ',
      'comentario' => 'Dificuldades em colar a nova tela.',
      'id_usuario' => '24',
      'id_atividade' => '1',
      'created_at' => Carbon::now()->subDays(1),
      'updated_at' => Carbon::now(),
    ]);


    DB::table('atividades_comentarios')->insert([
      'status' => 'iniciou esta atividade.',
      'comentario' => null,
      'id_usuario' => '24',
      'id_atividade' => '2',
      'created_at' => Carbon::now()->subDays(2),
      'updated_at' => Carbon::now(),
    ]);
      DB::table('atividades_comentarios')->insert([
      'status' => 'comentou: ',
      'comentario' => 'Botão apenas mal encaixado não sendo necessária a troca.',
      'id_usuario' => '24',
      'id_atividade' => '2',
      'created_at' => Carbon::now()->subDays(1),
      'updated_at' => Carbon::now(),
    ]);





}
}

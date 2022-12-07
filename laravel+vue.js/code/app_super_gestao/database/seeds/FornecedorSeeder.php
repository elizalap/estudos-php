<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        // $fornecedor = new Fornecedor();
        // $fornecedor->nome = '';
        // $fornecedor->site = '';
        // $fornecedor->uf = '';
        // $fornecedor->email = '';

        //método create prestar atenção no atributo fillable dp model
        Fornecedor::create([
            'nome' => 'Fornecedor200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'RJ',
            'email' => 'fornecedor200@gmail.com'
        ]);

        //insert na tabela
        // DB::table('fornecedores')->insert([
        //     'nome' => 'Fornecedor300',
        //     'site' => 'fornecedor300.com.br',
        //     'uf' => 'SP',
        //     'email' => 'fornecedor300@gmail.com'
        // ]);
    }
}

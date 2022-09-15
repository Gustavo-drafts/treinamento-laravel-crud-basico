<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/** Criação de tabela */
Route::get('/', function () {
    return view('create');
});

/** Cadastar dados na tabela */
Route::post('/cadastrar-produto', function (Request $request) {

    // Criando um produto no banco da dados
    Produto::create([
        'nome' =>   $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo 'Produto criado com sucesso!';

    /*
    dd($request->all());
    // dd = debug and die
    */
});

/** Rotas de Update get -> pegar o dado, post -> atualizar o dado */
Route::get('/ver-produto/{id}', function ($id) {

    $produto = Produto::find($id);
    return view('update', ['produto' => $produto]);
});

Route::post('/editar-produto/{id}', function (Request $request, $id) {

    $produto = Produto::find($id);
    $produto->update([
        'nome' =>   $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo 'Produto editado com sucesso!';
});

/** Rota de exclussão de dado */
Route::get('/deletar-produto/{id}', function ($id) {

    $produto = Produto::find($id);
    $produto->delete();

    echo 'Produto excluido com sucesso!';
});
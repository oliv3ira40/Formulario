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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('pessoas', 'PessoaController');

Route::resource('enderecos', 'EnderecoController');

Route::resource('contatos', 'ContatoController');

Route::resource('trabalhoERendas', 'TrabalhoERendaController');

Route::resource('dadosFamiliares', 'DadosFamiliareController');

Route::resource('moradias', 'MoradiaController');

Route::resource('sexoOptions', 'SexoOptionController');

Route::resource('ufOptions', 'UfOptionController');

Route::resource('nacionalidadeOptions', 'NacionalidadeOptionController');

Route::resource('estadoCivilOptions', 'EstadoCivilOptionController');

Route::resource('escolaridadeOptions', 'EscolaridadeOptionController');

Route::resource('relacaoAosFilhosOptions', 'relacaoAosFilhosOptionController');

Route::resource('comQuemResideOptions', 'comQuemResideOptionController');

Route::resource('tipoDaDeficienciaOptions', 'tipoDaDeficienciaOptionController');

Route::resource('doencaCronicaOptions', 'doencaCronicaOptionController');
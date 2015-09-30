<?php

$app->get('/', [
    'as' => 'agenda.index',
    'uses' => 'AgendaController@index'
]);

/************
 * PESSOA
 */
$app->get('/pessoa/create', [
    'as' => 'pessoa.create',
    'uses' => 'PessoaController@create'
]);

$app->post('/pessoa/store', [
    'as' => 'pessoa.store',
    'uses' => 'PessoaController@store'
]);

$app->get('/pessoa/{id}/editar', [
    'as' => 'pessoa.edit',
    'uses' => 'PessoaController@edit'
]);

$app->put('/pessoa/{id}', [
    'as' => 'pessoa.update',
    'uses' => 'PessoaController@update'
]);

$app->get('/pessoa/{id}/apagar', [
    'as' => 'pessoa.delete',
    'uses' => 'PessoaController@delete'
]);

$app->delete('/pessoa/{id}', [
    'as' => 'pessoa.destroy',
    'uses' => 'PessoaController@destroy'
]);

/***********
 * TELEFONE
 */

$app->get('/telefone/{id}/apagar', [
    'as' => 'telefone.delete',
    'uses' => 'TelefoneController@delete'
]);

$app->delete('/telefone/{id}', [
    'as' => 'telefone.destroy',
    'uses' => 'TelefoneController@destroy'
]);

$app->get('/telefone/{id}/editar', [
    'as' => 'telefone.edit',
    'uses' => 'TelefoneController@edit'
]);

$app->get('/telefone/{id}', [
    'as' => 'telefone.update',
    'uses' => 'TelefoneController@update'
]);

/*************
 * AGENDA
 */
$app->post('/busca', [
    'as' => 'agenda.busca',
    'uses' => 'AgendaController@busca'
]);

$app->get('/{letra}', [
    'as' => 'agenda.letra',
    'uses' => 'AgendaController@index'
]);



// Display all SQL executed in Eloquent
//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});
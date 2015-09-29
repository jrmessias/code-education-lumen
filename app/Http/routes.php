<?php

$app->get('/', [
    'as' => 'agenda.index',
    'uses' => 'AgendaController@index'
]);

$app->get('/adicionar', [
    'as' => 'agenda.adicionar',
    'uses' => 'AgendaController@adicionar'
]);

$app->post('/busca', [
    'as' => 'agenda.busca',
    'uses' => 'AgendaController@busca'
]);

$app->get('/apagarcontato/{id}', [
    'as' => 'agenda.apagarcontato',
    'uses' => 'AgendaController@apagarContato'
]);

$app->get('/apagartelefone/{id}', [
    'as' => 'agenda.apagartelefone',
    'uses' => 'AgendaController@apagarTelefone'
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
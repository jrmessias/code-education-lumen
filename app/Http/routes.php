<?php

$app->get('/', [
    'as' => 'agenda.index',
    'uses' => 'AgendaController@index'
]);

$app->get('/{letra}', [
    'as' => 'agenda.letra',
    'uses' => 'AgendaController@index'
]);

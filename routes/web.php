<?php

// Lista de projetos
Route::get('/', 'ProjectsController@index');

Route::get('/projects', 'ProjectsController@index');


// Tela de criação e envio POST
Route::get('/projects/create', 'ProjectsController@create');

Route::post('/projects/create', 'ProjectsController@store');


// Mostrando um único projeto
Route::get('/projects/{id}', 'ProjectsController@show');


// Formulário de edição e envio PUT
Route::get('/projects/{id}/edit', 'ProjectsController@edit');

Route::put('/projects/{id}/edit', 'ProjectsController@update');


// Apagando projeto com DELETE
Route::delete('/projects/{id}/destroy', 'ProjectsController@delete');
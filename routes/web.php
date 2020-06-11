<?php

use Illuminate\Support\Facades\Route;


Route::get('/form', 'FormValidtionController@createUserForm');

Route::post('/form', 'FormValidtionController@UserForm');

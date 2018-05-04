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
Route::get('/test', function () {
    echo 'Hola test';
});

Route::get('/nombre/{nombre?}', function ($nombre='vacio') {
    echo 'Hola tu nombre es '.$nombre;
});


// grupo de rutas 
Route::group(['prefix'=>'articles'], function () {

    Route::get('view/{id}',[
    'uses'=>'Testcontroller@view',
    'as' => 'articlesView'     
    ]);

});

Route::prefix('admin')->group(function () {
    
    Route::get('users', function () {
        // Matches The "/admin/users" URL
           echo 'entro a admin/users';
    });

	Route::get('usuarios', function () {
       echo 'entro a admin/usuarios';
    });

});



    


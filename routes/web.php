<?php


Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', 'UserController@index');


Route::get('/usuarios/{id}','UserController@show')
    ->where('id','[0-9]+');


Route::get('/usuarios/nuevo', function (){
    return 'Crear nuevo usuario';
});


Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname = null){
    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else {
        return "Bienvenido {$name}, No tienes apodo";
    }

});
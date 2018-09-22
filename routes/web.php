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

Route::redirect('/', 'inicio');

Auth::routes();

Route::get('inicio', 'Web\PageController@vitis')->name('incio');

Route::get('gestion', 'Web\PageController@gestion')->name('gestion');

Route::get('hospedaje', 'Web\PageController@hospedaje')->name('hospedaje');

Route::get('comida', 'Web\PageController@comida')->name('comida');

Route::get('productos', 'Web\PageController@productos')->name('productos');


/*ruta historia */

Route::get('historia', function () {
    return view('web\historias\historia');
});

Route::get('blog', function () {
    return view('web\blogs\blog-01');
});
Route::get('blog-vista', function () {
    return view('web\blogs\blog-vista');
});
Route::get('galeria', function () {
    return view('web\galerias\galeria');
});
Route::get('FAQS', function () {
    return view('web\FAQS\respuestas');
});

Route::get('costumbre', function () {
    return view('web\costumbres\costumbre');
});
Route::get('lugares', function () {
    return view('web\lugares\caminos');
});
Route::get('mapa', function () {
    return view('web\mapas\mapa');
});






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


Route::get('historia', 'Web\PageController@historia')->name('historia');

Route::get('blog', 'Web\PageController@blog')->name('blog');

Route::get('galeria', 'Web\PageController@galeria')->name('galeria');

Route::get('FAQS', 'Web\PageController@FAQS')->name('FAQS');

Route::get('costumbre', 'Web\PageController@costumbre')->name('costumbre');

Route::get('lugares', 'Web\PageController@lugares')->name('lugares');

Route::get('mapa', 'Web\PageController@mapa')->name('mapa');

Route::get('blog-vista', 'Web\PageController@blogVista')->name('blog-vista');


/*ruta historia */

// Route::get('historia', function () {
//     return view('web\historias\historia');
// });
// Route::get('blog', function () {
//     return view('web\blogs\blog-01');
// });
// Route::get('blog-vista', function () {
//     return view('web\blogs\blog-vista');
// });
// Route::get('galeria', function () {
//     return view('web\galerias\galeria');
// });
// Route::get('FAQS', function () {
//     return view('web\FAQS\respuestas');
// });

// Route::get('costumbre', function () {
//     return view('web\costumbres\costumbre');
// });
// Route::get('lugares', function () {
//     return view('web\lugares\caminos');
// });
// Route::get('mapa', function () {
//     return view('web\mapas\mapa');
// });






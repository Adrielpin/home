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

Auth::routes();

### TMP ###

Route::get('login/bitbucket', function () {
	return Socialite::driver('bitbucket')->redirect();


})->name('LoginBit');

Route::get('login/facebook', function () {

return Socialite::driver('facebook')->stateless()->user();
})->name('LoginFacebook');

Route::get('/assine/promo/{id}', ['uses' => 'Web\SubscribeController@promo']);

Route::get('/blog', function() {
	return view('blog.index');
})->name('blog');

Route::get('/blog/{post}', function() {
	return view('blog.post');
})->name('blog.post');

/**
 * 
 * Web Rotas para acesso geral
 * Sem auth
 *  
 */

Route::group([], function() {
	Route::get('/', ['as' => 'home', 'uses' => 'Web\HomeController@home']);
});

Route::group(['as' => 'meubella.','prefix'=>'meubella'], function() {
	Route::get('/', ['as' => 'index', 'uses' => 'Web\MeuBellaController@index']);
});

Route::group(['as' => 'assine.','prefix'=>'assine'], function() {
	Route::get('', ['as' => 'index', 'uses' => 'Web\SubscribeController@index']);
});

Route::group(['as' => 'modelos.','prefix'=>'modelos'], function() {
	
	Route::get('/photos', ['as' => 'photos', 'uses' => 'Web\ModelosController@allPhotos']);
	Route::get('/videos', ['as' => 'videos', 'uses' => 'Web\ModelosController@allVideos']);
	
	Route::get('/{modelo}/photo', ['as' => 'photo','uses' => 'Web\ModelosController@photo']);
	Route::get('/{modelo}/video', ['as' => 'video','uses' => 'Web\ModelosController@video']);
	Route::get('/{modelo}/perfil', ['as' => 'perfil','uses' => 'Web\ModelosController@perfil']);
	Route::get('/{modelo}/makingoff', ['as' => 'makingoff','uses' => 'Web\ModelosController@makingoff']);
	Route::get('/{modelo}/wallpaper', ['as' => 'wallpaper','uses' => 'Web\ModelosController@wallpaper']);
	Route::get('/{modelo}/creditos', ['as' => 'creditos','uses' => 'Web\ModelosController@creditos']);
});

Route::group(['as' => 'colunas.','prefix'=>'colunas'], function() {
	Route::get('/', ['as' => 'index', 'uses' => 'Web\ColumnsController@index']);
	Route::get('/{tag}', ['as' => 'tag', 'uses' => 'Web\ColumnsController@tag']);
	Route::get('/{tag}/{post}', ['as' => 'post', 'uses' => 'Web\ColumnsController@post']);
});


Route::get('/freetour', function () {
	return view('web.freetour');
})->name('freetour');

Route::get('/clube-bella', function () {
	return view('web.clube-bella');
})->name('clube-bella');

Route::get('/bella', function () {
	return view('web.bella');
})->name('bella');

Route::get('/politica-de-privacidade', function () {
	return view('web.politica-de-privacidade');
})->name('politica-de-privacidade');

Route::get('/politica-de-cancelamento', function () {
	return view('web.politica-de-cancelamento');
})->name('politica-de-cancelamento');

Route::get('/programa-afiliados', function() {
	return view('web.programa-afiliados');
})->name('programa-afiliados');

Route::get('/imprensa', function() {
	return view('web.imprensa');
})->name('imprensa');

Route::get('/rss', function() {
	return view('web.rss');
})->name('rss');

Route::get('/minha-conta', function() {
	return view('web.minha-conta');
})->name('minha-conta');

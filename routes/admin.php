<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('', ['as' => 'index', 'uses' => 'Admin\AdminController@index']);


Route::group(['as' => 'customers.','prefix'=>'customers'], function() {

	Route::get('', ['as' => 'index', 'uses' => 'Admin\CustomersController@index']);
	Route::get('criar', ['as' => 'create','uses' => 'Admin\CustomersController@create']);
	Route::post('salvar', ['as' => 'store','uses' => 'Admin\CustomersController@store']);
	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\CustomersController@show']);
	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\CustomersController@edit']);
	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\CustomersController@update']);
	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\CustomersController@destroy']);

});

Route::group(['as' => 'usuarios.','prefix'=>'usuarios'], function() {

	Route::get('', ['as' => 'index', 'uses' => 'Admin\UsersController@index']);
	Route::get('criar', ['as' => 'create','uses' => 'Admin\UsersController@create']);
	Route::post('salvar', ['as' => 'store','uses' => 'Admin\UsersController@store']);
	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\UsersController@show']);
	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\UsersController@edit']);
	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\UsersController@update']);
	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\UsersController@destroy']);

});

Route::group(['as' => 'essay.','prefix'=>'essay'], function() {

	Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\EssayController@index']);
	Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\EssayController@create']);
	Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\EssayController@store']);
	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\Essay\EssayController@edit']);
	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\EssayController@update']);
	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\EssayController@destroy']);	

	Route::group(['as' => 'models.', 'prefix' => 'models'], function() {

		Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\ModelsController@index']);
		Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\ModelsController@create']);
		Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\ModelsController@store']);
		Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\ModelsController@show']);
		Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\Essay\ModelsController@edit']);
		Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\ModelsController@update']);
		Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\ModelsController@destroy']);	

	});


	Route::group(['as' => 'show.', 'prefix' => '{id}/show'], function () {

		Route::get('/', ['as' => 'index','uses' => 'Admin\Essay\EssayController@show']);

		Route::group(['as' => 'photos.', 'prefix' => 'photos'], function () {

			Route::get('/', ['as' => 'index', 'uses' => 'Admin\Essay\photosController@index']);

			Route::group(['as' => 'parts.', 'prefix' => 'parts'], function () {
					
				Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\partsController@create']);
				Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\partsController@store']);
				Route::get('{partid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\partsController@edit']);
				Route::post('{partid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\partsController@update']);
				Route::get('{partid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\partsController@destroy']);

				Route::group(['as' => 'section.', 'prefix' => '{partid}/section'], function () {		

					Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\sectionController@index']);
					Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\sectionController@create']);
					Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\sectionController@store']);
					Route::get('{sectionid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\sectionController@edit']);
					Route::post('{sectionid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\sectionController@update']);
					Route::get('{sectionid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\sectionController@destroy']);

				});

			});

		});
		
	});

});

// Route::group(['as' => 'plans.','prefix'=>'plans'], function() {

// 	Route::get('', ['as' => 'index', 'uses' => 'Admin\plansController@index']);
// 	Route::get('criar', ['as' => 'create','uses' => 'Admin\plansController@create']);
// 	Route::post('salvar', ['as' => 'store','uses' => 'Admin\plansController@store']);
// 	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\plansController@show']);
// 	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\plansController@edit']);
// 	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\plansController@update']);
// 	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\plansController@destroy']);

// 	/**
//  	* custom routes
//  	*/	

//  	Route::get('{id}/ativar', ['as' => 'enamble','uses' => 'Admin\plansController@enamble']);
//  	Route::get('{id}/desativar', ['as' => 'disable','uses' => 'Admin\plansController@disable']);
//  });


// /**
//  * Rotas de cadastros gerais de ensaios
//  */

// Route::group(['as' => 'essay.','prefix'=>'essay'], function() {

// 	Route::get('', ['as' => 'index', 'uses' => 'Admin\EssayController@index']);
// 	Route::get('criar', ['as' => 'create','uses' => 'Admin\EssayController@create']);
// 	Route::post('salvar', ['as' => 'store','uses' => 'Admin\EssayController@store']);
// 	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\EssayController@show']);
// 	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\EssayController@update']);
// 	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\EssayController@destroy']);

// 	Route::group(['as' => 'team.', 'prefix' => '{id}/team'], function () {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\ModelsController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\teamController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\teamController@store']);
// 		Route::get('{teamid}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\teamController@show']);
// 		Route::get('{teamid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\teamController@edit']);
// 		Route::post('{teamid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\teamController@update']);
// 		Route::get('{teamid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\teamController@destroy']);

// 	});

// 	Route::group(['as' => 'info.', 'prefix' => '{id}/info'], function () {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\infoController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\infoController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\infoController@store']);
// 		Route::get('{infoid}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\infoController@show']);
// 		Route::get('{infoid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\infoController@edit']);
// 		Route::post('{infoid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\infoController@update']);
// 		Route::get('{infoid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\infoController@destroy']);

// 	});

// 	Route::group(['as' => 'photos.', 'prefix' => '{id}/photos'], function () {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\photosController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\photosController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\photosController@store']);
// 		Route::get('{photoid}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\photosController@show']);
// 		Route::get('{photoid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\photosController@edit']);
// 		Route::post('{photoid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\photosController@update']);
// 		Route::get('{photoid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\photosController@destroy']);

// 		Route::group(['as' => 'parts.', 'prefix' => 'parts'], function () {		

// 			Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\partsController@index']);
// 			Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\partsController@create']);
// 			Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\partsController@store']);
// 			Route::get('{partid}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\partsController@show']);
// 			Route::get('{partid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\partsController@edit']);
// 			Route::post('{partid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\partsController@update']);
// 			Route::get('{partid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\partsController@destroy']);

// 			Route::group(['as' => 'section.', 'prefix' => '{partid}/section'], function () {		

// 				Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\sectionController@index']);
// 				Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\sectionController@create']);
// 				Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\sectionController@store']);
// 				Route::get('{sectionid}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\sectionController@show']);
// 				Route::get('{sectionid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\sectionController@edit']);
// 				Route::post('{sectionid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\sectionController@update']);
// 				Route::get('{sectionid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\sectionController@destroy']);

// 			});

// 		});

// 		// Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\photosController@create']);
// 		// Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\photosController@store']);
// 		// Route::get('{infoid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\photosController@destroy']);

// 	});

// 	Route::group(['as' => 'profile.', 'prefix' => '{id}/profile'], function () {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\Essay\profileController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\Essay\profileController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\Essay\profileController@store']);
// 		Route::get('{infoid}/visualizar', ['as' => 'show','uses' => 'Admin\Essay\profileController@show']);
// 		Route::get('{infoid}/editar', ['as' => 'edit','uses' => 'Admin\Essay\profileController@edit']);
// 		Route::post('{infoid}/atualizar', ['as' => 'update','uses' => 'Admin\Essay\profileController@update']);
// 		Route::get('{infoid}/remover', ['as' => 'destroy','uses' => 'Admin\Essay\profileController@destroy']);

// 	});


// 	Route::group(['as' => 'directors.','prefix'=>'directors'], function() {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\DirectorController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\DirectorController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\DirectorController@store']);
// 		Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\DirectorController@show']);
// 		Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\DirectorController@edit']);
// 		Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\DirectorController@update']);
// 		Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\DirectorController@destroy']);

// 	});

// 	Route::group(['as' => 'photographers.','prefix'=>'photographers'], function() {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\PhotographersController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\PhotographersController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\PhotographersController@store']);
// 		Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\PhotographersController@show']);
// 		Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\PhotographersController@edit']);
// 		Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\PhotographersController@update']);
// 		Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\PhotographersController@destroy']);

// 	});

// 	Route::group(['as' => 'filming.','prefix'=>'filming'], function() {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\FilmingController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\FilmingController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\FilmingController@store']);
// 		Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\FilmingController@show']);
// 		Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\FilmingController@edit']);
// 		Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\FilmingController@update']);
// 		Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\FilmingController@destroy']);

// 	});

// 	Route::group(['as' => 'agency.','prefix'=>'agency'], function() {

// 		Route::get('', ['as' => 'index', 'uses' => 'Admin\AgencyController@index']);
// 		Route::get('criar', ['as' => 'create','uses' => 'Admin\AgencyController@create']);
// 		Route::post('salvar', ['as' => 'store','uses' => 'Admin\AgencyController@store']);
// 		Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\AgencyController@show']);
// 		Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\AgencyController@edit']);
// 		Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\AgencyController@update']);
// 		Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\AgencyController@destroy']);

// 	});


// });

// /**
//  * Rotas de cadastros gerais de blog
//  */

// Route::group(['as' => 'blog.','prefix'=>'blog'], function() {

// 	Route::get('', ['as' => 'index', 'uses' => 'Admin\BlogController@index']);
// 	Route::get('criar', ['as' => 'create','uses' => 'Admin\BlogController@create']);
// 	Route::post('salvar', ['as' => 'store','uses' => 'Admin\BlogController@store']);
// 	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\BlogController@show']);
// 	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\BlogController@edit']);
// 	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\BlogController@update']);
// 	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\BlogController@destroy']);

// });

// Route::group(['as' => 'columns.','prefix'=>'columns'], function() {

// 	Route::get('', ['as' => 'index', 'uses' => 'Admin\ColumnsController@index']);
// 	Route::get('criar', ['as' => 'create','uses' => 'Admin\ColumnsController@create']);
// 	Route::post('salvar', ['as' => 'store','uses' => 'Admin\ColumnsController@store']);
// 	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\ColumnsController@show']);
// 	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\ColumnsController@edit']);
// 	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\ColumnsController@update']);
// 	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\ColumnsController@destroy']);
// 	Route::post('visualizar', ['as' => 'preview','uses' => 'Admin\ColumnsController@preview']);
// 	Route::post('{id}/removephoto', ['as' => 'removephoto','uses' => 'Admin\ColumnsController@removePhoto']);

// });

// Route::group(['as' => 'banners.','prefix'=>'banners'], function() {
// 	Route::get('', ['as' => 'index', 'uses' => 'Admin\BannersController@index']);
// 	Route::get('criar', ['as' => 'create','uses' => 'Admin\BannersController@create']);
// 	Route::post('salvar', ['as' => 'store','uses' => 'Admin\BannersController@store']);
// 	Route::get('{id}/visualizar', ['as' => 'show','uses' => 'Admin\BannersController@show']);
// 	Route::get('{id}/editar', ['as' => 'edit','uses' => 'Admin\BannersController@edit']);
// 	Route::post('{id}/atualizar', ['as' => 'update','uses' => 'Admin\BannersController@update']);
// 	Route::get('{id}/remover', ['as' => 'destroy','uses' => 'Admin\BannersController@destroy']);
// });

Route::get('/charts', function()
{
	return View::make('admin.mcharts');
});

Route::get('/tables', function()
{
	return View::make('admin.table');
});

Route::get('/forms', function()
{
	return View::make('admin.form');
});

Route::get('/grid', function()
{
	return View::make('admin.grid');
});

Route::get('/buttons', function()
{
	return View::make('admin.buttons');
});


Route::get('/icons', function()
{
	return View::make('admin.icons');
});

Route::get('/panels', function()
{
	return View::make('admin.panel');
});

Route::get('/typography', function()
{
	return View::make('admin.typography');
});

Route::get('/notifications', function()
{
	return View::make('admin.notifications');
});

Route::get('/blank', function()
{
	return View::make('admin.blank');
});

Route::get('/login', function()
{
	return View::make('admin.login');
});

Route::get('/documentation', function()
{
	return View::make('admin.documentation');
});

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/loadTutor/{id}',function($id)
{
	if(Request::ajax()){
		$data_tutor = DB::table('users')
	            ->join('data_profil_tutors', 'users.data_profil', '=', 'data_profil_tutors.id')
	            ->select('users.name', 'data_profil_tutors.foto_profil')
	            ->where('sebagai', 'Teacher')->get();


        return $data_tutor;
	}
});

Route::get('/', 'ViewController@index');
Route::get('/paketinstan', 'ViewController@paketinstan');
Route::get('/paketbulanan', 'ViewController@paketbulanan');
Route::get('/paketgroup', 'ViewController@paketgroup');
Route::get('/paketintensif', 'ViewController@paketintensif');


Auth::routes(['verify' => true]);

Route::get('/member', 'HomeController@index')->name('member')->middleware('verified');
Auth::routes();

Route::get('/member', 'HomeController@index')->name('member');



Route::post('/orderpaketinstan', 'CRUDController@orderpaketinstan')->middleware('auth');
Route::post('/orderpaketbulanan', 'CRUDController@orderpaketbulanan')->middleware('auth');
Route::post('/orderpaketgroup', 'CRUDController@orderpaketgroup')->middleware('auth');
Route::post('/orderpaketintensif', 'CRUDController@orderpaketintensif')->middleware('auth');


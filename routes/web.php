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
Route::get('/register',function(){
	return redirect()->to('/login');
});

// 

Route::get('/', 'WelcomeController@index');

Route::get('/solicitar', function () {
    return view('solicitud');
})->name('solicitar');
Route::get('/solicitud/status/{identificacion}', 'PagoController@factura' )->name('factura');
Route::post('registrar', 'RegistroController@registrar')->name('registrar');
Route::get('verificar', 'RegistroController@verificar')->name('verificar');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/solicitudes','SolicitudController@index')->name('solicitudes');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/legal', function () {
    return view('legal');
});

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/verifyok', function () {
    return view('verifyok');
});


Route::get('/verifyerror', function () {
    return view('verifyerror');
});

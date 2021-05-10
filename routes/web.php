<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BridgeController;
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
/*
Route::get('/', function () {
    return view('home');
})->name('home1');

*/



////Bridges
Route::get('/bridges','App\Http\Controllers\BridgeController@index')->name('bridges.index');
Route::get('/bridge/create','App\Http\Controllers\BridgeController@create')->name('bridges.create');
Route::post('bridges','App\Http\Controllers\BridgeController@store')->name('bridges.store');
Route::get('/bridge/{id}','App\Http\Controllers\BridgeController@show')->name('bridges.show');
Route::get('/bridge/{id}/edit','App\Http\Controllers\BridgeController@edit')->name('bridges.edit');
Route::put('/bridge/{id}','App\Http\Controllers\BridgeController@update')->name('bridges.update');
Route::delete('/bridge/{id}','App\Http\Controllers\BridgeController@destroy')->name('bridges.destroy');




/////Bay
Route::get('/bays','App\Http\Controllers\BayController@index')->name('bays.index');
Route::get('/bay/create','App\Http\Controllers\BayController@create')->name('bays.create');
Route::post('bays','App\Http\Controllers\BayController@store')->name('bays.store');
Route::get('/bay/{id}','App\Http\Controllers\BayController@show')->name('bays.show');
Route::get('/bay/{id}/edit','App\Http\Controllers\BayController@edit')->name('bays.edit');
Route::put('/bay/{id}','App\Http\Controllers\BayController@update')->name('bays.update');
Route::delete('/bay/{id}','App\Http\Controllers\BayController@destroy')->name('bays.destroy');


////Angle
Route::get('/angles','App\Http\Controllers\AngleController@index')->name('angles.index');
Route::get('/angle/create','App\Http\Controllers\AngleController@create')->name('angles.create');
Route::post('angles','App\Http\Controllers\AngleController@store')->name('angles.store');
Route::get('/angle/{id}','App\Http\Controllers\AngleController@show')->name('angles.show');
Route::get('/angle/{id}/edit','App\Http\Controllers\AngleController@edit')->name('angles.edit');
Route::put('/angle/{id}','App\Http\Controllers\AngleController@update')->name('angles.update');
Route::delete('/angle/{id}','App\Http\Controllers\AngleController@destroy')->name('angles.destroy');


//Cps
Route::get('/cps','App\Http\Controllers\CpController@index')->name('cps.index');
Route::get('/cp/create','App\Http\Controllers\CpController@create')->name('cps.create');
Route::post('cps','App\Http\Controllers\CpController@store')->name('cps.store');
Route::get('/cp/{id}','App\Http\Controllers\CpController@show')->name('cps.show');
Route::get('/cp/{id}/edit','App\Http\Controllers\CpController@edit')->name('cps.edit');
Route::put('/cp/{id}','App\Http\Controllers\CpController@update')->name('cps.update');
Route::delete('/cp/{id}','App\Http\Controllers\CpController@destroy')->name('cps.destroy');


//Deck
Route::get('/decks','App\Http\Controllers\DeckController@index')->name('decks.index');
Route::get('/deck/create','App\Http\Controllers\DeckController@create')->name('decks.create');
Route::post('decks','App\Http\Controllers\DeckController@store')->name('decks.store');
Route::get('/deck/{id}','App\Http\Controllers\DeckController@show')->name('decks.show');
Route::get('/deck/{id}/edit','App\Http\Controllers\DeckController@edit')->name('decks.edit');
Route::put('/deck/{id}','App\Http\Controllers\DeckController@update')->name('decks.update');
Route::delete('/deck/{id}','App\Http\Controllers\DeckController@destroy')->name('decks.destroy');

//Flange
Route::get('/flanges','App\Http\Controllers\FlangeController@index')->name('flanges.index');
Route::get('/flange/create','App\Http\Controllers\FlangeController@create')->name('flanges.create');
Route::post('flanges','App\Http\Controllers\FlangeController@store')->name('flanges.store');
Route::get('/flange/{id}','App\Http\Controllers\FlangeController@show')->name('flanges.show');
Route::get('/flange/{id}/edit','App\Http\Controllers\FlangeController@edit')->name('flanges.edit');
Route::put('/flange/{id}','App\Http\Controllers\FlangeController@update')->name('flanges.update');
Route::delete('/flange/{id}','App\Http\Controllers\FlangeController@destroy')->name('flanges.destroy');


//Girder
Route::get('/girders','App\Http\Controllers\GirderController@index')->name('girders.index');
Route::get('/girder/create','App\Http\Controllers\GirderController@create')->name('girders.create');
Route::post('girders','App\Http\Controllers\GirderController@store')->name('girders.store');
Route::get('/girder/{id}','App\Http\Controllers\GirderController@show')->name('girders.show');
Route::get('/girder/{id}/edit','App\Http\Controllers\GirderController@edit')->name('girders.edit');
Route::put('/girder/{id}','App\Http\Controllers\GirderController@update')->name('girders.update');
Route::delete('/girder/{id}','App\Http\Controllers\GirderController@destroy')->name('girders.destroy');


//Stiffener
Route::get('/stiffeners','App\Http\Controllers\StiffenerController@index')->name('stiffeners.index');
Route::get('/stiffener/create','App\Http\Controllers\StiffenerController@create')->name('stiffeners.create');
Route::post('stiffeners','App\Http\Controllers\StiffenerController@store')->name('stiffeners.store');
Route::get('/stiffener/{id}','App\Http\Controllers\StiffenerController@show')->name('stiffeners.show');
Route::get('/stiffener/{id}/edit','App\Http\Controllers\StiffenerController@edit')->name('stiffeners.edit');
Route::put('/stiffener/{id}','App\Http\Controllers\StiffenerController@update')->name('stiffeners.update');
Route::delete('/stiffener/{id}','App\Http\Controllers\StiffenerController@destroy')->name('stiffeners.destroy');


//Web
Route::get('/webs','App\Http\Controllers\WebController@index')->name('webs.index');
Route::get('/web/create','App\Http\Controllers\WebController@create')->name('webs.create');
Route::post('webs','App\Http\Controllers\WebController@store')->name('webs.store');
Route::get('/web/{id}','App\Http\Controllers\WebController@show')->name('webs.show');
Route::get('/web/{id}/edit','App\Http\Controllers\WebController@edit')->name('webs.edit');
Route::put('/web/{id}','App\Http\Controllers\WebController@update')->name('webs.update');
Route::delete('/web/{id}','App\Http\Controllers\WebController@destroy')->name('webs.destroy');

Auth::routes([
		'register'=>false
]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

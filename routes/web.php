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
    return view('home')->middleware('auth');
})->name('home1')->middleware('auth');

*/



////Bridges
Route::get('/bridges','App\Http\Controllers\BridgeController@index')->name('bridges.index')->middleware('auth');
Route::get('/bridge/create','App\Http\Controllers\BridgeController@create')->name('bridges.create')->middleware('auth');
Route::post('bridges','App\Http\Controllers\BridgeController@store')->name('bridges.store')->middleware('auth');
Route::get('/bridge/{id}','App\Http\Controllers\BridgeController@show')->name('bridges.show')->middleware('auth');
Route::get('/bridge/{id}/edit','App\Http\Controllers\BridgeController@edit')->name('bridges.edit')->middleware('auth');
Route::put('/bridge/{id}','App\Http\Controllers\BridgeController@update')->name('bridges.update')->middleware('auth');
Route::delete('/bridge/{id}','App\Http\Controllers\BridgeController@destroy')->name('bridges.destroy')->middleware('auth');




/////Bay
Route::get('/bays','App\Http\Controllers\BayController@index')->name('bays.index')->middleware('auth');
Route::get('/bay/create','App\Http\Controllers\BayController@create')->name('bays.create')->middleware('auth');
Route::post('bays','App\Http\Controllers\BayController@store')->name('bays.store')->middleware('auth');
Route::get('/bay/{id}','App\Http\Controllers\BayController@show')->name('bays.show')->middleware('auth');
Route::get('/bay/{id}/edit','App\Http\Controllers\BayController@edit')->name('bays.edit')->middleware('auth');
Route::put('/bay/{id}','App\Http\Controllers\BayController@update')->name('bays.update')->middleware('auth');
Route::delete('/bay/{id}','App\Http\Controllers\BayController@destroy')->name('bays.destroy')->middleware('auth');


////Angle
Route::get('/angles','App\Http\Controllers\AngleController@index')->name('angles.index')->middleware('auth');
Route::get('/angle/create','App\Http\Controllers\AngleController@create')->name('angles.create')->middleware('auth');
Route::post('angles','App\Http\Controllers\AngleController@store')->name('angles.store')->middleware('auth');
Route::get('/angle/{id}','App\Http\Controllers\AngleController@show')->name('angles.show')->middleware('auth');
Route::get('/angle/{id}/edit','App\Http\Controllers\AngleController@edit')->name('angles.edit')->middleware('auth');
Route::put('/angle/{id}','App\Http\Controllers\AngleController@update')->name('angles.update')->middleware('auth');
Route::delete('/angle/{id}','App\Http\Controllers\AngleController@destroy')->name('angles.destroy')->middleware('auth');


//Cps
Route::get('/cps','App\Http\Controllers\CpController@index')->name('cps.index')->middleware('auth');
Route::get('/cp/create','App\Http\Controllers\CpController@create')->name('cps.create')->middleware('auth');
Route::post('cps','App\Http\Controllers\CpController@store')->name('cps.store')->middleware('auth');
Route::get('/cp/{id}','App\Http\Controllers\CpController@show')->name('cps.show')->middleware('auth');
Route::get('/cp/{id}/edit','App\Http\Controllers\CpController@edit')->name('cps.edit')->middleware('auth');
Route::put('/cp/{id}','App\Http\Controllers\CpController@update')->name('cps.update')->middleware('auth');
Route::delete('/cp/{id}','App\Http\Controllers\CpController@destroy')->name('cps.destroy')->middleware('auth');


//Deck
Route::get('/decks','App\Http\Controllers\DeckController@index')->name('decks.index')->middleware('auth');
Route::get('/deck/create','App\Http\Controllers\DeckController@create')->name('decks.create')->middleware('auth');
Route::post('decks','App\Http\Controllers\DeckController@store')->name('decks.store')->middleware('auth');
Route::get('/deck/{id}','App\Http\Controllers\DeckController@show')->name('decks.show')->middleware('auth');
Route::get('/deck/{id}/edit','App\Http\Controllers\DeckController@edit')->name('decks.edit')->middleware('auth');
Route::put('/deck/{id}','App\Http\Controllers\DeckController@update')->name('decks.update')->middleware('auth');
Route::delete('/deck/{id}','App\Http\Controllers\DeckController@destroy')->name('decks.destroy')->middleware('auth');

//Flange
Route::get('/flanges','App\Http\Controllers\FlangeController@index')->name('flanges.index')->middleware('auth');
Route::get('/flange/create','App\Http\Controllers\FlangeController@create')->name('flanges.create')->middleware('auth');
Route::post('flanges','App\Http\Controllers\FlangeController@store')->name('flanges.store')->middleware('auth');
Route::get('/flange/{id}','App\Http\Controllers\FlangeController@show')->name('flanges.show')->middleware('auth');
Route::get('/flange/{id}/edit','App\Http\Controllers\FlangeController@edit')->name('flanges.edit')->middleware('auth');
Route::put('/flange/{id}','App\Http\Controllers\FlangeController@update')->name('flanges.update')->middleware('auth');
Route::delete('/flange/{id}','App\Http\Controllers\FlangeController@destroy')->name('flanges.destroy')->middleware('auth');


//Girder
Route::get('/girders','App\Http\Controllers\GirderController@index')->name('girders.index')->middleware('auth');
Route::get('/girder/create','App\Http\Controllers\GirderController@create')->name('girders.create')->middleware('auth');
Route::post('girders','App\Http\Controllers\GirderController@store')->name('girders.store')->middleware('auth');
Route::get('/girder/{id}','App\Http\Controllers\GirderController@show')->name('girders.show')->middleware('auth');
Route::get('/girder/{id}/edit','App\Http\Controllers\GirderController@edit')->name('girders.edit')->middleware('auth');
Route::put('/girder/{id}','App\Http\Controllers\GirderController@update')->name('girders.update')->middleware('auth');
Route::delete('/girder/{id}','App\Http\Controllers\GirderController@destroy')->name('girders.destroy')->middleware('auth');


//Stiffener
Route::get('/stiffeners','App\Http\Controllers\StiffenerController@index')->name('stiffeners.index')->middleware('auth');
Route::get('/stiffener/create','App\Http\Controllers\StiffenerController@create')->name('stiffeners.create')->middleware('auth');
Route::post('stiffeners','App\Http\Controllers\StiffenerController@store')->name('stiffeners.store')->middleware('auth');
Route::get('/stiffener/{id}','App\Http\Controllers\StiffenerController@show')->name('stiffeners.show')->middleware('auth');
Route::get('/stiffener/{id}/edit','App\Http\Controllers\StiffenerController@edit')->name('stiffeners.edit')->middleware('auth');
Route::put('/stiffener/{id}','App\Http\Controllers\StiffenerController@update')->name('stiffeners.update')->middleware('auth');
Route::delete('/stiffener/{id}','App\Http\Controllers\StiffenerController@destroy')->name('stiffeners.destroy')->middleware('auth');


//Web
Route::get('/webs','App\Http\Controllers\WebController@index')->name('webs.index')->middleware('auth');
Route::get('/web/create','App\Http\Controllers\WebController@create')->name('webs.create')->middleware('auth');
Route::post('webs','App\Http\Controllers\WebController@store')->name('webs.store')->middleware('auth');
Route::get('/web/{id}','App\Http\Controllers\WebController@show')->name('webs.show')->middleware('auth');
Route::get('/web/{id}/edit','App\Http\Controllers\WebController@edit')->name('webs.edit')->middleware('auth');
Route::put('/web/{id}','App\Http\Controllers\WebController@update')->name('webs.update')->middleware('auth');
Route::delete('/web/{id}','App\Http\Controllers\WebController@destroy')->name('webs.destroy')->middleware('auth');

Auth::routes([
		'register'=>false
]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



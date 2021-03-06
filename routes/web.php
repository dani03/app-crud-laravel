<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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
//configuration des routes pour consomer l'api
Route::prefix('projects')->group(function(){
    Route::get('apiwithoutkey', [ProjectController::class, 'apiWithoutKey'])->name('apiwithoutkey');
    Route::get('apiwithkey',[ProjectController::class, 'apiWithKey'])->name('apiWithKey');
});

Route::resource('projects', ProjectController::class);


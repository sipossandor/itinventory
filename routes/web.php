<?php

use App\Http\Controllers\DataInputController;
use App\Http\Controllers\DataModifyController;
use App\Http\Controllers\DataQueryController;
use App\Http\Controllers\DataqueryhardwaresController;
use App\Http\Controllers\DataqueryroomsController;
use App\Http\Controllers\DataqueryworkersController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserAdministrationController;
use App\Http\Controllers\VuedataqueryhardwarersController;
use App\Http\Controllers\VuedataqueryhardwaresController;
use App\Http\Controllers\VuedataqueryroomsController;
use App\Http\Controllers\VuedataqueryworkersController;
use App\Http\Controllers\VuehardwaresController;
use App\Http\Controllers\VueroomsController;
use App\Http\Controllers\VueworkersController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [PublicController::class, 'index']);

Route::get('/data_input', [DataInputController::class, 'index'])
    ->name('DataInput')->middleware('auth');
Route::get('/data_query', [DataQueryController::class, 'index'])
    ->name('DataQuery')->middleware('auth');

Route::get('/data_query_rooms', [DataqueryroomsController::class, 'index'])
    ->name('DataQueryRooms')->middleware('auth');
Route::get('/data_query_hardwares', [DataqueryhardwaresController::class, 'index'])
    ->name('DataQueryHardwares')->middleware('auth');
Route::get('/data_query_workers', [DataqueryworkersController::class, 'index'])
    ->name('DataQueryWorkers')->middleware('auth');

Route::get('/vuedataqueryrooms', [VuedataqueryroomsController::class, 'index'])
    ->name('Vuedataqueryrooms')->middleware('auth');
Route::get('/vuedataqueryhardwares', [VuedataqueryhardwaresController::class, 'index'])
    ->name('Vuedataqueryhardwares')->middleware('auth');
Route::get('/vue_data_query_workers', [VuedataqueryworkersController::class, 'index'])
    ->name('Vuedataqueryworkers')->middleware('auth');

Route::get('/data_modify', [DataModifyController::class, 'index'])
    ->name('DataModify')->middleware('auth');
Route::get('/user_administration', [UserAdministrationController::class, 'index'])
    ->name('UserAdministration')->middleware('auth');

/*
Route::get('/home', [PrivateController::class, 'home'])
    ->name('private.home')->middleware('auth');
Route::post('/store', [PrivateController::class, 'store'])
    ->name('private.ticket.store')->middleware('auth');;
*/
Route::get('/admin/categories', [CategoryController::class ,'index'])
    ->name('admin.categories')->middleware('auth');
Route::post('/admin/categories/store', [CategoryController::class ,'store'])
    ->name('admin.categories.store')->middleware('auth');
Route::post('/admin/categories/destroy/{id}', [CategoryController::class, 'destroy'])
    ->name('admin.categories.destroy')->middleware('auth');

Route::post('/admin/categories/enable', [CategoryController::class, 'enable'])
    ->name('admin.categories.enable')->middleware('auth');
Route::post('/admin/categories/disable', [CategoryController::class, 'disable'])
    ->name('admin.categories.disable')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

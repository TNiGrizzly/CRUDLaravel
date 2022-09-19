<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudTabla1Controller;

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

Route::get('/', HomeController:: class)->name('home');

Route::get('Datos', [CrudTabla1Controller:: class, 'view'])->name('datos.view');

Route::get('Datos/ByID', [CrudTabla1Controller:: class, 'search'])->name('datos/byid.search');

Route::post('Create', [CrudTabla1Controller::class, 'create'])->name('create.create');

Route::post('Update', [CrudTabla1Controller::class, 'update'])->name('update.update');

Route::post('Delete', [CrudTabla1Controller::class, 'delete'])->name('delete.delete');
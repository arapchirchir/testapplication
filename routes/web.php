<?php

use App\Http\Controllers\TestController;
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

Route::get('create/user', [TestController::class, 'CreateUser'])->name('create.user');
Route::post('create/user', [TestController::class, 'StoreUser']);
Route::get('user/{user_id}', [TestController::class, 'UpdateUser'])->name('user.view');
Route::post('user/{user_id}', [TestController::class, 'PutUserDetails'])->name('user.put');
Route::post('user/{user_id}', [TestController::class, 'DeleteUserDetails'])->name('user.delete');
Route::get('/', [TestController::class, 'Landing']);

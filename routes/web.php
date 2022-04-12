<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckAge;
use App\Models\User;

Route::get('/test', [TestController::class, 'test']);
// Route::get('/', [ItemController::class, 'index']);
Route::get('/', function(){
    // User::create([
    //     'first_name'=>'Myo Thant',
    //     'last_name'=>'Kyaw',
    //     'email'=>'hello@gmail.com',
    //     'password'=>'hello', 
    // ]);
    // return 'success';

    return User::all();
});
Route::get('/create', [ItemController::class, 'create']);
Route::post('/create', [ItemController::class, 'store'])->name('item.store');

Route::get('/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::put('/edit/{id}', [ItemController::class, 'update'])->name('item.update');

Route::get('/delete/{id}', [ItemController::class, 'delete'])->name('item.delete');

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;


// Login 
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/', [AuthController::class, 'home']);
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'postlogin']);

// Route::resource('tag', App\Http\Controllers\TagController::class);

// Route::get('/', function(){
//     Storage::disk('image')->put('note.txt', 'from image disk');
// });

// Route::get('/upload', function(){
//     return view('upload');
// });

// Route::post('/upload', function(){
//     // // First method
//     // request()->validate([
//     //     'image'=>'mimes:jpg,jpeg,png',
//     // ]);
    
//     // $image = request()->file('image');
//     // $file_name = uniqid().$image->getClientOriginalName();
//     // Storage::disk('image')->put($file_name, $image->get());

//     // // Second Method
//     // request()->file('image')->store('image');// store generates random image name and store the image under given file name of the Storage directory

//     // Handling multiple image form
//     $image = request()->file('image');
//     foreach($image as $img){
//         $img->store('image');
//     }
//     return redirect()->back()->with('success', 'Image uploaded successfully!');
// });

// Route::get('/d', function(){
//     Storage::disk('image')->delete('8qg1V2B1qhE8kM88iZ6mpvl2Nxn358xIEgSQ85Pl.jpg');
// });
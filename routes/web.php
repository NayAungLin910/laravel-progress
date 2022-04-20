<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    $names = User::select('name')->get();
    return $names;
});



// // Pgination
// Route::get('/', function(){
//     $tasks = Task::paginate('4');
//     return view('welcome', compact('tasks'));
// });

// // multi auth 4
// // Admin
// Route::get('/', function(){
//     return Auth::user();
// });

// Route::get('/admin/login', function(){
//     $cre = [
//         'email'=>'admin@gmail.com',
//         'password'=>'password',
//     ];
//     if(Auth::guard('admin')->attempt($cre)){
//         return Auth::guard('admin')->user();
//     }
// }); 

// Route::get('admin/logout', function(){
//     Auth::guard('admin')->logout();
// });

// Route::middleware('admin')->group(function(){
//     Route::get('/admin/post', function(){
//         return 'You can create post!';
//     });
// });

// Route::get('/admin/noauth', function(){
//     return 'You are not admin yet'; 
// });

// // Normal user
// Route::get('/user/login', function(){
//     $cre = [
//         'email'=>'user@gmail.com',
//         'password'=>'password',
//     ];
//     if(Auth::guard('web')->attempt($cre)){
//         return Auth::guard('web')->user();
//     }
// }); 

// Route::get('/user/logout', function(){
//     Auth::logout();
// });




// // multi auth (Admin)
// Route::get('/', function(){
//     return view('home');
// });

// Route::get('/admin/login', function(){
//     $cre = [
//         'email'=>'admin@gmail.com',
//         'password'=>'password',
//     ];
//     if(Auth::guard('admin')->attempt($cre)){
//         return Auth::guard('admin')->user();
//     }
// });

// Route::get('/data', function(){
//     User::create([
//         'name'=>'user',
//         'email'=>'user@gmail.com',
//         'password'=>Hash::make('password'),
//     ]);
//     Admin::create([
//         'name'=>'Admin',
//         'email'=>'admin@gmail.com',
//         'password'=>Hash::make('password'),
//     ]);
// });


// Login 
// Route::get('/logout', [AuthController::class, 'logout']);
// Route::get('/', [AuthController::class, 'home']);
// Route::get('/login', [AuthController::class, 'showlogin']);
// Route::post('/login', [AuthController::class, 'postlogin']);

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
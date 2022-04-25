<?php

use App\Models\Image;
use App\Models\Item;
use App\Models\Mechanic;
use App\Models\Post;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

// SQL joining

// // inner join
// Route::get('/', function(){
//     return DB::table('cars')
//            ->join('mechanics', 'mechanics.id', 'cars.mechanic_id')
//            ->select('cars.*', 'mechanics.name as mechanic_name')
//            ->get();
// });

// // where in
// Route::get('/', function(){
//     return DB::table('items')->whereIn('id', [4, 2, 5, 11])->get();
// });// 11 id item will not be returned due to not existing

// // where between
// Route::get('/', function(){
//     return DB::table('items')->whereBetween('id', [2, 4])->get();
// });

// // Raw Expression
// Route::get('/', function(){
//     DB::table('items')->where('id', '2')->update([
//         'price'=>DB::raw('price+500'),
//     ]);
// });

// Order By
// // order by
// Route::get('/', function(){
//     // return DB::table('items')->orderBy('id', 'ASC')->get();
//     // return DB::table('items')->orderBy('id', 'DESC')->get();
//     // return DB::table('items')->latest('id')->get();
//     // return DB::table('items')->oldest('id')->get();
// });

// // Query Building
// // count
// Route::get('/', function(){
//     return Item::count('name');
// });

// // min
// Route::get('/', function(){
//     return Item::min('price');
// });

// // max
// Route::get('/', function(){
//     return Item::max('price');
// });

// // select
// Route::get('/', function(){
//     $users_data = User::select('name', 'email')->get();
//     return $users_data;// returns an arry witt objects of columns inside the select method
// });

// // pluck
// Route::get('/', function(){
//     $users_data = User::pluck('name');
//     return $users_data;// returns an arry witout objects inside it
// });

// // Detach the tags 
// Route::get('/', function(){
//     Post::find('1')->tags()->detach();
// });

// // Sync Polymorphic Many to Many
// Route::get('/', function(){
//     Post::find('1')->tags()->sync([2, 1]);
// });

// // // Polymorphic Many to Many
// Route::get('/', function(){
//     return Post::find('1')->tags()->get();
//     // Post::find('1')->tags()->attach([1, 2]);
// });
// Route::get('/', function(){
//     return Video::find('1')->tags()->get();
//     // Video::find('1')->tags()->attach([2, 3]);
// });


/*
Polymorphic One to One 
------------------------

video
-----
id url

post
----
id title

comment
-------
id   comment   table commenter_id commented_id
     video cmt video    1              1
               post                    1
 */

// // One to One Polymorphic
// Route::get('/', function(){
//     return Post::find(1)->image()->get();
// });

// Route::get('/', function(){
//     Post::find(1)->image()->create([
//         'url'=>'image for post 1',
//     ]);
// });

// // has many through
// Route::get('/', function(){
//     return Project::where('id', '2')->with('deployments')->get();
// });

// // has one through
// Route::get('/', function(){
//     return Mechanic::where('id', '1')->with('owner')->get();
// });// make sure to use where while using with to get the exact data

// // synchrounous -> updates the related pivot data
// Route::get('/', function(){
//     User::find('8')->tasks()->sync([4, 5]);
// }); 

// // Fill data including to related pivot table
// Route::get('/', function(){
//     $user = User::create([
//         'name'=>'Brian Dog',
//         'email'=>'briandog@gmail.com',
//         'password'=>Hash::make('password'),
//     ]);
//     $t_arr = [8, 9, 10];
//     $user->tasks()->attach($t_arr);
// });

/*
    Many to Many
    ------------

    articles
    --------
    id  title                          
    1   What is dev?
    2   What is larave?

    languages
    ---------
    1   php
    2   html
    3   css 

    aritcle_langauges
    -----------------
    article_id  language_id
    1           1
    1           2
    2           1
    2           3
*/
// // Many to Many (might not be accurate)
// // ------------------------------------
// // Looking related data from User
// Route::get('/', function(){
//     return User::where('id', 13)->with('tasks')->first();
// });// Laravel autodetects the pivot table without 's'

// // Looking related data from Task
// Route::get('/', function(){
//     return Task::where('id', 4)->with('users')->first();
// });



/*
    One to one
    ----------
    User::find(1)->userDetail();
    User::where('id', 1)->with('userDetail')->first();
    users
    id name
     1  Mg Mg

    user_details
    id user_id phone
    1    1      090090..

    {
        id:1
        name:mgmg
        user_detail:{
            id:1
            user_id:1
            phone:090090...
        }
    }
*/
// // One to One, Looking data of master table from foreign table 
// Route::get('/', function(){
//     return Task::where('id', 3)->with('user')->first();
// });

// // One to One, Looking data of foreign table from master table
// Route::get('/', function(){
//     return User::where('id', 1)->with('userDetail')->get();
// });


// // group conditioning
// Route::get('/', function(){
//     return DB::table('users')
//                ->where('id', '<', '3')
//                ->orWhere(function($query){
//                    $query->orWhere('name', 'like', '%die%');
//                    $query->orWhere('name', 'like', '%alice%');
//                })
//                ->get();
// });

// // cross join
// Route::get('/', function(){
//     $users = DB::table('users')
//                  ->crossJoin('tasks')
//                  ->select('tasks.name as task', 'users.name')
//                  ->get();   

//     return $users;
// });

// // join
// Route::get('/', function(){
//     $users = DB::table('users')
//                  ->join('tasks', 'tasks.user_id', '=', 'users.id')
//                  ->select('tasks.name as task', 'users.name')
//                  ->get();

//     return $users;
// });

// // whereIn
// Route::get('/', function(){
//     $users = DB::table('users')->whereIn('id', [1, 4, 50, 9, 20])->get();// return the user in the array
//     return $users;
// });

// // whereBetween
// Route::get('/', function(){
//     $users = DB::table('users')->whereBetween('id', [1, 4])->get();
//     return $users;
// });

// // Where update raw
// Route::get('/', function(){
//     DB::table('users')->where('id', 3)->update([
//         'email'=>'edwardstrokes@gmail.com',
//     ]);
// });

// // DB
// Route::get('/', function(){
//     // $names = User::select('name')->get();
//     $names = DB::table('users')->get();
//     return $names;
// });

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
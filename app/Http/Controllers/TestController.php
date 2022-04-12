<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Item;

class TestController extends Controller
{
    public function test(){
        $item = Item::where('price', '>', '70')->count('id');
        
        return $item;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Item;

class TestController extends Controller
{
    public function test(){
        $item = Item::whereRaw("price < 90")
                ->get();
        
        return $item;
    }
}

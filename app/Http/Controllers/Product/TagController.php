<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return "Hello from Tag!";
    }
    public function show(){
        return "Tag is showing!";   
    }
}

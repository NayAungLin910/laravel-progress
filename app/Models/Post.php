<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//The framework auto detects that Post is connected to the posts table and if the post table 
// does not contain "s", which results as post, then it will not be detected but there is 
// still another way to connect posts table to Post model which is shown below.
class Post extends Model// posts
{
    protected $table = 'posts';// declare that this model is connected to posts table
    protected $fillable = ['title', 'description'];// this is the map assign and is needed in every model
}

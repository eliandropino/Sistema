<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post as Post;

class PostsController extends Controller
{
    protected $posts;
    public function __construct(Post $post){
        $this->posts= $post;
    }

    public function index(){
    //$posts = Post::all();
      $posts = $this->posts->all();
        return view('posts.index',['posts'=>$posts]);

    }
}

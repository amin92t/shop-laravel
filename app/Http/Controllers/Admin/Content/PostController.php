<?php

namespace App\Http\Controllers\admin\content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index()
    {
        return view('admin.content.post.index');
    }

  
    public function create()
    {
        return view('admin.content.post.create');
    }

   
}

<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.content.category.index');
    }

    public function create(){
        return view('admin.content.category.create');
    }
}

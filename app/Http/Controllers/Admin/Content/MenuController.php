<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
     public function index(){
        return view('admin.content.menu.index');
    }

    public function create(){
        return view('admin.content.menu.create');
    }
}

<?php

namespace App\Http\Controllers\admin\content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
  
    public function index()
    {
        return view('admin.content.page.index');
    }


    public function create()
    {
        return view('admin.content.page.create');
    }

}

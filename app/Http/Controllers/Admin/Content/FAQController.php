<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(){
        return view('admin.content.faq.index');
    }

    public function create(){
        return view('admin.content.faq.create');
    }
}

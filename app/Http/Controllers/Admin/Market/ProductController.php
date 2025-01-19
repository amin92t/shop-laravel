<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.market.product.index');
    }

    public function create(){
        return view('admin.market.product.create');
    }
}

<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        return view('admin.market.property.index');
    }

    public function create(){
        return view('admin.market.property.create');
    }
}

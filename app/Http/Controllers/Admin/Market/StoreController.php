<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        return view('admin.market.store.index');
    }

    public function addToStore(){
        return view('admin.market.store.add-to-store');
    }
}

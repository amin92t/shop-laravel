<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index(){
        return view('admin.market.delivery.index');
    }

    public function create(){
        return view('admin.market.delivery.create');
    }
}

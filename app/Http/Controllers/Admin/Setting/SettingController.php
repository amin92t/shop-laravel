<?php

namespace App\Http\Controllers\admin\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    
    public function index()
    {
        return view('admin.setting.index');
    }

   
}

<?php

namespace App\Http\Controllers\admin\notify;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
   
    public function index()
    {
        return view('admin.notify.email.index');

    }

    public function create()
    {
        return view('admin.notify.email.create');

    }

}

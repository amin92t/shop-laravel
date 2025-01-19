<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
            return view("admin.market.comment.index");
    }

    public function show(){
        return view("admin.market.comment.show");
    }
}
    
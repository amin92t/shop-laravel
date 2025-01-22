<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // $postCategories = PostCategory::all();
        // $postCategories = PostCategory::orderBy('created_at', 'desc')->get();
        $postCategories = PostCategory::orderBy('created_at', 'desc')->simplePaginate(10);
        // dd($postCategories);
        return view('admin.content.category.index', compact('postCategories'));
    }

    public function create(){
        return view('admin.content.category.create');
    }

    public function edit(PostCategory $postCategory){
        dd($postCategory);
    }

    public function delete(PostCategory $postCategory){
        $postCategory->delete();
        return redirect()->route('admin.content.category.index');
    }
}

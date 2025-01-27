<?php

namespace App\Http\Controllers\Admin\Content;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use App\Http\Requests\Admin\Content\PostCategoryRequest;

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
        return view('admin.content.category.edit', compact('postCategory'));

    }

    public function destroy(PostCategory $postCategory){
        $postCategory->delete();
        return redirect()->route('admin.content.category.index')->with('swal-error', "دسته بندی با موفقیت حذف شد");
     
    }

    // Form Request Validation
    public function store(PostCategoryRequest $request){

        $inputs = $request->all();
        $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        $inputs["slug"] = $slug;
        // $postCategory = PostCategory::create($inputs);
        PostCategory::create($inputs);
        return redirect()->route('admin.content.category.index')->with('toast-success', "دسته بندی با موفقیت افزوده شد");


    }


    public function update(PostCategoryRequest $request, PostCategory $postCategory){

        $inputs = $request->all();
        // $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        // $inputs["slug"] = $slug;
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index');

    }
}

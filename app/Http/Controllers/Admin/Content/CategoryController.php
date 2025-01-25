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
<<<<<<< HEAD
        // dd($postCategory);
=======
>>>>>>> 6426192f365b622e709a6af2bbfd4adf7b0c43c8
        return view('admin.content.category.edit', compact('postCategory'));

    }

    public function destroy(PostCategory $postCategory){
        $postCategory->delete();
        return redirect()->route('admin.content.category.index');
     
    }

    // Form Request Validation
    public function store(PostCategoryRequest $request){

        $inputs = $request->all();
        $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        $inputs["slug"] = $slug;
        // $postCategory = PostCategory::create($inputs);
        PostCategory::create($inputs);
        return redirect()->route('admin.content.category.index');


    }

<<<<<<< HEAD
    public function update(PostCategoryRequest $request,PostCategory $postCategory ){
        $inputs = $request->all();
        $inputs["image"] = 'image';
        $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        $inputs["slug"] = $slug;
=======

    public function update(PostCategoryRequest $request, PostCategory $postCategory){

        $inputs = $request->all();
        // $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        // $inputs["slug"] = $slug;
>>>>>>> 6426192f365b622e709a6af2bbfd4adf7b0c43c8
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index');

    }
<<<<<<< HEAD

    public function status(PostCategory $postCategory){

        $postCategory->status = $postCategory->status == 0 ? 1 : 0;
        $result = $postCategory->save();
        if($result){

            if($postCategory->status == 0){
                return response()->json(['status'=>true,'checked'=>false]);
            }else{
                return response()->json(['status'=>true,'checked'=>true]);

            }
 
        }else{
            return response()->json(['status'=>false]);
        }
        // return redirect()->route('admin.content.category.index');

    }
=======
>>>>>>> 6426192f365b622e709a6af2bbfd4adf7b0c43c8
}

<?php

namespace App\Http\Controllers\Admin\Content;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use App\Http\Requests\Admin\Content\PostCategoryRequest;
use App\Http\Services\Image\ImageService;

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
    public function store(PostCategoryRequest $request,ImageService $imageService){

        $inputs = $request->all();
        if($request->hasFile("image")){

            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post_category');

            // dd('Hi');
            // $result = $imageService->save($request->file('image')); //without resize
            // $result =  $imageService->fitAndSave($request->file('image'), 600, 150);
            // exit(); 
            $result = $imageService->createIndexAndSave($request->file('image'));


            if($result === false){

                return redirect()->route('admin.content.category.index')->with('toast-error', 'آپلود عکس ناموفق');
    
            }

            $inputs['image'] = $result;
            
            // $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
            // $inputs["slug"] = $slug;
            // $postCategory = PostCategory::create($inputs);
            PostCategory::create($inputs);
            return redirect()->route('admin.content.category.index')->with('toast-success', "دسته بندی با موفقیت افزوده شد");
            
        }

    }


    public function update(PostCategoryRequest $request, PostCategory $postCategory){

        $inputs = $request->all();
        // $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        // $inputs["slug"] = $slug;
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index');

    }
}

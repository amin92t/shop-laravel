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
    /**
     * نمایش لیست دسته‌بندی‌ها با صفحه‌بندی
     * - استفاده از simplePaginate برای عملکرد بهتر در لیست‌های طولانی
     * - مرتب‌سازی بر اساس جدیدترین موارد
     */
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

     /**
     * نمایش فرم ویرایش دسته‌بندی
     * @param PostCategory $postCategory - استفاده از Route Model Binding برای یافتن خودکار مدل
     */
    public function edit(PostCategory $postCategory){
        return view('admin.content.category.edit', compact('postCategory'));

    }


     /**
     * حذف دسته‌بندی
     * @param PostCategory $postCategory - حذف نرم‌افزاری (Soft Delete) نیاز به تنظیمات اضافه در مدل دارد
     * @return RedirectResponse با پیام SweetAlert
     */
    
    public function destroy(PostCategory $postCategory){
        $postCategory->delete();
        return redirect()->route('admin.content.category.index')->with('swal-error', "دسته بندی با موفقیت حذف شد");
     
    }

     /**
     * تغییر وضعیت فعال/غیرفعال دسته‌بنی
     * @return JSONResponse - مناسب برای فراخوانی AJAX
     */
    public function status(PostCategory $postCategory){
    
        $postCategory->status = $postCategory->status == 0 ? 1 : 0;
        $result = $postCategory->save();
        if($result){
                if($postCategory->status == 0){
                    return response()->json(['status' => true, 'checked' => false]);
                }
                else{
                    return response()->json(['status' => true, 'checked' => true]);
                }
        }
        else{
            return response()->json(['status' => false]);
        }
    
    
    }


       /**
     * ذخیره دسته‌بندی جدید
     * @param PostCategoryRequest $request - اعتبارسنجی خودکار فیلدها
     * @param ImageService $imageService - مدیریت حرفه‌ای آپلود تصویر
     */
    // Form Request Validation
    public function store(PostCategoryRequest $request,ImageService $imageService){

        $inputs = $request->all();
        
        // پردازش تصویر اگر آپلود شده باشد
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


    /**
     * بروزرسانی دسته‌بندی موجود
     * @param PostCategoryRequest $request - اعتبارسنجی مشابه ذخیره
     * @param PostCategory $postCategory - مدل مورد نظر از طریق Route Binding
     */
    public function update(PostCategoryRequest $request, PostCategory $postCategory){

        $inputs = $request->all();
        // $slug = str_replace(" ", "-", $inputs["name"]). "-" . Str::random(5);
        // $inputs["slug"] = $slug;


         // امکان افزودن منطق آپلود تصویر در ویرایش (در صورت نیاز)
        // if($request->hasFile('image')) { ... }
        
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index');

    }

 
    
    
}



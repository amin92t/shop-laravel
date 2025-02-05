<?php

namespace App\Http\Controllers\admin\content;

use App\Models\Content\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use App\Http\Services\Image\ImageService;
use App\Http\Requests\Admin\Content\PostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('admin.content.post.index', compact('posts'));
    }


    public function create()
    {
        $postCategories = PostCategory::all();
        return view('admin.content.post.create', compact('postCategories'));
    }


    public function store(PostRequest $request, ImageService $imageService){

        // dd('Hi');
        $inputs = $request->all();
        $realTimeStamp = substr($request->published_at, 0, 10);
        $inputs['published_at'] = date('Y-m-d H:i:s', (int) $realTimeStamp);

        if ($request->hasFile("image")) {

            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post');

            $result = $imageService->createIndexAndSave($request->file('image'));

            if ($result === false) {

                return redirect()->route('admin.content.category.index')->with('toast-error', 'آپلود عکس ناموفق');
            }

            $inputs['image'] = $result;



            $inputs['author_id'] = 1;
            $post = Post::create($inputs);
            return redirect()->route('admin.content.post.index')->with('swal-success', 'پست با موفقیت افزوده شد');
        }
    }
}

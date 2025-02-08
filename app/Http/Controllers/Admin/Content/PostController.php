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


    public function edit(Post $post){
        $postCategories = PostCategory::all();
        return view('admin.content.post.edit', compact('post', 'postCategories'));
    }


    public function update(PostRequest $request, Post $post, ImageService $imageService)
    {
        $inputs = $request->all();
        //date fixed
        $realTimestampStart = substr($request->published_at, 0, 10);
        $inputs['published_at'] = date("Y-m-d H:i:s", (int)$realTimestampStart);

        if ($request->hasFile('image')) {
            if (!empty($post->image)) {
                $imageService->deleteDiretoryAndFiles($post->image['directory']);
            }
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . 'post');
            $result = $imageService->createIndexAndSave($request->file('image'));
            if ($result === false) {
                return redirect()->route('admin.content.post.index')->with('swal-error', 'آپلود تصویر با خطا مواجه شد');
            }
            $inputs['image'] = $result;
        } else {
            if (isset($inputs['currentImage']) && !empty($post->image)) {
                $image = $post->image;
                $image['currentImage'] = $inputs['currentImage'];
                $inputs['image'] = $image;
            }
        }
        $post->update($inputs);
        return redirect()->route('admin.content.post.index')->with('swal-success', 'پست  شما با موفقیت ویرایش شد');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $result = $post->delete();
        return redirect()->route('admin.content.post.index')->with('swal-success', 'پست  شما با موفقیت حذف شد');
    }



    public function status(Post $post)
    {

        $post->status = $post->status == 0 ? 1 : 0;
        $result = $post->save();
        if ($result) {
            if ($post->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }


    public function commentable(Post $post)
    {

        $post->commentable = $post->commentable == 0 ? 1 : 0;
        $result = $post->save();
        if ($result) {
            if ($post->commentable == 0) {
                return response()->json(['commentable' => true, 'checked' => false]);
            } else {
                return response()->json(['commentable' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['commentable' => false]);
        }
    }
}

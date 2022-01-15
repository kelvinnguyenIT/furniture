<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\ImageService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $postList=Post::get();
        return view('admin.post.index',compact('postList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.post.add-Post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $postRequest
     * @return Response
     */
    public function store(ImageService $imageService,PostRequest $request)
    {
        $pathImage=$imageService->store($request->img,config('constants.url.image-post'));
        $request['date']=date("d/m/Y",time());
        $request['slug']=Str::slug($request->title);
        $request['image']=$pathImage;
        Post::create($request->except('img','files'));
        return redirect()->route('post.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.update-Post',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $postRequest
     * @param Post $post
     * @return Response
     */
    public function update(ImageService $imageService,PostRequest $request,Post $post)
    {
        $request['date']=date("d/m/Y",time());
        $request['slug']=Str::slug($request->title);

        if($request->has('img')){
            $request['image']=$imageService->store($request->img,config('constants.url.image-post'));
        }
        $post->update($request->except('img'));
        return redirect()->route('post.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     * @throws Exception
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('Xóa thành công');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostTagRequest;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $postTagList=PostTag::get();
        $tagList=Tag::get();
        $postList=Post::get();
        return view('admin.post-tag.index',compact('postTagList','tagList','postList'));
    }

    public function cutString($string)
    {
        $cutChar=strstr($string,'-');
        $stringNum=str_replace($cutChar,'',$string);
        return $stringNum;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostTagRequest $postTagRequest
     * @return Response
     */
    public function store(PostTagRequest $request)
    {
        $request['post_id']=$this->cutString($request->post);
        $request['tag_id']=$request->tag[0];
        PostTag::create($request->except(['post','tag']));
        return redirect()->route('post-tag.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param PostTag $postTag
     * @return Response
     */
    public function show(PostTag $postTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PostTag $postTag
     * @return Response
     */
    public function edit(PostTag $postTag)
    {
        $tagList=Tag::get();
        $postList=Post::get();
        return view('admin.post-tag.update-PostTag',compact('postTag','tagList','postList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostTagRequest $postTagRequest
     * @param PostTag $postTag
     * @return Response
     */
    public function update(PostTagRequest $request, PostTag $postTag)
    {
        $request['post_id']=$this->cutString($request->post);
        $request['tag_id']=$request->tag[0];
        $postTag->update($request->except(['post','tag']));
        return redirect()->route('post-tag.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PostTag $postTag
     * @return Response
     * @throws Exception
     */
    public function destroy(PostTag $postTag)
    {
        $postTag->delete();
        return redirect()->route('post-tag.index')->with('Xóa thành công');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tagList=Tag::get();
        return view('admin.tag.index',compact('tagList'));
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
     * @param TagRequest $tagRequest
     * @return Response
     */
    public function store(TagRequest $request)
    {
        $request['slug']=Str::slug($request->name);
        Tag::create($request->all());
        return redirect()->route('tag.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.update-Tag',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $tagRequest
     * @param Tag $tag
     * @return Response
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $request['slug']=Str::slug($request->name);
        $tag->update($request->all());
        return redirect()->route('tag.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return Response
     * @throws Exception
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index')->with('Xóa thành công');
    }
}

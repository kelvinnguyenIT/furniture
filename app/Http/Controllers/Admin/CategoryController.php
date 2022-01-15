<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categoryList=Category::get();
        return view('admin.category.index',compact('categoryList'));
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
     * @param CategoryRequest $categoryRequest
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        $request['slug']=Str::slug($request->name);
        Category::create($request->all());
        return redirect()->route('category.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.update-Category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $categoryRequest
     * @param Category $category
     * @return Response
     */
    public function update(CategoryRequest $request,Category $category)
    {
        $request['slug']=Str::slug($request->name);
        $category->update($request->all());
        return redirect()->route('category.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     * @throws Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('Xóa thành công');
    }
}

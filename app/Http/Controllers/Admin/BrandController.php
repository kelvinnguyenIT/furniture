<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $brandList=Brand::get();
        return view('admin.brand.index',compact('brandList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BrandRequest $brandRequest
     * @return Response
     */
    public function store(BrandRequest $request)
    {
        $request['slug']=Str::slug($request->name);
        Brand::create($request->all());
        return redirect()->route('brand.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $brand
     * @return Response
     */
    public function show(Brand $brand)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $brand
     * @return Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.update-Brand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BrandRequest $brandRequest
     * @param Brand $brand
     * @return Response
     */
    public function update(BrandRequest $request,Brand $brand)
    {
        $request['slug']=Str::slug($request->name);
        $brand->update($request->all());
        return redirect()->route('brand.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return Response
     * @throws Exception
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index')->with('Xóa thành công');
    }
}

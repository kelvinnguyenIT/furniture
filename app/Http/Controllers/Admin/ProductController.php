<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Services\ImageService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productList=Product::all();
        return view('admin.product.index',compact('productList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categoryList=Category::get();
        $brandList=Brand::get();
        return view('admin.product.add-Product',compact('categoryList','brandList'));
    }

    public function cutString($string)
    {
        $cutChar=strstr($string,'-');
        $stringNum=str_replace($cutChar,'',$string);
        return $stringNum;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $productRequest
     * @return Response
     */
    public function store(ImageService $imageService,ProductRequest $request)
    {
        $request['slug']=Str::slug($request->name);
        $request['image']=$imageService->store($request->img,config('constants.url.image-product'));
        $request['category_id']=$this->cutString($request->category);
        $request['brand_id']=$this->cutString($request->brand);
        Product::create($request->except('img','category','brand','files'));
        return redirect()->route('product.index')->with('Lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        $categoryList=Category::get();
        $brandList=Brand::get();
        return view('admin.product.update-Product',compact('product','categoryList','brandList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $productRequest
     * @param Product $product
     * @return Response
     */
    public function update(ImageService $imageService,ProductRequest $request,Product $product)
    {
        $request['slug']=Str::slug($request->name);
        $request['category_id']=$this->cutString($request->category);
        $request['brand_id']=$this->cutString($request->brand);
        if($request->has('img')){
        $request['image']=$imageService->store($request->img,config('constants.url.image-product'));
        }
        $product->update($request->except('brand','category','img'));
        return redirect()->route('product.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('Xóa thành công');
    }
}

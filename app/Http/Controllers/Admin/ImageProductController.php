<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageProductRequest;
use App\Models\ImageProduct;
use App\Models\Product;
use App\Services\ImageService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productList=Product::get();
        $imageList=ImageProduct::get();
        return view('admin.product.image',compact('imageList','productList'));
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
     * @param ImageProductRequest $imageProductRequest
     * @return Response
     */
    public function store(ImageService $imageService,Request $request)
    {
        $request['product_id']=$this->cutString($request->product);
        $request['image']=$imageService->store($request->img,'/image/product/');
        ImageProduct::create($request->except('product','img'));
        return redirect()->route('image-product.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param ImageProduct $imageProduct
     * @return Response
     */
    public function show(ImageProduct $imageProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ImageProduct $imageProduct
     * @return Response
     */
    public function edit(ImageProduct $imageProduct)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ImageProductRequest $imageProductRequest
     * @param ImageProduct $imageProduct
     * @return Response
     */
    public function update(ImageProduct $imageProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ImageProduct $imageProduct
     * @return Response
     * @throws Exception
     */
    public function destroy(ImageProduct $imageProduct)
    {
        $imageProduct->delete();
        return redirect()->route('image-product.index')->with('Xóa thành công');
    }
}

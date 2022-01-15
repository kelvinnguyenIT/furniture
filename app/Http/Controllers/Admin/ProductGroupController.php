<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductGroupRequest;
use App\Models\Group;
use App\Models\Product;
use App\Models\ProductGroup;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productgroupList=ProductGroup::get();
        $groupList=Group::get();
        $productList=Product::get();
        return view('admin.product-group.index',compact('productgroupList','groupList','productList'));
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
     * @param ProductGroupRequest $productGroupRequest
     * @return Response
     */
    public function store(ProductGroupRequest $request)
    {
        $request['product_id']=$this->cutString($request->product);
        $request['group_id']=$request->group[0];
        ProductGroup::create($request->except('product','group'));
        return redirect()->route('product-group.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param ProductGroup $productGroup
     * @return Response
     */
    public function show(ProductGroup $productGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductGroup $productGroup
     * @return Response
     */
    public function edit(ProductGroup $productGroup)
    {
        $groupList=Group::get();
        $productList=Product::get();
        return view('admin.product-group.update-ProductGroup',compact('productGroup','groupList','productList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductGroupRequest $productGroupRequest
     * @param ProductGroup $productGroup
     * @return Response
     */
    public function update(ProductGroupRequest $request, ProductGroup $productGroup)
    {
        $request['product_id']=$this->cutString($request->product);
        $request['group_id']=$request->group[0];
        $productGroup->update($request->except('product','group'));
        return redirect()->route('product-group.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductGroup $productGroup
     * @return Response
     * @throws Exception
     */
    public function destroy(ProductGroup $productGroup)
    {
        $productGroup->delete();
        return redirect()->route('product-group.index')->with('Xóa thành công');
    }
}

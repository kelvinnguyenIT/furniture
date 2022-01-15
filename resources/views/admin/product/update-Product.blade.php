@extends('admin.layouts.app')

@section('title','Sửa sản phẩm')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Product</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" name="name"  required value="{{$product->name}}">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" name="price" required value="{{$product->price}}">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" name="discount_price" required value="{{$product->discount_price}}">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="category" >
                                                <option selected disabled>Category</option>
                                                <option selected>{{$product->category_id}}-{{$product->category()->get()->first()->name}}</option>

                                            @forelse ($categoryList as $category)
                                                <option>{{$category->id}}-{{$category->name}}</option>
                                            @empty
                                            @endforelse

                                            </select>
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="brand" >
                                                <option selected disabled>Brand</option>
                                                <option selected>{{$product->brand_id}}-{{$product->brand()->get()->first()->name}}</option>

                                            @forelse ($brandList as $brand)
                                                <option>{{$brand->id}}-{{$brand->name}}</option>
                                            @empty
                                            @endforelse

                                            </select>
                                        </div>
                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light btn-sm">
                                                <span><i class="ion-upload m-r-5"></i>Image</span>
                                                <img src="{{$product->image}}" width="80">
                                                <input type="file" class="upload" name="img">
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                            <x-summernote name="description" label="Description" value="{{$product->description}}"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Product</button>
                                        <a href="{{route('product.index')}}"><button type="button"
                                           class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button></a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection

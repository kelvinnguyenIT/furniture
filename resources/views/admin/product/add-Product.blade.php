@extends('admin.layouts.app')

@section('title','Thêm sản phẩm')

@section('content')

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add product</h4>
                                <h6 class="card-subtitle"></h6>

                                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" required placeholder="Name" name="name">
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="number" class="form-control" required placeholder="Price" name="price">
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="number" class="form-control" required placeholder="Discount Price" name="discount_price">
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <select class="form-control" name="category">
                                                    <option selected disabled>Category</option>

                                                @forelse ($categoryList as $category)
                                                    <option>{{$category->id}}-{{$category->name}}</option>
                                                @empty
                                                @endforelse

                                                </select>
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <select class="form-control" name="brand">
                                                    <option selected disabled>Brand</option>

                                                @forelse ($brandList as $brand)
                                                    <option>{{$brand->id}}-{{$brand->name}}</option>
                                                @empty
                                                @endforelse

                                                </select>
                                            </div>
                                            <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light btn-sm">
                                                    <span><i class="ion-upload m-r-5"></i>Image</span>
                                                    <input type="file" class="upload" required name="img">
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                                <x-summernote name="description" label="Description" />
                                            </div>
                                            @if($errors->any())
                                                <x-error />
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info waves-effect">Add Product</button>
                                            <a href="{{route('product.index')}}"><button type="button" class="btn btn-default waves-effect">Cancel</button></a>
                                        </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>

    @endsection

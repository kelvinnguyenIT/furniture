@extends('admin.layouts.app')

@section('title','Sửa nhóm sản phẩm')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product list</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('product-group.update',$productGroup->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="group" >
                                                <option selected disabled>Nhóm sản phẩm</option>
                                                <option selected>{{$productGroup->group_id}}-{{$productGroup->group()->first()->name}}</option>

                                            @forelse ($groupList as $group)
                                                <option>{{$group->id}}-{{$group->name}}</option>
                                            @empty
                                            @endforelse

                                            </select>
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="product" >
                                                <option selected disabled>Sản phẩm</option>
                                                <option selected>{{$productGroup->product_id}}-{{$productGroup->product()->first()->name}}</option>

                                            @forelse ($productList as $product)
                                                <option>{{$product->id}}-{{$product->name}}</option>
                                            @empty
                                            @endforelse

                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Group Product</button>
                                        <a href="{{route('product-group.index')}}"><button type="button" class="btn btn-default waves-effect"
                                            >Cancel</button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection

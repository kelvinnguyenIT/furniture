@extends('admin.layouts.app')

@section('title','Hình sản phẩm')

@section('content')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Image list</h4>
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right"
                                    data-toggle="modal" data-target="#add-contact">Add New Image</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Add New Image</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{route('imageproduct.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <select class="form-control" name="product" >

                                                            @forelse ($productList as $product)
                                                                <option>{{$product->id}}-{{$product->name}}</option>
                                                            @empty
                                                            @endforelse

                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light btn-sm">
                                                                <span><i class="ion-upload m-r-5"></i>Upload Product Image</span>
                                                                <input type="file" class="upload" name="img"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info waves-effect">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect"
                                                                data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow"
                                           class="table table-bordered m-t-30 table-hover contact-list"
                                           data-paging-size="1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Image</th>
                                                <th>Perform</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($imageList as $image)
                                                <tr>
                                                    <td>{{$image->id}}</td>
                                                    <td>{{$image->product()->get()->first()->name}}</td>
                                                    <td>
                                                        <img src="{{$image->image}}" alt="user" width="100"/>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <form action="{{route('imageproduct.destroy',$image->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn-delete" type="submit"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

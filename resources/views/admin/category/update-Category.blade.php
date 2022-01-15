@extends('admin.layouts.app')

@section('title','Sửa loại sản phẩm')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update category</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                         <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                        </div>
                                        @if($errors->any())
                                            <x-error />
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Category</button>
                                        <a href="{{route('category.index')}}">
                                            <button type="button" class="btn btn-default waves-effect">Cancel</button>
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection

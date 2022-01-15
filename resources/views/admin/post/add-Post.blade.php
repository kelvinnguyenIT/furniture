@extends('admin.layouts.app')

@section('title','Đăng bài')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add post</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" required placeholder="Title" name="title">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" required placeholder="Author" name="author">
                                        </div>
                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light btn-sm">
                                                <span><i class="ion-upload m-r-5"></i>Image</span>
                                                <input type="file" class="upload" required name="img">
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                            <x-summernote name="content" label="Content" />
                                        </div>
                                        @if($errors->any())
                                                <x-error />
                                            @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Add Post</button>
                                        <a href="{{route('post.index')}}"><button type="button" class="btn btn-default waves-effect">Cancel</button></a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

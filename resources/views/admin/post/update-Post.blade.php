@extends('admin.layouts.app')

@section('title','Sửa bài đăng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update post</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title}}">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Author" name="author" value="{{$post->author}}">
                                        </div>
                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light btn-sm">
                                                <span><i class="ion-upload m-r-5"></i>Image post</span>
                                                <img src="{{$post->image}}" width="80">
                                                <input type="file" class="upload" name="img">
                                            </div>
                                        </div>
                                        <div class="col-md-12 m-b-20" style="margin-top: 20px">
                                            <x-summernote name="content" label="Content" value="{{$post->content}}"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Post</button>
                                        <a href="{{route('post.index')}}"><button type="button" class="btn btn-default waves-effect"
                                            data-dismiss="modal">Cancel</button>
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

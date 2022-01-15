@extends('admin.layouts.app')

@section('title','Sửa thẻ bài đăng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Post tag list</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('post-tag.update',$postTag->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="tag" >
                                                <option selected disabled>Thẻ bài đăng</option>
                                                <option selected>{{$postTag->tag_id}}-{{$postTag->tag()->first()->name}}</option>

                                            @forelse ($tagList as $tag)
                                                <option>{{$tag->id}}-{{$tag->name}}</option>
                                            @empty
                                            @endforelse

                                            </select>
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="post" >
                                                <option selected disabled>Bài đăng</option>
                                                <option selected>{{$postTag->post_id}}-{{$postTag->post()->get()->first()->title}}</option>

                                            @forelse ($postList as $post)
                                                <option>{{$post->id}}-{{$post->title}}</option>
                                            @empty
                                            @endforelse

                                            </select>
                                        </div>
                                        @if($errors->any())
                                            <x-error />
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Post Tag</button>
                                        <a href="{{route('post-tag.index')}}"><button type="button" class="btn btn-default waves-effect"
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

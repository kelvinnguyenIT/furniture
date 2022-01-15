@extends('admin.layouts.app')

@section('title','Các thẻ bài đăng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Post tag list</h4>
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right"
                                        data-toggle="modal" data-target="#add-contact">Add New Post Tag</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Post Tag</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                </div>

                                            <form action="{{route('post-tag.store')}}" method="POST" class="form-horizontal form-material">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <select class="form-control" name="post" >
                                                                <option selected disabled>Bài đăng</option>

                                                            @forelse ($postList as $post)
                                                                <option>{{$post->id}}-{{$post->title}}</option>
                                                            @empty
                                                            @endforelse

                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <select class="form-control" name="tag">
                                                                <option selected disabled>Thẻ tag bài đăng</option>

                                                            @forelse ($tagList as $tag)
                                                                <option>{{$tag->id}}-{{$tag->name}}</option>
                                                            @empty
                                                            @endforelse

                                                            </select>
                                                        </div>
                                                        @if($errors->any())
                                                        <x-error />
                                                        @endif
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
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered display js-datatable w-100">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Tag</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($postTagList as $postTag)
                                            <tr>
                                                <td>{{$postTag->id}}</td>
                                                <td>
                                                    <img src="{{$postTag->post()->first()->image}}" alt="user" width="100"/>
                                                </td>
                                                <td>{{$postTag->post()->first()->title}}</td>
                                                    <td>{{$postTag->tag()->first()->name}}</td>
                                                <td>
                                                    <x-action route="post-tag" id="{{$postTag->id}}"/>
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

@endsection

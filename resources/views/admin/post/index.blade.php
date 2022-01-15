@extends('admin.layouts.app')

@section('title','Bài đăng')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-sm btn-outline-success float-right" href="{{ route('post.create') }}">
                            <i class="fas fa-plus-circle"></i> @lang('Add New')</a>
                        <h4 class="card-title">@lang('Product List')</h4>
                        <h6 class="card-subtitle">&nbsp;</h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered display js-datatable w-100">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                    <th>Content</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($postList as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>
                                            <img src="{{$post->image}}" alt="user" width="100"/>
                                        </td>
                                        <td>{{$post->title}}</td>
                                            <td>{{$post->author}}</td>
                                            <td>{{$post->date}}</td>
                                            <td>
                                                <textarea rows="10" cols="20" class="format-text">
                                                    {!!$post->content!!}
                                                </textarea>
                                            </td>
                                        <td>
                                            <x-action route="post" id="{{$post->id}}"/>
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

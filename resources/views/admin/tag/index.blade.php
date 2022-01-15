@extends('admin.layouts.app')

@section('title','Thẻ bài đăng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tag list</h4>
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right"
                                        data-toggle="modal" data-target="#add-contact">Add New Tag</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Tag</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                </div>

                                            <form action="{{route('tag.store')}}" method="POST" class="form-horizontal form-material">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Nhập tên thẻ tag" name="name">
                                                        </div>
                                                    </div>
                                                    @if($errors->any())
                                                    <x-error />
                                                    @endif
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
                                            <th>Tag</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($tagList as $tag)
                                            <tr>
                                                <td>{{$tag->id}}</td>
                                                <td>{{$tag->name}}</td>
                                                <td>
                                                    <x-action route="tag" id="{{$tag->id}}"/>
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

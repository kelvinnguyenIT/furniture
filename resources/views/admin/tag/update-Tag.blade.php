@extends('admin.layouts.app')

@section('title','Sửa thẻ bài đăng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <form action="{{route('tag.update',$tag->id)}}" method="POST" class="form-horizontal form-material">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Update tag</h4>
                                    <h6 class="card-subtitle"></h6>
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" name="name" value="{{$tag->name}}">
                                        </div>
                                        @if($errors->any())
                                            <x-error />
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Tag</button>
                                        <a href="{{route('tag.index')}}"><button type="button" class="btn btn-default waves-effect">Cancel</button></a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

@endsection

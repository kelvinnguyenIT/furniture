@extends('admin.layouts.app')

@section('title', 'Loại sản phẩm')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category list</h4>
                        <h6 class="card-subtitle"></h6>
                        <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right" data-toggle="modal"
                            data-target="#add-contact">Add New Category</button>
                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>

                                    <form action="{{ route('category.store') }}" method="POST"
                                        class="form-horizontal form-material">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control"
                                                        placeholder="Nhập loại sản phẩm" name="name">
                                                </div>
                                            </div>
                                            @if ($errors->any())
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
                            <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list"
                                data-paging-size="1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Perform</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categoryList as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <x-action route="category" id="{{ $category->id }}" />
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

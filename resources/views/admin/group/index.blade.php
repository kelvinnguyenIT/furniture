@extends('admin.layouts.app')

@section('title','Nhóm sản phẩm')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Group list</h4>
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right"
                                        data-toggle="modal" data-target="#add-contact">Add New Group</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Group</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>

                                            <form action="{{route('group.store')}}" method="POST" class="form-horizontal form-material">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Nhập tên nhóm sản phẩm" name="name">
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
                                            <th>Group</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($groupList as $group)
                                            <tr>
                                                <td>{{$group->id}}</td>
                                                <td>{{$group->name}}</td>
                                                <td>
                                                    <x-action route="group" id="{{$group->id}}"/>
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

@extends('admin.layouts.app')

@section('title','Nhóm từng sản phẩm')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product group list</h4>
                                <h6 class="card-subtitle"></h6>
                                <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right"
                                        data-toggle="modal" data-target="#add-contact">Add New Product Group</button>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Add New Product Group</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                </div>
                                            <form action="{{route('product-group.store')}}" method="POST" class="form-horizontal form-material">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <select class="form-control" name="product" required>
                                                                <option selected disabled>Sản phẩm</option>

                                                            @forelse ($productList as $product)
                                                                <option>{{$product->id}}-{{$product->name}}</option>
                                                            @empty
                                                            @endforelse

                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <select class="form-control" name="group" required>
                                                                <option selected disabled>Nhóm sản phẩm</option>

                                                            @forelse ($groupList as $group)
                                                                <option>{{$group->id}}-{{$group->name}}</option>
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
                                            <th>Name</th>
                                            <th>Group</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($productgroupList as $productgroup)
                                            <tr>
                                                <td>{{$productgroup->id}}</td>
                                                <td>
                                                    <img src="{{$productgroup->product()->first()->image}}" alt="user" width="100"/>
                                                </td>
                                                <td>{{$productgroup->product()->first()->name}}</td>
                                                    <td>{{$productgroup->group()->first()->name}}</td>
                                                <td>
                                                    <x-action route="product-group" id="{{$productgroup->id}}"/>
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

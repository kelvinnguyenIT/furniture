@extends('admin.layouts.app')

@section('title', __('Customer'))

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-sm btn-outline-success float-right" href="{{ route('product.create') }}">
                        <i class="fas fa-plus-circle"></i> @lang('Add New')</a>
                    <h4 class="card-title">@lang('Product List')</h4>
                    <h6 class="card-subtitle">&nbsp;</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered display js-datatable w-100">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($productList as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>
                                        <img src="{{$product->image}}" alt="user" width="100"/>
                                    </td>
                                    <td>{{$product->name}}</td>
                                        <td>{{$product->vnd}}</td>
                                        <td>{{$product->vnd_discount}}</td>
                                        <td>{{$product->brand()->first()->name}}</td>
                                        <td>{{$product->category()->get()->first()->name}}</td>
                                        <td>
                                            <textarea rows="10" cols="20" class="format-text">
                                                {!!$product->description!!}
                                            </textarea>
                                        </td>
                                    <td>
                                        <x-action route="product" id="{{$product->id}}"/>
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

@endsection

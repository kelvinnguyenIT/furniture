@extends('admin.layouts.app')

@section('title','Đơn hàng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order list</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered display js-datatable w-100">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Delivery Code</th>
                                            <th>Image Product</th>
                                            <th>Name Product</th>
                                            <th>Customer Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Price</th>
                                            <th>Count</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($orderList as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                    <td>{{$order->code}}</td>
                                                    <td>
                                                        <img
                                                            src="{{$order->product()->first()->image}}" alt="user" width="100"/>
                                                    </td>
                                                    <td>{{$order->product()->first()->name}}</td>
                                                    <td>{{$order->name}}</td>
                                                    <td>{{$order->phone_number}}</td>
                                                    <td>{{$order->address}}</td>
                                                    <td>{{$order->price_total}}</td>
                                                    <td>{{$order->count}}</td>
                                                    <td>
                                                        @if($order->status==0)
                                                            Đang chờ xét
                                                        @endif
                                                        @if($order->status==1)
                                                            Đang giao
                                                        @endif
                                                        @if($order->status==2)
                                                            Đã giao
                                                        @endif
                                                        @if($order->status==3)
                                                            Đã hủy
                                                        @endif
                                                    </td>
                                                <td>
                                                    <x-action route="order" id="{{$order->id}}"/>
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

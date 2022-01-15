@extends('admin.layouts.app')

@section('title','Thay đổi tình trạng đơn hàng')

@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update status order</h4>
                                <h6 class="card-subtitle"></h6>

                                <form action="{{route('order.update',$order->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <select class="form-control" name="order" >
                                                <option selected disabled>Nhóm sản phẩm</option>
                                                <option selected>{{$order->status}}-
                                                    @if($order->status==0)
                                                        Đang chờ xét duyệt
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
                                                </option>

                                                <option>0-Đang chờ xét duyệt</option>
                                                <option>1-Đang giao</option>
                                                <option>2-Đã giao</option>
                                                <option>3-Đã hủy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info waves-effect">Update Group</button>
                                        <a href="{{route('order.index')}}"><button type="button" class="btn btn-default waves-effect"
                                            data-dismiss="modal">Cancel</button></a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

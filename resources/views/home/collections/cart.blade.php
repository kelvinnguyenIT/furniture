
@extends('home.layouts.app')

@section('title','Giỏ hàng cửa hàng nội thất Dưa Leo Furniture')

@section('content')

	<section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope>
                        <li class="home">
                            <a itemprop="url" itemprop="url" href="/" ><span itemprop="title"><i class="fa fa-home"></i> Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">Giỏ hàng của bạn - Nội thất Dưa Leo</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container container-fix-hd">
        <div class="hidden-xs hidden box-heading box-heading-line cart-heading relative">
            <h1 class="title-head hidden page_title">Giỏ hàng</h1>
        </div>
    </div>
    <section class="main-cart-page main-container col1-layout">
	    <div class="main container hidden-xs">
		    <div class="col-main cart_desktop_page cart-page">
                <div class="cart page_cart hidden-xs">

                    @if(session('productCartList'))
                        <div class="bg-scroll">
                            <div class="cart-thead">
                                <div style="width: 19%; ">Sản phẩm</div>
                                <div style="width: 28%;padding-left: 5px;">
                                    <span class="nobr">Thông tin sản phẩm</span>
                                </div>
                                <div style="width: 17%" class="a-center">
                                    <span class="nobr">Đơn giá</span>
                                </div>
                                <div style="width: 18%" class="a-center">Số lượng</div>
                                <div style="width: 13%;" class="a-center">Thành tiền</div>
                                <div style="width: 5%" class="a-center">Xóa</div>
                            </div>

                            <div class="cart-tbody">

                                <?php $i=0; ?>
                                @forelse (session('productCartList') as $productCart)
                                    <div class="item-cart productid-1033205998 item-cart-local{{$i}}">
                                        <div style="width: 19%" class="image">
                                            <a class="product-image" title="{{$productCart->name}}" href="{{$productCart->slug}}">
                                                <img width="120" height="auto" alt="{{$productCart->name}}" src="{{$productCart->image}}">
                                            </a>
                                        </div>
                                        <div style="width: 28%;align-items: flex-start;" class="a-center">
                                            <h2 class="product-name">
                                                <a href="{{$productCart->slug}}">{{$productCart->name}}</a>
                                            </h2>
                                            <div style="height: 30px;position: relative;width: 78px;padding: 10px 0; border: none;">
                                            </div>
                                        </div>
                                        <div style="width: 17%" class="a-center">
                                            <span class="item-price">
                                                <span class="price">{{$productCart->vnd}}</span>
                                            </span>
                                        </div>
                                        <div style="width: 18%" class="a-center">
                                            <div class="input_qty_pr relative ">
                                                <button class="reduced_pop items-count btn-minus" onclick="minusCount({{$productCart->id}},{{$i}})" id="btnminus{{$productCart->id}}" type="button">–</button>
                                                <input readonly type="text" data-id="1033205998" maxlength="2" min="0" class="input-text number-sidebar input_pop input_pop qtyItem1033205998 quantity{{$productCart->id}}" name="Lines" size="4" value="1">
                                                <button class="items-count btn-plus" onclick="plusCount({{$productCart->id}},{{$i}})" id="btnplus{{$productCart->id}}" type="button">+</button>
                                            </div>
                                        </div>
                                        <div style="width: 13%;" class="a-center">
                                            <span class="cart-price">
                                                <span class="price priceitem{{$productCart->id}}">{{$productCart->vnd}}</span>
                                                <input hidden id="totalpriceItem{{$productCart->id}}" value="{{$productCart->vnd}}">
                                            </span>
                                            <input hidden class="total_price price" id="totalprice" value="0">
                                        </div>
                                        <div style="width: 5%" class="a-center">
                                            <a class="button remove-item remove-item-cart" title="Xóa" onclick="deleteItemCart({{$productCart->id}},{{$i}})" data-id="1033205998"><span><i class="fa fa-remove"></i></span></a>
                                        </div>
                                    </div>
                                    
                                    <script>
                                        adjustCartPage({{$productCart->id}},<?php echo $productCart;?>);
                                    </script>
                                        <?php $i++; ?>
                                @empty
                                @endforelse
                            </div>
                        </div>

                        <div class="cart-collaterals cart_submit row">
                            <div class="totals col-sm-12 col-md-12 col-xs-12">
                                <div class="totals">
                                    <div class="inner">
                                        <table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
                                            <colgroup>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                        <ul class="checkout">
                                            <li class="clearfix">
                                                <div class="inline-block">
                                                    <span>Tổng tiền:</span>
                                                    <strong><span class="totals_price price"></span></strong>
                                                </div>
                                                <button onclick="sendproduct()" class="btn btn-primary button btn-proceed-checkout f-right" title="Tiến hành thanh toán" >
                                                    <span style="text-transform: initial; ">Tiến hành đặt hàng</span>
                                                </button>
                                                <button class="btn btn-gray margin-right-15 f-right" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/product/group/tat-ca'">
                                                    <span style="text-transform: initial; ">Tiếp tục mua hàng</span>
                                                </button>
                                            </li>
                                        </ul>

                                        <script>
                                            sumPricePage();
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @else

                            <div class="header-cart" style="background:#fff;">
                                <div class="title-cart">
                                    <p>Giỏ hàng của bạn chưa có sản phẩm nào nhấn vào <a href="/product/group/tat-ca" style="color: ;float:none;">Cửa hàng</a> để mua hàng</p>
                                </div>
                            </div>
                            <div class="header-cart-content" style="background:#fff;"></div>

                        @endif
                    </div>
		        </div>
	        </div>
        </section>

@endsection

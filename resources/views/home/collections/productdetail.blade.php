@extends('home.layouts.app')

@section('title',$title)

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
                        <li>
                            <a itemprop="url" href="/product/group"><span itemprop="title">Sản phẩm</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong><span itemprop="title">{{$product->name}}</span></strong><li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="product" itemscope>
        <meta itemprop="url" content="{{$product->slug}}">
        <meta itemprop="image" content="{{$product->image}}">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 details-product">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 relative">
                            <div class="large-image">
                                <a href="{{$product->image}}" data-rel="prettyPhoto[product-gallery]">
                                    <img id="zoom_01" src="{{$product->image}}" alt="">
                                </a>
                                <div class="hidden">
                                    <div class="item">
                                        <a href="/image/product/upload_c0cdbf864d1c4120a5ca5113ea09af6b.jpg" data-image="https://product.hstatic.net/1000325675/product/upload_c0cdbf864d1c4120a5ca5113ea09af6b.jpg" data-zoom-image="https://product.hstatic.net/1000325675/product/upload_c0cdbf864d1c4120a5ca5113ea09af6b.jpg" data-rel="prettyPhoto[product-gallery]">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="/image/product/upload_7748d4df45b742a6a085eca861f2addc.jpg" data-image="https://product.hstatic.net/1000325675/product/upload_7748d4df45b742a6a085eca861f2addc.jpg" data-zoom-image="https://product.hstatic.net/1000325675/product/upload_7748d4df45b742a6a085eca861f2addc.jpg" data-rel="prettyPhoto[product-gallery]">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 details-pro">
                            <h1 class="title-head" itemprop="name">{{$product->name}}</h1>
                            <div class="detail-header-info ">
                                Tình trạng:
                                <span class="inventory_quantity">Còn hàng</span>
                            </div>
                            <div class="price-box">
                                <div class="special-price"><span class="price product-price" >{{$product->vnd}}</span></div>
                            </div>
                            <div class="product_description margin-bottom-20">
                                <div class="rte description">
                                    {{$product->limit_description}}
                                </div>
                            </div>
                            <div class="form-product">
                                <form class="form-inline">
                                    {{-- <div class="form-groupx form-group form-detail-action ">
                                        <label>Số lượng: </label>
                                        <div class="custom custom-btn-number">
                                            <span class="qtyminus" data-field="quantity"><i class="fa fa-caret-down"></i></span>
                                            <input type="number" class="input-text qty" data-field='quantity' title="Só lượng" value="1" maxlength="12" id="qty" name="quantity">
                                            <span class="qtyplus" data-field="quantity"><i class="fa fa-caret-up"></i></span>
                                        </div>
                                    </div> --}}
                                    <div class="form-groupx form-group form-detail-action ">
                                        <button onclick="senDataAjax({{$product->id}})" class="btn btn-lg btn-primary btn-cart btn-cart2 add_to_cart btn_buy add_to_cart" title="Cho vào giỏ hàng">
                                            <span>Mua hàng</span>
                                        </button>
                                    </div>
                                </form>
                                <div class="social-sharing">
                                    <div class="social-media" data-permalink="ghe-sopha-kem.html">
                                        <span class="inline">Chia sẻ: </span>
                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://dualeo-furniture.myharavan.com/products/ghe-sopha-kem" class="share-facebook" title="Chia sẻ lên Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="http://twitter.com/share?text=Gh%E1%BA%BF%20sopha%20kem&amp;url=https://dualeo-furniture.myharavan.com/products/ghe-sopha-kem" class="share-twitter" title="Chia sẻ lên Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="http://pinterest.com/pin/create/button/?url=https://dualeo-furniture.myharavan.com/products/ghe-sopha-kem&amp;media=http://product.hstatic.net/1000325675/product/upload_c0cdbf864d1c4120a5ca5113ea09af6b_1024x1024.jpg&amp;description=Gh%E1%BA%BF%20sopha%20kem" class="share-pinterest" title="Chia sẻ lên pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a target="_blank" href="http://plus.google.com/share?url=https://dualeo-furniture.myharavan.com/products/ghe-sopha-kem" class="share-google" title="+1">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="row margin-top-75 xs-margin-top-15">
                        <div class="col-xs-12">
                            <div class="product-tab e-tabs not-dqtab">
                                <ul class="tabs tabs-title clearfix">
                                    <li class="tab-link" data-tab="tab-1">
                                        <h3><span>Mô tả</span></h3>
                                    </li>
                                    <li class="tab-link" data-tab="tab-2">
                                        <h3><span>Tab tùy chỉnh</span></h3>
                                    </li>
                                </ul>
                                <div id="tab-1" class="tab-content">
                                    <div class="rte">
                                        {!!$product->description!!}
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-content">
                                    Các nội dung Hướng dẫn mua hàng viết ở đây
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="product-fb-comments">
                        <div class="fb-comments" data-href="{{$product->slug}}" data-numposts="5"></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="related-product margin-top-10">
                        <div class="heading a-center">
                            <h2 class="title-head"><a>Sản phẩm cùng loại</a></h2>
                        </div>
                        <div class="section-content">
                            <div class="products products-view-grid owl-carousel owl-theme"  data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true">
                                <?php $i=0?>
                            @forelse ($productRelatedList as $productRelated)

                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <a href="{{$productRelated->slug}}" title="{{$productRelated->name}}">
                                            <img src="{{$productRelated->image}}" alt="{{$productRelated->name}}">
                                        </a>
                                        <div class="product-action clearfix">
                                            <div class="fix_bg" onclick="window.location.href='{{$productRelated->slug}}'"></div>
                                            <form class="variants form-nut-grid">
                                                <div>
                                                    <div class="action-item">
                                                        <a data-toggle="tooltip" title="Xem nhanh" onclick="quickView({{$productRelated}},
                                                        '{{$productRelated->vnd}}','{{$productRelated->vnd_discount}}',
                                                        '{{$productRelated->limit_description}}','{{$productRelated->brand()->first()->name}}')" class="btn-square btn_view btn  right-to quick-view">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="products/ghe-sopha-don-dep.html" title="{{$productRelated->name}}">{{$productRelated->name}}</a></h3>
                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">{{$productRelated->vnd}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <form class="variants a-center form-nut-grid">
                                            <div>
                                                <div class="action-item">
                                                    <button onclick="senDataAjax({{$productRelated->id}})" class="btn-white btn btn-cart  left-to add_to_cart" id="purchasenew{{$productRelated->id}}" title="Thêm vào giỏ hàng">
                                                            <i class="fa fa-plus"></i>Mua ngay
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        {{-- Quick View --}}
        <div id="quickview" class="modal fade quickview" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image margin-bottom-15">
                                    <a class="img-product clearfix" href="slug">
                                        <img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview image-product-quick" src="image" alt="quickview"  />
                                    </a>
                                </div>
                                <div id="thumbnail_quickview">
                                    <div class="thumblist"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="content">
                                    <h3 class="product-name product-name-quick"><a href="slug">name</a></h3>
                                    <div class="status clearfix">
                                        Trạng thái: <span class="inventory">
                                        <i class="fa fa-check"></i> Còn hàng
                                        </span>
                                    </div>
                                    <div class="price-box margin-bottom-20 clearfix">
                                        <div class="special-price">
                                            <span class="price product-price product-price-quick">price</span>
                                        </div>

                                        <div class="old-price">
                                            <span class="price product-price-old product-price-old-quick">
                                                discount
                                            </span>
                                        </div>

                                    </div>
                                    <div class="product-description rte product-description-quick">
                                        description
                                    </div>
                                    <div class="info-other" style="display: block;"><p><label class="inline-block">Hãng sản xuất</label>:<span class="brand-product-quick"> brand</span></p></div>
                                    <a href="slug" class="view-more hidden">Xem chi tiết</a>
                                    <div class="clearfix"></div>
                                    <span class="price-product-detail hidden" style="opacity: 0;">
                                        <span class=""></span>
                                    </span>
                                    <select name='Id' class="hidden" style="display:none"></select>

                                    <div class="clearfix"></div>
                                    <div class="quantity_wanted_p">
                                        <button onclick="" id="btn-addCart" name="add" class="btn  btn-primary add_to_cart_detail ajax_addtocart">
                                            <span >Thêm vào giỏ hàng</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-close btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>

                </div>
            </div>
        </div>

        {{-- End Quick View --}}
<!-- Main JS -->
<script src='/js/main6cb3.js?v=82' type='text/javascript'></script>

<script src='/js/cs.script6cb3.js?v=82' type='text/javascript'></script>

<!-- Quick view -->

<script src='/js/quickview6cb3.js?v=82' type='text/javascript'></script>
@endsection

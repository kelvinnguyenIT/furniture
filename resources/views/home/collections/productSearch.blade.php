@extends('home.layouts.app')

@section('title','Tìm kiếm sản phẩm')

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home">
                            <a itemprop="url" itemprop="url" href="/" ><span itemprop="title"><i class="fa fa-home"></i> Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong ><span itemprop="title">Tất cả sản phẩm</span></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <section class="main_container collection col-lg-9 col-md-9 col-lg-push-3 col-md-push-3">
                <div class="collection-image margin-bottom-30">
                    <img src="/image/collection/collection6cb3.jpg?v=82" alt="Products">
                </div>
                <h1 class="hidden title-head margin-top-0">Tất cả sản phẩm</h1>
                <div class="category-products products">
                    <div class="sortPagiBar">
                        <div class="row">
                            <div class="col-xs-5 col-sm-7">
                                <div class="view-mode">
                                    <a href="javascript:;" data-view="grid" >
                                        <b class="btn button-view-mode view-mode-grid active ">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                        </b>
                                        <span>Lưới</span>
                                    </a>
                                    <a href="javascript:;" data-view="list" onclick="switchView('list')">
                                        <b class="hidden btn button-view-mode view-mode-list ">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                        </b>
                                        <span>Danh sách</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-7 col-sm-5 text-xs-left text-sm-right">
                                <div id="sort-by">
                                    <label class="left hidden-xs">Sắp xếp: </label>
                                    <ul>
                                        <li ><span class="val">Mặc định</span>
                                            <ul>
                                                <li><a href="javascript:;" onclick="sortby('default')">Mặc định</a></li>
                                                <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                                <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                                <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                                <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="products-view products-view-grid">
                        <div class="row">

                            @for($i=0;$i<count($productSearchList);$i++)
                            @forelse ($productSearchList[$i] as $productSearch)

                            <div class="col-xs-6 col-sm-4 col-lg-4">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <a href="{{$productSearch->slug}}" title="{{$productSearch->name}}">
                                            <img src="{{$productSearch->image}}" alt="{{$productSearch->name}}">
                                        </a>
                                        <div class="product-action clearfix">
                                            <div class="fix_bg" onclick="window.location.href='{{$productSearch->slug}}'"></div>
                                            <form class="variants form-nut-grid">
                                                <div>
                                                    <div class="action-item">
                                                        <a data-toggle="tooltip" title="Xem nhanh" onclick="quickView({{$productSearch}},
                                                        '{{$productSearch->vnd}}','{{$productSearch->vnd_discount}}',
                                                        '{{$productSearch->limit_description}}','{{$productSearch->brand()->first()->name}}')" class="btn-square btn_view btn  right-to">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-info a-center">
                                        <h3 class="product-name"><a href="{{$productSearch->slug}}" title="{{$productSearch->name}}">{{$productSearch->name}}</a></h3>
                                        <div class="price-box clearfix">
                                            <div class="special-price">
                                                <span class="price product-price">{{$productSearch->vnd}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <form class="variants a-center form-nut-grid">
                                            <div>
                                                <div class="action-item">
                                                    <button onclick="senDataAjax({{$productSearch->id}})" class="btn-white btn btn-cart  left-to add_to_cart" id="purchasenew{{$productSearch->id}}" title="Thêm vào giỏ hàng">
                                                            <i class="fa fa-plus"></i>Mua ngay
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @empty
                            @endforelse
                            @endfor
                        </div>
                    </section>
                </div>
            </section>

            <aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-md-3 col-lg-pull-9 col-md-pull-9">
                <aside class="aside-item sidebar-category collection-category">
                    <div class="aside-title">
                        <h2 class="title-head margin-top-0"><span>Danh mục</span></h2>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">

                                @forelse ($groupList as $group)

                                <li class="nav-item">
                                    <a class="nav-link" href="{{$group->slug}}">{{$group->name}}</a>
                                </li>

                                @empty
                                @endforelse
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="aside-filter">
                    <div class="filter-container">
                        <div class="filter-container__selected-filter" style="display: none;">
                            <div class="filter-container__selected-filter-header clearfix">
                                <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="filter-container__selected-filter-list">
                                <ul></ul>
                            </div>
                        </div>
                    </div>

                    <aside class="aside-item filter-price">
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0"><span>Theo mức giá</span></h2>
                        </div>
                        <div class="aside-content filter-group">
                            <div id='slider'></div>
                            <div id='start'><span>0₫</span></div>
                            <div id='stop'><span>10,000,000₫</span></div>
                            <a id="old-value" href="javascript:;"></a>
                            <a id="filter-value" class="btn btn-primary" href="javascript:;" onclick="_toggleFilterdqdt(this);"  data-value="(price:product>=-1)&&(price:product<10000001)" >Lọc giá</a>
                        </div>
                    </aside>

                    <aside class="aside-item filter-type">
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0"><span>Theo loại</span></h2>
                        </div>
                        <div class="aside-content filter-group">
                            <ul>

                                @forelse ($categoryList as $category)

                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <a href="{{$category->slug}}"><span>
                                        <label for="filter-tu-quan-ao">

                                            {{$category->name}}
                                        </label>
                                    </span></a>
                                </li>

                                @empty
                                @endforelse

                            </ul>
                        </div>
                    </aside>

                    <aside class="aside-item filter-vendor">
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0"><span>Theo thương hiệu</span></h2>
                        </div>
                        <div class="aside-content filter-group">
                            <ul>

                                @forelse ($brandList as $brand)

                                <li class="filter-item filter-item--check-box filter-item--green ">
                                <a href="{{$brand->slug}}"><span>
                                            <label data-for="Khác" for="filter-vendor-khac">
                                                {{$brand->name}}
                                            </label>
                                        </span></a>
                                    </li>

                                    @empty
                                    @endforelse
                            </ul>
                        </div>
                    </aside>
                </div>

                <aside class="aside-item banner hidden-xs">
                    <div class="aside-title">
                        <h3 class="title-head margin-top-0"><span></span></h3>
                    </div>
                    <div class="aside-content">
                        <a href="#" class="img1 block">
                        <img src='/image/aside_banner6cb3.png?v=82' alt='banner' class='banner-img' />
                        </a>
                    </div>
                </aside>

                <div class="aside-item aside-mini-list-product hidden-xs">
                    <div>
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0"><span><a href="hot-products.html">Sản phẩm nổi bật</a></span></h2>
                        </div>
                        <div class="aside-content related-product">
                            <div class="product-mini-lists">
                                <div class="products">

                                    @forelse ($productOSTList as $productOST)

                                    <div class="row row-noGutter">
                                        <div class="col-sm-12">
                                            <div class="product-mini-item clearfix">
                                                <a href="{{$productOST->product()->first()->slug}}" class="product-img">
                                                    <img src="{{$productOST->product()->first()->image}}" alt="{{$productOST->product()->first()->name}}">
                                                </a>
                                                <div class="product-info">
                                                    <h3><a href="{{$productOST->product()->first()->slug}}" title="{{$productOST->product()->first()->name}}" class="product-name">{{$productOST->product()->first()->name}}</a></h3>
                                                    <div class="bizweb-product-reviews-badge" data-id="1017272141"></div>
                                                    <div class="price-box">
                                                        <div class="special-price"><span class="price product-price">{{$productOST->product()->first()->vnd}}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @empty
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div id="open-filters" class="open-filters hidden-lg hidden-md">
                <i class="fa fa-filter"></i>
                <span>Lọc</span>
            </div>
        </div>
    </div>
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
@endsection

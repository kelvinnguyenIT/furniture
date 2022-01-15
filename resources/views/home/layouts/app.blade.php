<!DOCTYPE html>
<html lang="vi">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>
			@yield('title') &ndash; Nội thất Dưa Leo
		</title>

		<meta name="description" content="Cửa hàng nội thất Furniture chuyên cung cấp tất cả các mặt hàng nội thất cao cấp trong nước và quốc tế" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- ================= Meta ================== -->
		<meta name="keywords" content="theme furniture, theme mùa hè, giao diện web đẹp, theme dualeo  thời trang"/>
		<link rel="canonical" href="index.html" />
		<meta name="robots" content="index,follow" />
		<meta name="revisit-after" content="1 day" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="HandheldFriendly" content="true">

		<link rel="dns-prefetch" href="index.html">
		<link rel="dns-prefetch" href="http://hstatic.net/">
		<!-- ================= Favicon ================== -->

		<link rel="icon" href="/image/icon/favicon6cb3.png?v=82" type="image/x-icon" />

		<!-- ================= Google Fonts ================== -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'  media='all'  />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'  media='all'  />
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i&amp;subset=vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=vietnamese" rel="stylesheet">

		<!-- Facebook Open Graph meta tags -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Của hàng nội thất Dưa Leo Furniture">
	<meta property="og:image" content="/image/logo6cb3.png?v=82">
	<meta property="og:image:secure_url" content="/image/logo6cb3.png?v=82">

    <meta property="og:description" content="Cửa hàng nội thất Furniture chuyên cung cấp tất cả các mặt hàng nội thất cao cấp trong nước và quốc tế">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Của hàng nội thất Dưa Leo Furniture">
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css" >

		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<link href='/css/owl.carousel.min6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
		<!-- Build Main CSS -->
		<link href='/css/base.scss6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
		<link href='/css/font.scss6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
		<link href='/css/style.scss6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
		<link href='/css/update.scss6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
		<link href='/css/module.scss6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
		<link href='/css/responsive.scss6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />

        <!-- Header JS -->
		<script src='/js/jquery-2.2.3.min6cb3.js?v=82' type='text/javascript'></script>
    <!-- Plugin JS -->
    <script src='/js/owl.carousel.min6cb3.js?v=82' type='text/javascript'></script>
    <script src="/js/bootstrap.min.js" ></script>
    {{-- <script src='/js/connect_facebook.js' type='text/javascript'></script> --}}
    <script src='/js/dl_col6cb3.js' type='text/javascript'></script>
    <script src='/js/haravan_common.js' type='text/javascript'></script>
		<script>
		var template = 'index';
		</script>

        <!-- Haravan javascript -->
		<script src='/js/option-selectors6cb3.js?v=82' type='text/javascript'></script>
		<script src='/js/api.jquery.js' type='text/javascript'></script>
        <script src='/js/plugin.js' type='text/javascript'></script>

        <link href='/js/jquery-ui.min6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
        <script src='/js/jquery-ui.min6cb3.js?v=82' type='text/javascript'></script>

        <script src='/js/jquery.prettyPhoto.min005e6cb3.js?v=82' type='text/javascript'></script>
        <script src='/js/jquery.prettyPhoto.init.min367a6cb3.js?v=82' type='text/javascript'></script>

		<link href='/css/lightbox6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
        <script src='/js/jquery.elevatezoom308.min6cb3.js?v=82' type='text/javascript'></script>

        <script src='/js/cs.script6cb3.js?v=82' type='text/javascript'></script>
        <script src='/js/quickview6cb3.js?v=82' type='text/javascript'></script>

        <script src='/js/home/purchasenew.js' type='text/javascript'></script>
        <script src='/js/home/adjustcart.js' type='text/javascript'></script>
		<!-- Haravan conter for header -->
        <link href='/css/iwish6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'/>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src='/js/home/filterPrice.js' type='text/javascript'></script>
        <script src='/js/home/deleteItemCartApp.js' type='text/javascript'></script>
        <script src='/js/home/deleteItemCart.js' type='text/javascript'></script>
        <!-- Haravan conter for header -->
		<script type='text/javascript'>
            //<![CDATA[
            if ((typeof Haravan) === 'undefined') {
              Haravan = {};
            }
            Haravan.culture = 'vi-VN';
            Haravan.shop = 'dualeo-furniture.myharavan.com';
            Haravan.theme = {"name":"furniture-15102018","id":1000418614,"role":"main"};
            Haravan.domain = 'dualeo-furniture.myharavan.com';
            //]]>
            </script>
            <script type='text/javascript'>!function(){var hrv_analytics=window.hrv_analytics=window.hrv_analytics||[];if(!hrv_analytics.initialize)if(hrv_analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{hrv_analytics.invoked=!0;hrv_analytics.methods=["start","trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];hrv_analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);hrv_analytics.push(e);return hrv_analytics}};for(var t=0;t<hrv_analytics.methods.length;t++){var e=hrv_analytics.methods[t];hrv_analytics[e]=hrv_analytics.factory(e)}hrv_analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="/js/analyticsv3.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);hrv_analytics._loadOptions=e};hrv_analytics.SNIPPET_VERSION="4.1.0";hrv_analytics.start('pro:web:1000325675');hrv_analytics.page();hrv_analytics.load();}}();</script><style>.grecaptcha-badge{visibility:hidden;}</style>
            <script type='text/javascript'>
            window.HaravanAnalytics = window.HaravanAnalytics || {};
            window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
            window.HaravanAnalytics.meta.currency = 'VND';
            var meta = {"page":{"pageType":"collection"}};
            for (var attr in meta) {
                window.HaravanAnalytics.meta[attr] = meta[attr];
            }
            window.HaravanAnalytics.AutoTrack = true;
            </script>

                    <link href='/css/iwish6cb3.css?v=82' rel='stylesheet' type='text/css'  media='all'  />
                    <script>var ProductReviewsAppUtil=ProductReviewsAppUtil || {};</script>

	</head>
	<body>

        <header class="header">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-7 a-left">
                            <span class="header-contact-item"><i class="fa fa-phone-square"></i>
                                <a href="tel:0912117494">0912117494</a>
                            </span>
                            <span class="hidden-xs hidden-sm fix-iconline"> | </span>
                            <span class="header-contact-item hidden-sm  hidden-xs "><i class="fa fa-envelope"></i>
                                <a href="mailto:dualeotheme@gmail.com">dualeotheme@gmail.com</a>
                            </span>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-5 col-xs-12">
                            <div class="top-cart-contain f-right">
                                <div class="pull-right dropdown-toggle account">
                                    <a href="/login" class="header-icon" style="font-size: 14px;"><i class="fa fa-user"></i> Tài khoản</a>
                                    <ul class="dropdown-content dr-left" style="width: 200px;line-height: 26px;">
                                    <li><a href="/register"><i class="fa fa-user-plus"></i> Đăng ký</a></li>
                                        <li><a href="/login"><i class="fa  fa-sign-in"></i> Đăng nhập</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right dropdown-toggle account hidden-xs fixcheckout">
                                    <a href="cart.html" class="header-icon" style="font-size: 14px;"><i class="fa fa-check-circle-o"></i> Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <div class="menu-bar hidden-md hidden-lg">
                    <img src='/image/icon/menu-bar6cb3.png?v=82' alt='menu bar'  />
                </div>
                <div class="header-main">
                    <div class="row">
                        <div class="col-xs-12 col-md-2 a-left">
                            <div class="logo">
                                <a href="index.html" class="logo-wrapper ">
                                    <img src="/image/logo6cb3.png?v=82" alt="logo Của hàng nội thất Dưa Leo Furniture">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12  col-md-10 ">
                            <div class="top-cart-contain f-right">
                                <div class="mini-cart text-xs-center pull-right">
                                    <div class="heading-cart">
                                        <a href="/cart" class="cart-label header-icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <div class="cart-info hidden-sm hidden-xs">
                                                <label style=" line-height: 1; ">Giỏ hàng</label>

                                                @if(session('productCartList'))
                                                (<span class="cartCount count_item_pr" id="cart-total">{{count(session('productCartList'))}}</span>)
                                                    @else
                                                    (<span class="cartCount count_item_pr" id="cart-total">0</span>)
                                                        @endif
                                                    Sản phẩm
                                            </div>
                                        </a>
                                    </div>
                                    <div class="top-cart-content hidden-md hidden-sm hidden-xs">
                                        <ul id="cart-sidebar" class="mini-products-list count_li">
                                            <ul class="list-item-cart">
                                            @if(session('productCartList'))
                                            <?php $i=0; ?>
                                            @forelse (session('productCartList') as $productCart)

                                                <li class="item productid-1033205998 item-cart-local{{$i}}">
                                                    <div class="border_list">
                                                        <a class="product-image" href="{{$productCart->slug}}" title="{{$productCart->name}}">
                                                            <img alt="{{$productCart->name}}" src="{{$productCart->image}}" width="100">
                                                        </a>
                                                    <div class="detail-item">
                                                        <div class="product-details">
                                                            <p class="product-name">
                                                                <a href="{{$productCart->slug}}" title="{{$productCart->name}}">{{$productCart->name}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="product-details-bottom">
                                                            <span class="price priceapp{{$productCart->id}}">{{$productCart->vnd}}</span>
                                                            <a class="button remove-item remove-item-cart" title="Xóa" onclick="deleteItemCartApp({{$productCart->id}},{{$i}})" data-id="1033205998"><span><i class="fa fa-remove"></i></span></a>
                                                            <div class="quantity-select qty_drop_cart">
                                                                <button onclick="minusCountApp({{$productCart->id}},{{$i}})" class="btn_reduced reduced items-count btn-minus" type="button">–</button>
                                                                <input type="text" maxlength="2" min="0" class="input-text number-sidebar qty1033205998 quantity{{$productCart->id}}" name="Lines" size="4" value="1">
                                                                <button onclick="plusCountApp({{$productCart->id}},{{$i}})" class="btn_increase increase items-count btn-plus" type="button">+</button>
                                                            </div>
                                                            <input hidden id="totalpriceItemApp{{$productCart->id}}" value="{{$productCart->vnd}}" style="display: none">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <input hidden class="total_priceapp price" id="totalprice" value="0">
                                            
                                            <script>
                                                    adjustCartApp({{$productCart->id}},<?php echo $productCart;?>);
                                            </script>

                                                <?php $i++; ?>
                                            @empty
                                            @endforelse
                                            </ul>
                                            <div class="pd">
                                                <div class="top-subtotal">Tổng cộng: <span class="price totals_priceapp"></span></div>
                                            </div>
                                            <script>
                                                sumPriceApp();
                                            </script>
                                            <div class="pd right_ct">
                                                <a href="/cart" class="btn btn-primary"><span>Giỏ hàng</span></a>
                                                <a onclick="sendproductApp()" class="btn btn-primary"><span>Thanh toán</span></a>
                                            </div>

                                            @else
                                                <li id="status-cart">Không có sản phẩm nào trong giỏ hàng</li>
                                            @endif

                                        </ul>
                                        
                                    </div>
                                </div>
                                
                                <div class="pull-right">
                                    <div class="header_search">
                                        <div class="icon-search-mobile hidden-sm hidden-md hidden-lg">
                                            <i class="fa fa-search"></i>
                                        </div>
                                        <form class="input-group">
                                            <div class="collection-selector">
                                                <div class="search_text">Tất cả</div>
                                                <div id="search_info" class="list_search">
                                                @forelse($groupList as $group)
                                                    <div class="search_item" data-content="{{$group->slug_content}}">{{$group->name}}</div>
                                                @empty
                                                @endforelse
                                                    <div class="search_item active" data-content="tat-ca">Tất cả</div>
                                                </div>
                                            </div>
                                            <input style="padding-left: 102px;" type="search" name="key" placeholder="Tìm kiếm... " class="input-group-field">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <nav>
                                <ul id="nav-mobile" class="nav hidden-md hidden-lg">
                                    <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Trang chủ</a></li>
                                    <li class="nav-item ">
                                        <a href="/product/group" class="nav-link">Sản phẩm <i class="fa faa fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            @forelse($groupList as $group)
                                            <li class="nav-item-lv2">
                                                <a class="nav-link" href="{{$group->slug}}">{{$group->name}}</a>
                                            </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li class="nav-item "><a class="nav-link" href="/blog">Blog</a></li>
                                    <li class="nav-item "><a class="nav-link" href="/about-us">Giới thiệu</a></li>
                                    <li class="nav-item "><a class="nav-link" href="/contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden-sm hidden-xs static">
                <nav>
                <div class="container">
                    <ul id="nav" class="nav hidden-xs hidden-sm">
                        <li class="nav-item active"><a class="nav-link" href="/">Trang chủ</a></li>
                        <li class="nav-item  has-mega">
                            <a href="/product/group" class="nav-link">Sản phẩm <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                            <div class="mega-content">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                        @forelse($groupList as $group)
                                            <li class="level1 item"><h2 class="h4"><a href="{{$group->slug}}"><span>{{$group->name}}</span></a> </h2>
                                        @empty
                                        @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item "><a class="nav-link" href="/blog">Blog</a></li>
                        <li class="nav-item "><a class="nav-link" href="/about-us">Giới thiệu</a></li>
                        <li class="nav-item "><a class="nav-link" href="/contact">Liên hệ</a></li>
                    </ul>
                </div>
                </nav>
            </div>
        </header>

@yield('content')

    <footer class="footer">
        <div class="site-footer">
            <div class="container">
                <div class="footer-inner padding-top-40">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3><span>Về cửa hàng</span></h3>
                                <ul class="list-menu list-showroom">
                                    <li class="about-content">
                                        <p style="padding-left: 0;">
                                            Cửa hàng nội thất Furniture chuyên cung cấp tất cả các mặt hàng nội thất cao cấp trong nước và quốc tế
                                        </p>
                                    </li>
                                    <li class="clearfix">Địa chỉ: 268 Cầu Giấy, Hà Nội, Vietnam</li>
                                    <li class="clearfix">Email: <a href="mailto:dualeotheme@gmail.com">dualeotheme@gmail.com</a></li>
                                    <li class="clearfix">Điện thoại: <a href="tel:0912117494">0912117494</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3><span>Nhận khuyến mãi</span></h3>
                                <ul class="list-menu list-right">
                                    <li><a href="/">Trang chủ</a></li>

                                    <li><a href="/product/group">Sản phẩm</a></li>

                                    <li><a href="/blog">Blog</a></li>

                                    <li><a href="/about-us">Giới thiệu</a></li>

                                    <li><a href="/contact">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3><span>Chính sách</span></h3>
                                <ul class="list-menu list-right">
                                    <li><a href="/">Trang chủ</a></li>

                                    <li><a href="/product/group">Sản phẩm</a></li>

                                    <li><a href="/blog">Blog</a></li>

                                    <li><a href="/about-us">Giới thiệu</a></li>

                                    <li><a href="/contact">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="footer-widget">
                                <h3><span>TOP HOT</span></h3>
                                <ul class="list-menu list-right">
                                    <li><a href="/">Trang chủ</a></li>

                                    <li><a href="/product/group">Sản phẩm</a></li>

                                    <li><a href="/blog">Blog</a></li>

                                    <li><a href="/about-us">Giới thiệu</a></li>

                                    <li><a href="/contact">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright clearfix">
            <div class="container">
                <div>
                    <div class="inner clearfix">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 a-left">
                                <span>© Bản quyền thuộc về <b>Dualeo</b> <span class="fot-line">|</span> Cung cấp bởi <a href="https://www.haravan.vn/" rel="nofollow" title="Haravan" target="_blank">Haravan</a></span>
                            </div>
                            <div class="col-xs-12 col-md-6 a-left">
                                <div class="footer-menu">
                                    <ul class="inline-list social-icons">
                                        <li>
                                            <a class="icon-fallback-text" href="#">
                                                <span class="fa fa-facebook" aria-hidden="true"></span>
                                                <span class="fallback-text">Facebook</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="icon-fallback-text" href="#">
                                                <span class="fa fa-pinterest" aria-hidden="true"></span>
                                                <span class="fallback-text">Pinterest</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="icon-fallback-text" href="#" rel="publisher">
                                                <span class="fa fa-google-plus" aria-hidden="true"></span>
                                                <span class="fallback-text">Google</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="icon-fallback-text" href="#">
                                                <span class="fa fa-instagram" aria-hidden="true"></span>
                                                <span class="fallback-text">Instagram</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>

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
                        <li >
                            <a itemprop="url" href="/blog"><span itemprop="title">Tin tức</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">{{$title}}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container article-wraper">
        <div class="row">
            <section class="right-content col-lg-9 col-lg-push-3">
                <article class="article-main" itemscope>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="article-title"><a href="{{$post->slug}}" itemprop="name">{{$post->title}}</a></h1>
                            <div class="post-time">
                                Viết bởi <span>{{$post->author}}</span>, Ngày {{$post->date}}
                            </div>
                            <div class="article-details">
                                <div class="article-image">
                                    <a href="{{$post->slug}}">
                                        <img itemprop="image" class="img-fluid" src="{{$post->image}}" alt="{{$post->title}}">
                                    </a>
                                </div>
                                <div class="article-content" itemprop="description">
                                    <div class="rte">
                                        {!!$post->content!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row row-noGutter tag-share">
                                <div class="col-xs-12 col-sm-6 tag_article ">
                                    <span class="inline"><i class="fa fa-tags"></i> </span>

                                    @forelse ($postTagList as $postTag)

                                    <a href="{{$postTag->tag()->first()->slug}}">{{$postTag->tag()->first()->tag}},</a>

                                    @empty
                                    @endforelse
                                </div>

                                <div class="col-xs-12 col-sm-6 a-right">
                                    <div class="social-media" data-permalink="top-nhung-cach-phoi-mau-cho-can-phong-dep.html">
                                        <span class="inline">Chia sẻ: </span>
                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u=https://dualeo-furniture.myharavan.com/blogs/news/top-nhung-cach-phoi-mau-cho-can-phong-dep" class="share-facebook" title="Chia sẻ lên Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a target="_blank" href="http://twitter.com/share?text=Top%20nh%E1%BB%AFng%20c%C3%A1ch%20ph%E1%BB%91i%20m%C3%A0u%20cho%20c%C4%83n%20ph%C3%B2ng%20%C4%91%E1%BA%B9p&amp;url=https://dualeo-furniture.myharavan.com/blogs/news/top-nhung-cach-phoi-mau-cho-can-phong-dep" class="share-twitter" title="Chia sẻ lên Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="http://pinterest.com/pin/create/button/?url=https://dualeo-furniture.myharavan.com/blogs/news/top-nhung-cach-phoi-mau-cho-can-phong-dep&amp;media=http://file.hstatic.net/1000325675/article/blog-02_1024x1024.jpg&amp;description=Top%20nh%E1%BB%AFng%20c%C3%A1ch%20ph%E1%BB%91i%20m%C3%A0u%20cho%20c%C4%83n%20ph%C3%B2ng%20%C4%91%E1%BA%B9p" class="share-pinterest" title="Chia sẻ lên pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a target="_blank" href="http://plus.google.com/share?url=https://dualeo-furniture.myharavan.com/blogs/news/top-nhung-cach-phoi-mau-cho-can-phong-dep" class="share-google" title="+1">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <aside class="left left-content col-lg-3 col-lg-pull-9">
                <aside class="aside-item sidebar-category blog-category">
                    <div class="aside-title">
                        <h2 class="title-head"><span>Danh mục bài viết</span></h2>
                    </div>
                    <div class="aside-content">
                        <nav class="nav-category  navbar-toggleable-md" >
                            <ul class="nav navbar-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Trang chủ</a></li>
                                <li class="nav-item">
                                    <a href="/product" class="nav-link">Sản phẩm</a>
                                    <i class="fa fa-angle-down" ></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/product/group/noi-that-phong-khach">Nội thất phòng khách</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/product/group/noi-that-phong-ngu">Nội thất phòng ngủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/product/group/san-pham-noi-bat">Sản phẩm nổi bật</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/product/group/san-pham-khuyen-mai">Sản phẩm khuyến mãi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog">Blog</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about-us">Giới thiệu</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="aside-item aside-tags">
                    <div>
                        <div class="aside-title margin-top-5">
                            <h2 class="title-head"><span>Thẻ tags</span></h2>
                        </div>
                        <div class="aside-content list-tags">

                            @forelse ($tagList as $tag)

                            <span class="tag-item"><a href="{{$tag->slug}}">{{$tag->tag}}</a></span>

                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="aside-item">
                    <div >
                        <div class="aside-title">
                            <h2 class="title-head"><a>Bài viết liên quan</a></h2>
                        </div>
                        <div class="aside-content">
                            <div class="blog-list blog-image-list">
                                @forelse ($postRelatedList as $postRelated)
                                <div class="loop-blog">
                                    <div class="thumb-left">
                                        <a href="{{$postRelated->post()->get()->first()->slug}}">
                                            <img src="{{$postRelated->post()->get()->first()->image}}" style="width:100%;" alt="{{$postRelated->post()->get()->first()->title}}" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="name-right">
                                        <h3><a href="{{$postRelated->post()->get()->first()->slug}}">{{$postRelated->post()->get()->first()->title}}</a></h3>
                                    </div>
                                </div>

                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

@endsection

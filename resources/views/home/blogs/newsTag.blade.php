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
                            <a itemprop="url" href="/blog"><span itemprop="title">Tin tức</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li><strong itemprop="title">{{$title}}</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
	    <div class="row">
		    <section class="right-content col-md-9 col-md-push-3">
                <div class="box-heading">
                    <h1 class="title-head hidden">Tin tức</h1>
                </div>
			    <section class="list-blogs blog-main">

                 @forelse ($postTagList as $postTag)

	                <article class="blog-item">
		                <div class="row">
			                <div class="blog-item-thumbnail col-49">
                                <a href="{{$postTag->post()->get()->first()->slug}}">
					                <img src="{{$postTag->post()->get()->first()->image}}" alt="{{$postTag->post()->get()->first()->title}}">
				                </a>
			                </div>
                            <div class="blog-item-info col-59">
                                <h3 class="blog-item-name"><a href="{{$postTag->post()->get()->first()->slug}}">{{$postTag->post()->get()->first()->title}}</a></h3>
                                <div class="post-time">
                                    Viết bởi <span>{{$postTag->post()->get()->first()->author}}</span>, {{$postTag->post()->get()->first()->date}}
                                </div>
                                <p class="blog-item-summary">
                                    {{$postTag->post()->get()->first()->limit_content}}
                                </p>
                                <a class="btn btn-white" href="{{$postTag->post()->get()->first()->slug}}">Đọc thêm</a>
                            </div>
		                </div>
	                </article>

                @empty
                @endforelse

                </section>

                <div class="row">
                    <div class="col-xs-12 text-xs-left">
                        <nav class="clearfix a-center">
                            {{$postList->links()}}
                        </nav>
                    </div>
                </div>

		    </section>
		    <aside class="left left-content col-md-3 col-md-pull-9">
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
                                    <a href="/product/group" class="nav-link">Sản phẩm</a>
                                    <i class="fa fa-angle-down" ></i>
                                    <ul class="dropdown-menu">
                                        @forelse($groupList as $group)
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{$group->slug}}">{{$group->group}}</a>
                                        </li>
                                        @empty
                                        @endforelse
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
                            <h2 class="title-head"><a href="news.html">Bài viết liên quan</a></h2>
                        </div>
                        <div class="aside-content">
                            <div class="blog-list blog-image-list">

                                @forelse ($postList as $post)
                                <div class="loop-blog">
                                    <div class="thumb-left">
                                        <a href="{{$post->slug}}">
                                            <img src="{{$post->image}}" style="width:100%;" alt="{{$post->title}}" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="name-right">
                                        <h3><a href="{{$post->slug}}">{{$post->title}}</a></h3>
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
    <div class="ab-module-article-mostview"></div>
<!-- Main JS -->
<script src='/js/main6cb3.js?v=82' type='text/javascript'></script>

<script src='/js/cs.script6cb3.js?v=82' type='text/javascript'></script>

<!-- Quick view -->

<script src='/js/quickview6cb3.js?v=82' type='text/javascript'></script>
@endsection

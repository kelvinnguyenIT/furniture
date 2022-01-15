@extends('home.layouts.app')

@section('title','Giới thiệu')

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
					<li><strong itemprop="title">Giới thiệu</strong></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-title category-title">
					<h1 class="title-head"><a href="/about-us">Giới thiệu</a></h1>
				</div>
				<div class="content-page rte">
					<p>Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.</p><p>Một vài gợi ý cho nội dung trang Giới thiệu:</p><div><ul><li><span>Bạn là ai</span><br></li><li><span>Giá trị kinh doanh của bạn là gì</span><br></li><li><span>Địa chỉ cửa hàng</span><br></li><li><span>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</span><br></li><li><span>Bạn kinh doanh ngành hàng online được bao lâu</span><br></li><li><span>Đội ngũ của bạn gồm những ai</span><br></li><li><span>Thông tin liên hệ</span><br></li><li><span>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</span><br></li></ul></div><p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại <a href='/'><strong>đây</strong></a> hoặc thêm những bài viết mới trong phần quản lý <a href='/'><strong>Trang nội dung</strong></a>.</p>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

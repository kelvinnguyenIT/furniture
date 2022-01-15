@extends('home.layouts.app')

@section('title','Liên hệ')

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
					<li><strong itemprop="title">Liên hệ</strong></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container contact">
	<div class="box-maps">
		<div class="iFrameMap">
			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0957270341114!2d105.80237721424531!3d21.028855393152497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab421ebbe0af%3A0x7303d231e5752653!2zMjY4IMSQxrDhu51uZyBD4bqndSBHaeG6pXksIEzDoW5nIFRoxrDhu6NuZywgQmEgxJDDrG5oLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1596855650507!5m2!1sen!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="page-login page_contact">
				<div id="login">
					<h1 class="title-head hidden"><span>Liên hệ</span></h1>
                    <form action="/processContact" class='contact-form' method="post">
                        @csrf
					    <p id="errorFills" style="margin-bottom:10px; color: red;"></p>
					        <div class="form-signup form_contact clearfix">
                                <fieldset class="form-group">
                                    <label>Tên <span class="required">*</span> </label>
                                    <input type="text" name="name" class="form-control form-control-lg" required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Email <span class="required">*</span> </label>
                                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Số điện thoại <span class="required">*</span> </label>
                                    <input type='text' name="phone_number" class="fixphonevklphienphuc form-control form-control-lg" required>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Nội dung <span class="required">*</span> </label>
                                    <textarea name="content" class="form-control form-control-lg" rows="6" Required></textarea>
                                </fieldset>
                                <div class="f-right" style="margin-top:20px;">
                                    <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
                                </div>
					        </div>
                    </form>
                </div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="widget-item info-contact">
				<div class="text-xs-left">
					<h2 class="contact-title">Của hàng nội thất Dưa Leo Furniture</h2>
				</div>
				<p>Cửa hàng nội thất Furniture chuyên cung cấp tất cả các mặt hàng nội thất cao cấp trong nước và quốc tế</p>
				<ul class="widget-menu">
					<b class=" block margin-top-30 margin-bottom-15">
						<i class="block_icon fa fa-user color-x" aria-hidden="true"></i> Thông tin liên hệ</b>
					<li class="clearfix">Địa chỉ: 268 Cầu Giấy, Hà Nội, Vietnam</li>
					<li class="clearfix">Email: <a href="mailto:dualeotheme@gmail.com">dualeotheme@gmail.com</a></li>
					<li class="clearfix">Điện thoại: <a href="tel:0912117494">0912117494</a></li>
				</ul>
		    </div>
	    </div>

    </div>
</div>

<style>
	.google-map {width:100%; margin-bottom: 50px;}
	.google-map .map {width:100%; height:450px; background:#dedede}
</style>

@endsection

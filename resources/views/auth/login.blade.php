@extends('home.layouts.app')

@section('title','Tài khoản')

@section('content')
            <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">

                        <li class="home">
                            <a itemprop="url" itemprop="url" href="../index.html" ><span itemprop="title"><i class="fa fa-home"></i> Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li><strong itemprop="title">Tài khoản</strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h1 class="title-head"><span>Tài khoản</span></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="page-login margin-bottom-30">
                    <div id="login">

                        <span>
                            Nếu bạn đã có tài khoản, đăng nhập tại đây.
                        </span>
                        <form accept-charset='UTF-8' action='/processLogin' id='customer_login' method='post'>
                            @csrf
                            <input name='form_type' type='hidden' value='customer_login'>
    <input name='utf8' type='hidden' value='✓'>

                        <div class="form-signup" >

                        </div>


                        <div class="form-signup clearfix">
                            <fieldset class="form-group">
                                <label>Email: </label>
                                <input type="email" class="form-control form-control-lg" value="" name="email" required id="customer_email" placeholder="Email">
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Mật khẩu: </label>
                                <input type="password" class="form-control form-control-lg" value="" name="password" required id="customer_password" placeholder="Mật khẩu">
                            </fieldset>

                            <div class="pull-xs-left" style="margin-top: 25px;">
                                <input class="btn btn-primary"  type="submit" value="Đăng nhập" />
                                <a href="register.html" class="btn-link-style btn-register" style="margin-left: 20px;text-decoration: underline; ">Đăng ký</a>
                            </div>
                        </div>

    <input id='e68e72db8c4d4873b29e647c4fd962c6' name='g-recaptcha-response' type='hidden'><script src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('e68e72db8c4d4873b29e647c4fd962c6').value = token;});});</script></form>
                    </div>


                </div>
                @if($errors->any())
                <ul>
                @forelse ($errors->all( ) as $error)

                        <li style="color: red">{{$error}}</li>

                @empty
                @endforelse
            </ul>
                @endif

            </div>
            <div class="col-lg-6">
                <div id="recover-password"  class="form-signup">
                    <span>
                        Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
                    </span>
                    <form accept-charset='UTF-8' action='https://dualeo-furniture.myharavan.com/account/recover' method='post'>
    <input name='form_type' type='hidden' value='recover_customer_password'>
    <input name='utf8' type='hidden' value='✓'>

                    <div class="form-signup aaaaaaaa" >

                    </div>




                    <div class="form-signup clearfix">
                        <fieldset class="form-group">
                            <label>Email: </label>
                            <input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email">
                        </fieldset>
                    </div>
                    <div class="action_bottom">
                        <input class="btn btn-primary" style="margin-top: 25px;" type="submit" value="Lấy lại mật khẩu" />

                    </div>

    <input id='2d872a5eb8cf4a01b956b72a14ed8b67' name='g-recaptcha-response' type='hidden'><script src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('2d872a5eb8cf4a01b956b72a14ed8b67').value = token;});});</script></form>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        function showRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'block';
        document.getElementById('login').style.display='none';
        }

        function hideRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'none';
        document.getElementById('login').style.display = 'block';
        }
    </script>
<!-- Add to cart -->
		<div class="ajax-load">
	<span class="loading-icon">
		<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>
	</span>
</div>

<div class="loading awe-popup">
	<div class="overlay"></div>
	<div class="loader" title="2">
		<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>
	</div>

</div>

<div class="addcart-popup product-popup awe-popup">
	<div class="overlay no-background"></div>
	<div class="content">
		<div class="row row-noGutter">
			<div class="col-xl-6 col-xs-12">
				<div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng thành công
				</div>
				<a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
				<div class="info clearfix">
					<div class="product-image margin-top-5">
						<img alt="popup" src="../../theme.hstatic.net/1000325675/1000418614/14/logo6cb3.png?v=82" style="max-width:150px; height:auto"/>
					</div>
					<div class="product-info">
						<p class="product-name"></p>
						<p class="quantity color-main"><span>Số lượng: </span></p>
						<p class="total-money color-main"><span>Tổng tiền: </span></p>

					</div>
					<div class="actions">
						<button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button>
						<button class="btn btn-gray margin-top-5" onclick="window.location='../cart.html'">Kiểm tra giỏ hàng</button>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
<div class="error-popup awe-popup">
	<div class="overlay no-background"></div>
	<div class="popup-inner content">
		<div class="error-message"></div>
	</div>
</div>
<div id="popup-cart" class="modal fade" role="dialog">
	<div id="popup-cart-desktop" class="clearfix">
		<div class="content">
			<a href="javascript:void(0)" class="close-window">x</a>
			<div class="clearfix">
				<div class="product-image f-left padding-right-20">
					<img alt="img" src="../../theme.hstatic.net/1000325675/1000418614/14/logo6cb3.png?v=82" style="max-width:120px; height:auto">
				</div>
				<div class="f-left" style=" width: calc(100% - 130px); ">
					<div class="product-info f-left">
						<p class="product-name margin-bottom-10" style="font-weight: 700;">

							<a href="#" title=""></a>
						</p>
						<p class="success-message btn-cart">Sản phẩm đã thêm vào giỏ hàng !</p>


					</div>
					<div class="actions clearfix margin-top-10" style=" clear: left; ">
						<button class="btn continue-shopping  btn-primary margin-right-10" onclick="$('#popup-cart').modal('hide');">Tiếp tục mua sắm</button>
						<button class="btn btn-cart  btn-primary " onclick="window.location='../cart.html'">Xem giỏ hàng</button>

					</div>
				</div>
			</div>

		</div>
		<a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-times-circle"></i></a>
	</div>

</div>
<div id="myModal" class="modal fade" role="dialog">
</div>
		<script src='../js/cs.script6cb3.js?v=82' type='text/javascript'></script>

		<!-- Quick view -->

		<script src='../js/quickview6cb3.js?v=82' type='text/javascript'></script>
		<div id="quickview" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">

			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="image margin-bottom-15">
							<a class="img-product clearfix" title="" href="javascript:;">
								<img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" src="../../theme.hstatic.net/1000325675/1000418614/14/logo6cb3.png?v=82" alt="quickview"  />
							</a>
						</div>
						<div id="thumbnail_quickview">
							<div class="thumblist"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="content">
							<h3 class="product-name"><a href="#">Tên sản phẩm</a></h3>
							<div class="status clearfix">
								Trạng thái: <span class="inventory">
								<i class="fa fa-check"></i> Còn hàng
								</span>
							</div>
							<div class="price-box margin-bottom-20 clearfix">
								<div class="special-price f-left">
									<span class="price product-price">giá</span>
								</div>

								<div class="old-price">
									<span class="price product-price-old">
										giá sale
									</span>
								</div>

							</div>
							<div class="product-description rte"></div>
							<a href="#" class="view-more hidden">Xem chi tiết</a>
							<div class="clearfix"></div>
							<div class="info-other">

							</div>
							<form action="https://dualeo-furniture.myharavan.com/cart/add" method="post" enctype="multipart/form-data" class="margin-top-20 variants form-ajaxtocart">
								<span class="price-product-detail hidden" style="opacity: 0;">
									<span class=""></span>
								</span>
								<select name='Id' class="hidden" style="display:none"></select>

								<div class="clearfix"></div>
								<div class="quantity_wanted_p">
									<label for="quantity-detail" class="quantity-selector">Số lượng</label>
									<input type="text" onchange="if(this.value == 0)this.value=1;" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" id="quantity-detail" name="quantity" value="1"  class="quantity-selector text-center">
									<button type="submit" name="add" class="btn  btn-primary add_to_cart_detail ajax_addtocart">
										<span >Mua sản phẩm</span>
									</button>
								</div>
								<div class="total-price" style="display:none">
									<label>Tổng cộng: </label>
									<span></span>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>

			<button type="button" class="btn btn-close btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>

		</div>

	</div>
</div>



		<!-- Main JS -->
		<script src='/js/main6cb3.js?v=82' type='text/javascript'></script>
@endsection

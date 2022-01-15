
$(document).on('click', '.add_to_cart_detail', function(e) {
	e.preventDefault();

	$('#quickview').modal('hide');
	var $this = $(this);
	var form = $this.parents('form');

	$.ajax({
		type: 'POST',
		url: "/cart/add.js",
		async: false,
		data: form.serialize(),
		dataType: 'json',
		error: addToCartFail,
		beforeSend: function() {
		},
		success: addToCartSuccess,
		cache: false
	});
});
var GLOBAL = {
	common : {
		init: function(){
			$('.add_to_cart').bind( 'click', addToCart );
		}
	},

	templateIndex : {
		init: function(){

		}
	},

	templateProduct : {
		init: function(){

		}
	},

	templateCart : {
		init: function(){

		}
	}

}
var UTIL = {
	fire : function(func,funcname, args){
		var namespace = GLOBAL;
		funcname = (funcname === undefined) ? 'init' : funcname;
		if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
			namespace[func][funcname](args);
		}
	},

	loadEvents : function(){
		var bodyId = document.body.id;

		// hit up common first.
		UTIL.fire('common');

		// do all the classes too.
		$.each(document.body.className.split(/\s+/),function(i,classnm){
			UTIL.fire(classnm);
			UTIL.fire(classnm,bodyId);
		});
	}

};
$(document).ready(UTIL.loadEvents);
/**
 * Ajaxy add-to-cart
 */
Number.prototype.formatMoney = function(c, d, t){
	var n = this,
			c = isNaN(c = Math.abs(c)) ? 2 : c,
			d = d == undefined ? "." : d,
			t = t == undefined ? "." : t,
			s = n < 0 ? "-" : "",
			i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
			j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
function addToCart(e){
	if (typeof e !== 'undefined') e.preventDefault();
	var $this = $(this);
	var form = $this.parents('form');
	$.ajax({
		type: 'POST',
		url: '/cart/add.js',
		async: false,
		data: form.serialize(),
		dataType: 'json',
		error: addToCartFail,
		beforeSend: function() {
		},
		success: addToCartSuccess,
		cache: false
	});
}
function addToCartSuccess (jqXHR, textStatus, errorThrown){

	$.ajax({
		type: 'GET',
		url: '/cart.js',
		async: false,
		cache: false,
		dataType: 'json',
		success: function (cart){
			dl_hidePopup('.loading');
			Haravan.updateCartFromForm(cart, '.mini-products-list');
			Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
		}
	});



	var url_product = jqXHR['url'];

	var name = jqXHR['title'];

	if(jqXHR.variant_options == 'Default Title'||jqXHR.variant_options == ''){
		var vtitle = jqXHR.title;
	}else{
		var vtitle =  jqXHR.title +' - '+jqXHR.variant_options;
	}


	var windowW = $(window).width();

	if(jqXHR['image'] == null){
		var src = "https://hstatic.net/0/0/global/noDefaultImage6_large.gif";
	}else{
		var src = Haravan.resizeImage(jqXHR['image'], 'small');
	}
	$('#popup-cart img').attr('src',src);
	$('#popup-cart .product-name a').attr('href',url_product);
	$('#popup-cart .product-name a').text(vtitle);
	$('#popup-cart').modal();

}
function addToCartFail(jqXHR, textStatus, errorThrown){
	var response = $.parseJSON(jqXHR.responseText);
	var $info = '<div class="error">'+ response.description +'</div>';
}
$(document).on('click', ".remove-item-cart", function () {
	var variantId = $(this).attr('data-id');
	removeItemCart(variantId);
});
$(document).on('change', ".number-sidebar", function () {
	var variantId = $(this).parent().children('.variantID').val();
	var qty =  $(this).val();
	updateQuantity(qty, variantId);
});

function updateQuantity (qty, variantId){
	var variantIdUpdate = variantId;

	$.ajax({
		type: "POST",
		url: "/cart/update.js",
		data: 'quantity='+qty+'&id=' + variantId,

		dataType: "json",
		success: function (cart, variantId) {

			Haravan.onCartUpdateClick(cart, variantIdUpdate);
			//Haravan.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
		},
		error: function (qty, variantId) {
			Haravan.onError(qty, variantId)
		}
	})
}
function removeItemCart (variantId){
	var variantIdRemove = variantId;
	console.log('quantity=0&line=' + variantId);
	$.ajax({
		type: "POST",
		url: "/cart/update.js",
		data: 'quantity=0&id=' + variantId,

		dataType: "json",
		success: function (cart, variantId) {
			Haravan.onCartRemoveClick(cart, variantIdRemove);

			$('.productid-'+variantIdRemove).remove();
			if($('.tbody-popup>div').length == '0' ){
				$('#popup-cart').modal('hide');
			}
			if($('.list-item-cart>li').length == '0' ){
				$('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>');
			}
			if($('.cart-tbody>div').length == '0' ){
				$('.bg-cart-page').remove();
				$('.page_cart').html('');
				$('.bg-cart-page-mobile').remove();
				jQuery('<div class="bg-cart-page" style="min-height: auto"><p>Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="/">cửa hàng</a> để tiếp tục mua sắm.</p></div>').appendTo('.cart');
			}
		},
		error: function (variantId, r) {
			Haravan.onError(variantId, r)
		}
	})
}

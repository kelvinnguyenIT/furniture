window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();
};

$('[data-toggle="tooltip"]').tooltip({container: 'body'});

function convertToSlug(text) {
	return text.toLowerCase().replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
}window.convertToSlug=convertToSlug;

/********************************************************
# CONVERT VIETNAMESE
********************************************************/
function dl_convertVietnamese(str) {
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ặ|ắ|ẵ|ẳ/g,"a");
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
	str= str.replace(/ì|í|ị|ỉ|ĩ|ì|í|ị|ỉ|ĩ|ì||ị|i/g,"i");
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ở|ỡ|ợ/g,"o");
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|ừ/g,"u");
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ|ỳ|ý|ỵ|ỹ|y/g,"y");
	str= str.replace(/đ|đ/g,"d");
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,"");
	return str;
} window.dl_convertVietnamese=dl_convertVietnamese;


function product_action(str) {
	/*Product action*/
	$('.product-box .btn-circle').mouseenter(function() {
		var tt = $(this).attr('data-title');
		$(this).parents('form').find('.action-info').html(tt);
	});
	$('.product-box .btn-circle').mouseleave(function() {
		$(this).parents('form').find('.action-info').html('Chọn hoạt động');
	});

} window.product_action=product_action;
function resizeimage() {
	$('.product-box .product-thumbnail a img').each(function(){
		var t1 = (this.naturalHeight/this.naturalWidth);
		var t2 = ($(this).parent().height()/$(this).parent().width());
		if(t1<= t2){
			$(this).addClass('bethua');
		}

		var m1 = $(this).height();
		var m2 = $(this).parent().height();
		if(m1 <= m2){
			$(this).css('padding-top',(m2-m1)/2 + 'px');
		}
	})
} window.resizeimage=resizeimage;


/********************************************************
# Sidebar category
********************************************************/
$('.nav-category .fa-angle-down').click(function(e){
	$(this).parent().toggleClass('active');
});
/********************************************************
# Offcanvas menu
********************************************************/
jQuery(document).ready(function ($) {
	$('#nav-mobile .fa').click(function(e){
		e.preventDefault();
		$(this).parent().parent().toggleClass('open');
	});
	$('.menu-bar').click(function(e){
		e.preventDefault();
		$('#nav-mobile').toggleClass('open');
	});

	$('.open-filters').click(function(e){

		$(this).toggleClass('open');
		$('.dqdt-sidebar').toggleClass('open');
	});

	$('.inline-block.account-dr>a').click(function(e){
		if($(window).width() < 992){
			e.preventDefault();

		}
	})

	if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
		$('.sidebar-category .aside-content .nav-item .fa.fa-caret-right').css('top','19px');
		$('.sidebar-category .aside-content .nav-item .nav-item .fa.fa-caret-right').css('top','16px');

	}

});
/********************************************************
# Footer
********************************************************/
$('.site-footer h3').click(function() {
	$(this).parent().find('.list-menu').toggleClass('active');
	$(this).toggleClass('active');
});
$('.aside.aside-mini-products-list .aside-title h3').click(function() {
	$(this).parents('.aside-mini-products-list').find('#collection-filters-container').toggleClass('active');
});

/**/
/********************************************************
# toggle-menu
********************************************************/

$('.toggle-menu .caret').click(function() {
	$(this).closest('li').find('> .sub-menu').slideToggle("fast");
	$(this).closest('li').toggleClass("open");
	return false;
});
$('.off-canvas-toggle').click(function(){
	$('body').toggleClass('show-off-canvas');
	$('.off-canvas-menu').toggleClass('open');
})
$('body').click(function(event) {
	if (!$(event.target).closest('.off-canvas-menu').length) {
		$('body').removeClass('show-off-canvas');
	};
});

/********************************************************
# accordion
********************************************************/
$('.accordion .nav-link').click(function(e){
	e.preventDefault;

	$(this).parent().toggleClass('active');
})
/********************************************************
# Dropdown
********************************************************/
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open');
});
$('#dropdownMenu1').click(function() {
	var ofh= $(this).parent().find('.dropdown-menu').width();

	var mm = $('.menu-mobile'). offset().left;

	$('.site-header-inner button.btn-close').css('left',ofh - mm +'px');
});
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
});
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});

$('body').click(function(event) {
	if (!$(event.target).closest('.collection-selector').length) {
		$('.list_search').css('display','none');
	};
});

/********************************************************
# Tab
********************************************************/
$(".e-tabs:not(.not-dqtab)").each( function(){
	$(this).find('.tabs-title li:first-child').addClass('current');
	$(this).find('.tab-content').first().addClass('current');

	$(this).find('.tabs-title li').click(function(){
		var tab_id = $(this).attr('data-tab');

		var url = $(this).attr('data-url');
		$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

		$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
		$(this).closest('.e-tabs').find('.tab-content').removeClass('current');

		$(this).addClass('current');
		$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
	});
});

/********************************************************
# SHOW NOITICE
********************************************************/
awe.showNoitice = function (selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function() {
		$(selector).animate({right: '-300px'}, 500);
	}, 3500);
};

/********************************************************
# SHOW LOADING
********************************************************/
dl_showLoading = function (selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading);
}

/********************************************************
# HIDE LOADING
********************************************************/
dl_hideLoading = function (selector) {
	$(selector).removeClass("loading");
	$(selector + ' .loading-icon').remove();
}


/********************************************************
# SHOW POPUP
********************************************************/
dl_showPopup = function (selector) {
	$(selector).addClass('active');
};

/********************************************************
# HIDE POPUP
********************************************************/
dl_hidePopup = function (selector) {
	$(selector).removeClass('active');
}
/********************************************************
# DL money
********************************************************/
DL_formatmoney = function(a, b) {
        function f(a, b, c, d) {
            if ("undefined" == typeof b && (b = 2), "undefined" == typeof c && (c = "."), "undefined" == typeof d && (d = ","), "undefined" == typeof a || null == a) return 0;
            a = a.toFixed(b);
            var e = a.split("."),
                f = e[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + c),
                g = e[1] ? d + e[1] : "";
            return f + g
        }
        "string" == typeof a && (a = a.replace(/\./g, ""), a = a.replace(/\,/g, ""));
        var c = "",
            d = /\{\{\s*(\w+)\s*\}\}/,
            e = b || this.money_format;
        switch (e.match(d)[1]) {
            case "amount":
                c = f(a, 2);
                break;
            case "amount_no_decimals":
                c = f(a, 0);
                break;
            case "amount_with_comma_separator":
                c = f(a, 2, ".", ",");
                break;
            case "amount_no_decimals_with_comma_separator":
                c = f(a, 0, ".", ",")
        }
        return e.replace(d, c)
}

/************************************************/
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {
	awe.hidePopup('.awe-popup');
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})

$(window).on("load resize",function(e){
	if($(window).width() < 1200 ){

		$('.header-icon .fa-search,.header-icon .fa-user').click(function(e){
			e.preventDefault();
		})
	}
	setTimeout(function(){
		resizeimage();
	},200);

	setTimeout(function(){

		resizeimage();
	},1000);
});

$(document).on('keydown','#qty, #quantity-detail, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(document).on('click','.qtyplus',function(e){
	e.preventDefault();
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal)) {
		$('input[data-field='+fieldName+']').val(currentVal + 1);
	} else {
		$('input[data-field='+fieldName+']').val(0);
	}
});

$(document).on('click','.qtyminus',function(e){
	e.preventDefault();
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal) && currentVal > 1) {
		$('input[data-field='+fieldName+']').val(currentVal - 1);
	} else {
		$('input[data-field='+fieldName+']').val(1);
	}
});


jQuery(document).ready(function ($) {

	$('.owl-carousel:not(.not-dqowl)').each( function(){
		var small_xs_item = $(this).attr('data-smxs-items');
		var xs_item = $(this).attr('data-xs-items');
		var md_item = $(this).attr('data-md-items');
		var lg_item = $(this).attr('data-lg-items');
		var sm_item = $(this).attr('data-sm-items');
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		if (typeof margin !== typeof undefined && margin !== false) {
		} else{
			margin = 30;
		}
		if (typeof small_xs_item !== typeof undefined && small_xs_item !== false) {
		} else{
			small_xs_item = 1;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {

		} else{
			sm_item = 3;
		}

		if (typeof md_item !== typeof undefined && md_item !== false) {
		} else{
			md_item = 3;
		}
		if (typeof lg_item !== typeof undefined && lg_item !== false) {
		} else{
			lg_item = 4;
		}
		if (typeof dot !== typeof undefined && dot !== true) {
			dot= dot;
		} else{
			dot = false;
		}
		if (typeof nav !== typeof undefined && nav !== true) {
			nav= nav;
		} else{
			nav = false;
		}

		$(this).owlCarousel({
			loop:false,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			responsive:{
				0:{
					items:Number(small_xs_item),
					nav:nav
				},
				350:{
					items:Number(xs_item),
					nav:nav
				},
				768:{
					items:Number(sm_item),
					nav:nav
				},
				992:{
					items:Number(md_item),
					nav:nav
				},
				1200:{
					items:Number(lg_item),
					nav:nav
				}
			}
		})
	})
	resizeimage();
	/* Back to top */
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
	product_action();


});




/* top search */

$('.search_text').click(function(){
	$(this).next().slideToggle(200);
	$('.list_search').show();
})

$('.list_search .search_item').on('click', function (e) {
	$('.list_search').hide();

	var optionSelected = $(this);

	/*
  var id = optionSelected.attr('data-coll-id');
  var handle = optionSelected.attr('data-coll-handle');
  var coll_name = optionSelected.attr('data-coll-name');
  */

	var title = optionSelected.text();
	//var filter = '(collectionid:product' + (id == 0 ? '>=0' : ('=' + id)) + ')';


	//console.log(coll_name);
	$('.search_text').text(title);
	var h = $(".collection-selector").width() + 10;

	$('.header_search input').css('padding-left',h + 'px');

	/*
  $('.ultimate-search .collection_id').val(filter);
  $('.ultimate-search .collection_handle').val(handle);
  $('.ultimate-search .collection_name').val(coll_name);
  */

	$(".search-text").focus();
	optionSelected.addClass('active').siblings().removeClass('active');
	//console.log($('.kd_search_text').innerWidth());


	//$('.list_search').slideToggle(0);

	/*
  sessionStorage.setItem('last_search', JSON.stringify({
    title: title,
    handle: handle,
    filter: filter,
    name: coll_name
  }));
  */
});


$('.header_search form button').click(function(e) {
	e.preventDefault();
	searchCollection();
	setSearchStorage('.header_search form');
});

$('#mb_search').click(function(){
	$('.mb_header_search').slideToggle('fast');
});

$('.fi-title.drop-down').click(function(){
	$(this).toggleClass('opentab');
});



function searchCollection() {
	var collectionId = $('.list_search .search_item.active').attr('data-content');
	var searchVal = $('.header_search input[type="search"]').val();
	var url = '';

		url = '/product/search?key='+ searchVal+'&slug='+collectionId;

	window.location=url;
}


/*** Search Storage ****/

function setSearchStorage(form_id) {
	var seach_input = $(form_id).find('.search-text').val();
	var search_collection = $(form_id).find('.list_search .search_item.active').attr('data-coll-id');
	sessionStorage.setItem('search_input', seach_input);
	sessionStorage.setItem('search_collection', search_collection);
}
function getSearchStorage(form_id) {
	var search_input_st = ''; // sessionStorage.getItem('search_input');
	var search_collection_st = ''; // sessionStorage.getItem('search_collection');
	if(sessionStorage.search_input != '') {
		search_input_st = sessionStorage.search_input;
	}
	if(sessionStorage.search_collection != '') {
		search_collection_st = sessionStorage.search_collection;
	}
	$(form_id).find('.search-text').val(search_input_st);
	$(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').addClass('active').siblings().removeClass('active');
	var search_key = $(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').text();
	if(search_key != ''){
		$(form_id).find('.collection-selector .search_text').text(search_key);
	}
	//$(form_id).find('.search_collection option[value="'+search_collection_st+'"]').prop('selected', true);
}
function resetSearchStorage() {
	sessionStorage.removeItem('search_input');
	sessionStorage.removeItem('search_collection');
}
$(window).load(function() {
	getSearchStorage('.header_search form');
	resetSearchStorage();
	var h = $(".collection-selector").width() + 10;
	$('.header_search input').css('padding-left',h + 'px');


	$('.bot-header-left').mouseover(function(e){
		$('.catogory-other-page').addClass('active');
	})

	$('body').mouseover(function(event) {
		if (!$(event.target).closest('.bot-header-left').length && !$(event.target).closest('.catogory-other-page').length){
			$('.catogory-other-page').removeClass('active');
		};
	});


});

 $(document).on('keydown','.fixnumber',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});

var selectCallback = function(variant, selector) {
	if (variant) {

		var form = jQuery('#' + selector.domIdPrefix).closest('form');

		for (var i=0,length=variant.options.length; i<length; i++) {

			var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');

			if (radioButton.size()) {
				radioButton.get(0).checked = true;
			}
		}
	}
	var addToCart = jQuery('.form-product .btn-cart'),
			masp = jQuery('.masp'),
			form = jQuery('.form-product .form-groupx'),
			productPrice = jQuery('.details-pro .special-price .product-price'),
			qty = jQuery('.details-pro .inventory_quantity'),
			comparePrice = jQuery('.details-pro .old-price .product-price-old');

	if(variant && variant.sku && variant.sku != null)
	{
		masp.text(variant.sku);
	}else{
		masp.text('Đang cập nhật');
	}


	if (variant && variant.available) {
		if(variant.inventory_management == "bizweb"){
			qty.html('<span>Chỉ còn ' + variant.inventory_quantity +' sản phẩm</span>');
		}else{
			qty.html('<span>Còn hàng</span>');
		}
		addToCart.text('Thêm vào giỏ hàng').removeAttr('disabled');									
		if(variant.price == 0){
			productPrice.html('Liên hệ');	
			comparePrice.hide();
			form.addClass('hidden');
		}else{
			form.removeClass('hidden');
			productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
			// Also update and show the product's compare price if necessary
			if ( variant.compare_at_price > variant.price ) {
				comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫")).show();
			} else {
				comparePrice.hide();   
			}       										
		}

	} else {	
		qty.html('<span>Hết hàng</span>');
		addToCart.text('Hết hàng').attr('disabled', 'disabled');
		if(variant){
			if(variant.price != 0){
				form.removeClass('hidden');
				productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
				// Also update and show the product's compare price if necessary
				if ( variant.compare_at_price > variant.price ) {
					comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫")).show();
				} else {
					comparePrice.hide();   
				}     
			}else{
				productPrice.html('Liên hệ');	
				comparePrice.hide();
				form.addClass('hidden');									
			}
		}else{
			productPrice.html('Liên hệ');	
			comparePrice.hide();
			form.addClass('hidden');	
		}

	}
	/*begin variant image*/
	if (variant && variant.featured_image) {  
			var originalImage = jQuery(".large-image img"); 
			var newImage = variant.featured_image;
			var element = originalImage[0];
		Haravan.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
			jQuery(element).parents('a').attr('href', newImageSizedSrc);
			jQuery(element).attr('src', newImageSizedSrc);
		});

		$('.checkurl').attr('href',$(this).attr('src'));
		setTimeout(function(){
			$('.zoomContainer').remove();				
			$('#zoom_01').elevateZoom({
				gallery:'gallery_01', 
				zoomWindowWidth:420,
				zoomWindowHeight:500,
				zoomWindowOffetx: 10,
				easing : true,
				scrollZoom : true,
				cursor: 'pointer', 
				galleryActiveClass: 'active', 
				imageCrossfade: true

			});

		},300);
	}

	/*end of variant image*/
};
jQuery(function($) {
	

	 // Add label if only one product option and it isn't 'Title'. Could be 'Size'.
	 
	 $('.selector-wrapper:eq(0)').prepend('<label>Tiêu đề</label>');
		

		// Hide selectors if we only have 1 variant and its title contains 'Default'.
		
		$('.selector-wrapper').hide();
		  
		 $('.selector-wrapper').css({
			 'text-align':'left',
			 'margin-bottom':'15px'
		 });
		 });

		 jQuery('.swatch :radio').change(function() {
			 var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
			 var optionValue = jQuery(this).val();
			 jQuery(this)
			 .closest('form')
			 .find('.single-option-selector')
			 .eq(optionIndex)
			 .val(optionValue)
			 .trigger('change');
		 });

		 $(document).ready(function() {
			 if($(window).width()>1200){
				 $('#zoom_01').elevateZoom({
					 gallery:'gallery_01', 
					 zoomWindowWidth:420,
					 zoomWindowHeight:500,
					 zoomWindowOffetx: 10,
					 easing : true,
					 scrollZoom : true,
					 cursor: 'pointer', 
					 galleryActiveClass: 'active', 
					 imageCrossfade: true

				 });
			 }

			 if($(window).width()<768){					   
				 $('.product-tab .tab-link:nth-child(1) ').append('<div class="tab-content-mobile"></div>');
				 $('.product-tab .tab-link:nth-child(1) .tab-content-mobile').append($('#tab-1').html());
				 $('.product-tab .tab-link:nth-child(1)').addClass('current');

				 $('.product-tab .tab-link:nth-child(2)').append('<div class="tab-content-mobile"></div>');
				 $('.product-tab .tab-link:nth-child(2) .tab-content-mobile').append($('#tab-2').html());

				 $('.product-tab .tab-link:nth-child(3)').append('<div class="tab-content-mobile"></div>');
				 $('.product-tab .tab-link:nth-child(3) .tab-content-mobile').append($('#tab-3').html());

				 $('.product-tab .tab-content').remove();

			 }

			 $(".not-dqtab").each( function(e){
				 $(this).find('.tabs-title li:first-child').addClass('current');
				 $(this).find('.tab-content').first().addClass('current');

				 $(this).find('.tabs-title li').click(function(){
					 if($(window).width()<768){	
						 if($(this).hasClass('current')){
							 $(this).removeClass('current');
						 }else{
							 var tab_id = $(this).attr('data-tab');
							 var url = $(this).attr('data-url');
							 $(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

							 $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
							 $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

							 $(this).addClass('current');
							 $(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
						 }
					 }else{
						 var tab_id = $(this).attr('data-tab');
						 var url = $(this).attr('data-url');
						 $(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);

						 $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
						 $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

						 $(this).addClass('current');
						 $(this).closest('.e-tabs').find("#"+tab_id).addClass('current');

					 }

				 });    
			 });

		 });
		 $(window).on("load",function(e){

		 });
		 $('#gallery_01 img, .swatch-element label').click(function(e){
			 $('.checkurl').attr('href',$(this).attr('src'));
			 setTimeout(function(){
				 $('.zoomContainer').remove();				
				 $('#zoom_01').elevateZoom({
					 gallery:'gallery_01', 
					 zoomWindowWidth:420,
					 zoomWindowHeight:500,
					 zoomWindowOffetx: 10,
					 easing : true,
					 scrollZoom : true,
					 cursor: 'pointer', 
					 galleryActiveClass: 'active', 
					 imageCrossfade: true

				 });

			 },300);

		 })
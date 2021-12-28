(function ($) {
	'use strict';
	$(document).ready(function () {
		init_solr_carousel();
		wts_ajax_search();
	});

	function wts_ajax_search() {
		if (typeof ($.fn.devbridgeAutocomplete) == 'undefined') return;

		var escapeRegExChars = function (value) {
			return value.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
		};

		$('form.wts-ajax-search').each(function () {
			var $this = $(this),
				number = parseInt($this.data('count')),
				thumbnail = parseInt($this.data('thumbnail')),
				symbols_count = parseInt($this.data('symbols_count')),
				productCat = $this.find('[name="product_cat"]'),
				$results = $this.parent().find('.woodmart-search-results'),
				postType = $this.data('post_type'),
				url = wp_total_solr_ajax.search_path,
				price = parseInt($this.data('price')),
				sku = $this.data('sku');					

			$results.on('click', '.view-all-results', function () {
				$this.submit();
			});

			$this.find('[type="text"]').devbridgeAutocomplete({
				serviceUrl: url,
				dataType: 'json',				
				appendTo: $results,
				autoSelectFirst:false,
				minChars: symbols_count,				
				lookup: function (query, done) {					
					var query_str = "(status_s:publish) AND ((title_t:" + query + "*)^1.5 OR (description_t:" + query + "*)^0.8 OR (categories_ss:" + query + "*)^0.5 OR (alternative_name_t:" + query + "*)^1 OR (alternative_name_2_t:" + query + "*)^1)";
					$.ajax({
						type: 'GET',
						url: url,
						dataType: 'json',
						data: $.extend( {}, {
							"q": query_str,
							"fl": "title_t,sku_s,price_d,thumb_src_s,permalink_s",
							"wt":"json",
							"limit": 10
						}),						
						success: function (response) {
							var retObj = {
								suggestions: $.map(response.response.docs, function (dataItem) {
									return {
										value: dataItem.title_t,
										sku: dataItem.sku_s,
										price: dataItem.price_d,
										permalink: dataItem.permalink_s,
										thumb: dataItem.thumb_src_s
									};
								})
							}
							done(retObj);
						}
					});
				},
				onSelect: function (suggestion) {					
					if (suggestion.permalink.length > 0) {						
						window.location.href = suggestion.permalink;
					}
				},				
				onSearchStart: function (query) {					
					$this.addClass('search-loading');
				},
				beforeRender: function (container) {
					$(container).find('.suggestion-divider-text').parent().addClass('suggestion-divider');
					if (container[0].childElementCount > 2)
						$(container).append('<div class="view-all-results"><span>' + woodmart_settings.all_results + '</span></div>');

				},
				onSearchComplete: function (query, suggestions) {
					$this.removeClass('search-loading');
					var woodmartTheme = !_.isUndefined(woodmartTheme) ? woodmartTheme : {};
					if ($(window).width() >= 1024 && (!woodmartTheme.disableNanoScrollerWebkit && woodmart_settings.disable_nanoscroller != 'disable')) {
						$(".woodmart-scroll").nanoScroller({
							paneClass: 'woodmart-scroll-pane',
							sliderClass: 'woodmart-scroll-slider',
							contentClass: 'woodmart-scroll-content',
							preventPageScrolling: false
						});
					}

					$(document).trigger('wood-images-loaded');

				},
				formatResult: function (suggestion, currentValue) {					
					if (currentValue == '&') currentValue = "&#038;";
					var pattern = '(' + escapeRegExChars(currentValue) + ')',
						returnValue = '';					

					if (thumbnail && suggestion.thumb) {
						returnValue += ' <div class="suggestion-thumb">' + suggestion.thumb + '</div>';
					}

					if (suggestion.value) {
						returnValue += '<h4 class="suggestion-title result-title">' + suggestion.value
							.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>')				
							.replace(/&lt;(\/?strong)&gt;/g, '<$1>') + '</h4>';
					}

					if (suggestion.no_found) returnValue = '<div class="suggestion-title no-found-msg">' + suggestion.value + '</div>';

					if (sku && suggestion.sku) {
						returnValue += ' <div class="suggestion-sku">' + suggestion.sku + '</div>';
					}

					if (price && suggestion.price) {						
						returnValue += ' <div class="suggestion-price price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span>'+suggestion.price+'</bdi></span></div>';
					}

					return returnValue;
				}
			});

			$(document).on('click', function (e) {
				var target = e.target;
				if (!$(target).is('.woodmart-search-form') && !$(target).parents().is('.woodmart-search-form')) {
					$this.find('[type="text"]').devbridgeAutocomplete('hide');
				}
			});

			$('.woodmart-search-results').on('click', function (e) {
				e.stopPropagation();
			});

		});

	}

	function init_solr_carousel() {
		jQuery(".solr-carousel").each(function (k, v) {

			var num_items = $(v).data('num_items');
			var query_type = $(v).data('query_type');
			var include_out_of_stock = $(v).data('include_out_of_stock');
			$.ajax({
				"url": wp_total_solr_ajax.ajaxurl,
				"type": "get",
				"datatype": "json",
				"data": {
					'ajax_nonce': wp_total_solr_ajax.ajax_nonce,
					'action': 'wts_get_products',
					'params': {
						'type': query_type,
						'num_items': num_items,
						'include_out_of_stock': include_out_of_stock
					}
				},
				success: function (response) {
					$(v).find('.owl-carousel').html(response);
					$(v).find('.owl-carousel').owlCarousel({
						loop: true,
						autoplay: true,
						autoplayTimeout: 3000,
						margin: 10,
						nav: true,
						dots: false,
						responsive: {
							0: {
								items: 2
							},
							600: {
								items: 3
							},
							1000: {
								items: 5
							}
						}
					});
				}
			});
		});

	}

})(jQuery);
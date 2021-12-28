(function ($) {
	'use strict';
	$(document).ready(function () {
		if ($('.woocommerce-form-login').length) {
			$('.woocommerce-form-login').prepend('<div class="woodmart-info-box text-center box-icon-align-top color-scheme-light box-title-small" style="background-color:#f39c12;border:1px solid #e67e22; border-radius:5px;padding:5px 15px"><div class="box-icon-wrapper box-with-text text-size-large box-icon-simple"></div><div class="info-box-content"><p style="font-weight:bold;margin-bottom:10px"><i class="fa fa-info-circle"></i> Note : If you have registered before October 29, 2020, please <a href="/my-account/?action=register"><u>Create a new account</u></a></p></div></div>');
		}
		if ($("body").hasClass("woocommerce-checkout")) {
			$(".enable-subscription-chk").on("click", function () {
				if ($(".enable-subscription-chk input[type=checkbox]").is(":checked")) {
					$(".checkout_subscription").removeClass("d-none");
				} else {
					$(".checkout_subscription").addClass("d-none");
				}
			});
		}
	});

	$(document).on('click', '.remove_from_cart_button, .product-remove .remove', function (e) {
		e.preventDefault();
		if (typeof webengage !== "undefined") {
			if ($(this).hasClass('remove_from_cart_button')) {
				/**
				 * Mini Cart
				 */
				var data = {
					"Product Id": $(this).data("product_id").toString(),
					"Quantity": parseInt(_.first($(this).parents(".woocommerce-mini-cart-item").find(".quantity").text().trim().split(" ")), 10),
					"Total Amount": parseInt(_.last($('.woocommerce-mini-cart__total .amount').eq(0).text().split(" ")).replace(/\D+/g, ''), 10),
					"Price": parseInt($(this).parents(".woocommerce-mini-cart-item").find(".woocommerce-Price-amount").text().trim().replace(/\D+/g, ''), 10),
					"Product Name": $(this).parents(".woocommerce-mini-cart-item").find(".product-title").text().trim()
				}
			}
			else {
				var data = {
					"Product Id": $(this).data("product_id").toString(),
					"Quantity": $(this).parents("tr.woocommerce-cart-form__cart-item").find("input.qty").val(),
					"Total Amount": $(".cart-subtotal .amount").text().replace(/\D+/gi, ''),
					"Price": $(this).parents("tr.woocommerce-cart-form__cart-item").find(".product-subtotal").text().replace(/\D+/gi, ''),
					"Product Name": $(this).parents("tr.woocommerce-cart-form__cart-item").find(".product-name").text().trim()
				}
			}
			webengage.track('Removed From Cart', data);
		}
	});
	$(document).on("click", ".quantity input[type=button]", function () {
		$("body").addClass("cart-updated");
	});
	$(document).on('applied_coupon_in_checkout', function (event, coupon) {
		if (typeof webengage !== "undefined") {
			var data = {
				'Cart Value Before Discount': parseInt($(".cart-subtotal .woocommerce-Price-amount.amount").text().replace(/\D+/gi, ''), 10),
				'Cart Value After Discount': parseInt($(".order-total .woocommerce-Price-amount.amount").text().replace(/\D+/gi, ''), 10),
				'Coupon Code': coupon,
				'Discount Amount': parseInt($(".cart-discount .woocommerce-Price-amount.amount").text().replace(/\D+/gi, ''), 10)
			}
			webengage.track('Coupon Code Applied', data);
		}
	});
	$(document).on('wc_fragments_refreshed', function (e) {
		if (typeof webengage !== "undefined") {
			if ($("body").hasClass("cart-updated")) {
				var data = {
					"Total Amount": $(".order-total .woocommerce-Price-amount").text().replace(/\D+/g, ''),
					"No. Of Products": $(".woocommerce-cart-form__cart-item.cart_item").length,
					"Product Details": $(".woocommerce-cart-form__cart-item.cart_item").map(function (i, v) {
						return {
							Link: $(v).find('.product-thumbnail a').attr("href"),
							Price: $(v).find('.product-price .woocommerce-Price-amount').text().replace(/\D+/g, ''),
							Name: $(v).find(".product-name").text().trim(),
							Quantity: $(".product-quantity input.qty").val()
						}
					}).get()
				};
				webengage.track('Cart Updated', data);
				$("body").removeClass("cart-updated");
			}
		}
	});
	$(document).on('click', '.add_to_cart_button', function (e) {
		e.preventDefault();
		var categories = $(this).parents('.product-grid-item').attr("class").split(/\s+/).filter(function (v, i) { return v.indexOf("product_cat-") >= 0 }).map(function (v, i) { return v.replace("product_cat-", "") }).join(",");
		if (typeof webengage !== "undefined") {
			var data = {
				"Product Id": $(this).data("product_id"),
				"Product Name": $(this).parents('.product-grid-item').find(".product-title").find("a").text(),
				"Quantity": $(this).data('quantity'),
				"Category Name": categories,
				"Price": $(this).parents('.product-grid-item').find(".price").text()
			}
			webengage.track('Added To Cart', data);
		}
	});
	$(document).on('updated_checkout', function (data) {
		setTimeout(function () {
			if ($('.woocommerce-shipping-totals.shipping select').length) {
				$(".woocommerce-billing-fields__field-wrapper .zone-container").remove();
				$('#billing_state_field').after('<p class="form-row form-row-wide zone-container"><label for="billing_zone">Your Zone <abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"></span></p>');
				$('.woocommerce-shipping-totals.shipping select').appendTo($('.zone-container .woocommerce-input-wrapper'));

				$('.shop_table.woocommerce-checkout-review-order-table .woocommerce-shipping-totals.shipping').remove();
				if ($('select.shipping_method').data("select2")) {
					$('select.shipping_method').select2('destroy');
				}
				$('select.shipping_method').select2();
				setTimeout(function () {
					$('select.shipping_method').data("select2").on("results:message", function () {
						this.dropdown._positionDropdown();
					});
				}, 150);
			} else {
				if ($('.woocommerce-shipping-totals.shipping').length) {
					$(".woocommerce-billing-fields__field-wrapper .zone-container").remove();
				}
			}
		}, 150);
		/**
		 * Same day delivery
		 */
		var selected_zone = $("select.shipping_method").val();
		if (typeof delivery_after_x_days != 'undefined') {
			$("#calendar").datepicker("option", "minDate", delivery_after_x_days);
		}
		else if (typeof selected_zone != 'undefined') {
			var currentHours = (new Date()).getHours();
			if (selected_zone !== '' && same_dd_enabled == 1) {
				selected_zone = selected_zone.split(":");
				selected_zone = selected_zone[1] + "";
				if (same_dd_zones.indexOf(selected_zone) >= 0 && currentHours < 15) {
					$("#calendar").datepicker("option", "minDate", 0);
				} else {
					$("#calendar").datepicker("option", "minDate", 1);
				}
			}
		}
	});
})(jQuery);

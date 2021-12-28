jQuery(document).ready(function($) {
	$(function() {
		$('#rtabs').tabs();
	});

	//English and Bangla menu display
	var url = window.location.href;

	var segments = url.split('/');

	var urlproduct = segments[4];
	if (urlproduct) {
		$('.woodmart-hover-standard .btn-add').css({
			'margin-left': '-2%'
		});
		$('.product_quantity').css({
			'margin-left': '-78%'
		});
	}

	var urlSegment = segments[3];

	if (urlSegment === 'bn') {
		$('.english_menu_cat').hide();
	} else {
		$('.bangla_menu_cat').hide();
	}

	//$('.woodmart-social-login').append('<a href="" class="checkout_login">Mobile Login</a>');
	//$('.woocommerce-form-register').append('<a href="" class="checkout_login">Mobile</a>');

	$('#checkoutRegButton').click(function(e) {
		e.preventDefault();

		$('.checkoutRegFormContainer').toggleClass('displayToggle');
	});

	$('.add_to_cart_button').click(function() {
		var custom_qty = $(this).siblings().children().find('.custom_qty_fld').val();

		$(this).attr('data-quantity', custom_qty);
	});

	/*
   * quick order now button
   */

	// 	$('.woodmart-add-btn, .btn-add').prepend('<div class="quick_order_container"><a class="order_now_btn">Order Now</a></div>');

	// 	$('.woodmart-add-btn, .btn-add').prepend('<div class="quick_order_container"><div class="quantity" style="margin-bottom: 5px;"><input type="button" value="-" class="minus"><label class="screen-reader-text" for="quantity_5ca9d896b3f57">Quantity</label><input type="number" class="input-text qty text custom_qty_fld" step="1" min="1" value="1" title="Qty" size="4" pattern="[0-9]*"><input type="button" value="+" class="plus"></div></div>');

	// 	 $('.close_btn').click(function(){
	//         $('.order_modal').hide(100);
	//     });

	// 	$('.order_now_btn').click(function(){

	// 		var all_img_link = $(this).parent().parent().siblings('.product-element-top').find('img').attr('src');
	// 		var single_page_img_link = $(this).parent().parent().parent().parent().siblings().find('.attachment-woocommerce_single').attr('src');
	// 		var product_title = $(this).parent().parent().siblings('.product-title').find('a').text();
	// 		var single_page_product_title = $(this).parent().parent().siblings('.product_title').text();
	// 		var product_price = $(this).parent().parent().siblings('.price').children('span').text();
	// 		var all_qty = $(this).parent().siblings('div.quick_order_container').children().children('.custom_qty_fld').val();
	// 		var single_page_qty = $(this).parent().siblings('.quantity').children('.qty').val();
	// 		$('.product_info_container').show();

	// 		$('.ptitle').html(product_title);
	// 		$('.pprice').html(product_price);

	//     	$('#succes_msg').hide();
	//         $('.order_modal').show(100);
	//         $('#quick_order_form').show();

	//         var page_parent = $(this).parent().parent().attr('class');

	//         var single_page_product_id = $(this).parent().siblings('button[type="submit"]').val();

	//         var all_site_product_id = $(this).parent().siblings('a').attr('data-product_id');

	//         if(page_parent == 'cart'){
	// 			// single product page
	// 			$('.ptitle').html(single_page_product_title);
	// 			$('.product_image').html('<img src="'+ single_page_img_link +'">');
	//             $('#qo_product_id').val(single_page_product_id);
	// 			$('#quantity').val(single_page_qty);
	//         }else if(page_parent == 'btn-add'){
	// 			$('.ptitle').html(product_title);
	// 			$('.product_image').html('<img src="'+ all_img_link +'">');
	//             $('#qo_product_id').val(all_site_product_id);
	// 			$('#quantity').val(all_qty);
	//         }
	//     });

	// 	  $('#quick_order_form').submit(function(e){
	//         e.preventDefault();

	//         var name = $('#qo_name').val();
	//         var phone = $('#qo_phone').val();
	//         var address = $('#qo_address').val();
	//         var product_id = $('#qo_product_id').val();
	//         var qty = $('#quantity').val();

	//         if(name == '' || phone == '' || address == ''){
	//             if(name == ''){
	//                 $('#name_err').html('Please enter Name');
	//             }else{
	//                 $('#name_err').html('');
	//             }

	//             if(phone == ''){
	//                 $('#phone_err').html('Please enter Phone Number');
	//             }

	//             if(address == ''){
	//                 $('#address_err').html('Please enter Address');
	//             }
	//         }else{
	//         	if(name !== ''){
	//                 	$('#name_err').html('');
	//             	}

	//             	if(phone !== ''){
	//                 	$('#phone_err').html('');
	//             	}

	//             	if(address !== ''){
	//                 	$('#address_err').html('');
	//             	}

	//             	if($.isNumeric(phone)){

	//             	$.ajax({
	//                 type: 'POST',

	//                 url: custom_script_object.ajaxurl,
	//                 data: {
	//                     'action': 'quickOrder', //calls wp_ajax_nopriv_ajaxlogin
	//                     'name': name,
	//                     'phone': phone,
	//                     'address': address,
	//                     'product_id': product_id,
	//                     'qty': qty

	//                 },beforeSend: function() {
	//         			$("#loaderDiv").show();
	// 					$("#quick_order_submit").attr("disabled", true);
	//     			},
	//                 success: function(data){
	// 					$("#loaderDiv").hide();
	//                 	if(data == 'success'){
	// 						$("#quick_order_submit").attr("disabled", false);
	//                 		$('#quick_order_form').hide();
	//                 		$('#err_msg').hide();
	//                 		$('#succes_msg').slideDown(300);
	//                 		    $('.product_info_container').hide();
	//                     		$('#succes_msg').html('<p><strong>Thank you</strong></p><small>We have recived your order. We will contact with you soon.</small>');

	//                     		setTimeout(function() {
	//   					$('.order_modal').fadeOut('fast');
	// 				}, 6000);

	// 				$('#quick_order_form')[0].reset();

	//                 	}else{
	//                 	$('#succes_msg').hide();
	//                 		$('#err_msg').slideDown(300);
	//                 		setTimeout(function() {
	//   					$('#err_msg').fadeOut('fast');
	// 				}, 6000);
	//                     		$('#err_msg').html('<p><strong>Order Failed!</strong></p><small>Something went wrong! Please try again later</small>');
	//                 	}

	//                 }
	//             });

	//             	}else{
	//             		$('#phone_err').html('Please enter phone number');
	//             	}

	//         }
	//     });
	/* end order new button */

	/* Cart icon animation */
	var flag = false;

	$('body').on('added_to_cart', function() {
		$cart = $('.woocommerce-Price-amount ');
		$cartIcon = $('.woodmart-cart-icon');

		$cartIcon.addClass('cartAnim');

		setTimeout(function() {
			$cartIcon.removeClass('cartAnim');
		}, 3000);
	});
	/* End cart icon animation */

	// Custom registation for Email
	$('body').on('click', '#registation_email', function(e) {
		e.preventDefault();

		var e_email = $('#kemail').val();
		var e_pass = $('#kpassword1').val();
		var e_cpass = $('#kpassword2').val();

		if (e_email == '' || e_pass == '' || e_cpass == '') {
			if (e_email == '') {
				$('#e-email-err').html('Please enter email');
			}
			if (e_pass == '') {
				$('#e-pass-err').html('Please enter password');
			}
			if (e_cpass == '') {
				$('#e-con-pass-err').html('Please enter confirm password');
			}
		} else {
			$.ajax({
				url: custom_script_object.ajaxurl,
				method: 'post',
				dataType: 'json',
				data: {
					action: 'custom_registation_email',
					email: $('#kemail').val(),
					password1: $('#kpassword1').val(),
					password2: $('#kpassword2').val()
				},
				success: function(data) {
					//  alert('email success');
					// $('#email_reg_succ').html(data.user_id);

					$('#e-email-err').html(data.email_send_sms);
					// $('#email_reg_succ').html(data.email_success);
					$('#e-email-err').html(data.e_invalid);
					$('.email_reg_err').html(data.e_already_exist);

					if (data.email_success == 'resigtration_successfull') {
						$('.registation_email_success').css('display', 'none'); // To hide
						$('#email_reg_succ').html(
							'<div class="email_reg_success">Resigtration successfull please check your email to confirm your account</div>'
						);
					}
				}
			});
		}
	});

	// Custom registation for Phone
	$('body').on('click', '#registation_phonee', function(e) {
		e.preventDefault();

		var k_username = $('#khas_username').val();
		var k_pass = $('#khas_password1').val();
		var k_cpass = $('#khas_password2').val();

		if (k_username == '' || k_pass == '' || k_cpass == '') {
			if (k_username == '') {
				$('#p-phone-err').html('Please enter phone');
			}
			if (k_pass == '') {
				$('#p-pass-err').html('Please enter password');
			}
			if (k_cpass == '') {
				$('#p-con-pass-err').html('Please enter confirm password');
			}
		} else {
			if (k_pass == k_cpass) {
				$.ajax({
					url: custom_script_object.ajaxurl,
					method: 'post',
					dataType: 'json',
					data: {
						action: 'custom_registation_phone',
						username: $('#khas_username').val(),
						password1: $('#khas_password1').val(),
						password2: $('#khas_password2').val()
					},
					success: function(data) {
						$('.phone_reg_err').html(data.user_exists);
						if (data.reg_success) {
							//alert('success');
							$('#phone_reg_succ').html(data.reg_success);
							$('.phone_reg_form_inner').css('display', 'none'); // To hide
							$('.confirm_code').css('display', 'block'); // To unhide
						}
					}
				});
			} else {
				$('#p-con-pass-err').html('Password do not match');
			} //end else
		} //end else
	});

	// confirmCode validation for Phone
	$('body').on('click', '#confirmCode_btn', function(e) {
		e.preventDefault();

		var confirmCode = $('#confirmCode').val();

		if (confirmCode == '') {
			$('#confirmCode-err').html('Enter confirm code');
		} else {
			$.ajax({
				url: custom_script_object.ajaxurl,
				method: 'post',
				dataType: 'json',
				data: {
					action: 'phone_code_varification',
					confirmCode: $('#confirmCode').val()
				},
				success: function(data) {
					//alert(data.db_confirm_code);
					//alert(data.input_confirm_code);
					//window.location.reload();

					//location.reload();
					if (data.active_status == 'activeted') {
						location.reload();
					} else {
						//alert(data.code_not_match);
						$('.confirmCode_notmatch').html(data.code_not_match);
						$('.email_reg_success').css('display', 'none'); // To hide
					}
				}
			});
		}
	});

	//Real time passwprd match phone reg
	$('#khas_password2').keyup(function() {
		if ($('#khas_password1').val() != $('#khas_password2').val()) {
			$('#p-con-pass-err').html('Password do not match').css('color', 'red');
		} else {
			$('#p-con-pass-err').html('Password matched').css('color', 'green');
		}
	});

	//Real time passwprd match Email reg
	$('#kpassword2').keyup(function() {
		if ($('#kpassword1').val() != $('#kpassword2').val()) {
			$('#e-con-pass-err').html('Password do not match').css('color', 'red');
		} else {
			$('#e-con-pass-err').html('Password matched').css('color', 'green');
		}
	});

	/*
	 *  Order cancle button for user
	 *	In Thank you page
	 */

	$('#cancel_order').click(function(e) {
		e.preventDefault();

		$('body').append(
			'<div class="order_cancel_msg"><h3>Are you sure, you want to cancel the order?</h3><div class="text-center"><input type="submit" name="order_cancel_conf" id="order_cancel_conf" value="Yes"/>&nbsp; &nbsp; &nbsp;<input type="submit" name="close_pop" id="close_pop" value="No"/></div></div>'
		);
	});

	$('body').on('click', '#close_pop', function(e) {
		e.preventDefault();
		$('.order_cancel_msg').remove();
	});

	$('body').on('click', '#order_cancel_conf', function(e) {
		e.preventDefault();

		//var orderID = $(this).data('orderId');
		var orderID = $('#cancel_order').attr('data-orderId');

		//alert(orderID);
		$.ajax({
			url: custom_script_object.ajaxurl,
			method: 'post',
			data: {
				action: 'cancelbuttonAction',
				orderID: orderID
			},
			success: function(data) {
				$('body').append(data);
			}
		});
	});

	/******************************************************
   *
   * Subscription
   *
   * ***************************************************/

	function nextWeekdayDate(date, day_in_week) {
		var ret = new Date(date || new Date());
		ret.setDate(ret.getDate() + (day_in_week - 1 - ret.getDay() + 7) % 7 + 1);
		return ret;
	}

	//        alert(nextWeekdayDate('02/09/2020', '0'));

	$('.sub_day').on('click', function(e) {
		e.preventDefault();

		let sub_day = parseInt($(this).val());
		let sub_week = parseInt($('.sub_week').val());

		var btnActive = $(this).hasClass('active');
		if (btnActive == true) {
			var activeSttus = 0;
			$(this).removeClass('active');

			$('.d' + sub_day).remove();
			dates(sub_day, sub_week, activeSttus);
		} else {
			var activeSttus = 1;
			$(this).addClass('active');
			dates(sub_day, sub_week, activeSttus);
		}

		if ($('.date_show_with_day').html() == '') {
			$('.delivery_day_list').hide();
			//   $('.apply_subscription').hide();
		} else {
			$('.delivery_day_list').show();
			//   $('.apply_subscription').show();
		}
	});

	$('.sub_week').on('change', function(e) {
		e.preventDefault();

		let sub_week = parseInt($(this).val());

		$('.active').each(function() {
			var activeVal = $(this).val();
			if (activeVal != '') {
				let sub_day = parseInt(activeVal);
				$('.d' + sub_day).remove();
				var activeSttus = 1;
				dates(sub_day, sub_week, activeSttus);
			}
		});
	});

	function dates(sub_day, sub_week, activeSttus = false) {
		var dateShow = '';
		var dateShow2 = '';
		var dateShowJs = '';
		var dateShowJs2 = '';
		var subscriptionDate;
		var subscriptionDate2;
		var activeSttus = activeSttus != false ? activeSttus : 0;

		if (activeSttus == 1) {
			for (var i = 1; i <= sub_week; i++) {
				if (i == 1) {
					var date = new Date();
					date.setDate(new Date().getDate() - 1);
				} else {
					var date = subscriptionDate;
				}

				dateShow +=
					"<input class='show_dates d" +
					sub_day +
					"' type='hidden' name='show_date[]' value='" +
					formatDate(nextWeekdayDate(date, sub_day)) +
					"'>";

				if (i < sub_week) {
					dateShowJs += formatDate(nextWeekdayDate(date, sub_day)) + ',';
					dateShowJs2 += nextWeekdayDate(date, sub_day) + ',';
				} else {
					dateShowJs += formatDate(nextWeekdayDate(date, sub_day));
					dateShowJs2 += nextWeekdayDate(date, sub_day);
				}

				subscriptionDate = nextWeekdayDate(date, sub_day);
			}

			var dateShowJss = dateShowJs.split(',');
			var dateShowJss2 = dateShowJs2.split(',');
		} else {
			var dateShowJss = [];
			var dateShowJss2 = [];
		}

		var envie = '';
		var inputs = $('.show_dates');
		for (var i = 0; i < inputs.length; i++) {
			if (i < inputs.length - 1) {
				envie += $(inputs[i]).val() + ',';
			} else {
				envie += $(inputs[i]).val();
			}
		}

		var unavailableDates = envie.split(',');

		Date.prototype.toShortFormat = function() {
			var month_names = [
				'January',
				'February',
				'March',
				'April',
				'May',
				'Jun',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December'
			];
			var day = this.getDate();
			var month_index = this.getMonth();
			var year = this.getFullYear();
			return '' + day + '-' + month_names[month_index] + '-' + year;
		};

		var v2te = [];
		if (inputs.length > 0) {
			var arr1 = $.merge(dateShowJss, unavailableDates);
			var sortedDates = arr1.sort(SortByDate);

			$('#dateShow').append(dateShow);

			var arrayDates = '';
			for (var a = 0; a < sortedDates.length; a++) {
				var dateAr = sortedDates[a].split('-');
				var newDate = dateAr[1] + '/' + dateAr[0] + '/' + dateAr[2];

				var singleDate = newDate;
				var aa = new Date(newDate);
				var singleDates = formatDate(singleDate);
				var singleFormatDate = new Date(dateFormate2(newDate, '/'));

				v2te.push(singleFormatDate.toShortFormat());

				// 		  dateShow2 += singleFormatDate.toShortFormat() + "(" + dateToDay(singleFormatDate, "/") + ")";

				dateShow2 += singleFormatDate.toShortFormat() + ':: (' + dateToDay(singleFormatDate, '/') + ') <br>';
			}
			var subsDayList = JSON.stringify(v2te);

			$('.total_no_of_orders').val(arr1.length);
			$('.date_show_with_day').html(dateShow2);
			//       $(".date_show_with_day").html(v2te);
			$('#subsDayList_hidden').val(v2te);
		} else {
			var arr1 = dateShowJss;
			$('#dateShow').html(dateShow);

			for (var ii = 0; ii < dateShowJss2.length; ii++) {
				var singleDate = dateShowJss2[ii];
				var singleFormatDate = new Date(dateFormate2(singleDate, '/'));

				v2te.push(singleFormatDate.toShortFormat());

				// 		  dateShow2 += singleFormatDate.toShortFormat() + "(" + dateToDay(singleFormatDate, "/") + ")";

				dateShow2 += singleFormatDate.toShortFormat() + ':: (' + dateToDay(singleDate, '/') + ') <br>';
			}
			var subsDayList = JSON.stringify(v2te);

			$('.total_no_of_orders').val(arr1.length);
			$('.date_show_with_day').html(dateShow2);
			$('#subsDayList_hidden').val(v2te);
			//       $("#subs_day_list").val(v2te);
		}

		$.date = function(orginaldate) {
			var date = new Date(orginaldate);
			var day = date.getDate();
			var month = date.getMonth() + 1;
			var year = date.getFullYear();
			if (day < 10) {
				day = '0' + day;
			}
			if (month < 10) {
				month = '0' + month;
			}
			var date = month + '/' + day + '/' + year;
			return date;
		};
	}

	function dateFormate2(orginaldate, sepSymbol = '/') {
		var date = new Date(orginaldate);
		var day = date.getDate();
		var month = date.getMonth() + 1;
		var year = date.getFullYear();
		if (day < 10) {
			day = '0' + day;
		}
		if (month < 10) {
			month = '0' + month;
		}
		var date = month + sepSymbol + day + sepSymbol + year;
		return date;
	}

	function dateToDay(date, sepSymbol) {
		var weekday = [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ];
		var a = new Date(dateFormate2(date, sepSymbol));

		return weekday[a.getDay()];
	}

	function SortByDate(a, b) {
		var amyDate = a.split('-');
		var aNewDate = new Date(amyDate[1] + ',' + amyDate[0] + ',' + amyDate[2]).getTime();
		var bmyDate = b.split('-');
		var bNewDate = new Date(bmyDate[1] + ',' + bmyDate[0] + ',' + bmyDate[2]).getTime();
		return aNewDate < bNewDate ? -1 : aNewDate > bNewDate ? 1 : 0;
	}

	function formatDate(date) {
		var d = new Date(date),
			month = '' + (d.getMonth() + 1),
			day = '' + d.getDate(),
			year = d.getFullYear();

		if (month.length < 2) month = '0' + month;
		if (day.length < 2) day = '0' + day;

		return [ day, month, year ].join('-');
	}

	// ====== Subscription update in checkout page ============

	$('.apply_subscription').click(function(e) {
		e.preventDefault();

		var subsList = $('#subsDayList_hidden').val();
		$('#subs_day_list').val(subsList);

		$('body').trigger('update_checkout');

		var subscription_days = $('.date_show_with_day').html();
		var subs_day_array = subscription_days.split(',');
		var sub_day_count = $('.total_no_of_orders').val();

		console.log(subscription_days);
		console.log(subs_day_array);

		var data = {
			action: 'subscriptionUpdate',
			subscription_days: subs_day_array,
			sub_day_count: sub_day_count
		};

		$.ajax({
			type: 'POST',
			url: custom_script_object.ajaxurl,
			data: data,
			success: function(data) {
				// alert(data);
				//$("body").append(data);
				//         $("body").trigger("updated_checkout");
				$('form.checkout').load($('form.checkout'));
				localStorage.setItem('cancleSubsBtn', 'show');
			}
		});
	});

	// Cancle subcription
	$('.cancle_subscription').click(function(e) {
		e.preventDefault();

		$('#subs_day_list').val('');
		$('form.checkout').load($());

		var data = {
			action: 'cancleSubs'
		};

		$.ajax({
			type: 'POST',
			url: custom_script_object.ajaxurl,
			data: data,
			success: function(data) {
				$('form.checkout').load($('form.checkout'));

				localStorage.setItem('cancleSubsBtn', 'hide');

				$('.sub_day').removeClass('active');

				if ($('.delivery_day_list').is(':visible')) {
					$('.delivery_day_list').hide();
				}

				var activeSttus = 0;
				let sub_day = 0;
				let sub_week = parseInt($('.sub_week').val());

				$('.d' + sub_day).remove();
				dates(sub_day, sub_week, activeSttus);

				//$('.delivery_day_list h4, .delivery_day_list .date_show_with_day').hide();

				// 				$('.delivery_day_list').hide();

				//         		alert(data);
				//         		$("body").trigger("updated_checkout");

				location.reload();
			}
		});
	});

	/* ================= End of subscription  ========================= */

	$('input.ig_es_form_field_email').attr('placeholder', 'Enter your email');

	/*
	 * 
	 * Datepicker in checkout page
	 * */
	var currentTime = new Date();

	var currentHour = currentTime.getHours();

	var dateRestiction = 1;

	// if(currentHour > 11){
	//     dateRestiction = 1;
	// }

	var $dp1 = $('#calendar');

	$dp1.datepicker({
		// changeYear: true,
		// changeMonth: true,
		dateFormat: 'yy-m-dd',
		yearRange: '-100:+1',
		minDate: dateRestiction
	});

	/************ Hiding empty rating *************/
	$('.star-rating').parent().siblings('.empty_rating').hide();

	/*	
 var user_data = { action: "isUserLoggedIn" };

    $.ajax({
      type: "POST",
      url: custom_script_object.ajaxurl,
      data: user_data,
      success: function (data) {
        if(data === 'not_logged_in'){
		if($('body').hasClass('woocommerce-account')){
		$('.um_container').css('display', 'block');
		}else{
		
		}
	}
        //$("body").append(data);
        //$("body").trigger("updated_checkout");
      },
    });

$('.um_inner .close_button, .um_container').on('click', function(e){
	e.preventDefault();
	$('.um_container').hide();
});

$('.woodmart-header-links .wd-tools-text').on('click', function(){

$.ajax({
      type: "POST",
      url: custom_script_object.ajaxurl,
      data: user_data,
      success: function (data) {
        if(data === 'not_logged_in'){
		$('.um_container').show();	
	}
        
      },
    });	
});
*/

	//$('.login-form-side .login-form-footer').append('<p>sdfsdfsdfsdf</p>');

	/********************************************
 * Hiding cod description based on condition
 * *****************************************/
	/*
	$('#billing_state').on('change', function(e){
		var billing_state = $('#billing_state').val();	
		if(billing_state === 'BD-13' || billing_state === 'BD-08' || billing_state === 'BD-10' ){
			$('.courier_popup').css({
				"left" : "-320px",
				"opacity" : "0",
				"transition" : "all .5s"
			});
			
			//$('.payment_box.payment_method_cod').css('display', 'none');
		}else{
			
			$('.courier_popup').css({
				"display" : "block",
				"left" : "20px",
				"opacity" : "1",
				"transition" : "all .5s"
			});
			
			setTimeout(function() { $(".courier_popup").css({
				"left" : "-320px",
				"opacity" : "0",
				"transition" : "all .5s"
			}); }, 10000);			
			
		}
		
	});
	*/
}); //end document

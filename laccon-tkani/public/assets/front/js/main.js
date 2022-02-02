function showCart(cart) {
    $('#cart-modal .modal-body').html(cart);
    //$('#cart-modal').modal();
    let cartQty = $('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
    $('.mini-cart-qty').text(cartQty);

    if (cartQty) {
        $('#cart-modal .modal-footer .btn-cart').removeClass('d-none');
    } else {
        $('#cart-modal .modal-footer .btn-cart').addClass('d-none');
    }
}

function clearCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            let now_location = document.location.pathname;
            if (now_location == '/cart/checkout') {
                location = '/cart/checkout';
            } else {
                showCart(result);
            }
        },
        error: function () {
            alert('Error');
        }
    });
}

function getCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            showCart(result);
        },
        error: function () {
            alert('Error');
        }
    });
}


$(function(){

	$('.banner-section__slider').slick({
		dots: true,
		prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"><img src="assets/front/js/img/arrow-left.svg" alt=""></button>',
		nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"><img src="assets/front/js/img/arrow-right.svg" alt=""></button>',
		responsive: [
	    	{
		      breakpoint: 969,
		      settings: {
		        arrows: false
		      }
		  	}
  		]
	});

	$('.product-card__img-slider').slick({
		dots: true,
		prevArrow: '<button class="product-card-section__slider-btn product-card-section__slider-btnprev"><img src="assets/front/js/img/arrow-left2.svg" alt=""></button>',
		nextArrow: '<button class="product-card-section__slider-btn product-card-section__slider-btnnext"><img src="assets/front/js/img/arrow-right2.svg" alt=""></button>',
		responsive: [
	    	{
		      breakpoint: 1140,
		      settings: {
		        arrows: false
		      }
		  	}
  		]
	});


	$('.tab').on('click', function(e){
		e.preventDefault();

		$($(this).siblings()).removeClass('tab--active');
		$($(this).parent().siblings().find('div')).removeClass('tabs-content--active');

		$(this).addClass('tab--active');
		$($(this).attr('href')).addClass('tabs-content--active');

		$('.product-slider').slick('setPosition');
	});

	$('.product-item__favorite').on('click', function(){
		$(this).toggleClass('product-item__favorite--active');
	});

	$('.product-card__icon-favorite').on('click', function(){
		$(this).toggleClass('product-card__icon-favorite--active');
	});


	$('.product-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<button class="product-slider__slider-btn product-slider__slider-btnprev"><img src="assets/front/js/img/arrow-left2.svg" alt=""></button>',
		nextArrow: '<button class="product-slider__slider-btn product-slider__slider-btnnext"><img src="assets/front/js/img/arrow-right2.svg" alt=""></button>',
		responsive: [
	    	{
		      breakpoint: 1301,
		      settings: {
		        arrows: false,
		        dots: true
		      }
		  	},
		  	{
		  		breakpoint: 1201,
		      	settings: {
		      		arrows: false,
		        	dots: true,
			        slidesToShow: 3
		  		}
		  	},
		  	{
		  		breakpoint: 870,
		      	settings: {
		      		arrows: false,
		        	dots: true,
			        slidesToShow: 2
		  		}
		  	},
		  	{
		  		breakpoint: 630,
		      	settings: {
		      		arrows: false,
		        	dots: true,
			        slidesToShow: 1
		  		}
		  	}
  		]
	});


	$('.filter-style').styler();

	$('.filter__item-drop').on('click', function(){
		$(this).toggleClass('filter__item-drop--active');
		$(this).next().slideToggle(200);
	});

	$(".js-range-slider").ionRangeSlider({
		type: "double"
	});

	$('.catalog__filter-btngrid').on('click', function(){
		$(this).addClass('catalog__filter-button--active');
		$('.catalog__filter-btnline').removeClass('catalog__filter-button--active');
		$('.product-item__wrapper').removeClass('product-item__wrapper--list');
	});

	$('.catalog__filter-btnline').on('click', function(){
		$(this).addClass('catalog__filter-button--active');
		$('.catalog__filter-btngrid').removeClass('catalog__filter-button--active');
		$('.product-item__wrapper').addClass('product-item__wrapper--list');
	});

	$(".rate-yo").rateYo({
    	spacing   : "9px",
    	normalFill: "#ebe3df",
    	multiColor: {
	      "startColor": "#fb925e",
	      "endColor"  : "#fbef5e"
    	}
  	});

  	$('.menu__btn').on('click', function(){
  		$('.menu-mobile__list').toggleClass('menu-mobile__list--active')
  	});

  	$('.footer__topdrop').on('click', function(){
  		$(this).next().slideToggle();
  		$(this).toggleClass('footer__topdrop--active');
  	});

  	$('.aside__btn').on('click', function(){
  		$(this).next().slideToggle();
  	});

    // Cart
    $('.addtocart').on('submit', function () {
        let form = $(this);
        $.ajax({
            url: form.attr('action'),
            data: form.serialize(),
            type: 'post',
            success: function (result) {
                showCart(result);
            },
            error: function (msg) {
                alert('Error!');
                console.log(msg.responseJSON);
                form[0].reset();
            }
        });
        return false;
    });

    $('#cart-modal .modal-body, .cart-table').on('click', '.del-item', function () {
        $.ajax({
            url: $(this).data('action'),
            type: 'get',
            success: function (result) {
                let now_location = document.location.pathname;
                if (now_location == '/cart/checkout') {
                    location = '/cart/checkout';
                } else {
                    showCart(result);
                }
            },
            error: function (msg) {
                alert('Error!');
            }
        });
    });

});

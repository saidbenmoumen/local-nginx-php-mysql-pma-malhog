/*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$(document).ready(function() {

    function add_backgroundcolor(bgcolor) {
	$('<style type="text/css">.product-additional-info .add_to_compare:hover, .product-additional-info .prowish:hover,.pagination .page-list li a,.wb-wishlist-product .cartb:hover, .wb-productscompare-item .cartb:hover,.custom-radio input[type="radio"]:checked + span,.custom-checkbox input[type="checkbox"] + span .checkbox-checked,.scroll-box-arrows i:hover,.cart-c,.view-wb-dropdown-additional.show, .view-wb-dropdown-additional:hover,#search_block_top .btn.button-search,.quickview .arrows .arrow-up:hover, .quickview .arrows .arrow-down:hover,.block-social li a:hover,.btn-primary.focus, .btn-primary:focus, .btn-primary:hover, .btn-primary.active, .btn-primary:active, .open > .btn-primary.dropdown-toggle, .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open > .btn-primary.dropdown-toggle.focus, .open > .btn-primary.dropdown-toggle:focus, .open > .btn-primary.dropdown-toggle:hover, .btn-primary.disabled.focus, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary:disabled.focus, .btn-primary:disabled:focus, .btn-primary:disabled:hover,.blog_mask .icon:hover{ background:#' + bgcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.js-terms a,.page-my-account #content .links a:hover i,.facet-title,#wbsearch_data .items-list li .content_price .price,.wb-compare-wishlist-button .wish:hover span, .wb-compare-wishlist-button .wish:focus span, .wb-compare-wishlist-button .wb-compare-button:hover span, .wb-compare-wishlist-button .wb-compare-button:focus span,#blockcart-modal .product-name,.footer-container li a:hover, .fthr .block:hover, .fthr .data a:hover, .foot-payment li i:hover,.star::after,.star.star_on::after,.wb-menu-vertical ul li.level-1:hover > a,.shop-c h4, .cartdet h4{ color:#' + bgcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.scroll-box-arrows i:hover,.form-control:focus,.blog_mask .icon,.wb-menu-vertical li.level-1 span:hover::after{ border-color:#' + bgcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.blog_post_content_bottom hr,.thumbnail-container .product-price-and-shipping hr{ border-top-color:#' + bgcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.view_menu .more-menu,.wb-menu-vertical .menu-dropdown{ border-bottom-color:#' + bgcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.wb-compare-wishlist-button .wish:hover svg, .wb-compare-wishlist-button .wish:focus svg, .wb-compare-wishlist-button .wb-compare-button:hover svg, .wb-compare-wishlist-button .wb-compare-button:focus svg,#footer_contact .icon svg,.d-search:hover svg, .user-info:hover svg, .blockcart:hover svg{ fill:#' + bgcolor + '}</style>').appendTo('head');
	    
	if ($(window).width() >= 768){
		$('<style type="text/css">.thumbnail-container .product-flags .new{ background:#' + bgcolor + '}</style>').appendTo('head');
		$('<style type="text/css">.thumbnail-container .product-flags .new::before,.thumbnail-container .product-flags .new::after{ border-top-color:#' + bgcolor + '}</style>').appendTo('head');
        $('<style type="text/css">.thumbnail-container .product-flags .new::before{ border-left-color:#' + bgcolor + '}</style>').appendTo('head');
		$('<style type="text/css">.thumbnail-container .product-flags .new::after{ border-right-color:#' + bgcolor + '}</style>').appendTo('head');
    }
     if (LANG_RTL == '1') {
     	$('<style type="text/css">{ border-bottom-color:#' + bgcolor + ' !important}</style>').appendTo('head');
     }
    }
    function add_hovercolor(hcolor) {
	$('<style type="text/css">.product-additional-info .add_to_compare, .product-additional-info .prowish,.owl-carousel.owl-theme .owl-controls .owl-buttons div:hover,.owl-controls .owl-page.active span,.owl-theme .owl-controls .owl-page span,#scroll,.pagination .page-list li a:hover,.pagination .page-list li a:focus,.pagination .page-list li.current a,.wb-wishlist-product .cartb, .wb-productscompare-item .cartb,.product-tab .nav-tabs .nav-item a.active::before,.copy,.btn-primary,.owl-theme .owl-dots .owl-dot span,.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span,.deliveryinfo ul:hover li:nth-child(1),.thumbnail-container .button-group .cartb:hover, .thumbnail-container .button-group .wb-compare-button:hover, .thumbnail-container .button-group .quick-view:hover, .thumbnail-container .button-group .wish:hover,.pro-tab li a.active,.owl-theme .owl-nav [class*="owl-"]:hover{ background:#' + hcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.whishlist-am a,.noty_text_body a,.product-tab .nav-tabs .nav-link.active,.parallex .item h2,.price,a:hover, a:focus, button:focus{ color:#' + hcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.thumbnail-container .button-group .cartb:hover,.thumbnail-container .button-group .wb-compare-button:hover,.thumbnail-container .button-group .quick-view:hover,.thumbnail-container .button-group .wish:hover,.owl-theme .owl-dots .owl-dot span,.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span,.testibr .item,.deliveryinfo ul:hover,.pro-tab li a.active,.cate:hover .ctimg{ border-color:#' + hcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.links h3 hr, .c-info hr{ border-top-color:#' + hcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.homeslider-container .owl-theme .owl-pagination .owl-page span,.homeslider-container .owl-theme .owl-pagination .owl-page.active span, .homeslider-container .owl-theme .owl-pagination .owl-page:hover span,.testibr .tbleft::before,.testibr .tbright::after,.deliveryinfo ul a:hover::after{ border-bottom-color:#' + hcolor + '}</style>').appendTo('head');
	$('<style type="text/css">.block_newsletter li svg{ fill:#' + hcolor + '}</style>').appendTo('head');	
    if ($(window).width() >= 768){
    	$('<style type="text/css">.sale{ background:#' + hcolor + '}</style>').appendTo('head');
    	$('<style type="text/css">.sale::before,.sale::after{ border-top-color:#' + hcolor + '}</style>').appendTo('head');
        $('<style type="text/css">.sale::before{ border-left-color:#' + hcolor + '}</style>').appendTo('head');
		$('<style type="text/css">.sale::after{ border-right-color:#' + hcolor + '}</style>').appendTo('head');
    }
    if ($(window).width() <= 991){
    	$('<style type="text/css">{ background:#' + hcolor + '}</style>').appendTo('head');
        $('<style type="text/css">{ fill:#' + hcolor + '}</style>').appendTo('head');
    } 
    }
    
    $('.control').click(function() {

	if ($(this).hasClass('inactive')) {
	    $(this).removeClass('inactive');
	    $(this).addClass('active');
	    if (LANG_RTL == '1') {
		$('.wb-demo-wrap').animate({left: '0'}, 500);
	    } else {
		$('.wb-demo-wrap').animate({right: '0'}, 500);
	    }
	    $('.wb-demo-wrap').css({'box-shadow': '0 0 10px #adadad', 'background': '#fff'});
	    $('.wb-demo-option').animate({'opacity': '1'}, 500);
	    $('.wb-demo-title').animate({'opacity': '1'}, 500);
	} else {
	    $(this).removeClass('active');
	    $(this).addClass('inactive');
	    if (LANG_RTL == '1') {
		$('.wb-demo-wrap').animate({left: '-200px'}, 500);
	    } else {
		$('.wb-demo-wrap').animate({right: '-200px'}, 500);
	    }
	    $('.wb-demo-wrap').css({'box-shadow': 'none', 'background': 'transparent'});
	    $('.wb-demo-option').animate({'opacity': '0'}, 500);
	    $('.wb-demo-title').animate({'opacity': '0'}, 500);
	}
    });
    $('#backgroundColor, #hoverColor').each(function() {
	var $el = $(this);
	/* set time */var date = new Date();
	date.setTime(date.getTime() + (1440 * 60 * 1000));
	$el.ColorPicker({color: '#555555', onChange: function(hsb, hex, rgb) {
		$el.find('div').css('backgroundColor', '#' + hex);
		switch ($el.attr("id")) {
		    case 'backgroundColor' :
			add_backgroundcolor(hex);
			$.cookie('background_color_cookie', hex, {expires: date});
			break;
		    case 'hoverColor' :
			add_hovercolor(hex);
			$.cookie('hover_color_cookie', hex, {expires: date});
			break;
		    }
	    }});
    });
    /* set time */var date = new Date();
    date.setTime(date.getTime() + (1440 * 60 * 1000));
    if ($.cookie('background_color_cookie') && $.cookie('hover_color_cookie')) {
	add_backgroundcolor($.cookie('background_color_cookie'));
	add_hovercolor($.cookie('hover_color_cookie'));
	var backgr = "#" + $.cookie('background_color_cookie');
	var activegr = "#" + $.cookie('hover_color_cookie');
	$('#backgroundColor div').css({'background-color': backgr});
	$('#hoverColor div').css({'background-color': activegr});
    }
    /*Theme mode layout*/
    if (!$.cookie('mode_css') && WB_mainLayout == "boxed"){
	$('input[name=mode_css][value=box]').attr("checked", true);
    } else if (!$.cookie('mode_css') && WB_mainLayout == "fullwidth") {
	$('input[name=mode_css][value=wide]').attr("checked", true);
    } else if ($.cookie('mode_css') == "boxed") {
	$('body').removeClass('fullwidth');
	$('body').removeClass('boxed');
	$('body').addClass('boxed');
	$.cookie('mode_css', 'boxed');
	$.cookie('mode_css_input', 'box');
	$('input[name=mode_css][value=box]').attr("checked", true);
    } else if ($.cookie('mode_css') == "fullwidth") {
	$('body').removeClass('fullwidth');
	$('body').removeClass('boxed');
	$('body').addClass('fullwidth');
	$.cookie('mode_css', 'fullwidth');
	$.cookie('mode_css_input', 'wide');
	$('input[name=mode_css][value=wide]').attr("checked", true);
    }
    $('input[name=mode_css][value=box]').click(function() {
	$('body').removeClass('fullwidth');
	$('body').removeClass('boxed');
	$('body').addClass('boxed');
	$.cookie('mode_css', 'boxed');
        fullwidth_click();
    });
    $('input[name=mode_css][value=wide]').click(function() {
	$('body').removeClass('fullwidth');
	$('body').removeClass('boxed');
	$('body').addClass('fullwidth');
	$.cookie('mode_css', 'fullwidth');
        fullwidth_click();
    });
    $('.cl-td-layout a').click(function() {
	var id_color = this.id;
	$.cookie('background_color_cookie', id_color.substring(0, 6));
	$.cookie('hover_color_cookie', id_color.substring(7, 13));
	add_backgroundcolor($.cookie('background_color_cookie'));
	add_hovercolor($.cookie('hover_color_cookie'));
	var backgr = "#" + $.cookie('background_color_cookie');
	var activegr = "#" + $.cookie('hover_color_cookie');
	$('#backgroundColor div').css({'background-color': backgr});
	$('#hoverColor div').css({'background-color': activegr});
    });
    /*reset button*/$('.cl-reset').click(function() {
	/* Color */$.cookie('background_color_cookie', '');
	$.cookie('hover_color_cookie', '');
	/* Mode layout */$.cookie('mode_css', '');
	location.reload();
    });
    function fullwidth_click(){
        $('.wbFullWidth').each(function() {
                var t = $(this);
                var fullwidth = $('main').width(),
                    margin_full = fullwidth/2;
        if (LANG_RTL != 1) {
                t.css({'left': '50%', 'position': 'relative', 'width': fullwidth, 'margin-left': -margin_full});
        } else{
                t.css({'right': '50%', 'position': 'relative', 'width': fullwidth, 'margin-right': -margin_full});
        }
    });
    }
});
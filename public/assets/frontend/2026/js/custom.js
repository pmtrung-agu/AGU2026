(function($) {
	"use strict";
	
	// ______________ Global Loader
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})
	
	
	// ______________Rating Stars
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	
	// ______________Active Class
	$(".horizontalMenu-list li a").each(function(e) {
		var pageUrl = window.location.href.split(/[?#]/)[0];
		if (this.href == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("active"); // add active to li of the current link
			$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
			$(this).parent().parent().prev().click(); // click the item to make it drop
		}
	});

	// ______________ Back to Top
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$(document).on("click", "#back-to-top", function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 0);
		return false;
	});
	
	// ______________Quantity-right-plus
	var quantitiy = 0;
	$(document).on('click','.quantity-right-plus', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val()); 
		$('#quantity').val(quantity + 1); 
	});
	$(document).on('click', '.quantity-left-minus', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 0) {
			$('#quantity').val(quantity - 1);
		}
	});
	
	
	
	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function(e) {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#f9faff',
				lineCap: ''
			});
		});
	}
	const DIV_CARD = 'div.card';
	
	// ___________TOOLTIP
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})
	
	// __________POPOVER
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	return new bootstrap.Popover(popoverTriggerEl)
	})
	// By default, Bootstrap doesn't auto close popover after appearing in the page
	$(document).on('click', function (e) {
		$('[data-bs-toggle="popover"],[data-original-title]').each(function () {
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				(($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
			}

		});
	});
	
	// ______________Card Remove
	$(document).on('click', '[data-bs-toggle="card-remove"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});
	
	// ______________Card Collapse
	$(document).on('click', '[data-bs-toggle="card-collapse"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// ______________Card Full Screen
	$(document).on('click', '[data-bs-toggle="card-fullscreen"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	

})(jQuery);

// ______________ Modal
$(document).ready(function(){
	//$("#myModal").modal('show');
	var load = 0;
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() >= $(document).height()-300 && load ==0){
		$("#calendar").html('<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;hl=vi&amp;bgcolor=%23FFFFFF&amp;src=agu.edu.vn_qf2qof63stvjftctim9u8clh6c%40group.calendar.google.com&amp;color=%23853104&amp;ctz=Asia%2FSaigon" style="border-width:0" width="100%" height="350" frameborder="0" scrolling="no"></iframe>');
		load = 1;
		setInterval(function () {
			$(".loading").hide();
		}, 3000);
		}
	});
});

$(document).ready(function(){
	$(".sticky").parent().addClass('header-absolute');
  });

/* footer year */
if (document.getElementById("year")) {
    document.getElementById("year").innerHTML = new Date().getFullYear();
}
/* footer year */
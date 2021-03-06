jQuery(function($) {'use strict',

	
	// all Parallax Section
	$(window).load(function(){'use strict',
		$("#services").parallax("50%", 0.3);
		$("#clients").parallax("50%", 0.3);
	});
	
	// portfolio filter
	$(window).load(function(){'use strict',
		$portfolio_selectors = $('.portfolio-filter >li>a');
		if($portfolio_selectors!='undefined'){
			$portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : '.col-sm-3',
				layoutMode : 'fitRows'
			});
			
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}
	});
	
	//Pretty Photo
	 $("a[data-gallery^='prettyPhoto']").prettyPhoto({
	  social_tools: false
	 });


	// // Contact form validation
	// var form = $('.contact-form');
	// form.submit(function () {'use strict',
	// 	$this = $(this);
	// 	$.post($(this).attr('action'), function(data) {
	// 		$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
	// 	},'json');
	// 	return false;
	// });


	// Navigation Scroll
	$(window).scroll(function(event) {
		Scroll();
	});

	$('.navbar-collapse ul li a').click(function() {
		if ( ! $(this).hasClass('logout')) {
			$('html, body').animate({scrollTop: $(this.hash).offset().top}, 1000);
			return false;
		}  
	});

});

// Preloder script
jQuery(window).load(function(){'use strict';
	$(".preloader").delay(1600).fadeOut("slow").remove();
});

//Preloder script
jQuery(window).load(function(){'use strict';

	// Slider Height
	var slideHeight = $(window).height();
	$('#home .carousel-inner .item, #home .video-container').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#home .carousel-inner .item, #home .video-container').css('height',slideHeight);
	});

});


// User define function
function Scroll() {
	var contentTop      =   [];
	var contentBottom   =   [];
	var winTop      =   $(window).scrollTop();
	var rangeTop    =   200;
	var rangeBottom =   500;
	$('.navbar-collapse').find('.scroll a').each(function(){
		if ( ! $(this).hasClass('logout')) {		
			contentTop.push( $( $(this).attr('href') ).offset().top);
			contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
		}
	})
	$.each( contentTop, function(i){
		if ( winTop > contentTop[i] - rangeTop ){
			$('.navbar-collapse li.scroll')
			.removeClass('active')
			.eq(i).addClass('active');			
		}
	})

};


// Skill bar Function
jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});

setTimeout(function(){
	$('.message-box').fadeOut('slow');
}, 5000);

// Remove #_=_ that Facebook adds on redirect
// Test for the ugliness.
if (window.location.hash == '#_=_'){
    // Check if the browser supports history.replaceState.
    if (history.replaceState) {
        // Keep the exact URL up to the hash.
        var cleanHref = window.location.href.split('#')[0];
        // Replace the URL in the address bar without messing with the back button.
        history.replaceState(null, null, cleanHref);
    } else {
        // Well, you're on an old browser, we can get rid of the _=_ but not the #.
        window.location.hash = '';
    }

}

// Custom JS code
$(document).ready(function(){

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	// Firefox disables the buttons so we need to re-enable them back on page load:)
	$('.play-choice').removeAttr('disabled');

	$('[data-toggle="tooltip"]').tooltip()

	$('.item-save').off('click').on('click', function(){
		$('.item-form').submit();
	});

	// Articles
	$('.delete-article').off('click').on('click', function(){
		$('#delete-article-modal').modal('show');
	});

	$('#delete-article-button').off('click').on('click', function(){
		$('#delete-article-form').submit();
	});

	$('.show-article').off('click').on('click', function(){
		$('.show-article').removeClass('active');
		$(this).addClass('active');
		$('.show-article-title').html($(this).data('title'));
		$('.show-article-category').html($(this).data('category'));
		$('.show-article-content').html($(this).data('content'));
		var editLink = '/articles/' + $(this).data('id') + '/edit';
		$('.edit-article').attr('href', editLink);
		$('#article-id').val($(this).data('id'));
	});

	// Questions
	$('.delete-question').off('click').on('click', function(){
		$('#delete-question-modal').modal('show');
	});

	$('#delete-question-button').off('click').on('click', function(){
		$('#delete-question-form').submit();
	});

	$('.show-question').off('click').on('click', function(){
		$('.show-question').removeClass('active');
		$(this).addClass('active');
		$('.show-question-description').html($(this).data('description'));
		$('.show-question-category').html($(this).data('category'));
		$('.show-question-answer').html($(this).data('answer'));
		var editLink = '/questions/' + $(this).data('id') + '/edit';
		$('.edit-question').attr('href', editLink);
		$('#question-id').val($(this).data('id'));
	});

});

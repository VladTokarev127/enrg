$(function() {

	$('.header__all-link').click(function(e) {
		e.preventDefault();
		$(this)
			.toggleClass('is-active')
			.next()
			.slideToggle(300);
	});

	$('.header__menu').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('is-active');
		$('.header__mobile').toggleClass('is-active');
		$('body').toggleClass('is-fixed');
	});

});

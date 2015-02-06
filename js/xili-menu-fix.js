(function ($) {
	$('#menu-language-switcher').find('a').each(function(index) {
		if(($(this).attr('href')).indexOf("page_id") > 0) {
			$(this).hide();
		}
	});
})(jQuery);
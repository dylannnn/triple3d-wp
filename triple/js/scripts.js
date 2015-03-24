(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		//Prevent Empty Searches
		$('form.searchForm').submit(function(e) {
		    var s = $( this ).find(".search-input");
		    if (!s.val()) {
		        e.preventDefault();
		        s.attr('placeholder','Your search is empty!');
		        s.focus();
		    }
		});
		$('.mIconContainer').click(function(e) {
			var $nav = $("#mainNav .nav");
			$($nav).stop(true, true).slideToggle("200");
			e.stopPropagation();
		});
		
		$(window).resize(function(){
			var menu = $('.navWrapper .nav');
			var w = $(window).width();  
			if(w > 920 ) {  
				menu.removeAttr('style');  
			}  
		}); 
	});
	
})(jQuery, this);
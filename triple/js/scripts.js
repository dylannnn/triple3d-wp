(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		//Search button
		$('.searchWrapper .searchBtn').mouseenter(function (e) {
			var $marginRight = $('.searchWrapper .searchForm .search');
			var $formVal = $('.searchWrapper .search-input').val();
			if (!$formVal) {
				$marginRight.animate({
					marginRight: parseInt($marginRight.css('marginRight'),10) == 0 ? -($marginRight.outerWidth()+3) : 0
				})
			}
		});
		//Prevent Empty Searches
        var s = $(this).find(".search-input"),
            sMes = s.attr('placeholder');
		$('form.searchForm').submit(function (e) {
		    if (!s.val()) {
		        e.preventDefault();
		        s.attr('placeholder', 'Type in a word');
		        s.focus();
		    }
		});
        $(document).on('click', function (e) {
            if ($(e.target).closest('.searchForm').length === 0) {
                $('.search-input').attr('placeholder', sMes);
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
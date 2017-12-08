$(function() {
	// Initialize Slidebars
	var controller = new slidebars();
	controller.init();
	$( '.trigger-menu' ).on( 'click', function ( event ) {

		if ($('.three-bars-icon').hasClass('close')) {
			$('.three-bars-icon').removeClass('close');
		}
		else {
			$('.three-bars-icon').addClass('close');
		}
		// Stop default action and bubbling
		event.stopPropagation();
		event.preventDefault();

		// Toggle the Slidebar with id 'id-2'
		controller.toggle( 'id-2');
	});
});

$(function () {
	$('.header .dropdown-menu li:has(ul) > a').append('<i class="fas fa-angle-right"></i>');
	if ($('.left-menu').length) {
	    $(".left-menu ul li").each(function(){
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).addClass('hassub')
	      };
	    });
	    $.each($(".left-menu ul li"), function (index, obj) {
	      if ($(obj).has("ul").length) {
	          $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      }
	    });
	    $(".left-menu > ul > li").click(
	      function() {
	        $(".left-menu > ul > li").removeClass('active');
	        $(this).addClass('active');
	        if ($(this).has("ul").length) {
	          $(".left-menu  > ul > li").not('.active').find('ul').slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".left-menu > ul > li > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	          $(".left-menu > ul > li > ul > li ul").slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	     $(".left-menu > ul > li > ul > li  > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(".left-menu > ul > li > ul > li  > ul > li").removeClass('active');
	        	$(this).addClass('active');
	        	$(".left-menu > ul > li > ul > li  > ul > li ul").slideUp(400);
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	}
})
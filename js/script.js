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
	$( controller.events ).on( 'closing', function ( event ) {
		$('.nav-mobile li').each(function(index, el) {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$(this).find('ul').eq(0).slideUp(400);
			}
		});
	} );
	if ($(window).width() <= 1024) {
		var html = '<ul class="nav-mobile">' + $('.main-nav .nav').html() + '</ul>';
		$('.sidebar .content').html(html);
		$('.nav-mobile li a').each(function(index, el) {
			$(this).removeAttr('class');
			$(this).attr({
				'id': '',
				'data-toggle': '',
				'aria-haspopup': '',
			});
		});
		$('.nav-mobile li').each(function(index, el) {
			$(this).removeAttr('class')
		});
		$('.nav-mobile ul').each(function(index, el) {
			$(this).removeAttr('class');
		});
	}
});

$(function () {
	$('.nav li:has(ul) > a').addClass('hassub');
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
	if ($('.nav-mobile').length) {
	    $(".nav-mobile li").each(function(){
	      if ($(this).has("ul").length) {
	        $(this).find('a').eq(0).addClass('hassub')
	      };
	    });
	    $.each($(".nav-mobile li"), function (index, obj) {
	      if ($(obj).has("ul").length) {
	          $(obj).has("ul").find("a:first").attr('href', 'javascript:void(0)');
	      }
	    });
	    $(".nav-mobile > li").click(
	      function() {
	        $(".nav-mobile  > li").removeClass('active');
	        $(this).addClass('active');
	        if ($(this).has("ul").length) {
	          $(".nav-mobile  > ul > li").not('.active').find('ul').slideUp(400);
	          $(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".nav-mobile > li > ul > li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(this).addClass('active');
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	    $(".nav-mobile > li > ul > li > ul >li ").click(
	      function() {
	        if ($(this).has("ul").length) {
	        	$(this).addClass('active');
	        	$(this).find('ul').eq(0).slideDown(400);
	        };
	      }
	    );
	}
	$('#reviews .rate span').click(function(event) {
   		var index = $(this).attr('index');
   		$('#reviews .rate span').each(function(index, el) {
   			$(this).removeClass('active');
   		});
   		for (var i = 1; i <= index; i++) {
   			$('#reviews .rate').find('span').eq(i).addClass('active')
   		}
   		$('.rateinput').val(index);
   	});
	$('#reviews .rate span').hover(function() {
		var index = $(this).attr('index');
   		$('#reviews .rate span').each(function(index, el) {
   			$(this).removeClass('hover');
   		});
   		for (var i = 1; i <= index; i++) {
   			$('#reviews .rate').find('span').eq(i).addClass('hover')
   		}
	}, function() {
		$('#reviews .rate span').each(function(index, el) {
   			$(this).removeClass('hover');
   		});
	});
})
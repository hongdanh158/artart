function product_thumb(){
  $('.product-thumb ul').slick({
		vertical: true,
		slidesToShow: 4,
		asNavFor: '.big-img ul',
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 468,
				settings: {
					vertical: false
				}
			},
			{
				breakpoint: 360,
				settings: {
					slidesToShow: 3,
					vertical: false
				}
			}
		]
	});
}

function big_thumb(){
  $('.big-img ul').slick({
		fade: true,
		dots: false,
		arrows: false,
		swipe: false,
		asNavFor: '.product-thumb ul',
		adaptiveHeight: true
	});
}

function add_cart(){
  $(".btn-add-cart").click(function(){
		var _this = $(this);
		var _id = _this.attr("name");
		var quantity = $("#quantity_"+_id).val();
		var _link = _this.attr("href") + "&quantity=" + quantity;
		$.get(_link, function(data){
			alert(data);location.reload();
		});
	});
}

function add_review(){
  $("#Reviewform").submit(function(e){
    var url = "/review/add";
    $.ajax({
			type: "POST",
      url: url,
      data: $("#Reviewform").serialize(),
      success: function(data){
        //$("#review_list").prepend(data);
        alert(data);
      }
		});
  	e.preventDefault();
  });
}
function add_cart_all(){
  $("#addCartForm").submit(function(e) {
    var url = "/cart/add"; // the script where you handle the form input.
    $.ajax({
			type: "POST",
      url: url,
      data: $("#addCartForm").serialize(), // serializes the form's elements.
      success: function(data){
				alert(data); // show response from the php script.
				location.reload();
      }
		});
  	e.preventDefault(); // avoid to execute the actual submit of the form.
	});
}

function image_popup(){
  $('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
					verticalFit: true
			}
	});
}

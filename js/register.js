function upload_hinhanh(){
	$(".dinhkem").change(function() {
        var formData = new FormData($("#dinhkemform")[0]);$("#progressbar").show();
        $.ajax({
            url: "user/image/uploads", type: "POST",
						cache: false, contentType: false,
            data: formData, processData:false,
            success: function(datas) {
                if(datas=='Failed'){
                    alert('Lỗi không thể Upload hình ảnh.');
                } else {
                    $("#list_hinhanh").prepend(datas);
                    delete_hinhanh();
                }
            },
            cache: false, contentType: false, processData: false
        }).fail(function() {
            alert('Lỗi không thể Upload hình ảnh.');
        });
    });
}
function delete_hinhanh(){
	var link_delete; var _this;
	$(".delete_file").click(function(){
		link_delete = $(this).attr("href");	_this = $(this);
		$.ajax({
            url: link_delete,
            type: "GET",
            success: function(datas) {
            	_this.parents("div.items").fadeOut("slow", function(){
									$(this).remove();
            	});
          	}
	    }).fail(function() {
	        alert('Không thể xoá.');
	    });
	});
}

function chontinh(){
	$("#address_1").change(function(){
		$.get('/get/address?id='+$(this).val(), function(tinh){
			$("#address_2").html(tinh);chonhuyen();
		});
	});
}

function chonhuyen(){
	$("#address_2").change(function(){
		$.get('/get/address?id='+$(this).val(), function(huyen){
			$("#address_3").html(huyen);
		});
	});
}

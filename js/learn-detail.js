function add_comment(){
  $("#addCommnentForm").submit(function(e){
    var url = "/kien-thuc/comment/add";
    $.ajax({
			type: "POST",
      url: url,
      data: $("#addCommnentForm").serialize(),
      success: function(data){
        //$("#review_list").prepend(data);
        $("#noidung").val("");alert(data);
      }
		});
  	e.preventDefault();
  });
}

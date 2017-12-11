<?php include('header.php') ?>
    <div class="section register">
    	<div class="d-flex justify-content-center">
    		<h2 class="title">Đăng nhập</h2>
    	</div>
    	<form method="POST" action="/register" id="dinhkemform" enctype="multipart/form-data">
    		<div class="login">
	        	<input type="text" class="form-control" placeholder="(*) Địa chỉ email">
	        	<input type="text" class="form-control" placeholder="(*) Mật khẩu">
	        	<div class="col-md-12 text-center">
	        		<button class="btn btn-primary">Đăng ký</button>
	        	</div>
    		</div>
    	</form>
    </div>
<?php include('footer.php') ?>
</body>
</html>
<?php include('header.php') ?>
    <div class="section register">
    	<div class="d-flex justify-content-center">
    		<h2 class="title">Thông tin tài khoản người dùng</h2>
    	</div>
    	<form method="POST" action="/register" id="dinhkemform" enctype="multipart/form-data">
    		<div class="row registerform">
    			<div class="col-md-6">
	        		<input type="text" class="form-control" placeholder="(*) Địa chỉ email">
	        	</div>
	        	<div class="col-md-6">
	        		<input type="text" class="form-control" placeholder="(*) Mật khẩu">
	        	</div>
	        	<div class="col-md-6">
	        		<input type="text" class="form-control" placeholder="(*) Họ và tên">
	        	</div>
	        	<div class="col-md-6">
	        		<input type="text" class="form-control" placeholder="(*) Điện thoại">
	        	</div>
	        	<div class="col-md-6">
					<select name="address[]" id="address_1" class="form-control">
					  <option value="">Chọn tỉnh</option>
                <option value="01">Thành phố Hà Nội</option>
                <option value="02">Tỉnh Hà Giang</option>
                <option value="04">Tỉnh Cao Bằng</option>
                <option value="06">Tỉnh Bắc Kạn</option>
                <option value="08">Tỉnh Tuyên Quang</option>
                <option value="10">Tỉnh Lào Cai</option>
                <option value="11">Tỉnh Điện Biên</option>
                <option value="12">Tỉnh Lai Châu</option>
                <option value="14">Tỉnh Sơn La</option>
                <option value="15">Tỉnh Yên Bái</option>
                <option value="17">Tỉnh Hoà Bình</option>
                <option value="19">Tỉnh Thái Nguyên</option>
                <option value="20">Tỉnh Lạng Sơn</option>
                <option value="22">Tỉnh Quảng Ninh</option>
                <option value="24">Tỉnh Bắc Giang</option>
                <option value="25">Tỉnh Phú Thọ</option>
                <option value="26">Tỉnh Vĩnh Phúc</option>
                <option value="27">Tỉnh Bắc Ninh</option>
                <option value="30">Tỉnh Hải Dương</option>
                <option value="31">Thành phố Hải Phòng</option>
                <option value="33">Tỉnh Hưng Yên</option>
                <option value="34">Tỉnh Thái Bình</option>
                <option value="35">Tỉnh Hà Nam</option>
                <option value="36">Tỉnh Nam Định</option>
                <option value="37">Tỉnh Ninh Bình</option>
                <option value="38">Tỉnh Thanh Hóa</option>
                <option value="40">Tỉnh Nghệ An</option>
                <option value="42">Tỉnh Hà Tĩnh</option>
                <option value="44">Tỉnh Quảng Bình</option>
                <option value="45">Tỉnh Quảng Trị</option>
                <option value="46">Tỉnh Thừa Thiên Huế</option>
                <option value="48">Thành phố Đà Nẵng</option>
                <option value="49">Tỉnh Quảng Nam</option>
                <option value="51">Tỉnh Quảng Ngãi</option>
                <option value="52">Tỉnh Bình Định</option>
                <option value="54">Tỉnh Phú Yên</option>
                <option value="56">Tỉnh Khánh Hòa</option>
                <option value="58">Tỉnh Ninh Thuận</option>
                <option value="60">Tỉnh Bình Thuận</option>
                <option value="62">Tỉnh Kon Tum</option>
                <option value="64">Tỉnh Gia Lai</option>
                <option value="66">Tỉnh Đắk Lắk</option>
                <option value="67">Tỉnh Đắk Nông</option>
                <option value="68">Tỉnh Lâm Đồng</option>
                <option value="70">Tỉnh Bình Phước</option>
                <option value="72">Tỉnh Tây Ninh</option>
                <option value="74">Tỉnh Bình Dương</option>
                <option value="75">Tỉnh Đồng Nai</option>
                <option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
                <option value="79">Thành phố Hồ Chí Minh</option>
                <option value="80">Tỉnh Long An</option>
                <option value="82">Tỉnh Tiền Giang</option>
                <option value="83">Tỉnh Bến Tre</option>
                <option value="84">Tỉnh Trà Vinh</option>
                <option value="86">Tỉnh Vĩnh Long</option>
                <option value="87">Tỉnh Đồng Tháp</option>
                <option value="89">Tỉnh An Giang</option>
                <option value="91">Tỉnh Kiên Giang</option>
                <option value="92">Thành phố Cần Thơ</option>
                <option value="93">Tỉnh Hậu Giang</option>
                <option value="94">Tỉnh Sóc Trăng</option>
                <option value="95">Tỉnh Bạc Liêu</option>
                <option value="96">Tỉnh Cà Mau</option>
              </select>
	        	</div>
	        	<div class="col-md-6">
	        		<select name="address[]" id="address_2" class="form-control">
                		<option value="">Chọn huyện</option>
                    </select>
	        	</div>
	        	<div class="col-md-6">
	        		<select name="address[]" id="address_3" class="form-control">
                		<option value="">Chọn xã</option>
                    </select>
	        	</div>
	        	<div class="col-md-6">
	        		<input type="text" class="form-control" placeholder="(*) Số nhà, đường khóm, ấp">
	        	</div>
	        	<div class="col-md-6">
	        		<label class="btn btn-outline-info">
                      <input type="file" name="dinhkem[]" class="dinhkem btn btn-info" multiple="" accept="image/*" placeholder="Chọn hình ảnh" style="display:none;">
                      <i class="fas fa-image"></i> Chọn hình đại diện
                  </label>
	        	</div>
	        	<div class="col-md-12 text-center">
	        		<button class="btn btn-primary">Đăng ký</button>
	        	</div>
    		</div>
    	</form>
    </div>
<?php include('footer.php') ?>
</body>
</html>
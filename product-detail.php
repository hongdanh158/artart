<?php include('header.php') ?>
    <div class="product-detail">
    	<div class="product-info">	
			<ul  class="nav nav-pills d-flex justify-content-center">
				<li class="active"><a  href="#product" data-toggle="tab">Product</a></li>
				<li><a href="#description" data-toggle="tab">Description</a></li>
				<li><a href="#images" data-toggle="tab">Images</a></li>
			  	<li><a href="#videos" data-toggle="tab">Videos</a></li>
			  	<li><a href="#reviews">Reviews</a></li>
			</ul>
			<div class="tab-content clearfix">
				<div class="tab-pane active" id="product">
					<div class="row info-detail">
						<div class="product-images col-md-5 d-flex flex-row">
					    	<div class="col">
					    		<div class="img-slider">
									<div><img src="images/ex/thumbnail-7.jpg" alt=""></div>
									<div><img src="images/ex/thumbnail-7.jpg" alt=""></div>
									<div><img src="images/ex/thumbnail-7.jpg" alt=""></div>
									<div><img src="images/ex/thumbnail-7.jpg" alt=""></div>
									<div><img src="images/ex/thumbnail-7.jpg" alt=""></div>
								</div>
					    	</div>
					    	<div class="col">
					    		<div class="big-image">
					    			<div class="image"><img src="images/ex/thumbnail-7.jpg" alt=""></div>
					    			<div class="image"><img src="images/ex/thumbnail-7.jpg" alt=""></div>
					    			<div class="image"><img src="images/ex/thumbnail-7.jpg" alt=""></div>
					    			<div class="image"><img src="images/ex/thumbnail-7.jpg" alt=""></div>
					    			<div class="image"><img src="images/ex/thumbnail-7.jpg" alt=""></div>	
					    		</div>
					    	</div>
					    </div>
					    <div class="col-md-7 info">
					    	<h2 class="name">BỘ BÚT VÀ MỰC VIẾT WINSOR & NEWTON CALLIGRAPHY WOODEN BOX</h2>
					    	<div class="rate">
			                  <i class="fa fa-star"></i>
			                  <i class="fa fa-star"></i>
			                  <i class="fa fa-star"></i>
			                  <i class="fa fa-star"></i>
			                  <i class="far fa-star"></i>
			                  <span class="scores">(5.3)</span>
			                  <a href="#" class="question">Ask a question</a>
			                </div>
			                <div class="text">
			                	• Bộ gồm có: 8 lọ mực Winsor & Newton drawing ink 14ml + 5 ngòi chấm mực dạng flat + 1 cán bút gỗ. <br>
								• 8 màu mực gồm có: Black, Canary Yellow, Scarlet, Cobalt, Viridian, Nut Brown, Silver và gold. <br>
								• Chi tiết 5 ngòi chấm mực dạng flat: Ngòi số 1, 2, 3, 4, 5 + reservoir <br>
			                </div>
			               	<div class="label">Chức năng:</div>
			               	<div class="function">
			               		<ul>
			               			<li>Tích hợp đầy đủ các dụng cụ viết cần thiết bao gồm bút, giấy và mực, đựng trong hộp gỗ tinh xảo và cao cấp.</li>
			               			<li>Thích hợp cho người tập viết calligraphy hoặc làm quà tặng trang trọng.</li>
			               		</ul>
			               	</div>
			               	<a href="#" class="btn btn-primary">Chi tiết sản phẩm</a> &nbsp;
			               	<a href="#" class="btn btn-primary"><img src="images/icon-video.png" alt=""> Xem video</a>
					    </div>
					</div>
				    <script>
				    	if ($('.product-images .big-image').length) {
							$('.product-images .big-image').width($(window).width()*500/1920)
						}
				    	$('.big-image').slick({
						  slidesToShow: 1,
						  slidesToScroll: 1,
						  arrows: false,
						  fade: true,
						  asNavFor: '.img-slider'
						});
				    	$('.img-slider').slick({
						  centerPadding: '60px',
						  slidesToShow: 4,
						  adaptiveHeight: true,
						  vertical: true,
						  dots: false,
						  asNavFor: '.big-image',
						  focusOnSelect: true,
						  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
						  responsive: [
						    {
						      breakpoint: 768,
						      settings: {
						        arrows: false,
						        centerMode: true,
						        centerPadding: '40px',
						        slidesToShow: 3
						      }
						    },
						    {
						      breakpoint: 480,
						      settings: {
						        arrows: false,
						        centerMode: true,
						        centerPadding: '40px',
						        slidesToShow: 1
						      }
						    }
						  ]
						});
				    </script>
				    <div class="row more-info">
				    	<table class="table table-striped">
						  <thead>
						    <tr>
						      <th style="width: 1%;" scope="col">IMAGE</th>
						      <th style="width: 1%;" scope="col">ITEM</th>
						      <th style="width: 1%;" scope="col">NAME</th>
						      <th style="width: 1%;" scope="col" class="text-center">SIZE</th>
						      <th style="width: 1%;" scope="col" class="text-right">PRICE</th>
						      <th class="text-center" style="width: 1%;" scope="col"><span class="orange-color">SALE</span></th>
						      <th style="width: 1%;" scope="col">STATUS</th>
						      <th style="width: 1%;" scope="col">QTY</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td><img src="images/ex/thumbnail-8.jpg" alt="" class="image"></td>
						      <td>L125</td>
						      <td>Lorem ipsum dolor</td>
						      <td class="text-center">125ml</td>
						      <td class="text-right">200.000đ</td>
						      <td class="text-center"><span class="orange-color">SALE</span></td>
						      <td>in stock</td>
						      <td><input type="number" value="1" class="form-control text-center" style="width: 80px;""></td>
						    </tr>
						    <tr>
						      <td><img src="images/ex/thumbnail-8.jpg" alt="" class="image"></td>
						      <td>L125</td>
						      <td>Lorem ipsum dolor</td>
						      <td class="text-center">125ml</td>
						      <td class="text-right">200.000đ</td>
						      <td class="text-center"><span class="orange-color">SALE</span></td>
						      <td>in stock</td>
						      <td><input type="number" value="1" class="form-control text-center" style="width: 80px;""></td>
						    </tr>
						    <tr>
						      <td><img src="images/ex/thumbnail-8.jpg" alt="" class="image"></td>
						      <td>L125</td>
						      <td>Lorem ipsum dolor</td>
						      <td class="text-center">125ml</td>
						      <td class="text-right">200.000đ</td>
						      <td class="text-center"><span class="orange-color">SALE</span></td>
						      <td>in stock</td>
						      <td><input type="number" value="1" class="form-control text-center" style="width: 80px;""></td>
						    </tr>
						    <tr>
						      <td><img src="images/ex/thumbnail-8.jpg" alt="" class="image"></td>
						      <td>L125</td>
						      <td>Lorem ipsum dolor</td>
						      <td class="text-center">125ml</td>
						      <td class="text-right">200.000đ</td>
						      <td class="text-center"><span class="orange-color">SALE</span></td>
						      <td>in stock</td>
						      <td><input type="number" value="1" class="form-control text-center" style="width: 80px;""></td>
						    </tr>
						  </tbody>
						</table>
				    </div>
				    <div class="row d-flex flex-row-reverse">
				    	<a href="#" class="btn btn-primary">Add to cart</a>
				    </div>
				    <div class="videos-container">
				    	<a href="#" class="slick-arrow arrow-left prev"></a>
    					<a href="#" class="slick-arrow arrow-right next"></a>
				    	 <div class="videos-slider">
					    	<div class="card video">
				              <a href="#" class="video-thumbnail">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video">
				              <a href="#" class="video-thumbnail">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video">
				              <a href="#" class="video-thumbnail">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video">
				              <a href="#" class="video-thumbnail">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video">
				              <a href="#" class="video-thumbnail">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video">
				              <a href="#" class="video-thumbnail">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
					    </div>
				    </div>
				    <script>
				    	$('.videos-slider').slick({
							infinite: true,
							slidesToShow: 4,
							slidesToScroll: 4,
							prevArrow: '.arrow-left',
            				nextArrow: '.arrow-right',
						});
				    </script>
				    <div class="section home-products">
				        <div class="d-flex justify-content-center"><h2 class="title">Mua hàng</h2></div>
				        <div class="row">
				            <div class="card col-md-3">
				              <a href="#">
				                  <img class="card-img-top" src="images/ex/thumbnail-4.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <div class="rate">
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="far fa-star"></i>
				                  <i class="scores">(5.3)</i>
				                </div>
				                <p class="card-text price">250.000 Đ</p>
				                <a href="#" class="btn btn-primary">Mua hàng</a>
				              </div>
				            </div>
				          	<div class="card col-md-3">
				              <a href="#">
				                  <img class="card-img-top" src="images/ex/thumbnail-4.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <div class="rate">
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="far fa-star"></i>
				                  <i class="scores">(5.3)</i>
				                </div>
				                <p class="card-text price">250.000 Đ</p>
				                <a href="#" class="btn btn-primary">Mua hàng</a>
				              </div>
				            </div>
				            <div class="card col-md-3">
				              <a href="#">
				                  <img class="card-img-top" src="images/ex/thumbnail-4.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php">Aenean commodo ligula</a></h4>
				                <div class="rate">
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="fa fa-star"></i>
				                  <i class="far fa-star"></i>
				                  <i class="scores">(5.3)</i>
				                </div>
				                <p class="card-text price">250.000 Đ</p>
				                <a href="#" class="btn btn-primary">Mua hàng</a>
				              </div>
				            </div>

				        </div>
				      </div>
				</div>
				<div class="tab-pane" id="description">
				    <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
				</div>
				<div class="tab-pane" id="images">
				    <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
				</div>
				<div class="tab-pane" id="videos">
				    <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
				<div class="tab-pane" id="reviews">
				    <h3>We use css to change the background color of the content to be equal to the tab</h3>
				</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
</body>
</html>
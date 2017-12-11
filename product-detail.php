<?php include('header.php') ?>
    <div class="product-detail">
    	<div class="product-info">	
			<ul  class="nav nav-pills d-flex justify-content-center">
				<li><a  href="#product"  class="active" data-toggle="tab">Product</a></li>
				<li><a href="#description" data-toggle="tab">Description</a></li>
				<li><a href="#images" data-toggle="tab">Images</a></li>
			  	<li><a href="#videos" data-toggle="tab">Videos</a></li>
			  	<li><a href="#reviews" data-toggle="tab">Reviews</a></li>
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
				    	$(window).on('load resize', function () {
						    resizeProductBigImage();
						});
				    	function resizeProductBigImage() {
				    		if ($('.product-images .big-image').length) {
					    		if ($(window).width() > 1024) {
					    			$('.product-images .big-image').width($(window).width()*500/1920);
					    		}
							}
				    	}
				    	$('.big-image').slick({
				    		dots: true,
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
				</div>
				<div class="tab-pane" id="description">
				    <div class="description">
				    	<h4 class="label">Giới thiệu dòng bút Pilot Prera</h4>
				    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ratione, tempora laborum culpa similique hic suscipit consequatur ipsam fugiat, facere nihil voluptas porro, molestiae ea quo corrupti quos aspernatur ullam ipsa quis blanditiis a deleniti ipsum. Mollitia, quia aliquam at quisquam vel illo numquam architecto possimus, fuga eligendi nostrum. Enim, aperiam cum quaerat officiis natus soluta. Earum architecto ea quos commodi beatae, nulla ducimus iure quasi aliquam tenetur sequi voluptate repellendus harum porro eius, nobis maiores asperiores quibusdam libero possimus, aut! Excepturi natus ab accusamus impedit odio reprehenderit voluptatum consequatur quod quae iusto, quas iure fuga. Blanditiis, ullam modi hic.</p>
				    	<p>
				    		<img src="images/ex/thumbnail-2.jpg" alt="">
				    	</p>
				    	<h4 class="label">Quy cách</h4>
				    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ratione, tempora laborum culpa similique hic suscipit consequatur ipsam fugiat, facere nihil voluptas porro, molestiae ea quo corrupti quos aspernatur ullam ipsa quis blanditiis a deleniti ipsum. Mollitia, quia aliquam at quisquam vel illo numquam architecto possimus, fuga eligendi nostrum. Enim, aperiam cum quaerat officiis natus soluta. Earum architecto ea quos commodi beatae, nulla ducimus iure quasi aliquam tenetur sequi voluptate repellendus harum porro eius, nobis maiores asperiores quibusdam libero possimus, aut! Excepturi natus ab accusamus impedit odio reprehenderit voluptatum consequatur quod quae iusto, quas iure fuga. Blanditiis, ullam modi hic.</p>
				    </div>

				</div>
				<div class="tab-pane" id="images">
				    <div class="gallery">
				    	<link rel="stylesheet" href="js/photobox/photobox.css">
				        <script src="js/photobox/jquery.photobox.js"></script>
				        <script>
				            $(function() {
				                $('.gallery').photobox('a');
				            })
				        </script>
				       <div class="row">
					       	<div class="item col-md-2 col-sm-3">
					            <a href="images/ex/thumbnail-2.jpg"><!--  Hình lớn -->
					                <img src="images/ex/thumbnail-2.jpg" ><!--  Hình thumbnail -->
					            </a>
					        </div>
							<div class="item col-md-2 col-sm-3">
					            <a href="images/ex/thumbnail-2.jpg"><!--  Hình lớn -->
					                <img src="images/ex/thumbnail-2.jpg" ><!--  Hình thumbnail -->
					            </a>
					        </div>
					        <div class="item col-md-2 col-sm-3">
					            <a href="images/ex/thumbnail-2.jpg"><!--  Hình lớn -->
					                <img src="images/ex/thumbnail-2.jpg" ><!--  Hình thumbnail -->
					            </a>
					        </div>
					        <div class="item col-md-2 col-sm-3">
					            <a href="images/ex/thumbnail-2.jpg"><!--  Hình lớn -->
					                <img src="images/ex/thumbnail-2.jpg" ><!--  Hình thumbnail -->
					            </a>
					        </div>
					        <div class="item col-md-2 col-sm-3">
					            <a href="images/ex/thumbnail-2.jpg"><!--  Hình lớn -->
					                <img src="images/ex/thumbnail-2.jpg" ><!--  Hình thumbnail -->
					            </a>
					        </div>
					        <div class="item col-md-2 col-sm-3">
					            <a href="images/ex/thumbnail-2.jpg"><!--  Hình lớn -->
					                <img src="images/ex/thumbnail-2.jpg" ><!--  Hình thumbnail -->
					            </a>
					        </div>
				       </div>
				    </div>
				</div>
				<div class="tab-pane active" id="videos">
				    <div class="videos-container">
				    	<a href="#" class="slick-arrow arrow-left prev"></a>
						<a href="#" class="slick-arrow arrow-right next"></a>
				    	 <div class="videos-slider row">
				            <div class="card video col-md-6">
				              <a href="#" class="video-thumbnail" data-toggle="modal" data-target="#video-modal">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php" data-toggle="modal" data-target="#video-modal">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video col-md-6">
				              <a href="#" class="video-thumbnail" data-toggle="modal" data-target="#video-modal">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php" data-toggle="modal" data-target="#video-modal">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video col-md-6">
				              <a href="#" class="video-thumbnail" data-toggle="modal" data-target="#video-modal">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php" data-toggle="modal" data-target="#video-modal">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video col-md-6">
				              <a href="#" class="video-thumbnail" data-toggle="modal" data-target="#video-modal">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php" data-toggle="modal" data-target="#video-modal">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video col-md-6">
				              <a href="#" class="video-thumbnail" data-toggle="modal" data-target="#video-modal">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php" data-toggle="modal" data-target="#video-modal">Aenean commodo ligula</a></h4>
				                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nobis, cumque exercitationem</p>
				              </div>
				            </div>
				            <div class="card video col-md-6">
				              <a href="#" class="video-thumbnail" data-toggle="modal" data-target="#video-modal">
				                  <img class="card-img-top" src="images/ex/thumbnail-9.jpg" alt="">
				              </a>
				              <div class="card-body">
				                <h4><a class="card-title" href="product-detail.php" data-toggle="modal" data-target="#video-modal">Aenean commodo ligula</a></h4>
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
		    				centerMode: false,
		    				responsive: [
						    {
						      breakpoint: 768,
						      settings: {
						        arrows: false,
						        centerMode: true,
						        centerPadding: '40px',
						        slidesToShow: 2
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
						$(document).ready(function(){
						    $(window).on('load resize',function(){
						        $('.product-info .nav li a').removeClass('active');
						        $('.product-info .nav li:first-child a').addClass('active');
						        $('#videos').removeClass('active');
						    });
						});
				    </script>
				</div>
				<!-- Modal -->
				<div class="modal fade video-modal" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Xem video</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="video-content">
				        <!-- video-->
		                  <video id="video" poster="images/ex/thumbnail-5.jpg" class="video-js vjs-default-skin" controls="controls">
		                      <source src="https://storage.googleapis.com/xmenmedia/video/index3/doimat_low.mp4" type="video/mp4"/>
		                  </video>
		                  <!-- #end video-->
		                  <script>
		                    var video = videojs("video", {
		                      "poster": "images/ex/thumbnail-5.jpg",
		                    });
		                  </script>
		                  <script src="js/myvideo.js""></script>
		                  <script>
		                  	$('.video-modal').on('shown.bs.modal', function () {
							  var wVideo = $('.video-js').width();
					            var hVideo = wVideo/2;
					            $('.video-js').height(hVideo); 
							});
							$('.video-modal').on('hide.bs.modal', function () {
							  video.pause();
							})
		                  </script>
				        <h3 class="video-title">Tên video tại đây</h3>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="tab-pane" id="reviews">
				    <div class="comment">
				    	<div class="">
				    		<span class="label"><strong>Có 6 bình luận về sản phẩm này</strong></span>  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
				    		Đánh giá trung bình
				    		<span class="rate">
			                  <i class="fa fa-star"></i>
			                  <i class="fa fa-star"></i>
			                  <i class="fa fa-star"></i>
			                  <i class="fa fa-star"></i>
			                  <i class="far fa-star"></i>
			                  <i class="scores">(5.3)</i>
			                </span>
				    	</div>
			       		<div class="user-coment">
				            <div class="d-table info">
				              <div class="d-table-cell">
				                <a href="#" class="avatar"><img src="images/ex/thumbnail-14.jpg" alt=""></a>
				              </div>
				              <div class="d-table-cell">
				                <div class="name">TANIA <span class="say">says</span></div>
				                <div class="time">November 2, 2017 at 11:20 pm</div>
				              </div>
				            </div>
				            <div class="comment-detail">Oh my goodness, I love these! The little garland is my favorite! I was going to say gift tags but you’ve got that covered… how about table place setting markers?!</div>
				            <a href="#" class="reply">Reply</a>
				        </div>
				        <div class="user-coment">
				            <div class="d-table info">
				              <div class="d-table-cell">
				                <a href="#" class="avatar"><img src="images/ex/thumbnail-14.jpg" alt=""></a>
				              </div>
				              <div class="d-table-cell">
				                <div class="name">TANIA <span class="say">says</span></div>
				                <div class="time">November 2, 2017 at 11:20 pm</div>
				              </div>
				            </div>
				            <div class="comment-detail">Oh my goodness, I love these! The little garland is my favorite! I was going to say gift tags but you’ve got that covered… how about table place setting markers?!</div>
				            <a href="#" class="reply">Reply</a>
				        </div>
				        <div class="comment-editor">
				            <textarea id="" class="form-control" rows="5"></textarea> <br>
				            <div class="rate grey-color"> <span class="italic scores">Đánh giá</span>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="far fa-star"></i>
			                  </div>
				            <a href="#" class="btn btn-primary viewmore">Gửi</a>
				        </div>
			        </div>
				</div>
			</div>
			<div class="row more-info">
		    	<table class="table table-striped table-responsive-md">
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
		    <div class="section home-products">
		        <div class="d-flex justify-content-center"><h2 class="title">Mua hàng</h2></div>
		        <div class="row">
		            <div class="card col-lg-3 col-md-3 col-sm-6">
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
		            <div class="card col-lg-3 col-md-3 col-sm-6">
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
		          	<div class="card col-lg-3 col-md-3 col-sm-6">
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
		            <div class="card col-lg-3 col-md-3 col-sm-6">
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
    </div>
<?php include('footer.php') ?>
</body>
</html>
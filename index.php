<?php include('header.php') ?>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/ex/slider-1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="first-slide" src="images/ex/slider-2.jpg" alt="First slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="section home-news">
        <div class="d-flex justify-content-center"><h2 class="title">CẢM HỨNG SÁNG TẠO MỚI</h2></div>
        <div class="home-text">Hãy cùng ArtArt tham gia vào cuộc phiêu lưu khám phá chất liệu sáng tạo mới, để mỗi ngày của bạn đều luôn tươi mới và đầy ắp sự sáng tạo.</div>
        <div class="row list-news">
          <div class="col-lg-6 col-md-6">
            <div class="item">
              <a href="news-detail.php" class="thumbnail">
                <img src="images/ex/thumbnail-1.jpg" alt="">
              </a>
              <div class="info">
                <h3  class="tit"><a href="news-detail.php">Sed ut perspiciatis unde omnis iste </a></h3>
                <p class="home-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="item">
              <a href="news-detail.php" class="thumbnail">
                <img src="images/ex/thumbnail-1.jpg" alt="">
              </a>
              <div class="info">
                <h3  class="tit"><a href="news-detail.php">Sed ut perspiciatis unde omnis iste </a></h3>
                <p class="home-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="news-detail.php" class="thumbnail">
                <img src="images/ex/thumbnail-2.jpg" alt="">
              </a>
              <div class="info">
                <h3  class="tit"><a href="news-detail.php">Sed ut perspiciatis unde omnis iste </a></h3>
                <p class="home-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="news-detail.php" class="thumbnail">
                <img src="images/ex/thumbnail-2.jpg" alt="">
              </a>
              <div class="info">
                <h3  class="tit"><a href="news-detail.php">Sed ut perspiciatis unde omnis iste </a></h3>
                <p class="home-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="item">
              <a href="news-detail.php" class="thumbnail">
                <img src="images/ex/thumbnail-2.jpg" alt="">
              </a>
              <div class="info">
                <h3  class="tit"><a href="news-detail.php">Sed ut perspiciatis unde omnis iste </a></h3>
                <p class="home-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section home-video">
        <div class="d-flex justify-content-center"><h2 class="title">Video và hoạt động mới</h2></div>
        <div class="video-slider">
          <div class="slider">
            <div class="row color-grey d-flex flex-row-reverse">
              <div class="col-lg-6 col-sm-12 video">
                  <!-- video-->
                  <video id="video-1" poster="images/ex/thumbnail-3.jpg" class="video-js vjs-default-skin" controls="controls">
                      <source src="https://storage.googleapis.com/xmenmedia/video/index3/doimat_low.mp4" type="video/mp4"/>
                  </video>
                  <!-- #end video-->
                  <script>
                    var video = videojs("video-1", {
                      "poster": "images/ex/thumbnail-3.jpg",
                    });
                  </script>
              </div>
              <div class="col-lg-6 col-sm-12 info">
                  <h3 class="tit">Video: Những thủ thuật cần biết với dòng bút máy Twsbi</h3>
                  <div class="home-text">
                    Bút máy TWSBI được ưa chuộng bởi chất lượng tốt, giá thành vừa phải, đi kèm với cơ chế bơm mực piston độc đáo (thường chỉ thấy có ở các loại bút cực đắt tiền). Bút dùng cho nhu cầu viết hàng ngày.
                  </div>
                  <a href="video-detial.php" class="btn btn-primary">Xem thêm</a>
              </div>
            </div>
          </div>
          <div class="slider">
            <div class="row color-grey d-flex flex-row-reverse">
              <div class="col-lg-6 col-sm-12 video">
                  <!-- video-->
                  <video id="video-2" poster="images/ex/thumbnail-5.jpg" class="video-js vjs-default-skin" controls="controls">
                      <source src="https://storage.googleapis.com/xmenmedia/video/index3/doimat_low.mp4" type="video/mp4"/>
                  </video>
                  <!-- #end video-->
                  <script>
                    var video = videojs("video-2", {
                      "poster": "images/ex/thumbnail-5.jpg",
                    });
                  </script>
              </div>
              <div class="col-lg-6 col-sm-12 info">
                  <h3 class="tit">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                  <div class="home-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id expedita, nihil illo accusantium tempora labore rem aliquam facere harum! Quod?
                  </div>
                  <a href="video-detial.php" class="btn btn-primary">Xem thêm</a>
              </div>
            </div>
            <script src="js/myvideo.js""></script>
          </div>
        </div>
      </div>
      <div class="section hone-service ">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="item ship">
                <div class="col" style="width: 1px;">
                  <span class="icon"></span>
                </div>
                <div class="col text">
                  <strong>Miễn phí giao hàng</strong>
                  <p>Đơn hàng 550k (toàn quốc)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="item pay">
                <div class="col" style="width: 1px;">
                  <span class="icon"></span>
                </div>
                <div class="col text">
                  <strong>THANH TOÁN TIỀN LỢI</strong>
                  <p>Nhận hàng trả tiền (Ship COD) toàn quốc</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="item change">
                <div class="col" style="width: 1px;">
                  <span class="icon"></span>
                </div>
                <div class="col text">
                  <strong>5 NGÀY ĐỔI TRẢ</strong>
                  <p>Đơn hàng 550k (toàn quốc)</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="item hotline">
                <div class="col" style="width: 1px;">
                  <span class="icon"></span>
                </div>
                <div class="col text">
                  <strong>Hotline: 091 415 9319</strong>
                  <p>Từ 8:00 - 22:00 (kể cả CN, ngày lễ)</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="section home-products">
        <div class="d-flex justify-content-center"><h2 class="title">Mua hàng</h2></div>
        <div class="row">
           <div class="card col-md-3 col-sm-6">
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
                <p class="card-text price">250.000 Đ <span class="old-price">350.000 Đ</span></p>
                <a href="#" class="btn btn-primary">Mua hàng</a>
              </div>
            </div>
            <div class="card col-md-3 col-sm-6">
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
            <div class="card col-md-3 col-sm-6">
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
            <div class="card col-md-3 col-sm-6">
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
            <div class="card col-md-3 col-sm-6">
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
            <div class="card col-md-3 col-sm-6">
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
            <div class="card col-md-3 col-sm-6">
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
            <div class="card col-md-3 col-sm-6">
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
        <div class="d-flex justify-content-center"><a href="#" class="view-more">Xem thêm</a></div>
      </div>
  <?php include('footer.php') ?>
  <script>
    $(function(){
      $('.video-slider').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            adaptiveHeight: true,
            fade: true,
        });
        $('.video-slider').on('afterChange', function(event, slick, currentSlide){
            video.pause();
        });
    });
  </script>
</body>
</html>
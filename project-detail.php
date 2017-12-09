<?php include('header.php') ?>
    <div class="row">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-10 main-content project-detail">
        <div class="left content">
          <h3 class="title">Kid's Cricket Jar</h3>
          <p>Remember the days of catching fireflies in a jar and watching them glow? You can share that fun with your kids when you create this simple Cricket Jar together. It's great for holding crawly creatures your kids may find in the backyard.</p>
          <div class="d-flex justify-content-center video-box">
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
              <script src="js/myvideo.js""></script>
          </div>
          <p class="label">Instruction</p>
          <p>Start by creating a project in Cricut Design Space to cut out your shapes. I wanted the camper and truck bases to be really sturdy so I used this chipboard. Remember, you’ll need to use the deep cut blade and adjust for more pressure. I only used the chipboard to cut out the camper base and truck. Then I used white kraftboard for the camper top and trees.</p>
          <p class="text-center">
              <img src="images/ex/thumbnail-12.jpg" alt="">
          </p>
          <p>Next, I painted my camper bases with DecoArt Dazzling Metallic in Festive Red and DecoArt Crafters Acrylic in Ocean Green. While the paint is still wet, lightly tap the glamour dust on the camper starting from the bottom. Then tap the glitter towards the top because you’ll be covering the top later. Then allow it to dry completely.</p>
        </div>
        <div class="d-flex justify-content-center">
          <div class="share">
              <a href="#"><i class="fab fa-pinterest-p"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
              <a href="#"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#" class="btn btn-primary">Tải lên template của bạn!</a>
        </div>
        <div class="comment">
          <div class="label">Bình luận</div>
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
          <div class="comment-editor">
            <textarea id="" class="form-control" rows="10"></textarea>
            <a href="#" class="btn btn-primary viewmore">Gửi</a>
          </div>
           <div class="d-flex justify-content-center"></div>
        </div>
      </div>
      <div class="col-lg-2 sidebar">
        <div class="section">
          <h3 class="title left">Vật tư sử dụng</h3>
          <div class="row section home-products">
            <div class="card col-lg-12 col-md-6">
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
            <div class="card col-lg-12 col-md-6">
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
            <div class="card col-lg-12 col-md-6">
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
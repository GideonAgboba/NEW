<nav class="navbar navbar-extended nav-content white fixed-top mt-5" style="z-index: 3000;" style="position: fixed !important;margin-bottom: 0px !important;">
      <ul class="tabs tabs-transparent justify-content-center my-auto d-flex">
        <li class="tab">
          <a class="nav-link green-font store-nav-item active" href="#color-chart">Color-chart</a>
        </li>
        <li class="tab">
          <a href="#gallery" class="nav-link green-font store-nav-item">Gallery</a>
        </li>
      </ul>
    </nav>

    <div id="color-chart">
        <?Php include 'lab-content.php'  ?>
    </div>

    
    <div id="gallery" class="pt-5 mt-5">
       <div class="row gallery-img bg-red">
        <div class="col-lg-3">
          <img src="imgs/gallery/img1.jpg" alt="one" class="img-responsive">
        </div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img2.jpg" alt="one" class="img-responsive">
        </div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img3.jpg" alt="one" class="img-responsive">
        </div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img4.jpg" alt="one" class="img-responsive">
        </div>
       </div>
       <div class="row gallery-img bg-red">
        <div class="col-lg-3">
          <img src="imgs/gallery/img5.jpg" alt="one" class="img-responsive">
        </div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img6.jpg" alt="one" class="img-responsive">
        </div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img7.jpg" alt="one" class="img-responsive">
        </div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img8.jpg" alt="one" class="img-responsive">
        </div>
       </div>
       <div class="row gallery-img bg-red">
        <div class="col-lg-3">
          <img src="imgs/gallery/img9.jpg" alt="one" class="img-responsive"></div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img10.jpg" alt="one" class="img-responsive"></div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img11.jpg" alt="one" class="img-responsive"></div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img12.jpg" alt="one" class="img-responsive"></div>
       </div>
       <div class="row gallery-img bg-red">
        <div class="col-lg-3">
          <img src="imgs/gallery/img13.jpg" alt="one" class="img-responsive"></div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img14.jpg" alt="one" class="img-responsive"></div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img15.jpg" alt="one" class="img-responsive"></div>
        <div class="col-lg-3">
          <img src="imgs/gallery/img16.jpg" alt="one" class="img-responsive"></div>
       </div>
    </div>

    <style>
    #gallery{
      margin-top: 8em !important;
    }
    .gallery-img{
      /* margin-top: 10em !important; */
      height: 60vh;
    }
    .gallery-img img{
      width: 100%;
      height: 100%;
    }
    .active{
      border-bottom: 5px solid #25A187;
    }
    </style>
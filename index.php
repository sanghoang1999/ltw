<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--bootstrap cdn-->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
    integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA"
    crossorigin="anonymous">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <script type="text/javascript">
      function toBottom() {
        window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })
      }
    </script>
    <link rel="stylesheet" href="css/style.css">
    <title>Assignment 2 - Tiuh</title>
</head>
<body>
<!--top bar (pt=padding top ,pb=padding bottom) -->
    <div class="container-fluid bg-dark header-top d-md-block d-none">
        <div class="container">
            <div class="row text-light pt-2 pb-2">
                <div class="col-md-5">
                    <i class="far fa-envelope" aria-hidden="true"></i>
                    tiuh@tiuh.corp
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-2"><i class="fa fa-user" aria-hidden="true"> </i> <a class="dropdown-toggle" style="color: white; text-decoration: none;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tài khoản
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Chào,....</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="sale.php">Dashboard</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="login.php">Đăng nhập</a>
                  <a class="dropdown-item" href="register.php">Đăng kí</a>
                  <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                </div></div>
                <div class="col-md-2"><i class="fa fa-cart-plus" aria-hidden="true"> </i> <a style="color: white; text-decoration: none;" href="cart.php"> Giỏ hàng </a></div>
            </div>
        </div>
    </div>


<!--nav bar-->
<div class="container-fluid bg-black">

    <nav class="container navbar navbar-default navbar-expand-lg navbar-dark bg-black navbar-fixed-top">
            <a class="navbar-brand" href="index.php"><h1>Tiuh</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="intro.php">Giới thiệu</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sản Phẩm
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="shoes.php">Giày</a>
                    <a class="dropdown-item" href="accessories.php">Phụ Kiện</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sale.php">Giảm giá</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:toBottom()">Liên hệ</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/img-1.jpg" alt="img1">
         <div class="carousel-caption d-none d-md-block">
          <h1>NIKE ELECTRO COLLECTION</h1>
           <p>Dòng sản phẩm thế hệ S1 mới nhất của Nike.</p>
           <button class="btn btn-info btn-lg">Shop Now</button>
         </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/img-2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>BEST AUTUMN COLLECTION</h1>
           <p>Bộ sưu tập giày bán chạy nhất mùa thu của Nike.</p>
           <button class="btn btn-info btn-lg">Shop Now</button>
         </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 m-right">
          <span style="color:#ffffff" class="fa fa-truck" aria-hidden="true"></span><h4>GIAO HÀNG</h4>
          <p>Toàn quốc</p>
        </div>

        <div class="col-md-4 m-right">
          <span style="color:#ffffff" class="fa fa-balance-scale" aria-hidden="true"></span><h4>BẢO HÀNH</h4>
            <p>Khâu full đế</p>
        </div>

        <div class="col-md-4">
          <span style="color:#ffffff" class="fa fa-gift" aria-hidden="true"></span><h4>QUÀ TẶNG HẤP DẪN</h4>
          <p>Đồ đá banh, vớ, túi rút, băng keo</p>
        </div>
      </div>
    </div>
  </div>



  <div class="container-fluid bg-light-gray">

  <div class="container pt-5">

    <div class="row">
      <h3>GIÀY BÁN CHẠY</h3>
    </div>
      <div class="row">
      <div class="underline"></div>
    </div>
  </div>



  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="img/img-3.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Tiempo Legend 8FG</h5>
            <h6>$76.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-4.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Mercurial Vapor Elite</h5>
            <h6>$75.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-5.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Phantom Venom Elite</h5>
            <h6>$52.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>



      <div class="col-md-3">
        <div class="card">
          <img src="img/img-6.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Phantom Vision Elite</h5>
            <h6>$66.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container mt-5">

    <div class="row">
      <h3>GIÀY FUTSAL</h3>
    </div>
      <div class="row">
      <div class="underline"></div>
    </div>
  </div>


  <div class="container mt-5 pb-5">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="img/img-7.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Tiempo Black</h5>
            <h6>$36.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-8.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Tiempo 8 IC</h5>
            <h6>$36.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-9.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>React Gato S9</h5>
            <h6>$26.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>



      <div class="col-md-3">
        <div class="card">
          <img src="img/img-10.jpg" alt="card-1" class="card-img-top">
          <div class="card-body">
            <h5>Mercurial Superfly</h5>
            <h6>$29.00</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>


  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <h4>QUAN TÂM</h4>
          </div>
          <div class="row">
            <div class="underline-green"></div>
          </div>
          <div class="media mt-5">
            <img src="img/img-12.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Mercurial S8</h5>
              <h6>$47.00</h6>
              <button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>

          <div class="media mt-5">
            <img src="img/img-13.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Phantom Elite</h5>
              <h6>$56.00</h6>
              <button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>


          <div class="media mt-5">
            <img src="img/img-14.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Hypervenom</h5>
              <h6>$67.00</h6>
              <button class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>
        </div>




        <div class="col-md-4">
          <div class="row">
            <h4>PHỤ KIỆN</h4>
          </div>
          <div class="row">
            <div class="underline-blue"></div>
          </div>
          <div class="media mt-5">
            <img src="img/img-15.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Vớ & Ống đồng</h5>
              <h6>$23.00</h6>
              <button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>

          <div class="media mt-5">
            <img src="img/img-16.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Ống đồng</h5>
              <h6>$36.00</h6>
              <button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>

          <div class="media mt-5">
            <img src="img/img-17.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Bó tay</h5>
              <h6>$37.00</h6>
              <button class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="row">
            <h4>GIẢM GIÁ</h4>
          </div>
          <div class="row">
            <div class="underline-black"></div>
          </div>
          <div class="media mt-5">
            <img src="img/img-18.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Hypervenom Black</h5>
              <h6>$33.00 <span style="text-decoration: line-through">$67.00</span></h6>
              <button class="btn btn-dark"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>

          <div class="media mt-5">
            <img src="img/img-19.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Mercurial S2</h5>
              <h6>$44.00 <span style="text-decoration: line-through">$56.00</span></h6>
              <button class="btn btn-dark"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>

          <div class="media mt-5">
            <img src="img/img-20.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Mercurial S6</h5>
              <h6>$34.00 <span style="text-decoration: line-through">$99.00</span></h6>
              <button class="btn btn-dark"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



  <div class="container-fluid bg-light-gray pt-5 pb-5">

  <div class="container mt-0">
    <div class="row">
      <h4>ÁO ĐẤU</h4>
    </div>
    <div class="row">
      <div class="underline"></div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="img/img-21.jpg" class="card-img-top" alt="shirt1">
          <div class="card-body">
            <h4>Korea Shirt</h4>
            <h6>$22.87</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-22.jpg" class="card-img-top" alt="shirt2">
          <div class="card-body">
            <h4>Nigeria Shirt</h4>
            <h6>$22.87</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-23.jpg" class="card-img-top" alt="shirt3">
          <div class="card-body">
            <h4>USA Shirt</h4>
            <h6>$22.87</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="img/img-24.jpg" class="card-img-top" alt="shirt4">
          <div class="card-body">
            <h4>Norway Shirt</h4>
            <h6>$22.87</h6>
            <button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>





  <div class="container mt-5">
    <div class="row">
      <h4>TIN TỨC NỔI BẬT</h4>
    </div>
    <div class="underline"></div>
  </div>

  <div class="container pb-5 blog">
   <div class="row">
     <div class="col-md-6">
       <div class="media mt-5">
            <img src="img/img-25.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Joshua Kimmich. Cầu thủ tất cả trong một…</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Trung. Date: 12-5-2020</p>
            </div>
          </div>
     </div>


     <div class="col-md-6">
       <div class="media mt-5">
            <img src="img/img-26.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Tin chuyển nhượng 30/5…</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <p>Lorem ipsum dolor sit amet.</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Trung. Date: 30-5-2020</p>
            </div>
          </div>
     </div>
   </div>


    <div class="row">
     <div class="col-md-6">
       <div class="media mt-5">
            <img src="img/img-27.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Đội tuyển Việt Nam trên hành trình…</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Trung. Date: 2-6-2020</p>
            </div>
          </div>
     </div>


     <div class="col-md-6">
       <div class="media mt-5">
            <img src="img/img-28.jpg" class="img-fluid mr-3" alt="media1">
            <div class="media-body mt-2">
              <h5>Giấc mơ sân cỏ của các cậu bé…</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <p>Lorem ipsum dolor sit amet.</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Trung. Date: 4-6-2020</p>
            </div>
          </div>
     </div>
   </div>

  </div>

  <div class="container-fluid pt-5 pb-5 bg-light-gray">
    <div class="container">
      <div class="row">
        <h4>NHÃN HÀNG</h4>
      </div>
      <div class="row">
        <div class="underline-blue"></div>
      </div>
    </div>

    <div class="container pt-5">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img src="img/img-29.jpg" alt="img" class="card-img-top">
            <div class="card-body">
              <h4>Nike</h4>
              <h6>#1</h6>
            <button class="btn btn-danger">Xem thêm</button>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="img/img-30.jpg" alt="img" class="card-img-top">
            <div class="card-body">
              <h4>Puma</h4>
              <h6>#2</h6>
            <button class="btn btn-danger">Xem thêm</button>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="img/img-31.jpg" alt="img" class="card-img-top">
            <div class="card-body">
              <h4>Adidas</h4>
              <h6>#3</h6>
            <button class="btn btn-danger">Xem thêm</button>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="img/img-32.jpg" alt="img" class="card-img-top">
            <div class="card-body">
              <h4>NBalance</h4>
              <h6>#4</h6>
            <button class="btn btn-danger">Xem thêm</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <footer>
    <div class="container-fluid pt-5 pb-5 bg-dark text-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
          <div class="row">
            <h5>Thử nghiệm</h5>
          </div>
          <div class="row mb-4">
          <div class="underline bg-light" style="width: 50px;"></div>
          </div>

              <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Đăng kí</p>
              <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Đăng nhập</p>
              <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Bảo mật</p>
              <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Bình luận</p>
              <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Hướng dẫn</p>

          </div>


          <div class="col-md-3">
            <div class="row">
            <h5>Bài đăng gần nhất</h5>
          </div>
          <div class="row mb-4">
          <div class="underline bg-light" style="width: 50px;"></div>
          </div>
          <div class="row">
            <div class="media">
              <img src="img/img-25.jpg" class="img-fluid" alt="media-image">
              <div class="media-body ml-2">
                <h6>Joshua Kimmich. Cầu thủ tất cả trong một!</h6>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="media">
              <img src="img/img-26.jpg" class="img-fluid" alt="media-image">
              <div class="media-body ml-2">
                <h6>Tin chuyển nhượng 30/5</h6>
              </div>
            </div>
          </div>
          </div>

          <div class="col-md-3 pl-4">
            <div class="row">
            <h5>Liên hệ</h5>
          </div>
          <div class="row mb-4">
          <div class="underline bg-light" style="width: 50px;"></div>
          </div>
          <div class="row">
            <address><span style="color:#777" class="fa fa-map-marker"></span> &nbsp;TIUH - Số xx, phường XX, Quận XX, TP.HCM</address>
					  <div class="phone-footer"><span style="color:#777" class="fa fa-phone"></span> &nbsp;Hotline: 1800.xxxx (miễn phí)</div>
					  <div class="phone-footer"><img src="//bizweb.dktcdn.net/100/108/842/themes/692783/assets/zalo.png?1591004780266" alt="zalo1"/> &nbsp;Zalo bán lẻ: xxxxxxxxxx</div>
					  <div class="phone-footer"><img src="//bizweb.dktcdn.net/100/108/842/themes/692783/assets/zalo.png?1591004780266" alt="zalo2"/> &nbsp;<a>Zalo bán sỉ: xxxxxxxxxx</a> </div>
          </div>
          </div>

          <div class="col-md-3">
            <div class="row">
            <h5>Tags</h5>
          </div>
          <div class="row mb-4">
          <div class="underline bg-light" style="width: 50px;"></div>
          </div>
          <button class="btn btn-outline-light">Nike</button> <button class="btn btn-outline-light">Giày đá banh</button> <button class="btn btn-outline-light">Phụ kiện</button> <button class="btn btn-outline-light">Sale</button> <button class="btn btn-outline-light">Adidas</button>
          </div>
        </div>
      </div>
    </div>
  </footer>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>

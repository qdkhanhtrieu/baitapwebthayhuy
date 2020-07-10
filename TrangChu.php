<?php
// Start the session
session_start();
?>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Trang Chủ</title>
  </head>
  <body>
    <center>
        <img src="./images/anhweb5.jpg" width = "800" height = "100px">
    </center>
    <div class="container-fluid">
      <header class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Trang Chủ<span class="sr-only">(current)</span></a>
            </li>
             <?php
                 if (isset($_SESSION["Name"]))
                  {
                    // echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
                    //  echo "<p>Xin Chào </p>".$_SESSION['username'];
                    //echo'<i class="far fa-user-circle"><a href="logout.php" >Logout</a></i>';
                    echo' <div class="btn-group"id="icoon">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="logouser">
                    <i class="far fa-user-circle"></i>
                    </button>
                    <div class="dropdown-menu">                
                    <p id="hello" align="center">'.$_SESSION['Name'].'</p>
                    <a class="dropdown-item" href="logout.php">LogOut</a>           
                    </div>
                    </div>';
                    //  echo '<a href="logout.php">Logout</a>';
                    //  echo' <button type="button" class="btn btn-outline-success"><a href="logout.php" >Logout</a></button>';
                  }
                else {
                    if (isset($_SESSION["AdminName"]))
                  {
                    // echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
                    //  echo "<p>Xin Chào </p>".$_SESSION['username'];
                    //echo'<i class="far fa-user-circle"><a href="logout.php" >Logout</a></i>';

                    echo' <li class="nav-item">
                      <a class="nav-link" href="CapNhatLichBay.php" > Cập Nhật Lịch Trình Bay </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="HoTroChuyenBay.php" > Hỗ Trợ Chuyến Bay </a>
                    </li>
                    <div class="btn-group"id="icoon">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="logouser">
                    <i class="far fa-user-circle"></i>
                    </button>
                    <div class="dropdown-menu">                
                    <p id="hello" align="center">'.$_SESSION['AdminName'].'</p>
                    <a class="dropdown-item" href="logout.php">Đăng Xuất</a>       
                    </div>
                    </div>';
                    //  echo '<a href="logout.php">Logout</a>';
                    //  echo' <button type="button" class="btn btn-outline-success"><a href="logout.php" >Logout</a></button>';
                  } 
                  else {
                    echo'
                    <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="logouser">
                    <i class="far fa-user-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="TuyenDung.php">Nhân Viên</a>
                    <a class="dropdown-item" href="DangNhap.php">Đăng Nhập</a>
                    <a class="dropdown-item" href="DangKy.php">Đăng Kí</a>
                    </div>'; 
                  }
                }
                ?>
          </ul>
        </div>
    </nav>
    </header>
    </div>
    <div class="container-fluid">
      <header class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand" href="#">
            <img src="./images/anhweb1.jpg" height = "50px">
        </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="LichVeMayBay.php">Lịch Vé Máy Bay<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hãng Bay</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="Vietjet.php" target="_top">VietJet</a>
                  <a class="dropdown-item" href="VietNamAirLines.php" target="_top">Vietnam Airlines</a>
                  <a class="dropdown-item" href="JetstarPacific.php" target="_top">Jetstar Pacific</a>
                  <a class="dropdown-item" href="BambooAirways.php" target="_top">Bamboo Airways</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vé Nội Địa</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="VeHaNoi.php">Vé Máy Bay Đi Hà Nội</a>
                  <a class="dropdown-item" href="VeSaiGon.php">Vé Máy Bay Đi Sài Gòn</a>
                  <a class="dropdown-item" href="VeHue.php">Vé Máy Bay Đi Huế</a>
                  <a class="dropdown-item" href="VeDaNang.php">Vé Máy Bay Đi Đã Nẵng</a>
                  <a class="dropdown-item" href="VeNhaTrang.php">Vé Máy Bay Đi Nha Trang</a>
                  <a class="dropdown-item" href="VePhuQuoc.php">Vé Máy Bay Đi Phú Quốc</a>
                  <a class="dropdown-item" href="VeVinh.php">Vé Máy Bay Đi Vinh</a>
                  <a class="dropdown-item" href="VeDaLat.php">Vé Máy Bay Đi Đà Lạt</a>
                  <a class="dropdown-item" href="VeHaiPhong.php">Vé Máy Bay Đi Hải Phòng</a> 
                  <a class="dropdown-item" href="VeBuonMeThuot.php">Vé Máy Bay Đi Buôn Mê Thuột</a>
                </div>
              </li>     
               <li class="nav-item">
                <a class="nav-link" href="GioiThieu.php">Giới Thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="LienHe.php">Liên Hệ</a>
              </li>
              
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </nav>
     </header>
     <section>
     <div class="container fixDisplay">
        <div class="row">
          <div class="col-md-12">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="500">
                    <img src="./images/anhweb6.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb7.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb8.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb9.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
                  </div>
                </div>
              <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        <div>
    </div>
    </section>
               <section>
              <div class="container-fluid fixDisplay1">
                <div class="row">
                  <div class="col">
                   <form action="timsaigon.php" method="POST">
                    <div class="form-row">
                       <div class="form-group col-sm-5">
                        <center> <h6> <label for="exampleInputPassword1"> Nơi Đi </label> <h6> </center>
                        <select name='txtNoiDi' id="nhapnoidi" class="form-control"> 
                             <option selected> Hà Nội</option>
                             <option>Hồ Chí Minh</option>
                             <option>Đà Lạt</option>
                             <option>Buôn Mê Thuột</option>
                             <option>Đà Nẵng</option>
                             <option>Hải Phòng</option>
                             <option>Huế</option>
                             <option>Nha Trang</option>
                             <option>Phú Quốc</option>
                             <option>Vinh</option>
                      </select>
                       </div>
                       <div class="form-group col-sm-5">
                          <h6> <center> 
                         <label for="exampleInputEmail1"> Nơi Đến </label> </center> </h6>
                        <select name='txtNoiDen' id="nhapnoiden" class="form-control"> 
                             <option selected> Hồ Chí Minh</option>
                             <option>Hà Nội</option>
                             <option>Đà Lạt</option>
                             <option>Buôn Mê Thuột</option>
                             <option>Đà Nẵng</option>
                             <option>Hải Phòng</option>
                             <option>Huế</option>
                             <option>Nha Trang</option>
                             <option>Phú Quốc</option>
                             <option>Vinh</option>
                         </select>
                       </div>
                    </div>
                    <div class="form-row">
                      <link rel="stylesheet" type="text/css" href="datepicker.css" />
                      <script type="text/javascript" src="datepicker.js"></script> 
                       <div class="form-group col-sm-5">
                        <h6> <center> 
                          <div class="form-group">
                            <h6> <label for="exampleInputEmail1"> Ngày Bay </label> </h6>
                            <input type="text" id="start_dt" class='datepicker' size='20' name = 'start_dt' > 
                          </div>
                        </center> </h6>
                       </div>
                       <div class="form-group col-sm-5">
                          <h6> <center> 
                          <div class="form-group">
                            <h6> <label for="exampleInputEmail1"> Ngày Đến </label> </h6>
                            <input id="end_dt" class='datepicker' size='20' name = 'end_dt'  /> 
                          </div>
                        </center> </h6>
                       </div>
                  </div>
                   <div class="form-group col-sm-5 ">
                  <h6> <center> <label for="exampleInputEmail1"> Hãng Bay </label> </center> </h6>
                  <select name='txtHangBay' id="nhapnoiden" class="form-control"> 
                             <option selected> VietJet </option>
                             <option> BamBooo </option>
                             <option> Jetstar </option>
                             <option> VietNam Airlines </option>
                  </select>
                </div>
                      <center> <button type="submit" class="btn btn-primary"> Tạo Lịch Trình Bay </button> </center>
                  </form>
             </div> 
             <div class="col">
              <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="500">
                    <img src="./images/anhweb94.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb95.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb96.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb97.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
                  </div>
                </div>
              <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
           </div>
          </div>
    </section>  
    <section>
      <div class="container fixDisplay">
        <div class="row">
          <div class="col"><h4>Mua Vé Bằng Hình Thức</h4>
           Đặt vé máy bay giá rẻ đi tất cả các hãng 
          <p> Trang thông tin vé máy bay giá rẻ của VietJet Air, Jetstar, VietNam Airlines, Bamboo Airways. Chỉ mất 2 phút để bạn có thể dễ dàng sở hữu được tấm vé máy bay giá rẻ đi Nội địa. Nào hãy cùng chúng tôi khám phá! </p>
          <p> <h6> 1. Bảng giá vé máy bay giá rẻ một số chặng bay phổ  </h6> </p>
          <p> <h6> 2. Thông tin các hãng hàng không </h6> </p> 
          <p> Hiện tại Việt Nam có 4 hãng hàng không nội địa đang hoạt động là hãng hàng không quốc gia Vietnam Airlines và 2 hãng hàng không giá rẻ Vietjet Air, Jetstar và hãng hàng không Bamboo Airways. <br>
            - Hãng hàng không Vietnam Airlines: Vietnam Airlines là hãng hàng không quốc gia Việt Nam được thành lập 01/1956, đánh dấu sự ra đời hàng không dân dụng Việt Nam. Hiện Vietnam Airlines đã khai thác các chuyến bay tới 21 thành phố nội địa như Hà Nội, Điện Biên, Hải Phòng, Thanh Hóa, Vinh, Huế, Đồng Hới, Đà Nẵng, Tam Kỳ, Pleiku, Tuy Hòa, Tp Hồ Chí Minh, Nha Trang, Đà Lạt, Phú Quốc, Quy Nhơn, Cần Thơ, Côn Đảo, Buôn Mê Thuột, Rạch Giá, Cà Mau… Tại nhiều đường bay tới các thành phố nội địa chỉ có hãng này khai thác. <br> 
            - Hãng hàng không Vietjet Air: thường xuyên cung cấp vé máy bay nội địa giá rẻ tới cho khách hàng. Hiện Vietjet Air đã và đang khai thác đường bay tới 15 thành phố nội địa: Tp Hồ Chí Minh, Hà Nội, Đà Nẵng, Nha Trang, Hải Phòng, Huế, Vinh, Phú Quốc, Đà Lạt, Buôn Mê Thuột, Quy Nhơn, Cần Thơ, Thanh Hóa, Đồng Hới, Chu Lai. <br> 
            - Hãng hàng không Jetstar: Jetstar Pacific là hãng hàng không giá rẻ đầu tiên tại Việt Nam, chính thức tham gia hoạt động cùng hệ thống Jetstar toàn cầu từ tháng 5 năm 2008. Hiện hãng này khai thác đường bay tới 14 thành phố nội địa là Buôn Mê Thuột, Chu Lai, Đà Lạt, Đà Nẵng, Đồng Hới, Hà Nội, Hải Phòng, Huế, Nha Trang, Phú Quốc, Quy Nhơn, Thanh Hóa, Tp Hồ Chí Minh, Tuy Hòa. <br> 
            - Hãng hàng không Bamboo Airways thuộc quyền sở hữu của công ty TNHH hàng không Tre Việt (Viet Bamboo Airlines) – là công ty con của tập đoàn FLC. Hãng có chuyến bay thương mại đầu tiên vào ngày 16-01-2019. Hiện tại Bamboo Airways đang khai thác 37 đường bay kết nối đến tất cả các thành phố lớn và điểm đến du lịch nổi tiếng tại Việt Nam. Bên cạnh các trục chính như Hà Nội, Hồ Chí Minh, Đà Nẵng, các tuyến bay nội địa sẽ hướng tới các địa điểm du lịch như Quảng Bình, Quảng Ninh, Hải Phòng, Thanh Hóa, Bình Định, Phú Quốc, Nha Trang,Vinh, Cần Thơ, Pleiku, Đà Lạt. </p>
            <p> <h6>  3. Thông tin chặng bay phổ biến đi Nội Địa </h6> </p>
            <p>  Đặt vé máy bay  giá rẻ đi và Nội Địa <br> 
              - Đường bay Hà Nội – Tp Hồ Chí Minh và chiều ngược lại là đường bay chủ lực trong tất cả các đường bay. Trung bình 1 ngày có khoảng 46 chuyến bay từ Hà Nội – Tp Hồ Chí Minh và khoảng 36 chuyến bay từ Tp Hồ  Chí Minh – Hà Nội. Trong đó, Jetstar có khoảng 11 chuyến/ ngày; Vietjet Air có khoảng 18 chuyến bay/ ngày; Vietnam Airlines có khoảng 17 chuyến/ ngày. Giá vé chặng này dao động trong khoảng từ 1.020.000đ – 1.550.000đ. Vietjet Air và Jetstar là 2 hãng hàng không đứng đầu danh sách có mức giá vé rẻ ở chặng bay này. <br> 
              - Đường bay Hà Nội – Đà Nẵng và chiều ngược lại: Đây được coi là một trong những đường bay cao điểm với lượng hành khách khá đông dù là dịp lễ tết hay ngày thường. Đường bay này được khai thác bởi 3 hãng nội địa với khoảng 21 chuyến bay mỗi ngày. Trong đó Vietnam Airlines là hãng có tần suất chuyến bay lớn nhất (12 chuyến/ ngày); đồng thời cũng là hãng hàng không có giá vé cao nhất 1.200.000đ – 1.750.000đ. Vietjet Air đứng thứ 2 về tần suất khai thác chuyến bay đến và đi Đà Nẵng với khoảng 7 chuyến bay. Giá vé hãng này mở bán dao động từ 580.000đ – 1.060.000đ. Jetstar trung bình có khoảng 2 chuyến/ ngày; giá vé dao động 550.000đ – 1.020.000đ. <br> 
              - Đường bay Tp Hồ Chí Minh – Nha Trang cũng là 1 trong những đường bay có lượng hành khách lớn. Trung bình mỗi ngày có khoảng 9 chuyến bay do 3 hãng nội địa khai thác. Jestar đưa mức giá 360.000đ; Vietjet Air đưa mức giá 390.000đ và Vietnam Airlines vẫn là hãng mở bán với mức giá cao nhất 1.200.000đ. <br> 
              - Các đường bay như Hà Nội – Phú Quốc; Tp Hồ Chí Minh – Phú Quốc; Tp Hồ Chí Minh – Côn Đảo; Hà Nội – Nha Trang; Hà Nội – Buôn Mê Thuột… tuy không phải là đường bay cao điểm nhưng lại là những đường bay được lượng hành khách quan tâm khá nhiều. Bởi đây là một trong những điểm du lịch hot nhất Việt Nam. <br>
              - Ở các đường bay ngắn hoặc đường bay giữa các thành phố nhỏ với nhau hầu như mới chỉ được khai thác bởi hãng Vietnam Airlines. Có thể kể đến như Hà Nội – Huế; Hà Nội – Đồng Hới; Vinh – Đà Nẵng; Tp Hồ Chí Minh – Côn Đảo… </p>
              <p> <h6> 4. Vé máy bay giá rẻ mang đến cho bạn những gì? </h6> </p>
               <p>  Những tấm vé máy bay giá rẻ sẽ giúp bạn tiết kiêm chi phí và rút ngắn hành trình một cách nhanh chóng nhất. Nếu đi từ Bắc vào Nam bằng tàu hỏa bạn sẽ mất 15 – 20 tiếng mới tới nơi. Còn với vé máy bay, hành trình Bắc – Nam của bạn chỉ gói gọn trong vòng 2 giờ bay. <br>
                Hãng hàng không quốc gia Vietnam Airlines.Vé máy bay giá rẻ là ưu điểm vượt trội của Vietjet Air và Jetstar. Giá vé phải chăng đáp ứng mặt bằng chung của người Việt. Vietnam Airlines luôn đưa ra mức giá vé cao nhất so với 3 hãng nội địa nhưng lại được đánh giá cao hơn hẳn về chất lượng dịch vụ hàng không. Vietnam Airlines sẽ mang đến cho bạn trải nghiệm những dịch vụ chất lượng và đẳng cấp cùng tỷ lệ chuyến bay đúng giờ cao nhất. Trong khi đó tỉ lệ chậm, hủy chuyến của Vietjet Air lại khá cao. <br> 
                Xét ở hạng ghế ngồi tương đương nhau, nếu bạn mua vé máy bay của các hãng giá rẻ, bạn sẽ không được phép hoàn vé (trả lại vé) và các bữa ăn trên máy bay đều phải trả tiền. Ngược lại, trên các chuyến bay của Vietnam Airlines bạn sẽ được phục vụ bữa sáng, trưa, tối và các bữa ăn nhẹ miễn phí. Đồng thời, mua vé của Vietnam Airlines bạn sẽ có quyền được hoàn vé (có mất phí). Tuy nhiên, đối với các hãng giá rẻ, nếu bạn chọn chỗ ngồi ở các hạng cao hơn, đồng nghĩa với việc giá vé sẽ tăng lên một chút, bạn cũng sẽ được hưởng những dịch vụ chất lượng không kém gì hãng hàng không quốc gia. </p>
              </div> 
          <div class="col"><h4>Cách Hình Thức Thanh Toán</h4>
          <p><h6> THANH TOÁN BẰNG TIỀN MẶT TẠI VĂN PHÒNG</h6>  <img src="./images/anhweb10.png" height = "30px">
              Sau khi đặt hàng thành công, Quý khách vui lòng qua văn phòng để thanh toán và nhận vé. </p>
          <p><h6> THANH TOÁN TẠI NHÀ </h6>  <img src="./images/anhweb10.png" height = "30px">
              Nhân viên ABAY sẽ giao vé & thu tiền tại nhà theo địa chỉ Quý khách cung cấp. </p>
          <p><h6> THANH TOÁN QUA CỔNG THANH TOÁN ĐIỆN TỬ.</h6> <img src="./images/anhweb11.png" height = "30px">
              Quý khách có thể thanh toán ngay (trực tuyến) qua cổng ZaloPay và Napas. </p>
          <p><h6> THANH TOÁN QUA CÁC CỬA HÀNG TIỆN ÍCH </h6> <img src="./images/anhweb12.png" height = "30px">
              Quý khách có thể qua các điểm giao dịch, cửa hàng tiện ích ngay gần nhà để thanh toán </p>
          <p><h6> THANH TOÁN QUA CHUYỂN KHOẢN </h6> <img src="./images/anhweb13.jpg" height = "40px">
              Quý khách có thể thanh toán bằng cách chuyển khoản trực tiếp tại ngân hàng, qua thẻ ATM, hoặc qua Internet banking. </p> 
              <img src="./images/anhweb14.jpg" height = "100px" width="500px"> </div>
        </div>
      </div>
    </section>
     <section>
      <div class="container-fluid fixDisplay1">
        <p> <center> <h4>  CÔNG TY ĐẶT VÉ MAY BAY TINBAY VIETNAM </center> </h4> </p>
      <div class="row">
          <div class="col">
           <p> <center> <img src="./images/anhweb92.jpg" height = "200px" width="300px"> <br>
            <strong> TINBAY TẠI TP HỒ CHÍ MINH <br> 52 Huỳnh Khương Ninh, P.Ða Kao, Q1, Tp Hồ Chí Minh <br> Tel: (+024) 7300 6091 - Fax: (+028) 38 48 7160 </center> </strong> </p>
      </div>
      <div class="col">
           <p> <center> <img src="./images/anhweb93.jpg" height = "200px" width="300px"> <br>
          <strong> TINBAY TẠI TP HÀ NỘI <br> 324 Phố Huế, Q.Hai Bà Trưng, Hà Nội  <br> Tel: (+024) 7300 6091 - Fax: (+024) 35 33 5403 </center> </strong> </p>
      </div>
    </section> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     </div>
  </body>
</html>
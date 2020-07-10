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
    <link rel="stylesheet" type="text/css" href="css/stylelienhe.css">

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
            <li class="nav-item">
              <a class="nav-link" href="TrangChu.php" target="_top">Trang Chủ</a>
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
                <a class="nav-link active" href="LienHe.php">Liên Hệ</a>
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
          <div class="col-sm-6 col-md-7"><h4> CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN ABAY </h4>
            <p> <strong> Thắc mắc & góp ý: 19006091 <br> Phàn nàn & khiếu nại: 19006091 <br> Liên hệ hóa đơn: 19006091 - 1900 6091 <br> 
              Liên hệ thanh toán: 19006091 - 1900 6091 <br> Liên hệ đặt vé nội địa: 19006091 <br> Liên hệ đặt vé quốc tế: 19006091 <br> Liên hệ hợp tác: 0912.888.766Liên hệ khác: 19006091, 024.7300.6091 </strong> </p>
            <p> <strong> Địa chỉ văn phòng tại Tp. Hồ Chí Minh </strong>  <br> 
              52 Huỳnh Khương Ninh, P.Ða Kao, Q1, Tp Hồ Chí Minh <br> 
              Điện thoại  (+024) 7300 6091 <br> 
              Fax (+028) 38 48 7160 <br>
              Email contact@abay.vn <br> 
              
              <strong> Địa chỉ văn phòng tại Hà Nội </strong> <br> 

              324 Phố Huế, Q.Hai Bà Trưng, Hà Nội <br>
              Điện thoại  (+024) 7300 6091 <br>
              Fax (+024) 35 33 5403 <br> 
              Email contact@abay.vn <br> </p>
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
      <section>
      <div class="container fixDisplay">
        <div class="row">
          <div class="col">
          <img src="./images/anhweb76.png" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Ngoại thương Việt Nam - Vietcombank </strong> <br>
          Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> 
          Số tài khoản :  0021000257522 <br> 
          Chi Nhánh Hà Nội <br> </p>
      </div>
      <div class="col">
          <img src="./images/anhweb77.png" height = "100px" width="500px">
          <p> <strong> Ngân Hàng TMCP Kỹ Thương Việt Nam </strong> <br>
          Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br>
          Số tài khoản :  19025481915019 <br>
          Chi Nhánh Hoàn Kiếm <br> </p>
      </div>
    </section>
    <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb79.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Á Châu - ACB </strong> <br> 
          Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br>
            Số tài khoản :  142008859 <br>
          Phòng giao dịch Giảng Võ <br>
          Chi Nhánh: Sài Gòn </p>
      </div>
      <div class="col">
          <img src="./images/anhweb78.jpg" height = "100px" width="500px">
          <p> <strong> Ngân Hàng TMCP Đông Á </strong> <br> 
            Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br>
            Số tài khoản :  008705010001 <BR>
            Chi Nhánh Hà Nội </p>
      </div>
    </div>
    </section>
    <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb80.jpg" height = "100px" width="500px">
          <p> <strong> Ngân Hàng Đầu Tư Và Phát Triển Việt Nam - BIDV </strong> <br> 
            Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> 
            Số tài khoản :  21110000477911 <br> 
            Chi Nhánh Hà Nội </p>
      </div>
      <div class="col">
          <img src="./images/anhweb81.jpg" height = "100px" width="500px">
          <p> <strong> Ngân Hàng Nông Nghiệp Và Phát Triển Nông Thôn Việt Nam - Agribank </strong> <br> 
          Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> 
          Số tài khoản :  1422201000938 <br> 
          Phòng giao dịch Lý Thường Kiệt <br> 
          Chi Nhánh Đông Hà Nội </p>
      </div>
    </section>
    <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb82.png" height = "100px" width="500px">
          <p> <strong> NTMCP Công Thương Việt Nam - Vietinbank </strong> <br>
            Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br>
          Số tài khoản :  112000093008 <br>
          Chi Nhánh Đống Đa </p>
      </div>
      <div class="col">
          <img src="./images/anhweb83.png" height = "100px" width="500px">
          <p> <strong> Ngân hàng Quân Đội </strong> <br> 
            Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> Số tài khoản :  0021103663005 <br> Chi Nhánh Sở Giao Dịch</p>
      </div>
    </section>
    <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb84.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Hàng Hải Việt Nam </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> Số tài khoản :  11001010172374 <br> Chi Nhánh Sở Giao dịch </p>
      </div>
      <div class="col">
          <img src="./images/anhweb85.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Việt Nam Thịnh Vượng </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY  <br> Số tài khoản :  47030088  <br> Chi Nhánh Sở Giao dịch </p>
      </div>
    </section>
      <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb86.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Sài Gòn Thương Tín </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> Số tài khoản :  020023875862 <br> Chi Nhánh Sở Giao dịch </p>
      </div>
      <div class="col">
          <img src="./images/anhweb87.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Phát triển Tp Hồ Chí Minh </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY  <br> Số tài khoản :  021704070002418  <br> Chi Nhánh Sở Giao dịch </p>
      </div>
    </section>   
      <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb88.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Quốc tế Việt Nam (VIB) </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> Số tài khoản :  171814849366642 <br> Chi Nhánh Sở Giao dịch </p>
      </div>
      <div class="col">
          <img src="./images/anhweb89.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Sài Gòn - Hà Nội - SHB </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY  <br> Số tài khoản :  1009414625  <br> Chi Nhánh Sở Giao dịch </p>
      </div>
    </section>    <section>
    <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb90.png" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Tiên Phong - TPBank </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> Số tài khoản :  01712409501 <br> Chi Nhánh Sở Giao dịch </p>
      </div>
      <div class="col">
          <img src="./images/anhweb91.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Xuất Nhập Khẩu Việt Nam - Eximbank </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY  <br> Số tài khoản :  171814849366642  <br> Chi Nhánh Sở Giao dịch </p>
      </div>
    </section> 
    <section>
      <div class="container fixDisplay">
      <div class="row">
          <div class="col">
          <img src="./images/anhweb90.png" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Tiên Phong - TPBank </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br> Số tài khoản :  01712409501 <br> Chi Nhánh Sở Giao dịch </p>
      </div>
      <div class="col">
          <img src="./images/anhweb91.jpg" height = "100px" width="500px">
          <p> <strong> Ngân hàng TMCP Xuất Nhập Khẩu Việt Nam - Eximbank </strong> <br> Tên tài khoản : CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY  <br> Số tài khoản :  171814849366642  <br> Chi Nhánh Sở Giao dịch </p>
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
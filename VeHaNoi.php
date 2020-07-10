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
    <link rel="stylesheet" type="text/css" href="css/stylevehanoi.css">

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
                  <a class="dropdown-item active" href="VeHaNoi.php">Vé Máy Bay Đi Hà Nội</a>
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
              <div class="container-fluid fixDisplay1">
                <center> <h4> Đặt Vé Máy Bay Đi Hà Nội </h4> </center>
                <div class="row">
                  <div class="col">
                   <form action="timsaigon.php" method="POST">
                    <div class="form-row">
                       <div class="form-group col-sm-5">
                        <center> <h6> <label for="exampleInputPassword1"> Nơi Đi </label> <h6> </center>
                        <select name='txtNoiDi' id="nhapnoidi" class="form-control"> 
                             <option selected> Hồ Chí Minh </option>
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
                             <option selected> Hà Nội </option>
                         </select>
                       </div>
                    </div>
                      <center> <button type="submit" class="btn btn-primary"> Tạo Lịch Trình Bay </button> </center>
                  </form>
             </div> 
             <div class="col">
              <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="500">
                    <img src="./images/anhweb114.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb115.png" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb116.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb117.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Hà Nội giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Hà Nội ? </h6> </p>
            <p> Hiện có 3 hãng hàng không nội địa khai thác đường bay đến Hà Nội là Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cùng với đó là các hãng hàng không quốc tế khai thác đường bay tới Hà Nội như Aeroflot, AirAsia, Asiana Airlines, Cebu Pacific, China Airlines, China Southern Airlines… <br> 15 thành phố có chuyến bay thẳng đến Hà Nội</p> 
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Hà Nội</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td>Thành phố Hồ Chí Minh </td> 
                      <td> 2h5p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr> 
                      <td> Đà Nẵng </td> 
                      <td> 1h20p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Nha Trang </td> 
                      <td> 1h50 </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                      <td> Phú Quốc </td> 
                      <td> 2h05p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr>   
                      <td> Huế </td> 
                      <td> 1h15p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Đà Lạt </td> 
                      <td> 1h50p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Cần Thơ </td> 
                      <td> 2h05p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr> 
                      <td> Quy Nhơn </td> 
                      <td> 1h35p </td> 
                      <td> Vietnam Airlines, VietJet Air, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Buôn Ma Thuột </td> 
                      <td> 1h40p </td>
                      <td> Vietnam Airlines, VietJet Air, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Pleiku </td> 
                      <td> 1h30p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Vinh </td> 
                      <td> 55p </td> 
                      <td> Vietnam Airlines, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Điện Biên Phủ </td> 
                      <td> 1h </td> 
                      <td> Vietnam Airlines </td>
                  </tr>
                  <tr>
                      <td> Tuy Hòa </td> 
                      <td> 1h40p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Đồng Hới </td> 
                      <td> 1h25p </td> 
                      <td> Vietnam Airlines, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Chu Lai </td> 
                      <td> 1h25p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Hà Nội là bao nhiêu? </h6> </p>
            <p> - Các chặng bay nội địa: Hiện có 15 đường bay từ các thành phố nội địa đến Hà Nội. ABAY.vn xin thống kê các đường bay cụ thể như sau: <br> Bảng giá vé tổng hợp của một số chặng bay đi Hà Nội <br>  Bạn có thể tham khảo giá vé máy bay đi Hà Nội ở các đường bay phổ biến dưới đây: </br> + Đường bay Tp Hồ Chí Minh – Hà Nội được khai thác bởi 4 hãng hàng không Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cụ thể: Vietnam Airlines có giá vé dao động từ 799.000 - 1.550.000/chiều. VietJet Air có giá vé khoảng 399.000đ - 599.000đ/chiều. Jetstar có giá vé dao động từ 590.000đ - 790.000đ/chiều. Còn Bamboo Airways có giá khoảng 880.000đ - 980.000đ. <br> + Đường bay Đà Nẵng – Hà Nội cũng được khai thác bởi 3 hãng hàng không Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cụ thể: Vietnam Airlines có giá vé dao động từ 399.000đ/chiều, VietJet Air có giá vé dao động trong khoảng 399.000đ/chiều. Jetstar có giá vé dao động trong khoảng 370.000đ/chiều. Trong khi đó Bamboo Airways có giá 299.000đ/ 1 chiều. <br> <strong> Lưu ý: Đây là giá vé 1 chiều, tính ở thời điểm hiện tại. Giá trên chưa bao gồm thuế phí. </strong> <br> -Ở các đường bay lớn như Đà Nẵng/ Nha Trang/ Tp Hồ Chí Minh – Hà Nội đều được khai thác bởi 4 hãng hàng không Vietnam Airlines, VietJet Air, Jetstar Pacific và Jetstar. Còn lại ở các đường bay như Đồng Hới/ Tuy Hòa/ Buôn Mê Thuột – Hà Nội hầu như chỉ được khai thác bởi hãng hàng không quốc gia Vietnam Airlines. <br> - Các chặng bay quốc tế: Ngoài các chặng bay nội địa còn có nhiều đường bay quốc tế đến Hà Nội như Bangkok – Hà Nội, Amsterdam – Hà Nội, London – Hà Nội…. Theo thống kê, hầu hết từ các thành phố thủ đô quốc tế trên thế giới hiện đều đã có đường bay tới Hà Nội. </p>

            <p> <h6> 3. Di chuyển từ sân bay tới trung tâm Tp Hà Nội và ngược lại như thế nào? </h6> </p>
            <p> <h6> 3.1. Những điều cần biết về sân bay quốc tế Nội Bài </h6> </p>  
              <img src="./images/anhweb24.jpg" height = "300px" width="500px"> </p>
            <p> Sân bay quốc tế Nội Bài thuộc huyện Sóc Sơn, nằm cách trung tâm thủ đô Hà Nội khoảng 35 km theo tuyến đường bộ về phía Tây Bắc. Từ sân bay di chuyển vào thành phố qua các tuyến đường như: hướng cầu Nhật Tân, hoặc hướng cầu Thăng Long, cầu Đông Trù. Sân bay quốc tế Nội Bài.<br> Sân bay Nội Bài hiện gồm 2 nhà ga hành khách: <br> -Nhà ga T1 của sân bay Nội Bài gồm 5 sảnh: A, B, C, D và E. Tầng 1 dành cho khách nội địa đi và đến, khu vực đảo trả hành lý, nơi chuyển hành lý đi. Tầng 2 là khu nội địa, check-in, dịch vụ, phòng khách VIP. Tầng 3 là khu văn phòng kỹ thuật. <br> Sảnh E được trang bị 38 quầy check-in và hệ thống an ninh kiểm soát.<br> - Vietnam Airlines và VASCO khai thác tại sảnh B, băng chuyền 1, 2, 3. Quầy check-in của Vietnam Airlines và VASCO được đánh số từ quầy A20-A32 và B01-B28. <br> - Khu vực làm thủ tục của Jetstar tại sảnh E – tầng 2 <br> - Khu vực làm thủ tục của VietJet Air quầy từ 101 đến 118 tại sảnh E – tầng 2. <br> Nhà ga số 2 (T2 - Nhà ga quốc tế). <br> Nhà ga T2 gồm 4 tầng, phục vụ tất cả các chuyến bay quốc tế của Vietnam Airlines, VietJet Air, Jetstar và các hãng hàng không quốc tế xuất phát từ hoặc đến Hà Nội. <br> Có xe buýt miễn phí di chuyển giữa hai nhà ga T1 và T2. <br>  Các dịch vụ tại sân bay quốc tế Nội Bài. <br> Tại các nhà ga của sân bay đều có sẵn các tiện nghi, dịch vụ như: Các nhà hàng và quán ăn, dịch vụ đưa đón, dịch vụ vận tải, dịch vụ đỗ xe, dịch vụ cho thuê xe, truy cập WiFi miễn phí, máy ATM, dịch vụ chăm sóc trẻ em, các dịch vụ liên quan tới hành lý (tủ khóa và lưu trữ hành lý, đóng gói hành lý), ngân hàng, khu vui chơi trẻ em, dịch vụ thu đổi ngoại tệ, quầy thông tin sân bay, dịch vụ y tế…</p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Nội Bài vào trung tâm thành phố </h6> </p>
             <img src="./images/anhweb25.jpg" height = "300px" width="500px"> </p>
            <p> <strong > 3.2.1. Mini Bus </strong> <br> Xe bus đi nội bài của Vietjet <br> Xe Bus đi Nội Bài của Vietjet Air <br> Một số hãng hàng không nội địa của Vietnam có dịch vụ minibus vận chuyển hành khách từ sân bay vào trung tâm thành phố. Đó là:  <br> Vietnam Airlines: 
            <br> - Lộ trình: Cầu Nhật Tân - đường Võ Nguyên Giáp - sân bay Nội Bài.  <br> - Thời gian xe chạy: 5h - 22h.  <br> - Thời gian giữa các chuyến: 30-45p.  <br> - Vị trí đón xe: Ở Hà Nội - đón xe tại số 1 Quang Trung; ở Nội Bài - đón xe trực tiếp trước cổng nhà ga T1.
            - Giá vé: 40.000 đồng/ lượt.
              VietJet Air:  <br>
              - Lộ trình xe: Sân bay Nội Bài - Phạm Văn Đồng - Hoàng Quốc Việt - Nguyễn Văn Huyên - Đào Tấn - Kim Mã - Nguyễn Thái Học - Trần Nhân Tông.  <br>
              - Thời gian xe chạy: Khoảng 60p/ lượt.  <br>
              - Xe trả khách theo yêu cầu dọc theo lộ trình, điểm trả khách cuối cùng là công viên Thống Nhất tại cổng Trần Nhân Tông.
              - Giá vé: 40.000 đồng/ lượt.  <br>
              Jetstar Pacific:  <br> - Lộ trình: Nội Bài - cầu Thăng Long - Phạm Văn Đồng - Hoàng Quốc Việt - Nguyễn Văn Huyên - Đào Tấn - Bến xe Ngọc Khánh.  <br> - Thời gian xe chạy: Khoảng 60p/ lượt.  <br> - Giá vé: 40.000 đồng/ lượt. </p>
            <p> <strong> 3.2.2. Xe bus </strong> </p> 
              <img src="./images/anhweb26.jpg" height = "300px" width="500px"> </p>
            <p> Xe Bus đi Nội Bài từ thành phố Hà Nội  <br> Xe Bus 86 đi từ trung tâm TP Hà Nội về Sân bay Nội Bài  <br> Hiện tại có 4 tuyến xe bus vận chuyển hành khách từ trung tâm thành phố đến sân bay gồm:  <br> Tuyến bus 07: Cầu Giấy – Nội Bài  <br>
              - Giá vé 8.000 đồng/ lượt.  <br>
              - Thời gian đi lại: 1h.  <br>
              - Tần suất: 3-8-13-20p/ chuyến.  <br>
              - Thời gian xe hoạt động: 5h - 22h35p. <br>
              - Vị trí đón khách tại sân bay: Cổng soát vé xe ra sân bay ở bên phải sảnh E nhà ga T1; khu vực đón bus ở bãi đỗ xe tay trái nhà ga T2.  <br>
              Tuyến bus 17: Long Biên – Nội Bài.  <br>
              - Giá vé 9.000 đồng/ lượt.  <br>
              - Thời gian đi lại toàn tuyến: 1h30p - 2h.  <br>
              - Tần suất: 10-15-20p/ chuyến.  <br>
              - Thời gian hoạt động: 5h10p - 21h55p.  <br>
              - Vị trí đón khách tại sân bay: Cổng soát vé xe ra sân bay ở bên phải sảnh E nhà ga T1. Xe bus 17 không chạy qua nhà ga T2. <br> 
              Tuyến bus 86: Ga Hà Nội – Sân bay Nội Bài.  <br>
              - Giá vé: 35.000 đồng/ lượt.  <br>
              - Thời gian vận hành toàn tuyến: 40 - 50p.  <br>
              - Tần suất: 25-30p/ chuyến.  <br>
              - Thời gian hoạt động: 5h05p - 21h40p  <br> 
              - Vị trí đón khách tại sân bay: Cửa ra ga đến ở sảnh B, sảnh E nhà ga T1; cửa nhà ga T2.  <br> 
              Tuyến bus 90:  Kim Mã – cầu Nhật Tân – Nội Bài  <br>
              - Giá vé: 9.000 đồng/ lượt.  <br> 
              - Thời gian vận hành toàn tuyến: 50p.  <br>
              - Tần suất: 20-30p/ lượt.  <br>
              - Thời gian hoạt động:  <br>
              + Từ Kim Mã: 5h30p - 21h10p.  <br>
              + Từ sân bay Nội Bài: 6h40p - 22h30p.  <br>
              - Vị trí đón khách tại sân bay: Cổng soát vé xe ra sân bay ở bên phải sảnh E nhà ga T1; khu vực đón xe bus ở phía bãi đỗ xe.  </p>
              <p> <h6> 3.2.3. Taxi </h6> </p>
              <p> Taxi được xem là phương tiện di chuyển khá đơn giản, tiện lợi khi di chuyển từ sân bay về trung tâm thành phố với mức giá dao động từ 150.000đ – 300.000đ/chiều. Thường thì giá taxi từ sân bay về thành phố sẽ cao hơn chiều ngược lại. Hành khách có thể đón taxi ngay sau khi rời khỏi ga đến của sân bay. </p> 
              <p> <h6>  3.2.4. Dịch vụ xe cá nhân </h6> </p> 
              <p> Tại sảnh sau khi rời khỏi ga sân bay, bạn sẽ nhận được khá nhiều lời mời chào từ các tài xế có xe ô tô cá nhân. Họ có dịch vụ đưa khách đến sân bay vì thế chiều về sẽ có xe trống. Do đó lựa chọn này sẽ có giá mềm hơn so với taxi thường và bạn có thể mặc cả. </p>
              <p> <h6> 3.2.5. Thuê xe ô tô </h6></p>
              <p> - Ngoài các phương tiện như bus, minibus, taxi, hành khách cũng có thể thuê một chiếc ô tô để tự lái khi di chuyển giữa sân bay và trung tâm thành phố. Một chuyến đi ô tô từ sân bay đến trung tâm thành phố có thể mất khoảng 40p, nhưng cũng có thể hơn kém một chút, tùy thuộc tình trạng giao thông và điểm đến cụ thể.  <br>
              -Tại trung tâm thành phố, hành khách có thể dễ dàng thuê một chiếc ô tô. Trong khi đó, tại sân bay Nội Bài, hành khách có thể tìm thuê xe tại một số công ty cho thuê xe ở sảnh đến. </p>
              <p> <h6> 4. Bay đến Hà Nội bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Hà Nội </h6>
                <img src="./images/anhweb27.jpg" height = "300px" width="500px"> </p>
              <p> Mùa thu là mùa đẹp nhất trong năm tại Hà Nội.  <br> Thời tiết Hà Nội được chia thành 4 mùa: xuân, hạ, thu và đông. Mỗi mùa đều có những đặc điểm riêng, vẻ đẹp riêng cuốn hút du khách. Tuy nhiên, mùa thu vào khoảng tháng 8 - tháng 11 được xem là thời gian tuyệt vời nhất để ghé thăm Hà Nội. Lúc này, Hà Nội đã đi qua mùa mưa, không còn là mùa hè nóng nực nhưng cũng chưa tới mùa đông lạnh giá. Mùa thu Hà Nội với bầu trời xanh ngắt, chút nắng hanh vàng và gió heo may se lạnh, là kiểu thời tiết vô cùng lý tưởng cho các hoạt động du lịch và khám phá của du khách. Không những vậy, Hà Nội mùa thu cũng vốn nổi tiếng với hương hoa sữa, hương cốm mới và hình ảnh những con đường ngập lá vàng rơi cực kỳ lãng mạn.  <br> Mùa xuân và mùa đông ở Hà Nội, tiết trời thường se lạnh. Nếu như bạn muốn một lần tận hưởng cái lạnh của Hà Nội mà không quá buốt giá, lại thêm chút mưa phùn mùa xuân và ngắm chồi lộc non thì cũng có thể ghé thăm thủ đô trong thời gian này. <br> Cuối cùng, mùa hè ở Hà Nội thì vô cùng nóng, có lúc đỉnh điểm lên tới 40 độ C. Các du khách tới Hà Nội vào mùa này thường kết hợp du lịch một số điểm đến gần đó như Sa Pa, Mộc Châu, Mai Châu, Cát Bà, Hạ Long… </p>
              <p> <h6> 4.2. Tới Hà Nội, ở đâu?  </h6></p>
              <p> Ở Hà Nội, hệ thống nhà nghỉ, khách sạn vô cùng đa dạng và phong phú. Tùy thuộc vào mục đích du lịch cũng như khả năng tài chính, bạn có thể chọn lựa một nơi nghỉ phù hợp nhất cho mình.  <br>
              Ngoài khách sạn, bạn cũng có thể lựa chọn căn hộ cho thuê hoặc homestay với giá khoảng 600.000đ – 800.000đ/ngày. Loại hình này có ưu điểm là khá thoải mái và đầy đủ tiện nghi, không gian riêng tư như bạn đang lưu trú trong ngôi nhà của riêng mình vậy.  <br>
              Khu vực phố cổ  <br>
              Tại đây giá phòng khá cao vì là trung tâm du lịch. Bạn có thể dễ dàng tìm được khách sạn ưng ý tại: phố hàng Hành, hàng Mành, Chân Cầm, Hàng Trống, hoặc Gia Ngư, Cầu Gỗ…  <br>
              Một điểm cần lưu ý là các khách sạn này thường sẽ có không gian nhỏ, cao tầng, phòng ít hoặc không có cửa sổ. Tuy nhiên lợi thế là từ khách sạn bạn có thể đi bộ đến các điểm du lịch rất tiện lợi như phố Tạ Hiện, Hàng Mã, nhà thờ lớn, hồ Hoàn Kiếm, các phố ăn vặt như ngõ chợ Đồng Xuân, Tô Tịch, Hàng Chiếu… hay phố mua sắm như Hàng Đào, Đinh Liệt hay xa hơn chút là nhà tù Hỏa Lò, chùa Quán Sứ…  <br>
              Khu vực hồ Tây  <br>
              Tại đây bạn sẽ dễ dàng kiếm được những phòng có view hồ rất đẹp và thoáng. Du khách tới Hà Nội thường chọn khách sạn tại khu vực Yên Phụ, Yên Hoa, Nguyễn Khắc Hiếu, Nghi Tàm, Nguyễn Trường Tộ, Châu Long, Hàng Bún hoặc đường Tây Hồ, Xuân Diệu…
              Lưu trú tại khu vực này bạn sẽ di chuyển được thuận lợi tới các điểm như: Lăng Bác, Phủ Tây hồ với món bánh tôm đặc trưng, con đường gốm sứ, công viên nước hồ Tây, chùa Trấn Quốc, phố phở cuốn Ngũ Xã, chùa Kim Liên, Văn Miếu Quốc Tử Giám, Hoàng thành Thăng Long…  </p><p> <h6> 4.3. Tới Hà Nội, đi đâu? <h6> </h6> 
                <img src="./images/anhweb28.jpg" height = "300px" width="500px"> </p>
              <p> Phố Cổ Hà Nội. <br> Phố cổ Hà Nội. <br> Hà Nội có rất nhiều điểm du lịch, các di tích lịch sử cũng như các danh lam thắng cảnh ấn tượng. <br> Đến Hà Nội, chắc chắn không một du khách nào có thể bỏ qua: Lăng Chủ tịch Hồ Chí Minh, hồ Hoàn Kiếm, Hoàng thành Thăng Long, Văn Miếu Quốc Tử Giám… <br> Các trung tâm mua sắm, trung tâm thương mại, vui chơi giải trí: Vincom, Royal City, Times City, Aeon Mall Long Biên, phố đi bộ, phố bia Tạ Hiện, chợ đêm phố cổ… <br> Phố bia Tạ Hiện và khu vực phố cổ là địa điểm lý tưởng cho những bạn mê đồ ăn vặt cũng như thích thưởng thức không khí sôi động, nhộn nhịp của các quán bar, pub. <br> Các điểm du lịch ngoại thành Hà Nội: Khoang Xanh Suối Tiên - Thiên Sơn Suối Ngà, chùa Hương, Thiên đường Bảo Sơn... </p> 
              <p> <h6> 4.4. Tới Hà Nội, ăn gì? </h6> </p> 
                <img src="./images/anhweb29.jpg" height = "300px" width="500px"> </p>
              <p> Hà Nội được mệnh danh là “kinh đô ẩm thực” với rất nhiều món ăn ngon nổi tiếng. Sau đây là một số món ăn mà bạn nhất định nên thử đi tới Hà Nội: Bún chả Hàng Quạt, Bún ốc ngõ chợ Đồng Xuân, Miến gà hàng Buồm, Phở Bát Đàn, Bánh cuốn bà Hoành - Tô Hiến Thành, Bún đậu mắm tôm ngõ 31 Hàng Khay, Nộm Hàm Long, Mỳ gà tần hàng Cân, Xôi Yến 35B Nguyễn Hữu Huân, Nem chua nướng số 10 Ấu Triệu, Nem rán ngõ Tạm Thương, Bún ngan và chả ngan nướng ở vỉa hè phố Hàng Bông (gần ngã tư Phủ Doãn, Hà Nội), Chè xoài Nguyễn Trường Tộ, Lòng nướng phố Gầm Cầu, Phở cuốn Hương Mai – Ngũ Xã, Bánh mì sốt vang 252 Hàng Bông, Mỳ vằn thắn Bình Tây ở phố Hàng Chiếu, Bánh đúc nóng phố Lê Ngọc Hân,… </p>
              <p> <h6> 5. Săn đặt vé máy bay đi Hà Nội giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Hà Nội </h6> </p> 
              <p> Theo kinh nghiệm của nhiều du khách, những dịp lễ, Tết là thời gian cao điểm về vé máy bay đi Hà Nội, đối với Tết nguyên đán là chiều trước Tết. Bạn có thể tránh những dịp này, đi sớm hoặc muộn hơn vài ngày để không phải mua vé với giá quá cao. Nếu thực sự phải đi vào chính dịp lễ, Tết (chẳng hạn về quê dịp Tết âm lịch) thì hãy có kế hoạch mua vé sớm. <br> 
              Vào các thời điểm cụ thể trong năm, các hãng hàng không đều có chương trình khuyến mại giá rẻ. Bạn có thể tham khảo các chương trình Chào Hè, Mùa thu Vàng của Vietnam Airlines; khuyến mại 0 đồng của VietJet Air… Nếu không cần thời gian cố định, bạn có thể chờ săn vé đi Hà Nội vào những dịp này để tiết kiệm nhất. <br> Ngay cả trong cùng một ngày, việc bạn chọn khung giờ nào cũng ảnh hưởng tới giá vé. Trong đó, các chuyến bay lúc sáng sớm và đêm muộn thường sẽ có giá thấp hơn so với các khung giờ bay khác. Nếu như bạn không đi cùng trẻ nhỏ, người già, người có vấn đề về sức khỏe, thì hoàn toàn có thể chọn khung giờ bay sáng sớm hoặc đêm muộn để tiết kiệm chi phí. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Hà Nội tại ABAY.vn </h6> </p>
              <p> Hiện tại, vé máy bay đi Hà Nội tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như tư vấn giấy tờ thủ tục bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả.  </p>
             
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
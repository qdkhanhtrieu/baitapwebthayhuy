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
    <link rel="stylesheet" type="text/css" href="css/stylevesaigon.css">

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
                  <a class="dropdown-item active" href="JetstarPacific.php" target="_top">Jetstar Pacific</a>
                  <a class="dropdown-item" href="BambooAirways.php" target="_top">Bamboo Airways</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vé Nội Địa</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="VeHaNoi.php">Vé Máy Bay Đi Hà Nội</a>
                  <a class="dropdown-item active" href="VeSaiGon.php">Vé Máy Bay Đi Sài Gòn</a>
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
                <center> <h4> Đặt Vé Máy Bay Đi Sài Gòn </h4> </center>
                <div class="row">
                  <div class="col">
                   <form action="timsaigon.php" method="POST">
                    <div class="form-row">
                       <div class="form-group col-sm-5">
                        <center> <h6> <label for="exampleInputPassword1"> Nơi Đi </label> <h6> </center>
                        <select name='txtNoiDi' id="nhapnoidi" class="form-control"> 
                             <option selected> Hà Nội</option>
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
                             <option selected> Hồ Chí Minh </option>
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
                    <img src="./images/anhweb131.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb132.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb133.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb134.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Sài Gòn giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến TP.Hồ Chí Minh ? </h6> </p>
            <p> Hiện có 3 hãng hàng không nội địa khai thác đường bay đến Hà Nội là Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cùng với đó là các hãng hàng không quốc tế khai thác đường bay tới Hà Nội như Aeroflot, AirAsia, Asiana Airlines, Cebu Pacific, China Airlines, China Southern Airlines… <br> 15 thành phố có chuyến bay thẳng đến Sài Gòn</p> 
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Sài Gòn</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Hồ Chí Minh </td> 
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
                      <td> 1h05 </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                      <td> Phú Quốc </td> 
                      <td> 1h </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr>   
                      <td> Huế </td> 
                      <td> 1h25p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Đà Lạt </td> 
                      <td> 50p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr>
                      <td> Buôn Ma Thuột </td> 
                      <td> 55p </td>
                      <td> Vietnam Airlines, VietJet Air, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Pleiku </td> 
                      <td> 1h30p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Quy Nhơn </td> 
                      <td> 1h10p </td>
                      <td> Vietnam Airlines, VietJet Air, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Thanh Hóa </td> 
                      <td> 1h55p </td>
                      <td> Vietnam Airlines, VietJet Air, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Vinh </td> 
                      <td> 1g45p </td> 
                      <td> Vietnam Airlines, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Buôn Mê Thuột </td> 
                      <td> 55p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Pleiku </td> 
                      <td> 1h10p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Đồng Hới </td> 
                      <td> 1h35p </td> 
                      <td> Vietnam Airlines, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Cà Mau </td> 
                      <td> 1h </td> 
                      <td> Vietnam Airlines </td>
                  </tr>
                  <tr>
                      <td> Rách Giá </td> 
                      <td> 50p </td> 
                      <td> Vietnam Airlines </td>
                  </tr>
                  <tr>
                      <td> Vân Đồn </td> 
                      <td> 2h </td> 
                      <td> Bamboo Airways </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Hồ Chí Minh là bao nhiêu? </h6> </p>
            <p> - Các chặng bay nội địa: Hiện có 17 đường bay từ các thành phố nội địa đến Sài Gòn. ABAY.vn xin thống kê các đường bay cụ thể như sau: <br> Bảng giá vé tổng hợp của một số chặng bay đi Hà Nội <br>  Bạn có thể tham khảo giá vé máy bay đi Hà Nội ở các đường bay phổ biến dưới đây: </br> + Đường bay Tp Hồ Chí Minh – Hà Nội được khai thác bởi 4 hãng hàng không Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cụ thể: Vietnam Airlines có giá vé dao động từ 799.000 - 1.550.000/chiều. VietJet Air có giá vé khoảng 399.000đ - 599.000đ/chiều. Jetstar có giá vé dao động từ 590.000đ - 790.000đ/chiều. Còn Bamboo Airways có giá khoảng 880.000đ - 980.000đ. <br> + Đường bay Đà Nẵng – Hồ Chí Minh cũng được khai thác bởi 3 hãng hàng không Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cụ thể: Vietnam Airlines có giá vé dao động từ 399.000đ/chiều, VietJet Air có giá vé dao động trong khoảng 399.000đ/chiều. Jetstar có giá vé dao động trong khoảng 370.000đ/chiều. Trong khi đó Bamboo Airways có giá 299.000đ/ 1 chiều. <br> <strong> Lưu ý: Đây là giá vé 1 chiều, tính ở thời điểm hiện tại. Giá trên chưa bao gồm thuế phí. </strong> <br> -Ở các đường bay lớn như Đà Nẵng/ Nha Trang/ Tp Hồ Chí Minh – Hà Nội đều được khai thác bởi 4 hãng hàng không Vietnam Airlines, VietJet Air, Jetstar Pacific và Jetstar. </p>

            <p> <h6> 3. Di chuyển từ sân bay tới trung tâm Tp Hồ Chí Minh và ngược lại như thế nào? </h6> </p>
            <p> <h6> 3.1. Những điều cần biết về sân bay quốc tế Tân Sơn Nhất </h6> </p>  
            <p> Sân bay quốc tế Tân Sơn Nhất tọa lạc trên địa bàn phường 2, quận Tân Bình, Sài Gòn. Sân bay Tân Sơn Nhất nằm cách trung tâm thành phố khoảng chừng 8km về phía Bắc, phía Tây sân bay giáp đường Trường Chinh; phía Tây Bắc giáp đường Phạm Văn Bạch và đường Tân Sơn quận Tân Phú; phía Đông giáp đường Quang Trung quận Gò Vấp; phía Nam giáp đường Cộng Hòa/ Hoàng Văn Thụ quận Tân Bình. <br> Sân bay Tân Sơn Nhất có 2 ga hành khách là nhà ga nội địa và nhà ga quốc tế. </p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Tân Sơn Nhất vào trung tâm thành phố </h6> 
               <img src="./images/anhweb30.jpg" height = "300px" width="500px"> </p>
            <p> <strong > 3.2.1. Mini Bus </strong> <br> Nếu ít hàng hóa, đồ đạc mà muốn tiết kiệm chi phí, bạn có thể lựa chọn sử dụng dịch vụ xe buýt/xe bus sân bay Tân Sơn Nhất. Hiện tại đang có 4 tuyến xe buýt sân bay Tân Sơn Nhất bao gồm: <br> Tuyến xe buýt 152: Sân bay Tân Sơn Nhất - Chợ Bến Thành - Khu dân cư Trung Sơn. <br> - Lộ trình: Ga đến quốc tế - Ga đến quốc nội - Hoàng Văn Thụ - Nguyễn Văn Trỗi - Nam Kỳ Khởi Nghĩa - Cách Mạng Tháng Tám - Chợ Bến Thành - Trần Hưng Đạo - Khu dân cư Trung Sơn. <br> - Thời gian hoạt động: 5h45p – 18h15p <br> - Thời gian chờ: 12 – 21p. <br> - Giá vé: 6.000đ/người. <br>
            Tuyến xe buýt 109: Sân bay Tân Sơn Nhất - Công viên 23/9. <br> 
            - Lộ trình lượt đi: Sân bay Tân Sơn Nhất (ga Quốc tế) - Sân bay Tân Sơn Nhất (ga Quốc nội) - Trường Sơn - Trần Quốc Hoàn - Hoàng Văn Thụ - Nguyễn Văn Trỗi - Nam Kỳ Khởi Nghĩa - Hàm Nghi - Trạm Bến Thành - Phạm Ngũ Lão - Công viên 23/9. <br>
            - Lộ trình lượt về: Công viên 23/9 - Lê Lai - Vòng xoay Quách Thị Trang - Phạm Ngũ Lão - Yersin - Trần Hưng Đạo - Trạm Bến Thành - Lê Lợi - Pasteur - Võ Thị Sáu - Nam Kỳ Khởi Nghĩa - Nguyễn Văn Trỗi - Phan Đình Giót - Trường Sơn - Sân bay Tân Sơn Nhất (ga Quốc tế). <br>
            - Thời gian hoạt động: 5h30p – 1h30p (ngày hôm sau). <br>
            - Thời gian chờ: 30p <br>
            - Giá vé: 12.000đ/người (dưới 5 km) và 20.000đ/người (trên 5 km). <br> 
            Tuyến xe buýt 119: Sân bay Tân Sơn Nhất - Bến xe Miền Tây <br> 
            - Lộ trình: Sân bay quốc tế Tân Sơn Nhất – Trường Sơn – Trần Quốc Hoàn – Hoàng Văn Thụ – Xuân Diệu – Xuân Hồng – Trường Chinh – Lý Thường Kiệt – Bắc Hải – Thành Thái – Nguyễn Tri Phương – Nguyễn Chí Thanh – Nguyễn Thị Nhỏ – Hồng Bàng – Kinh Dương Vương – Bến xe Miền Tây và ngược lại. <br>
            - Thời gian hoạt động: 4h – 21h. <br>
            - Thời gian chờ: 15 – 30p <br>
            - Giá: 12,000 VND/người (dưới 5 km) và 20,000 VND/người (trên 5 km) <br>
            Tuyến xe buýt 49 - Sân bay Tân Sơn Nhất –Khu trung tâm thành phố (Quận 1, Quận 2) <br> 
            - Lộ trình: Ga đến quốc tế – Ga đến quốc nội – Trường Sơn – Trần Quốc Hoàn – Hoàng Văn Thụ – Nguyễn Văn Trỗi – Nam Kỳ Khởi Nghĩa – Lê Duẩn – Công Xã Paris – Đồng Khởi – Đông Du – Hai Bà Trưng – Tôn Đức Thắng – Hàm Nghi – Chợ Bến Thành – Phạm Ngũ Lão – Nguyễn Trãi – Lê Lai – Nguyễn Thị Nghĩa – Cách Mạng Tháng 8 – Điện Biên Phủ – Nam Kỳ Khởi Nghĩa – Nguyễn Văn Trỗi – Phan Đình Giót – Trường Sơn – Ga đến quốc tế <br> 
            - Thời gian hoạt động: 5h30p – 1h30p (ngày hôm sau) <br> 
            - Thời gian chờ: 30 phút.<br> - Giá: 40.000đ/người. <br> <strong> 3.2.2. Taxi </strong> <br> Taxi sân bay Tân Sơn Nhất là phương tiện di chuyển nhanh chóng và tiện lợi nhất. Với thời gian di chuyển tầm 5-10 phút tùy vào tình trạng giao thông. <br> Tại sân bay ngay cửa ra của sảnh lớn các bạn có thể dễ dàng đón taxi của các hãng như: Mai Linh, Airport Taxi, Sài Gòn Taxi… <br> Trên xe có đồng hổ hiển thị số km và số tiền, rất tiện cho các bạn theo dõi. Ngoài ra, để tránh những người lái taxi không trung thực, bạn có thể trả giá trước cho nơi đến. Giá trung bình để đi từ sân bay Tân Sơn Nhất đến trung tâm thành phố thường rơi vào khoảng 50 – 60.000 đồng. <br> Tuy nhiên các hãng taxi này chỉ hoạt động đến 22h và không đảm bảo chắc chắn có xe nếu đặt trước. <br> <strong> 3.2.3 Thuê xe ô tô cá nhân  </strong> <br> Ngoài xe buýt, taxi các bạn có thể thuê xe ô tô để chủ động cho việc di chuyển từ sân bay về trung tâm thành phố. Nếu bạn di chuyển đến sân bay bằng xe limousine, xe 7 chỗ, xe 16 chỗ, xin lưu ý thời gian dừng đỗ trước sảnh nhà ga là không quá 3 phút. Trường hợp dừng lâu hơn, bạn gửi xe tại bãi ô tô sân bay Tân Sơn Nhất. <br> Đối với xe ô tô đi vào nhà ga quốc nội : <br> - Chuyến bay Vietnam Airlines: khu vực cửa D1 <br> - Chuyến bay Jetstar và Vasco: khu vực cửa D2 <br> - Chuyến bay Vietjet: khu vực cửa D3. <br> - Chuyến bay đến: khu vực cửa A2 hoặc A3. <br> Đối với xe ô tô đi vào nhà ga quốc tế sân bay Tân Sơn Nhất, xe ô tô sẽ chạy theo hướng cầu vượt lên lầu 1 và xe ô tô sẽ dừng tại tầng trệt. </p>
            <p> <h6> 4. Bay đến Sài Gòn bạn cần lưu ý những điều gì </h6> </p>
            <p> <h6> 4.1. Thời điểm tốt nhất để đến Sài Gòn </h6>
                <img src="./images/anhweb31.jpg" height = "300px" width="500px"> </p>
              <p> Không giống với Hà Nội, thời tiết ở Sài Gòn được chia thành 2 mùa rõ rệt: Mùa khô và mùa mưa. Nhưng cái năng của Sài Gòn không gắt, những con mưa cũng không kéo quá dài. Do đó, bạn có thể đến Sài Gòn vào bất cứ thời điểm nào trong năm vì đây là thành phố sôi động, nhộn nhịp quanh năm. Bất cứ khi nào bạn cũng có thể ghé thăm Sài Gòn để trải nghiệm, vui chơi hay tìm hiểu những sự khác biệt của con người nơi đây.<br> Nhưng để chuyến đi du lịch Sài Gòn thêm ý nghĩa và đầy ắp kỷ niệm, bạn nên đến Sài Gòn vào dịp sau tết (tầm tháng 2, tháng 3) để tham gia lễ hội Rằm tháng giêng lớn nhất ở phố người Hoa và đại lễ hoa đăng tết Nguyên tiêu trên sông Sài Gòn… </p>
              <p> <h6> 4.2. Tới Sài Gòn, ở đâu?  </h6></p>
                <img src="./images/anhweb32.jpg" height = "300px" width="500px">
              <p> Ở Khách sạn ở Sài Gòn rất phong phú và đa dạng dao động từ vài trăm cho tới vài triệu tùy thuộc vào vị trí cũng chất lượng phòng. Do đó, tùy thuộc vào kinh phí cũng như mục đích của chuyến đi là nghỉ dưỡng hay khám phá mà các bạn hãy lựa chọn cho mình những khách sạn, nhà nghỉ phù hợp nhất. <br> Một lưu ý, khi đặt phòng khách sạn ở Sài Gòn đó là, để thuận tiện đi lại các bạn nên đặt phòng ở gần bến xe, điểm du lịch… nếu đi vào dịp nghỉ lễ, Tết cần đặt phòng sớm để tránh trường hợp hết phòng hoặc phải chịu mức giá cao. <br> Khách sạn chất lượng và tốt ở Sài Gòn thường tập trung ở những con phố như: Nguyễn Trãi, Lê Thánh Tông, khu vực chợ Bến Thành, khu phố Tây Phạm Ngũ Lão… <br>-Dưới đây là một số gợi ý nơi nghỉ trong các khu vực thuận tiện nhất cho việc thăm quan, khám phá Sài Gòn, các bạn có thể tham khảo: <br> <strong> Khu vực Chợ Bến Thành. </strong> <br> - Silverland Yen Hotel – địa chỉ: 73 - 75 Thủ Khoa Huân, Quận 1, Sài  Gòn, Việt Nam. Khách sạn 4 sao có mức giá dao động từ 3.060.00đ – 5.175.000đ/ngày đêm. <br> - Joviale Hotel – địa chỉ: 132 Lý Tự Trọng, Quận 1, Sài  Gòn, Việt Nam. Khách sạn 3 sao cung cấp chỗ nghỉ hiện đại và đẹp mắt với mức giá dao động từ 1.250.000đ – 2.250.000đ/ngày đêm. <br> - Moc Huong Hotel – địa chỉ: 26/12-13 Trương Định, Quận 1, Sài Gòn, Việt Nam. Moc Huong Hotel cung cấp chỗ ở giản dị và tiện nghi với mức giá phòng dao động từ 826.000đ – 1.270.000đ/ngày đêm.<br> - Ben Thanh Motel – địa chỉ: 24/10 Thủ Khoa Huân, Quận 1, Sài Gòn, Việt Nam. Nơi nghỉ ngày cung cấp các phòng giường đôi với mức giá từ 416.000đ/ngày đêm. <br> <strong> Khu phố Tây Phạm Ngũ Lão </strong> <br> - Khách Sạn Phoenix Sài Gòn – địa chỉ: 74 Bùi Viện, Quận 1, Sài Gòn. Khách sạn cung cấp các phòng nghỉ với mức giá chỉ từ 216.000đ/ngày đêm. <br> - Khách Sạn Anh Duy – địa chỉ: 103 Nguyễn Công Trứ, phường Nguyễn Thái Bình, Quận 1, Sài Gòn. Khách sạn cung cấp các phòng nghỉ với mức giá từ 404.000đ/ngày đêm. <br> - Khách Sạn New Sunny – địa chỉ:  232 Đề Thám, Quận 1, Sài Gòn. Khách sạn cung cấp các phòng nghỉ với mức giá từ 262.000đ/ngày đêm. <br> <strong> Khu vực đường Lê Thánh Tôn </strong> <br> - Zoolut Stay 271 – địa chỉ: 271 Lê Thánh Tôn, Bến Thành, Quận 1. Khách sạn cung cấp phòng nghỉ với mức giá từ 721.000đ/ngày đêm. <br> - Nhat Ha 1 Hotel – địa chỉ: 252 B-C, Lê Thánh Tôn, Bến Thành, Quận 1. Khách sạn cung cấp phòng nghỉ với mức giá từ 972.000đ/ngày đêm. <br> - Khách sạn The White 1 – địa chỉ: 255 - 257 Lê Thánh Tôn, P. Bến Thành. Khách sạn cung cấp phòng nghỉ với mức giá từ 760.000đ/ngày đêm. <br> Để có được chi phí cho chuyến đi của mình, các bạn nên liên hệ đặt phòng nghỉ sớm. Hoặc nếu đi vào mùa du lịch cao điểm thì việc đặt phòng sớm cũng giúp bạn tránh khỏi tình trạng hết phòng.  </p>
              <p> <h6> 4.3. Tới Sài Gòn, đi đâu? </h6> </p> 
              <p> Sài Gòn có nhiều điểm thăm quan, du lịch rất thú vị, tuy nhiên nếu bạn có ít thời gian lưu lại tại đây thì nên lên chi tiết danh sách các điểm đến theo chủ đề không thể bỏ qua. <br> Cụm các công trình kiến trúc lịch sử gồm có các điểm: bến Bạch Đằng, Dinh Độc Lập, bảo tàng Hồ Chí Minh, bảo tàng Tôn Đức Thắng, chợ Bến Thành, nhà hát thành phố, Ủy ban nhân dân thành phố, bưu điện thành phố, nhà thờ Đức Bà, phố đi bộ Nguyễn Huệ. Các điểm tham quan trên chỉ trong bán kính khoảng 2km nên bạn sẽ dễ dàng tham quan hết trong một buổi. <br>
              Cụm các điểm vui chơi giải trí bao gồm: phố Tây Bùi Viện, công viên văn hóa Đầm Sen, khu du lịch Suối Tiên, thiên đường giải trí Thỏ Trắng… <br> 
              Các khu trung tâm thương mại: Aeon Mall Tân Phú, trung Tâm Thương mại Zen Plaza, Parkson, Sài Gòn, Diamond Plaza, Vicom Center, Cresent mall… <br>
              Các công viên nghỉ mát và vui chơi: Thảo Cầm Viên, công viên Tao Đàn, công viện Gia Đình, công viên Lê Văn Tám… <br>
              Địa điểm chụp hình điểm ở Sài Gòn: phố đi bộ Nguyễn Huệ, khu vực Nhà thờ Đức Bà, công viên 30/4 và Bưu điện thành phố, cầu Mống, khu vực cầu Ánh Sao và khu Phú Mỹ Hưng, Hồ Đá – Thủ Đức, khu Station 3A – Quận 1… </p>
              <p> <h6> 4.4. Tới Sài Gòn, ăn gì? </h6> </p> 
                <img src="./images/anhweb33.jpg" height = "300px" width="500px">
              <p> HLà nơi tập trung đông đảo dân cư, địa điểm du lịch “hot” ở miền Nam. Do vậy, ẩm thực Sài Gòn vô cùng phong phú, với những món ăn đặc trưng Nam Bộ hoặc du nhập các miền đất trên cả nước. Dưới đây, là những món ăn nổi tiếng ở Sài Gòn mà bạn không nên bỏ qua: <br> Cơm tấm Sài gòn <br> - Cơm Tấm Cali : 32 Nguyễn Trãi, P. Bến nghé, Quận 1, TP. HCM <br> - Cơm Tấm Ba Ghiền: 84 Đặng Văn Ngữ, P. 10,  Quận Phú Nhuận, TP. HCM <br> - Cơm Tấm Thuận Kiều : 46 Đinh Tiên Hoàng, P. Đakao, Quận 1, TP. HCM <br> 
              Bánh tráng phơi sương ngon ở Sài Gòn <br> 
              - Bánh tráng Trảng Bàng Hoàng Ty 1 : 691B Xô Viết Nghệ Tĩnh, Bình Thạnh 
              <br>  - Bánh tráng : 441 Nguyễn Tri Phương Quận 10 <br>
              Quán bánh mì bít tết <br>
              - Bánh mì bít tết Lệ Hồng: 489/27/29 Huỳnh Văn Bánh, Phú Nhuận <br>
              - Bánh mì tươi 62 Mạc Đỉnh Chi phường Đakao <br>
              Bánh bèo <br>
              - Bánh bèo Thôn Vỹ: 142 Sư Vạn Hạnh Nối Dài Quận 10 <br>
              - Quán bánh bèo bì Bà Ba: 106 Lý Thường Kiệt quận 10 <br>
              - Bánh xèo Đinh Công Tráng : 49A Đinh Công Tráng, Quận 1 <br> 
              Bánh Khọt <br>
              - Bánh khọt Vũng Tàu: 218 Lê Lai (Quán lề đường) <br>
              - Bánh khọt Cô Ba: 59B Cao Thắng, Quận 3 <br>
              Bánh Canh <br>
              - Bánh canh Cua : 78A Thiên Phước, phường 9, Quận Tân Bình <br>
              - Bánh canh Nam Phổ : 22b Nguyễn Hữu Cầu, Quận 1 <br>
              Các món hải sản <br>
              - Quán Phụng Vĩ: 293BIS Nguyễn Tri Phương, phường 5, quận 10. <br>
              - Hồng Hải: 72 Nguyễn Đình Chiểu , qua ngã 4 Đinh Tiên Hoàng <br>
              Hủ tiếu, bánh canh…: Nguyễn Trãi - Lương Nhữ Học <br>
              <p> <h6> 5. Săn đặt vé máy bay đi Sài Gòn giá rẻ nhất như thế nào? </h6> <p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Sài Gòn </h6> </p> 
              <p> Mùa khô từ tháng 12 đến tháng 4 năm sau được biết đến là mùa du lịch cao điểm tại Sài Gòn, vì vậy những tấm vé máy bay đến thành phố này cũng theo đó mà tăng giá. Nếu bạn muốn đến Sài Gòn vào khoảng thời gian nay để khám phá văn hóa, trải nghiệm lối sống sôi động, nhộn nhịp thì nên lên lịch đặt vé sớm để được hưởng mức gái tốt nhất. <br>

              Bên cạnh đó, vào các thời điểm cụ thể trong năm, các hãng hàng không nội địa đều có chương trình khuyến mại, bán vé máy bay giá rẻ. Chẳng hạn: Chào Hè, Mùa thu Vàng của Vietnam Airlines; khuyến mại 0 đồng của VietJet Air… Vào những dịp đặc biệt, hãng hàng không Bamboo Airways sẽ có những chương trình siêu khuyến mãi dành cho khách hàng, nếu nhanh tay thì bạn rất dễ dàng đặt  mua được vé máy bay đi Sài Gòn giá tốt. <br>

              Ngay cả trong cùng một ngày, việc bạn chọn khung giờ bay nào cũng ảnh hưởng tới giá vé. Trong đó, các chuyến bay lúc sáng sớm và đêm muộn thường sẽ có giá thấp hơn so với các khung giờ bay khác trong ngày. Nếu như bạn không đi cùng trẻ nhỏ, người già, người có vấn đề về sức khỏe, thì hoàn toàn có thể chọn đặt vé vào khung giờ bay sáng sớm hoặc đêm muộn để tiết kiệm chi phí. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Sài Gòn tại ABAY.vn </h6> </p>
              <p> Hiện tại, vé máy bay đi Sài Gòn tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như tư vấn giấy tờ thủ tục bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả.  </p>
             
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
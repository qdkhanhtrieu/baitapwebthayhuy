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
    <link rel="stylesheet" type="text/css" href="css/stylevedanang.css">

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
                <a class="nav-link" href="#">Lịch Vé Máy Bay<span class="sr-only">(current)</span></a>
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
                  <a class="dropdown-item active" href="VeDaNang.php">Vé Máy Bay Đi Đã Nẵng</a>
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
                <center> <h4> Đặt Vé Máy Bay Đà Nẵng </h4> </center>
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
                             <option selected> Đà Nẵng </option>
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
                    <img src="./images/anhweb106.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb107.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb108.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb109.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Đà Nẵng giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Đà nẵng ? </h6> </p>
            <p> Hiện có 3 hãng hàng không nội địa khai thác đường bay đến Hà Nội là Vietnam Airlines, VietJet Air, Bamboo Airways và Jetstar. Cùng với đó là các hãng hàng không quốc tế khai thác đường bay tới Hà Nội như Aeroflot, AirAsia, Asiana Airlines, Cebu Pacific, China Airlines, China Southern Airlines… </p> 
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Đà Nẵng</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td>Thành phố Hồ Chí Minh </td> 
                      <td> 1h25p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Hà Nội </td> 
                      <td> 1h20p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Hải Phòng </td> 
                      <td> 1h15 </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                      <td> Nha Trang </td> 
                      <td> 1h05p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>   
                      <td> Đà lạt </td> 
                      <td> 1h40p </td> 
                      <td> Vietnam Airlines </td>
                  </tr>
                  <tr>
                      <td> Cần Thơ </td> 
                      <td> 1h30p </td> 
                      <td> VietJet Air </td>
                  </tr>
                  <tr> 
                      <td> Cần Thơ </td> 
                      <td> 1h30p </td> 
                      <td> VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Buôn Ma Thuột </td> 
                      <td> 55p </td>
                      <td> Vietnam Airlines </td>
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
              </table>
            <p><h6> 2. Giá vé máy bay đi Đà Nẵng là bao nhiêu ?  </h6> </p>
            <p> Sẽ Được Cập Nhật Hằng Ngày  </p>
            <p> <h6> 3. Di chuyển từ sân bay quốc tế Đà Nẵng tới trung tâm thành phố Đà Nẵng và ngược lại như thế nào? </h6> </p>
            <p> <h6> 3.1. Những điều cần biết về sân bay quốc tế Đà Nẵng </h6> </p>  
              <img src="./images/anhweb40.jpg" height = "300px" width="500px"> </p>
              <p> - Sân bay quốc tế Đà Nẵng nằm ở Phường Hòa Thuận Tây, Quận Hải Châu, cách Trung tâm thành phố Đà Nẵng 3km về phía đông, giao thông rất thuận tiện theo nhiều hướng. <br> 
              - Từ sân bay đi Hội An là 30km, và khoảng cách đến Bà Nà vào khoảng 23km. Để tiện bạn có thể tham khảo đường đi trên Google Maps, hoặc hỏi đường người dân địa phương. <br>
              - Tính đến thời điểm hiện tại sân bay Đà Nẵng có 2 nhà ga: Nhà ga quốc nội (nhà ga T1) và nhà ga quốc tế (nhà ga T2). Vào năm 2015, sân bay quốc tế Đà Nẵng được vinh dự xếp vị trí 23 trong bảng xếp hạng 30 sân bay tốt nhất châu Á, theo The Guide to Sleeping in Airports. <br> 
              - Tại nhà ga T2, hãng Vietnam Airlines có 22 quầy làm thủ tục cố định tại tầng 2, cánh trái nhà ga. Quầy vé và quầy đại diện của Vietnam Airlines nằm đối diện khu vực thủ tục của hãng. Khu vực nhận hành lý của chuyến bay đến và quầy thông tin hành lý thất lạc được bố trí hợp lý tại khu vực cách ly đến ở tầng trệt. <br> 
            - Các chuyến bay quốc tế xuất phát từ Đà Nẵng của VietJet Air làm thủ tục tại nhà ga T2, lối vào B tại Cảng Hàng không Quốc tế Đà Nẵng. </p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Đà Nẵng vào trung tâm thành phố </h6> </p>
             <img src="./images/anhweb41.jpg" height = "300px" width="500px"> 
              <p> <strong > 3.2.1. Xe Buýt Sân Bay </strong> <br> Tổng cộng sân bay hiện có 08 tuyến xe bus khác nhau hoạt động gồm có cả loại có trợ giá (được hỗ trợ chi phí) và loại không trợ giá (bạn phải tự chi trả hoàn toàn chi phí). <br> Từ sân bay Dà Nẵng, ra cổng, sang đường chính Nguyễn Hữu Thọ là có thể chờ và bắt các tuyến xe bus theo ý muốn. Hãy sử dụng app DanaBus của Google Play Store (phiên bản dành riêng cho điện thoại di động) hoặc trang web danangbus.vn để chọn lựa tuyến đi phù hợp cho mình. <br> <strong>  Tuyến xe bus số 1: Đà Nẵng (Đường phía Đông bến xe Trung tâm)  – Hội An (bến xe Hội An) (Không trợ giá) </strong> <br> <strong > 3.2.1. Xe Buýt Sân Bay </strong> <br> Tổng cộng sân bay hiện có 08 tuyến xe bus khác nhau hoạt động gồm có cả loại có trợ giá (được hỗ trợ chi phí) và loại không trợ giá (bạn phải tự chi trả hoàn toàn chi phí). <br> Từ sân bay Dà Nẵng, ra cổng, sang đường chính Nguyễn Hữu Thọ là có thể chờ và bắt các tuyến xe bus theo ý muốn. Hãy sử dụng app DanaBus của Google Play Store (phiên bản dành riêng cho điện thoại di động) hoặc trang web danangbus.vn để chọn lựa tuyến đi phù hợp cho mình. <br> 
                <strong>  Tuyến xe bus số 1: Đà Nẵng (Đường phía Đông bến xe Trung tâm)  – Hội An (bến xe Hội An) (Không trợ giá) </strong> <br>  - Tần suất hoạt động: 15p – 20p/chuyến <br>
            - Thời gian hoạt động trong ngày: Từ 5h30p đến 18h hàng ngày. <br> 
            - Lộ trình di chuyển đi về: Đường phía Đông bến xe Trung tâm – đường phía Bắc – đường Tôn Đức Thắng – đường Điện Biên Phủ – đường Lê Duẩn – đường Trưng Nữ Vương – đường Cầu Nguyễn Văn Trỗi – đường Ngũ Hành Sơn –  Bến xe Hội An. <br> 
            <strong> Tuyến xe bus số 2: Kim Liên – Chợ Hàn </strong> <br> 
            - Tần suất hoạt động: 10p – 15p/chuyến <br> 
            - Thời gian hoạt động trong ngày: Từ 5h30p - 18h hàng ngày <br>
            - Lộ trình di chuyển: Chợ Kim Liên Đà Nẵng – đường Nguyễn Lương Bằng – đường Tôn Đức Thắng – đường Điện Biên Phủ – đường Lý Thái Tổ – đường Hùng Vương – đường Trần Phú – đường Trần Quốc Toản – đường Bạch Đằng. <br>
            <strong> Tuyến xe bus số 3: Đà Nẵng – Bến xe Ái Nghĩa </strong> <br>
            - Tần suất hoạt động: 20p – 30p/chuyến <br>
            - Thời gian hoạt động tuyến 3: Từ 5h30p - 18h hàng ngày <br>
            - Lộ trình di chuyển đi về: Bến xe trung tâm thành phố Đà Nẵng- đường Điện Biên Phủ – đường Lý Thái Tổ – đường Ông Ích Khiêm – đường Trưng Nữ Vương- đường Cánh Mạng tháng Tám – đường Ngã ba Hoà Đông- Ngã tư Ái Nghĩa – Bến xe Ái Nghĩa. <br>
            <strong> Tuyến xe bus số 4: Đà Nẵng – Thành phố Tam Kỳ (tuyến xe bus nối liền giữa bến xe Đà Nẵng và bến xe Quảng Nam) </strong> <br> - Tần suất hoạt động: Khoảng 30p/chuyến <br>
            - Thời gian hoạt động tuyến 4: Từ 5h30p đến 18h hàng ngày <br>
            - Lộ trình di chuyển đi về: đường Nguyễn Tất Thành – đường Quang Trung – đường Trần Cao Vân - đường Điện Biên Phủ – đường Nguyễn Hữu Thọ – đường Cánh Mạng Tháng Tám – đường Cầu Cẩm Lệ – đường Phan Bội Châu – đường Phan Chu Trinh – đường Hòa Hương – thành phố Tam Kỳ. <br>
            <strong> Tuyến xe bus số 6: Đà Nẵng – Mỹ Sơn </strong> <br>
            - Tần suất hoạt động: Khoảng 30 phút/chuyến <br>
            - Thời gian hoạt động trong ngày: Từ 5h30 đến 17h hàng ngày <br>
            - Lộ trình di chuyển đi - về: Bến xe thành phố Đà Nẵng – đường Lê Duẩn – đường Hoàng Hoa Thám- đường Lê Đình Lý – đường Nguyễn Tri Phương – đường Trưng Nữ Vương – đường Núi Thành  – đường Cánh Mạng tháng Tám –  Quốc lộ 1A –  Mỹ Sơn. <br>
            <strong> Tuyến xe bus số 11 </strong> <br>
            Đây là tuyến xe bus trợ giá mới được khai thác và đưa vào hoạt động chưa lâu nhưng nhận được phản hồi tích cực của khách hàng bởi phong cách phục vụ chuyên nghiệp và thái độ cực kỳ thân thiện. <br>
            - Tần suất hoạt động: Khoảng 20p/chuyến <br>
            - Thời gian hoạt động trong ngày: Từ 5h00 đến 21h hàng ngày <br>
            - Lộ trình di chuyển đi: Đường Hùng Vương – đường Lý Thái Tổ – đường Phạm Văn Nghị – đường Nguyễn Tri Phương – đường Nguyễn Hữu Thọ – đường Nguyễn Hữu Dật – đường Huỳnh Tấn Phát – đường 2/9 – Tiên Sơn ( nằm gần tại Siêu thị Lotte). <br> 
            - Lộ trình di chuyển về: Từ Tiên Sơn – đường Phan Đăng Lưu – đường Nguyễn Hữu Dật – đường Nguyễn Hữu Thọ – đường Lê Đình Lý – đường Phạm Văn Nghị – đường Lý Thái Tổ – đường Hùng Vương – đường Lê Duẩn – đường Ông Ích Khiêm – đường Nguyễn Tất Thành – Bãi đỗ xe Xuân Diệu. <br> <strong> Tuyến xe bus số 12 </strong> <br>
            - Tần suất hoạt động: Khoảng 15p – 20p/chuyến <br>
            - Thời gian hoạt động tuyến 12: Từ 5h00 đến 21h hàng ngày <br>
            - Lộ trình di chuyển đi - về: từ bến xe Hoàng Sa – đường Yết Kiêu – đường Ngô Quyền – đường Trần Thánh Tông – đường Lý Quang Nhật – đường Chu Huy Mân – đường Xuân Diệu – đường Đống Đa – đường Nguyễn Thị Minh Khai – đường Hùng Vương – đường Lê Đình Lý – cầu Duy Tân – đường Nguyễn Văn Thoại  và kết thúc tại Bãi đỗ xe Trường Sa. </p> 
              <p> <h6>  3.2.3. Dịch vụ xe cá nhân </h6> </p> 
              <p> Nếu đi một mình và ít hành lý thì lựa chọn đi xe ôm cũng khá ổn. Bởi xe ôm sân bay Đà Nẵng được đánh giá khá ổn với phong cách lịch sự, có đầy đủ thẻ nhân viên, mũ bảo hiểm, đồng phục gọn gàng. Giá xe ôm sân bay khoảng 25.000đ – 50.000đ thôi nhé. </p>
              <p> <h6> 3.2.4. Thuê xe ô tô </h6></p>
              <p> Với các bạn trẻ đi đôi hoặc đi theo nhóm thì thuê xe máy di chuyển khám phá cũng rất thú vị và thuận tiện. Có thể thuê tại khách sạn hay các điểm thuê xe máy, giá từ 90.000đ – 150.000đ/xe/ngày. </p>
              <p> <h6> 4. Bay đến Đà Nẵng bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Đà Nẵng </h6>
                <img src="./images/anhweb42.jpg" height = "300px" width="500px"> </p>
              <p> Theo khảo sát cũng như kinh nghiệm của những người đã từng đến đây thì Đà Nẵng cũng như đa số các tỉnh thành du lịch biển khác ở Việt Nam là vào mùa hè, chính xác hơn là từ khoảng đầu tháng 4 đến hết tháng 8 dương lịch. Thời điểm này Đà Nẵng ít mưa, nắng nhiều nên cực kì thuận lợi cho việc đi tham quan cũng như các hoạt động vui chơi ngoài trời. Đây cũng là lúc mà bạn có thể đi được đến bất cứ điểm du lịch nào mà bạn muốn ở Đà Nẵng, từ việc đi chơi ở trung tâm thành phố, đi Hội An, đi lên trên núi ở Hải Vân, Bà Nà hay bán đảo Sơn Trà, đi chơi, tắm biển ở các bãi biển tuyệt đẹp như Mỹ Khê, Non Nước, An Bàng… và thậm chí là đi ra hẳn đảo Cù Lao Chàm mà không hề gặp khó khăn gì cả. <br> 
              Tuy nhiên nhiều người lại cho rằng để tiết kiệm chi phí thì đi cuối tháng 9, đầu tháng 10 sẽ rất ổn. Bởi thời điểm này các khách sạn, dịch vụ bắt đầu giảm giá khá nhiều trong khi đây cũng chỉ là mới chớm bắt đầu vào mùa mưa, xác suất để gặp phải mưa, thậm chí là bão là thấp hơn nhiều so với những tháng tiếp theo. <br> 
              Nếu đi tầm tháng 6 cho tới tháng 8 nhất định phải đặt phòng khách sạn, đặt vé máy bay sớm bởi lúc này giá dịch vụ tăng cao vì vào mùa du lịch cao điểm.  </p>
              <p> <h6> 4.2. Tới Hà Nội, ở đâu?  </h6></p>
              <p> Ở Hà Nội, hệ thống nhà nghỉ, khách sạn vô cùng đa dạng và phong phú. Tùy thuộc vào mục đích du lịch cũng như khả năng tài chính, bạn có thể chọn lựa một nơi nghỉ phù hợp nhất cho mình.  <br>
              Ngoài khách sạn, bạn cũng có thể lựa chọn căn hộ cho thuê hoặc homestay với giá khoảng 600.000đ – 800.000đ/ngày. Loại hình này có ưu điểm là khá thoải mái và đầy đủ tiện nghi, không gian riêng tư như bạn đang lưu trú trong ngôi nhà của riêng mình vậy.  <br>
              Khu vực phố cổ  <br>
              Tại đây giá phòng khá cao vì là trung tâm du lịch. Bạn có thể dễ dàng tìm được khách sạn ưng ý tại: phố hàng Hành, hàng Mành, Chân Cầm, Hàng Trống, hoặc Gia Ngư, Cầu Gỗ…  <br>
              Một điểm cần lưu ý là các khách sạn này thường sẽ có không gian nhỏ, cao tầng, phòng ít hoặc không có cửa sổ. Tuy nhiên lợi thế là từ khách sạn bạn có thể đi bộ đến các điểm du lịch rất tiện lợi như phố Tạ Hiện, Hàng Mã, nhà thờ lớn, hồ Hoàn Kiếm, các phố ăn vặt như ngõ chợ Đồng Xuân, Tô Tịch, Hàng Chiếu… hay phố mua sắm như Hàng Đào, Đinh Liệt hay xa hơn chút là nhà tù Hỏa Lò, chùa Quán Sứ…  <br>
              Khu vực hồ Tây  <br>
              Tại đây bạn sẽ dễ dàng kiếm được những phòng có view hồ rất đẹp và thoáng. Du khách tới Hà Nội thường chọn khách sạn tại khu vực Yên Phụ, Yên Hoa, Nguyễn Khắc Hiếu, Nghi Tàm, Nguyễn Trường Tộ, Châu Long, Hàng Bún hoặc đường Tây Hồ, Xuân Diệu…
              Lưu trú tại khu vực này bạn sẽ di chuyển được thuận lợi tới các điểm như: Lăng Bác, Phủ Tây hồ với món bánh tôm đặc trưng, con đường gốm sứ, công viên nước hồ Tây, chùa Trấn Quốc, phố phở cuốn Ngũ Xã, chùa Kim Liên, Văn Miếu Quốc Tử Giám, Hoàng thành Thăng Long…  </p>
              <p> <h6> 4.3. Tới Đà Nẵng, đi đâu? </h6>
                <img src="./images/anhweb28.jpg" height = "300px" width="500px"> </p>
              <p> Đà Nẵng là nơi có quá nhiều sự lựa chọn vui chơi như tắm biển, tham quan, giải trí. <br> 
              - Vui chơi khám phá biển phải kể đến biển Mỹ Khê, Bãi tắm Xuân Thiều,  bãi tắm ở Bán Đảo Sơn Trà hoặc Bãi tắm Non Nước… <br>- Các điểm tham quan du lịch nổi tiếng tại Đà Nẵng phải kể đến Bà Nà Hills; chùa Linh Ứng; bảo tàng Đà Nẵng, Ngũ Hành Sơn, Chùa Linh Ứng, vịnh Lăng Cô, trượt thác ở khu du lịch Hòa Phú Thành… <br> 
              - Có thể kết hợp du lịch Đà Nẵng với  Hội An, Cù Lao Chàm, Huế… <br> 
              - Khu phức hợp giải trí tại các siêu thị, trung tâm thương mại phải kể đến khu phức hợp giải trí tại siêu thị Big C; Game center tại siêu thị Lotte Mart Đà Nẵng; Trung tâm vui chơi giải trí siêu thị Co.op Mart… Trung tâm, công viên vui chơi giải trí Đà Nẵng phải nhắc tới công viên Châu Á Đà Nẵng; Phố vui chơi giải trí đường Bạch Đằng; Khu vui chơi giải trí Bà Nà Hills Fantasy... </p> 
              <p> <h6> 4.4. Tới Đà Nẵng, ăn gì? </h6> </p> 
                <img src="./images/anhweb43.jpg" height = "300px" width="500px"> </p>
              <p> Có vô vàn món ăn đặc sản Đà Nẵng bạn có thể thưởng thức như: <br> 
                + Mỳ Quảng: Quán mì Quảng Thi (địa chỉ 251 Hoàng Diệu, Quận Hải Châu, Đà Nẵng); Quán mì Quảng Bà Mua (Địa chỉ 19 Trần Bình Trong, Quận Hải Châu, Đà Nẵng)..  <br>
                + Bún chả cá chỉ từ 20.000đ/ bát ở 109 Nguyễn Chí Thanh – quận Hải Châu.  <br> 
                + Bún mắm bà Thuyên chỉ 15.000đ/ tô ở K424/03 đường Lê Duẩn, đối diện chi nhánh MobiFone và Nguyễn Thị Minh Khai.  <br> 
                + Cao lầu và cơm gà Hội An ở Đà Nẵng – Cơm gà Hồng Ngọc: 193 Nguyễn Chí Thanh, Đà Nẵng, giá từ 25.000 – 40.000đ/ đĩa. Cao lầu tại 267 Thái Thị Bôi, Đà Nẵng (đường Hà Huy Tập quẹo vào), giá 20.000đ/tô.  <br> 
              +Hải sản Bé Mặn – đường Võ Nguyên Giáp, quận Sơn Trà: có rất nhiều loại hải sản tươi ngon, quán phục vụ nhanh, giá rẻ.</p>
              <p> <h6> 5. Săn đặt vé máy bay đi Đà Nẵng giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Đà Nẵng </h6> </p> 
              <p> - Gợi ý mua vé máy bay đi Đà Nẵng vào lúc trái mùa du lịch như khoảng tháng 1, tháng 2 hoặc vào khung giờ bay là đêm muộn và sáng sớm để có giá tốt hơn. <br> - Các tháng hè từ tháng 5 – 8 là mùa du lịch cao điểm, giá dịch vụ du lịch cũng tăng cao và giá vé máy bay thời điểm này cũng khá đắt. Nếu xác định bay khoảng thời gian này bạn nên chủ động đặt trước 1 cho tới 3 tháng.  <br> Tháng 4 đến tháng 6 Đà Nẵng tổ chức sự kiện bắn pháo hoa quốc tế thường niên lại trùng dịp nghỉ lễ 30/4 – 1/5 nên giá vé máy bay cũng khá cao. <br> - Đừng bỏ lỡ các chương trình khuyến mãi từ các hãng hàng không nội địa Vietnam Airlines, VietJet, Jetstar như Bay đẳng cấp, giá cực thấp” của Vietnam Airlines, “Bay là thích ngay”, “12h rồi VietJet thôi” của VietJet hay “Cuối tuần siêu giảm giá” của Jetstar…Vào những dịp đặc biệt, Bamboo Airways sẽ có những chương trình siêu khuyến mãi dành cho khách hàng. <br> 
              - Không chỉ thời điểm bay mà khung giờ bay trong ngày cũng ảnh hưởng tới giá vé máy bay đi Đà Nẵng đấy nhé. Chuyến bay lúc đêm muộn và sáng sớm giá vé sẽ thấp hơn các khung giờ bay khác trong ngày. Nếu bạn không có việc bận, không đi cùng trẻ em hoặc người già thì nên xem xét các chuyến bay trong khung giờ này để tiết kiệm.  </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Đà Nẵng tại ABAY.vn </h6> </p>
              <p> c bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu Hiện tại, vé máy bay đi Hà Nội tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như tư vấn giấy tờ thủ tụquả.Nếu đem so sánh, vé máy bay đi Đà Nẵng tại ABAY.vn đang có mức giá tốt so với các đại lý khác. Tại ABAY.vn bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo các thao tác máy tính, nếu không có thiết bị kết nối mạng bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như hỗ trợ check-in online, tư vấn giấy tờ hay thủ tục bay, các quy định về hành lý, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả  </p>
            
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
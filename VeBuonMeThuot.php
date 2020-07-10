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
    <link rel="stylesheet" type="text/css" href="css/stylevebuonmethuot.css">

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
                  <a class="dropdown-item active" href="VeBuonMeThuot.php">Vé Máy Bay Đi Buôn Mê Thuột</a>
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
                <center> <h4> Đặt Vé Máy Bay Đi Buôn Mê Thuột </h4> </center>
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
                             <option selected> Buôn Mê Thuột </option>
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
                    <img src="./images/anhweb98.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb99.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb100.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb101.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Buôn Mê Thuột  giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Hà Nội ? </h6> </p>
            <p> Hiện có 3 hãng hàng không nội địa khai thác đường bay thẳng từ Hà Nội, Vinh và Tp Hồ Chí Minh đến Buôn Mê Thuột. Chuyến bay của các hãng có sự phong phú về khung thời gian bay lẫn mức giá giúp các bạn có được sự lựa chọn ưng ý nhất cho chuyến đi của mình. <br> Dưới đây là bảng kê chi tiết: thời gian bay, hãng hàng không khai thác, các chuyến bay nội địa đến Buôn Mê Thuột, mời các bạn tham khảo: </p> 
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Hà Nội</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Hà Nội </td> 
                      <td> 1h40p </td> 
                      <td> VietJet Air, Bamboo Airways </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Buôn Mê Thuột là bao nhiêu? </h6> </p>
            <p> Luôn Được Cập Nhật Mỗi Ngày </p>
            <p> <h6> 3. Di chuyển từ sân bay Buôn Mê Thuột về trung tâm thành phố bằng cách nào ? </h6> </p>
            <p> Sân bay Buôn Mê Thuột hay còn gọi là cảng hàng không Buôn Mê Thuột nằm ở khu vực xã Hòa Thắng, tỉnh Đắk Lắk, cách thành phố Buôn Mê Thuột khoảng 8km về phía Đông Nam. <br> Nhà ga hành khách gồm một tầng trệt và một tầng lửng, được đầu tư trang thiết bị hiện đại, công nghệ hàng không tiên tiến.  Cụ thể bao gồm 04 cửa ra tầu bay (Gater); 12 quầy thủ tục; 02 băng chuyền hành lý đến; 01 băng chuyền hành lý đi; 03 thang cuốn; 01 thang máy; 01phòng VIP; 01 quầy hành lý thất lạc; 01quầy thông tin du lịch; 01 phòng y tế… <br> Để di chuyển về các bạn có thể chọn cho mình một số loại hình phương tiện cụ thể như:</p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Nội Bài vào trung tâm thành phố </h6> </p>
            <p> <strong > 3.2.1. Xe Taxi </strong> <br> Với khoảng cách chưa đầy 10km từ sân bay Buôn Mê Thuột vào Trung tâm Thành phố, nếu bạn chọn lựa phương tiện taxi di chuyển thì mức giá thành phải chi trả dao động trong khoảng từ 120.000đ đến 200.000đ tùy theo quãng đường bạn di chuyển. Mặc dù có giá thành khá cao hơn nhiều so với các phương tiện khác nhưng taxi vẫn là sự chọn lựa hàng đầu của nhiều người bởi sự nhanh chóng, an toàn. Bên cạnh đó nếu bạn đi nhiều người hoặc mang theo nhiều hành lý thì đây là sự chọn lựa tốt nhất. <br> Ngoài ra, nếu muốn tiết kiệm chi phí hơn thì bạn có thể tìm và đặt dịch vụ đi chung taxi với giá khoảng 85.000đ cho xe 4 chỗ, 95.000đ cho xe 7 chỗ và 390.000 cho xe 16 chỗ. Mức giá này được áp dụng cho khoảng 15km (từ sân bay về trung tâm thành phố Buôn Mê Thuột là khoảng 8km) nên bạn có thể yên tâm là tài xế sẽ đưa bạn đến tận khách sạn hoặc điểm dừng chân mong muốn. <br> <strong> 3.2.2. Xe ôm </strong> <br> Xe ôm tại Buôn Mê Thuột có giá khoảng 7.000đ/1km. Nếu bạn muốn được ngắm trọn vẹn không gian hai bên đường, đi một mình và không mang theo quá nhiều hành lý thì đây là sự chọn lựa hợp lý nhất. Để đón được xe ôm bạn cần đi ra cửa sân bay khoảng 50m và tại đây có rất nhiều xe ôm đợi sẵn đón. Để tránh trường hợp bị chặt chém về giá thì bạn nên hỏi và thống nhất về giá từ trước với chủ xe ôm. <br>  <strong> 3.2.3. Xe đưa đón sân bay </strong> <br> Di chuyển bằng xe đón tiễn của công ty du lịch tại Buôn Mê Thuột rất phát triển, vì vậy các bạn có thể dễ dàng đặt xe của các công ty cung cấp dịch vụ lữa hành. Mức giá đón tiễn từ sân bay đến trung tâm thành phố Buôn Mê Thuột thường là khoảng 200.000đ/ lượt. <br> <strong> Xe bus công cộng </strong> <br> Hiện tại sân bay Buôn Ma Thuột chưa có công ty nào khai thác chuyến xe vào trung tâm thành phố. Tuy nhiên bạn có thể đi xe ôm ra gần các trạm xe buýt gần đó như: <br>
            • Tuyến buýt số 1: Đạt Lý- Cư Jút <br> 
            • Tuyến buýt số 2: Bến xe Quyết Thắng- Xã Ea Sô <br>
            • Tuyến buýt số 3: Thị trấn Krông Kmar- Xã Cư Drăm <br>
            • Tuyến buýt số 4: Eakao- Bến xe phía Bắc Buôn Ma Thuột <br>
            • Tuyến buýt số 5: Cạnh trường THCS Lí Tự Trọng- Nagx ba đi Ea Sin huyện Krông Buk <br>
            • Tuyến buýt số 7: Krông Pắc- Buôn Ma Thuột <br>
            • Tuyến buýt số 8: Krông Pắc- M’drak <br>
            • Tuyến buýt số 9: Buôn Hồ- Buôn Ma Thuột <br>
            • Tuyến buýt số 10: Buôn Ma Thuột- Krông Ana <br>
            • Tuyến buýt số 11: Buôn Ma Thuột- Krông Bông <br>
            • Tuyến buýt số 12: Buôn Ma Thuột- Lăk <br>
            • Tuyến buýt số 13: Buôn Ma Thuột- Krông Nô (Đak Nông) <br>
            • Tuyến buýt số 15: Buôn Ma Thuột- Buôn Đôn </p> 
              <p> <h6> 4. Bay đến Buôn Mê Thuột bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Buôn Mê Thuột </h6>
              <p> Khí hậu Đắk Lắk có 2 mùa rõ rệt: mùa mưa và mùa khô. <br> 
                Mùa mưa tại đây thường rời vào khoảng thời gian từ tháng 5 đến tháng 11, lúc này đường xá đi lại khó khăn vì đường tại đây chủ yếu là đường đất đỏ. Tuy nhiên, mùa này các thác nước nổi tiếng tại đây lại có cho mình vẻ đẹp hùng vĩ và tráng lệ. Do đó, với những ai yêu thích các hoạt động mạo hiểu và du lịch gần gũi thiên nhiên thì có thể chọn đến Buôn Mê Thuột vào khoảng thời gian này. <br>
                Mùa khô tại Đắk Lắk sẽ là các tháng còn lại trong năm với tiết trời hanh khô và nắng nóng. Tuy nhiên vào các tháng đầu mùa khô thì tiết trời lại khá dễ chịu do dư âm của mùa mưa còn lại. Đặc biệt, tháng 11, tháng 12 tại Đắk Lắk là mùa của hoa dã quỳ đua nhau khoe sắc nhuộm vàng cả vùng cao nguyên rộng lớn. <br> 
                Riêng thời điểm cuối tháng 2 lại là mùa hoa cà phê nở trắng trời, rất thích hợp cho những ai trót yêu màu hoa này của Tây Nguyên. <br> 
                Ngoài ra, các bạn cũng chọn đến Đắk Lắk vào tháng tháng 3 âm lịch để hòa mình vào không khí sôi động hấp dẫn của lễ hội đua voi được tổ chức thường niên. </p>
              <p> <h6> 4.2. Tới Buôn Mê Thuột, ở đâu?  </h6></p>
              <p> ỞThành phố Buôn Mê Thuột khá hiện đại với nhiều công trình lớn. Bạn có thể dễ dàng tìm được khách sạn tốt để làm nơi dừng chân khi đến đây. Hệ thống nhà nghỉ, khách sạn tại Buôn Mê Thuột có giá khá rẻ và cũng rất thuận tiện để các bạn di chuyển, khám phá thành phố. <br> 
              Các bạn có thể tham khảo một số địa chỉ lưu trú phù hợp dưới đây: <br>  
              - Khách sạn Bạch Mã - Địa chỉ: 09 Nguyễn Đức Cảnh – Tp. Buôn Mê Thuột – ĐăkLăk. <br>
              - Khách sạn cà phê Tuấn Vũ - Địa chỉ: 135/1 Ngô Quyền – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Hoàng Lộc - Địa chỉ: 07 – 09 Ybi Alêo – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Biệt Điện - Địa chỉ: 01 Ngô Quyền – Tp. Buôn Mê Thuột – ĐăkLăk <br> 
              - Khách sạn Eden - Địa chỉ: 228 Nguyễn Công Trứ – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Công đoàn Ban Mê - Địa chỉ: 09 Nguyễn Chí Thanh – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Thành Công - Địa chỉ: 51 Lý Thường Kiệt – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Cao Nguyên - Địa chỉ: 65 Phan Chu Trinh – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Thiên Mã - Địa chỉ: 52 Hai Bà Trưng – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Tây Nguyên - Địa chỉ: 110 Lý Thường Kiệt – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Đại Hùng - Địa chỉ: 191 Hùng Vương – Tp. Buôn Mê Thuột – ĐăkLăk <br>
              - Khách sạn Phước Nguyên - Địa chỉ: 406b, Giải Phóng . TT Phước An – Krông Păk – Đăk Lăk <br>
              - Khách sạn Xuân Hiệp - Địa chỉ: 280 Hùng Vương – TX Buôn Hồ – Đăk Lăk.  </p>
              <p> <h6> 4.3. Tới Buôn Mê Thuột, đi đâu? <h6> </h6> 
                <img src="./images/anhweb37.jpg" height = "300px" width="500px"> </p>
              <p> Những nét đẹp đơn sơ mộc mạc của Đăk Lăk không chỉ xuất phát từ không gian thiên nhiên núi rừng đại ngàn, mà còn bởi nét văn hóa truyền thống của đồng bào dân tộc vùng Tây Nguyên. Cùng điểm qua một chút về những nơi mà bạn không thể bỏ qua khi đến với Đăk Lăk nhé! <br> 
              - Công viên nước Đắk Lắk: Công viên nước Đắk Lắk cách trung tâm thành phố Buôn Ma Thuột 4km theo hướng Đông Bắc, đây hiện là nơi có nhiều trò chơi tại khu vực miền Trung – Tây Nguyên. Công viên có hệ thống thác trượt nước và nhiều trò chơi cảm giác mạnh. <br> - Khu du lịch hồ Ea Kao: Khu du lịch hồ Ea Ka cách trung tâm thành phố Buôn Ma Thuột 12km về hướng Đông Nam. Đây là một khu du lịch được xây dựng với quy mô lớn, hiện đại nhưng vẫn giữ được bản sắc dân tộc. <br> - Huyền thoại hồ Lắk – Buôn Jun: Huyền thoại hồ Lắk – Buôn Jun là một trong những hồ nước ngọt tự nhiên lớn. Nơi đây đang là điểm du lịch hấp dẫn của Đắk Lắk thu hút du khách trong và ngoài nước bởi vẻ đẹp tự nhiên thơ mộng của núi rừng. <br> - Buôn Ako Dhong: Buôn Ako Dhong còn có tên gọi khác là Cô Thôn nằm ở phía Bắc. <br> - Vườn quốc gia Yok Đôn: Vườn quốc gia Yok Đôn thuộc địa bàn huyện Buôn Đôn và huyện Ea Súp, đây là một trong những khu bảo tồn thiên nhiên lớn nhất nước ta với tổng diện tích lên đến115.545ha. <br> - Thác Thủy Tiên: Thác Thủy Tiên là một thắng cảnh đẹp được nhiều người biết đến. Đúng như tên gọi, thác Thủy Tiên mang một vẻ đẹp thơ mộng làm say đắm du khách. <br> - Thác Krông Kmar: Bắt nguồn từ đỉnh cao nhất của “mái nhà Tây Nguyên” là dãy Chư Yang Sin hùng vĩ, dòng Krông Kmar đổ xuống chân núi đã tạo thành thác Krông Kmar có dáng vẻ hoang sơ, thơ mộng mà nếu ai đã một lần đến đây hẳn sẽ còn nhớ mãi. <br> - Thác Đray Nur – Gia Long: Thác Đray Nur hiện được xem là thác hùng vĩ nhất ở Tây Nguyên, đây là sự kết hợp giữa hai dòng song là sông Krông Ana (sông cái) và sông Krông Nô (sông đực). Hai dòng sông này hoà trộn quấn quýt bên nhau đã tạo thành dòng sông Sêrêpốk huyền thoại của Tây Nguyên nối liền đôi bờ hai tỉnh Đắk Lắk và Đăk Nông. <br>   - Tháp Chăm Yang Prông: Tháp Chăm Yang Prông còn có tên là tháp Chàm Rừng Xanh thờ thần Siva dưới dạng Mukhalinga (vị thần vĩ đại) nằm ở xã Ea Rốk, huyện Ea Súp. Đây là ngôi tháp Chăm cổ duy nhất ở Tây Nguyên nằm cạnh dòng sông Ea H’leo. </p> 
              <p> <h6> 4.4. Tới Hà Nội, ăn gì? </h6> </p> 
                <img src="./images/anhweb38.jpg" height = "300px" width="500px"> 
              <p> Đến với Đắk Lắk, các bạn không thể bỏ qua những món ngon đậm chất núi rừng Tây Nguyên như: <br> - Bún đỏ: Món đặc sản Buôn Ma Thuột này ngon nhất phải kể tới quán vỉa hè ở ngay góc đường Lê Duẩn – Phan Đình Giót. <br> - Bánh canh cá dằm: Để thưởng thức món ăn này, bạn có thể tới các quán trên đường Bà Triệu, Lê Thánh Tông hoặc Hai Bà Trưng… <br> 
              - Gà nướng bản Đôn: Gà rừng được tẩm ướp và nướng trên ngọn lửa núi rừng thơm phức, thịt gà ngọt dai thực sự là món ăn không du khách nào cưỡng nổi khi tới Đăk Lăk tham quan. <br>- Cơm Lam: Cơm được nấu trong những ống tre mang mùi vị thơm dịu của thiên nhiên cùng sự tinh khiết trắng dẻo của gạo quê sẽ làm bạn không thể nào quên. <br>
              - Cá Thác Lác: Nếu bạn có tới hồ Lăk câu cá thì loại cá này chính là loài cá đặc sản của hồ nước ngọt này. Đừng quên hỏi người dân ở đây cách chế biến nếu bạn câu được một con cá Thác Lác trong hành trình du lịch khám phá Đăk Lăk của mình nhé.<br>
              - Rượu cần Tây Nguyên: Có thể nói rượu cần là đặc sản của các dân tộc ít người ở Việt Nam, từ vùng núi phía bắc cho tới vùng Tây Nguyên nắng cháy thì rượu cần luôn là một loại thức uống nổi tiếng </p>
              <p> <h6> 5. Săn đặt vé máy bay đi Buôn Mê thuột giá rẻ nhất như thế nào? </h6> </p> 
                <img src="./images/anhweb39.jpg" height = "300px" width="500px"> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Buôn Mê Thuột </h6> </p> 
              <p> TThời điểm trước tháng 12 dương lịch đến tháng 2 năm sau giá vé máy bay đi Buôn Mê Thuột luôn có mức giá khá cao, bởi, đây là thời gian diễn ra nhiều lễ hội và cũng là mùa hoa dã quỳ nở thu hút rất nhiều người đến với mảnh đất này để vui chơi và khám phá. Do đó, để tiết kiệm cho chuyến đi của mình, các bạn nên lên lịch cụ thể và đặt vé máy bay đi Buôn Mê Thuột trước khoảng 2 tháng so với ngày bay để nhận được mức giá tốt nhất từ các hãng hàng không. <br> Còn nếu chuyến đi Buôn Mê Thuột của bạn có thể linh động được về thời gian thì bạn nên “để mắt” đến những chương trình khuyến mãi, bán vé máy bay đi Buôn Mê Thuột giá rẻ thường xuyên được cập nhật tại ABAY.vn. <br> Thông thường các hãng hàng không sẽ triển khai các đợt khuyến mại vé máy bay đi Buôn Mê Thuột vào thời điểm ít khách nhất trong năm: tháng 5 đến tháng 10 – mùa mưa, tháng 11 đến tháng 4 năm sau – mùa nắng. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Buôn Mê Thuột tại ABAY.vn </h6> </p>
              <p> Hiện tại, vé máy bay đi Buôn Mê Thuột tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như tư vấn giấy tờ thủ tục bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả.  </p>
             
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
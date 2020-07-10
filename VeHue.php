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
    <link rel="stylesheet" type="text/css" href="css/stylevehue.css">

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
                  <a class="dropdown-item active" href="VeHue.php">Vé Máy Bay Đi Huế</a>
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
                <center> <h4> Đặt Vé Máy Đi Huế </h4> </center>
                <div class="row">
                  <div class="col">
                   <form action="timsaigon.php" method="POST">
                    <div class="form-row">
                       <div class="form-group col-sm-5">
                        <center> <h6> <label for="exampleInputPassword1"> Nơi Đi </label> <h6> </center>
                        <select name='txtNoiDi' id="nhapnoidi" class="form-control"> 
                             <option selected> Hà Nội </option>
                             <option>Hồ Chí Minh</option>
                             <option>Đà Lạt</option>
                             <option>Buôn Mê Thuột</option>
                             <option>Đà Nẵng</option>
                             <option>Hải Phòng</option>
                             <option>Nha Trang</option>
                             <option>Phú Quốc</option>
                             <option>Vinh</option>
                      </select>
                       </div>
                       <div class="form-group col-sm-5">
                          <h6> <center> 
                         <label for="exampleInputEmail1"> Nơi Đến </label> </center> </h6>
                        <select name='txtNoiDen' id="nhapnoiden" class="form-control"> 
                             <option selected> Huế </option>
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
                    <img src="./images/anhweb118.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb119.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb120.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb121.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay Huế giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Huế ? </h6> </p>
            <p> Hiện có 3 hãng hàng không nội địa khai thác đường bay thẳng từ Hà Nội và Tp Hồ Chí Minh đến Huế. Chuyến bay của hãng có sự phong phú về khung thời gian bay lẫn mức giá giúp các bạn có được sự lựa chọn ưng ý nhất cho chuyến đi của mình. <br> Dưới đây là bảng kê chi tiết: thời gian bay, hãng hàng không khai thác, các chuyến bay nội địa đến Huế, mời các bạn tham khảo</p> 
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Huế</th>
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
                      <td> 1h15p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Huế là bao nhiêu? </h6> </p>
            <p> Tuy theo tình hình cập nhật giá vé </p>

            <p> <h6> 3. Di chuyển từ sân bay Phú Bài về trung tâm thành phố Huế và ngược lại bằng cách nào ? </h6> </p>
            <p> <h6> 3.1. Những điều cần biết về sân bay quốc tế Phú Bài </h6> </p>  
            <p> Cảng hàng không quốc tế Phú Bài nằm bên Quốc lộ 1A, trong địa giới hành chính thuộc thị xã Hương Thủy, tỉnh Thừa Thiên - Huế; cách trung tâm thành phố Huế 13 km (khoảng 20 phút đi ô tô) về phía Đông Nam.</p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Phú Bài đến trung tâm thành phố Huế </h6> </p>
            <p> <strong> 3.2.1. Xe bus </strong> </p> 
            <p> Hiện nay xe buýt vẫn là phương tiện vận tải hành khách công cộng chủ yếu được sử dụng để di chuyển về trung tâm thành phố Huế. Di chuyển bằng xe buýt  là phương tiện tiết kiệm chi phí khi du khách đi du lịch Huế ít người và ít đồ đạc. <br> 
            Mạng lưới dịch vụ giao thông công cộng bằng xe buýt từ thành phố Huế đã được mở rộng và bao phủ gần khắp thành phố Huế. Khách du lịch đến Huệ có thể sử dụng loại phương tiện này để đi từ sân bay Phú Bài để về trung tâm thành phố Huế hay ngược lại, hoặc đi lại trong trung tâm thành phố. <br>
            Xe ô tô trung chuyển hoạt động với tần suất từ 30 - 60 phút/chuyến. Xe trung chuyển của sân bay khởi hành tại văn phòng 20 Hà Nội, Tp Huế. Số điện thoại: (054) 3826826. Giá vé khi di chuyển từ sân bay Phú Bài về trung tâm thành phố Huế chừng 50.000 đ/người/lượt. </p>
            <p> <h6> 3.2.2. Taxi </h6> </p>
              <p> Taxi là phương tiện di chuyển từ sân bay Phú Bài vào trung tâm thành phố nhanh chóng và thuận tiện nhất. Khách du lịch Huế (và ngược lại) có thể đi xe taxi đậu bên ngoài rìa sân bay, giá cả tùy loại taxi, giá taxi khoảng 190.000đ/lượt.
              Thời gian để du khách di chuyển từ sân bay về trung tâm thành phố Huế hoặc ngược lại chỉ trong vòng từ 15 đến 20 phút.  Dịch vụ xe taxi ở Huế có nhiều hãng taxi uy tín, chất lượng như: Taxi Mai Linh, Taxi Thành Đô, Taxi Thành Hưng, Taxi Phú Xuân... <br>
              Taxi  Mai Linh: Điện thoại: (84-54) 3898989 <br>
              Taxi Thành Đô: Điện thoại: (84-54) 858585 <br>
              Taxi Thành Hưng: Điện thoại: (84-54) 863863 <br>
              Taxi Phú Xuân: Điện thoại: (84-54) 878787 <br>
              Taxi Đông Ba: Điện thoại: (84-54) 848484 </p> 
              <p> <h6>  3.2.3. Xe trung chuyển của các công ty du lịch </h6> </p> 
              <p> Dịch vụ đón tiễn sân bay Phú Bài của các công ty du lịch rất phát triển, vì vậy các bạn có thể dễ dàng đặt xe theo nhu cầu di chuyển của mình. <br>
              Các công ty du lịch, các dịch vụ xe du lịch ở Huế hiện có các loại xe như: xe 4 chỗ, xe 12 chỗ, xe 24 chỗ, xe 45 chỗ... sang trọng tiện nghi, giá cả phải chăng, đi và về trong thành phố hoặc các tỉnh thành phố khác. <br>
              Mức giá di chuyển từ sân bay Phú Bài về thành phố Huế là 200.000đ với xe 4 chỗ và 250.000đ với xe 7 chỗ. Dịch vụ đưa đón từ sân bay về sẽ đưa các bạn về bất cứ nơi nào thuộc thành phố Huế, bất kể sáng sớm hay tối khuya, giá cố định. </p>
              <p> <h6> 4. Bay đến Huế bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Hà Nội </h6>
                <img src="./images/anhweb34.jpg" height = "300px" width="500px"> </p>
              <p> Thuộc vùng chuyển tiếp giữa hai miền Nam – Bắc nên thời tiết ở Huế là sự kết hợp giữa cả hai miền, giảm bớt phần khắc nghiệt và cũng khá ôn hòa. Mùa mưa bão ở Huế bắt đầu từ tháng 5 và kéo dài đến tháng 11, là thời gian cao điểm của các cơn bão, lụt nên cần theo dõi thời tiết trước khi thực hiện chuyến đi. Tuy Huế không có mùa đông rõ rệt như các tỉnh miền Bắc nhưng nhiệt độ cũng không cao, có thể sẽ thấp hơn 10 độ. <br> 
              Theo nhiều kinh nghiệm du lịch Huế tự túc thì thời gian đẹp nhất cho chuyến tham quan là vào thời điểm giao mùa: giữa hai mùa xuân – hạ và thu – đông. <br> 
              Tháng 4 – tháng 5: Đây là thời điểm khí hậu ôn hòa, dễ chịu, phù hợp cho mọi hoạt động vui chơi. Đó là chưa kể cứ mỗi 2 năm/ lần, Festival Huế lại được tổ chức vào cuối tháng 4, nhằm tôn vinh các di sản văn hóa và thúc đẩy du lịch. <br>
              Mùa hoa xứ Huế: Chẳng kém cạnh Hà Nội 12 mùa hoa, Huế sở hữu không ít loài hoa quyến rũ khoe sắc quanh năm. Tháng 3, tháng 4 là mùa hoa ngô đồng; mùa hè là lúc phượng đỏ nở rực một góc trời cạnh cầu Tràng Tiền; xuyên suốt tháng 5 – tháng 8 là những đóa sen trong Hoàng Thành nở rộ… Tất cả đều là những lý do lớn để các bạn đến với mảnh đất cố đô vào khoảng thời gian này.</p>
              <p> <h6> 4.2. Tới Huế, ở đâu?  </h6></p>
              <p>Nhìn chung nhà nghỉ, khách sạn ở Huế rẻ tập trung chủ yếu ở phố Lê Lợi gần Cầu Trường Tiền, Huế. Giá dao động từ 150.000đ -300.000đ/đêm có thể ở được 4-5 người/phòng. Bạn có rất nhiều lựa chọn khác nhau, nếu có chi phí dư dả có thể chọn những khách sạn cao cấp, sang trọng hoặc khách sạn bình dân, nhà nghỉ giá rẻ nếu có chi phí hạn hẹp… <br> 
              - Hong Thien 1 Hotel - địa chỉ: 35/6 Chu Văn An. Khách sạn có giá giá siêu rẻ, chỉ 150.000đ/đêm có kèm bữa sáng, có hồ bơi ngoài trời, có quán cafe, nội thất cũng rất ổn. <br> 
              - Than Thien – Hotel  - địa chỉ: số 10 Đường Nguyễn Công Trứ. Khách sạn có giá chỉ từ 200.000đ/đêm, có vị trí thuận lợi, phòng đẹp, nhân viên dễ mến nên cũng nhận được sự yêu thích rất lớn từ du khách. <br> 
              - Gold Hotel – địa chỉ: 28 Bà Triệu. Đây là khách sạn cũng siêu đáng tiền cho bạn. Giá thấp nhất chỉ 340.000đ/ngày đêm với các dịch vụ như: gym, bida, massage, hồ bơi ngoài trời, karaoke, spa, xông hơi. <br>
              - Hue Serene Palace Hotel - địa chỉ: 21 Lane 42 Nguyen Cong Tru. Mức giá khoảng 550.000đ/ngày đêm, cũng khá cao nhưng khách sạn được đầu tư rất kỹ về nội thất phòng ở và nhà tắm, không gian rộng rãi, nhân viên chu đáo. <br>
              - Moonlight Hotel Hue - địa chỉ: 20 Phạm Ngũ Lão, là khách sạn 4 sao với quy mô khá lớn, khoảng 90 phòng. Phục vụ cực chuyên nghiệp, nhiệt tình, trong 920 đánh giá chỉ 2 đánh giá cảm thấy không hài lòng về các phục vụ. Mức giá phòng tại đây khoảng 760.000đ/đêm. <br>
              - Pilgrimage Village Boutique Resort & Spa – địa chỉ: số 130 Minh Mạng. Đây là resort với mức giá không thể rẻ hơn, chỉ 890.000đ/ngày đêm cho một không gian cực rộng. </p>
              <p> <h6> 4.3. Tới Huế, đi đâu? <h6> </h6> 
                <img src="./images/anhweb35.jpg" height = "300px" width="500px"> </p>
              <p> Huế nổi tiếng với những lăng tẩm, Đại Nội, chùa chiền. Du lịch Huế, các bạn không nên bỏ qua việc thăm quan hàng loạt các điểm đến nổi tiếng sau đây. <br>
              Các điểm thăm quan trong khu vực nội thành: <br>
              - Kinh thành Huế: Ngọ Môn, Kỳ Đài, Viện Thái Hòa, Quốc Tử Giám – Bảo tàng Lịch sử Thừa Thiên Huế, Điện Long An – Bảo tàng Cổ vật Cung đình Huế, <br>
              + Giờ tham quan: Mùa hè: Từ 6h30p đến 17h30p. Mùa đông: từ 7h00p đến 17h00p <br>
              + Giá vé tham quan: 150.000đ/ người/ lượt. <br>
              - Chùa Thiên Mụ - địa chỉ: Đồi Hà Khê, 140 – 142 Nguyễn Phúc Nguyên, TP. Huế. Giờ tham quan: 7h00p – 17h00p mỗi ngày. <br>
              - Sông Hương, cầu Tràng Tiền <br>
              - Chợ Đông Ba – địa chỉ: Đường Trần Hưng Đạo, Phường Phú Hòa, TP. Huế (cách cầu Trường Tiền 100 m). <br>
              - Đồi Vọng Cảnh – địa chỉ: Đường Huyền Trân Công Chúa, TP. Huế (cách trung tâm khoảng 7 km). <br>
              - Núi Ngự Bình – địa chỉ: Phường An Cựu, TP. Huế (cách trung tâm 4km về hướng Nam, thuộc khu vực giữa Cồn Hến và Cồn Giã Viên).
              Các điểm thăm quan ngoài thành phố Huế <br>
              - Các khu lăng tẩm: Lăng Minh Mạng, Tự Đức, Khải Đinh, Lăng Gia Long, Thiệu Trị, Đồng Khánh… <br>
              - Cầu ngói Thanh Toàn – địa chỉ: Cầu bắc qua một con mương làng Thanh Thủy Chánh, xã Thủy Thanh, thị xã Hương Thủy, Thừa Thiên – Huế.<br>
              - Điện Hòn Chén: Cách đến điện Hòn Chén: Đi thuyền từ bến đò thôn Cư Chánh, xã Thủy Bằng; hoặc đi thuyền rồng từ bến Tòa Khâm, ngược dòng sông Hương.<br>
              -  Đồi Thiên An – Hồ Thủy Tiên – địa chỉ: Xã Thủy Bằng, thị xã Hương thủy (cách trung tâm thành phố Huế 10 km về hướng Nam, trên đường thăm lăng Khải Định).<br>
              Các thắng cảnh xung quanh thành phố Huế: biển Thuận An, biển Cảnh Dương, vịnh Lăng Cô, vườn quốc gia Bạch Mã, hồ Truồi, đầm Lập An, phá Tam Giang…  </p> 
              <p> <h6> 4.4. Tới Huế, ăn gì? </h6> </p> 
                <img src="./images/anhweb36.jpg" height = "300px" width="500px"> </p>
              <p> Xứ Huế là cả một kho tàng ẩm thực đặc sắc, là sự kết hợp giữa nét tinh tế và hương vị bình dân mà lại gây thương nhớ mãi cho những người đã từng thử qua. Cùng tìm hiểu các món đặc sản Huế được mệnh danh là chưa thử thì chưa đặt chân đến cố đô. <br> Bún bò Huế
                - 17 Lý Thường Kiệt, Tp. Huế <br>
                - Quán Bà Tuyết: 47 Nguyễn Công Trứ, Tp. Huế <br>
                - Quán Mệ Kéo: 20 Bạch Đằng, Tp. Huế <br>
                Cơm hến <br>
                - Quán Nhỏ: 28 Phạm Hồng Thái, Tp. Huế <br>
                - Các quán ở Cồn Hến, P.Vĩ Dạ, Tp. Huế <br>
                Các loại bánh Huế <br>
                - Quán Bà Đỏ: 08 Nguyễn Bỉnh Khiêm, Tp. Huế <br>
                - Khu ẩm thực của các chợ như chợ Tây Lộc, chợ Đông Ba. <br>
                - 109 Lê Huân <br>
                Chè Huế <br>
                - Chè Ngọc Hiền: 65 Trần Hưng Đạo, Tp. Huế <br>
                - Chè Thanh: 78 Mai Thúc Loan, P. Phú Hậu, Tp. Huế <br>
                - Chè Mợ Tôn Đích: Trước cổng công viên Thương Bạc, Tp. Huế <br>
                Bánh canh Nam Phố <br>
                - Quán Thúy: 16 Phạm Hồng Thái <br>
                - Quán O Thu: 374 Chi Lăng </p>
              <p> <h6> 5. Săn đặt vé máy bay đi Huế giá rẻ nhất như thế nào? </h6> <p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Hà Nội </h6> </p> 
              <p> Theo kinh nghiệm của nhiều du khách, những dịp lễ, Tết là thời gian cao điểm về vé máy bay đi Huế, đối với Tết nguyên đán là chiều trước Tết. Bạn có thể tránh những dịp này, đi sớm hoặc muộn hơn vài ngày để không phải mua vé với giá quá cao. Nếu thực sự phải đi vào chính dịp lễ, Tết (chẳng hạn về quê dịp Tết âm lịch) thì hãy có kế hoạch mua vé sớm. <br> 
              Vào các thời điểm cụ thể trong năm, các hãng hàng không đều có chương trình khuyến mại giá rẻ. Bạn có thể tham khảo các chương trình Chào Hè, Mùa thu Vàng của Vietnam Airlines; khuyến mại 0 đồng của VietJet Air… Nếu không cần thời gian cố định, bạn có thể chờ săn vé đi Hà Nội vào những dịp này để tiết kiệm nhất. <br> Ngay cả trong cùng một ngày, việc bạn chọn khung giờ nào cũng ảnh hưởng tới giá vé. Trong đó, các chuyến bay lúc sáng sớm và đêm muộn thường sẽ có giá thấp hơn so với các khung giờ bay khác. Nếu như bạn không đi cùng trẻ nhỏ, người già, người có vấn đề về sức khỏe, thì hoàn toàn có thể chọn khung giờ bay sáng sớm hoặc đêm muộn để tiết kiệm chi phí. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Huế tại ABAY.vn </h6> </p>
              <p> - Hiện tại, vé máy bay đi Huế tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> - Nếu không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> - Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như tư vấn giấy tờ thủ tục bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả.  </p>
             
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
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
    <link rel="stylesheet" type="text/css" href="css/stylevedalat.css">

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
                  <a class="dropdown-item active" href="VeDaLat.php">Vé Máy Bay Đi Đà Lạt</a>
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
                <center> <h4> Đặt Vé Máy Bay Đi Đà Lạt </h4> </center>
                <div class="row">
                  <div class="col">
                   <form action="timsaigon.php" method="POST">
                    <div class="form-row">
                       <div class="form-group col-sm-5">
                        <center> <h6> <label for="exampleInputPassword1"> Nơi Đi </label> <h6> </center>
                        <select name='txtNoiDi' id="nhapnoidi" class="form-control"> 
                             <option selected> Hà Nội</option>
                             <option>Hồ Chí Minh</option>
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
                             <option selected> Đà Lạt </option>
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
                    <img src="./images/anhweb102.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb103.png" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb104.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb105.png" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Đà Lạt giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Đà Lạt ? </h6> </p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Đà Lạt</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Thành phố Hồ Chí Minh </td> 
                      <td> 50p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Hà Nội </td> 
                      <td> 1h40p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Đà Nẵng </td> 
                      <td> 1h40p </td> 
                      <td> Vietnam Airlines </td>
                  </tr>

              </table>
            <p><h6> 2. Giá vé máy bay đi Đà Lạt là bao nhiêu? </h6> </p>
            <p> Vé Được Cập Nhật Mỗi Ngày. </p>

            <p> <h6> 3. Di chuyển từ sân bay Liên Khương về trung tâm thành phố Đà Lạt và ngược lại như thế nào ? </h6> </p>
            <p> <h6> 3.1.  Những điều cần biết về sân bay Liên Khương (Đà Lạt) </h6> </p>  
              <img src="./images/anhweb60.jpg" height = "300px" width="500px"> 
            <p> Sân bay Liên Khương có diện tích 337,1ha, nằm trên địa bàn huyện Đức Trọng – tỉnh Lâm Đồng. <br> Sân bay Liên Khương cách trung tâm thành phố Đà Lạt 30 km về phía Nam theo quốc lộ 20; cách thành phố Bảo Lộc 90km và cách Tp Hồ Chí Minh 270km theo quốc lộ 20; cách thành phố Buôn Me Thuột 160km và cách thành phố Nha Trang 200km theo quốc lộ 27.  <br> Nhà ga hành khách Sân bay Liên Khương gồm 2 tầng bao gồm ga quốc tế và quốc nội:  <br> - Tầng trệt bao gồm: Sảnh đến phía trước, khu phục vụ hành khách đến, khu xử lý hành lý nội địa và quốc tế, phòng chờ lấy hành lý, các phòng chức năng, các phòng kỹ thuật, khu giải khát, dịch vụ, vệ sinh, vườn cảnh ở vị trí thông tầng, hành lang phía sau.  <br> - Tầng 2 bao gồm: Sảnh đi phía trước gắn liền với cầu cạn, khu vực làm thủ tục Check- in, phòng chờ ra máy bay, phòng VIP-C, hành lang, các phòng chức năng, phòng làm việc, phòng kỹ thuật, phòng hút thuốc, khu vực giải khát dịch vụ, khu vệ sinh  </h6> </p>
            <p> <h6> 3.1.  Cách di chuyển từ sân bay Liên Khương về trung tâm thành phố Đà Lạt </h6> </p> 
            <p> <strong > 3.2.1. Xe buýt sân bay </strong> <br> XTừ sân bay Liên Khương, bạn có thể bắt xe buýt liên vận của sân bay về Đà Lạt với giá 40.000 – 50.000đ/người/lượt. Xe đi mất khoảng 45 phút, đi từ về trung tâm thành phố đỗ khách tại đường Lê Thị Hồng Gấm sát chợ Đà Lạt. Các tuyến xe buýt chạy từ sân bay Liên Khương về trung tâm thành phố Đà Lạt có khá nhiều. Xe buýt của sân bay Liên Khương sẽ phục vụ khách liên tục cho tới khi nào hết các chuyến bay. Sau khi ra khỏi phòng đợi của sân bay là khách đã có thể nhìn thấy xe buýt đang chờ đợi khách bên ngoài. <br> Xe buýt được xem là phương tiện di chuyển từ sân bay Liên Khương về trung tâm thành phố rất kinh tế cho ai đi 1 mình hoặc đi theo cặp, ít đồ đạc lỉnh kỉnh.. </p>
              <p> <h6> 3.2.2. Taxi sân bay </h6></p>
              <p> Sân bay Liên Khương nằm ngay cạnh quốc lộ 20 và cách thành phố Đà Lạt khoảng 30km về phía Nam. Từ sân bay đi về trung tâm thành phố Đà Lạt, bạn có thể đi taxi, mất khoảng 250.000đ – 300.000đ. Nếu đi từ 4 người trở lên thì đây là  một lựa chọn tốt để tiết kiệm thời gian mà chi phí vẫn rẻ. Bạn có thể dùng dịch vụ hỗ trợ đặt taxi với giá như trên. Nếu khách sạn bạn ở quá xa trung tâm thì chú ý hỏi kỹ tránh bị phụ thu phí cao. <br> Taxi là phương tiện di chuyển từ Sân bay Liên Khương vào trung tâm thành phố nhanh chóng và thuận tiện nhất. Có một số hãng taxi uy tín tại Đà Lạt bạn có thể tham khảo: <br> Mai Linh Taxi: 063.511111 <br> Thắng Lợi Taxi: 063.835583 <br> Phương Trang Taxi: 063.556556 <br> Đà Lạt Taxi: (063) 3556655..  </p>
              <p> <h6> 3.2.3. Xe riêng đưa đón sân bay </h6></p>
              <p> Đi về trung tâm thành phố Đà Lạt, bạn có thể đặt trước xe riêng với các loại xe đời mới từ 4 chỗ đến 45 chỗ theo yêu cầu của khách hàng với giá 400.000đ – 450.000đ/chuyến (7 chỗ), 800 (16 chỗ), 1.500.000đ (29 chỗ), 2.000.000đ (45 chỗ), rất thích hợp khi đi công tác hoặc đón khách quý, đối tác làm ăn. </p>
              <p> <h6> 4. Bay đến Đà Lạt bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Đà Lạt </h6>
                <img src="./images/anhweb61.jpg" height = "300px" width="500px"> 
              <p> Các bạn có thể đến với Đà Lạt vào bất kỳ thời điểm nào trong năm để có thể du lịch, khám phá và tận hưởng những nét đẹp riêng của vùng đất này.  <br> Nếu bạn muốn ngắm những đóa mai anh đào và hoa phượng tím nở rộ quanh Hồ Xuân Hương thì từ tháng 2 đến tháng 4 khi mùa xuân đến chính là thời điểm đẹp nhất để chiêm ngưỡng hoa. <br> Đến Đà Lạt những ngày tháng 8 khi thời tiết chuyển mùa với những cơn mua rả rích, các bạn sẽ được chiêm ngưỡng những dòng thác nước dường như trở nên hùng vĩ hơn dưới những cơn mưa. <br> Cuối năm, nếu bạn đi du lịch Đà Lạt tháng 10, 11, 12 phảng phất những áng sương mây lơ lửng trên bầu trời mang màu xanh ngắt. Tháng 10 đến tháng 12 hoa dã quỳ vươn mình đón nắng đẹp kiêu sa lung linh theo gió mới. Còn những bông mimosa mỏng manh e ấp trải dọc theo các triển đồi giống như bức tranh vẽ. Và còn rất nhiều các loài hoa rực rỡ khác như cánh đồng cải trắng, vườn hoa hướng dương, vườn hồng nhung, cánh đồng cỏ lau… <br> Mỗi một mùa là Đà Lạt hiện lên với hương sắc riêng luôn cuốn hút du khách ghé đến nơi đây để vui chơi và khám phá. </p>
              <p> <h6> 4.2. Tới Đà Lạt, ở đâu?  </h6></p>
              <img src="./images/anhweb62.jpg" height = "300px" width="500px"> 
              <p>Ở Đà Lạt có rất nhiều nhà nghỉ, khách sạn và biệt thự cho thuê, bạn có thể tùy ý lựa chọn theo sở thích và mục đích chuyến đi. Tuy nhiên, theo kinh nghiệm được nhiều người chia sẻ thì các bạn nên thuê những khách sạn, nhà nghỉ ở gần trung tâm, không cách chợ quá xa, tiện đường cho việc đi lại và tham quan, nhất là giá cả phù hợp (bởi bạn sẽ ở ngoài nhiều hơn là ở khách sạn)…. <br> Dưới đây là một số khách sạn chất lượng ổn, giá tốt tại khu vực thành phố, xung quanh hồ Tuyền Lâm, các bạn có thể tham khảo: <br>  - Tulip Hotel – địa chỉ: 26-28 Ba Thang Hai street, Ward 1, Đà Lạt, Việt Nam. Tulip Hotel nằm trong bán kính 5 phút đi bộ từ Chợ Đà Lạt cũng như Hồ Xuân Hương. Khách sạn cung cấp các phòng nghỉ tiện nghi với phòng tắm riêng và minibar. Mức giá phòng tại đây chỉ từ 648.000đ/ngày đêm. <br>  - Noel Hotel – địa chỉ: Nguyễn Thị Định, Đà Lạt, Việt Nam. Noel Hotel tọa lạc gần Hồ Xuân Hương ở thành phố Đà Lạt, cách Quảng trường Lâm Viên 1,6 km, Công viên Yersin Đà Lạt 1,8 km và Vườn hoa Đà Lạt 2,4 km. Phòng nghỉ tại Noel Hotel có giá từ 460.000đ/ngày đêm. <br>  - Mr Rot's Secret Hotel – địa chỉ: H56 Nguyen Thi Nghia, Ward 2, Đà Lạt, Việt Nam. Mr Rot's Secret Hotel nằm trong bán kính 5 phút lái xe từ Hồ Xuân Hương và Vườn hoa Đà Lạt. Khách sạn có các phòng nghỉ với Wi-Fi miễn phí, hiên tắm nắng và tầm nhìn ra cảnh núi non. Mr Rot's Secret Hotel cung cấp các phòng nghỉ có giá từ 466.000đ/ngày đêm. <br> - Dalat Hills Hotel – địa chỉ: 22 Sương Nguyệt Ánh, Đà Lạt, Việt Nam. Dalat Hills Hotel cách Vườn Hoa Đà Lạt 600 m. Khách sạn có khu vườn, sân hiên, sảnh khách chung và Wi-Fi miễn phí. Khách sạn cung cấp các phòng nghỉ với mức giá từ 442.000đ/ngày đêm. <br> - Thanh Thanh Hotel – địa chỉ: 70B 3/2, Đà Lạt, Việt Nam. Thanh Thanh Hotel là khách sạn 1 sao có sảnh khách chung, Wi-Fi miễn phí, quầy lễ tân 24 giờ và dịch vụ đặt vé. Cả Quảng trường Lân Viên và Hồ Xuân Hương đều nằm cách khách sạn này 1,3 km. Khách sạn cung cấp các phòng nghỉ với giá 419.000đ/ngày đêm. <br>  - Carita Hotel – địa chỉ: đường ba tháng hai phường 1 thành phố đà lạt Số 83, Đà Lạt, Việt Nam. Tọa lạc tại thành phố Đà Lạt, cách Quảng trường Lâm Viên 1,3 km và Hồ Xuân Hương 1,4 km, Carita Hotel cung cấp Wi-Fi miễn phí. Khách sạn nằm ở khu vực Hồ Xuân Hương, gần Công viên Yersin Đà Lạt, Biệt thự Hằng Nga và Cung điện Mùa hè của Vua Bảo Đại. Carita Hotel cung cấp các phòng nghỉ với giá từ 559.000đ/ngày đêm.  </p>
              <p> <h6> 4.3. Tới Đà Lạt, đi đâu? <h6> </h6> 
                <img src="./images/anhweb63.jpg" height = "300px" width="500px"> 
              <p> Ở Đà Lạt có rất nhiều địa điểm chơi và tham quan. Để bạn thuận tiện hơn trong việc lựa chọn địa điểm phù hợp nhất, dưới đây là phân chia Đà Lạt các địa điểm ưa thích theo từng nhón, các bạn có thể tham khảo: <br> - Cụm thác nổi tiếng không nên bỏ lỡ: Thác Pongour, thác Prenn, thác Dambri, thác Datanla, thác Cam Ly, thác Voi… <br> - Các hồ nước đẹp ngút mắt: Hồ Xuân Hương, hồ Đa Nhim, hồ Tuyền Lâm, hồ Đan Kia (Dankia) – hồ Suối Vàng, hồ Than Thở… <br> - Cảnh đẹp Đà Lạt nên check in: Ga xe lửa Đà Lạt, vườn hoa Đà Lạt, thung lũng tình yêu, làng Cù Lần, núi Langbiang, đồi Mộng Mơ, ma rừng lữ quán… <br> - Điểm du lịch Đà Lạt gắn với lịch sử – văn hóa tâm linh: Dinh Bảo Đại, biệt điện Trần Lệ Xuân, thiền viện Trúc Lâm, Trường Cao đẳng Sư phạm Đà Lạt, nhà thờ Chính Tòa… <br> - Địa điểm du lịch Đà Lạt chụp ảnh đẹp: Vườn hoa oải hương (lavender) Đà Lạt, quảng trường Lâm Viên, vườn hoa Tam Giác Mạch, Làng hoa Vạn Thành, Trung tâm văn hóa Thanh thiếu niên…  </p> 
              <p> <h6> 4.4. Tới Đà Lạt, ăn gì? </h6> </p> 
                <img src="./images/anhweb58.jpg" height = "300px" width="500px"> 
              <p> Đà Lạt có rất ít món ăn đặc sản, thay vào đó bạn có thể tìm thấy ẩm thực 3 miền và một số món ăn của người Hoa ở Đà Lạt. Một số món ăn ngon tại Đà Lạt mà các bạn đừng quên thưởng thức như. <br> Bánh ướt lòng gà ở đường Trương Công Định mở bán từ 2h chiều đến khoảng 8h tối là hết hàng <br> Bánh bèo Bà Hường với giá 20.000đ/ 4 cái tại địa chỉ 228 đườn Phan Đình Phùng <br> Bánh canh Xuân An: 25.000đ – 30.000đ/ tô tại nhà số 15 Nhà Chung <br>  Bánh Tráng nước ngon nhất tại địa chỉ 112 Nguyễn Văn Trỗi <br>  Dâu tây kem 8.000đ/ly tại số 242D Phan Đình Phùng <br>  Mỳ Quảng: được đánh giá cao cả về chất và lượng nằm tại địa chỉ lô A29, đường Mạc Đĩnh Chi, Đà Lạt <br>  Kem Bơ đường Nguyễn Văn Trỗi <br>  Xắp xắp bên Hồ Xuân Hương <br> Quán nướng Cu Đức chuyên các món đặc sản Tây Nguyên <br>  Quán ăn Tài Ký tại 1/A2 Bùi Thị Xuân, Đà Lạt <br> Chè xé áo ở góc đường Hùng Vương – Trần Qúy Cáp
       <p> <h6> 5. Săn đặt vé máy bay đi Đà Lạt giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Đà Lạt </h6> </p> 
                 <img src="./images/anhweb64.jpg" height = "300px" width="500px"> 
              <p> Du lịch Đà Lạt dù vẫn có đa dạng bốn mùa nhưng quanh năm luôn “hot” vì khí hậu mát mẻ, không khí trong lành, yên bình. Nếu chỉ là một chuyến đi bình thường thì bạn không cần lên kế hoạch quá sớm, trước khoảng 2-3 tuần là ổn. <br> Tuy nhiên trong các mùa cao điểm du lịch như mùa hoa cuối năm (tháng 10 - tháng 11) và các dịp nghỉ lễ chính thức như du lịch Tết Dương lịch, 30/4 - 1/5 hoặc lễ 2/9 thì lại khác. Lúc này, nhu cầu vé máy bay đi Đà Lạt và cả khách sạn đều vô cùng cao, rất dễ hết vé, cháy phòng. Nếu dự định du lịch trong thời gian này mà vẫn muốn có giá tốt thì bạn nên chuẩn bị từ sớm trước 1-2 tháng. <br> Đặc biệt riêng với vé máy bay Tết Nguyên đán thì lại càng phải mua sớm và thường xuyên theo dõi mới may mắn săn được vé máy bay đi Đà Lạt giá tốt nhất. Đây là thời điểm mọi người về quê đón Tết nên vé Tết đã được mở từ tháng 9, tháng 10, vì vậy nếu không lên kế hoạch sớm các bạn sẽ để lỡ những tấm vé máy bay Tết đi Đà Lạt giá tốt nhất cùng thời gian bay như ý. <br>  Bên cạnh đó, vào các thời điểm cụ thể trong năm, các hãng hàng không nội địa khai thác các hành trình đến Đà Lạt đều có chương trình khuyến mại -  bán vé máy bay giá rẻ trên các hành trình đến Huế. Chẳng hạn: Chào Hè, Mùa thu Vàng của Vietnam Airlines; khuyến mại 0 đồng của VietJet Air… <br> Ngay cả trong cùng một ngày, việc bạn chọn khung giờ bay nào cũng ảnh hưởng tới giá vé. Trong đó, các chuyến bay lúc sáng sớm và đêm muộn thường sẽ có giá thấp hơn so với các khung giờ bay khác trong ngày. Nếu như bạn không đi cùng trẻ nhỏ, người già, người có vấn đề về sức khỏe, thì hoàn toàn có thể chọn đặt vé vào khung giờ bay sáng sớm hoặc đêm muộn để tiết kiệm chi phí. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Đà Lạt tại ABAY.vn </h6> </p>
              <p> Hiện tại, vé máy bay đi Đà Lạt tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không… để nhanh chóng chọn được những tấm vé máy bay ưng ý.<br>Nếu không có thời gian hoặc không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như: tư vấn giấy tờ thủ tục bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách nhanh chóng, chuyên nghiệp và hiệu quả. </p>
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
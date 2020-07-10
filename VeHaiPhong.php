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
    <link rel="stylesheet" type="text/css" href="css/stylevehaiphong.css">

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
                  <a class="dropdown-item active" href="VeHaiPhong.php">Vé Máy Bay Đi Hải Phòng</a> 
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
                <center> <h4> Đặt Vé Máy Bay Đi Hải Phòng </h4> </center>
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
                             <option selected> Hải Phòng </option>
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
                    <img src="./images/anhweb110.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb111.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb112.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb113.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Hải Phòng giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Hải Phòng ? </h6> </p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Hải Phòng</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Thành phố Hồ Chí Minh </td> 
                      <td> 50p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Nha Trang </td> 
                      <td> 1h45p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Đà Nẵng </td> 
                      <td> 1h40p </td> 
                      <td> VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Buôn Mê Thuột </td> 
                      <td> 1h40p </td> 
                      <td> VietJet Air </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Hải Phòng là bao nhiêu? </h6> </p>
            <p> Vé Được Cập Nhật Mỗi Ngày. </p>

            <p> <h6> 3. Cách nào di chuyển từ sân bay Cát Bi tới trung tâm thành phố Hải Phòng ? </h6> </p>
            <p> <h6> 3.1.   Những điều cần biết về sân bay Cát Bi </h6> </p>  
              <img src="./images/anhweb65.jpg" height = "300px" width="500px"> 
            <p>- Sân bay quốc tế Cát Bi nằm cách trung tâm thành phố Hải Phòng khoảng 5km, và cách sân bay quốc tế Nội Bài (Hà Nội) khoảng 140 km. <br> - Hiện sân bay Cát Bi phục vụ các chuyến bay nội địa từ Hải Phòng đi: Tp Hồ Chí Minh, Buôn Ma Thuột, Đà Lạt, Đà Nẵng, Nha Trang, Phú Quốc, Pleiku. Và các chặng quốc tế từ Hải Phòng đi: Bangkok, Seoul.  </h6> </p>
            <p> <h6> 3.1. Cách di chuyển từ sân bay Cát Bi về trung tâm Hải Phòng </h6> </p> 
            <p> <strong > 3.2.1. Đi bằng xe buýt  </strong> <br> Để di chuyển từ sân bay Cát Bi về trung tâm Hải Phòng các bạn có 2 tuyến buýt để chọn lựa: <br> <strong> Xe buýt số 18 </strong> <br>Lộ trình xe chạy: Đường Lê Hồng Phong - Đường Ngô Gia Tự  -  Đường Lạch Tray  -  Đường Nguyễn Văn Linh  -  Đường vòng Cầu Niệm  -  Đường Trường Chinh  -  Đường Trần Nhân Tông  -  Ngã 5 Kiến An  -  Đường Trần Tất Văn  -  Cầu Khuể  - Cầu Phao Hàn  -  QL37  -  Cầu Phao Sông Hóa và ngược lại. <br> <strong> Xe buýt số 09 </strong> <br> Lộ trình xe chạy: Chuyến Khứ hồi   Đình Vũ  – Cảng Chùa Vẽ – Lê Thánh Tông –  Cầu Tre 2 – Lê Lai – Ngã 5 Lạc Viên Lê Hồng Phong – Ngô Gia Tự – Bến Cầu Rào – Đuờng 353 – Ngã 3 Ninh Hải – Đuờng 355- Chợ Huơng – Ngã 3 Đa Phúc – Ngã 4 Kiến- Thuỵ  – Thị Trấn Núi Đối  –  Ngã 3 Núi Chè - Ngã 3 Đại Hà. <br> <strong> Di chuyển từ Cát Bi về Hải Phòng bằng xe ôm </strong>
            Giá xe ôm ở Hải Phòng được tính trung bình khoảng 7.000đ/km. Nhưng muốn thuê xe ôm bạn phải đi bộ ra bên ngoài khu vực sân bay mới có thể bắt được xe. Bạn có thể tham khảo khoảng cách di chuyển của mình để có thể tính toán chi phí xe ôm của mình nếu bạn lựa chọn di chuyển bằng xe ôm. <br> <strong> Di chuyển bằng Taxi Hải Phòng </strong> <br> Ngay khi rời khỏi cửa vào nhà ga khách bạn có thể bắt gặp vô số xe taxi để đi về trung tâm Hải Phòng hoặc bất kỳ nơi nào mà mình mong muốn. Các bạn có thể tham khảo di chuyển cùng một số hãng taxi như: taxi Thống Nhất, taxi Đất Cảng, taxi Hải Phòng, taxi Mai Linh… <br> <strong> Sử dụng dịch vụ xe đưa đón của các công ty du lịch. </strong> <br> Ngoài xe taxi bạn có thể sử dụng dịch vụ xe đưa đón công ty du lịch là sự lựa chọn tuyệt vời. Dịch vụ đón tiễn sân bay của các công ty du lịch tại Hải Phòng cũng rất phát triển. Giá đón về đến thành phố Hải Phòng khoảng 200.000đ/lượt. </p>
              <p> <h6> 4. Bay đến Hải Phòng bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Hải Phòng </h6>
                <img src="./images/anhweb66.jpg" height = "300px" width="500px"> 
              <p> Khí hậu của Hải Phòng 1 năm được chia làm 4 mùa rõ rệt, mỗi mùa lại mang một vẻ đẹp đặc trưng riêng của mùa đó. Tuy nhiên, vì  Hải Phòng sở hữu nhiều vịnh biển, bãi biển đẹp nên các bạn nên thực hiện chuyến ghé thăm thành phố hoa phượng đỏ vào mùa hè - khoảng thời gian từ tháng 4 đến tháng 10, lúc này được xem là mùa du lịch Hải Phòng đẹp nhất trong năm. Hơn thế nữa, thời tiết lúc này có nắng vàng, bạn có thể đi tới Hải Phòng để tắm biển Đồ Sơn, Cát Bà… rất thú vị. </p>
              <p> <h6> 4.2. Tới Đà Lạt, ở đâu?  </h6></p>
              <img src="./images/anhweb67.jpg" height = "300px" width="500px"> 
              <p>ỞLà trọng điểm của du lịch phía Bắc, do vậy hàng năm nhất là vào mùa hè nơi đây đón lượng du khách không nhỏ. Để đáp ứng cho nhu cầu của du khách mà hệ thống nhà nghỉ, khách sạn tại Hải Phòng được đầu tư vô cùng quy mô và hiện đại. Tại Hải Phòng bạn có thể dễ dàng tìm được được những nhà nghỉ giá rẻ, bình dân giá từ khoảng 200.000đ – 400.000đ/ngày đêm cho tới những khách sạn cao cấp khoảng từ 1.500.000đ – 2.000.000đ/ngày đêm, tùy theo nhu cầu cá nhân và khả năng tài chính của mình. <br> Tại Hải Phòng bạn có thể chọn nghỉ tại 3 khu vực: Đồ Sơn, Cát Bà, cầu Đất để thuận lợi cho việc đi lại, thăm quan, khám phá của mình. <br> Nhà nghỉ, khách sạn khu vực Đồ Sơn <br> - Bank Star Hotel - Địa chỉ: 79 Lý Thánh Tông, Vạn Sơn, Đồ Sơn, Đồ Sơn. Mức giá phòng dao động từ 300.000đ – 800.000đ/ngày đêm. <br>- Hoa Phuong Hotel – Địa chỉ: Khu 2, Bãi biển Đồ Sơn. Mức giá phòng tại Hoa Phuong Hotel dao động từ 380.000đ – 900.000đ/ngày đêm. <br> - Hon Dau Resort – Địa chỉ: Khu 3, Phường Vạn Hương, Bãi Biển Đồ Sơn. Mức giá phòng tại đây dao động từ 700.000đ – 1.800.000đ/ngày đêm. <br><strong> Những nhà nghỉ, khách sạn giá rẻ ở khu Cầu Đất </strong> - Kim Lien Hotel – Địa chỉ: Số 151 Lương Khánh Thiện , Phường Cầu Đất, Quận Ngô Quyền , Tp Hải Phòng Giá phòng tham khảo: 600.000đ/ngày đêm. <br> - Hoang Hai Hotel – Địa chỉ: 109 Cau Dat, Hải Phòng, Việt Nam. Giá phòng tham khảo: 7920.000đ/ngày đêm. <br> - Phu Vinh Holel – Địa chỉ: số 27 Hai Bà Trưng, đường Lê Trân, quận Cầu Đất. Giá phòng tham khảo từ 342.000đ/ngày đêm. <br>  
              <strong> Những nhà nghỉ, khách sạn giá rẻ ở khu vực Cát Bà </strong> <br>  
              - Phoenix Flower Hotel – No.244 1/4 Street Cat Ba town, Cat Hai district, Hai Phong city, Cát Bà, Việt Nam. Mức giá phòng dao động từ 302.000 – 559.000đ/ngày đêm. <br>  - Luna's House – Địa chỉ: 140 Nui Ngoc Street, Cat Ba Town, Cat Hai, Hai Phong, Cát Bà, Việt Nam. Giá phòng tham khảo: 345.000đ/ngày đêm. <br> - Cat Ba Family Hotel – Địa chỉ: 245 Núi Ngọc Cát Bà, Hải Phòng, Cát Bà, Việt Nam. Giá phòng tham khảo: 233.000đ/ngày đêm. <br> Là một điểm du lịch hấp dẫn nhiều du khách trong nước và quốc tế, Hải Phòng có nhiều điểm thăm quan độc đáo và hấp dẫn để các bạn ghé đến. <br> Top các danh thắng nổi tiếng: quần đảo Cát Bà, danh thắng Tràng Kênh, hòn Dấu, đảo Khỉ, đảo Bạch Long Vĩ, núi Voi… <br> Top các điểm vui chơi, giải trí hấp dẫn: Đồ Sơn có công viên khủng long, 4 bãi tắm đẹp và nhiều dịch vụ giải trí trên cạn và dưới biển. TD plaza có các trò game sôi động, chơi bowling, rạp phim, khu mua sắm đồ hiệu. Rạp chiếu phim Công Nhân ở phố Cầu Đất. Rạp Tháng Tám ở phố Mê Linh. Rạp 1-5 ở đường Hoàng Văn Thụ. Nhà hát ở đường Điện Biên Phủ, ngay cạnh nhà hát Lớn. Cung Văn hóa hữu nghị Việt Tiệp. Nhà văn hóa thanh niên ở Hồ Quần Ngựa. <br>  Top các điểm mua sắm tại Hải Phòng: Chợ Sắt, phố Quang Trung, Hải Phòng. Chợ Ga, phố Lương Khánh Thiện, Hải Phòng. Chợ An Dương, phố Tôn Đức Thắng, Hải Phòng. Chợ Tam Bạc, phố Phan Bội Châu, Hải Phòng. Siêu thị chợ Sắt, phố Quang Trung, Hải Phòng Siêu thị Minh Khai, số 23 Minh Khai, Hải Phòng. Siêu thị Big C, đường Lê Hồng Phong, Hải Phòng. Trung tâm thương mại Parkson, đường Lê Hồng Phong, Hải Phòng. Siêu thị METRO, khu A2 phường Sở Dầu, quận Hồng Bàng, Hải Phòng. </p> 
              <p> <h6> 4.3. Tới Hải Phòng, ăn gì? </h6> </p> 
                <img src="./images/anhweb68.jpg" height = "300px" width="500px"> 
              <p> Hải Phòng có nhiều món ăn ngon với hương vị đặc trưng khiến du khách chỉ 1 lần thưởng thức thôi mà cũng nhớ mãi. <br> Bánh ướt lòng gà ở đường Trương Công Định mở bán từ 2h chiều đến khoảng 8h tối là hết hàng <br> - Ốc Hải Phòng: Nổi tiếng với món ốc xào, ốc luộc mắm Hải Phòng rất đặc biệt. Một số địa chỉ ăn ốc nổi tiếng ở Hải Phòng các bạn có thể ghé đến như: <br> + Ốc đường Lê Lợi nằm giữa ngã sáu với ngã ba Lê Lợi – Phạm Minh Đức. <br> + Ốc đường Cầu Đất. <br> + Ốc đường Đình Đông, giá một đĩa ốc ở đây chỉ từ 10.000 – 12.000đ nhưng đc khá nhiều ốc. <br> - Bánh mì cay Hải Phòng: bạn có thể ăn món này ở dọc đường Lê Lợi. <br> - Bánh sắn ở chợ Cát Bi, chợ chỉ họp vào buổi chiều và tầm 7h tối là tan. Chợ  Cát Bi có khu ăn uống phong phú, đa dạng với nhiều món cho bạn lựa chọn. <br> - Bánh đa cua Hải Phòng: Phải kể tới quán đầu đường Điện Biên Phủ gần ngã sáu, quán vỉa hè và quán chỉ bán vào buổi chiều. <br>
             <p> <h6> 5. Săn đặt vé máy bay đi Hải Phòng giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Hải Phòng </h6> </p> 
                 <img src="./images/anhweb69.jpg" height = "300px" width="500px"> 
              <p> Khoảng thời gian trước và sau Tết Nguyên Đán, khoảng thời gian từ tháng 4 đến tháng 10 là mùa du lịch cao điểm, giá vé máy bay đi Hải Phòng cũng theo đó mà tăng lên đáng kể so với các tháng khác trong năm. <br> Do đó, để chuyến du lịch Hải Phòng tiết kiệm các bạn nên tránh đặt vé vào thời gian cao điểm. Hoặc nếu bắt  buộc phải bay trong giai đoạn này thì các bạn nên sắp xếp lịch trình sớm và đặt vé trươc khoảng 1 – 2 tháng, cách này sẽ giúp bạn tiết kiệm được một khoản không nhỏ so với việc mua vé cận ngày bay. <br> Hiện tại, các đường bay đến Hải Phòng được 3 hãng Vietnam Airlines, VietJet, Jetstar đầu tư khai thác với khai thác với hơn 15 chuyến bay trong ngày. Bên cạnh việc mở bán vé máy bay giá tốt thoe nùa, các hãng hàng không nội địa còn thường xuyên tung ra những chương trình khuyến mãi như: “Bay đẳng cấp, giá cực thấp” của Vietnam Airlines, “Bay là thích ngay”, “12h rồi VietJet thôi” của VietJet Air hay “Cuối tuần siêu giảm giá” của Jetstar Pacific… mang đến cho các bạn cơ hội sở hữu vé máy bay đi Hải Phòng có khi giá chỉ là 0 ĐỒNG đến 150.000 đồng. <br> Bên cạnh đó vé máy bay đi Hải Phòng giá rẻ thường sẽ có giờ khởi hành vào thời điểm giữa đêm hoặc sáng sớm, vì vậy, lúc đặt vé máy bay, hãy chú ý đến thời gian khởi hành chuyến bay để có thể sắp xếp được những hành lí cần thiết, ngoài ra bạn cũng cần phải xem xét được những chi phí sẽ phát sinh khi di bay vào những thời điểm này. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Hải Phòng tại ABAY.vn </h6> </p>
              <p> Hiện tại, vé máy bay đi Hải Phòng tại ABAY đang có mức giá tốt so với các đại lý khác. Bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không… để nhanh chóng chọn được những tấm vé máy bay ưng ý. <br> Nếu không có thời gian hoặc không thông thạo các thao tác máy tính, bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như: tư vấn giấy tờ thủ tục bay, các quy định về hành lý, hỗ trợ check-in online, xử lý các vấn đề phát sinh liên quan đến vé… một cách nhanh chóng, chuyên nghiệp và hiệu quả. </p>
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
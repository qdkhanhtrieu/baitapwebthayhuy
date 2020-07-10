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
    <link rel="stylesheet" type="text/css" href="css/stylevenhatrang.css">

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
              <a class="nav-link" href="TrangChu.html" target="_top">Trang Chủ</a>
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
                  <a class="dropdown-item active" href="VeNhaTrang.php">Vé Máy Bay Đi Nha Trang</a>
                  <a class="dropdown-item" href="VePhuQuoc.php">Vé Máy Bay Đi Phú Quốc</a>
                  <a class="dropdown-item" href="VeVinh.php">Vé Máy Bay Đi Vinh</a>
                  <a class="dropdown-item" href="VeDaLat.php">Vé Máy Bay Đi Đà Lạt</a>
                  <a class="dropdown-item" href="VeHaiPhong.php">Vé Máy Bay Đi Hải Phòng</a> 
                  <a class="dropdown-item" href="VeBuonMeThuot.php">Vé Máy Bay Đi Buôn Mê Thuột</a>
                </div>
              </li>     
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài Khoản</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Tài Khoản CGV</a>
                  <a class="dropdown-item" href="#">Quyền Lợi</a>
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
                <center> <h4> Đặt Vé Máy Bay Đi Nha Trang </h4> </center>
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
                             <option>Phú Quốc</option>
                             <option>Vinh</option>
                      </select>
                       </div>
                       <div class="form-group col-sm-5">
                          <h6> <center> 
                         <label for="exampleInputEmail1"> Nơi Đến </label> </center> </h6>
                        <select name='txtNoiDen' id="nhapnoiden" class="form-control"> 
                             <option selected> Nha Trang </option>
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
                    <img src="./images/anhweb122.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb123.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb124.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb125.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Nha Trang giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Nha Trang ? </h6> </p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Nha Trang </th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Thành phố Hồ Chí Minh </td> 
                      <td> 1h00p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Đà Nẵng </td> 
                      <td> 1h00p </td> 
                      <td> Vietnam Airlines, VietJet Air </td>
                  </tr>
                  <tr>
                      <td> Hà Nội </td> 
                      <td> 1h50p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                      <td> Hải Phòng </td> 
                      <td> 1h45p </td> 
                      <td> VietJet Air </td>
                  </tr>
                  <tr>   
                      <td> Thanh Hóa </td> 
                      <td> 1h45p </td> 
                      <td> VietJet Air </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Nha Trang là bao nhiêu? </h6> </p>
            <p> Giá Vé Được Cập Nhật Mỗi Ngày </p>
            <p> <h6> 3. Di chuyển từ sân bay quốc tế Nha Trang tới trung tâm thành phố Nha Trang và ngược lại như thế nào ? </h6> </p>
            <p> <h6> 3.1. Những điều cần biết về sân bay quốc tế Cam Ranh </h6> </p>  
              <img src="./images/anhweb44.jpg" height = "300px" width="500px"> </p>
            <p> Sân bay quốc tế Cam Ranh nằm tại phường Cam Nghĩa, thành phố Cam Ranh. Sân bay này cách thành phố Nha Trang 35km phía Bắc, cách thành phố Cam Ranh 10km phía Nam. <br> 
              Về hoạt động hàng không của sân bay: <br> + Đường bay nội địa: Khai thác đường bay đến Nha Trang có 4 hãng hàng không nội địa là Vietnam Airlines; Vietjet Air, Bamboo Airways và Jetstar <br>
              + Đường bay quốc tế: Cùng với 4 hãng nội địa là các hãng hàng không quốc tế đang hoạt động tại sân bay Cam Ranh như Korean Air, Asiana; Asiana Airlines; UTair Aviation; S7 Airlines, Vlaposktock Airlines… <br>
              Nhà ga nội địa (T1) <br> -Nhà ga nội địa tiếp nhận các chuyến bay đến và đi nội địa của 4 hãng hàng không Vietnam Airlines; Vietjet Air, Bamboo Airways và Jetstar <br> Nhà ga quốc tế (T2) <br> 
              - Tại nhà ga này hãng Vietjet Air sẽ triển khai khai thác quầy dịch vụ tại tầng 2, dãy E, F. Các hành khách SkyBoss được bố trí quầy làm thủ tục riêng (quầy F09). <br> - Trong khi đó, hãng Vietnam Airlines sẽ triển khai 8 quầy làm thủ tục tại dãy D, bên đảo cánh trái nhà ga để phục vụ hành khách. Trong đó, các khách hạng Thương gia và SkyPriority được bố trí hai quầy làm thủ tục riêng (quầy số 1 và số 2), mang đến sự thuận tiện, thoải mái tối đa. Phòng chờ Thương gia nằm trên tầng 2, diện tích gần 210m2 với sức chứa 70 khách sẽ phục vụ hội viên Bông Sen Vàng và khách hạng Thương gia của Vietnam Airlines tại sân bay Cam Ranh.</p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Cam Ranh vào trung tâm thành phố </h6> </p>
             <img src="./images/anhweb45.jpg" height = "300px" width="500px"> </p>
            <p> <strong > 3.2.1. Mini Bus </strong> <br> Nếu bạn sử dụng xe bus hàng không sẽ tiết kiệm hơn, chỉ từ 15% đến 25% chi phí đi taxi, khoảng 70.000đ. <br> Bạn có thể dễ dàng tìm thấy bãi đậu xe bus phía bên trái khu vực ngoài sân bay Cam Ranh, nhưng nhớ trước đó phải mua vé xe buýt gần khu lấy hành lý. Chọn cho mình 1 chiếc xe buýt, chỉ khoảng gần 1 tiếng là bạn sẽ đến được trung tâm thành phố Nha Trang. <br> Hiện tại xe bus Đất Mới là tuyến xe bus nổi bật được nhiều người chọn lựa nhất, ngoài ra bạn có thể chọn lựa xe buýt sân bay Cam Ranh của hãng xe Phương Trang. <br> 
            - Tần suất xe buýt Đất Mới hoạt động trong ngày: Khoảng 24 chuyến (48 lượt) mỗi ngày. <br> 
            - Thời gian hoạt động trong ngày: Mở tuyến vào lúc 5h30p hàng ngày và đóng tuyến vào 21h50p hàng ngày <br> 
            - Kích thước xe: Có sức chứa tối đa là 30 chỗ ngồi <br> 
            - Thời gian hoạt động 1 hành trình di chuyển qua các trạm là là 60 phút/lượt. <br> 
            - Tần suất chạy xe khoảng 20p đến 30p/ lượt. <br> 
            - Giá vé: Đối với hành trình dưới 10km áp dụng mức giá là 10.000đ/lượt; đối với hành trình từ 10 đến 20km áp dụng mức giá là 20.000đ/lượt; đối với hành trình từ 20 đến 30km áp dụng mức giá là : 30.000đ/lượt. Nếu chọn hành trình toàn tuyến từ sân bay đến trung tâm thành phố hoặc ngược lại thì mức giá vé là  50.000đ/lượt. <br> - Lộ trình di chuyển: đường Yersin, Nha Trang (ngay tại cổng Sân vận động 19-8), sau đó lần lượt đi qua các đường gồm đường Trần Hưng Đạo – đường Hùng Vương – đường Trần Quang Khải – đường Trần Phú – đường Hoàng Diệu – đường Nguyễn Đức Cảnh – đường Nguyễn Tất Thành. Điểm dừng chân cuối cùng tại sân bay Cam Ranh. </p> 
            <p> <strong> 3.2.2. Taxi sân bay </strong> </p> 
            <p> Hiện đang được cung cấp độc quyền bởi Airport Taxi với giá cước khoảng 300.000đ - 350.00đ/chiều. Khách có thể di chuyển ra phía ngoài cổng sân bay để lựa chọn các hãng taxi khác với giá rẻ hơn 200.000đ - 250.000đ/chiều. <br> 
            Ngoài ra kể từ tháng 5/2016, hành khách đã có thể sử dụng dịch vụ taxi sân bay Cam Ranh giá rẻ của DichungTaxi với mức giá cước chỉ từ 150.000đ đối với hình thức đi chung và 220.000đ giá đi riêng trọn gói.  </p>
              <p> <h6> 3.2.3. Xe dịch vụ sân bay </h6> </p>
              <p> Được cung cấp bởi Dichvuxenhatrang.com: 
                – Từ sân bay Cam Ranh về Nha Trang: 220.000 đồng <br>
                – Từ Nha Trang về sân bay Cam Ranh: 200.000 đồng <br>
                Thêm một điểm hấp dẫn khác khi chọn xe dịch vụ là bạn có thể ký hợp đồng tham quan với các loại xe dịch vụ từ 4 chỗ đến 45 chỗ. <br>
                – Điện thoại liên hệ: 0905 678 860 <br>
                – Địa chỉ: 143 Lê Hồng Phong, phường Phước Hòa, thành phố Nha Trang, Khánh Hòa <br> 
              Nếu bạn mang theo ít hành lý và muốn tiết kiệm chi phí di chuyển thì có thể sử dụng loại hình xe shuttle bus của sân bay. Được biết đây là phương tiện tiết kiệm chi phí cho những hành khách đi một mình và mang theo ít hành lý với giá vé chỉ khoảng 70.000đ. Ưu điểm của loại hình xe buýt này là bất kể có đủ khách hay không, xe vẫn sẽ khởi hành sau 30 phút tính từ lúc máy bay đến. Xe sẽ dừng tại địa chỉ số 86 Trần Phú, là sân bay cũ của thành phố Nha Trang. </p> 
              <p> <h6>  3.2.4. v </h6> </p> 
              <p> Phù hợp với những đối tượng thích đi phượt, đi đôi hay đi nhóm muốn dong chơi, khám phá danh thắng. Dịch vụ này cực rẻ chỉ khoảng 80.000đ – 120.000đ/ ngày. Bạn có thể liên hệ khách sạn nơi đặt phòng để hỏi dịch vụ này. Tuy nhiên quãng đường 35km khá xa bạn nên chú ý đến an toàn khi di chuyển nhé. <br>
              Công ty du lịch Hải Phong <br> 
              Địa chỉ: 96B1/13 Trần Phú – Nha Trang <br> 
              Điện thoại: 0583.500.672 – 0583.500.262 <br>
              Giá thuê: xe số giá 60.000đ/ xe, xe tay ga giá 80.000đ/ xe <br>
              Công ty VietDream <br>
              Địa chỉ: 3B Hùng Vương (khu Quân Trấn), Nha Trang <br>
              Điện thoại: 0935 605 963 – (0583) 605 963 <br>
              Giá thuê: xe số giá 50.000đ/ xe, xe tay ga giá 80.000đ/ xe <br>
              Công ty Thuê xe máy Nha Trang <br>
              Địa chỉ: 14C Mạc Đĩnh Chi, Nha Trang <br>
              Điện thoại: 0989 164 817 <br>
              Giá thuê xe: xe số có giá từ 60.000đ – 100.000đ/ xe, xe tay ga có giá từ 100.000đ – 200.000đ/ xe, xe tay côn giá trên 200.000đ/ xe, tùy loại xe đời mới hay cũ. </p>
              <p> <h6> 4. Bay đến Nha Trang bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Nha Trang </h6>
                <img src="./images/anhweb46.jpg" height = "300px" width="500px"> </p>
              <p> - Phải kể tới hàng chục địa danh nếu muốn khám phá hết Nha Trang. Là Tứ Bình đẹp như tranh với Bình Ba – Bình Hưng – Bình Lập – Bình Tiên. <br> - Điệp Sơn gồm 3 hòn đảo nhỏ, nằm chơi vơi trong vùng biển thuộc vịnh Vân Phong, tỉnh Khánh Hòa sẽ khiến bạn phát cuồng vì con đường giữa biển lãng mạn và hòn đảo tràn ngập màu xanh của cây cối, màu đỏ thẫm của những mái nhà lợp ngói và những bãi biển xanh trong màu ngọc bích. <br> - Vinpearl Land được biết đến như “thiên đường của miền nhiệt đới” - nơi ngoài những khách sạn sang trọng, những khu vườn tuyệt đẹp, hồ bơi nước ngọt lý tưởng, nơi này còn thu hút du khách với khu trò chơi cảm giác mạnh và những rạp chiếu phim 4D hoành tráng. <br>- Đảo Hòn Mun có làn nước trong veo và hệ sinh thái san hô đẹp lộng lẫy hay hòn Tằm ngoài những bãi tắm tuyện đẹp, nơi đây còn nổi tiếng với hoạt động khám phá biển bằng tàu đáy kính cũng như dịch vụ lặn biển ngắm san hô. <br> - Còn rất nhiều cái tên cần phải đi, cần phải đến như Vịnh Ninh Vân, Viện Hải Dương;  Tháp Bà Ponagar; Hòn Chồng – Hòn Vợ; Vịnh Vân Phong… </p>
              <p> <h6> 4.2. Tới Nha Trang, ở đâu?  </h6></p>
              <p> - Nha Trang là khu du lịch tập trung hàng ngàn khách sạn, nhà nghỉ lớn nhỏ chẳng thua kém các thành phố lớn như Nha Trang, Hà Nội, Sài Gòn… Khi chọn phòng khách sạn bạn cần quan tâm chi phí mình bỏ ra cho mục này là bao nhiêu, nhu cầu của mình như thế nào… <br> 
              - Trần Phú là con đường trung tâm chính của du lịch Nha Trang vì thế không có gì khó hiểu khi nơi đây tập trung nhiều khách sạn, resort cao cấp nên bạn sẽ tiết kiệm rất nhiều thời gian nếu thích du lịch biển. <br>
              Nếu tìm khách sạn ngay đường Trần Phú lại gần biển thì giá cực cao nhé. Chịu khó đi sâu hơn và giảm yêu cầu khách sạn đẹp, sang trọng thì bạn có thể tìm đến các khách sạn 2 – 3 sao như Thái Dương Nha Trang; Khách sạn Viet Grand; Khách sạn Tuyết Mai 2…  Giá chỉ khoảng 275.000đ trở lên. <br> 
              - Khách sạn ở khu vực biệt thự - Hùng Vương: <br>
              + Khách sạn Dollar Nha Trang - Địa chỉ: 84/10 Hùng Vương, Phường Lộc Thọ, Nha Trang giá khoảng 400.000đ – 500.000đ. <br>
              + Khách Sạn Palm Beach Nha Trang - Địa chỉ: 4B Biệt Thự, Nha Trang, Khánh Hòa, cách trung tâm thành phố khoảng 2 km giá khoảng 500.000đ. <br>
              + Khách Sạn Golden Sand - Địa chỉ: 1N Quân Trấn, Hùng Vương, Nha Trang, Khánh Hòa - giá khoảng 500.000đ. <br>
              Rẻ hơn nữa là khách sạn khu vực Phạm Văn Đồng giá chỉ 150.000đ-180.000đ/ ngày nhưng xa trung tâm thành phố. <br>
              - Vào mùa cao điểm- khoảng tháng 6 - 7 -8 thì nếu không book trước phòng có thể bạn sẽ không tìm được khách sạn và nhà nghỉ có giá tốt nên ABAY khuyến cáo ngay sau khi đặt vé máy bay bạn nên chủ động tìm phòng khách sạn nhé. Để đặt phòng tại Nha Trang nhanh, phòng đẹp các bạn có thể đặt phòng qua mạng trực tuyến tại các website đặt phòng giá sẽ mềm hơn đặt trực tiếp tại web khách sạn. Tham khảo web agoda, ivivu, mytour…   </p>
              <p> <h6> 4.3. Tới Nha Trang, đi đâu? <h6> </h6> 
                <img src="./images/anhweb47.jpg" height = "300px" width="500px"> </p>
              <p> - Phải kể tới hàng chục địa danh nếu muốn khám phá hết Nha Trang. Là Tứ Bình đẹp như tranh với Bình Ba – Bình Hưng – Bình Lập – Bình Tiên. <br> - Điệp Sơn gồm 3 hòn đảo nhỏ, nằm chơi vơi trong vùng biển thuộc vịnh Vân Phong, tỉnh Khánh Hòa sẽ khiến bạn phát cuồng vì con đường giữa biển lãng mạn và hòn đảo tràn ngập màu xanh của cây cối, màu đỏ thẫm của những mái nhà lợp ngói và những bãi biển xanh trong màu ngọc bích. <br> - Vinpearl Land được biết đến như “thiên đường của miền nhiệt đới” - nơi ngoài những khách sạn sang trọng, những khu vườn tuyệt đẹp, hồ bơi nước ngọt lý tưởng, nơi này còn thu hút du khách với khu trò chơi cảm giác mạnh và những rạp chiếu phim 4D hoành tráng. <br> - Đảo Hòn Mun có làn nước trong veo và hệ sinh thái san hô đẹp lộng lẫy hay hòn Tằm ngoài những bãi tắm tuyện đẹp, nơi đây còn nổi tiếng với hoạt động khám phá biển bằng tàu đáy kính cũng như dịch vụ lặn biển ngắm san hô. <br> - Còn rất nhiều cái tên cần phải đi, cần phải đến như Vịnh Ninh Vân, Viện Hải Dương;  Tháp Bà Ponagar; Hòn Chồng – Hòn Vợ; Vịnh Vân Phong…   </p> 
              <p> <h6> 4.4. Tới Nha Trang, ăn gì? </h6> </p> 
                <img src="./images/anhweb48.jpg" height = "300px" width="500px"> 
              <p> - Bún chả cá <br> - Bò nướng Lạc Cảnh - Nhà hàng Lạc Cảnh: Số 44 Nguyễn Bỉnh Khiêm, Nha Trang. <br> Lưu ý: Thời gian nhận phục vụ từ 9h đến 21h30 tối và nhớ gọi điện đặt trước nhé. SĐT: 058.382.1391 – 058.360.6277 – 058.382.2522 <br> - Bánh xèo mực Nha Trang <br> + Quán bánh xèo mực vỉa hè của chị Huỳnh Thị Bảy, ngay góc ngã ba Lê Thành Phương – Trần Quý Cáp. <br>+ Quán bánh xèo ở ngã ba đường Trần Quý Cáp và Lê Thành Phương. <br> 
              + Quán bánh xèo số 52 Phan Bội Châu, Nha Trang. <br>
              - Bánh đập Nha Trang: <br>
              + Số 16A Hồng Lĩnh, quán hơi nhỏ nhưng được cái sạch sẽ, có chỗ để xe máy, bán từ 3h chiều đến 9 giờ tối, Chủ Nhật thì nghỉ bán. <br>
              + Quán bánh lề đường số 69 Huỳnh Thúc Kháng: Quán ăn ngon, giá rẻ, lúc nào cũng đông khách nên phục vụ sẽ hơi lâu. <br>
              + Quán bánh đập số 1 Cao Bá Quát (góc đường Cao Bá Quát – Phù Đổng) quán bán buổi chiều và tối. <br>
              - Sò huyết Thủy Triều: <br>
              + Quán Nhật Phong 3: Số 67 Cù Lao Trung, Nha Trang <br>
              + Quán Hạnh Xuân: Quán này nằm ở dọc bờ kè phía Bắc cầu Trần Phú <br> 
              + Quán ốc Long Vũ: Số 133 Tháp Bà, thành phố Nha Trang <br>
              + Quán ốc Vy: Số 39 Nguyễn Thị Minh Khai, thành phố Nha Trang <br>
              Nếu muốn mua đồ về làm quà thì có các đặc sản: <br>
              - Yến sào: Địa chỉ tham khảo: <br>
              • Cửa hàng yến sào A Nam: 50 B – Nguyễn Thị Minh Khai – Phường Tân Lập – Nha Trang <br>
              • Công ty yến sào Khánh Hòa: Số 248 – đường Thống Nhất – Phường Phương Sơn – Nha Trang <br>
              • Yến Sào Sanest Khánh Hòa với các chi nhánh <br>
              + Cửa hàng 248 Thống Nhất – Nha Trang <br>
              + Cửa hàng 136 Thống Nhất – Nha Trang <br>
              - Bánh xoài: <br>
              Địa chỉ tham khảo: <br>
              + Chợ Đầm <br>
              + Chợ Xóm Mới 49 Ngô Gia Tự – Nha Trang <br>
              + Cửa hàng 11E Thái Nguyên – Nha Trang <br>
              Giá tham khảo: Từ 70 – 120.000đ/kg và thường được chia thành nhiều bịch 200 g tiện lợi. <br>
              - Mực khô/mực một nắng/mực rim/ghẹ sữa ram <br>
              + Chợ Đầm <br> 
              + Chợ Xóm Mới 49 Ngô Gia Tự – Nha Trang <br>
              + Đại lý hải sản: 48 Ngô Gia Tự – Nha Trang </p>
              <p> <h6> 5. Săn đặt vé máy bay đi Nha Trang giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Nha Trang </h6> </p> 
              <p> - Các tháng hè từ tháng 7 – 8 là mùa du lịch cao điểm tại Nha Trang, giá dịch vụ du lịch cũng tăng cao và giá vé máy bay thời điểm này cũng khá đắt. Nếu xác định bay khoảng thời gian này bạn nên chủ động đặt trước 1 cho tới 3 tháng để có mức giá tốt nhất. <br> - Khi đặt vé đi Nha Trang đừng bỏ lỡ các chương trình khuyến mãi từ các hãng hàng không nội địa Vietnam Airlines, VietJet, Jetstar hay Bamboo Airways như Bay đẳng cấp, giá cực thấp” của Vietnam Airlines, “Bay là thích ngay”, “12h rồi VietJet thôi” của VietJet hay “Cuối tuần siêu giảm giá” của Jetstar… <br> - Từ tháng 10 đến tháng 11 vì thời tiết lúc này sẽ có mưa nhiều nhưng giá vé lại cực kỳ mềm mại đấy nhé. <br> - Đặt vé bạn cần nhớ: Không chỉ thời điểm bay mà khung giờ bay trong ngày cũng ảnh hưởng tới giá vé máy bay đi Nha Trang đấy nhé. Thông thường các cuyến bay lúc đêm muộn và sáng sớm giá vé sẽ thấp hơn các khung giờ bay khác trong ngày. Có thể xem xét các chuyến bay trong khung giờ này để tiết kiệm tiền vé bạn nhé.  </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Nha Trang tại ABAY.vn </h6> </p>
              <p> Nếu đem so sánh, vé máy bay đi Nha Trang tại ABAY.vn đang có mức giá tốt so với các đại lý khác. Tại ABAY.vn bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo các thao tác máy tính hoặc không có thiết bị kết nối mạng bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Sau khi đặt vé đi Nha Trang thành công, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như hỗ trợ check-in online, tư vấn giấy tờ hay thủ tục bay, các quy định về hành lý, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả. <br> ABAY.vn sẽ là sự lựa chọn tiết kiệm và hoàn hảo của bạn khi đặt vé máy bay đi Nha Trang hay bất cứ đâu. .  </p>
             
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
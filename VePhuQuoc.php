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
    <link rel="stylesheet" type="text/css" href="css/stylevephuquoc.css">

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
                  <a class="dropdown-item active" href="VePhuQuoc.php">Vé Máy Bay Đi Phú Quốc</a>
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
                <center> <h4> Đặt Vé Máy Bay Đi Phú Quốc </h4> </center>
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
                             <option>Vinh</option>
                      </select>
                       </div>
                       <div class="form-group col-sm-5">
                          <h6> <center> 
                         <label for="exampleInputEmail1"> Nơi Đến </label> </center> </h6>
                        <select name='txtNoiDen' id="nhapnoiden" class="form-control"> 
                             <option selected> Phú Quốc </option>
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
                    <img src="./images/anhweb127.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb128.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb129.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb130.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Phú Quốc giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Phú Quốc ? </h6> </p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Hà Nội</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Thành phố Hồ Chí Minh </td> 
                      <td> 1h5p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Hà Nội </td> 
                      <td> 2h5p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Hải Phòng </td> 
                      <td> 2h05p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr> 
                      <td> Cần Thơ </td> 
                      <td> 55p </td> 
                      <td> Vietnam Airlines </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Phú Quốc là bao nhiêu? </h6> </p>
            <p> Vé Được Cập Nhật Mỗi Ngày. </p>

            <p> <h6> 3. Di chuyển từ sân bay quốc tế Phú Quốc tới trung tâm thành phố Phú Quốc và ngược lại như thế nào ? </h6> </p>
            <p> <h6> 3.1.  Những điều cần biết về sân bay quốc tế Phú Quốc </h6> </p>  
              <img src="./images/anhweb49.jpg" height = "300px" width="500px"> </p>
            <p> Sân bay Phú Quốc nằm ở Phú Quốc International Airport (PQIA) Xã Dương Tơ, huyện Phú Quốc, tỉnh Kiên Giang. Sân bay nằm ở phía Nam của đảo Phú Quốc, cách trung tâm thị trấn Dương Đông khoảng 10km về phía Bắc. Phía Bắc giáp ấp Suối Mây, phía Nam sân bay giáp ấp Dương Tơ, phía Đông giáp xã Hàm Ninh, phía Tây giáp với bờ biển (cách khoảng 900m). <br> - Hiện sân bay có 2 nhà ga trong nước và quốc tế. Có 36 quầy làm thủ tục checkin cho hành khách (18 quốc tế, 18 nội địa). </p>
            <p> <h6> 3.2. Cách di chuyển từ sân bay Phú Quốc vào trung tâm thành phố </h6> </p>
            <img src="./images/anhweb50.jpg" height = "300px" width="500px">
            <p> <strong > 3.2.1. Xe buýt sân bay </strong> <br> Tuyến xe sân bay Phú Quốc đi Trung tâm Phú Quốc <br> - Hiện chưa có xe buýt công cộng hoạt động ở sân bay này.  <br> - Duy nhất 1 tuyến xe bus hoạt động với lịch trình từ sân bay Phú Quốc chạy thẳng về trung tâm thành phố và ngược lại. Điểm đón tại tại bãi xe sân bay Phú Quốc (ngay khi xuống máy bay bạn di chuyển ra cửa sân bay và đi thẳng khoảng hơn 1 phút là tới). Mức giá vé cố định của tuyến xe bus này là 50.000 đ/ 1 vé/ 1 người.  <br>  - Lộ trình di chuyển chi tiết: bãi đỗ xe thuộc sân bay Phú Quốc- đường Trần Hưng Đạo - đường 30 tháng 04 - đường mới là Hùng Vương tới trung tâm thị trấn Đông Dương.  <br>  Xe buýt sân bay của hãng  <br>  - Jetsar Pacific là một trong những hãng phục vụ  tuyến xe bus sân bay Phú Quốc di chuyển vào các điểm trong trung tâm thành phố và ngược lại. Giống như hoạt động của các tuyến xe bus khác, bạn có thể thực hiện mua vé xe bus ngay trên máy bay khi chuyến bay sắp hạ cánh xuống sân bay  Phú Quốc và thực hiện di chuyển ngay sau khi chuyến bay đáp cánh khoảng 30 phút.  <br>  - Hiện hoạt động xe bus sân bay Phú Quốc Jetstar theo lịch trình chuyến bay đến và đi tại sân bay Phú Quốc của hãng hàng không này. Điểm khởi đầu của chuyến xe bus tại sân bay Phú Bài (khu vực bãi đổ xe theo quy định) và kết thúc hành trình tại đường Nguyễn Trung Trực.  <br>  - Giá vé 40.000đ/ 1 vé/ hành khách  <br>  Xe buýt đưa đón Vinpearl land và Vinpearl Safari Phú Quốc.  <br> - Xe buýt đưa đón Vinpearl land và Vinpearl Safari Phú Quốc là một trong những tuyến xe phổ biến nhất hiện nay của công ty du lịch Vinpearl land  và Vinpearl Safari Phú Quốc.  <br> - Lịch trình xe Vinpearl land và Vinpearl Safari Phú Quốc thường có những thay đổi nhất định và không mang tính cố định tùy thuộc vào lượng du khách.  <br>  - Khi khách mua vé xe bus từ thị trấn Đông Dương đến khu vui chơi giải trí Vinpearl Land Phú Quốc và hoặc vé vinpearl Safari Phú Quốc thì thường có mức giá cực kỳ ưu đãi hoặc được giảm giá.  <br> 
            - Các điểm đến phổ biến của xe bus này thương tại Mường Thanh và Novotel Phú Quốc vào các cung giờ cố định trong ngày gồm 8h45p sáng, 9h15p sáng, 9h45p tối và 13h15p chiều.  <br> 
            - Lịch trình cụ thể một số chuyến xe:  <br> 
            + Tuyến 1: Điểm đón khách tại khách sạn Eden Phú Quốc tới Vinpearlland (khoảng cách khoảng 40 phút) chuyến sớm nhất khởi hành lúc 8h00 phút sáng và muộn nhất là 14h30 phút. Tần suất trung bình khoảng 30 phút đến 40 phút 1 chuyến.  <br> 
            + Tuyến 2: Điểm đón tại Vinpearl land xuất phát về lại thị trấn Dương đông: Hoạt động của tuyến xe bus này với khoảng 30 phút/ 1 chuyến với chuyến sớm nhất diễn ra vào 9h00 sáng và chuyến muộn nhất vào lúc 21h10 phút.  <br> 
            + Tuyến 3: Đón khách tại Mường Thanh Luxury Phú Quốc với chuyến đầu tiên diễn ra vào lúc 8h45 phút sáng, 3 chuyến còn lại diễn vào lúc 9h15 sáng, 9h45 sáng và 13h15 sáng.  <br> 
            + Tuyến 4:  Đón tại  Novotel Phú Quốc với chuyến đầu tiên diễn ra vào lúc 9h45 phút sáng. Hành trình xuất phát của tuyến 3 và tuyến 4 cụ thể như sau: <br>  Lịch trình: Khu nghĩ dưỡng Eden – Nhà nghỉ Quốc Thắng – khu Du lịch Đảo Việt – qua Du lịch Nhiệt Đới – Ven Spa – Đại lý Tân Thiên Thanh – Khách sạn Huy Hoàng – Đại lý Trường Vũ – Chen Sea resort và kết thúc hành trình tại Cầu Cửa Cạn. </p>
            <p> <strong> 3.2.2. Taxi </strong> </p> 
              <img src="./images/anhweb26.jpg" height = "300px" width="500px"> </p>
            <p> X Taxi sân bay vẫn luôn là sự lựa chọn nhanh chóng và thuận tiện của nhiều người. <br>
            - Hiện giá Taxi 4 chỗ hoặc 7 chỗ với mức giá khoảng 150.000đ đến 170.000đ với mức giá tính theo từng km khoảng 17.000 đồng /1km. <br>
            - Các hãng taxi uy tín di chuyển từ sân bay về trung tâm thị trấn Dương Đông như Taxi Mai Linh ( số điện thoại 0773. 997.799), taxi Hoàng Long ( số điện thoại 0773. 988. 988) hoặc taxi Sasco Phú Quốc ( số điện thoại là 0773. 995.599 hoặc 3 982 982). <br>
            - Bạn có thể gọi xe từ dịch vụ dichungtaxi.com để tiết kiệm chi phí, đúng giờ và không lo chặt chém nhé. <br>
             Xe đón tiễn tại sân bay Phú Quốc của các công ty du lịch: Các tuyến xe của công ty du lịch sẽ đưa đón bạn ngay tại sân bay hoặc bạn có thể liên hệ đặt từ trước. Mức giá di chuyển về trung tâm thị trấn Dương Đông khoảng từ 150.000 đồng đến 200.000 đồng/ lượt.  </p>
              <p> <h6> 3.2.3. Thuê xe đón tiễn sân bay </h6> </p>
              <p> Không khó để tìm dịch vụ này, bạn có thể đặt qua các đại lý du lịch hoặc ra cửa ga là thấy nhiều xe đứng vẫy. <br> 
              Nếu đi theo nhóm đông từ 4 người trở nên bạn có thể thuê xe đón tiễn này và di chuyển về trung tâm thị trấn Dương Đông nhưng đừng quên hỏi trước giá cả và tuyến đường. Giá xe đón tiễn sân bay đến thị trấn Dương Đông thường dao động ở mức là 200.000đ/lượt. </p> 
              <p> <h6>  3.2.4. Xe ôm sân bay </h6> </p> 
              <p> Với khoảng cách khá gần về trung tâm, nếu đi một mình, ít đồ đạc thì lựa chọn xe ôm sẽ giúp bạn tiết kiệm. Mức giá xe ôm ở Phú Quốc được tính là 10.000đ/km. Tuy nhiên xe máy không được đỗ ở trong sân bay nên du khách cần phải đi bộ ra đường mới có thể bắt được xe. <br> 
              Giá xe ôm một số tuyến để bạn tham khảo: <br> 
              Từ sân bay đến Dương Đông: 60.000 – 70.000đ/ 1 chiều <br>
              Từ sân bay đến Long Beach: 50.000đ/ 1 chiều <br> 
              Từ sân bay đến Bãi Sao: 100.000đ/ 1 chiều <br> 
              Từ sân bay đến Bãi biển Ông Lang: 100.000 - 120.000đ/ 1 chiều. </p>
              <p> <h6> 3.2.5. Xe ôm sân bay </h6></p>
              <p> Thuê xe máy bạn sẽ chủ động trong mọi tình huống và chuyến đi. Giá thuê xe máy ở Phú Quốc khoảng chừng 120.000 – 150.000đ tùy xe ga hay xe số. <br> 
              Một số người thường xuyên cho thuê xe máy uy tín ở Phú Quốc như: Minh Mẫn: 0913 027 823; Văn Vũ: 0987 539 960; Anh Tính: 0909 895 969 hoặc 0987 441 799; Anh Phú: 0909 296 989 hoặc 0977 893 979…  </p>
              <p> <h6> 4. Bay đến Phú Quốc bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Phú Quốc </h6>
                <img src="./images/anhweb51.jpg" height = "300px" width="500px"> </p>
              <p> - Theo chia sẻ và tìm hiểu thì ABAY được biết thời điểm thích hợp nhất để du lịch đảo Phú Quốc là từ tháng 9 đến tháng 3 âm lịch hàng năm. Bởi lúc này thời tiết ít mưa, sóng biển êm, thuận lợi cho việc tham quan khám phá biển đảo. Theo kinh nghiệm du lịch Phú Quốc cần thiết thì trong khoảng thời gian này lượng khách du lịch tới đảo Phú Quốc giảm hơn nhiều so với mùa hè. <br> Tốt nhất bạn nên đi du lịch Phú Quốc vào khoảng đầu tháng 4 hoặc cuối tháng 10. Đây được coi là hai thời điểm đầu và cuối mùa mưa, nên lượng mưa giảm, cảnh cũng rất đẹp, giá dịch vụ rẻ, ít khách du lịch. <br> - Mùa du lịch ở Phú Quốc từ cuối tháng 10 đến tháng tháng 3 năm sau. Chắc chắn khoảng thời gian này lượng khách thường rất đông và khách sạn, dịch vụ ăn uống tăng cao, giá cả đắt đỏ. Do đó, bạn nên cân nhắc và lựa chọn nếu muốn đi thời điểm này phải đặt vé máy bay và đặt phòng khách sạn trước. <br> 
              - Những người có kinh nghiệm cho rằng khi du lịch Phú Quốc an toàn đó là không nên du lịch vào khoảng thời gian từ cuối tháng tư đến đầu tháng 10. Thời điểm này Phú Quốc thường mưa nhiều, đôi khi có bão, nên lượng du khách tới đây giảm hẳn, do vậy giá cả dịch vụ cũng rất dễ chịu.  </p>
              <p> <h6> 4.2. Tới Hà Nội, ở đâu?  </h6></p>
              <p> Sau vé máy bay thì thuê phòng khách sạn luôn là điều mà nhiều người quan tâm.  Ở Phú Quốc khách sạn và resort chia ra làm 6 khu: <br> 
              <strong> Khách sạn ở thị trấn Dương Đông (sát biển hoặc gần chợ đêm) </strong> <br>  
              Phù hợp di chuyển tới các điểm ăn uống, vui chơi, tham quan với tuyến đường chính chia làm 2 khu: khu resort và khu khách sạn. Lý tưởng nhất để thuê khách sạn, resort là dọc đường Trần Hưng Đạo. Nhưng giá phòng ở đây rất cao đấy nhé. <br> 
              <strong> Khu bãi ông Lang, Cửa Cạn (khu vực này resort giá rất rẻ, xa trung tâm) </strong> <br> Đây là khu này yên tĩnh, chủ yếu là resort – giá cực mềm (có resort 3 sao chưa đến 900.000đ/đêm). Ở đây ngắm hoàng hôn cũng rất đẹp. <br>  Từ bãi Ông Lang đi trung tâm thị trấn Dương Đông khoảng 5km, từ Cửa Cạn là 13km, được coi là khu vực xa trung tâm. <br> <strong> Khu Vinpearl (xa trung tâm nhưng có đầy đủ dịch vụ nghỉ dưỡng, trải nghiệm biển) </strong> <br> Vinpearl (bao gồm khu resort – khu vui chơi Vinpearl Land và Vinpearl Safari). Đây là khu vực thích hợp với gia đình đi nghỉ dưỡng vì rất yên tĩnh và ở đây trọn gói gần như tất cả dịch vụ. Có cả villa lẫn resort, spa cho bạn nghỉ ngơi, thư giãn. <br> 
              Giá chừng 3.000.000đ – 4.000.000đ/ đêm. <br>  
              <strong> Khu Mường Thanh, Novotel (thích hợp nghỉ dưỡng) </strong> <br>  
              Cũng là khu vực chỉ dành để nghỉ dưỡng vì xung quanh là đất trống không có dịch vụ gì chơi vào buổi tối. Muốn đi lên trung tâm bạn phải di chuyển 15km. <br> Hòn Dăm – một hòn đảo rất thú vị nằm ở cảng An Thới dành cho các cặp đôi <br> Đảo Hòn Dăm còn được gọi là đảo Tình Yêu, vì ở đây có 5 căn bungalows lợp lá thơ mộng, cửa phòng sát biển, yên tĩnh, thích hợp với các cặp đôi thích không gian lãng mạn, thích trải nghiệm mới lạ.Còn gì tuyệt hơn đêm nằm nghe tiếng sóng vỗ ào ào ở cửa phòng, cảm giác êm ái, dịu dàng khó tả. <br> <strong>  Khu nghỉ dưỡng 6 sao JW Marriot </strong> <br> Là khu nghỉ dưỡng 6 sao đẳng cấp có lẽ chỉ dành cho đại gia, quý tộc.  </p>
              <p> <h6> 4.3. Tới Hà Nội, đi đâu? <h6> </h6> 
                <img src="./images/anhweb52.jpg" height = "300px" width="500px"> 
              <p> Đảo Ngọc Phú Quốc vô cùng đẹp với nhiều điểm tham quan hấp dẫn. <br> - Khu vực Bắc Đảo: <br> + Vườn Tiêu: Khu Tượng, cách thị trấn Dương Đông khoảng 15km về phía Bắc. <br> Vườn tiêu phú quốc <br> + Đền thờ Nguyễn Trung Trực: Cách Dương Đông 25km theo hướng đi mũi Gành Dầu. <br> + Mũi Gành Dâu: Xã Gành Dầu, Phú Quốc. Bạn có thể thuê xe máy hoặc đi ô-tô, taxi tới đây… Gành Dầu có bãi tắm hình cánh cung trải dài 500m. Đây cũng là nơi thưởng thức hải sản tuyệt vời cho du khách. <br> + Mũi Dinh Cậu: Nằm ngay trong thị trấn Dương Đông, TP. Phú Quốc, đi bộ từ chợ khoảng 5p. Mũi Dinh Cậu là một thắng cảnh nổi tiếng ở Phú Quốc. <br> + Hòn Thơm: Bạn phải đi tàu khoảng 30 phút từ bến tàu Phú Quốc để ra được đến Hòn Thơm. Tại đây có thể lặn ngắm san hô, xem các khu nuôi trồng thủy sản của ngư dân, khu nuôi ngọc trai… <br>+ Bãi Dài: Một trong 10 bãi biển được BBC bình chọn là bãi biển hoang sơ đẹp nhất Việt Nam. Bãi nằm ở Tây Bắc đảo.<br>Ngoài ra còn có suối Đá Bàn, suối Đá Ngọn, bảo tàng Cội Nguồn… <br> - Khu vực Đông và Nam Đảo <br> + Nhà tù Phú Quốc: Một địa điểm du lịch không thể không đến ở Phú Quốc. Nơi ghi dấu một phần lịch sử quan trọng của dân tộc Việt Nam. Nhà tù Phú Quốc thuộc xóm Cây Dừa, xã An Thới, Phú Quốc. <br> + Bãi Sao: Một trong những bãi tắm đẹp nhất ở khu Nam đảo, cách Dương Đông 30km. <br> + Bãi Khem: Bãi Khem còn hoang sơ, cát trắng và mịn như bột với hải sản cực kỳ ngon. <br> + Bãi Trường: từ khoảng tháng 10 – tháng 4 hàng năm, bãi Trường là sự lựa chọn hoàn hảo vì đây là mùa bãi Trường đẹp nhất với mặt biển tĩnh lặng, sóng gợn lăn tăn. <br> + Làng chài cổ Hàm Ninh: Nếu bạn muốn biết dân vùng biển ngày xưa sinh sống ra sao và đánh bắt cá, khai thác ngọc trai như thế nào thì hãy đến đây nhé. Làng chài này cách Dương Đông 20km về phía Nam. <br> + Nhà Thùng sản xuất nước mắm: Nước mắm Phú Quốc nổi tiếng khắp cả nước rồi, nhưng để biết được thứ nước mắm thơm lừng, đâm vị và ngon đặc biệt đó được sản xuất như thế nào thì phải ai cũng có cơ hội. Do đó, nếu đã đặt chân đến Phú Quốc thì đừng bỏ qua địa điểm thăm quan thú vụ này. Nước mắm Phụng Hưng – Trục đường Dương Đông – An Thới , đối diện Nhà tù Phú Quốc. <br> + Quần đảo An Thới: sự quy tụ của những hòn đảo đẹp nhất như Hòn Dân, Hòn Dừa, Hòn Rọi, Hòn Thơm, Vang, Móng Tay, Gầm Ghì, Mây Rút, Chân Quý… </p> 
              <p> <h6> 4.4. Tới Phú Quốc, ăn gì? </h6> </p> 
                <img src="./images/anhweb53.jpg" height = "300px" width="500px"> </p>
              <p> Sau đây là những món ăn ngon nhất định bạn phải thử: <br> - Gỏi các trích: Cá trích tươi cuốn bánh tráng với đủ loại rau, ít dừa nạo, chấm với nước mắm hảo hạng là món ăn khoái khẩu ở Phú Quốc gỏi cá trích <br> - Ghẹ Hàm Ninh: đặc sản nổi tiếng nhất Phú Quốc giá chừng 200.000đ – 500.000đ/ con. <br> - Ốc hương nướng muối ớt, sò quạt nướng mỡ hành, mực trứng nướng<br> - Còi biên mai nướng <br>- Ốc nhảy, mực trứng nướng, tô sú biển nướng…  <br> Những quán ăn ngon nổi tiếng ở Phú Quốc bạn nên ghé qua ăn thử: <br> - Bún quậy Kiến Xây: Từ chợ Dương Đông, bạn chạy thẳng đường Trần Phú, qua ngã tư Trần Phú – Cách Mạng Tháng 8 khoảng 500m, gặp nhà thuốc Gia An, quẹo vào hẻm bên hông nhà thuốc chừng 200m là tới nơi. <br> - Quán Ra Khơi – 131 đường 30/4, TT Dương Đông: có rất nhiều món hải sản tươi ngon. <br> - Nhà hàng Sông Xanh – Đường 30/4, Khu Phố 1, thị trấn Dương Đông. Đặc sản: gỏi cá trích Sông Xanh, cơm chiên ghẹ và lẩu nấm. Số điện thoại đặt bàn: 0773.70 2929 – 0913.848.133 <br> - Quán Quốc Anh – 74 Bạch Đằng, Khu 1, TT. Dương Đông. Quán phục vụ nhiều món, món ăn khá ngon, giá trung bình khá mềm mại. <br> -  Quán hải sản Nhớ – Nằm trong chợ đêm Dinh Cậu – Võ Thị Sáu. Quán chuyên bán về các món hải sản như giá cao. <br>  - Quán Việt – Nằm tại địa chỉ 54 Bạch Đằng, thị trấn Dương Đông – Cách Chợ Đêm Dương Đông (chợ mới) 100m. Điện thoại liên hệ đặt bàn: 0932620779). Quán này có nhiều món ăn với giá rất rẻ và ngon, sạch sẽ chuyên phục vụ ăn sáng, trưa, tối (7am – 10pm). Các món ngon: bánh Canh Ghẹ; bánh Canh bột lọc chả cá Thul; hủ tiếu hải sản tôm mực, miến gà rẫy Phú Quốc… <br> - Quán ăn Lê Giang – 289 Trần Hưng Đạo, Dương Đông nổi tiếng với nhiều món ăn sáng ngon. <br> - Biên Hải Quán – Hải Sản Bờ Biển – Tổ 1, Ấp Gành Dầu, Xã Gành Dầu, Phú Quốc. Đây là địa điểm ăn uống rẻ nhất ở điểm thăm quan Mũi Gánh Dầu. Giá cả khá rẻ lại đủ món hải sản ngon.</p>
              <p> <h6> 5. Săn đặt vé máy bay đi Phú Quốc giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Hà Nội </h6> </p> 
              <p> - Dựa vào thời điểm đẹp khám phá đi Phú Quốc bạn sẽ suy ra thời điểm đặt được vé giá rẻ đi Phú Quốc. Mùa du lịch Phú Quốc bắt đầu từ tháng 10 tới tháng 3 nên giá vé máy bay sẽ cao do nhu cầu đông. Vậy nếu muốn du lịch thời điểm này ABAY.vn khuyên bạn nên chủ động đặt vé sớm trước chừng 2 cho tới 3 tháng trước khi bay. <br>- Mùa thấp điểm Phú Quốc giá vé máy bay chắc chắn sẽ rẻ nên bạn có thể mua vé ở thời điểm này.  <br> - Trước khi đặt vé đừng quên tham khảo các khuyến mãi từ các hãng hàng không nội địa Vietnam Airlines, VietJet, Jetstar hay Bamboo Airways như “Bay đẳng cấp, giá cực thấp” của Vietnam Airlines, “Bay là thích ngay”, “12h rồi VietJet thôi” của VietJet hay “Cuối tuần siêu giảm giá” của Jetstar…  <br> - Hãy chú ý tới khung giờ bay để săn vé giá rẻ. Chuyến bay lúc đêm muộn và sáng sớm giá vé sẽ thấp hơn các khung giờ bay khác trong ngày. Nếu bạn không có việc bận, không đi cùng trẻ em hoặc người già thì có thể xem xét các chuyến bay trong khung giờ này để tiết kiệm. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Phú Quốc tại ABAY.vn </h6> </p>
              <p> Nếu đem so sánh, vé máy bay đi Phú Quốc tại ABAY.vn đang có mức giá tốt so với các đại lý khác. Tại ABAY.vn bạn có thể tự mình đặt vé và chinh phục những tấm vé giá rẻ. <br> Nếu như không thông thạo các thao tác máy tính, nếu không có thiết bị kết nối mạng bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé đi bất cứ đâu. <br> Không chỉ hỗ trợ đặt vé, ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như hỗ trợ check-in online, tư vấn giấy tờ hay thủ tục bay, quy định về hành lý, xử lý các vấn đề phát sinh liên quan đến vé… một cách chuyên nghiệp và hiệu quả.  </p>
             
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
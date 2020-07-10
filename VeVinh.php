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
                <a class="nav-link" href="LichVeMayB">Lịch Vé Máy Bay<span class="sr-only">(current)</span></a>
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
                  <a class="dropdown-item active" href="VeVinh.php">Vé Máy Bay Đi Vinh</a>
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
                <center> <h4> Đặt Vé Máy Bay Đi Vinh </h4> </center>
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
                             <option>Phú Quốc</option>
                            
                      </select>
                       </div>
                       <div class="form-group col-sm-5">
                          <h6> <center> 
                         <label for="exampleInputEmail1"> Nơi Đến </label> </center> </h6>
                        <select name='txtNoiDen' id="nhapnoiden" class="form-control"> 
                             <option selected> Vinh </option>
                            
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
                    <img src="./images/anhweb135.jpg" class="d-block w-100" alt="first" width="500" height="360" />
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="./images/anhweb136.jpg" class="d-block w-100" alt="second" width="500" height="360" />
                  </div>
                  <div class="carousel-item"> 
                    <img src="./images/anhweb137.jpg" class="d-block w-100" alt="thỉrd" width="500" height="360" />
                  </div>
                  <div class="carousel-item">
                    <img src="./images/anhweb138.jpg" class="d-block w-100" alt="fourth" width="500" height="360" />
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
          <div class="col-sm-6 col-md-7"><h4>Vé máy bay đi Vinh giá rẻ Vietnam Airlines, VietJet Air, Jetstar</h4>
            <p align="justify"><h6> 1. Hàng ngày có những chuyến bay nào đến Vinh ? </h6> </p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi Đến Vinh</th>
                      <th>Thời Gian Bay</th>
                      <th>Hãng Hàng Không</th>
                  </tr>
                  <tr>
                      <td> Thành phố Hồ Chí Minh </td> 
                      <td> 1h45p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar </td>
                  </tr>
                  <tr> 
                      <td> Hà Nội </td> 
                      <td> 55p </td> 
                      <td> Vietnam Airlines, VietJet Air, Jetstar, Bamboo Airways </td>
                  </tr>
                  <tr>
                      <td> Buôn Mê Thuột </td> 
                      <td> 1h20p </td> 
                      <td> Vietnam Airlines, Bamboo Airways </td>
                  </tr>
                  <tr> 
                      <td> Đà Lạt </td> 
                      <td> 1h35p </td> 
                      <td>  VietJet Air, Bamboo Airways </td>
                  </tr>
                  <tr> 
                      <td> Pleiku </td> 
                      <td> 1h25p </td> 
                      <td> VietJet Air, Bamboo Airways </td>
                  </tr>
              </table>
            <p><h6> 2. Giá vé máy bay đi Hà Nội là bao nhiêu? </h6> </p>
            <p> Vé Được Cập Nhật Mỗi Ngày. </p>

            <p> <h6> 3. Di chuyển từ sân bay quốc tế Vinh tới trung tâm thành phố Phú Quốc và ngược lại như thế nào ? </h6> </p>
            <p> <h6> 3.1.  Những điều cần biết về sân bay quốc tế Vinh </h6> </p>  
              <img src="./images/anhweb54.jpg" height = "300px" width="500px"> 
            <p> Sân bay quốc tế Vinh thuộc địa phận Xã Nghi Liên - Thành phố Vinh - Tỉnh Nghệ An - Việt Nam. Sân bay cách bãi biển Cửa Lò 14km; cách bãi biển Cửa Lò 14km;  trung tâm thành phố Vinh khoảng 6–7 km. <br> Tính đến thời điểm hiện tại cả 4 hãng hàng không nội địa là Vietnam Airlines, Vietjet Air, Bamboo Airways  và Jetstar Pacific Airlines đều hoạt động ở sân bay này. Có thể kể đến các hãng hàng không quốc tế như Malindo Airways Sd;  Singapore Airlines; Malaysia Airlines; Silkair… Sân bay hiện có các chuyến bay đến Viêng Chăn, Singapore, Đài Loan…  </h6> </p>
            <p> <strong > 3.2.1. Xe buýt sân bay </strong> <br> Xe buýt vẫn luôn là lựa chọn tiết kiệm của nhiều hành khách khi xuống máy bay muốn di chuyển vào thành phố. Thế nhưng hiện tại sân bay không có xe buýt về thành phố mà chỉ có một số tuyến đi qua sân bay thôi nhé. <br> Đây là các tuyến xe bus từ vinh đi các huyện hoặc tỉnh lân cận và ngược lại, vì vậy sẽ phù hợp hơn với những bạn có nhu cầu về các địa điểm xa và tỉnh Hà Tĩnh hoặc Thanh Hóa. Và Xe buýt sân bay Vinh sẽ rất thích hợp cho bạn nào muốn đi bãi biển Cửa Lò hay về thăm quê Bác ở Nam Đàn. <br> Tham khảo các tuyến xe buýt đi qua sân bay Vinh: <br><strong> Tuyến 01: Bến Thủy – Cửa Lò. </strong> <br> Lộ-trình khởi hành (khứ-hồi): Bến-thủy – Đại học Vinh – Khách sạn Phương đông – Chợ Vinh – Bến xe Vinh – Nguyễn Sĩ Sách – Đại học Y Vinh – Cao đẳng Sư phạm – Cửa hội – Cửa lò. <br> <strong> Tuyến 02: Bến Thủy – Ga Vinh – Cửa Lò. </strong> <br> Lộ trình khởi hành: Bến Thủy – Đại Học Vinh – Nguyễn văn Trỗi – Phong định Cảng – Lê Hồng Phong – Nguyễn Thái Học – Bến xe Vinh – Ga Vinh – Nguyễn Trãi – Đại Học Vinh Cơ-sở 2 – Cửa Lò. <br><strong> Tuyến 03: Bến Thủy – Nam Đàn – Đô Lương </strong> <br> Lộ trình khởi hành: Nội thành Vinh – Quốc-lộ 46 – Thị trấn Nam đàn – Thị trấn Dùng – Thị trấn Đô Lương. <br><strong> Tuyến 04: Vinh – Hoàng Mai </strong> <br> Lộ trình khởi hành: Nội thành Vinh – Quán Bánh – Quán Hành – Diễn Châu – Cầu Giát – Hoàng Mai. <br> Lưu ý: Tuyến 04 Vinh – Hoàng Mai, nếu bạn muốn xuống tại các điểm từ sân bay Vinh về Quán Bánh, Quán Hành, Diễn Châu, Cầu Bùng thì nên đi xe đưa đón Vinh Yên Thành về tận nhà. <br><strong>  Tuyến 05: Vinh – Yên Thành </strong> <br> Lộ trình khởi hành: Nội thành Vinh – Quán Bánh – Quán Hành – Cầu Bùng – Tỉnh lộ 538 – Thị trấn Yên thành. <br>  Lưu ý: Tuyến 05 Vinh – Yên Thành, nếu bạn muốn xuống tại các điểm từ sân bay Vinh về Quán Bánh, Quán Hành, Diễn Châu, Cầu Bùng, tỉnh lộ 538 (quốc lộ 7B) thì nên đi xe đưa đón Vinh Yên Thành về tận nhà. <br><strong> Tuyến 08: Vinh – Đô Lương </strong> <br> Lộ trình khởi hành theo hướng: Đại lộ Lenin – Nguyễn Sỹ Sách – Nguyễn Phong Sắc – Phong Định Cảng – Nguyễn Văn Trỗi – Trần Phú – Lê Duẩn – Quang Trung – Nguyễn Trãi – Quốc Lộ 1A – Diễn Châu – Đô Lương. <br><strong> Tuyến 26: Vinh – Thái Hòa. </strong> <br> Lộ trình: Tỉnh lộ 535 – Lê Viết Thuật – Nguyễn Duy Trinh – Nguyễn Viết Xuân – Phong Định-Cảng – Nguyễn Du – Lê Duẩn – Trần Phú – Quang Trung – Lê Lợi – Mai Hắc Đế – Nguyễn Trãi – Quốc Lộ 1 – Ngã ba Yên Lý – Quốc lộ 48 – Thị xã Thái Hòa. <br><strong> Tuyến số 23: Vinh – Thanh Chương </strong> <br> Lộ trình khởi hành: Bệnh viện Ba Lan mới – Đại lộ Lê Nin – Nguyễn Sỹ Sách – Bệnh viện Ba Lan cũ – Nguyễn Phong Sắc – Nguyễn Duy Trinh – Nguyễn Viết Xuân – Phong Định Cảng – Đại học Vinh – Chợ Vinh – Phan Đình Phùng – Thị trấn Hưng Nguyên – Hưng Tân – Hưng Thông – Cầu Yên Xuân mới – Đường Ven Sông Lam – Cầu Nam Đàn – Nam Tân – Nam Lộc – Thanh Lâm – Thanh Giang – Thanh Long – Cầu Rộ – QL 46 – Thị trấn Thanh Chương và ngược lại. <br> <strong> Tuyến 28: Vinh – Yên Thành. </strong> <br> Lộ trình khởi hành: Trạm xăng dầu số 37, Km3+00 ĐT 535 (TP Vinh) – ĐT 535 – Lê Viết Thuật – Nguyễn Phong Sắc – Tôn Thất Tùng – Nguyễn Gia Thiều – Phong Định Cảng – Nguyễn Văn Trỗi – Lê Duẩn – Trần Phú – Quang Trung – Lê Lợi – Mai Hắc Đế – Nguyễn Trãi – QL 1 – ĐT 534 – TT Yên Thành và ngược lại. </p>
              <p> <h6> 3.2.5. Xe ôm sân bay </h6></p>
              <p> Xe ôm là phương tiện phù hợp với những hành khách đi quãng ngắn tới Bệnh viện Ba Lan, bệnh viện Sản Nhi, Ga Vinh, trường Đại học Vinh, các trung tâm Anh ngữ tại Vinh… <br> 
              Thường thì giá xe ôm được tính khoảng 7000đ/km, nếu đi từ sân bay vào trung tâm thành phố Vinh dao động ở mức 50.000đ thôi nhé. Nhưng NHẤT THIẾT phải trao đổi giá cả thật kỹ trước khi đi. <br> Ra khỏi cửa nhà ga chỉ cần nhìn sang bên kia đường là sẽ thấy xe ôm xếp hàng dài vẫy bạn.  </p>
              <p> <h6> 4. Bay đến Vinh bạn cần lưu ý những điều gì </h6> </p>
              <p> <h6> 4.1. Thời điểm tốt nhất để đến Vinh </h6>
                <img src="./images/anhweb55.jpg" height = "300px" width="500px"> 
              <p> Nằm ở dải đất miền Trung nên từ tháng 4 đến tháng 8 khí hậu khô nóng, từ tháng 11 đến tháng 3 năm sau khí hậu sẽ lạnh. Bởi thế nếu muốn tắm biển Cửa Lò bạn nên đặt vé máy bay đi trong tháng 6 cho tới tháng 8. Còn nếu muốn thăm quan, check in mùa hoa hướng dương thì tháng 3 – 4 & tháng 11 – 12 là thời điểm đẹp nhất trong năm khi hoa đã nở. </p>
              <p> <h6> 4.2. Tới Vinh, ở đâu?  </h6></p>
              <img src="./images/anhweb56.jpg" height = "300px" width="500px"> 
              <p> Vinh không quá lớn cũng không quá nhỏ. Du lịch phát triển nên nơi đây cũng phát triển nhiều nhà nghỉ, khách sạn hay resort cho bạn tham khảo. Một vài gợi ý khách sạn được đánh giá tốt để bạn tham khảo như Mường Thanh Luxury Sông Lam, Hong Kong 2 Hotel, Sài Gòn Kim Liên Hotel, Mường Thanh Grand Cửa Đông, khách sạn Giao Tế 2 & Avatar 2 sao… Còn lưu trú tại Cửu Lò thì bạn có thể chọn khách sạn, nhà nghỉ ở dọc đường Bình Minh, 1 số khách sạn như Mường Thanh Grand Cửa Lò, Summer Cửa Lò Hotel, Kim Ngân Hotel 2, Pacific Hotel… <br> Cửa Lò là một trong những điểm du lịch nổi tiếng nhất ở Vinh nên nhiều người thuê phòng hkhacsh sạn ở đây. Bạn có thể tham khảo một số khách sạn ven biển nổi tiếng: <br><strong> Khách sạn Mường Thanh Cửa Lò </strong> <br> Địa chỉ: Số 232 Đường Bình Minh, Phường Nghi Thu, Bãi Biển Cửa Lò <br> Giá phòng: 43 USD – 850 USD/đêm <br><strong> Bãi Lữ resort Cửa Lò </strong> <br> Địa chỉ: Nghi Yến, Nghi Lộc, Bãi Lữ, Biển Cửa Lò <br> Giá phòng: 36 USD – 100 USD/đêm <br><strong> Thái An Hotel Cửa Lò </strong> <br> Địa chỉ: Đường Nguyễn Duy Chinh, Đường Bình Minh, Bãi Biển Cửa Lò <br> Giá phòng: Từ 31 USD/đêm <br> Lưu ý khi đặt phòng khách sạn Cửa Lò, nếu vào mùa du lịch như hè sẽ rất đông khách, đặc biệt dịp 30/4. ABAY khuyến cáo hành khách có dự định tới đây thì nên chủ động đặt vé máy bay và đặt phòng khách sạn sớm, tránh tình trạng hết phòng hoặc bị chặt chém.  </p>
              <p> <h6> 4.3. Tới Vinh, đi đâu? <h6> </h6> 
                <img src="./images/anhweb57.jpg" height = "300px" width="500px"> 
              <p> - Khu vực quanh thành phố Vinh: <br> + Cửa Lò cách Vinh chừng 20p là bãi biển cực kì nổi tiếng dành cho việc đi du lịch nghỉ dưỡng, vui chơi. Tại Cửa Lò bạn có thể tắm biển, ngắm bình minh, đi mô-tô nước, nhảy dù... <br> + Các điểm du lịch: Quảng trường và Tượng đài Hồ Chí Minh; Phượng Hoàng Trung Đô; Thành cổ Nghệ An; Văn Miếu Vinh <br> - Nếu đến đây vào mùa thu thì đừng bỏ qua những điểm du lịch này ở Nghệ An nhé: <br> + Cổng trời Mường Lống là địa điểm "phượt" nổi tiếng với nhiều bạn trẻ nhờ vẻ đẹp hùng vĩ của núi non trập trùng trong biển mây kỳ ảo. <br> + Rừng cao su ở Nghĩa Đàn là địa điểm được đánh giá đẹp suốt 4 mùa. <br> + Là một trong những địa điểm du lịch nổi tiếng nhất miền Tây Nghệ An, rừng săng lẻ Tương Dương là lựa chọn tuyệt vời cho một chuyến du ngoạn mùa thu đấy nhé. <br> + Mùa thu là thời điểm hoàn hảo nhất để đến thăm những vườn hồng Nam Anh nhé. <br> + Cuối tháng 10 là lúc bãi lau bên bờ sông Lam nở trắng xóa, thu hút số lượng lớn người đổ về tham quan, chụp ảnh check – in <br> - Làng Sen quê bác  là điểm du lịch văn hóa lịch sử nổi tiếng bậc nhất tại Nghệ An. Bạn nhất định phải ghé nơi sinh ra và lớn lên của danh nhân văn hóa thế giới lẫy lừng, là vị lãnh tụ vĩ đại của dân tộc Việt Nam. <br>- “Check in” tại bãi đá đảo Lan Châu, thưởng thức các món ẩm thực, phóng tầm mắt bốn bề là biển cả mênh mông, leo lên Lầu Ngênh Phong của Vua Bảo Đại – được xây dựng ngay trên đỉnh Lan Châu để ngắm biển Cửa Lò, tận hưởng gió biển là trải nghiệm tuyệt vời đấy nhé. <br> - Bạn cũng sẽ hài lòng khi lựa chọn miền Tây Nghệ An để trải nghiệm loại hình du lịch sinh thái  Vườn quốc gia Pù Mát. <br> - Ngoài ra còn rất nhiều điểm du lịch ẩn chứa nét hoang sơ, tự nhiên, thuần khiết. Từ thác Khe Kèm, sông Giăng, khu rừng săng lẻ, thác bảy tầng… đến bản Nưa, bản Khe Rạn (huyện Con Cuông), bản Hoa Tiến (huyện Quỳ Châu)…  </p> 
              <p> <h6> 4.4. Tới Vinh, ăn gì? </h6> </p> 
                <img src="./images/anhweb58.jpg" height = "300px" width="500px"> 
              <p> - Cháo lươn quán Lợi đối diện kara 108 Phan đình Phùng. <br> - Bò Né - Bún Chả Nướng – Quán Bamy ngon Số nhà 12 - Đường Võ Thị Sáu - Khối 11 - Phường Trường Thi (Đường Nhà máy bia đi vào). <br> - Cháo canh <br> Địa chỉ tham khảo: + Cháo canh Đinh Công Tráng. <br> + Cháo canh cổng thành (Cửa Nam). <br> -  Mía hấp gừng <br> Địa chỉ tham khảo: vỉa hè đường Đinh Công Tráng (chỉ bán vào buổi tối). <br> - Bánh bèo: đường Nguyễn Văn Cừ <br> - Súp lươn:  thành cổ Vinh, đường Nguyễn Văn Cừ... <br> Còn nếu muốn mua đặc sản về làm quà thì một hũ tương Nam Đàn – một loại nước chấm để kho cá, chấm rau luộc có vị mặn ngọt và bùi bùin rất đáng để thử đấy nhé. Bánh đa Đô Lương được làm từ bột gạo, tiêu tỏi, và các gia vị khác cũng có thể mang về làm quà khi bạn tới Vinh. Đừng quên Vinh còn có cam Xã Đoàn, giò bê... cùng nhiều đặc sản khác.</p>
              <p> <h6> 5. Săn đặt vé máy bay đi Vinh giá rẻ nhất như thế nào? </h6> </p> 
              <p> <h6>  5.1. Thời điểm thích hợp để mua được vé giá rẻ đi Vinh </h6> </p> 
                 <img src="./images/anhweb59.jpg" height = "300px" width="500px"> 
              <p> - Mùa hè là thời điểm lý tưởng để bạn mua vé máy bay đi Vinh. Nhưng khi đó lượng khách du lịch đông, giá vé máy bay sẽ cao hơn so với các thời điểm khác. Nếu muốn bay thời điểm này và muốn có vé giá rẻ bạn cần đặt trước, ít nhất trước 1 tới 2 tháng so với thời điểm bay. Chủ động đặt phòng khách sạn ngay sau khi có vé máy bay nữa nhé. <br> - Đăng ký thông tin cá nhân để nhận tin khuyến mãi từ các hãng hàng không Vietnam Airlines, VietJet Air, Jetstar Pacific và Bamboo Airways. Đừng quên tham khảo các chương trình khuyến mãi của các hãng như “Mùa thu vàng” “12h rồi VietJet Air thôi” “Bay đẳng cấp giá cực thấp”…  <br> - Các ngày cuối tuần hay lễ Tết giá vé máy bay đi Vinh cũng đắt hơn so với giá vé ngày thường. Bởi thế nếu không bận công viện hoặc có thể xin nghỉ ngày trong tuần thì bạn nên tránh bay ngày cuối tuần nhé. <br> - Các giờ bay như đêm muộn hay sáng sớm giá vé máy bay đi Vinh chắc chắn cũng rẻ hơn so với giá vé các chuyến bay trong ngày. </p>
              <p> <h6> 5.2. Đặt vé máy bay đi Vinh tại ABAY.vn </h6> </p>
              <p> Nếu đem so sánh, vé máy bay đi Vinh tại ABAY.vn đang có mức giá khá tốt so với các đại lý khác. Tại ABAY.vn bạn có thể sử dụng tính năng tìm kiếm vé rẻ tại ABAY, chức năng so sánh giá giữa các hãng hàng không và chức năng thanh toán onile rất nhanh chóng và tiện lợi. <br> Nếu không thông thạo máy tính hoặc không có thiết bị kết nối mạng bạn hoàn toàn có thể đến trực tiếp văn phòng ABAY hoặc nhanh nhất là nhấc máy và liên hệ hotline 1900 6091 để được các nhân viên tư vấn, hỗ trợ, giúp bạn tìm kiếm giá vé và đặt vé chính xác nhất. <br> Hãy nhớ ABAY luôn sẵn sàng hỗ trợ bạn 24/7 trong các vấn đề liên quan như hỗ trợ check-in online, tư vấn giấy tờ hay thủ tục bay, các quy định về hành lý, xử lý các vấn đề phát sinh liên quan đến vé…   </p>
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
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
                  <a class="dropdown-item" href="VeDaLat.php">Vé Máy Bay Đi Đà Lạt</a>
                  <a class="dropdown-item" href="VeHaiPhong.php">Vé Máy Bay Đi Hải Phòng</a> 
                  <a class="dropdown-item" href="VeBuonMeThuot.php">Vé Máy Bay Đi Buôn Mê Thuột</a>
                </div>
              </li>     
              <li class="nav-item">
                <a class="nav-link active" href="GioiThieu.php">Giới Thiệu</a>
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
      <div class="container fixDisplay">
        <div class="row ">
          <div class="col-sm-6 col-md-7"><h4> Giới Thiệu Về Page Đặt Vé Máy Bay </h4>
            <p>  TINBAY là công ty hoạt động trong lĩnh vực thương mại điện tử – chuyên cung cấp dịch vụ vé máy bay trực tuyến của các hãng hàng không nội địa và quốc tế. TINBAY có hệ thống Đặt Vé Máy Bay Trực Tuyến tại website www.ABAY.vn với các chức năng: Tìm kiếm hành trình bay, So sánh giá vé của các hãng hàng không, Đặt vé trên website và Thanh toán trực tuyến. <br>
            Là doanh nghiệp hoạt động theo mô hình Đại lý Du lịch Trực tuyến (Online Travel Agency – OTA) đầu tiên tại Việt Nam, nhóm phát triển đằng sau ABAY.vn đã có nhiều năm kinh nghiệm trong việc thiết kế và thực hiện các ứng dụng web cao cấp cho nhiều ngành khác nhau (viễn thông, ngân hàng, bán lẻ) và biết rất rõ làm thế nào để thực hiện các giao dịch dựa trên các ứng dụng được nhanh chóng, đáng tin cậy, và dễ sử dụng. <br> <img src="./images/anhweb72.jpg" height = "300px" width="500px"> <br> 
            Trong nhiều năm, đội ngũ nghiên cứu thị trường của TINBAY đã đặt phòng khách sạn, mua vé tàu, du thuyền, tour du lịch, thuê xe ô tô trực tuyến ngay từ máy tính cá nhân của mình. Qua những năm đó chúng tôi phải lướt qua hàng chục, hàng trăm website nặng nề, khó dùng với các sản phẩm dịch vụ đắt đỏ và sự hỗ trợ khách hàng chậm chạp, thiếu chuyên nghiệp từ phía các công ty chủ quản website. Điều này đã tạo nên động lực để chúng tôi tạo nên sự thay đổi, khác biệt và đó là lý do ABAY ra đời. <br>
            Với TINBAY, chúng tôi quyết tâm tạo ra website đặt vé máy bay trực tuyến tốt nhất với ưu tiên hàng đầu là sự tiện lợi tối đa mà ABAY có thể mang đến cho khách hàng. Từ một nhóm nhỏ với vài thành viên, cho đến nay ABAY đã trở thành công ty dẫn đầu trong lĩnh vực này tại thị trường Việt Nam với hơn 100 nhân viên, 4 chi nhánh tại Hà Nội và TP HCM, hơn 1000 khách hàng mỗi ngày và sẽ còn vươn xa hơn nữa. Trong tương lai, ngoài mảng vé máy bay, ABAY có kế hoạch xây dựng tổ hợp dịch vụ trực tuyến gồm: đặt vé máy bay, tour du lịch, du thuyền, khách sạn…. để tiến tới mục tiêu trở thành một trong những doanh nghiệp OTA thành công đầu tiên tại Việt Nam. <br>
            <img src="./images/anhweb73.jpg" height = "300px" width="500px"> <br> 
            <strong> THÀNH TỰU ĐÃ ĐẠT ĐƯỢC </strong> <br>
            Ngay trong năm đầu đi vào hoạt động, TINBAY đã gặt hái được thành tựu đáng nể như: Đại lý Top 1 của VietJet Air và Jetstar Pacific miền Bắc, 1 trong số ít doanh nghiệp trở thành thành viên câu lạc bộ GM của Vietnam Airlines, Sản phẩm tin cậy- dịch vụ hoàn hảo - nhãn hiệu được người tiêu dùng bình chọn…
            <strong> Năm 2012 </strong> <br>
            Giải thưởng Sao vàng của VietJet Air <br>
            Đối tác vàng của Jetstar năm 2012 <br>
            <strong> Năm 2013 </strong> <br>
            Sản phẩm - Dịch vụ uy tín, chất lượng do người tiêu dùng bình chọn năm 2013 < <br>
            Top 5 Đại lý tăng trưởng cao nhất miền Bắc của Abacus <br>
            Đại lý đạt doanh thu cao nhất miền Bắc năm 2013 của Jetstar <br>
            <strong> Năm 2014 </strong> <br>
            Top 50 thương hiệu uy tín nổi tiếng được tin dùng năm 2014 <br>
            Sản phẩm tin cậy, Dịch vụ hoàn hảo, Nhãn hiệu ưa dùng năm 2014 <br> 
            <strong> Năm 2015 </strong> <br>
            Sản phẩm tin cậy – Dịch vụ hoàn hảo – Nhãn hiệu ưa dùng 2015 <br>
            <strong> Năm 2016 </strong> <br>
            Sao Khuê 2016 - giải thưởng dành cho sản phẩm dịch vụ xuất sắc, uy tín của ngành công nghiệp phần mềm và dịch vụ CNTT Việt Nam, do Hiệp hội phần mềm và Dịch vụ công nghệ thông tin Việt Nam (Vinasa) trao tặng. <br> 
            Đại lý có doanh số cao nhất miền Bắc của VietJet Air năm 2015. <br>
            Top 3 đại lý có lượng vé quốc tế bán ra lớn nhất miền Bắc năm 2015 của Sabre Vietnam. <br>
            <img src="./images/anhweb74.jpg" height = "300px" width="500px"> <br>   
            <strong> Năm 2017 </strong> <br>
            Chứng nhận Nhóm 20 Đại lý có Điểm Doanh thu cao nhất năm 2017 của Vietnam Airlines <br>
            Giải thưởng 1st Prize Performance từ Hệ thống phân phối toàn cầu SABRE - Hệ thống đặt chỗ chính của Vietnam Airlines và hầu hết các hãng hàng không quốc tế khác <br>
            Giải thưởng Top Agent Of The Year 2017 - Northern Area và chứng nhận Đại lý có doanh thu cao nhất Miền Bắc năm 2017 của Vietjet Air <br>
            CÔNG TY TNHH VÉ MÁY BAY TRỰC TUYẾN TINBAY <br>
            Số ĐKKD: 0105795184 - Mã số thuế: 0105795184 <br>
            Ngày thành lập: 25/04/2012 <br>
            Giám đốc: Ông QUÁCH ĐỖ KHÁNH TRIỀU <br>
            Website chính thức: www.tinbay.vn <br>
            <img src="./images/anhweb75.png" height = "300px" width="500px"> <br> 
            <strong>  ĐỊA CHỈ: <br>
            
            TINBAY TẠI HÀ NỘI <br> 
            324 Phố Huế, Q.Hai Bà Trưng, Hà Nội <br>
            Email: contact@abay.vn <br>
            Tel: 19006091 - Fax: (+04) 35 33 5559 <br> 

            TINBAY TẠI TP HỒ CHÍ MINH <br>
            52 Huỳnh Khương Ninh, P.Ða Kao, Q1, Tp Hồ Chí Minh <br>
            Email: contact@tinbay.vn <br>
            Tel: 19006091 - Fax: (+08) 38 48 7160 <br> </strong>  </p> 
             
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
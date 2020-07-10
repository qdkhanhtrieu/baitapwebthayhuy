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
    <link rel="stylesheet" type="text/css" href="css/stylevietjet.css">

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
                  <a class="dropdown-item active" href="Vietjet.php" target="_top">VietJet</a>
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
      <div class="container fixDisplay">
        <div class="row">
          <div class="col-sm-6 col-md-7"><h4>Đặt Vé Máy Bay VietJet Air Giá Rẻ</h4>
            <p align="justify"> Vietjet Air là hãng hàng không giá rẻ tư nhân đầu tiên của Việt Nam có trụ sở tại thủ đô Hà Nội. Với sự ra đời của mình, hãng đã đánh dấu sự phát triển của hãng hàng không giá rẻ, uy tín và chất lượng. Cùng nhau tìm hiểu giá vé máy bay của VietJet cũng như các chương trình khuyến mãi đặc biệt của hãng các bạn nhé. </p>

            <p align="justify"><h6> 1. Giá vé máy bay các chặng bay phổ biến của VietJet Air là bao nhiêu ? </h6> </p>
            <p>  Chỉ xếp sau Vietnam Airlines, VietJet Air cũng là hãng hàng không có nhiều đường bay nội địa. ABAY.vn sẽ giúp bạn cập nhật bảng giá vé tốt nhất các chặng bay nội địa ngay sau đây:
              <br> Bảng giá vé máy bay VietJet các chặng.
              <br> Lưu ý: Đây là giá vé 1 chiều, chưa bao gồm thuế, phí. Giá vé thay đổi liên tục tùy thời điểm. </p>
              <table border="2" >
                  <tr>
                      <th>Nơi Đi</th>
                      <th>Nơi Đến</th>
                      <th>Hãng Hàng Không</th>
                      <th>Giá Vé(USD)</th>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Seoul</td>
                      <td>VietJet Air</td>
                      <td>119</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Seoul</td>
                      <td>VietJet Air</td>
                      <td>56</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Đài Bắc</td>
                      <td>VietJet Air</td>
                      <td>68</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Đài Bắc</td>
                      <td>VietJet Air</td>
                      <td>4</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>HongKong</td>
                      <td>VietJet Air</td>
                      <td>58</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Hong Kong</td>
                      <td>VietJet Air</td>
                      <td>24</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>BangKok</td>
                      <td>VietJet Air</td>
                      <td>30</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>BangKok</td>
                      <td>VietJet Air</td>
                      <td>9</td>
                  </tr>
              </table>
            <p align="justify"><h6> 2. VietJet Air Khai Thác Những Đường Bay Nào ? </h6></p>
            <p> Là một trong những hãng hàng không giá rẻ nội địa tại Việt Nam, VietJet Air xây dựng mạng đường bay rộng khắp các tỉnh thành nội địa cũng như quốc tế. Hầu hết ở tất cả các tỉnh thành có sân bay đều có sự tham gia của hãng như Hà Nội, Nha Trang, Đà Nẵng, Chu Lai, Huế, Vinh... Trong những năm gần đây hãng liên tục mở rộng mạng đường bay của mình sang các thành phố quốc tế (chủ yếu là các thành phố ở các nước Đông Nam Á như Seoul, Busan, Singapore, Đài Bắc, Hồng Kong... 
            <img src="./images/anhweb17.jpg" height = "300px" width="500px"> </p>
            <p> <h6>  3.1. Quy định về hành lý xách tay và hành lý ký gửi của Vietnam Airlines </h6> </p> 
            <p> - “12h rồi Vietjet thôi” là một trong những chương trình khuyến mãi được chờ đợi nhất của hãng hàng không giá rẻ Vietjet Air. Với giá vé 0đ, 5.000đ, 9.000đ, 99.000đ... bạn có thể thả sức bay khắp mọi nơi. Chương trình này thường mở vào khung giờ vàng 12 - 14h hằng ngày trên toàn mạng bay nội địa cũng như quốc tế của hãng. </p>
            <img src="./images/anhweb18.jpg" height = "300px" width="500px"> </p>
            <p> - Cùng với đó là một loạt các chương trình khuyến mãi khi hãng khai trương đường bay mới như: khuyến mại 40.000 vé máy bay đi Bangkok giá chỉ 2 USD; vé khuyến mãi đi Hongkong chỉ 86.000đ; vé đi Yangon 99.000đ...  </p>
            </p> <h6> 4. VietJet Air quy định hạng vé và điều kiện vé ra sao? ? </h6> </p>
            <p> Vietjet Air có 4 loại giá vé chính: +  Skyboss +  Eco +  Promo +  Flexi <br>
            Theo dõi hình ảnh sau để so sánh các hạng vé và điều kiện vé: </p>
              <table border="2" >
                  <tr>
                      <th>Điều Kiện Vé</th>
                      <th>SkyBoss</th>
                      <th>Eco</th>
                      <th>Promo</th>
                  </tr>
                  <tr>
                      <td> <strong> Thay đổi tên Hành khách </strong></td>
                      <td> - Miễn phí thay đổi <br> 
                          -Thu chênh lệch giá vé (nếu có) </td>
                      <td>- Đổi tên cho cả hành trình </br> 
                          - Thu phí thay đổi</td>
                      <td> Không áp dụng  </td>
                  </tr>
                  <tr>
                      <td> <strong> Thay đổi chuyến bay </strong></td>
                      <td> - Miễn Phí thay đổi <br> 
                          - Thu chênh lệch giá vé (nếu có) </td>
                      <td> Thu phí thay đổi và chênh lệch giá vé (nếu có)</td>
                      <td> Thu phí thay đổi và chênh lệch giá vé (nếu có)  </td>
                  </tr>
                  <tr>
                      <td> <strong> Thay đổi ngày bay </strong></td>
                      <td> - Miễn Phí thay đổi <br> 
                          - Thu phí thay đổi và chênh lệch giá vé (nếu có) </td>
                      <td> Thu phí thay đổi và chênh lệch giá vé (nếu có)</td>
                      <td> Thu phí thay đổi và chênh lệch giá vé (nếu có)  </td>
                  </tr>
                  <tr>
                      <td> <strong> Thay đổi chuyến bay </strong></td>
                      <td> - Đổi tên cho cả hành trình <br> 
                          - Thu phí thay đổi </td>
                      <td> Thu phí thay đổi và chênh lệch giá vé (nếu có)</td>
                      <td> Thu phí thay đổi và chênh lệch giá vé (nếu có)  </td>
                  </tr>
                  <tr>
                      <td> <strong> Nâng hạng </strong></td>
                      <td> </td>
                      <td> Thu phí thay đổi và chênh lệch giá vé</td>
                      <td> Thu phí thay đổi và chênh lệch giá vé</td>
                  </tr>
                  <tr>
                      <td><strong> Điều kiện thay đổi </strong></td>
                      <td>Trước giờ khởi hành 03 giờ</td>
                      <td>Trước giờ khởi hành 03 giờ</td>
                      <td>Trước giờ khởi hành 03 giờ</td>
                  </tr>
                  <tr>
                      <td><strong> Bảo lưu vé </strong></td>
                      <td>Không áp dụng</td>
                      <td>Không áp dụng</td>
                      <td>Không áp dụng</td>
                  </tr>
                  <tr>
                       <td><strong> Hoàn/Hủy vé </strong></td>
                      <td>Không áp dụng</td>
                      <td>Không áp dụng</td>
                      <td>Không áp dụng</td>
                  </tr>
                  <tr>
                       <td><strong> Hành lý xách tay </strong></td>
                      <td>10 Kg</td>
                      <td>07 Kg</td>
                      <td>07 Kg</td>
                  </tr>
                  <tr>
                       <td><strong> Hành lý ký gửi </strong></td>
                      <td>  30 Kg </td>
                      <td>Phải mua thêm</td>
                      <td>Phải mua thêm</td>
                  </tr>
              </table>
            <p> <h6> 5. Có những dịch vụ chuyến bay nào của VietJet Air ? </h6> </p>
              <p> - Dịch vụ hành lý: Mỗi hành khách (ngoại trừ em bé) được phép mang 01 kiện hành lý xách tay chính và 01 kiện hành lý xách tay nhỏ với tổng trọng lượng tối đa không vượt quá 07kg. Kiện hành lý xách tay chính có kích thước tối đa 56cm x 36cm x 23cm; kiệm hành lý nhỏ không quá 40cm x 30cm x 10cm. <br> 
              - Về hành lý ký gửi: trọng lượng không quá 32kg; Kích thước không quá : 119cm x 119cm x 81cm. Quý khách mua hành lý trả trước theo các gói cước ưu đãi trả trước tại website, phòng vé, đại lý và Trung Tâm phục vụ khách hàng của chúng tôi. <br> 
              - Dịch vụ chọn chỗ ngồi: Quý khách có thể mua trước chỗ ngồi bằng cách truy nhập vào trang web ww.w.vietjetair.com với Mã đặt chỗ và thông tin hành khách hoặc liên hệ với phòng vé. <br>
              - Dịch vụ ăn uống: Ngoài dịch vụ bán đồ lưu niệm, Vietjet Air còn cung cấp dịch vụ ăn uống trên chuyến bay cho khách hàng. Thức ăn mà Vietjet Air phục vụ rất phong phú như thức ăn nhẹ, thức ăn chính,..Với mức giá từ 5.000đ – 50.000đ, Vietjet Air mang đến cho hành khách những món ăn sốt nóng như mỳ Ý, Bánh cuốn, cơm gà, trà sữa, cà phê,..đáp ứng kịp thời nhu cầu của hành khách. </p>
              </p> <h6> 6. Săn đặt vé máy bay Vietjet Air giá rẻ nhất như thế nào ? </h6> </p>
              <p> ABAY.vn – Đại lý vé máy bay trực tuyến của hãng hàng không Vietjet Air. Hệ thống đặt vé của ABAY.vn đựợc thiết kế với giao diện thân thiện, giúp khách hàng có thể dễ dàng đặt vé máy bay giá rẻ của hãng Vietjet Air chỉ với vài click chuột .Hoặc bạn có thể trực tiếp đến phòng vé ABAY đặt vé để được nhiều ưu đãi nhất: <br>
                 <img src="./images/anhweb19.jpg" height="200px" width="500px"> <br>
              - Đặc biệt, bạn có thể thỏa sức lựa chọn, đặt vé máy bay Vietjet Air đi các chặng quốc tế và nội địa tại ABAY.vn qua: máy tính, điện thoại hoặc máy tính bảng với mức giá rẻ nhất. Đội ngũ nhân viên của ABAY.vn sẵn sang hỗ trợ tư vấn về dịch vụ, thủ tục cũng như giải đáp những thắc mắc giúp khách hàng có chuyến bay thoải mái nhất. Gọi ngay tới trung tâm chăm sóc khách hàng ABAY 1900 6091 ngay hôm nay, để chúng tôi song hành cùng bạn trên hành trình chinh phục vé máy bay giá rẻ Vietjet Air và các hãng hàng không nổi tiếng trên thế giới.</p>
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
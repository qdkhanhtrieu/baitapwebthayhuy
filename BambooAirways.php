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
    <link rel="stylesheet" type="text/css" href="css/stylebamboo.css">

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
                  <a class="dropdown-item active" href="BambooAirways.php" target="_top">Bamboo Airways</a>
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
          <div class="col-sm-6 col-md-7"><h4>Đặt Vé Máy Bay Bamboo Airways Giá Rẻ</h4>
            <p align="justify"> Bamboo Airways là hãng hàng không Việt Nam thuộc tập đoàn FLC - Công ty TNHH hàng không Tre Việt (BAMBOO AIRWAYS COMPANY LIMITED). Hãng có chuyến bay đầu tiên cất cánh vào đầu năm 2019. Bamboo có các ưu điểm đó là giá vé hợp lý, các chính sách điều kiện vé “dễ chịu” đi đôi dịch vụ chất lượng - hứa hẹn khách hàng của ABAY sẽ có thêm một lựa chọn tốt cho hành trình của mình.<br> 
                <img src="./images/anhweb23.jpg" height="200px" width="600px"> </p>

            <p align="justify"><h6> 1. Bamboo Airways khai thác những đường bay nào ? </h6> </p>
            <p> Để phục vụ nhu cầu đi lại của hành khách, trong năm 2019, Bamboo Airways sẽ khai thác 37 đường bay kết nối đến tất cả các thành phố lớn và điểm đến du lịch nổi tiếng tại Việt Nam.</p> 
            <p><strong> Chuyến bay khởi hành từ Hà Nội (HAN) </strong></p>
            <p>Hà Nội – Thành phố Hồ Chí Minh; Hà Nội – Buôn Ma Thuột; Hà Nội – Đà Nẵng; Hà Nội – Đồng Hới; Hà Nội – Nha Trang; Hà Nội – Phú Quốc; Hà Nội – Quy Nhơn; Hà Nội- Vinh; Hà Nội – Đà Lạt; Hà Nội – Cần Thơ; Hà Nội – Pleiku.</p>
            <p><strong> Các chuyến bay khởi hành từ thành phố Hồ Chí Minh (SGN): </strong></p>
            <p>Hồ Chí Minh – Hà Nội; Hồ Chí Minh – Vân Đồn; Hồ Chí Minh – Quy Nhơn; Hồ Chí Minh – Thanh Hóa; Hồ Chí Minh – Vinh.</p>
            <p><strong>Các chặng bay nội địa khác:</strong></p>
            <p> Buôn Ma Thuột – Hà Nội; Buôn Ma Thuột – Vinh; Vinh – Đà Lạt; Đà Nẵng – Hà Nội; Đồng Hới – Hà Nội; Vân Đồn – Hồ Chí Minh; Nha Trang – Hà Nội; Phú Quốc – Hà Nội; Quy Nhơn – Hà Nội; Quy Nhơn – Hồ Chí Minh; Thanh Hóa – Hồ Chí Minh; Vinh – Buôn Ma Thuột; Vinh – Đà Lạt; Vinh – Hà Nội; Vinh – Hồ Chí Minh.; Cần Thơ – Hà Nội; Đà Lạt – Hà Nội; Đà Lạt – Vinh.</p>
            <p align="justify"><h6> 2. Giá vé máy bay chặng phổ biến của Bamboo Airways là bao nhiêu ? </h6> </p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi</th>
                      <th>Nơi Đến</th>
                      <th>Hãng Hàng Không</th>
                      <th>Giá Vé</th>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Hồ Chí Minh</td>
                      <td>Bamboo Airways</td>
                      <td>780000đ</td>
                  </tr>
                   <tr>
                      <td>Hà Nội</td>
                      <td>Buôn Mê Thuột</td>
                      <td>Bamboo Airways</td>
                      <td>780000đ</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Đà Nẵng</td>
                      <td>Bamboo Airways</td>
                      <td>570000đ</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Đồng Hới</td>
                      <td>Bamboo Airways</td>
                      <td>660000</td>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Nha Trang</td>
                      <td>Bamboo Airways</td>
                      <td>780000đ</td>
                  </tr>
                  
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Vân Đồn</td>
                      <td>Bamboo Airways</td>
                      <td>780000đ</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Hà Nội</td>
                      <td>Bamboo Airways</td>
                      <td>780000đ</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Quy Nhơn</td>
                      <td>Bamboo Airways</td>
                      <td>380000đ</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Thanh Hóa</td>
                      <td>Bamboo Airways</td>
                      <td>780000đ</td>
                  </tr>
              </table>
              <p>Lưu ý: Trên đây là bảng giá vé một chiều chưa bao gồm thuế và phụ phí sân bay. Giá vé sẽ biến động liên tục tùy thuộc tình trạng đặt chỗ.</p>
            <p align="justify"><h6> 3. Bamboo Airways quy định điều kiện vé như thế nào ? </h6></p>
            <p>Hãng Bamboo Airways gồm 4 hạng giá vé: First Class, Business, Bamboo Plus, Bamboo Eco</p>
            <p><strong>Bảng hạng giá vé Bamboo Airways</strong></p>
            <table border="2" >
                  <tr>
                      <th>Bamboo Eco</th>
                      <th>Bamboo Plus</th>
                      <th>Bamboo Business</th>
                      <th>Bamboo First Class</th>
                  </tr>
                  <tr>
                      <td>- Hành lý xách tay: 7kg <br> - Suất ăn miễn phí</td>
                      <td>- Hành lý xách tay: 7kg <br> - Hành lý ký gửi: 20kg <br> - Suất ăn miễn phí</td>
                      <td>- Hành lý xách tay: 2 kiện (2x7kg) <br> - Hành lý ký gửi: 30kg <br> - Lựa chọn chỗ ngồi miễn phí <br> - Phòng VIP tại sân bay <br> - Xe đưa đón tại sân bay <br> - Ưu tiên check - in và lên tàu bay</td>
                      <td>- Hành lý xách tay: 2 kiện (2x7kg) <br> - Hành lý ký gửi: 40kg- Suất ăn miễn phí <br> - Lựa chọn chỗ ngồi miễn phí <br> - Phòng VIP tại sân bay <br> - Xe đưa đón tại sân bay <br> - Ưu tiên check - in và lên tàu bay <br> - Có khoang riêng <br> - Dịch vụ đưa đón tại nhà</td>
                  </tr>
            </table>
            <p><strong>Bảng điều kiện vé của Bamboo Airways</strong></p>
            <table border="2" >
                  <tr>
                      <th></th>
                      <th>Bamboo Eco</th>
                      <th>Bamboo Plus</th>
                      <th>Bamboo Business</th>
                      <th>Bamboo First Class</th>
                  </tr>
                  <tr>
                      <th>Ngày bay/ Giờ bay/ Chuyến bay</th>
                      <td>- Được phép <br> - Miễn phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Miễn phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Thu phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Thu phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                  </tr>
                   <tr>
                      <th>Tên hành khách</th>
                      <td> - Được phép <br> - Thu phí thay đổi</td>
                      <td> - Được phép <br> - Thu phí thay đổi</td>
                      <td> - Được phép <br> - Thu phí thay đổi</td>
                      <td> - Không Được phép </td>
                  </tr>
                  <tr>
                      <th>Chặng bay</th>
                      <td>- Được phép <br> - Miễn phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Miễn phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Thu phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Thu phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                  </tr>
                  <tr>
                      <th>Hoàn vé</th>
                      <td>- Áp dụng <br> - Thu phí hoàn vé</td>
                      <td>- Áp dụng <br> - Thu phí hoàn v</td>
                      <td>- Không Được phép</td>
                      <td>- Không Được phép</td>
                  </tr>
                  
                  <tr>
                      <th>Nâng hạng</th>
                      <td>-Không áp dụng</td>
                      <td>-Không áp dụng</td>
                      <td>- Được phép <br> - Thu phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                      <td>- Được phép <br> - Thu phí thay đổi <br> - Thu chênh lệch giá vé nếu có</td>
                  </tr>
                  <tr>
                      <th>Thời gian thực hiện thay đổi</th>
                      <td>- 3 tiếng trước giờ bay dự kiến</td>
                      <td>- 3 tiếng trước giờ bay dự kiến</td>
                      <td>- 3 tiếng trước giờ bay dự kiến</td>
                      <td>- 3 tiếng trước giờ bay dự kiến</td>
                  </tr>
              </table>
              <p> <h6> 4. Hành lý xách tay và hành lý ký gửi được Bamboo Airways quy định ra sao? ? </h6> </p>
              <p> <strong> Hành lý xách tay </strong> <br>
            -Hãng hàng không giá rẻ Jetstar Pacific liên tục tung ra các chương trình khuyến mãi lớn vào nhiều thời điểm trong năm. Có thể kể đến như: <-Kích thước hành lý xách tay được Bamboo Airways quy định không được vượt quá 56cmx36cmx23cm (22x14x9 inches). <br> -Ngoài kiện hành lý theo tiêu chuẩn trên, mỗi hành khách được phép mang theo một trong những đồ dùng cá nhân sau lên máy bay miễn phí: Túi xách nhỏ, ô dù, sách/báo/tạp chí, laptop, áp khoác, khăn choàng cổ, dụng cụ cho hành khách khuyết tật, máy ảnh, ống nhòm, xe nôi trẻ em. <br> -Trong trường hợp hành lý xách tay vượt quá số lượng, trọng lượng, kích thước cho phép thì hành khách cần chuyển qua hành lý ký gửi. </p>
            <p><strong> Hành lý lý gửi </strong> <br> Mỗi kiện hành lý ký gửi không được vượt quá 32kg, tổng kích thước 3 chiều (dài + rộng+ cao) không vượt quá 203cm. <br> -Bamboo có các gói hành lý mua thêm bao gồm: 5kg, 10kg, 15kg, 20kg, 25kg, 30kg, 35kg, 40kg <br> -Hành lý quá cước tại sân bay sẽ được tính như sau: <br> +Mua gói hành lý quá cước 15kg đối với vé chưa có bất kỳ gói hành lý ký gửi nào. <br> +Theo số kg quá cước thực tế phát sinh tại sân bay được tính trên mức 01kg. <br> -Xe đẩy em bé gấp lại được được ký gửi miễn cước</p>
            <p><strong>Hành lý hạn chế chuyên chở</strong><br>-Những đồ vật dễ vỡ, mau hỏng (đồ tươi sống, thực phẩm dễ hư hỏng…, tác phẩm nghệ thuật, máy quay phim, máy ảnh, tiền, đồ trang sức, kim loại quý, đá quý, máy tính, các thiết bị điện tử, giấy tờ có giá trị chuyển đổi thành tiền, chứng khoán, tài liệu đàm phán, hợp đồng, tài liệu kinh doanh, hàng mẫu, giấy tờ tùy thân, các vật dụng quý và/hoặc có giá trị khác trong hành lý lý gửi <br> -Mắm và chất lỏng có mùi khác: Không vận chuyển <br> -Trái sầu riêng và các đồ có mùi khác: Không vận chuyển</p>
            <p> <h6> 5. Đóng mở quầy làm thủ tục hãng Bamboo Airways là bao lâu? </h6> </p>
            <p> <strong> Thời gian mở quầy: </strong> <br> - 02 giờ với chuyến bay nội địa. <br> - 03 giờ với chuyến bay quốc tế xuất phát từ Việt Nam <br> - Từ 02 đến 04 giờ với chuyến bay quốc tế xuất phát ngoài Việt Nam. <br> <strong> Thời gian đóng quầy: </strong> <br> - 40 phút trước giờ khởi hành dự kiến đối với chuyến bay nội địa <br> 50 phút trước giờ khởi hành dự kiến đối với chuyến bay quốc tế. </p>
             <p> <h6> Săn đặt vé máy bay hãng Bamboo Airways giá rẻ nhất như thế nào ? </h6> </p>
              <img src="./images/anhweb22.jpg" height="200px" width="500px">
            <p> ABAY.vn – Đại lý vé máy bay trực tuyến của hãng hàng không Jestar. Hệ thống đặt vé của ABAY.vn đựợc thiết kế với giao diện thân thiện, giúp khách hàng có thể dễ dàng đặt vé máy bay giá rẻ của hãng Jestar chỉ với vài click chuột. <br> Đặc biệt, bạn có thể thỏa sức lựa chọn, đặt vé máy bay Jestar đi các chặng quốc tế và nội địa tại ABAY.vn qua: máy tính, điện thoại hoặc máy tính bảng với mức giá rẻ nhất. Đội ngũ nhân viên của ABAY.vn sẵn sàng hỗ trợ tư vấn về dịch vụ, thủ tục cũng như giải đáp những thắc mắc giúp khách hàng có chuyến bay thoải mái nhất. Gọi ngay tới trung tâm chăm sóc khách hàng ABAY 1900 6091 ngay hôm nay, để chúng tôi song hành cùng bạn trên hành trình chinh phục vé máy bay giá rẻ Jestar và các hãng hàng không nổi tiếng khác trên thế giới.</p>

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
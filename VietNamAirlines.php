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
    <link rel="stylesheet" type="text/css" href="css/styleairlines.css">

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
                  <a class="dropdown-item active" href="VietNamAirLines.php" target="_top">Vietnam Airlines</a>
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
          <div class="col-sm-6 col-md-7"><h4>Đặt Vé Máy Bay VietNam Airlines Giá Rẻ</h4>
            <p align="justify"> Đặt mua vé máy bay Vietnam Airlines giá rẻ
                Vietnam Airlines là hãng hàng không quốc gia Việt Nam với đường bay phủ khắp các cả nước và hàng ngàn đường bay quốc tế đến khu vực châu Á, châu Âu và Châu Mỹ. Vietnam Airlines luôn đứng đầu về dịch vụ bay chất lượng dành cho khách hàng. Vậy giá vé máy bay Vietnam Airlines bao nhiêu, có những loại nào và cần lưu ý gì khi sử dụng dịch vụ bay của hãng, hãy cùng chúng tôi tìm hiểu những thông tin hữu ích dưới đây. </p>

            <p align="justify"><h6> 1. Giá vé máy bay các chặng bay phổ biến của Vietnam Airlines là bao nhiêu ? </h6> </p>
            <p>  Để thuận lợi cho việc đặt vé máy bay Vietnam Airlines, chúng tôi xin cung cấp bảng giá vé tốt nhất cho một số chặng phổ biến của Vietnam Airlines.
              <br> Bảng giá vé máy bay Vietnam Airlines các chặng nội địa
              <br> Lưu ý: Đây là giá vé 1 chiều cho 1 người lớn, chưa bao gồm thuế phí.
              Cùng với cá chặng bay nôi địa, Vietnam Airlines cũng khai thác vé máy bay quốc tế khởi hành từ Việt Nam tới các thành phố lớn trên thế giới như vé máy bay đi Bangkok, đi Singapore, đi Seoul, đi Pusan, đi London, đi Wasington... </p>
            <p align="justify"><h6> 2. VietnamAirlines áp dụng các điều kiện giá vé máy bay như thê·nào ? </h6> 
              2.1. Điều kiện & các loại phí thay đổi của Vietnam Airlines (*) </p>
              <table border="1" >
                  <tr>
                      <th align = "center" valign = "middle" >Loại Giá Vé</th>
                      <th align = "center" valign = "middle" >Hạng Đặt Chỗ</th>
                      <th align = "center" valign = "middle" >Phi Thay Đổi</th>
                      <th align = "center" valign = "middle" >Phí Hoàn Vé</th>
                  </tr>
                  <tr>
                      <td>Thương Gia Linh Hoạt</td>
                      <td>J,C</td>
                      <td>Miễn Phí</td>
                      <td>Trước ngày bay:300.000đ<br> 
                          Từ ngày bay: 300.000đ<br>
                          (riêng Tết Nguyên Đán 600.000đ)   
                      </td>
                  </tr>
                  <tr>
                      <td>Thương Gia Tiêu Chuẩn</td>
                      <td>D,I</td>
                      <td>300.000đ</td>
                      <td>300.000đ</td>
                  </tr>
                  <tr>
                      <td>Phổ Thông Đặc Biệt Linh Hoạt</td>
                      <td>W</td>
                      <td>Miễn Phí</td>
                      <td>Trước ngày bay:300.000đ<br> 
                          Từ ngày bay: 300.000đ<br>
                          (riêng Tết Nguyên Đán 600.000đ)   
                      </td>
                  </tr>
                  <tr>
                      <td>Thương Gia Tiêu Chuẩn</td>
                      <td>Z,U</td>
                      <td>300.000đ</td>
                      <td>300.000đ</td>
                  </tr>
                  <tr>
                      <td>Phổ Thông Đặc Biệt Linh Hoạt</td>
                      <td>Y, B, M, S</td>
                      <td>Miễn Phí <br> Trừ Tết nguyên đán ( Trước ngày bay: 300.000 đ & Từ ngày bay: 600.000 đ) </td>
                      <td>Trước ngày bay:300.000đ<br> 
                          Từ ngày bay: 300.000đ<br>
                          (riêng Tết Nguyên Đán 600.000đ)   
                      </td>
                  </tr>
                  <tr>
                      <td>Phổ Thông Tiêu Chuẩn</td>
                      <td>K, L, Q, N, R</td>
                      <td>Trước ngày bay: 300.000đ <br> Từ ngày bay: 600.000đ</td>
                      <td>Trước ngày bay: 300.000đ <br> Từ ngày bay: 600.000đ</td>
                  </tr>
                  <tr>
                      <td>Phổ Thông Tiết Kiệm </td>
                      <td>T, E</td>
                      <td>Trước ngày bay: 600.000 đ <br> Từ ngày bay: Không được phép </td>
                      <td>Không được phép</td>
                  </tr>
                  <tr>
                      <td>Phổ Thông Siêu Tiết Kiệm</td>
                      <td>A, G, P </td>
                      <td>Không được phép</td>
                      <td>Không được phép</td>
                  </tr>
              </table>
              <p> - Đối với các chuyến bay quốc tế:
              Phí thay đổi trước ngày bay là 50 USD, sau ngày bay phí là 100 USD. </p>
              <p> <h6> 2.2. Các quy định chung về điều kiện vé của Vietnam Airlines </h6></p>
              <p> <h8> Ngoài các điều kiện dành cho từng hạng vé, Vietnam Airlines cũng có những quy định chung khác. Bạn có thể tham khảo một số thông tin như sau: <br>
              - Điều kiện về thay đổi vé: Vietnam Airlines quy định thay đổi vé bao gồm thay đổi hành trình bay, ngày giờ bay, không bao gồm thay đổi họ tên (trừ việc thêm hoặc bỏ chữ "Thị"). Ngoài ra, bạn cũng chỉ được phép thay đổi sang hành trình mới có giá vé bằng hoặc cao hơn hành trình hiện tại. <br>
              - Điều kiện về hoàn vé: Vietnam Airlines áp dụng hoàn vé đối với tất cả các hạng, trừ hạng Tiết kiệm đặc biệt và hạng Siêu tiết kiệm. Nếu bạn mua vé máy bay khứ hồi và đã sử dụng 1 chặng (chặng đi hoặc chặng về), thì khi muốn hoàn vé, bạn vẫn được hoàn chặng còn lại nhưng phải mất phí. <br>
              - Kết hợp giá: Các loại giá vé được phép kết hợp với nhau. Điều kiện chặt nhất được áp dụng. <br>
              - Phí thay đổi: Nếu bạn muốn thay đổi nhiều chặng bay thì Vietnam Airlines sẽ áp dụng mức phí cao nhất của các chặng thay đổi. Phí thay đổi đã nộp không được hoàn lại trong mọi trường hợp. <br>
              - Điều kiện về nâng hạng: Bạn sẽ được phép nâng hạng nếu còn chỗ. Đối với việc nâng hạng, bạn sẽ phải trả mức chênh lệch giá vé (từ vé cũ sang vé mới) cùng phí nâng hạng. <br>
              - Điều kiện về chọn chỗ ngồi: Đối với các hành trình nội địa, Vietnam Airlines không áp dụng dịch vụ đặt trước chỗ ngồi trên máy bay. <br> </h8> </p>
              <p> <h6> 2.3. Giá vé máy bay dành cho trẻ em/em bé của Vietnam </h6> </p>
              <p> - Em bé dưới 2 tuổi: = 10% giá vé người lớn <br>
              - Trẻ em từ 2 tuổi tới 12 tuổi = 90% giá vé người lớn
              Trẻ em đủ 2 tuổi được tính theo ngày sinh nhật, (trước ngày sinh tính nhỏ hơn 2 tuổi, đúng ngày và sau ngày sinh được tính lớn hơn 2 tuổi) <br>
              Lưu ý: 
              Trường hợp trẻ em bay đi trước ngày sinh nhật 2 tuổi và bay về sau ngày sinh nhật 2 tuổi thì hãng vẫn tính tuổi theo ngày khởi hành chặng đầu tiên.<br> </p>
              <p> <h6> 3. Vietnam Airlines quy định dịch vụ hành lý, chỗ ngồi và suất ăn như thế nào? </h6> </p>
                  <img src="./images/anhweb16.jpg" height="200px" width="500px">
              <p> <h6>  3.1. Quy định về hành lý xách tay và hành lý ký gửi của Vietnam Airlines </h6> </p> 
              <p> - Hành khách hạng Thương gia được phép mang 02 kiện hành lý xách tay.
              <br> - Hành khách hạng Phổ thông được phép mang 01 kiện hành lý xách tay.
              <br> - Mỗi kiện hành lý xách tay có trọng lượng không vượt quá 7 kg và có kích thước 56 x 36 x 23 cm (22 x 14 x 9 inches).
              <br> - Hành lý ký gửi có trọng lượng tối đa cho phép là 32kg/kiện, với tổng kích thước 3 chiều không quá 203cm. Trường hợp hành lý vượt trọng lượng, kích thước nêu trên, khách phải đặt dịch vụ trước và được sự đồng ý của Vietnam Airlines. Ngoài 20kg hành lý miễn cước, hành khách có thể mua thêm các gói hành lý là 5kg hoặc 10kg, đối với chặng bay ngắn 5kg là 99.000đ, - 10kg là198.000đ , chặng bay dài gói 5kg là 198.000đ - gói 10kg là 396.000đ. Một hành khách được đem tối đa 40 kg hành lý ký gửi.
              <p> <h6> 3.2. Dịch vụ chỗ ngồi của Vietnam Airlines </h6> </p>
              <p> - Hãng hàng không quốc gia có cung cấp dịch vụ đặt trước chỗ ngồi trên chuyến bay. Dịch vụ này áp dụng cho khách hàng đặt chỗ trực tuyến tại vietnamairlines.com; đối với các loại vé thương gia linh hoạt, thương gia tiết kiệm, phổ thông đặc biệt linh hoạt, phổ thông tiêu chuẩn, phổ thông linh hoạt, phỏ thông tiêu chuẩn và phổ thông tiết kiệm.
              <p> <h6> 3.3. Dịch vụ suất ăn của Vietnam Airlines </h6> </p> 
              <p> Suất ăn của của hãng rất phong phú và đa dạng. Hãng vừa phục vụ các món ăn Việt Nam để mang nét bình dị, mộc mạc, chú trọng vào sự ngon miệng, thiên về phối trộn gia vị một cách tinh tế trong đó nước mắm là loại gia vị quan trọng được sử dụng phổ biến tạo nên hương vị đậm đà cho phần lớn các món ăn Việt Nam. Bên cạnh đó hãng cũng phục vụ các món ăn Tây được nấu bởi những đầu bếp nổi tiếng. Về đồ uống hãng phục vụ mọi loại từ rượu mạnh, rượu vang, cocktail cho đến trà, cà phê… tất cả đều sẵn sàng để Quý khách lựa chọn.
              Chương trình khuyến mãi của Vietnam Airlines được cập nhật thường xuyên tại ABAY.vn
              Những chương trình khuyến mãi lớn của Vietnam Airlines thường xuyên mang tới cho hành khách cơ hội săn vé máy bay giá rẻ vn airlines. Có thể kể đến các chương trình như sau:
              <br> + Chương trình Bay đẳng cấp giá cực thấp: là chương trình được tổ chức vào thứ 3 hàng tuần với hàng loạt ưu đãi nội địa giá cực tốt chỉ từ 299.000đ cho các hành trình bay nội địa như Đà Nẵng, Đà Lạt, Hà Nội... Hầu hết các chặng nội địa đều có mặt trong chương trình khuyến mãi hàng tuần của hãng. 
              <br> + Chương trình Khoảnh khắc vàng: là chương trình ưu đãi đặc biệt của hãng với vé máy bay giá rẻ cho các hành trình nội địa. Bạn sẽ có cơ hội săn vé máy bay giá rẻ chỉ từ 190.000đ cho nhiều chặng bay như Hà Nội – Đà Lạt/ Buôn Ma Thuột; Tp Hồ Chí Minh – Quy Nhơn/ Nha Trang… Thời gian mở bán vé thường diễn ra trong vòng 1 tháng. 
              <br> + Chương trình Bay cùng hoa sen:là chương trình khuyến mãi diễn ra trong 5 ngày. Vé ưu đãi chỉ dành cho các hành trình bay quốc tế  từ Đông Nam Á, Châu Á sang cả Châu Âu xa xôi với các thành phố lớn sôi động như Jakatar, Osaka, Yangon, Hong kong, Bắc Kinh, Seoul, Moscow, Paris, London hay Frankfurt... 
              <br> + Chương trình Đông Nam Á trong tầm tay: là cầu nối để mọi người có thể dễ dàng bay đi du lịch Đông Nam Á với chi phí tiết kiệm. Trong chương trình này hàng loạt giá vé ưu đãi cho các hành trình tới Yangon, Bangkok, Singapore... với mức giá ưu đãi chỉ 50 USD trở lên
              <br> + Chương trình Chào hè: là chương trình khuyến mãi áp dụng cho tất cả các hành khách có nhu cầu di chuyển bằng máy bay trong mùa hè này, với giá vé cực rẻ, cực sốc và siêu tiết kiệm. Vé khuyến mãi áp dụng cho tất cả các hành trình nội địa và quốc tế với mức giá từ 299.000đ trở lên. Thời gian mở bán vé khuyến mãi này thường sẽ bắt đầu vào tháng 3 hàng năm.
              + Ngoài ra còn có hàng loạt các chương trình khuyến mãi khác như Ưu đãi đặc biệt với vé máy bay khứ hồi đi Châu Âu chỉ từ 499 USD; chương trình Mùa thu Vàng, chương trình Chào hè... 
              </p> <h6> 4. Săn đặt vé máy bay Vietnam Airlines giá rẻ nhất như thế nào ? </h6> </p>
              <p> Đại lý vé máy bay trực tuyến của hãng hàng không Vietnam Airlines. Hệ thống đặt vé đựợc thiết kế với giao diện thân thiện, giúp khách hàng có thể dễ dàng đặt vé máy bay giá rẻ của hãng Vietnam Airlines chỉ với vài click chuột.
              đặt vé abay 
              <br> Đặt vé trực tuyến tại trang.
              <br> Đội ngũ nhân viên của trang sẵn sàng hỗ trợ tư vấn về dịch vụ, thủ tục cũng như giải đáp những thắc mắc giúp khách hàng có chuyến bay thoải mái nhất. Gọi ngay tới tổng đài 1900 6091 ngay hôm nay, để chúng tôi song hành cùng bạn trên hành trình chinh phục vé máy bay giá rẻ Vietnam Airlines và hàng chục hãng hàng không quốc tế trên thế giới. </p> 
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
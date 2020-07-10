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
    <link rel="stylesheet" type="text/css" href="css/stylejetstar.css">

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
                  <a class="dropdown-item active" href="JetstarPacific.php" target="_top">Jetstar Pacific</a>
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
          <div class="col-sm-6 col-md-7"><h4>Đặt Vé Máy Bay Jetstar Pacific Giá Rẻ</h4>
            <p align="justify"> Jetstar là một trong những hãng hàng không giá rẻ hàng đầu khu vực luôn được hành khách lựa chọn làm bạn đồng hành trong những chuyến bay. Nhằm đáp ứng nhu cầu và phục vụ khách hàng, vé máy bay Jetstar Pacific thường xuyên tung các chương trình khuyến mãi lớn. Nếu bạn cảm thấy khó khăn để sở hữu tấm vé máy bay Jetstar Pacific với giá tốt nhất hãy đến với ABAY.vn. Với hệ thống book vé chuyên nghiệp, nhanh chóng và tiện lợi tại ABAY bạn có thể thỏa sức lựa chọn đặt vé Jetstar đi quốc tế hoặc nội giá tốt qua máy tính, điện thoại hoặc máy tính bảng với mức giá rẻ nhất. </p>

            <p align="justify"><h6> 1. Giá vé máy bay các chặng phổ biến của Jetstar Pacific là bao nhiêu ? </h6> </p>
            <p> Để thuận lợi cho việc đặt vé máy bay Jetstar Pacific, ABAY.vn xin cung cấp bảng giá vé máy bay tốt nhất một số chặng phổ biến của hãng.</p> 
            <p> <strong> Bảng giá vé máy bay Jetstar các chặng bay nội địa </strong> </p>
            <p> Lưu ý: Giá vé máy bay Jetstar Paicific là giá vé 1 chiều chưa tính thuế phí. <br>
            Giá vé cao hay thấp tùy thuộc thời gian đặt vé hay hạng vé.</p>
            <p> <strong> Bảng giá vé máy bay Jetstar các chặng bay quốc tế </strong> </p>
            <p> Cùng với cá chặng bay nôi địa, Jetstar Pacific cũng khai thác vé máy bay quốc tế khởi hành từ Việt Nam tới các thành phố lớn trên thế giới như vé máy bay đi Sydney, đi Singapore, đi Phnom Penh; đi Auckland; đi Manila; đi Taipei…</p>
                <table border="2" >
                  <tr>
                      <th>Nơi Đi</th>
                      <th>Nơi Đến</th>
                      <th>Hãng Hàng Không</th>
                      <th>Giá Vé(USD)</th>
                  </tr>
                  <tr>
                      <td>Hà Nội</td>
                      <td>Quãng Châu</td>
                      <td>Jetstar Pacific</td>
                      <td>9</td>
                  </tr>
                   <tr>
                      <td>Hà Nội</td>
                      <td>Singapore</td>
                      <td>Jetstar Pacific</td>
                      <td>44</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Singapore</td>
                      <td>Jetstar Pacific</td>
                      <td>17</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Hong Kong</td>
                      <td>Jetstar Pacific</td>
                      <td>86</td>
                  </tr>
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Sydney</td>
                      <td>Jetstar Pacific</td>
                      <td>97</td>
                  </tr>
                  
                  <tr>
                      <td>Sài Gòn</td>
                      <td>Hong Kong</td>
                      <td>Jetstar Pacific</td>
                      <td>4</td>
                  </tr>
              </table>
            <p align="justify"><h6> 2. Jetstar Pacific có những có những chương trình khuyễn mãi nào ? </h6></p>
             <img src="./images/anhweb20.jpg" height = "300px" width="500px"> </p>
            <p> Hãng hàng không giá rẻ Jetstar Pacific liên tục tung ra các chương trình khuyến mãi lớn vào nhiều thời điểm trong năm. Có thể kể đến như: <br> + Chương trình Cuối tuần siêu khuyến mãi: là chương trình khuyến mãi vé máy bay giá rẻ bắt đầu từ 11h00p ngày Thứ Sáu và kết thúc vào 23h59p ngày Chủ nhật hàng tuần. Vào các tuần khác nhau hãng liên tục đưa ra các mức giá tốt khác nhau như 89.000đ, 68.000đ, 78.000đ... <br> + Chương trình khuyến mãi vé rẻ Jetstar Online Friday thường xuyên được tổ chức với 11.000 vé máy bay khuyến mãi chỉ từ 11.000đ áp dụng trên nhiều chặng bay nội địa hấp dẫn từ Tp Hồ Chí Minh – Đà Lạt/ Buôn Ma Thuột/ Quy Nhơn/ Tuy Hòa/ Huế, Vinh – Buôn Ma Thuột, Hà Nội – Đà Lạt… (và ngược lại). <br> + Vào các thời điểm khai thác đường bay mới hãng cũng liên tục tung các giá vé cực tiết kiệm từ 7.000đ, 11.000đ... <br> + Vào các ngày lễ đặc biệt hãng cũng tung các mức giá siêu rẻ cho các đường bay nội địa và quốc tế với mức giá chỉ 88.000đ, 68.000đ... <br> </p>
            </p> <h6> 3. Các hạng và điều kiện vé máy bay của Jetstar Pacific như thế nào ? </h6> </p>
            <p> Jetstar có hai loại vé: <br> + Loại giá hạng phổ thông Starter: gồm có hai gói dịch vụ Plus và Max. <br> + Loại giá hạng thương gia Business (hiện loại giá này chưa áp dụng cho các chuyến bay nội địa). <br>  Điều kiện giá vé may bay loại Starter hạng phổ thông và loại vé hạng Business: <br> - Hành khách được thay đổi ngày giờ, thay đổi tên người đi. Các thay đổi phải được tiến hành trước thời hạn mở quầy làm thủ tục dự kiến ban đầu của chuyến bay. Phí thay đổi và phí chênh lệch giá vé áp dụng cho mỗi khách hàng, mỗi chuyến bay. Nếu muốn đặt lại chỗ, hành khách chỉ được đặt lại chỗ trên chuyến bay Jetstar đang mở bán. Riêng đối với loại vé hạng Businesss mọi thay đổi phải được tiến hành trước cuối ngày dự kiến khởi hành ban đầu. <br> - Hành khách không làm thủ tục theo đúng thời gian quy định thì không được hoàn lại phí/tiền vé, đồng thời không được thay đổi nơi đến, nơi khởi hành. </p>
            <p> <h6> 4. Có những dịch vụ chuyến bay nào của Jetstar Pacific ? </h6> </p>
              <img src="./images/anhweb21.jpg" height="200px" width="500px">
            <p> - Dịch vụ hành lý: Về hành lý xách tay: mỗi hành khách được mang một hành lý xách tay lớn và một hành lý xách tay nhỏ với tổng trọng lượng tối đa là 7 kg đối với Jetstar Pacific (BL) hoặc 10kg đối với Jetstar (JQ) và Jetstar Asia (3K/VF). Đối với Jetstar Pacific, kích thước tối đa của hành lý xách tay lớn là 23cm + 36cm + 56cm đối với túi xách hoặc va li xách tay. Đối với Jetstar (JQ) và Jetstar Asia (3K/VF), kích thước tối đa của hành lý xách tay lớn là 23cm + 36cm + 56cm đối với túi xách hoặc va-li xách tay. <br>
            Về hành lý ký gửi: Hành khách mua vé Starter Max tự động được mang theo 20kg hạn mức hành lý ký gửi và có thể mua thêm tối đa 20kg. Hành khách mua vé Business và Business Max tự động được mang theo 30kg hạn mức hành lý ký gửi và có thể mua thêm tối đa 10kg. Hạn mức hành lý của quý khách được tính theo trọng lượng, không theo số lượng gói. <br>
            - Dịch vụ chỗ ngồi: Hành khách mua vé loại giá Starter và Starter Plus có thể mua chỗ ngồi có chỗ để chân rộng tại một số chỗ gần cửa thoát hiểm.  Hành khách mua vé loại giá Starter Max có thể lựa chọn bất cứ chỗ ngồi gần cửa thoát hiểm nào và không mất phí, tùy thuộc chỗ đó có còn trống hay không. Hành khách mua vé loại giá Starter Max nếu lựa chọn chỗ ngồi gần cửa thoát hiểm cũng phải đáp ứng được các yêu cầu đối với hành khách ngồi tại hàng ghế gần của thoát hiểm. <br>
            - Dịch vụ ăn uống của Jestar phục vụ các bữa ăn trưa, sáng, tối cùng các bữa ăn nhẹ hay bữa ăn chính. Quý khách có thể lựa chọn đồ ăn Á, đồ ăn tây và cả đồ ăn chay. Đồ uống có nước lọc, rượu vang, cà phê xay kiểu pháp…</p>
            <p> <h6> 5. Săn đặt vé máy bay Jetstar Pacific giá rẻ nhất như thế nào ? </h6> </p>
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
<?php
      include('config.php');

            $NoiDi        = $_POST['txtNoiDi'];
            $NoiDen       = $_POST['txtNoiDen'];
      $sql = "SELECT * FROM `lichbay` WHERE `NoiDi` = '{$NoiDi}' AND `NoiDen`= '{$NoiDen}' ";
      
      if (!$NoiDi || !$NoiDen)
                {
                    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit; 
                }
            else{
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?> 
      
      <section>
      <div class="container-fluid">
          <table class="table table-bordered table-dark">
              <thead>
                <tr>
                  <td> <center> Mã Số Chuyến Bay  <br> <br> <h6>
                   <?= $row['masochuyenbay'] ?> </h6> </center></td> 
                   <td> <center> Hãng Bay  <br> <br> <h6>
                   <?= $row['HangBay'] ?> </h6> </center></td> 
                    <td> <center> Nơi Đi  <br> <br> <h6>
                   <?= $row['NoiDi'] ?> </h6> </center></td> 
                   <td> <center> Nơi Đến  <br> <br> <h6>
                   <?= $row['NoiDen'] ?> </h6> </center></td> 
                   <td> <center> Ngày Bay  <br> <br> <h6>
                   <?= $row['NgayBay'] ?> </h6> </center></td> 
                   <td> <center> Giờ Khởi Hành  <br> <br> <h6>
                   <?= $row['GioKhoiHanh'] ?> </h6> </center></td> 
                   <td> <center> Ngày Đến  <br> <br> <h6>
                   <?= $row['NgayDen'] ?> </h6> </center></td> 
                   <td> <center> Giờ Đến  <br> <br> <h6>
                   <?= $row['GioDen'] ?> </h6> </center></td> 
                   <td> <center> Số Ghế  <br> <br> <h6>
                    <?= $row['SoGhe'] ?> </h6> </center></td> 
                   <td> <center> Giá Bay  <br> <br> <h6>
                   <?= $row['GiaBay'] ?> </h6> </center> </td> 
                   <td> <a class="btn btn-primary" href="Chon.php?id=<?= $row['id'] ?> " role="button"> Chọn </a>  </td>
                </tr>
              </thead>
                  </div>
                  <a href='trangchu.php'>Về trang chủ</a>
          </section>
          <?php }
        }  } ?>
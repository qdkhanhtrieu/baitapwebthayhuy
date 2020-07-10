<?php
        require_once("config.php");
        if (isset($_POST['txtid'])) {
            //lấy thông tin từ các form bằng phương thức POST
            $id = $_POST['txtid']; 
            $idlichbay = $_POST['txtid'];
            $masochuyenbay   = $_POST['txtMaSoChuyenBay'];
            $NoiDi        = $_POST['txtNoiDi'];
            $NoiDen       = $_POST['txtNoiDen'];
            $HangBay      = $_POST['txtHangBay'];
            $NgayBay      = $_POST['start_dt'];
            $GioKhoiHanh  = $_POST['txttimestart'];
            $NgayDen      = $_POST['end_dt'];
            $GioDen       = $_POST['txttimeend'];
            $SoGhe        = $_POST['txtsoghe'];
            $GiaBay       = $_POST['txtgiabay'];
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if (!$masochuyenbay || !$NoiDi || !$NoiDen || !$HangBay || !$NgayBay || !$GioKhoiHanh   || !$NgayDen || !$GioDen || !$SoGhe || !$GiaBay)
                {
                    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit; 
                }
            else{
                    // Kiểm tra tài khoản đã tồn tại chưa
                 
                    
                        //thực hiện việc lưu trữ dữ liệu vào db
                        $sql = "UPDATE `lichbay` SET `masochuyenbay`= '{$masochuyenbay}',`NoiDi` = '{$NoiDi}', `NoiDen` = '{$NoiDen}', `HangBay` = '{$HangBay}', `NgayBay` = '{$NgayBay}', `GioKhoiHanh` = '{$GioKhoiHanh}', `NgayDen` = '{$NgayDen}', `GioDen` = '{$GioDen}', `SoGhe` = '{$SoGhe}', `GiaBay` = '{$GiaBay}'   WHERE `id`= $idlichbay";
                        // thực thi câu $sql với biến conn lấy từ file connection.php
                        mysqli_query($conn,$sql);
                        echo "chúc mừng bạn đã đăng ký thành công";
                    }  
              

               if ($sql)
                    echo "<a href='trangchu.php'>Về trang chủ</a>";
                else
                    echo "Vui lòng đăng ký lại. <a href='CapNhatLichBay.php'>Thử lại</a>";
    }
    ?>

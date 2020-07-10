<?php
        require_once("config.php");
        if (isset($_POST['txtMaSoChuyenBay'])) {
            //lấy thông tin từ các form bằng phương thức POST
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
                    $sql="select * from lichbay where masochuyenbay='$masochuyenbay'";
                    $kt=mysqli_query($conn, $sql);

                    if(mysqli_num_rows($kt)  > 0){
                        echo "Tài khoản đã tồn tại."; 
                    }else{
                        //thực hiện việc lưu trữ dữ liệu vào db
                        $sql = "INSERT INTO lichbay (
                            masochuyenbay,
                            NoiDi,
                            NoiDen,
                            HangBay,
                            NgayBay,
                            GioKhoiHanh,
                            NgayDen,
                            GioDen,
                            SoGhe,
                            GiaBay
                            
                        )
                        VALUE (
                            '{$masochuyenbay}',
                            '{$NoiDi}',
                            '{$NoiDen}',
                            '{$HangBay}',
                            '{$NgayBay}',
                            '{$GioKhoiHanh}',
                            '{$NgayDen}',
                            '{$GioDen}',
                            '{$SoGhe}',
                            '{$GiaBay}'
                            
                            )";
                        // thực thi câu $sql với biến conn lấy từ file connection.php
                        mysqli_query($conn,$sql);
                        echo "chúc mừng bạn đã đăng ký thành công";
                    }  
              }

               if ($sql)
                    echo "<a href='trangchu.php'>Về trang chủ</a>";
                else
                    echo "Vui lòng đăng ký lại. <a href='CapNhatLichBay.php'>Thử lại</a>";
    }
    ?>


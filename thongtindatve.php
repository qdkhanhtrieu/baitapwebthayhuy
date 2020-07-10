<?php
        require_once("config.php");
        if (isset($_POST['txtid'])) {
            //lấy thông tin từ các form bằng phương thức POST
            $id = $_POST['txtid']; 
            $idlichbay = $_POST['txtid'];
            $HoVaTen   = $_POST['txtFullname'];
            $SDT   = $_POST['txtPhone'];
            $CMND   = $_POST['txtCMND'];
            $Email      = $_POST['txtEmail'];
            $DiaChi   = $_POST['txtDiaChi'];
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if (!$HoVaTen || !$SDT || !$CMND || !$Email || !$DiaChi)
                {
                    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit; 
                }
            else{
                    // Kiểm tra tài khoản đã tồn tại chưa
                    $sql="select * from `nguoidatve` where HoVaTen='$HoVaTen'";
                    $kt=mysqli_query($conn, $sql);

                        //thực hiện việc lưu trữ dữ liệu vào db
                        $sql = "INSERT INTO `nguoidatve` (
                            idlichbay,
                            HoVaTen,
                            SDT,
                            CMND,
                            Email,
                            DiaChi
                        )
                        VALUE (
                            '{$idlichbay}',
                            '{$HoVaTen}',
                            '{$SDT}',
                            '{$CMND}',
                            '{$Email}',
                            '{$DiaChi}'
    
                            )";
                        $sql1="UPDATE `lichbay` SET `SoGhe`= `SoGhe`-1 WHERE `id` = $idlichbay";
                        // thực thi câu $sql với biến conn lấy từ file connection.php
                        mysqli_query($conn,$sql1);
                        mysqli_query($conn,$sql);
                        echo "chúc mừng bạn đã đăng ký thành công";
              }

               if ($sql)
                   {
                    header("location: ThanhToan.php");
                    }
                else
                {   
                    echo "Vui lòng đăng ký lại. <a href='Chon.php'>Thử lại</a>";
                }
    }
    ?>
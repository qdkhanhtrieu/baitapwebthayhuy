<?php
        require_once("config.php");
        if (isset($_POST['txtUsername'])) {
            //lấy thông tin từ các form bằng phương thức POST
            $username   = $_POST['txtUsername'];
            $password   = $_POST['txtPassword'];
            $fullname   = $_POST['txtFullname'];
            $phone      = $_POST['txtPhone'];
            $birthday   = $_POST['txtBirthday'];
            $sex        = $_POST['txtSex'];
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
              if (!$username || !$password || !$fullname || !$phone || !$birthday || !$sex)
                {
                    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit; 
                }
            else{
                    // Kiểm tra tài khoản đã tồn tại chưa
                    $sql="select * from `admin` where username='$username'";
                    $kt=mysqli_query($conn, $sql);

                    if(mysqli_num_rows($kt)  > 0){
                        echo "Tài khoản đã tồn tại."; 
                    }else{
                        //thực hiện việc lưu trữ dữ liệu vào db
                        $sql = "INSERT INTO `admin` (
                            username,
                            password,
                            fullname,
                            phone,
                            birthday,
                            sex
                        )
                        VALUE (
                            '{$username}',
                            '{$password}',
                            '{$fullname}',
                            '{$phone}',
                            '{$birthday}',
                            '{$sex}'
    
                            )";
                        // thực thi câu $sql với biến conn lấy từ file connection.php
                        mysqli_query($conn,$sql);
                        echo "chúc mừng bạn đã đăng ký thành công";
                    }  
              }

               if ($sql)
                    echo "<a href='trangchu.php'>Về trang chủ</a>";
                else
                    echo "Vui lòng đăng ký lại. <a href='dangky.php'>Thử lại</a>";
    }
    ?>




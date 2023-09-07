<?php

    // Khởi tạo tên và giá trị của hai cookie
    $cookieName1  = "num";              // Tên của cookie thứ nhất
    $cookieName2  = "opt";              // Tên của cookie thứ hai
    $cookieValue1 = "";                 // Giá trị ban đầu của cookie thứ nhất
    $cookieValue2 = "";                 // Giá trị ban đầu của cookie thứ hai

    // Xử lý khi người dùng nhấn nút số
    if (isset($_POST["num"])) {
        $num = $_POST["input"].$_POST["num"];   // Xây dựng biểu thức tính toán bằng cách nối giá trị của trường "input" và nút số được nhấn
    } else { $num = ""; }                       // Nếu không có nút số được nhấn, giá trị của biểu thức là chuỗi rỗng

    // Xử lý khi người dùng nhấn nút phép tính
    if (isset($_POST["opt"])) {
        $cookieValue1 = $_POST["input"];                                      // Lưu giá trị hiện tại của biểu thức vào cookie thứ nhất
        setcookie($cookieName1, $cookieValue1, time() + (86400 * 30), "/");   // Thiết lập thiết lập thời gian tồn tại cho cookie1

        $cookieValue2 = $_POST["opt"];                                        // Lưu giá trị của nút phép tính vào cookie thứ hai
        setcookie($cookieName2, $cookieValue2, time() + (86400 * 30), "/");   // Thiết lập thiết lập thời gian tồn tại cho cookie2
		
        $num = "";                                                            // Đặt giá trị của biểu thức là chuỗi rỗng
    }

    // Xử lý khi người dùng nhấn nút "="
    if (isset($_POST["eql"])) {
        $num = $_POST["input"];    // Lấy giá trị hiện tại của biểu thức từ trường "input"

        switch ($_COOKIE["opt"]) {
            case "+":
                $result = $_COOKIE["num"] + $num;    // Thực hiện phép tính cộng
                break;
            case "-":
                $result = $_COOKIE["num"] - $num;    // Thực hiện phép tính trừ
                break;
            case "*":
                $result = $_COOKIE["num"] * $num;    // Thực hiện phép tính nhân
                break;
            case "/":
                $result = $_COOKIE["num"] / $num;    // Thực hiện phép tính chia
                break;
        }

        $num = $result;    // Gán kết quả của phép tính cho biến $num
    }

?>
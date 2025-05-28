<?php

// Khởi đầu phiên làm việc
session_start();

// Xóa tất cả các biến trong phiên làm việc
session_unset();

// Hủy toàn bộ phiên làm việc
session_destroy();

// Xóa cookie của phiên làm việc (nếu có)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Xóa tất cả các dữ liệu session từ bộ nhớ
session_gc();

echo "Dữ liệu trong phiên làm việc đã được xóa hoàn toàn.";


header ("Location: ./wolfcinema/user/index.php") ;
?>  
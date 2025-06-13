<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


session_start();


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

    session_unset();
    session_destroy();
}

// นำผู้ใช้ไปยังหน้า login
header("Location: login.php");
exit;
?>
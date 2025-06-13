<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<h2>ยินดีต้อนรับ</h2>

    
    <img width="150px" height="150px" src="pic/user.png"><br><br>
    <a href="logout.php" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> ออกจากระบบ</a><br><br>
    <h3>สรุปรายงานผลแบบสอบถาม</h3><br>
            <div class="container_flex">
            
                <div class="container_flexcard">
                    <img width="150px" height="150px" src="pic/alumni.png"><br><br>
                    <a href="result_alumni.php" class="btn btn-list"><i class="fa fa-database" aria-hidden="true"></i> รายงานข้อมูลของศิษย์เก่า</a>
                </div><br><br>
                <div class="container_flexcard">
                    <img width="150px" height="150px" src="pic/company.png"><br><br>
                    <a href="result_company.php" class="btn btn-list"><i class="fa fa-database" aria-hidden="true"></i> รายงานข้อมูลของสถานประกอบการ</a>
                </div><br><br>
                <div class="container_flexcard">
                    <img width="150px" height="150px" src="pic/student.png"><br><br>
                    <a href="result_student.php" class="btn btn-list"><i class="fa fa-database" aria-hidden="true"></i> รายงานข้อมูลของนักเรียน</a>
                </div><br><br>
            </div>
            
</body>
</html>

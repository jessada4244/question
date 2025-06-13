<?php
session_start();
$message = "";


include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT password FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($db_password);
    $stmt->fetch();


    if ($db_password && $password === $db_password) {

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    } else {
        $message = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">

        <h2>สรุปข้อมูล</h2>

        <img class="image" width="80px" src="pic/logo.png">
        <h3>เข้าสู่ระบบเพื่อเข้าใช้งาน</h3>

        <form method="post" action="">

            <label for="username">ชื่อผู้ใช้งาน</label><br>
            <input type="text" name="username" required placeholder="ชื่อผู้ใช้งาน"><br><br>

            <label for="password">รหัสผ่าน</label><br>
            <input type="password" name="password" required placeholder="รหัสผ่าน"><br>

            <div class="container_btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> เข้าสู่ระบบ
                </button>
            </div>
            <p style="color:red;"><?php echo $message; ?></p>
        </form>

    </div>
    <br>
    <center>
        <a href="index.php" class="btn btn-danger">หน้าแรก</a>
    </center>
</body>

</html>
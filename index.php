<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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


    <div class="container">

            <div class="header">
                <img class="image" src="pic/logo.png">&nbsp;&nbsp;&nbsp;
                
                <div class="text">
                    <h1>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</h1>
                    <h2>Rajamangala university of technology lanna tak</h2>

                </div>
                <button id="toggleDarkMode" class="btn btn-mode">
                <i id="modeIcon" class="fa fa-sun-o"></i>
            </button>
            <span id="modeText" class="mode-text">โหมดสว่าง</span>

            </div>
            
            <br> 
        
            <script>
                const toggleDarkModeButton = document.getElementById('toggleDarkMode');
                const modeIcon = document.getElementById('modeIcon');
                const modeText = document.getElementById('modeText');

                toggleDarkModeButton.addEventListener('click', function() {
                    document.body.classList.toggle('dark-mode');

                    // สลับไอคอนและข้อความกำกับ
                    if (document.body.classList.contains('dark-mode')) {
                        modeIcon.classList.remove('fa-sun-o');
                        modeIcon.classList.add('fa-moon-o');
                        modeText.textContent = 'โหมดมืด'; // เปลี่ยนข้อความเป็น Dark Mode
                    } else {
                        modeIcon.classList.remove('fa-moon-o');
                        modeIcon.classList.add('fa-sun-o');
                        modeText.textContent = 'โหมดสว่าง'; // เปลี่ยนข้อความเป็น Light Mode
                    }
                });
            </script>
            <h2>แบบสอบถามความพึงพอใจ</h2>

            <h3>กรุณาเลือกกรอกแบบสอบถามตามประเภท</h3>
            <div class="container_flex">

                <div class="container_flexcard">
                    <img width="150px" height="150px" src="pic/alumni.png"><br><br>
                    <a href="formalumni.php" class="btn btn-list"><i class="fa fa-file-text" aria-hidden="true"></i> แบบสอบถามความพึงพอใจของศิษย์เก่า</a>
                </div><br><br>
                <div class="container_flexcard">
                    <img width="150px" height="150px" src="pic/company.png"><br><br>
                    <a href="formcompany.php" class="btn btn-list"><i class="fa fa-file-text" aria-hidden="true"></i> แบบสอบถามความพึงพอใจของสถานประกอบการ</a>
                </div><br><br>
                <div class="container_flexcard">
                    <img width="150px" height="150px" src="pic/student.png"><br><br>
                    <a href="formstudent.php" class="btn btn-list"><i class="fa fa-file-text" aria-hidden="true"></i> แบบสอบถามความพึงพอใจของนักเรียน</a>
                </div><br><br>
            </div>
            <br>
            <a href="login.php" class="btn btn-danger"><i class="fa fa-pie-chart" aria-hidden="true"></i> สรุปข้อมูล</a><br><br>

            <hr>
            <footer>
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            
                <p>ความคิดเห็นของท่านมีคุณค่าอย่างยิ่งในการ<br>
                    พัฒนาหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์</p>
            </footer>
</body>

</html>
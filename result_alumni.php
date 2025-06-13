<?php
include 'db.php';

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}


// นับจำนวนผู้ที่ทำแบบฟอร์ม
$sql_count = "SELECT COUNT(*) AS total FROM q_alumni";
$result_count = $conn->query($sql_count);
if ($result_count) {
    $row_count = $result_count->fetch_assoc();
    $total_responses = $row_count['total']; // จำนวนทั้งหมดของคนที่ทำแบบฟอร์ม
} else {
    die("เกิดข้อผิดพลาดในการดึงข้อมูล: " . $conn->error);
}


// ดึงข้อความจากฟิลด์ Add_Knowledge, date_ser และ suggestions
$sql_knowledge = "SELECT Add_Knowledge, date_ser, Additional_skills, suggestions FROM q_alumni";
$result_knowledge = $conn->query($sql_knowledge);
if (!$result_knowledge) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}



// นับจำนวนผู้ชายและผู้หญิง
$sql_gender_count = "SELECT gender, COUNT(*) AS total FROM q_alumni GROUP BY gender";
$result_gender = $conn->query($sql_gender_count);

// นับจำนวนช่วงอายุ
$sql_age_count = "SELECT age_range, COUNT(*) AS total FROM q_alumni GROUP BY age_range";
$result_age = $conn->query($sql_age_count);

// นับจำนวนสถานะการจ้างงาน
$sql_employment_count = "SELECT employment_status,  COUNT(*) AS total FROM q_alumni GROUP BY employment_status";
$result_employment = $conn->query($sql_employment_count);  

//นับจำนวนอาชืพ
$sql_employment_count_path = "SELECT occupation_path,  COUNT(*) AS total FROM q_alumni GROUP BY occupation_path";
$result_employment_path = $conn->query($sql_employment_count_path);  
//นับจำนวนสถานะการจ้างงานอื่นๆ

$sql_employment_count_ect = "SELECT occupation,  COUNT(*) AS total FROM q_alumni GROUP BY occupation";
$result_employment1 = $conn->query($sql_employment_count_ect); 


// คำนวณค่าเฉลี่ยของฟิลด์ที่ต้องการ
$sql_average = "SELECT 
    AVG(course_modernity) AS avg_course_modernity,
    AVG(course_relevance_to_job_market) AS avg_course_relevance_to_job_market,
    AVG(course_structure) AS avg_course_structure,
    AVG(course_technology) AS avg_course_technology,
    AVG(course_integration) AS avg_course_integration,
    AVG(course_character_development) AS avg_course_character_development,
    AVG(course_demand_in_job_market) AS avg_course_demand_in_job_market,
    AVG(teacher_practical_teaching) AS avg_teacher_practical_teaching,
    AVG(teacher_knowledge) AS avg_teacher_knowledge,
    AVG(teacher_professional_ethics) AS avg_teacher_professional_ethics,
    AVG(teacher_professional_edu) AS avg_teacher_professional_edu,
    AVG(classroom_equipment) AS avg_classroom_equipment,
    AVG(laboratory_equipment) AS avg_laboratory_equipment
FROM q_alumni";

// ตรวจสอบว่าคำสั่ง SQL ถูกต้องหรือไม่
$result_average = $conn->query($sql_average);
if (!$result_average) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

// ดึงข้อมูลค่าเฉลี่ย
$average_row = $result_average->fetch_assoc();

// คำนวณผลรวมของฟิลด์กลุ่มแรก
$sql_sum1 = "SELECT 
    SUM(Architecture) AS total_architecture,
    SUM(Operating) AS total_operating,
    SUM(Software_Development) AS total_software_development,
    SUM(Database_Systems) AS total_database_systems,
    SUM(Computer_Networks) AS total_computer_networks,
    SUM(Cybersecurity) AS total_cybersecurity,
    SUM(Machine_Learning) AS total_machine_learning,
    SUM(Embedded_System) AS total_embedded_system,
    SUM(Information_Theory) AS total_information_theory,
    SUM(Mathematics) AS total_mathematics,
    SUM(Engineering) AS total_engineering,
    SUM(Cloud_Computing) AS total_cloud_computing
FROM q_alumni";

// คำนวณผลรวมของฟิลด์กลุ่มที่สอง
$sql_sum2 = "SELECT 
    SUM(foreign_language_skills) AS total_foreign_language_skills,
    SUM(leadership) AS total_leadership,
    SUM(Analytical_and_problem) AS total_Analytical_and_problem,
    SUM(Interpersonal) AS total_Interpersonal
FROM q_alumni";

// ตรวจสอบคำสั่ง SQL ของกลุ่มแรกว่าสำเร็จหรือไม่
$result_sum1 = $conn->query($sql_sum1);
if (!$result_sum1) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL กลุ่มแรก: " . $conn->error);
}

// ตรวจสอบคำสั่ง SQL ของกลุ่มที่สองว่าสำเร็จหรือไม่
$result_sum2 = $conn->query($sql_sum2);
if (!$result_sum2) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL กลุ่มที่สอง: " . $conn->error);
}

// ดึงข้อมูลผลรวมจากกลุ่มแรก
$row_sum1 = $result_sum1->fetch_assoc();

// ดึงข้อมูลผลรวมจากกลุ่มที่สอง
$row_sum2 = $result_sum2->fetch_assoc();

// จัดเก็บผลรวมใน array เพื่อจัดเรียง (กลุ่มแรก)
$sum_fields = [
    'สถาปัตยกรรมคอมพิวเตอร์' => $row_sum1['total_architecture'],
    'ระบบปฏิบัติการ' => $row_sum1['total_operating'],
    'การพัฒนาซอฟต์แวร์ ' => $row_sum1['total_software_development'],
    'ระบบฐานข้อมูล' => $row_sum1['total_database_systems'],
    'เครือข่ายคอมพิวเตอร์' => $row_sum1['total_computer_networks'],
    'ความปลอดภัยทางไซเบอร์' => $row_sum1['total_cybersecurity'],
    'การเรียนรู้ของเครื่องและปัญญาประดิษฐ์' => $row_sum1['total_machine_learning'],
    'ระบบฝังตัว' => $row_sum1['total_embedded_system'],
    'ทฤษฎีข้อมูลและการประมวลผลสัญญาณ' => $row_sum1['total_information_theory'],
    'คณิตศาสตร์และสถิติ' => $row_sum1['total_mathematics'],
    'หลักการวิศวกรรม' => $row_sum1['total_engineering'],
    'การประมวลผลบนระบบคลาวด์' => $row_sum1['total_cloud_computing']
];

// จัดเก็บผลรวมใน array เพื่อจัดเรียง (กลุ่มที่สอง)
$sum_fields1 = [
    'ทักษะภาษาต่างประเทศ' => $row_sum2['total_foreign_language_skills'],
    'ความเป็นผู้นำ' => $row_sum2['total_leadership'],
    'ทักษะการวิเคราะห์และแก้ปัญหา ' => $row_sum2['total_Analytical_and_problem'],
    'การมีมนุษยสัมพันธ์/ทำงานเป็นทีม' => $row_sum2['total_Interpersonal']
];

// จัดเรียง array ผลรวมจากมากไปน้อย (กลุ่มแรก)
arsort($sum_fields);

// จัดเรียง array ผลรวมจากมากไปน้อย (กลุ่มที่สอง)
arsort($sum_fields1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์จากศิษย์เก่า</title>
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
<div class="header">
                <img class="image" src="pic/logo.png">&nbsp;&nbsp;&nbsp;
                
                <div class="text">
                    <h1>รายงานข้อมูลแบบสอบถามศิษย์เก่า</h1>
                    <h3>จำนวนคนที่ทำแบบฟอร์มแล้ว</h3>
        <p> <strong><?php echo $total_responses; ?></strong> คน</p>

                </div>
               

            </div>
    
            <div class="button-group">
            <a href="admin.php" class="btn">หน้าหลัก</a>
            </div>
    
    <div class="container">

        <!-- ส่วนที่ 1: แสดงจำนวนผู้ชายและผู้หญิง -->
        <h3>ตอนที่ 1 ข้อมูลทั่วไปของผู้ตอบแบบสอบถาม</h3>
        <div class="form_sec">

            <div class="section">
                <h4>ข้อมูลเพศ</h4>
                <table>
                    <tr>
                        <th>เพศ</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_gender->num_rows > 0) {
                        while ($row = $result_gender->fetch_assoc()) {
                            echo "<tr><td>" . $row['gender'] . "</td><td>" . $row['total'] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>

            <!-- ส่วนที่ 2: แสดงจำนวนช่วงอายุ -->
            <div class="section">
                <h4>ข้อมูลช่วงอายุ</h4>
                <table>
                    <tr>
                        <th>ช่วงอายุ</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_age->num_rows > 0) {
                        while ($row = $result_age->fetch_assoc()) {
                            echo "<tr><td>" . $row['age_range'] . "</td><td>" . $row['total'] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="form_sec">
            <!-- ส่วนที่ 3: แสดงจำนวนสถานะการจ้างงาน -->
            <div class="section">
                <h4>ข้อมูลสถานะการจ้างงาน</h4>
                <table>
                    <tr>
                        <th>สถานะการจ้างงาน</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                if ($result_employment->num_rows > 0) {
                    while ($row = $result_employment->fetch_assoc()) {
                        echo "<tr><td>" . $row['employment_status'] . "</td><td>" . $row['total'] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                }
                ?>
                </table>
                
                <table>
                    <tr>
                        <th>งาน</th>
                        <th>จำนวน</th>
                    </tr>
                   <?php
                    if ($result_employment_path->num_rows > 0) {
                       
                        mysqli_data_seek($result_employment_path, 0); 
                        while ($row = $result_employment_path->fetch_assoc()) {
                         
                            if (!empty($row['occupation_path'])) {
                              
                                echo "<tr><td>" . $row['occupation_path'] . "</td><td>" . $row['total'] . "</td></tr>";
                                
                            }
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>

            <div class="section">
                <h4>ข้อมูลสถานะการจ้างงานอื่นๆ</h4>
                <table>
                    <tr>
                        <th>งานอื่นๆ</th>
                      
                    </tr>
                    <?php
                    if ($result_employment1->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_employment1, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_employment1->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['occupation'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['occupation'] ;
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>
            
        </div>
        
        <h3>ตอนที่ 2 ความพึงพอใจต่อคุณภาพหลักสูตร</h3>
        <!-- ส่วนที่ 4: ตารางค่าเฉลี่ยของฟิลด์ที่คุณระบุ -->
        <div class="section_chart">


            <p><strong>ด้านหลักสูตร</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="skillChart" style="width: 100%; height: 300px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "ความทันสมัยของเนื้อหารายวิชา",
                "เนื้อหาวิชาที่เรียนตรงกับความต้องการของตลาดแรงงาน",
                "โครงสร้างหลักสูตรสามารถศึกษาให้จบได้ภายในระยะเวลาที่กำหนด",
                "เทคโนโลยีและเครื่องมือที่ใช้ในการเรียนการสอน",
                "บูรณาการความรู้ทางทฤษฎีและปฏิบัติ",
                "พัฒนาคุณธรรมและความรับผิดชอบ",
                "ความต้องการของตลาดแรงงาน",

            ];

            var data = [
                <?php echo $average_row['avg_course_modernity']; ?>,
                <?php echo $average_row['avg_course_relevance_to_job_market']; ?>,
                <?php echo $average_row['avg_course_structure']; ?>,
                <?php echo $average_row['avg_course_technology']; ?>,
                <?php echo $average_row['avg_course_integration']; ?>,
                <?php echo $average_row['avg_course_character_development']; ?>,
                <?php echo $average_row['avg_course_demand_in_job_market']; ?>,

            ];

            var ctx = document.getElementById('skillChart').getContext('2d');
            var skillChart = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ยทักษะและความสามารถ',
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true, // ทำให้กราฟ responsive
                    indexAxis: 'y', // เปลี่ยนเป็นกราฟแนวนอน
                    scales: {
                        x: {
                            beginAtZero: false, // ไม่เริ่มที่ 0
                            min: 1, // เริ่มที่ 1
                            max: 5, // สิ้นสุดที่ 5
                            ticks: {
                                stepSize: 1, // ระยะห่างระหว่างตัวเลขบนแกน X
                                callback: function(value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <!--ด้าน2-->
        <div class="section_chart">

            <p><strong>ด้านอาจารย์ผู้สอน</strong></p>
            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="skillChart2" style="width: 100%; height: 200px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "อาจารย์เน้นการเรียนการสอนที่ให้นักศึกษาได้ฝึกปฏิบัติจริง",
                "อาจารย์มีประสบการณ์ ความรู้ในเนื้อหาวิชาที่สอนเป็นอย่างดี สามารถถ่ายทอดความรู้ให้แก่ผู้เรียน",
                "มีจรรยาบรรณในวิชาชีพ และการมีบุคลิกภาพเป็นแบบอย่างแก่นักศึกษา",
                "อาจารย์ให้คำปรึกษาด้านวิชาการและการพัฒนาบัณฑิตศึกษาได้อย่างเหมาะสม",


            ];

            var data = [
                <?php echo $average_row['avg_course_modernity']; ?>,
                <?php echo $average_row['avg_course_relevance_to_job_market']; ?>,
                <?php echo $average_row['avg_course_structure']; ?>,
                <?php echo $average_row['avg_course_technology']; ?>,
                <?php echo $average_row['avg_course_integration']; ?>,
                <?php echo $average_row['avg_course_character_development']; ?>,
                <?php echo $average_row['avg_course_demand_in_job_market']; ?>,

            ];

            var ctx = document.getElementById('skillChart2').getContext('2d');
            var skillChart2 = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ยทักษะและความสามารถ',
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true, // ทำให้กราฟ responsive
                    indexAxis: 'y', // เปลี่ยนเป็นกราฟแนวนอน
                    scales: {
                        x: {
                            beginAtZero: false, // ไม่เริ่มที่ 0
                            min: 1, // เริ่มที่ 1
                            max: 5, // สิ้นสุดที่ 5
                            ticks: {
                                stepSize: 1, // ระยะห่างระหว่างตัวเลขบนแกน X
                                callback: function(value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>


        <!--ด้าน3-->
        <div class="section_chart">
            <p><strong>ด้านสภาพแวดล้อมการเรียนรู้</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="skillChart3" style="width: 100%; height: 180px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "ห้องเรียนมีอุปกรณ์เหมาะสม เอื้อต่อการเรียนรู้ และเพียงพอต่อการเรียน",
                "ห้องปฏิบัติการมีอุปกรณ์เหมาะสม เอื้อต่อการเรียนรู้ และเพียงพอต่อการเรียน",
                "ระบบบริการสารสนเทศเหมาะสม เอื้อต่อการเรียนรู้",


            ];

            var data = [
                <?php echo $average_row['avg_course_modernity']; ?>,
                <?php echo $average_row['avg_course_relevance_to_job_market']; ?>,
                <?php echo $average_row['avg_course_structure']; ?>,
                <?php echo $average_row['avg_course_technology']; ?>,
                <?php echo $average_row['avg_course_integration']; ?>,
                <?php echo $average_row['avg_course_character_development']; ?>,
                <?php echo $average_row['avg_course_demand_in_job_market']; ?>,

            ];

            var ctx = document.getElementById('skillChart3').getContext('2d');
            var skillChart3 = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ยทักษะและความสามารถ',
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true, // ทำให้กราฟ responsive
                    indexAxis: 'y', // เปลี่ยนเป็นกราฟแนวนอน
                    scales: {
                        x: {
                            beginAtZero: false, // ไม่เริ่มที่ 0
                            min: 1, // เริ่มที่ 1
                            max: 5, // สิ้นสุดที่ 5
                            ticks: {
                                stepSize: 1, // ระยะห่างระหว่างตัวเลขบนแกน X
                                callback: function(value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>
        <h3>ตอนที่ 3 ทักษะเพิ่มเติมสำหรับหลักสูตร</h3>
        <h4>ควรเพิ่มหรือเน้นทักษะด้านใดบ้าง เพื่อตอบสนองต่อความต้องการของหน่วยงาน/องค์กรหรือผู้ใช้บัณฑิต</h4>
        <!-- ตารางผลรวมของฟิลด์ Architecture, Operating, Software Development, etc. -->
        <div class="form_sec">
            <div class="section">

                <h4>ทักษะเพิ่มเติมสำหรับหลักสูตร</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>ผลรวม</th>
                    </tr>
                    <?php
                    foreach ($sum_fields1 as $field => $total) {
                        echo "<tr>";
                        echo "<td>" . $field . "</td>";
                        echo "<td>" . $total . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <!-- ส่วนที่ 5: แสดงข้อมูลจากฟิลด์ Add_Knowledge พร้อมวันที่ -->
            <div class="section">
                <h4>ข้อเสนอแนะอื่นๆ</h4>
                <table>
                    <tr>
                        <th>ข้อความ</th>
                    </tr>
                    <?php
                    if ($result_knowledge->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_knowledge, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_knowledge->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['Add_Knowledge'])) {
                                echo "<tr>";
                                echo "<td>" . $row['Add_Knowledge'] . "</td>"; // แสดงข้อเสนอแนะจาก suggestions
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <h4>นักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีความรู้ (Knowledge) เรื่องใดบ้าง</h4>
        <div class="form_sec">

            <div class="section">

                <h4>นักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีความรู้เรื่องใดบ้าง</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>ผลรวม</th>
                    </tr>
                    <?php
                    foreach ($sum_fields as $field => $total) {
                        echo "<tr>";
                        echo "<td>" . $field . "</td>";
                        echo "<td>" . $total . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <!-- ส่วนที่ 6: แสดงข้อมูลจากฟิลด์ suggestions แยกต่างหาก -->
            <div class="section">
                <h4>ข้อเสนอแนะอื่นๆ</h4>
                <table>
                    <tr>
                        <th>ข้อเสนอแนะอื่นๆ</th>
                    </tr>
                    <?php
                    if ($result_knowledge->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_knowledge, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_knowledge->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['Additional_skills'])) {
                                echo "<tr>";
                                echo "<td>" . $row['Additional_skills'] . "</td>"; // แสดงข้อเสนอแนะจาก suggestions
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
        <h3>ตอนที่ 4 ข้อคิดเห็นหรือข้อเสนอแนะเพิ่มเติม</h3>
        <div class="form_sec"><!-- ส่วนที่ 7: แสดงข้อมูลจากฟิลด์ Additional_skills แยกต่างหาก -->
            <div class="section">
                <h4>ข้อคิดเห็นหรือข้อเสนอแนะเพิ่มเติม</h4>
                <table>
                    <tr>

                        <th>ข้อเสนอแนะ</th>
                    </tr>
                    <?php
                    if ($result_knowledge->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_knowledge, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_knowledge->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['suggestions'])) {
                                echo "<tr>";
                                echo "<td>" . $row['suggestions'] . "</td>"; // แสดงข้อเสนอแนะจาก suggestions
                                echo "</tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>


</body>

</html>

<?php
$conn->close();
?>
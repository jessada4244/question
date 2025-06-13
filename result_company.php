<?php
include 'db.php';


session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}


$sql_count = "SELECT COUNT(*) AS total FROM survey_responses";
$result_count = $conn->query($sql_count);
if ($result_count) {
    $row_count = $result_count->fetch_assoc();
    $total_responses = $row_count['total']; // จำนวนทั้งหมดของคนที่ทำแบบฟอร์ม
} else {
    die("เกิดข้อผิดพลาดในการดึงข้อมูล: " . $conn->error);
}





// นับจำนวนผู้ชายและผู้หญิง
$sql_gender_count = "SELECT gender, COUNT(*) AS total FROM survey_responses GROUP BY gender";
$result_gender = $conn->query($sql_gender_count);
//
// นับจำนวนช่วงอายุ
$sql_age_count = "SELECT age_level, COUNT(*) AS total FROM survey_responses GROUP BY age_level";
$result_level_age = $conn->query($sql_age_count);


$sql_age_count = "SELECT education_level, COUNT(*) AS total FROM survey_responses GROUP BY education_level";
$result_age = $conn->query($sql_age_count);

// นับจำนวนชื่องาน
$sql_job_path_count = "SELECT job_path, COUNT(*) AS total FROM survey_responses GROUP BY job_path";
$result_job_path = $conn->query($sql_job_path_count);

//นับจำนวนงานอื่นๆ 
// นับจำนวนชื่องาน
$sql_job_type_count = "SELECT job_type, COUNT(*) AS total FROM survey_responses GROUP BY job_type";
$result_job_type = $conn->query($sql_job_type_count);




//sum
$sql_sum2 = "SELECT 
    SUM(Professional_skills) AS total_Professional_skills,
    SUM(theoretical_knowledge) AS total_theoretical_knowledge,
    SUM(Practical_skills) AS total_Practical_skills,
    SUM(Information_skills) AS total_Information_skills,
    SUM(Communication_skills) AS total_Communication_skills,
    SUM(thinking_skill) AS total_thinking_skill,
    SUM(Ability_work) AS total_Ability_work,
    SUM(Management_ability) AS total_Management_ability,
    SUM(develop_skill) AS total_develop_skill,
    SUM(Honest) AS total_Honest,
    SUM(punctual) AS total_punctual,
    SUM(hard_working) AS total_hard_working
FROM survey_responses";

$result_sum2 = $conn->query($sql_sum2);
if (!$result_sum2) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL กลุ่มที่สอง: " . $conn->error);
}

$row_sum2 = $result_sum2->fetch_assoc();

$sum_fields2 = [
    'ทักษะด้านวิชาชีพ' => $row_sum2['total_Professional_skills'],
    'ความรู้ทางทฤษฎี' => $row_sum2['total_theoretical_knowledge'],
    'ทักษะด้านการปฏิบัติ ' => $row_sum2['total_Practical_skills'],
    'ทักษะด้านเทคโนโลยีสารสนเทศ' => $row_sum2['total_Information_skills'],
    'ทักษะด้านการสื่อสาร' => $row_sum2['total_Communication_skills'],
    'ความสามารถในการคิดวิเคราะห์' => $row_sum2['total_thinking_skill'],
    'ความสามารถในการทำงานร่วมกับผู้อื่น' => $row_sum2['total_Ability_work'],
    'ความสามารถในการบริหารจัดการ' => $row_sum2['total_Management_ability'],
    'ความสามารถในการพัฒนาตนเอง' => $row_sum2['total_develop_skill'],
    'มีคุณธรรม จริยธรรม ซื่อสัตย์สุจริต' => $row_sum2['total_Honest'],
    'มีวินัย ตรงต่อเวลา และความรับผิดชอบ' => $row_sum2['total_punctual'],
    'ขยัน อดทน' => $row_sum2['total_hard_working'],
];

arsort($sum_fields2);


$sql_Add_Highlights_count_ect = "SELECT Add_Highlights,  COUNT(*) AS total FROM survey_responses GROUP BY Add_Highlights";
$result_Add_Highlights1 = $conn->query($sql_Add_Highlights_count_ect); 


//sum
//AVG
// คำนวณค่าเฉลี่ยของฟิลด์ที่ต้องการ
$sql_average = "SELECT 
    AVG(course_content) AS avg_course_content,
    AVG(labor_market) AS avg_labor_market,
    AVG(practical_knowledge) AS avg_practical_knowledge,
    AVG(Moderntools_teaching) AS avg_Moderntools_teaching,
    AVG(Studentshave_knowledge) AS avg_Studentshave_knowledge,
    AVG(Students_work) AS avg_Students_work
FROM survey_responses";

// ตรวจสอบว่าคำสั่ง SQL ถูกต้องหรือไม่
$result_average = $conn->query($sql_average);
if (!$result_average) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

// ดึงข้อมูลค่าเฉลี่ย
$average_row = $result_average->fetch_assoc();
//AVG
//sum
$sql_sum3 = "SELECT 
    SUM(Professional_skills_add) AS total_Professional_skills_add,
    SUM(theoretical_knowledge_add) AS total_theoretical_knowledge_add,
    SUM(Practical_skill_add) AS total_Practical_skill_add,
    SUM(Information_skills_add) AS total_Information_skills_add,
    SUM(Communication_skills_add) AS total_Communication_skills_add,
    SUM(thinking_skill_add) AS total_thinking_skill_add,
    SUM(Ability_work_add) AS total_Ability_work_add,
    SUM(Management_ability_add) AS total_Management_ability_add,
    SUM(develop_skill_add) AS total_develop_skill_add,
    SUM(Honest_add) AS total_Honest_add,
    SUM(punctual_add) AS total_punctual_add,
    SUM(hard_working_add) AS total_hard_working_add
FROM survey_responses";

$result_sum3 = $conn->query($sql_sum3);
if (!$result_sum3) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL กลุ่มที่สอง: " . $conn->error);
}

$row_sum3 = $result_sum3->fetch_assoc();

$sum_fields3 = [
    'ทักษะด้านวิชาชีพ' => $row_sum3['total_Professional_skills_add'],
    'ความรู้ทางทฤษฎี' => $row_sum3['total_theoretical_knowledge_add'],
    'ทักษะด้านการปฏิบัติ ' => $row_sum3['total_Practical_skill_add'],
    'ทักษะด้านเทคโนโลยีสารสนเทศ' => $row_sum3['total_Information_skills_add'],
    'ทักษะด้านการสื่อสาร' => $row_sum3['total_Communication_skills_add'],
    'ความสามารถในการคิดวิเคราะห์' => $row_sum3['total_thinking_skill_add'],
    'ความสามารถในการทำงานร่วมกับผู้อื่น' => $row_sum3['total_Ability_work_add'],
    'ความสามารถในการบริหารจัดการ' => $row_sum3['total_Management_ability_add'],
    'ความสามารถในการพัฒนาตนเอง' => $row_sum3['total_develop_skill_add'],
    'มีคุณธรรม จริยธรรม ซื่อสัตย์สุจริต' => $row_sum3['total_Honest_add'],
    'มีวินัย ตรงต่อเวลา และความรับผิดชอบ' => $row_sum3['total_punctual_add'],
    'ขยัน อดทน' => $row_sum3['total_hard_working_add'],
];

arsort($sum_fields3);


$sql_Add_Highlights_count_add = "SELECT Highlights_add,  COUNT(*) AS total FROM survey_responses GROUP BY Highlights_add";
$result_Add_Highlights2 = $conn->query($sql_Add_Highlights_count_add); 


//sum


//sum
$sql_sum4 = "SELECT 
    SUM(commi_skills) AS total_commi_skills,
    SUM(leadership) AS total_leadership,
    SUM(assertiveness) AS total_assertiveness,
    SUM(self_study) AS total_self_study,
    SUM(Problem_solving) AS total_Problem_solving,
    SUM(Manage_time) AS total_Manage_time,
    SUM(teamwork) AS total_teamwork,
    SUM(writing_skills) AS total_writing_skills

FROM survey_responses";

$result_sum4 = $conn->query($sql_sum4);
if (!$result_sum4) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL กลุ่มที่สอง: " . $conn->error);
}

$row_sum4 = $result_sum4->fetch_assoc();

$sum_fields4 = [
    'ทักษะการสื่อสาร' => $row_sum4['total_commi_skills'],
    'ความเป็นผู้นำ' => $row_sum4['total_leadership'],
    'ความกล้าแสดงออก ' => $row_sum4['total_assertiveness'],
    'ทักษะการเรียนรู้ด้วยตนเอง' => $row_sum4['total_self_study'],
    'ทักษะการแก้ปัญหา' => $row_sum4['total_Problem_solving'],
    'ทักษะการวางแผนและจัดการเวลา' => $row_sum4['total_Manage_time'],
    'การทำงานเป็นทีม' => $row_sum4['total_teamwork'],
    'ทักษะการเขียนรายงาน' => $row_sum4['total_writing_skills']

];

arsort($sum_fields4);


$sql_Add_add_skills = "SELECT add_skills,  COUNT(*) AS total FROM survey_responses GROUP BY add_skills";
$result_add_skills = $conn->query($sql_Add_add_skills); 


//sum


//sum
$sql_sum5 = "SELECT 
    SUM(puter_arch) AS total_puter_arch,
    SUM(Operating_sys) AS total_Operating_sys,
    SUM(Software_Deve) AS total_Software_Deve,
    SUM(Database_Sys) AS total_Database_Sys,
    SUM(Computer_Net) AS total_Computer_Net,
    SUM(Cybers) AS total_Cybers,
    SUM(Machine_Learn) AS total_Machine_Learn,
    SUM(Embedded_Sys) AS total_Embedded_Sys,
    SUM(Information_The) AS total_Information_The,
    SUM(Mathematics) AS total_Mathematics,
    SUM(Engineering) AS total_Engineering,
    SUM(Cloud) AS total_Cloud
    

FROM survey_responses";

$result_sum5 = $conn->query($sql_sum5);
if (!$result_sum5) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL กลุ่มที่สอง: " . $conn->error);
}

$row_sum5 = $result_sum5->fetch_assoc();

$sum_fields5 = [
    'สถาปัตยกรรมคอมพิวเตอร์ (Computer Architecture)' => $row_sum5['total_puter_arch'],
    'ระบบปฏิบัติการ (Operating Systems)' => $row_sum5['total_Operating_sys'],
    'การพัฒนาซอฟต์แวร์ (Software Development) ' => $row_sum5['total_Software_Deve'],
    'ระบบฐานข้อมูล (Database Systems)' => $row_sum5['total_Database_Sys'],
    'เครือข่ายคอมพิวเตอร์ (Computer Networks)' => $row_sum5['total_Computer_Net'],
    'ความปลอดภัยทางไซเบอร์ (Cybersecurity)' => $row_sum5['total_Cybers'],
    'การเรียนรู้ของเครื่องและปัญญาประดิษฐ์ (Machine Learning and Artificial Intelligence)' => $row_sum5['total_Machine_Learn'],
    'ระบบฝังตัว (Embedded Systems)' => $row_sum5['total_Embedded_Sys'],
    'ทฤษฎีข้อมูลและการประมวลผลสัญญาณ (Information Theory and Signal Processing)' => $row_sum5['total_Information_The'],
    'คณิตศาสตร์และสถิติ (Mathematics and Statistics)' => $row_sum5['total_Mathematics'],
    'หลักการวิศวกรรม (Engineering Principles)' => $row_sum5['total_Engineering'],
    'การประมวลผลบนระบบคลาวด์ (Cloud Computing)' => $row_sum5['total_Cloud']
   

];

arsort($sum_fields5);


$sql_add_Knowledge = "SELECT add_Knowledge,  COUNT(*) AS total FROM survey_responses GROUP BY add_Knowledge";
$result_add_Knowledge = $conn->query($sql_add_Knowledge); 


//sum



$sql_stu = "SELECT Additional_suggestions FROM survey_responses";
$result_stu = $conn->query($sql_stu);
if (!$result_stu) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานแบบสอบถามสถานประกอบการ</title>
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <div class="header">
        <img class="image" src="pic/logo.png">&nbsp;&nbsp;&nbsp;

        <div class="text">
            <h1>รายงานข้อมูลแบบสอบพึงพอใจของสถานประกอบการ</h1>
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
            <div class="section">
                <h4>ช่วงอายุ</h4>
                <table>
                    <tr>
                        <th>ช่วง</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_level_age->num_rows > 0) {
                        while ($row = $result_level_age->fetch_assoc()) {
                            echo "<tr><td>" . $row['age_level'] . "</td><td>" . $row['total'] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>
            </div>
            <!-- ส่วนที่ 2: แสดงจำนวนช่วงอายุ -->
            <div class="section">
                <h4>วุฒิการศึกษาเดิม</h4>
                <table>
                    <tr>
                        <th>วุฒิการศึกษา</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_age->num_rows > 0) {
                        while ($row = $result_age->fetch_assoc()) {
                            echo "<tr><td>" . $row['education_level'] . "</td><td>" . $row['total'] . "</td></tr>";
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
                <h4>งาน</h4>
                <table>
                    <tr>
                        <th>งาน</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_job_path->num_rows > 0) {
                        while ($row = $result_job_path->fetch_assoc()) {
                            // ตรวจสอบว่ามีข้อมูลใน job_path หรือไม่
                            if (!empty($row['job_path'])) {
                                echo "<tr><td>" . $row['job_path'] . "</td><td>" . $row['total'] . "</td></tr>";
                            }
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>


            </div>

            <div class="section">
                <h4>งานอื่นๆ</h4>
                <table>
                    <tr>
                        <th>งาน</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_job_type->num_rows > 0) {

                        mysqli_data_seek($result_job_type, 0);
                        while ($row = $result_job_type->fetch_assoc()) {

                            if (!empty($row['job_type'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['job_type'] . "</td><td>" . $row['total'] . "</td></tr>";
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

        <h3>ตอนที่ 2 ลักษณะของนักศึกษา</h3>
        <h4>1.จุดเด่นของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์</h4>
        <!-- ตารางผลรวมของฟิลด์ Architecture, Operating, Software Development, etc. -->
        <div class="form_sec">
            <div class="section">

                <h4>จุดเด่นของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์</h4>
                
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>ผลรวม</th>
                    </tr>
                    <?php
                    foreach ($sum_fields2 as $field => $total) {
                        echo "<tr>";
                        echo "<td>" . $field . "</td>";
                        echo "<td>" . $total . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>          
            <div class="section">
                <h4>ข้อเสนอแนะ (อื่นๆ)</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                      
                    </tr>
                    <?php
                    if ($result_Add_Highlights1->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_Add_Highlights1, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_Add_Highlights1->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['Add_Highlights'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['Add_Highlights'] ;
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

                    
                    <h4>2.จุดที่ควรปรับปรุงของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์</h4>

                    <div class="form_sec">
            <div class="section">

                <h4>จุดเด่นของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>ผลรวม</th>
                    </tr>
                    <?php
                    foreach ($sum_fields3 as $field => $total) {
                        echo "<tr>";
                        echo "<td>" . $field . "</td>";
                        echo "<td>" . $total . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>          
            <div class="section">
                <h4>ข้อเสนอแนะ (อื่นๆ)</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                      
                    </tr>
                    <?php
                    if ($result_Add_Highlights2->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_Add_Highlights2, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_Add_Highlights2->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['Highlights_add'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['Highlights_add'] ;
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

                    <div class="section_chart">
                    <h3>ตอนที่ 3 ความพึงพอใจต่อคุณภาพหลักสูตร</h3>
                    <h4>เนื้อหาหลักสูตร</h4>
            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="skillChart3" style="width: 100%; height: 180px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "ความทันสมัยของเนื้อหารายวิชา",
                "เนื้อหาวิชาที่เรียนตรงกับความต้องการของตลาดแรงงาน",
                "การบูรณาการความรู้ทางทฤษฎีและปฏิบัติ",
                "ความทันสมัยของเทคโนโลยีและเครื่องมือที่ใช้ในการเรียนการสอน"


            ];

            var data = [
                <?php echo $average_row['avg_course_content']; ?>,
                <?php echo $average_row['avg_labor_market']; ?>,
                <?php echo $average_row['avg_practical_knowledge']; ?>,
                <?php echo $average_row['avg_Moderntools_teaching']; ?>
               

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

<div class="section_chart">
                    
                    <h4>ผลลัพธ์ของหลักสูตร</h4>
            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="Chart4" style="width: 100%; height: 120px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "นักศึกษามีความรู้ความสามารถตรงตามมาตรฐานวิชาชีพ",
                "นักศึกษาสามารถนำความรู้ไปประยุกต์ใช้ในการทำงานได้จริง",
             


            ];

            var data = [
                <?php echo $average_row['avg_Studentshave_knowledge']; ?>,
                <?php echo $average_row['avg_Students_work']; ?>
                
               

            ];

            var ctx = document.getElementById('Chart4').getContext('2d');
            var Chart4 = new Chart(ctx, {
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




                    
<h3>ตอนที่ 4 ความต้องการของผู้มีส่วนได้ส่วนเสีย (Stakeholders) ที่มีต่อการพัฒนาคุณภาพหลักสูตร</h3>
<h4>1. นักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีทักษะSoft skills ในเรื่องใดบ้าง</h4>

                    <div class="form_sec">
            <div class="section">

                <h4>จุดเด่นของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>ผลรวม</th>
                    </tr>
                    <?php
                    foreach ($sum_fields4 as $field => $total) {
                        echo "<tr>";
                        echo "<td>" . $field . "</td>";
                        echo "<td>" . $total . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>           
            <div class="section">
                <h4>ข้อเสนอแนะ (อื่นๆ)</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                      
                    </tr>
                    <?php
                    if ($result_add_skills->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_add_skills, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_add_skills->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['add_skills'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['add_skills'] ;
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


                    <h4>2. นักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีความรู้ (Knowledge) เรื่องใดบ้าง</h4>

                    <div class="form_sec">
            <div class="section">

                <h4>นักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีความรู้ (Knowledge) เรื่องใดบ้าง</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                        <th>ผลรวม</th>
                    </tr>
                    <?php
                    foreach ($sum_fields5 as $field => $total) {
                        echo "<tr>";
                        echo "<td>" . $field . "</td>";
                        echo "<td>" . $total . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>          
            <div class="section">
                <h4>ข้อเสนอแนะ (อื่นๆ)</h4>
                <table>
                    <tr>
                        <th>หัวข้อ</th>
                      
                    </tr>
                    <?php
                    if ($result_add_Knowledge->num_rows > 0) {
                        // ลูปเพื่อแสดงผลฟิลด์ suggestions
                        mysqli_data_seek($result_add_Knowledge, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_add_Knowledge->fetch_assoc()) {
                            // ตรวจสอบว่าฟิลด์ suggestions ไม่ใช่ค่าว่างหรือ NULL
                            if (!empty($row['add_Knowledge'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['add_Knowledge'] ;
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



        <h3>
            <h3>ตอนที่ 5 ข้อคิดเห็นหรือข้อเสนอแนะเพิ่มเติม</h3>
        </h3>
        <div class="form_sec"><!-- ส่วนที่ 7: แสดงข้อมูลจากฟิลด์ Additional_skills แยกต่างหาก -->
            <div class="section">
                <h4>ข้อคิดเห็นหรือข้อเสนอแนะเพิ่มเติม</h4>
                <table>
                    <tr>

                        <th>ข้อเสนอแนะ</th>
                    </tr>
                    <?php
                    if ($result_stu->num_rows > 0) {

                        mysqli_data_seek($result_stu, 0); // รีเซ็ต pointer ของ result set
                        while ($row = $result_stu->fetch_assoc()) {

                            if (!empty($row['Additional_suggestions'])) {
                                echo "<tr>";
                                echo "<td>" . $row['Additional_suggestions'] . "</td>"; // แสดงข้อเสนอแนะจาก suggestions
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
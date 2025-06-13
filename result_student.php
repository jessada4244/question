<?php
include 'db.php';


session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}


// นับจำนวนผู้ที่ทำแบบฟอร์ม
$sql_count = "SELECT COUNT(*) AS total FROM expectations";
$result_count = $conn->query($sql_count);
if ($result_count) {
    $row_count = $result_count->fetch_assoc();
    $total_responses = $row_count['total']; // จำนวนทั้งหมดของคนที่ทำแบบฟอร์ม
} else {
    die("เกิดข้อผิดพลาดในการดึงข้อมูล: " . $conn->error);
}





// นับจำนวนผู้ชายและผู้หญิง
$sql_gender_count = "SELECT gender, COUNT(*) AS total FROM expectations GROUP BY gender";
$result_gender = $conn->query($sql_gender_count);

// นับจำนวนช่วงอายุ
$sql_age_count = "SELECT education_level, COUNT(*) AS total FROM expectations GROUP BY education_level";
$result_age = $conn->query($sql_age_count);

// นับจำนวนชื่อโรงเรียน
$sql_school_count = "SELECT school, COUNT(*) AS total FROM expectations GROUP BY school";
$result_school = $conn->query($sql_school_count);

//นับจำนวนprovince
$sql_province_count = "SELECT province, COUNT(*) AS total FROM expectations GROUP BY province";
$result_province = $conn->query($sql_province_count);

$sql_average = "SELECT 
    AVG(university_reputation) AS avg_university_reputation,
    AVG(Location_university) AS avg_Location_university,
    AVG(public_relations) AS avg_public_relations,
    AVG(curriculum) AS avg_curriculum,
    AVG(teac_date) AS avg_teac_date,
    AVG(number_graduates) AS avg_number_graduates,
    AVG(cost_education) AS avg_cost_education,
    AVG(quotas) AS avg_quotas,
    AVG(Idol) AS avg_Idol,
    AVG(Receive_advice) AS avg_Receive_advice
FROM expectations";

$result_average = $conn->query($sql_average);
if (!$result_average) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

$average_row = $result_average->fetch_assoc();
$sql_average1 = "SELECT 
    AVG(labor_market) AS avg_labor_market,
    AVG(extra_curricular) AS avg_extra_curricular,
    AVG(ethical_aspects) AS avg_ethical_aspects
  
FROM expectations";

// ตรวจสอบว่าคำสั่ง SQL ถูกต้องหรือไม่
$result_average1 = $conn->query($sql_average1);
if (!$result_average1) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}
$average_row1 = $result_average1->fetch_assoc();

$sql_average2 = "SELECT 
    AVG(teacher_experience) AS avg_teacher_experience,
    AVG(transfer_knowledge) AS avg_transfer_knowledge,
    AVG(real_practice) AS avg_real_practice
FROM expectations";

$result_average2 = $conn->query($sql_average2);
if (!$result_average2) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

$average_row2 = $result_average2->fetch_assoc();

$sql_average3 = "SELECT 
    AVG(school_building) AS avg_school_building,
    AVG(environment) AS avg_environment,
    AVG(computer) AS avg_computer,
    AVG(network_system) AS avg_network_system, 
    AVG(modernization) AS avg_modernization
FROM expectations";

$result_average3 = $conn->query($sql_average3);
if (!$result_average3) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

$average_row3 = $result_average3->fetch_assoc();

$sql_average4 = "SELECT 
    AVG(Programming) AS avg_Programming,
    AVG(Machine) AS avg_Machine,
    AVG(Data_Science) AS avg_Data_Science,
    AVG(network_sys) AS avg_network_sys, 
    AVG(IoT) AS avg_IoT,
    AVG(problem_solving) AS avg_problem_solving,
    AVG(teamwork) AS avg_teamwork,
    AVG(presentation) AS avg_presentation
FROM expectations";

$result_average4 = $conn->query($sql_average4);
if (!$result_average4) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

$average_row4 = $result_average4->fetch_assoc();

$sql_average5 = "SELECT 
    AVG(continue_education) AS avg_continue_education,
    AVG(work_government) AS avg_work_government,
    AVG(work_privateagency) AS avg_work_privateagency
FROM expectations";



$result_average5 = $conn->query($sql_average5);
if (!$result_average5) {
    die("เกิดข้อผิดพลาดในคำสั่ง SQL: " . $conn->error);
}

$average_row5 = $result_average5->fetch_assoc();


$sql_stu = "SELECT add_stu FROM expectations";
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
    <title>รายงานข้อมูลแบบสอบพึงพอใจของนักเรียน</title>
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <div class="header">
        <img class="image" src="pic/logo.png">&nbsp;&nbsp;&nbsp;

        <div class="text">
            <h1>รายงานข้อมูลแบบสอบถามของนักเรียน</h1>
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
                <h4>โรงเรียน/สถาบันการศึกษาเดิม</h4>
                <table>
                    <tr>
                        <th>ชื่อสถาบัน</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_school->num_rows > 0) {
                        while ($row = $result_school->fetch_assoc()) {
                            echo "<tr><td>" . $row['school'] . "</td><td>" . $row['total'] . "</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>ไม่มีข้อมูล</td></tr>";
                    }
                    ?>
                </table>


            </div>

            <div class="section">
                <h4>จังหวัด</h4>
                <table>
                    <tr>
                        <th>ชื่อจังหวัด</th>
                        <th>จำนวน</th>
                    </tr>
                    <?php
                    if ($result_province->num_rows > 0) {

                        mysqli_data_seek($result_province, 0);
                        while ($row = $result_province->fetch_assoc()) {

                            if (!empty($row['province'])) {
                                echo "<tr>";
                                echo "<tr><td>" . $row['province'] . "</td><td>" . $row['total'] . "</td></tr>";
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


            <p><strong>ด้านปัจจัยที่มีผลต่อการเลือกเรียนหลักสูตร</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="skillChart" style="width: 100%; height: 400px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "ชื่อเสียงของมหาวิทยาลัย",
                "ที่ตั้งของมหาวิทยาลัย",
                "การประชาสัมพันธ์จากมหาวิทยาลัย คณะ หลักสูตร",
                "หลักสูตรมีความทันสมัย",
                "การจัดการเรียนการสอนได้มาตรฐาน",
                "จำนวนผู้สำเร็จการศึกษาได้งานทำสูง",
                "ค่าใช้จ่ายในการศึกษามีความเหมาะสม",
                "การให้โควตา",
                "มีบุคคลที่ประทับใจ (Idol) เป็นศิษย์เก่า",
                "ได้รับคำแนะนำจากผู้ปกครอง/เพื่อน/รุ่นพี่/ครูแนะแนว"

            ];

            var data = [
                <?php echo $average_row['avg_university_reputation']; ?>,
                <?php echo $average_row['avg_Location_university']; ?>,
                <?php echo $average_row['avg_public_relations']; ?>,
                <?php echo $average_row['avg_curriculum']; ?>,
                <?php echo $average_row['avg_teac_date']; ?>,
                <?php echo $average_row['avg_number_graduates']; ?>,
                <?php echo $average_row['avg_cost_education']; ?>,
                <?php echo $average_row['avg_quotas']; ?>,
                <?php echo $average_row['avg_Idol']; ?>,
                <?php echo $average_row['avg_Receive_advice']; ?>

            ];

            var ctx = document.getElementById('skillChart').getContext('2d');
            var skillChart = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ย',
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
                                callback: function (value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <div class="section_chart">


            <p><strong>ด้านความคาดหวังที่มีต่อหลักสูตร</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="StudChart1" style="width: 100%; height: 150px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "หลักสูตรมีความสอดคล้องกับความต้องการของตลาดแรงงาน",
                "มีกิจกรรมเสริมหลักสูตรฯ ที่เป็นประโยชน์ต่อนักศึกษา",
                "มีกิจกรรมการเรียนการสอนที่ส่งเสริมนักศึกษาด้านคุณธรรมจริยธรรม และทักษะที่จำเป็นต่อการเรียนรู้"


            ];

            var data = [
                <?php echo $average_row1['avg_labor_market']; ?>,
                <?php echo $average_row1['avg_extra_curricular']; ?>,
                <?php echo $average_row1['avg_ethical_aspects']; ?>


            ];

            var ctx = document.getElementById('StudChart1').getContext('2d');
            var StudChart1 = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ย',
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
                                callback: function (value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <div class="section_chart">


            <p><strong>ด้านความคาดหวังที่มีต่ออาจารย์ผู้สอน</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="StudChart2" style="width: 100%; height: 150px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "อาจารย์มีประสบการณ์ ความรู้ในเนื้อหาวิชาที่สอนเป็นอย่างดี",
                "สามารถถ่ายทอดความรู้ และใช้สื่ออุปกรณ์การสอน ได้อย่างเหมาะสม",
                "อาจารย์เน้นการเรียนการสอนที่ให้นักศึกษาได้ฝึกปฏิบัติจริง"


            ];

            var data = [
                <?php echo $average_row2['avg_teacher_experience']; ?>,
                <?php echo $average_row2['avg_transfer_knowledge']; ?>,
                <?php echo $average_row2['avg_real_practice']; ?>


            ];

            var ctx = document.getElementById('StudChart2').getContext('2d');
            var StudChart1 = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ย',
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
                                callback: function (value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <div class="section_chart">


            <p><strong>ด้านความคาดหวังต่อการให้บริการทางการศึกษา</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="StudChart3" style="width: 100%; height: 200px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "มีอาคารเรียน ห้องเรียน ห้องปฏิบัติการเพียงพอ",
                "มีสภาพแวดล้อม อาคารสถานที่ ที่เหมาะสมต่อการเรียนรู้",
                "มีเครื่องคอมพิวเตอร์ที่ใช้ในการจัดการเรียนการสอนและการสืบค้นข้อมูลได้อย่างทั่วถึงและมีประสิทธิภาพ",
                "การให้บริการระบบเครือข่ายอินเทอร์เน็ตและระบบ Wi fi ได้อย่างทั่วถึงและมีประสิทธิภาพ",
                "ความทันสมัยของอุปกรณ์ในห้องปฏิบัติการ"


            ];

            var data = [
                <?php echo $average_row3['avg_school_building']; ?>,
                <?php echo $average_row3['avg_environment']; ?>,
                <?php echo $average_row3['avg_computer']; ?>,
                <?php echo $average_row3['avg_network_system']; ?>,
                <?php echo $average_row3['avg_modernization']; ?>


            ];

            var ctx = document.getElementById('StudChart3').getContext('2d');
            var StudChart1 = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ย',
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
                                callback: function (value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>



        <div class="section_chart">


            <p><strong>ด้านความคาดหวังด้านทักษะที่จะได้รับ</strong></p>

            <!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
            <canvas id="studer1" style="width: 100%; height: 300px;"></canvas>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var labels = [
                "การเขียนโปรแกรม (Programming)",
                "ปัญญาประดิษฐ์และการเรียนรู้ของเครื่อง (Artificial Intelligence and Machine Learning)",
                "วิทยาการข้อมูลและการวิเคราะห์ข้อมูล (Data Science and Data Analytics)",
                "การสร้างและดูแลระบบเครือข่ายคอมพิวเตอร์",
                "การพัฒนาและควบคุมอุปกรณ์ IoT",
                "การแก้ปัญหาอย่างเป็นระบบ",
                "การทำงานเป็นทีม",
                "การสื่อสารและการนำเสนอ"
            ];

            var data = [
                <?php echo $average_row4['avg_Programming']; ?>,
                <?php echo $average_row4['avg_Machine']; ?>,
                <?php echo $average_row4['avg_Data_Science']; ?>,
                <?php echo $average_row4['avg_network_sys']; ?>,
                <?php echo $average_row4['avg_IoT']; ?>,
                <?php echo $average_row4['avg_problem_solving']; ?>,
                <?php echo $average_row4['avg_teamwork']; ?>,
                <?php echo $average_row4['avg_presentation']; ?>

            ];

            var ctx = document.getElementById('studer1').getContext('2d');
            var StudChart1 = new Chart(ctx, {
                type: 'bar', // ประเภทของกราฟ bar แนวนอน
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'ค่าเฉลี่ย',
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
                                callback: function (value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            });
        </script>

<div class="section_chart">


<p><strong>ด้านความคาดหวังด้านการศึกษาต่อ/ได้งานทำ</strong></p>

<!-- ปรับ canvas ให้ขยายตามความกว้างของ container และมีสไตล์ในตัว -->
<canvas id="StudChart5" style="width: 100%; height: 150px;"></canvas>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var labels = [
    "ต้องการศึกษาต่อในระดับที่สูงขึ้น",
    "ต้องการทำงานในหน่วยงานของรัฐ",
    "ต้องการทำงานในหน่วยงานของเอกชน"
];

var data = [
    <?php echo $average_row5['avg_continue_education']; ?>,
    <?php echo $average_row5['avg_work_government']; ?>,
    <?php echo $average_row5['avg_work_privateagency']; ?>
];


var ctx = document.getElementById('StudChart5').getContext('2d');
var StudChart5 = new Chart(ctx, {
    type: 'bar', // ประเภทของกราฟ bar แนวนอน
    data: {
        labels: labels,
        datasets: [{
            label: 'ค่าเฉลี่ย',
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
                    callback: function (value) { // แสดงตัวเลขเต็ม (1, 2, 3, 4, 5)
                        return Number.isInteger(value) ? value : '';
                    }
                }
            }
        }
    }
});
</script>



        <h3>  <h3>ตอนที่ 3 ความคาดหวังเพิ่มเติมนอกเหนือจากที่ปรากฎข้างต้น</h3></h3>
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
                         
                            if (!empty($row['add_stu'])) {
                                echo "<tr>";
                                echo "<td>" . $row['add_stu'] . "</td>"; // แสดงข้อเสนอแนะจาก suggestions
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
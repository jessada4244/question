<?php
// เรียกไฟล์เชื่อมต่อฐานข้อมูล
include 'db.php';

// ตรวจสอบว่ามีการส่งฟอร์มมาหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับค่าจากฟอร์ม
    $gender = $_POST['gender'];
    $age_level = $_POST['age_level'];
    $education_level = $_POST['education_level'];
    $job_type = $_POST['job_type'];
    $other_job = !empty($_POST['other_job']) ? $_POST['other_job'] : NULL;
    
    // รวมค่าจาก checkbox ในจุดเด่นของนักศึกษา
    $highlightstu = implode(',', array_filter([
        isset($_POST['้highlightstu1']) ? 'ทักษะด้านวิชาชีพ' : NULL,
        isset($_POST['้highlightstu2']) ? 'ความรู้ทางทฤษฎี' : NULL,
        isset($_POST['้highlightstu3']) ? 'ทักษะด้านการปฏิบัติ' : NULL,
        isset($_POST['้highlightstu4']) ? 'ทักษะด้านเทคโนโลยีสารสนเทศ' : NULL,
        isset($_POST['้highlightstu5']) ? 'ทักษะด้านการสื่อสาร' : NULL,
        isset($_POST['้highlightstu6']) ? 'ความสามารถในการคิดวิเคราะห์' : NULL,
        isset($_POST['้highlightstu7']) ? 'ความสามารถในการทำงานร่วมกับผู้อื่น' : NULL,
        isset($_POST['้highlightstu8']) ? 'ความสามารถในการบริหารจัดการ' : NULL,
        isset($_POST['้highlightstu9']) ? 'ความสามารถในการพัฒนาตนเอง' : NULL,
        isset($_POST['้highlightstu10']) ? 'มีคุณธรรม จริยธรรม ซื่อสัตย์สุจริต' : NULL,
        isset($_POST['้highlightstu11']) ? 'มีวินัย ตรงต่อเวลา และความรับผิดชอบ' : NULL,
        isset($_POST['้highlightstu12']) ? 'ขยัน อดทน' : NULL,
        isset($_POST['highlightstu_text']) ? $_POST['highlightstu_text'] : NULL
    ]));

    // คะแนนความพึงพอใจ
    $satisfaction_a1 = $_POST['a1'];
    $satisfaction_a2 = $_POST['a2'];
    $satisfaction_a3 = $_POST['a3'];
    $satisfaction_a4 = $_POST['a4'];

    // คะแนนความพึงพอใจต่อผลลัพธ์ของหลักสูตร
    $satisfaction_b1 = $_POST['b1'];
    $satisfaction_b2 = $_POST['b2'];

    // บันทึกข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO survey_responses (
        gender, age_level, education_level, job_type, other_job, 
        highlightstu, satisfaction_a1, satisfaction_a2, satisfaction_a3, satisfaction_a4, 
        satisfaction_b1, satisfaction_b2
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // เตรียม statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssiiiiii", 
        $gender, $age_level, $education_level, $job_type, $other_job, 
        $highlightstu, $satisfaction_a1, $satisfaction_a2, $satisfaction_a3, $satisfaction_a4,
        $satisfaction_b1, $satisfaction_b2
    );

    // รันคำสั่ง SQL
    if ($stmt->execute()) {
        echo "บันทึกข้อมูลสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

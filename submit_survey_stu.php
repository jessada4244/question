<?php

include 'db.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลผิดพลาด: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //path 1
    $gender = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : null;
    $education_level = isset($_POST['education_level']) ? $conn->real_escape_string($_POST['education_level']) : null;
    $school = isset($_POST['school']) ? $conn->real_escape_string($_POST['school']) : '';
    $province = isset($_POST['province']) ? $conn->real_escape_string($_POST['province']) : '';

    //path 2 
    $university_reputation = isset($_POST['university_reputation']) ? $conn->real_escape_string($_POST['university_reputation']) : '';
    $Location_university = isset($_POST['Location_university']) ? $conn->real_escape_string($_POST['Location_university']) : '';
    $public_relations = isset($_POST['public_relations']) ? $conn->real_escape_string($_POST['public_relations']) : '';
    $curriculum = isset($_POST['curriculum']) ? $conn->real_escape_string($_POST['curriculum']) : '';
    $teac_date = isset($_POST['teac_date']) ? $conn->real_escape_string($_POST['teac_date']) : '';
    $number_graduates = isset($_POST['number_graduates']) ? $conn->real_escape_string($_POST['number_graduates']) : '';
    $cost_education = isset($_POST['cost_education']) ? $conn->real_escape_string($_POST['cost_education']) : '';
    $quotas = isset($_POST['quotas']) ? $conn->real_escape_string($_POST['quotas']) : '';
    $Idol = isset($_POST['Idol']) ? $conn->real_escape_string($_POST['Idol']) : '';
    $Receive_advice = isset($_POST['Receive_advice']) ? $conn->real_escape_string($_POST['Receive_advice']) : '';

    //path 3
    $labor_market = isset($_POST['labor_market']) ? $conn->real_escape_string($_POST['labor_market']) : '';
    $extra_curricular = isset($_POST['extra_curricular']) ? $conn->real_escape_string($_POST['extra_curricular']) : '';
    $ethical_aspects = isset($_POST['ethical_aspects']) ? $conn->real_escape_string($_POST['ethical_aspects']) : '';

    //path4
    $teacher_experience = isset($_POST['teacher_experience']) ? $conn->real_escape_string($_POST['teacher_experience']) : '';
    $transfer_knowledge = isset($_POST['transfer_knowledge']) ? $conn->real_escape_string($_POST['transfer_knowledge']) : '';
    $real_practice = isset($_POST['real_practice']) ? $conn->real_escape_string($_POST['real_practice']) : '';

    //path5 
    $school_building = isset($_POST['school_building']) ? $conn->real_escape_string($_POST['school_building']) : '';
    $environment = isset($_POST['environment']) ? $conn->real_escape_string($_POST['environment']) : '';
    $computer = isset($_POST['computer']) ? $conn->real_escape_string($_POST['computer']) : '';
    $network_system = isset($_POST['network_system']) ? $conn->real_escape_string($_POST['network_system']) : '';
    $modernization = isset($_POST['modernization']) ? $conn->real_escape_string($_POST['modernization']) : '';

    //path6
    $Programming = isset($_POST['Programming']) ? $conn->real_escape_string($_POST['Programming']) : '';
    $Machine = isset($_POST['Machine']) ? $conn->real_escape_string($_POST['Machine']) : '';
    $Data_Science = isset($_POST['Data_Science']) ? $conn->real_escape_string($_POST['Data_Science']) : '';
    $network_sys = isset($_POST['network_sys']) ? $conn->real_escape_string($_POST['network_sys']) : '';
    $IoT = isset($_POST['IoT']) ? $conn->real_escape_string($_POST['IoT']) : '';
    $problem_solving = isset($_POST['problem_solving']) ? $conn->real_escape_string($_POST['problem_solving']) : '';
    $teamwork = isset($_POST['teamwork']) ? $conn->real_escape_string($_POST['teamwork']) : '';
    $presentation = isset($_POST['presentation']) ? $conn->real_escape_string($_POST['presentation']) : '';
    //path7 
    $continue_education = isset($_POST['continue_education']) ? $conn->real_escape_string($_POST['continue_education']) : '';
    $work_government = isset($_POST['work_government']) ? $conn->real_escape_string($_POST['work_government']) : '';
    $work_privateagency = isset($_POST['work_privateagency']) ? $conn->real_escape_string($_POST['work_privateagency']) : '';

    //path8
    $add_stu = isset($_POST['add_stu']) ? $conn->real_escape_string($_POST['add_stu']) : '';
    // เตรียมคำสั่ง SQL เพื่อบันทึกข้อมูลลงใน table expectations
    $sql = "INSERT INTO expectations (
       gender,
       education_level,
       school,
       province,
       university_reputation,
       Location_university,
       public_relations,
       curriculum,
       teac_date,
       number_graduates,
       cost_education,
       quotas,
       Idol,
       Receive_advice,
       labor_market,
       extra_curricular,
       ethical_aspects,
       teacher_experience,
       transfer_knowledge,
       real_practice,
       school_building,
       environment,
       computer,
       network_system,
       modernization,
       Programming,
       Machine,
       Data_Science,
       network_sys,
       IoT,
       problem_solving,
       teamwork,
       presentation,
       continue_education,
       work_government,
       work_privateagency,
       add_stu
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";

    if (!$stmt = $conn->prepare($sql)) {
        echo "เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error;
        exit;
    }

    // ผูกค่าพารามิเตอร์
    $stmt->bind_param(
        "ssssiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiis",
        $gender,
        $education_level,
        $school,
        $province,
        $university_reputation,
        $Location_university,
        $public_relations,
        $curriculum,
        $teac_date,
        $number_graduates,
        $cost_education,
        $quotas,
        $Idol,
        $Receive_advice,
        $labor_market,
        $extra_curricular,
        $ethical_aspects,
        $teacher_experience,
        $transfer_knowledge,
        $real_practice,
        $school_building,
        $environment,
        $computer,
        $network_system,
        $modernization,
        $Programming,
        $Machine,
        $Data_Science,
        $network_sys,
        $IoT,
        $problem_solving,
        $teamwork,
        $presentation, 
        $continue_education,
        $work_government,
        $work_privateagency,
        $add_stu
    );

    // Execute SQL
    if ($stmt->execute()) {
        echo "<script>
                alert('ขอบคุณสำหรับแบบสอบถาม');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error;
    }

    // ปิด statement และ connection
    $stmt->close();
    $conn->close();
}
?>

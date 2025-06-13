<?php

// เปิดการแสดงผลข้อผิดพลาด
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    error_log("การเชื่อมต่อฐานข้อมูลผิดพลาด: " . $conn->connect_error);
    echo "<script>console.error('การเชื่อมต่อฐานข้อมูลผิดพลาด: " . $conn->connect_error . "');</script>";
    die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ข้อมูลประเภท varchar
    $gender = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : null;
    $age_level = isset($_POST['age_level']) ? $conn->real_escape_string($_POST['age_level']) : null;
    $education_level = isset($_POST['education_level']) ? $conn->real_escape_string($_POST['education_level']) : null;
    $job_type = isset($_POST['job_type']) ? $conn->real_escape_string($_POST['job_type']) : null;
    $job_path = isset($_POST['job_path']) ? $conn->real_escape_string($_POST['job_path']) :'';
    $other_job = isset($_POST['other_job']) ? $conn->real_escape_string($_POST['other_job']) : null;

    // path 1
    $Professional_skills = isset($_POST['Professional_skills']) ? intval($_POST['Professional_skills']) : 0;
    $theoretical_knowledge = isset($_POST['theoretical_knowledge']) ? intval($_POST['theoretical_knowledge']) : 0;
    $Practical_skills = isset($_POST['Practical_skills']) ? intval($_POST['Practical_skills']) : 0;
    $Information_skills = isset($_POST['Information_skills']) ? intval($_POST['Information_skills']) : 0;
    $Communication_skills = isset($_POST['Communication_skills']) ? intval($_POST['Communication_skills']) : 0;
    $thinking_skill = isset($_POST['thinking_skill']) ? intval($_POST['thinking_skill']) : 0;
    $Ability_work = isset($_POST['Ability_work']) ? intval($_POST['Ability_work']) : 0;
    $Management_ability = isset($_POST['Management_ability']) ? intval($_POST['Management_ability']) : 0;
    $develop_skill = isset($_POST['develop_skill']) ? intval($_POST['develop_skill']) : 0;
    $Honest = isset($_POST['Honest']) ? intval($_POST['Honest']) : 0;
    $punctual = isset($_POST['punctual']) ? intval($_POST['punctual']) : 0;
    $hard_working = isset($_POST['hard_working']) ? intval($_POST['hard_working']) : 0;
    $Add_Highlights = isset($_POST['Add_Highlights']) ? $conn->real_escape_string($_POST['Add_Highlights']) : '';

    // path 2
    $Professional_skills_add = isset($_POST['Professional_skills_add']) ? intval($_POST['Professional_skills_add']) : 0;
    $theoretical_knowledge_add = isset($_POST['theoretical_knowledge_add']) ? intval($_POST['theoretical_knowledge_add']) : 0;
    $Practical_skill_add = isset($_POST['Practical_skill_add']) ? intval($_POST['Practical_skill_add']) : 0;
    $Information_skills_add = isset($_POST['Information_skills_add']) ? intval($_POST['Information_skills_add']) : 0;
    $Communication_skills_add = isset($_POST['Communication_skills_add']) ? intval($_POST['Communication_skills_add']) : 0;
    $thinking_skill_add = isset($_POST['thinking_skill_add']) ? intval($_POST['thinking_skill_add']) : 0;
    $Ability_work_add = isset($_POST['Ability_work_add']) ? intval($_POST['Ability_work_add']) : 0;
    $Management_ability_add = isset($_POST['Management_ability_add']) ? intval($_POST['Management_ability_add']) : 0;
    $develop_skill_add = isset($_POST['develop_skill_add']) ? intval($_POST['develop_skill_add']) : 0;
    $Honest_add = isset($_POST['Honest_add']) ? intval($_POST['Honest_add']) : 0;
    $punctual_add = isset($_POST['punctual_add']) ? intval($_POST['punctual_add']) : 0;
    $hard_working_add = isset($_POST['hard_working_add']) ? intval($_POST['hard_working_add']) : 0;

    $Highlights_add = isset($_POST['Highlights_add']) ? $conn->real_escape_string($_POST['Highlights_add']) : '';

    // path 3
    $course_content = isset($_POST['course_content']) ? $conn->real_escape_string($_POST['course_content']) : null;
    $labor_market = isset($_POST['labor_market']) ? $conn->real_escape_string($_POST['labor_market']) : null;
    $practical_knowledge = isset($_POST['practical_knowledge']) ? $conn->real_escape_string($_POST['practical_knowledge']) : null;
    $Moderntools_teaching = isset($_POST['Moderntools_teaching']) ? $conn->real_escape_string($_POST['Moderntools_teaching']) : null;
    $Studentshave_knowledge = isset($_POST['Studentshave_knowledge']) ? $conn->real_escape_string($_POST['Studentshave_knowledge']) : null;
    $Students_work = isset($_POST['Students_work']) ? $conn->real_escape_string($_POST['Students_work']) : null;

    // path 4 
    $commi_skills = isset($_POST['commi_skills']) ? $conn->real_escape_string($_POST['commi_skills']) : 0;
    $leadership = isset($_POST['leadership']) ? $conn->real_escape_string($_POST['leadership']) : 0;
    $assertiveness = isset($_POST['assertiveness']) ? $conn->real_escape_string($_POST['assertiveness']) : 0;
    $self_study = isset($_POST['self_study']) ? $conn->real_escape_string($_POST['self_study']) : 0;
    $Problem_solving = isset($_POST['Problem_solving']) ? $conn->real_escape_string($_POST['Problem_solving']) : 0;
    $Manage_time = isset($_POST['Manage_time']) ? $conn->real_escape_string($_POST['Manage_time']) : 0;
    $teamwork = isset($_POST['teamwork']) ? $conn->real_escape_string($_POST['teamwork']) : 0;
    $writing_skills = isset($_POST['writing_skills']) ? $conn->real_escape_string($_POST['writing_skills']) : 0;
    $add_skills = isset($_POST['add_skills']) ? $conn->real_escape_string($_POST['add_skills']) : 0;

    // path 4 
    $puter_arch = isset($_POST['puter_arch']) ? $conn->real_escape_string($_POST['puter_arch']) : 0;
    $Operating_sys = isset($_POST['Operating_sys']) ? $conn->real_escape_string($_POST['Operating_sys']) : 0;
    $Software_Deve = isset($_POST['Software_Deve']) ? $conn->real_escape_string($_POST['Software_Deve']) : 0;
    $Database_Sys = isset($_POST['Database_Sys']) ? $conn->real_escape_string($_POST['Database_Sys']) : 0;
    $Computer_Net = isset($_POST['Computer_Net']) ? $conn->real_escape_string($_POST['Computer_Net']) : 0;
    $Cybers = isset($_POST['Cybers']) ? $conn->real_escape_string($_POST['Cybers']) : 0;
    $Machine_Learn = isset($_POST['Machine_Learn']) ? $conn->real_escape_string($_POST['Machine_Learn']) : 0;
    $Embedded_Sys = isset($_POST['Embedded_Sys']) ? $conn->real_escape_string($_POST['Embedded_Sys']) : 0;
    $Information_The = isset($_POST['Information_The']) ? $conn->real_escape_string($_POST['Information_The']) : 0;
    $Mathematics = isset($_POST['Mathematics']) ? $conn->real_escape_string($_POST['Mathematics']) : 0;
    $Engineering = isset($_POST['Engineering']) ? $conn->real_escape_string($_POST['Engineering']) : 0;
    $Cloud = isset($_POST['Cloud']) ? $conn->real_escape_string($_POST['Cloud']) : 0;
    $add_Knowledge = isset($_POST['add_Knowledge']) ? $conn->real_escape_string($_POST['add_Knowledge']) : 0; 
//Highlights_add
    //path 5 
    $Additional_suggestions = isset($_POST['Additional_suggestions']) ? $conn->real_escape_string($_POST['Additional_suggestions']) : '';
    // กรณีเลือกประเภทงานว่าเป็น "อื่นๆ"
    if ($job_type === 'อื่นๆ') {
        $job_type = $other_job;
    }

    // เตรียมคำสั่ง SQL เพื่อบันทึกข้อมูลลงใน table survey_responses
    $sql = "INSERT INTO survey_responses (
        gender, age_level, education_level, job_type, job_path, Professional_skills, theoretical_knowledge, Practical_skills, Information_skills, Communication_skills,
        thinking_skill, Ability_work, Management_ability, develop_skill, Honest, punctual, hard_working, Add_Highlights, 
        Professional_skills_add, theoretical_knowledge_add, Practical_skill_add, Information_skills_add, Communication_skills_add,
        thinking_skill_add, Ability_work_add, Management_ability_add, develop_skill_add, Honest_add, punctual_add,
        hard_working_add, Highlights_add, course_content, labor_market, practical_knowledge, Moderntools_teaching,
        Studentshave_knowledge, Students_work,
        commi_skills,
        leadership,
        assertiveness,
        self_study,
        Problem_solving,
        Manage_time,
        teamwork,
        writing_skills,
        add_skills,
        puter_arch,
        Operating_sys,
        Software_Deve,
        Database_Sys,
        Computer_Net,
        Cybers,
        Machine_Learn,
        Embedded_Sys,
        Information_The,
        Mathematics,
        Engineering,
        Cloud,
        add_Knowledge,
        Additional_suggestions
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,? )";

    // ตรวจสอบการเตรียมคำสั่ง SQL
    if (!$stmt = $conn->prepare($sql)) {
        error_log("เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error);
        echo "<script>console.error('เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error . "');</script>";
        exit;
    }

    // กำหนดค่า parameter ให้ตรงกับจำนวนคอลัมน์ (ทั้งหมด 36 คอลัมน์)
    $stmt->bind_param(
        "sssssiiiiiiiiiiiisiiiiiiiiiiiisiiiiiiiiiiisiiiiiiiiiiiiiiiss", // เพิ่มตัวอักษร "s" ตัวสุดท้าย
        $gender,
        $age_level,
        $education_level,
        $job_type,
        $job_path,
        $Professional_skills,
        $theoretical_knowledge,
        $Practical_skills,
        $Information_skills,
        $Communication_skills,
        $thinking_skill,
        $Ability_work,
        $Management_ability,
        $develop_skill,
        $Honest,
        $punctual,
        $hard_working,
        $Add_Highlights,
        $Professional_skills_add,
        $theoretical_knowledge_add,
        $Practical_skill_add,
        $Information_skills_add,
        $Communication_skills_add,
        $thinking_skill_add,
        $Ability_work_add,
        $Management_ability_add,
        $develop_skill_add,
        $Honest_add,
        $punctual_add,
        $hard_working_add,
        $Highlights_add,
        $course_content,
        $labor_market,
        $practical_knowledge,
        $Moderntools_teaching,
        $Studentshave_knowledge,
        $Students_work,
        $commi_skills,
        $leadership,
        $assertiveness,
        $self_study,
        $Problem_solving,
        $Manage_time,
        $teamwork,
        $writing_skills,
        $add_skills,
        $puter_arch,
        $Operating_sys,
        $Software_Deve,
        $Database_Sys,
        $Computer_Net,
        $Cybers,
        $Machine_Learn,
        $Embedded_Sys,
        $Information_The,
        $Mathematics,
        $Engineering,
        $Cloud,
        $add_Knowledge, 
        $Additional_suggestions
    );


    // Log ข้อมูลการ execute SQL
    if ($stmt->execute()) {
        error_log("บันทึกข้อมูลสำเร็จ");
        echo "<script>console.log('บันทึกข้อมูลสำเร็จ');</script>";
        echo "<script>
                alert('ขอบคุณสำหรับแบบสอบถาม');
                window.location.href = 'index.php';
              </script>";
    } else {
        error_log("เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error);
        echo "<script>console.error('เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error . "');</script>";
    }

    // ปิดการเชื่อมต่อ
    $stmt->close();
    $conn->close();
}
?>
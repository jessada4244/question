<?php
include 'db.php';

try {
    // เช็คการเชื่อมต่อฐานข้อมูล
    if ($conn->connect_error) {
        throw new Exception("การเชื่อมต่อฐานข้อมูลผิดพลาด: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์ม
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $age_range = isset($_POST['age_range']) ? $_POST['age_range'] : null;
        $employment_status = isset($_POST['employment_status']) ? $_POST['employment_status'] : null;
        $occupation_path = isset($_POST['occupation_path']) ? $_POST['occupation_path'] : '';
        $occupation = isset($_POST['occupation']) ? $_POST['occupation'] : '';
        $other_occupation = isset($_POST['other_occupation']) ? $_POST['other_occupation'] : null;
        $course_modernity = isset($_POST['course_modernity']) ? $_POST['course_modernity'] : null;
        $course_relevance_to_job_market = isset($_POST['course_relevance_to_job_market']) ? $_POST['course_relevance_to_job_market'] : null;
        $course_structure = isset($_POST['course_structure']) ? $_POST['course_structure'] : null;
        $course_technology = isset($_POST['course_technology']) ? $_POST['course_technology'] : null;
        $course_integration = isset($_POST['course_integration']) ? $_POST['course_integration'] : null;
        $course_character_development = isset($_POST['course_character_development']) ? $_POST['course_character_development'] : null;
        $course_demand_in_job_market = isset($_POST['course_demand_in_job_market']) ? $_POST['course_demand_in_job_market'] : null;
        $teacher_practical_teaching = isset($_POST['teacher_practical_teaching']) ? $_POST['teacher_practical_teaching'] : null;
        $teacher_knowledge = isset($_POST['teacher_knowledge']) ? $_POST['teacher_knowledge'] : null;
        $teacher_professional_ethics = isset($_POST['teacher_professional_ethics']) ? $_POST['teacher_professional_ethics'] : null;
        $teacher_professional_edu = isset($_POST['teacher_professional_edu']) ? $_POST['teacher_professional_edu'] : null;
        $classroom_equipment = isset($_POST['classroom_equipment']) ? $_POST['classroom_equipment'] : null;
        $laboratory_equipment = isset($_POST['laboratory_equipment']) ? $_POST['laboratory_equipment'] : null;
        $information_service = isset($_POST['information_service']) ? $_POST['information_service'] : null;
        $foreign_language_skills = isset($_POST['foreign_language_skills']) ? $_POST['foreign_language_skills'] : ''; 
        $leadership = isset($_POST['leadership']) ? $_POST['leadership'] : ''; 
        $Analytical_and_problem = isset($_POST['Analytical_and_problem']) ? $_POST['Analytical_and_problem'] : ''; 
        $Interpersonal = isset($_POST['Interpersonal']) ? $_POST['Interpersonal'] : ''; 
        $Additional_skills = isset($_POST['Additional_skills']) ? $_POST['Additional_skills'] : ''; 
        $Architecture = isset($_POST['Architecture']) ? $_POST['Architecture'] : '';
        $Operating = isset($_POST['Operating']) ? $_POST['Operating'] : '';
        $Software_Development = isset($_POST['Software_Development']) ? $_POST['Software_Development'] : '';
        $Database_Systems = isset($_POST['Database_Systems']) ? $_POST['Database_Systems'] : '';
        $Computer_Networks = isset($_POST['Computer_Networks']) ? $_POST['Computer_Networks'] : '';
        $Cybersecurity = isset($_POST['Cybersecurity']) ? $_POST['Cybersecurity'] : '';
        $Machine_Learning = isset($_POST['Machine_Learning']) ? $_POST['Machine_Learning'] : '';
        $Embedded_System = isset($_POST['Embedded_System']) ? $_POST['Embedded_System'] : '';
        $Information_Theory = isset($_POST['Information_Theory']) ? $_POST['Information_Theory'] : '';
        $Mathematics = isset($_POST['Mathematics']) ? $_POST['Mathematics'] : '';
        $Engineering = isset($_POST['Engineering']) ? $_POST['Engineering'] : '';
        $Cloud_Computing = isset($_POST['Cloud_Computing']) ? $_POST['Cloud_Computing'] : '';
        $Add_Knowledge = isset($_POST['Add_Knowledge']) ? $_POST['Add_Knowledge'] : '';
        $suggestions = isset($_POST['suggestions']) ? $_POST['suggestions'] : '';

        if ($occupation === 'อื่นๆ') {
            $occupation = $other_occupation;
        }
        if ($Add_Knowledge == "อื่นๆ" && !empty($suggestionsknow_text)) {
            $Add_Knowledge = $suggestionsknow_text;
        }

        // เตรียมคำสั่ง SQL เพื่อบันทึกข้อมูลลงใน table q_alumni
        $sql = "INSERT INTO q_alumni (
            gender, 
            age_range, 
            employment_status, 
            occupation, 
            occupation_path,
            course_modernity,
            course_relevance_to_job_market,
            course_structure,
            course_technology,
            course_integration,
            course_character_development,
            course_demand_in_job_market,
            teacher_practical_teaching,
            teacher_knowledge,
            teacher_professional_ethics,
            teacher_professional_edu,
            classroom_equipment,
            laboratory_equipment,
            information_service,
            foreign_language_skills,
            leadership,
            Analytical_and_problem,
            Interpersonal,
            Additional_skills,
            Architecture,
            Operating,
            Software_Development,
            Database_Systems,
            Computer_Networks,
            Cybersecurity,
            Machine_Learning,
            Embedded_System,
            Information_Theory,
            Mathematics,
            Engineering,
            Cloud_Computing,
            Add_Knowledge,
            suggestions
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if (!$stmt = $conn->prepare($sql)) {
            throw new Exception("เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error);
        }

        $stmt->bind_param(
            "sssssiiiiiiiiiiiiiiiiiisiiiiiiiiiiiiss", 
            $gender,
            $age_range,
            $employment_status,
            $occupation,
            $occupation_path,
            $course_modernity,
            $course_relevance_to_job_market,
            $course_structure,
            $course_technology,
            $course_integration,
            $course_character_development,
            $course_demand_in_job_market,
            $teacher_practical_teaching,
            $teacher_knowledge,
            $teacher_professional_ethics,
            $teacher_professional_edu,
            $classroom_equipment,
            $laboratory_equipment,
            $information_service,
            $foreign_language_skills,
            $leadership,
            $Analytical_and_problem,
            $Interpersonal,
            $Additional_skills,
            $Architecture,  
            $Operating,  
            $Software_Development, 
            $Database_Systems,  
            $Computer_Networks,  
            $Cybersecurity,  
            $Machine_Learning,  
            $Embedded_System,  
            $Information_Theory,  
            $Mathematics,  
            $Engineering,  
            $Cloud_Computing,  
            $Add_Knowledge,
            $suggestions  
        );

        if (!$stmt->execute()) {
            throw new Exception("เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error);
        }

        echo "<script>
                alert('ขอบคุณสำหรับแบบสอบถาม');
                window.location.href = 'index.php';
              </script>";
    }
} catch (Exception $e) {
    echo "เกิดข้อผิดพลาด: " . $e->getMessage(); // แสดงข้อผิดพลาดบนหน้าเว็บ
    error_log($e->getMessage()); // บันทึกข้อผิดพลาดลงใน log
}

// ปิดการเชื่อมต่อ
if (isset($stmt)) {
    $stmt->close();
}
$conn->close();
?>
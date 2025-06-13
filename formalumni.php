<!DOCTYPE html>
<html lang="th">

<head>
<link rel="stylesheet" href="css/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>แบบสอบถามความต้องการ/ความคาดหวังต่อการเข้าศึกษา</title>
</head>

<body>

  <div class="container">
    <a href="index.php" class="btn btn-primary"><i class="fa fa-home"></i> หน้าแรก</a><br>


    <div class="header">
      <img src="pic/logo.png">&nbsp;&nbsp;&nbsp;
      <div class="text">แบบสอบถามความพึงพอใจของผู้มีส่วนได้ส่วนเสีย
        (Stakeholders)<br>ที่มีต่อการพัฒนาคุณภาพหลักสูตรวิศวกรรมคอมพิวเตอร์</div>

    </div>

    <b>คำชี้แจง</b><br>
    <p>
      แบบสอบถามนี้จัดทำขึ้นเพื่อประเมินความพึงพอใจของผู้มีส่วนได้ส่วนเสียต่อการพัฒนาคุณภาพของหลักสูตรวิศวกรรมคอมพิวเตอร์
      ข้อมูลที่ได้จะถูกนำไปใช้เพื่อปรับปรุงและพัฒนาหลักสูตรให้มีคุณภาพยิ่งขึ้น กรุณาตอบคำถามตามความเป็นจริง</p>
    <p><b>ตอนที่ 1</b>&nbsp;ข้อมูลทั่วไปของผู้ตอบแบบสอบถาม</p>
    <form method="post" action="submit_survey.php">
      <label for="gender">เพศ:</label>
      <select name="gender" id="gender" required>
      <option value="">เลือกเพศ</option>
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
        <option value="เพศทางเลือก">เพศทางเลือก</option>
      </select><br><br>


      <label for="age_range">ช่วงอายุ:</label>
      <select name="age_range" id="age_range" required>
      <option value="">เลือกช่วงอายุ</option>
      <option value="น้อยกว่า 25 ปี">น้อยกว่า 25 ปี</option>
      <option value="25 -30 ปี">25 -30 ปี</option>
      <option value="31 - 35 ปี">31 - 35 ปี</option>
      <option value="มากกว่า 35 ปี">มากกว่า 35 ปี</option>
      </select><br><br>

      <label for="job">การทำงานในปัจจุบัน:</label><br><br>
      <tr>
        <td height="30" align="center">
          <input type="radio" name="employment_status" id="emptyjob" value="ว่างงาน"
            onclick="toggleJobSelect()" />&ensp;ว่างงาน
        </td><br><br>
        <td height="30" align="center">
          <input type="radio" name="employment_status" id="eduhigh" value="ศึกษาต่อในระดับที่สูงขึ้น"
            onclick="toggleJobSelect()" />&ensp;ศึกษาต่อในระดับที่สูงขึ้น
        </td><br><br>
        <td height="30" align="center">
          <input type="radio" name="employment_status" id="workjob" value="ทำงาน"
            onclick="toggleJobSelect()" />&ensp;ทำงาน
        </td>
      </tr>

      <br><br>
      <!-- แสดงฟิลด์เลือกอาชีพเมื่อเลือกทำงาน -->
      <div id="jobSelect" style="display:none;">
        <label for="occupation_path">อาชีพ:</label><br>
        <select name="occupation_path" id="occupation_path" onchange="toggleOtherJobInput()">
          <option value="">เลือกอาชีพ</option>
          <option value="เจ้าของธุรกิจ / ธุรกิจส่วนตัว">เจ้าของธุรกิจ / ธุรกิจส่วนตัว</option>
          <option value="รับราชการ / พนักงานราชการ">รับราชการ / พนักงานราชการ</option>
          <option value="พนักงานบริษัทเอกชน">พนักงานบริษัทเอกชน</option>
          <option value="พนักงานรัฐวิสาหกิจ">พนักงานรัฐวิสาหกิจ</option>
          <option value="">อื่นๆ</option>
        </select><br><br>
      </div>

      <!-- แสดง input สำหรับกรอกอาชีพเมื่อเลือก "อื่นๆ" -->
      <div id="other_occupation_div" style="display:none;">
        <label for="other_occupation">กรุณาระบุอาชีพของคุณ:</label><br>
        <input type="text" id="other_occupation_input" name="occupation" placeholder="กรอกอาชีพของคุณ">
      </div>

      <script>
        function toggleJobSelect() {
          var workJobRadio = document.getElementById("workjob");
          var jobSelectDiv = document.getElementById("jobSelect");

          if (workJobRadio.checked) {
            jobSelectDiv.style.display = "block"; // แสดงฟิลด์เลือกอาชีพเมื่อเลือก "ทำงาน"
          } else {
            jobSelectDiv.style.display = "none"; // ซ่อนฟิลด์เลือกอาชีพถ้าไม่ได้เลือก "ทำงาน"
            document.getElementById("other_occupation_div").style.display = "none"; // ซ่อน input "อื่นๆ" ถ้าไม่ได้เลือก "ทำงาน"
          }
        }

        function toggleOtherJobInput() {
          var occupationSelect = document.getElementById("occupation_path");
          var otherJobInputDiv = document.getElementById("other_occupation_div");

          if (occupationSelect.value === "") {
            otherJobInputDiv.style.display = "block";
          
            document.getElementById("other_occupation_input").required = true;
          } else {
            otherJobInputDiv.style.display = "none";
            document.getElementById("other_occupation_input").required = false;
          }
        }
      </script>
      <p> <b>ตอนที่ 2</b> ความพึงพอใจต่อคุณภาพหลักสูตร</p>

     
        <table>
          <tr>
            <td width="50%" rowspan="2" align="center"><strong>หัวข้อ</strong></td>
            <td colspan="5" align="center"><strong>ระดับความคิดเห็น</strong></td>
          </tr>
          <tr>
            <td width="10%" align="center"><strong>มากที่สุด</strong></td>
            <td width="10%" align="center"><strong>มาก</strong></td>
            <td width="10%" align="center"><strong>ปานกลาง</strong></td>
            <td width="10%" align="center"><strong>น้อย</strong></td>
            <td width="10%" align="center"><strong>น้อยที่สุด</strong></td>
          </tr>
          <tr>
            <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านหลักสูตร</strong></td>
          </tr>
          <tr>
            <td>ความทันสมัยของเนื้อหารายวิชา</td>
            <td align="center"><input type="radio" name="course_modernity" value="5" required="required" /></td>
            <td align="center"><input type="radio" name="course_modernity" value="4" /></td>
            <td align="center"><input type="radio" name="course_modernity" value="3" /></td>
            <td align="center"><input type="radio" name="course_modernity" value="2" /></td>
            <td align="center"><input type="radio" name="course_modernity" value="1" /></td>
          </tr>

          <tr>
            <td height="30">เนื้อหาวิชาที่เรียนตรงกับความต้องการของตลาดแรงงาน</td>
            <td align="center"><input type="radio" name="course_relevance_to_job_market" value="5"
                required="required" /></td>
            <td align="center"><input type="radio" name="course_relevance_to_job_market" value="4" /></td>
            <td align="center"><input type="radio" name="course_relevance_to_job_market" value="3" /></td>
            <td align="center"><input type="radio" name="course_relevance_to_job_market" value="2" /></td>
            <td align="center"><input type="radio" name="course_relevance_to_job_market" value="1" /></td>
          </tr>
          <tr>
            <td height="30">โครงสร้างหลักสูตรสามารถศึกษาให้จบได้ภายในระยะเวลาที่กำหนด</td>
            <td align="center"><input type="radio" name="course_structure" value="5"
                required="required" /></td>
            <td align="center"><input type="radio" name="course_structure" value="4" /></td>
            <td align="center"><input type="radio" name="course_structure" value="3" /></td>
            <td align="center"><input type="radio" name="course_structure" value="2" /></td>
            <td align="center"><input type="radio" name="course_structure" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ความทันสมัยของเทคโนโลยีและเครื่องมือที่ใช้ในการเรียนการสอน</td>
            <td align="center"><input type="radio" name="course_technology" value="5"
                required="required" /></td>
            <td align="center"><input type="radio" name="course_technology" value="4" /></td>
            <td align="center"><input type="radio" name="course_technology" value="3" /></td>
            <td align="center"><input type="radio" name="course_technology" value="2" /></td>
            <td align="center"><input type="radio" name="course_technology" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">เมื่อสำเร็จการศึกษาสามารถบูรณาการความรู้ทางทฤษฎีและปฏิบัติ</td>
            <td align="center"><input type="radio" name="course_integration" value="5"
                required="required" /></td>
            <td align="center"><input type="radio" name="course_integration" value="4" /></td>
            <td align="center"><input type="radio" name="course_integration" value="3" /></td>
            <td align="center"><input type="radio" name="course_integration" value="2" /></td>
            <td align="center"><input type="radio" name="course_integration" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">หลักสูตรมีส่วนช่วยพัฒนา/ขัดเกลาให้ท่านเป็นคนดี มีคุณธรรม มีวินัย และมีความรับผิดชอบ</td>
            <td align="center"><input type="radio" name="course_character_development" value="5"
                required="required" /></td>
            <td align="center"><input type="radio" name="course_character_development" value="4" /></td>
            <td align="center"><input type="radio" name="course_character_development" value="3" /></td>
            <td align="center"><input type="radio" name="course_character_development" value="2" /></td>
            <td align="center"><input type="radio" name="course_character_development" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">หลักสูตรยังเป็นที่ต้องการของตลาดแรงงาน</td>
            <td align="center"><input type="radio" name="course_demand_in_job_market" value="5"
                required="required" /></td>
            <td align="center"><input type="radio" name="course_demand_in_job_market" value="4" /></td>
            <td align="center"><input type="radio" name="course_demand_in_job_market" value="3" /></td>
            <td align="center"><input type="radio" name="course_demand_in_job_market" value="2" /></td>
            <td align="center"><input type="radio" name="course_demand_in_job_market" value="1" /></td>
          </tr>
          <tr>
            <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านอาจารย์ผู้สอน</strong></td>
          </tr>
          <tr>
            <td height="30">อาจารย์เน้นการเรียนการสอนที่ให้นักศึกษาได้ฝึกปฏิบัติจริง</td>
            <td height="30" align="center"><input type="radio" name="teacher_practical_teaching" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_practical_teaching" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_practical_teaching" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_practical_teaching" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_practical_teaching" value="1" /></td>
          </tr>
          <tr>
            <td height="30">อาจารย์มีประสบการณ์ ความรู้ในเนื้อหาวิชาที่สอนเป็นอย่างดี
              สามารถถ่ายทอดความรู้ให้แก่ผู้เรียน</td>
            <td height="30" align="center"><input type="radio" name="teacher_knowledge" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_knowledge" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_knowledge" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_knowledge" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_knowledge" value="1" /></td>
          </tr>
          <tr>
            <td height="30">มีจรรยาบรรณในวิชาชีพ และการมีบุคลิกภาพเป็นแบบอย่างแก่นักศึกษา</td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_ethics" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_ethics" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_ethics" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_ethics" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_ethics" value="1" /></td>
          </tr>
          <tr>
            <td height="30">อาจารย์ให้คำปรึกษาด้านวิชาการและการพัฒนาบัณฑิตศึกษาได้อย่างเหมาะสม</td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_edu" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_edu" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_edu" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_edu" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_professional_edu" value="1" /></td>
          </tr>

          <tr>
            <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ด้านสภาพแวดล้อมการเรียนรู้</strong></td>
          </tr>
          <tr>
            <td height="30">ห้องเรียนมีอุปกรณ์เหมาะสม เอื้อต่อการเรียนรู้ และเพียงพอต่อการเรียน</td>
            <td height="30" align="center"><input type="radio" name="classroom_equipment" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="classroom_equipment" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="classroom_equipment" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="classroom_equipment" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="classroom_equipment" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ห้องปฏิบัติการมีอุปกรณ์เหมาะสม เอื้อต่อการเรียนรู้ และเพียงพอต่อการเรียน</td>
            <td height="30" align="center"><input type="radio" name="laboratory_equipment" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="laboratory_equipment" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="laboratory_equipment" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="laboratory_equipment" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="laboratory_equipment" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ระบบบริการสารสนเทศเหมาะสม เอื้อต่อการเรียนรู้</td>
            <td height="30" align="center"><input type="radio" name="information_service" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="information_service" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="information_service" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="information_service" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="information_service" value="1" /></td>
          </tr>

        </table><br>
        <p><b> ตอนที่ 3 </b> ทักษะเพิ่มเติมสำหรับหลักสูตร</p>
        <p>1. ท่านคิดว่าควรเพิ่มหรือเน้นทักษะด้านใดบ้าง เพื่อตอบสนองต่อความต้องการของหน่วยงาน/องค์กรหรือผู้ใช้บัณฑิต
          (ตอบได้มากกว่า 1 ข้อ)</p>
        <tr>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="foreign_language_skills"
              value="1" />&ensp;ทักษะภาษาต่างประเทศ</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="leadership"
              value="1" />&ensp;ความเป็นผู้นำ</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Analytical_and_problem"
              value="1" />&ensp;ทักษะการวิเคราะห์และแก้ปัญหา</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Interpersonal"
              value="1" />&ensp;การมีมนุษยสัมพันธ์/ทำงานเป็นทีม</td><br><br>

          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Additional_skills" id="suggestionsskill_checkbox" value="อื่นๆ" onclick="toggleSuggestionsSkillInput()" />&ensp;อื่นๆ</td><br><br>
        </tr>
        <div id="suggestionsskillInput" style="display:none;">
          <label for="suggestionsskill_text">กรุณาระบุอื่นๆ:</label><br>
          <input type="text" id="suggestionsskill_text" name="Additional_skills" placeholder="กรอกข้อมูล" >
        </div>

        <script>
          function toggleSuggestionsSkillInput() {
            var suggestionsskillCheckbox = document.getElementById("suggestionsskill_checkbox");
            var suggestionsskillInputDiv = document.getElementById("suggestionsskillInput");

            // แสดงช่อง input ถ้าติ๊กเลือก checkbox และซ่อนถ้าไม่ได้เลือก
            if (suggestionsskillCheckbox.checked) {
              suggestionsskillInputDiv.style.display = "block";
            } else {
              suggestionsskillInputDiv.style.display = "none";
            }
          }
        </script>
        <p>2. ท่านคิดว่านักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีความรู้
          (Knowledge) เรื่องใดบ้าง (ตอบได้มากกว่า 1 ข้อ)</p>
          <tr>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Architecture" value="1" />&ensp;สถาปัตยกรรมคอมพิวเตอร์ (Computer Architecture)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Operating" value="1" />&ensp;ระบบปฏิบัติการ (Operating Systems)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Software_Development" value="1" />&ensp;การพัฒนาซอฟต์แวร์ (Software Development)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Database_Systems" value="1" />&ensp;ระบบฐานข้อมูล (Database Systems)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Computer_Networks" value="1" />&ensp;เครือข่ายคอมพิวเตอร์ (Computer Networks)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Cybersecurity" value="1" />&ensp;ความปลอดภัยทางไซเบอร์ (Cybersecurity)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Machine_Learning" value="1" />&ensp;การเรียนรู้ของเครื่องและปัญญาประดิษฐ์ (Machine Learning and Artificial Intelligence)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Embedded_System" value="1" />&ensp;ระบบฝังตัว (Embedded Systems)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Information_Theory" value="1" />&ensp;ทฤษฎีข้อมูลและการประมวลผลสัญญาณ (Information Theory and Signal Processing)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Mathematics" value="1" />&ensp;คณิตศาสตร์และสถิติ (Mathematics and Statistics)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Engineering" value="1" />&ensp;หลักการวิศวกรรม (Engineering Principles)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Cloud_Computing" value="1" />&ensp;การประมวลผลบนระบบคลาวด์ (Cloud Computing)</td><br><br>
          &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Add_Knowledge" id="suggestionsknow_checkbox" value="" onclick="toggleSuggestionsknowInput()" />&ensp;อื่นๆ</td><br><br>

        </tr>

        <div id="suggestionsknowInput" style="display:none;">
          <label for="suggestionsknow_text">กรุณาระบุอื่นๆ:</label><br>
          <input type="text" id="suggestionsknow_text" name="Add_Knowledge" placeholder="กรอกข้อมูล" >
        </div>

        <script>
          function toggleSuggestionsknowInput() {
            var suggestionsknowCheckbox = document.getElementById("suggestionsknow_checkbox");
            var suggestionsknowInputDiv = document.getElementById("suggestionsknowInput");

            // แสดงช่อง input ถ้าติ๊กเลือก checkbox และซ่อนถ้าไม่ได้เลือก
            if (suggestionsknowCheckbox.checked) {
              suggestionsknowInputDiv.style.display = "block";
            } else {
              suggestionsknowInputDiv.style.display = "none";
            }
          }
        </script>
      <p><b>ตอนที่ 4 ข้อคิดเห็นหรือข้อเสนอแนะเพิ่มเติม</b></p>
  <textarea name="suggestions" cols="90" rows="3" id="detail"></textarea>
  <br><br>
  <center>
    <b>ขอขอบคุณท่านที่สละเวลาในการตอบแบบสอบถามนี้ ความคิดเห็นของท่านมีคุณค่าอย่างยิ่งในการ</b><br>
    <b>พัฒนาหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์</b>
    <br><br>
    <a href="index.php" class="btn btn-danger">ยกเลิก <i class="fa fa-times-circle" aria-hidden="true"></i></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" name="save" class="btn btn-primary">ส่งแบบสอบถาม <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
  </center>
      </form>
      <br /><br />
  </div>
  
</body>

</html>
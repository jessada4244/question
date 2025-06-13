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
    <form method="post" action="submit_surver_com.php">
      <label for="gender">เพศ:</label>
      <select name="gender" id="gender" required>
        <option value="">เลือกเพศ</option>
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
        <option value="เพศทางเลือก">เพศทางเลือก</option>
      </select><br><br>

      <!-- วุฒิการศึกษาเดิม -->
      <label for="age_level">ช่วงอายุ:</label>
      <select name="age_level" id="age_level" required>
        <option value="">เลือกช่วงอายุ</option>
        <option value="น้อยกว่า 25 ปี">น้อยกว่า 25 ปี</option>
        <option value="25 -30 ปี">25 -30 ปี</option>
        <option value="31 - 35 ปี">31 - 35 ปี</option>
        <option value="มากกว่า 35 ปี">มากกว่า 35 ปี</option>
      </select><br><br>

      <label for="education_level">ระดับการศึกษา:</label>
      <select name="education_level" id="education_level" required>
        <option value="">เลือกระดับการศึกษา</option>
        <option value="ต่ำกว่าระดับปริญญาตรี">ต่ำกว่าระดับปริญญาตรี</option>
        <option value="ปริญญาตรี">ปริญญาตรี</option>
        <option value="ปริญญาโท">ปริญญาโท</option>
        <option value="ปริญญาเอก">ปริญญาเอก</option>
      </select><br><br>


      <label for="job_path">อาชีพ:</label><br>
      <select name="job_path" id="job_path" onchange="toggleOtherJobInput()">
        <option value="">เลือกอาชีพ</option>
        <option value="เจ้าของธุรกิจ / ธุรกิจส่วนตัว">เจ้าของธุรกิจ / ธุรกิจส่วนตัว</option>
        <option value="รับราชการ / พนักงานราชการ">รับราชการ / พนักงานราชการ</option>
        <option value="พนักงานบริษัทเอกชน">พนักงานบริษัทเอกชน</option>
        <option value="พนักงานรัฐวิสาหกิจ">พนักงานรัฐวิสาหกิจ</option>
        <option value="">อื่นๆ</option> <!-- เปลี่ยนค่า value ของตัวเลือก "อื่นๆ" เป็น "other" -->
      </select><br><br>

      <!-- ช่อง input ที่จะปรากฏขึ้นเมื่อเลือก "อื่นๆ" -->
      <div id="otherJobInput" style="display:none;">
        <label for="other_job">กรุณาระบุอาชีพของคุณ:</label><br>
        <input type="text" id="other_job" name="job_type" placeholder="กรอกอาชีพของคุณ">
      </div>

      <script>
        function toggleOtherJobInput() {
          var jobTypeSelect = document.getElementById("job_path"); // เปลี่ยนจาก job_type เป็น job_path
          var otherJobInputDiv = document.getElementById("otherJobInput");

          // ถ้าผู้ใช้เลือก "อื่นๆ" ให้แสดง input กรอกอาชีพ
          if (jobTypeSelect.value === "") {
            otherJobInputDiv.style.display = "block";
          } else {
            otherJobInputDiv.style.display = "none";
          }

          // ลองพิมพ์ค่าที่เลือกในคอนโซลเพื่อตรวจสอบ
          console.log('Job Type Selected:', jobTypeSelect.value);
        }
      </script>


      <p><b> ตอนที่ 2 </b> ลักษณะของนักศึกษา</p>
      <p>1. จุดเด่นของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์ (ตอบได้มากกว่า 1 ข้อ)</p>
      <tr>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Professional_skills"
            value="1" />&ensp;ทักษะด้านวิชาชีพ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="theoretical_knowledge"
            value="1" />&ensp;ความรู้ทางทฤษฎี</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Practical_skills"
            value="1" />&ensp;ทักษะด้านการปฏิบัติ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Information_skills"
            value="1" />&ensp;ทักษะด้านเทคโนโลยีสารสนเทศ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Communication_skills"
            value="1" />&ensp;ทักษะด้านการสื่อสาร</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="thinking_skill"
            value="1" />&ensp;ความสามารถในการคิดวิเคราะห์</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Ability_work"
            value="1" />&ensp;ความสามารถในการทำงานร่วมกับผู้อื่น</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Management_ability"
            value="1" />&ensp;ความสามารถในการบริหารจัดการ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="develop_skill"
            value="1" />&ensp;ความสามารถในการพัฒนาตนเอง</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Honest" value="1" />&ensp;มีคุณธรรม
          จริยธรรม ซื่อสัตย์สุจริต</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="punctual" value="1" />&ensp;มีวินัย
          ตรงต่อเวลา และความรับผิดชอบ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="hard_working" value="1" />&ensp;ขยัน
          อดทน</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Add_Highlights"
            id="highlightstu_checkbox" value="อื่นๆ" onclick="togglehighlightstuInput()" />&ensp;อื่นๆ</td><br><br>

      </tr>

      <div id="highlightstuInput" style="display:none;">
        <label for="highlightstu_text">กรุณาระบุอื่นๆ:</label><br>
        <input type="text" id="highlightstu_text" name="Add_Highlights" placeholder="กรอกข้อมูล">
      </div>

      <script>
        function togglehighlightstuInput() {
          var highlightstuCheckbox = document.getElementById("highlightstu_checkbox");
          var highlightstuInputDiv = document.getElementById("highlightstuInput");

          // แสดงช่อง input ถ้าติ๊กเลือก checkbox และซ่อนถ้าไม่ได้เลือก
          if (highlightstuCheckbox.checked) {
            highlightstuInputDiv.style.display = "block";
          } else {
            highlightstuInputDiv.style.display = "none";
          }
        }
      </script>


      <p>2. จุดที่ควรปรับปรุงของนักศึกษาหลักสูตรวิศวกรรมคอมพิวเตอร์ (ตอบได้มากกว่า 1 ข้อ)</p>
      <tr>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Professional_skills_add"
            value="1" />&ensp;ทักษะด้านวิชาชีพ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="theoretical_knowledge_add"
            value="1" />&ensp;ความรู้ทางทฤษฎี</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Practical_skill_add"
            value="1" />&ensp;ทักษะด้านการปฏิบัติ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Information_skills_add"
            value="1" />&ensp;ทักษะด้านเทคโนโลยีสารสนเทศ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Communication_skills_add"
            value="1" />&ensp;ทักษะด้านการสื่อสาร</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="thinking_skill_add"
            value="1" />&ensp;ความสามารถในการคิดวิเคราะห์</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Ability_work_add"
            value="1" />&ensp;ความสามารถในการทำงานร่วมกับผู้อื่น</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Management_ability_add"
            value="1" />&ensp;ความสามารถในการบริหารจัดการ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="develop_skill_add"
            value="1" />&ensp;ความสามารถในการพัฒนาตนเอง</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Honest_add" value="1" />&ensp;มีคุณธรรม
          จริยธรรม ซื่อสัตย์สุจริต</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="punctual_add" value="1" />&ensp;มีวินัย
          ตรงต่อเวลา และความรับผิดชอบ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="hard_working_add" value="1" />&ensp;ขยัน
          อดทน</td><br><br>
          &ensp;&ensp;<td height="30" align="center">
  <input type="checkbox" name="Highlights_add" id="highlightstu1_checkbox" value="" onclick="togglehighlightstuInput1()" />
  &ensp;อื่นๆ
</td>

<div id="highlightstuInput1" style="display:none;">
  <label for="highlightstu_text1">กรุณาระบุอื่นๆ:</label><br>
  <input type="text" id="highlightstu_text1" name="Highlights_add" placeholder="กรอกข้อมูล">
</div>

      <script>
        function togglehighlightstuInput1() {
          var highlightstuCheckbox = document.getElementById("highlightstu1_checkbox");
          var highlightstuInputDiv = document.getElementById("highlightstuInput1");

          // แสดงช่อง input ถ้าติ๊กเลือก checkbox และซ่อนถ้าไม่ได้เลือก
          if (highlightstuCheckbox.checked) {
            highlightstuInputDiv.style.display = "block";
          } else {
            highlightstuInputDiv.style.display = "none";
          }
        }
      </script>


        <p> <b>ตอนที่ 3</b> ความพึงพอใจต่อคุณภาพหลักสูตร</p>

        <div class="col-md-10">


          <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
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
              <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>เนื้อหาหลักสูตร</strong></td>
            </tr>
            <tr>
              <td height="30">ความทันสมัยของเนื้อหารายวิชา</td>
              <td height="30" align="center"><input type="radio" name="course_content" value="5" required="required" />
              </td>
              <td height="30" align="center"><input type="radio" name="course_content" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="course_content" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="course_content" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="course_content" value="1" /></td>
            </tr>
            <tr>
              <td height="30">เนื้อหาวิชาที่เรียนตรงกับความต้องการของตลาดแรงงาน</td>
              <td width="5%" height="30" align="center"><input type="radio" name="labor_market" value="5"
                  required="required" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="labor_market" value="4" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="labor_market" value="3" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="labor_market" value="2" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="labor_market" value="1" /></td>
            </tr>
            <tr>
              <td height="30">การบูรณาการความรู้ทางทฤษฎีและปฏิบัติ</td>
              <td width="5%" height="30" align="center"><input type="radio" name="practical_knowledge" value="5"
                  required="required" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="practical_knowledge" value="4" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="practical_knowledge" value="3" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="practical_knowledge" value="2" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="practical_knowledge" value="1" /></td>
            </tr>
            <tr>
              <td height="30">ความทันสมัยของเทคโนโลยีและเครื่องมือที่ใช้ในการเรียนการสอน</td>
              <td width="5%" height="30" align="center"><input type="radio" name="Moderntools_teaching" value="5"
                  required="required" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="Moderntools_teaching" value="4" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="Moderntools_teaching" value="3" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="Moderntools_teaching" value="2" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="Moderntools_teaching" value="1" />
              </td>
            </tr>

            <tr>
              <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ผลลัพธ์ของหลักสูตร</strong></td>
            </tr>
            <tr>
              <td height="30">นักศึกษามีความรู้ความสามารถตรงตามมาตรฐานวิชาชีพ</td>
              <td height="30" align="center"><input type="radio" name="Studentshave_knowledge" value="5"
                  required="required" /></td>
              <td height="30" align="center"><input type="radio" name="Studentshave_knowledge" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="Studentshave_knowledge" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="Studentshave_knowledge" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="Studentshave_knowledge" value="1" /></td>
            </tr>
            <tr>
              <td height="30">นักศึกษาสามารถนำความรู้ไปประยุกต์ใช้ในการทำงานได้จริง</td>
              <td height="30" align="center"><input type="radio" name="Students_work" value="5" required="required" />
              </td>
              <td height="30" align="center"><input type="radio" name="Students_work" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="Students_work" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="Students_work" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="Students_work" value="1" /></td>
            </tr>


          </table><br>
          <p><b> ตอนที่ 4 </b> ความต้องการของผู้มีส่วนได้ส่วนเสีย (Stakeholders) ที่มีต่อการพัฒนาคุณภาพหลักสูตร</p>
          <p>1. ท่านคิดว่านักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีทักษะSoft skills
            ในเรื่องใดบ้าง (ตอบได้มากกว่า 1 ข้อ)</p>
      <tr>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="commi_skills"
            value="1" />&ensp;ทักษะการสื่อสาร</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="leadership"
            value="1" />&ensp;ความเป็นผู้นำ</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="assertiveness"
            value="1" />&ensp;ความกล้าแสดงออก</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="self_study"
            value="1" />&ensp;ทักษะการเรียนรู้ด้วยตนเอง</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Problem_solving"
            value="1" />&ensp;ทักษะการแก้ปัญหา</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Manage_time"
            value="1" />&ensp;ทักษะการวางแผนและจัดการเวลา</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="teamwork"
            value="1" />&ensp;การทำงานเป็นทีม</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="writing_skills"
            value="1" />&ensp;ทักษะการเขียนรายงาน</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="add_skills"
            id="suggestionsskill_checkbox" value="อื่นๆ" onclick="toggleSuggestionsSkillInput()" />&ensp;อื่นๆ</td>
        <br><br>

      </tr>
      <div id="suggestionsskillInput" style="display:none;">
        <label for="suggestionsskill_text">กรุณาระบุอื่นๆ:</label><br>
        <input type="text" id="suggestionsskill_text" name="add_skills" placeholder="กรอกข้อมูล">
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

      <p>2. ท่านคิดว่านักศึกษาที่จบหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ ควรมีความรู้ (Knowledge)
        เรื่องใดบ้าง (ตอบได้มากกว่า 1 ข้อ)</p>
      <tr>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="puter_arch"
            value="1" />&ensp;สถาปัตยกรรมคอมพิวเตอร์ (Computer Architecture)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Operating_sys"
            value="1" />&ensp;ระบบปฏิบัติการ (Operating Systems)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Software_Deve"
            value="1" />&ensp;การพัฒนาซอฟต์แวร์ (Software Development)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Database_Sys"
            value="1" />&ensp;ระบบฐานข้อมูล (Database Systems)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Computer_Net"
            value="1" />&ensp;เครือข่ายคอมพิวเตอร์ (Computer Networks)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Cybers"
            value="1" />&ensp;ความปลอดภัยทางไซเบอร์ (Cybersecurity)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Machine_Learn"
            value="1" />&ensp;การเรียนรู้ของเครื่องและปัญญาประดิษฐ์ (Machine Learning and Artificial Intelligence)
        </td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Embedded_Sys"
            value="1" />&ensp;ระบบฝังตัว (Embedded Systems)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Information_The"
            value="1" />&ensp;ทฤษฎีข้อมูลและการประมวลผลสัญญาณ (Information Theory and Signal Processing)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Mathematics"
            value="1" />&ensp;คณิตศาสตร์และสถิติ (Mathematics and Statistics)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Engineering"
            value="1" />&ensp;หลักการวิศวกรรม (Engineering Principles)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="Cloud"
            value="1" />&ensp;การประมวลผลบนระบบคลาวด์ (Cloud Computing)</td><br><br>
        &ensp;&ensp;<td height="30" align="center"><input type="checkbox" name="add_Knowledge"
            id="suggestionsknow_checkbox" value="อื่นๆ" onclick="toggleSuggestionsknowInput()" />&ensp;อื่นๆ</td>
        <br><br>

      </tr>
      <div id="suggestionsknowInput" style="display:none;">
        <label for="suggestionsknow_text">กรุณาระบุอื่นๆ:</label><br>
        <input type="text" id="suggestionsknow_text" name="add_Knowledge" placeholder="กรอกข้อมูล">
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



      <p><b> ตอนที่ 5 </b> ข้อคิดเห็นหรือข้อเสนอแนะเพิ่มเติม</p>
      <textarea name="Additional_suggestions" cols="90" rows="3" id="Additional_suggestions"></textarea>
      <br><br>
      <center>
        <b> ขอขอบคุณท่านที่สละเวลาในการตอบแบบสอบถามนี้ ความคิดเห็นของท่านมีคุณค่าอย่างยิ่งในการ</b><br>
        <b> พัฒนาหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ </b>
        <br><br>
        <a href="index.php" class="btn btn-danger">ยกเลิก <i class="fa fa-times-circle"
            aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" name="save" class="btn btn-primary">ส่งแบบสอบถาม <i class="fa fa-chevron-circle-right"
            aria-hidden="true"></i></button>
      </center>
    </form>
    <br /><br />
  </div>
  </div>
  </div>
</body>

</html>
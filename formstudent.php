<!DOCTYPE html>
<html lang="th">

<head>
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>แบบสอบถามความต้องการ/ความคาดหวังต่อการเข้าศึกษา</title>
</head>

<body>


  <div class="container">
    <a href="index.php" class="btn btn-primary"><i class="fa fa-home"></i> หน้าแรก</a><br>



    <div class="header">

      <img src="pic/logo.png">&nbsp;&nbsp;&nbsp;
      <div class="text">แบบสอบถามความต้องการ/ความคาดหวังต่อการเข้าศึกษา<br>หลักสูตร วศ.บ.วิศวกรรมคอมพิวเตอร์ มทร.ล้านนา ตาก</div>


    </div>

    <b>คำชี้แจง</b><br>
    <p>แบบสอบถามนี้จัดทำขึ้นเพื่อประเมินความพึงพอใจของผู้มีส่วนได้ส่วนเสียต่อการพัฒนาคุณภาพของหลักสูตรวิศวกรรมคอมพิวเตอร์ ข้อมูลที่ได้จะถูกนำไปใช้เพื่อปรับปรุงและพัฒนาหลักสูตรให้มีคุณภาพยิ่งขึ้น กรุณาตอบคำถามตามความเป็นจริง</p>
    <p><b>ตอนที่ 1</b>&nbsp;ข้อมูลทั่วไปของผู้ตอบแบบสอบถาม</p>
    <form id="formq" name="formq" method="post" action="submit_survey_stu.php">
    <label for="gender">เพศ:</label>
    <select name="gender" id="gender" required>
      <option value="">เลือกเพศ</option>
      <option value="ชาย">ชาย</option>
      <option value="หญิง">หญิง</option>
    </select><br><br>

    <!-- วุฒิการศึกษาเดิม -->
    <label for="education_level">วุฒิการศึกษาเดิม:</label>
    <select name="education_level" id="education_level" required>
      <option value="">เลือกวุฒิการศึกษาเดิม</option>
      <option value="ปวช.">ปวช.</option>
      <option value="ปวส.">ปวส.</option>
      <option value="ม.6">ม.6</option>
    </select><br><br>

    <!-- โรงเรียน/สถาบันการศึกษาเดิม -->
    <label for="edu">โรงเรียน/สถาบันการศึกษาเดิม:</label><br>
    <input type="text" name="school" id="school" placeholder="กรุณาระบุข้อความ" required><br><br>

    <!-- จังหวัด -->
    <label for="province">จังหวัด:</label><br>

    <select id="province" name="province">
      <option value="กรุณาเลือกจังหวัด">กรุณาเลือกจังหวัด</option>
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่</option>
      <option value="กาญจนบุรี">กาญจนบุรี</option>
      <option value="กาฬสินธุ์">กาฬสินธุ์</option>
      <option value="กำแพงเพชร">กำแพงเพชร</option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
      <option value="ชลบุรี">ชลบุรี</option>
      <option value="ชัยนาท">ชัยนาท</option>
      <option value="ชัยภูมิ">ชัยภูมิ</option>
      <option value="ชุมพร">ชุมพร</option>
      <option value="เชียงราย">เชียงราย</option>
      <option value="เชียงใหม่">เชียงใหม่</option>
      <option value="ตรัง">ตรัง</option>
      <option value="ตราด">ตราด</option>
      <option value="ตาก">ตาก</option>
      <option value="นครนายก">นครนายก</option>
      <option value="นครปฐม">นครปฐม</option>
      <option value="นครพนม">นครพนม</option>
      <option value="นครราชสีมา">นครราชสีมา</option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
      <option value="นครสวรรค์">นครสวรรค์</option>
      <option value="นนทบุรี">นนทบุรี</option>
      <option value="นราธิวาส">นราธิวาส</option>
      <option value="น่าน">น่าน</option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ปทุมธานี">ปทุมธานี</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
      <option value="ปราจีนบุรี">ปราจีนบุรี</option>
      <option value="ปัตตานี">ปัตตานี</option>
      <option value="พะเยา">พะเยา</option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
      <option value="พังงา">พังงา</option>
      <option value="พัทลุง">พัทลุง</option>
      <option value="พิจิตร">พิจิตร</option>
      <option value="พิษณุโลก">พิษณุโลก</option>
      <option value="เพชรบุรี">เพชรบุรี</option>
      <option value="เพชรบูรณ์">เพชรบูรณ์</option>
      <option value="แพร่">แพร่</option>
      <option value="ภูเก็ต">ภูเก็ต</option>
      <option value="มหาสารคาม">มหาสารคาม</option>
      <option value="มุกดาหาร">มุกดาหาร</option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
      <option value="ยโสธร">ยโสธร</option>
      <option value="ยะลา">ยะลา</option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
      <option value="ระนอง">ระนอง</option>
      <option value="ระยอง">ระยอง</option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี</option>
      <option value="ลำปาง">ลำปาง</option>
      <option value="ลำพูน">ลำพูน</option>
      <option value="เลย">เลย</option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา</option>
      <option value="สตูล">สตูล</option>
      <option value="สมุทรปราการ">สมุทรปราการ</option>
      <option value="สมุทรสงคราม">สมุทรสงคราม</option>
      <option value="สมุทรสาคร">สมุทรสาคร</option>
      <option value="สระแก้ว">สระแก้ว</option>
      <option value="สระบุรี">สระบุรี</option>
      <option value="สิงห์บุรี">สิงห์บุรี</option>
      <option value="สุโขทัย">สุโขทัย</option>
      <option value="สุพรรณบุรี">สุพรรณบุรี</option>
      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
      <option value="สุรินทร์">สุรินทร์</option>
      <option value="หนองคาย">หนองคาย</option>
      <option value="หนองบัวลำภู">หนองบัวลำภู</option>
      <option value="อ่างทอง">อ่างทอง</option>
      <option value="อำนาจเจริญ">อำนาจเจริญ</option>
      <option value="อุดรธานี">อุดรธานี</option>
      <option value="อุตรดิตถ์">อุตรดิตถ์</option>
      <option value="อุทัยธานี">อุทัยธานี</option>
      <option value="อุบลราชธานี">อุบลราชธานี</option>
    </select>


    <p> <b>ตอนที่ 2</b> ความพึงพอใจต่อคุณภาพหลักสูตร</p>

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
            <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ปัจจัยที่มีผลต่อการเลือกเรียนหลักสูตร</strong></td>
          </tr>
          <tr>
            <td height="30">ชื่อเสียงของมหาวิทยาลัย</td>
            <td height="30" align="center"><input type="radio" name="university_reputation" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="university_reputation" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="university_reputation" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="university_reputation" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="university_reputation" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ที่ตั้งของมหาวิทยาลัย</td>
            <td width="5%" height="30" align="center"><input type="radio" name="Location_university" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Location_university" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Location_university" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Location_university" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Location_university" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การประชาสัมพันธ์จากมหาวิทยาลัย คณะ หลักสูตร</td>
            <td width="5%" height="30" align="center"><input type="radio" name="public_relations" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="public_relations" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="public_relations" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="public_relations" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="public_relations" value="1" /></td>
          </tr>
          <tr>
            <td height="30">หลักสูตรมีความทันสมัย</td>
            <td width="5%" height="30" align="center"><input type="radio" name="curriculum" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="curriculum" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="curriculum" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="curriculum" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="curriculum" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">การจัดการเรียนการสอนได้มาตรฐาน</td>
            <td width="5%" height="30" align="center"><input type="radio" name="teac_date" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="teac_date" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="teac_date" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="teac_date" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="teac_date" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">จำนวนผู้สำเร็จการศึกษาได้งานทำสูง</td>
            <td width="5%" height="30" align="center"><input type="radio" name="number_graduates" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="number_graduates" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="number_graduates" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="number_graduates" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="number_graduates" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">ค่าใช้จ่ายในการศึกษามีความเหมาะสม</td>
            <td width="5%" height="30" align="center"><input type="radio" name="cost_education" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="cost_education" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="cost_education" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="cost_education" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="cost_education" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">การให้โควตา</td>
            <td width="5%" height="30" align="center"><input type="radio" name="quotas" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="quotas" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="quotas" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="quotas" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="quotas" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">มีบุคคลที่ประทับใจ (Idol) เป็นศิษย์เก่า</td>
            <td width="5%" height="30" align="center"><input type="radio" name="Idol" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Idol" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Idol" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Idol" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Idol" value="1" /></td>
          </tr>
          <tr>
          <tr>
            <td height="30">ได้รับคำแนะนำจากผู้ปกครอง/เพื่อน/รุ่นพี่/ครูแนะแนว</td>
            <td width="5%" height="30" align="center"><input type="radio" name="Receive_advice" value="5" required="required" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Receive_advice" value="4" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Receive_advice" value="3" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Receive_advice" value="2" /></td>
            <td width="5%" height="30" align="center"><input type="radio" name="Receive_advice" value="1" /></td>
          </tr>
          <tr>
             <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ความคาดหวังที่มีต่อหลักสูตร</strong></td>
          </tr>
          <tr>
            <td height="30">หลักสูตรมีความสอดคล้องกับความต้องการของตลาดแรงงาน</td>
            <td height="30" align="center"><input type="radio" name="labor_market" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="labor_market" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="labor_market" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="labor_market" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="labor_market" value="1" /></td>
          </tr>
          <tr>
            <td height="30">มีกิจกรรมเสริมหลักสูตรฯ ที่เป็นประโยชน์ต่อนักศึกษา</td>
            <td height="30" align="center"><input type="radio" name="extra_curricular" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="extra_curricular" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="extra_curricular" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="extra_curricular" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="extra_curricular" value="1" /></td>
          </tr>
          <tr>
            <td height="30">มีกิจกรรมการเรียนการสอนที่ส่งเสริมนักศึกษาด้านคุณธรรมจริยธรรม และทักษะที่จำเป็นต่อการเรียนรู้</td>
            <td height="30" align="center"><input type="radio" name="ethical_aspects" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="ethical_aspects" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="ethical_aspects" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="ethical_aspects" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="ethical_aspects" value="1" /></td>
          </tr>

          <tr>
            <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ความคาดหวังที่มีต่ออาจารย์ผู้สอน</strong></td>
          </tr>
          <tr>
            <td height="30">อาจารย์มีประสบการณ์ ความรู้ในเนื้อหาวิชาที่สอนเป็นอย่างดี</td>
            <td height="30" align="center"><input type="radio" name="teacher_experience" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_experience" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_experience" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_experience" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="teacher_experience" value="1" /></td>
          </tr>
          <tr>
            <td height="30">สามารถถ่ายทอดความรู้ และใช้สื่ออุปกรณ์การสอน ได้อย่างเหมาะสม</td>
            <td height="30" align="center"><input type="radio" name="transfer_knowledge" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="transfer_knowledge" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="transfer_knowledge" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="transfer_knowledge" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="transfer_knowledge" value="1" /></td>
          </tr>
          <tr>
            <td height="30">อาจารย์เน้นการเรียนการสอนที่ให้นักศึกษาได้ฝึกปฏิบัติจริง</td>
            <td height="30" align="center"><input type="radio" name="real_practice" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="real_practice" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="real_practice" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="real_practice" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="real_practice" value="1" /></td>
          </tr>

          <tr>
           <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ความคาดหวังต่อการให้บริการทางการศึกษา</strong></td>
          </tr>
          <tr>
            <td height="30">มีอาคารเรียน ห้องเรียน ห้องปฏิบัติการเพียงพอ</td>
            <td height="30" align="center"><input type="radio" name="school_building" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="school_building" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="school_building" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="school_building" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="school_building" value="1" /></td>
          </tr>
          <tr>
            <td height="30">มีสภาพแวดล้อม อาคารสถานที่ ที่เหมาะสมต่อการเรียนรู้</td>
            <td height="30" align="center"><input type="radio" name="environment" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="environment" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="environment" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="environment" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="environment" value="1" /></td>
          </tr>
          <tr>
            <td height="30">มีเครื่องคอมพิวเตอร์ที่ใช้ในการจัดการเรียนการสอนและการสืบค้นข้อมูลได้อย่างทั่วถึงและมีประสิทธิภาพ</td>
            <td height="30" align="center"><input type="radio" name="computer" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="computer" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="computer" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="computer" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="computer" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การให้บริการระบบเครือข่ายอินเทอร์เน็ตและระบบ Wi fi ได้อย่างทั่วถึงและมีประสิทธิภาพ</td>
            <td height="30" align="center"><input type="radio" name="network_system" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="network_system" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="network_system" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="network_system" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="network_system" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ความทันสมัยของอุปกรณ์ในห้องปฏิบัติการ</td>
            <td height="30" align="center"><input type="radio" name="modernization" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="modernization" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="modernization" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="modernization" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="modernization" value="1" /></td>
          </tr>
          <tr>
            <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ความคาดหวังด้านทักษะที่จะได้รับ</strong></td>
          </tr>
          <tr>
            <td height="30">การเขียนโปรแกรม (Programming)</td>
            <td height="30" align="center"><input type="radio" name="Programming" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="Programming" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="Programming" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="Programming" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="Programming" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ปัญญาประดิษฐ์และการเรียนรู้ของเครื่อง (Artificial Intelligence and Machine Learning)</td>
            <td height="30" align="center"><input type="radio" name="Machine" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="Machine" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="Machine" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="Machine" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="Machine" value="1" /></td>
          </tr>
          <tr>
            <td height="30">วิทยาการข้อมูลและการวิเคราะห์ข้อมูล (Data Science and Data Analytics)</td>
            <td height="30" align="center"><input type="radio" name="Data_Science" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="Data_Science" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="Data_Science" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="Data_Science" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="Data_Science" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การสร้างและดูแลระบบเครือข่ายคอมพิวเตอร์</td>
            <td height="30" align="center"><input type="radio" name="network_sys" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="network_sys" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="network_sys" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="network_sys" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="network_sys" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การพัฒนาและควบคุมอุปกรณ์ IoT</td>
            <td height="30" align="center"><input type="radio" name="IoT" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="IoT" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="IoT" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="IoT" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="IoT" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การแก้ปัญหาอย่างเป็นระบบ</td>
            <td height="30" align="center"><input type="radio" name="problem_solving" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="problem_solving" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="problem_solving" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="problem_solving" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="problem_solving" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การทำงานเป็นทีม</td>
            <td height="30" align="center"><input type="radio" name="teamwork" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="teamwork" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="teamwork" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="teamwork" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="teamwork" value="1" /></td>
          </tr>
          <tr>
            <td height="30">การสื่อสารและการนำเสนอ</td>
            <td height="30" align="center"><input type="radio" name="presentation" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="presentation" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="presentation" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="presentation" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="presentation" value="1" /></td>
          </tr>
          <tr>
             <td height="30" colspan="6" bgcolor="#F4F4F4"><strong>ความคาดหวังด้านการศึกษาต่อ/ได้งานทำ</strong></td>
          </tr>
          <tr>
            <td height="30">ต้องการศึกษาต่อในระดับที่สูงขึ้น</td>
            <td height="30" align="center"><input type="radio" name="continue_education" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="continue_education" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="continue_education" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="continue_education" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="continue_education" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ต้องการทำงานในหน่วยงานของรัฐ</td>
            <td height="30" align="center"><input type="radio" name="work_government" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="work_government" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="work_government" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="work_government" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="work_government" value="1" /></td>
          </tr>
          <tr>
            <td height="30">ต้องการทำงานในหน่วยงานของเอกชน</td>
            <td height="30" align="center"><input type="radio" name="work_privateagency" value="5" required="required" /></td>
            <td height="30" align="center"><input type="radio" name="work_privateagency" value="4" /></td>
            <td height="30" align="center"><input type="radio" name="work_privateagency" value="3" /></td>
            <td height="30" align="center"><input type="radio" name="work_privateagency" value="2" /></td>
            <td height="30" align="center"><input type="radio" name="work_privateagency" value="1" /></td>
          </tr> 
        </table><br>
        <b> ตอนที่ 3 </b>
        <p>ความคาดหวังเพิ่มเติมนอกเหนือจากที่ปรากฎข้างต้น</p>
        <textarea name="add_stu" cols="90" rows="3" id="detail"></textarea>
        <br><br>
        <center>
          <b> ขอขอบคุณท่านที่สละเวลาในการตอบแบบสอบถามนี้ ความคิดเห็นของท่านมีคุณค่าอย่างยิ่งในการ</b><br>
          <b> พัฒนาหลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมคอมพิวเตอร์ </b>
          <br><br>
          <a href="index.php" class="btn btn-danger">ยกเลิก <i class="fa fa-times-circle" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" name="save" class="btn btn-primary">ส่งแบบสอบถาม <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
        </center>
      </form>
      <br /><br />
    </div>
  </div>
  </div>
</body>

</html>
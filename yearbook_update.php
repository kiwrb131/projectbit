<?php include_once("loginDB.php");?>
<html lang="en">
<head>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรุ่นนักศึกษา</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminBPC/head_sideAndFooter.css">
    <link rel="stylesheet" href="../adminBPC/yearbook_update.css">
</head>
<body> 
<form action="loginDB.php" method="POST">

    <div class="head-con">
    <div class="nav_logo">
        <img src="../adminBPC/pic/Image 12224.png" alt="" >
   </div>

    <div class="nav_logout">
        <div class="logout">
            <h1>User :
                <span id="nameuser"><?php echo $_SESSION['username'];?></span> 
                    <button class="btn-logout" type="submit" name="logout">Logout</button>
                    </form>
            </h1>
        </div>
    </div>
    <div class="menu">
        <div class="bg-menu">
            <h1>จัดการเว็บไซต์</h1>
                    <hr>
                    <ul class="ul-menu">
                        <a href="home.php"><li > หน้าหลักเว็บไซต์</li></a>
                       <li class="showli"> <a href="course.php">หลักสูตร</a> <span style='font-size:25px; float: right; position: relative; right: 10px;'>&or;</span> <ul class="dropdown">
                            <a href="professor.php"><li>คณะอาจารย์</li></a>
                            <a href="award.php"><li >ผลงานและรางวัล</li></a></li>
                        </ul>
                        <a href="Yearbook.php"><li class="active">ทำเนียบรุ่น</li></a>
                        <a href="activity.php"><li> ภาพกิจกรรม</li></a>
                        <a href="QA.php"><li >คำถาม QA</li></a>
                        <a href="contact.php"><li>การติดต่อ</li></a>
                       <a href="massage.php"><li>กล่องข้อความ</li></a>
                        <a href="update_admin.php"><li>Admin</li></a>
                      </ul>
        </div>
    </div>
    <div class="content">
     
        <div class="head-text">
        <form action="insert_update_yearbook.php" method="POST" enctype="multipart/form-data">
            <h1>เพิ่มรุ่นนักศึกษา</h1>
        </div>
        <div class="content-inside">
           
           <p>รุ่นที่จะเพิ่ม : <input type="text" name="gen" id=""></p> 
         
        <br> 
        <p>จำนวนนักศึกษา : <input type="text" name="unit" id=""> </p> 
         <br>
        <div class="ckbox">
        <span > สถานะการเผยแพร่ : </span>  <input type='radio' name='status' id='radio-on'  value="1"> <label for='radio-on' name='public'>เผยแพร่</label> 
                            <input type='radio' name='status' id='radio-off' value="0"> <label for='radio-off' name='non-ppublic'>ไม่เผยแพร่</label><br>
        </div>                   
        <p>เพิ่มรูปภาพหลักของรุ่น :<input type="file" name="upload_yearbook" value="อัพโหลดภาพ" class="btn-upload"> </p> <p class='textred' style='color:red; font-size:16px'>ต้องใส่รูปภาพอย่างน้อย 1 รูปภาพ</p><br>
       


    <hr class="end_centent">
    <input type="submit" value="เพิ่ม/บันทึก" name="btn" class="btn-ok">
    </form>
    <a href='Yearbook.php'><input type='button' value='ย้อนกลับ' class='btn-back'></a>
        </div>
       
    </div>

</body>
</html>
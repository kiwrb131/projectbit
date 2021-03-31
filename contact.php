<?php include_once("loginDB.php");?>
<html lang="en">
<head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การติดต่อ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminBPC/head_sideAndFooter.css">
    <link rel="stylesheet" href="../adminBPC/contact.css">
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
                            <a href="Yearbook.php"><li >ทำเนียบรุ่น</li></a>
                            <a href="activity.php"><li> ภาพกิจกรรม</li></a>
                            <a href="QA.php"><li >คำถาม QA</li></a>
                            <a href="contact.php"><li class="active">การติดต่อ</li></a>
                           <a href="massage.php"><li>กล่องข้อความ</li></a>
                            <a href="update_admin.php"><li>Admin</li></a>
                          </ul>
            </div>
        </div>
        <!-- start content -->
        
        <div class="content">
            
            <form action="update_contact.php" method="POST">
                <?php include_once('connectDB.php');
                $query = "SELECT * FROM tbcon";
                $result = mysqli_query($conn,$query);
                $rs=mysqli_fetch_array($result);
           
               echo "<div class='grid-add'>
                    <span>ที่อยู่ : </span><textarea name='T' id='txt-address' >$rs[Addres]</textarea>
                </div>
                <span style='margin-left: 39px;'>เบอร์โทรติดต่อ :</span><input name='N' type='text' id='txt-number' value='$rs[Phone]'>
                <div class='grid-socail'>
                <span>ช่องทาง : Facebook</span><span>ลิ้งหน้าเว็บไซต์ (URL) :</span><input name='F'type='text' class='txt-socail'id='txt-facebook' value='$rs[Facebook]'>
            </div>
                <div class='grid-socail'>
                    <span>ช่องทาง : Line</span><span>ลิ้งหน้าเว็บไซต์ (URL) :</span><input name='L' type='text' class='txt-socail' id='txt-line' value='$rs[Li]'>
                </div>
                <div class='Gbtn'> <input type='submit' name='submit' value='บันทึก' class='btn-ok'>
                    ";
                    ?>
        </div></form>
         
        <footer>
            <div class="foot">
            </div>
        </footer>
    </body>
</html>
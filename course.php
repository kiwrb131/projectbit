<?php include_once("loginDB.php");?>
<?php include_once('connectDB.php');

$yearch="2561";
$query="SELECT * FROM tbcouse";
$_SESSION['nameimg']=$_POST['img'];
$result=mysqli_query($conn,$query);
if(isset($_POST['Year'])){
$yearch=$_POST['Year'];


}
if(isset($_POST['delete-Photo'])){
    $IDPhoto= $_POST['img'];
    
     
      $queryDelete="DELETE FROM tbimg WHERE ID = '$IDPhoto'";
             $resultDelete=mysqli_query($conn,$queryDelete);
             if($resultDelete){
                header('Refresh: 0');
             }  else{
                 echo "error";
             }
            
 }
 if(isset($_POST['insertPhoto'])){
 $queryID = "SELECT MAX(ID) AS Maxid FROM tbimg";
$id=mysqli_query($conn,$queryID);
$rs = mysqli_fetch_array($id);
$pulsID= $rs['Maxid'];
$pulsID = $pulsID+2;






$target_dir = "upload_img/";
$filename=$_FILES["upload_E"]["name"];
$target_file = $target_dir.basename($filename);
$uploadOk = 1;
if(move_uploaded_file($_FILES['upload_E']['tmp_name'],$target_file)){
   
    $query = "INSERT INTO tbimg(ID,Environmentimg1) 
    VALUE('$pulsID','$filename')";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Refresh: 0');
    }else{
        echo 'error';
       
    }}}

    if(isset($_POST['Delete-Year'])){
        $DelYear = $_POST['Delete-Year'];
        $queryelYear="DELETE FROM tbcouse WHERE Year = '$DelYear'";
        $querydelMajor ="DELETE FROM tbmajor WHERE Year = '$DelYear'";
        $querydelP4="DELETE FROM tbp4 WHERE Year = '$DelYear'";
        $resultdelMajor = mysqli_query($conn,$querydelMajor);
        $resultDelYear=mysqli_query($conn,$queryelYear);
        $resultP4 = mysqli_query($conn,$querydelP4);
        $resultP4;
        $resultdelMajor;
        $resultDelete;
        header('Refresh: 0');
      
    }
   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หลักสูตร</title>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" href="../adminBPC/head_sideAndFooter.css">
    <link rel="stylesheet" href="../adminBPC/course.css">
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
                           <li class="showli" id="active"> <a href="course.php" class=''>หลักสูตร</a> <span style='font-size:25px; float: right; position: relative; right: 10px;'>&or;</span> <ul class="dropdown">
                                <a href="professor.php"><li>คณะอาจารย์</li></a>
                                <a href="award.php"><li >ผลงานและรางวัล</li></a></li>
                            </ul>
                            <a href="Yearbook.php"><li >ทำเนียบรุ่น</li></a>
                            <a href="activity.php"><li> ภาพกิจกรรม</li></a>
                            <a href="QA.php"><li >คำถาม QA</li></a>
                            <a href="contact.php"><li>การติดต่อ</li></a>
                           <a href="massage.php"><li>กล่องข้อความ</li></a>
                            <a href="update_admin.php"><li>Admin</li></a>
                          </ul>
            </div>
        </div>
        <!-- end head -->
        <!-- start content-->
        <div class="content">
            <div class="head-text">
                <h1>หลักสูตร</h1>
            </div>
            <div class="content-inside">
               <form action="course.php" method="POST">
                    <div class="select-course"> 
                        <label for="year_course">หลักสูตรปี : </label>
                        <div class="year_c">
                    <?php while ($rs = mysqli_fetch_assoc($result)): ?>
                        <button type='submit' name='Year' class='btn_click2' value=<?php echo "'$rs[Year]'"?>><?php echo "พ.ศ.".$rs['Year'];?></button><button type='submit' class='btn-delete' name='Delete-Year' value=<?php echo"'$rs[Year]'"?> onClick="return confirm('คุณแน่ใจนะที่จะลบปีหลักสูตรนี้?');">x</button> 
                     <?php endwhile;?>
                     <a href="#popup1"><input type="button"  value="เพิ่มหลักสูตรปีใหม่" class="btn-add" id="add-course"></a>   
                    </div></form>
                  
                   <form action="update_course.php" method="POST">
                   
                <div class="headadd">
                    
               
                    
                </div>
                    <!-- popup -->
                    <div id='popup1' class='overlay'>
                        <div class='popup'>
                            <h2>เพิ่มหลักสูตรปีใหม่</h2>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                                <span>ปีพุทธศักราช : </span><input type="text" name="inputYear" id="">
                                <button type="submit" name="add-year" class="btn-add" id="add-course">เพิ่ม</button>

                            </div>
                        </div>
                    </div>
                </div> <!-- end select -->

                     <!-- select database tbcouse -->
                   <?php 
                        $queryDataCouse="SELECT * FROM tbcouse WHERE Year ='$yearch'";  
                        $resultData=mysqli_query($conn,$queryDataCouse);
                        $res = mysqli_fetch_assoc($resultData);
                        ?>
                    <!-- select database tbmajor -->
                   <?php $queryMajor="SELECT Name , ID FROM tbmajor WHERE Year ='$yearch'";
                    $resultMajor=mysqli_query($conn,$queryMajor);
                   while($resu=mysqli_fetch_array($resultMajor)){
                       $arrayName[]=$resu['Name'];
                        $arrayId[]=$resu['ID'];
                   }
                   ?>
                    




                <div class="course-name">
                    <h1>ชื่อหลักสูตร</h1>
                    <input type="text" name="nameTH" id="nameT-course" value=<?php echo "'$res[nameTH]'"?> >
                    <h1>ชื่อหลักสูตร (ภาษาอังกฤษ)</h1>
                    <input type="text" name="nameENG" id="nameE-course" value=<?php echo "'$res[nameENG]'"?>>
                    <br><br>
                    <h1>ชื่อสาขาวิชา (ภาษาไทย)</h1>
                    <div class="side">
                    <h1>ชื่อเต็ม</h1>
                        <input type="text" name="namefullTH" id="nameT-subject" value=<?php echo "'$res[Namefullth]'"?>>
                        <h1>ชื่อย่อ</h1>
                        <input type="text" name="nameshotTH" id="nameTt-subject" value=<?php echo "'$res[Nameshotth]'"?>>
                    </div><br>
                    <h1>ชื่อสาขาวิชา (ภาษาอังกฤษ)</h1>
                    <div class="side">
                        <h1>ชื่อเต็ม</h1>
                        <input type="text" name="namefullENG" id="nameE-subject" value=<?php echo "'$res[Namefulleng]'"?>>
                        <h1>ชื่อย่อ</h1>
                        <input type="text" name="nameshotENG" id="nameEe-subject" value=<?php echo "'$res[Nameshoteng]'"?>>
                    </div>
                    
                    <hr class="end_centent">
                </div> <!-- end name -->
                    <!-- end name -->
                    <div class="course-groupmajor">
                        <div class="zone4">
                        <h1>กลุ่มวิชา</h1>
                       <?php 
                     
                    if(mysqli_num_rows($resultMajor)==0):

                       ?>   
                                      <span><?php echo $arrayName[0]?></span><button name="updatemajor" type="submit" class='btn-ok' value=<?php echo "'$yearch'"?>>เพิ่ม</button><br>
                                      <span><?php echo $arrayName[1]?></span><button name="updatemajor" type="submit" class='btn-ok' value=<?php echo "'$yearch'"?>>เพิ่ม</button><br>
                                      <span><?php echo $arrayName[2]?></span><button name="updatemajor" type="submit" class='btn-ok' value=<?php echo "'$yearch'"?>>เพิ่ม</button><br>
                                
                               <?php else:?>
                                      <span><?php echo $arrayName[0]?></span><button name="updatemajor" type="submit" class='btn-ok' value=<?php echo "'$arrayId[0]'"?>>แก้ไข</button><br>
                                      <span><?php echo $arrayName[1]?></span><button name="updatemajor" type="submit" class='btn-ok' value=<?php echo "'$arrayId[1]'"?>>แก้ไข</button><br>
                                      <span><?php echo $arrayName[2]?></span><button name="updatemajor" type="submit" class='btn-ok' value=<?php echo "'$arrayId[2]'"?>>แก้ไข</button><br>
                                      <?php endif;?>
                        </div>
                        <div class="zone2">
                            <p>หน่วยกิตของสาขาวิชา : <input type="text" name="credit" id="" value=<?php echo "'$res[Credit]'"?> class="unit"> <span>หน่วยกิต</span> </p>
                        </div>
                    <!-- <select name="group-major" id="group-major">
                        <option value="dev">การพัฒนาซอฟต์แวร์</option>
                        <option value="it-management">การจัดการเทคโนโลยีสารสนเทศ</option>
                        <option value="Multimedia">เทคโนโลยีมัลติมีเดีย</option>
                    </select> -->
                    
                    <!-- <input type="button" value="เพิ่มกลุ่มวิชา" class="btn-add">
                    <input type="button" value="ลบกลุ่มวิชา" class="btn-delete"><br><br> -->
                    <!-- <label >ชื่อกลุ่มวิชา :</label>
                    <input type="text" name="" id=""> <input type="button" value="แก้ไขชื่อกลุ่มวิชา" class="btn-upload"><br><br> -->


                    <!-- <label for="">รายละเอียด </label> <textarea name="detail-groupmajor" id="" cols="30" rows="10"></textarea><br>
                    <label for="">รูปภาพหลัก : </label><input type="button" value="อัพโหลดภาพ" class="btn-upload"> -->
                    <hr class="end_centent">
                </div> <!-- end gropmajor -->

                
                <div class="course-detail">
                    
                    <div class="zone3">
                            <h1>คุณสมบัติผู้เข้าศึกษา</h1>
                            <textarea name="qualifications" id="" cols="50" rows="4"><?php echo "$res[Qualifications]"?></textarea>
                     </div>
                     
                    <div class="zone1">
                        <h1>รูปแบบหลักสูตรภาคปกติ</h1>
                        <input type="text" name="course1" id="nameT-subject" value=<?php echo "'$res[Course1]'"?>><br>
                        <!-- select database tbp4 -->
                   <?php
                        $queryP4="SELECT * FROM tbp4 WHERE Year ='$yearch'";
                        $resultP4=mysqli_query($conn,$queryP4);
                        $resultp4=mysqli_fetch_assoc($resultP4);
                   ?>
                  
                    
                                 
                         
                <span><?php echo $resultp4['Name']?></span><button name="updateP4" type="submit" class='btn-ok' value=<?php echo "'$resultp4[ID]'"?>>แก้ไข</button><br> 
                                      
                  
                    <hr class="end_centent">
                </div> <!-- end detail -->
             <button type="submit" value=<?php echo "'$yearch'"?> name="ok" class="btn-ok">บันทึก</button>
                

                </form>
                <form action="course.php" method="POST" enctype="multipart/form-data">
                <div class="course-environment">
                    <h1>สภาพแวดล้อม  </h1> 
                    <label for="">เลือกภาพที่มีอยู่ :</label> 
                    
                    <select name="img" id="">
                    <?php 
                   $query="SELECT * FROM tbimg";
                   $result=mysqli_query($conn,$query);
                   
                   while($resultTbimg = mysqli_fetch_assoc($result)){
                      
                    if($_SESSION['nameimg'] == $resultTbimg['ID']){
                        echo "<option value='$resultTbimg[ID]' selected>$resultTbimg[Environmentimg1]</option>";
                    }else{
                    echo "<option value='$resultTbimg[ID]'>$resultTbimg[Environmentimg1]</option>";
                }
                   }
                   echo "</select>
                   <button type='submit' name='search' value='$resultTbimg[ID]' class='btn-upload'>ดูรูป</button>";
                   echo "<div class='previewimg'>";
                   if(isset($_POST['search'])){
                       $id=$_POST['img'];
                       $queryPhoto="SELECT * FROM tbimg WHERE ID='$id'";
                       $FresultPhoto=mysqli_query($conn,$queryPhoto);
                       $resultPhoto=mysqli_fetch_assoc($FresultPhoto);
                       session_start();
                    
                    
                        echo "<img src='../adminBPC/upload_img/$resultPhoto[Environmentimg1]' alt=''>";
                    }
                   
                        
                    echo"<input type='file' name='upload_E' class='btn-upload'>
                                <p class='textred' style='color:red'>ต้องใส่รูปภาพอย่างน้อย 1 รูปภาพ</p><br>

                    <button type='submit' name='insertPhoto' value='' class='btn-upload'> อัพภาพสภาพแวดล้อม</button>
                    <button type='submit' value='' name='delete-Photo' class='btn-delete'>ลบภาพสภาพแวดล้อม</button> ";
                   ?> 
                        
                   
                        
                    
                        
                    </form>
                    </div>
                    
                    <hr class="end_centent"> 
                </div> <!-- end environment -->
              
    
    
            </div> <!-- end content-inside -->
           
              
        </div>  <!-- end content -->
      
        
      
        <script>
            CKEDITOR.replace( 'detail-groupmajor' );
    </script>
</body>
</html>
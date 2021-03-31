<?php include_once('loginDB.php')?>
<?php 
        $query=mysqli_query($conn,"SELECT COUNT(ID) FROM `tbnews`"); 
        $query2=mysqli_query($conn,"SELECT COUNT(ID) FROM `tbatvite`"); 
        $query3=mysqli_query($conn,"SELECT COUNT(ID) FROM `tbawar`"); 
     
        $row = mysqli_fetch_row($query);
        $row2 = mysqli_fetch_row($query2);
        $row3 = mysqli_fetch_row($query3);
      
        $rows = $row[0];
        $rows2 = $row2[0];
        $rows3 = $row3[0];
      
        $page_rows = 4;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
        $page_rows3 = 2;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
      
        $last = ceil($rows/$page_rows);
        $last2 = ceil($rows2/$page_rows);
        $last3 = ceil($rows3/$page_rows3);
      
        if($last < 1&&$last2 < 1&&$last3 < 1){
          $last = 1;
          $last2 = 1;
          $last3 = 1;
        }
      
        $pagenum = 1;
        $pagenum2 = 1;
        $pagenum3 = 1;
      
        if(isset($_GET['pn'])){
          $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
          $pagenum2 = preg_replace('#[^0-9]#', '', $_GET['pn']);
          $pagenum3 = preg_replace('#[^0-9]#', '', $_GET['pn']);
        }
      
        if ($pagenum < 1) {
          $pagenum = 1;
          $pagenum2 = 1;
          $pagenum3 = 1;
        }
        else if ($pagenum > $last&&$pagenum2 > $last2&&$pagenum3 > $last3) {
          $pagenum = $last;
          $pagenum2 = $last2;
          $pagenum3 = $last3;
        }
      
        $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
        $limit2 = 'LIMIT ' .($pagenum2 - 1) * $page_rows .',' .$page_rows;
        $limit3 = 'LIMIT ' .($pagenum3 - 1) * $page_rows3 .',' .$page_rows3;
        $nquerynews=mysqli_query($conn,"SELECT * from  tbnews  order by Date DESC  $limit");
        $nqueryatvite=mysqli_query($conn,"SELECT * from  tbatvite $limit2");
        $nqueryawar=mysqli_query($conn,"SELECT * from  tbawar $limit3");
      
        $paginationCtrls = '';
      
        if($last != 1){
      
        if ($pagenum > 1) {
      $previous = $pagenum - 1;
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';
      
          for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
            }
        }
      }
      
        $paginationCtrls .= ''.$pagenum.' &nbsp; ';
      
        for($i = $pagenum+1; $i <= $last; $i++){
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
          if($i >= $pagenum+4){
            break;
          }
        }
      
      if ($pagenum != $last) {
      $next = $pagenum + 1;
      $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
      }
        }
        // ***********************************************************************
    $paginationCtrls2 = '';
      
        if($last2 != 1){
      
        if ($pagenum2 > 1) {
      $previous2 = $pagenum2 - 1;
          $paginationCtrls2 .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous2.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';
      
          for($i = $pagenum2-4; $i < $pagenum2; $i++){
            if($i > 0){
          $paginationCtrls2 .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
            }
        }
      }
      
        $paginationCtrls2 .= ''.$pagenum2.' &nbsp; ';
      
        for($i = $pagenum2+1; $i <= $last2; $i++){
          $paginationCtrls2 .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
          if($i >= $pagenum2+4){
            break;
          }
        }
      
      if ($pagenum2 != $last2) {
      $next2 = $pagenum2 + 1;
      $paginationCtrls2 .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next2.'" class="btn btn-info">Next</a> ';
      }
        }
          // ***********************************************************************
    $paginationCtrls3 = '';
      
    if($last3 != 1){
  
    if ($pagenum3 > 1) {
  $previous3 = $pagenum3 - 1;
      $paginationCtrls3 .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous3.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';
  
      for($i = $pagenum3-4; $i < $pagenum3; $i++){
        if($i > 0){
      $paginationCtrls3.= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
        }
    }
  }
  
    $paginationCtrls3 .= ''.$pagenum3.' &nbsp; ';
  
    for($i = $pagenum3+1; $i <= $last3; $i++){
      $paginationCtrls3 .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
      if($i >= $pagenum3+4){
        break;
      }
    }
  
  if ($pagenum3 != $last3) {
  $next3 = $pagenum3 + 1;
  $paginationCtrls3 .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next3.'" class="btn btn-info">Next</a> ';
  }
    }
  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../adminBPC/head_sideAndFooter.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../adminBPC/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                          <a href="home.php"><li class="active"> หน้าหลักเว็บไซต์</li></a>
                         <li class="showli"> <a href="course.php">หลักสูตร</a> <span style='font-size:25px; float: right; position: relative; right: 10px;'>&or;</span> <ul class="dropdown">
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
        <!-- ****************************** Start Content ******************* -->
        <div class="content">
        <form action="update_home.php" method="POST" enctype="multipart/form-data">
            <div class="content_logo">
                <!-- <h1>แก้ไขโลโก้</h1> -->
                <!-- <hr class="hr_content"> -->
                <!-- <p>สามารถใช้ได้เพียง 1 รูปเท่านั้น</p> -->
                <div class="upload_img_logo">
                    <ul>
                        <!-- <li class="btn-upload">อัพโหลดภาพ</li>
                        <li class="btn-ok">บันทึก</li> -->
                        <!-- <li ><input class="btn-upload"type="file" name="Upload_logo" ><span><input type="submit" value="ยืนยันการเพิ่มรูป" class='btn-ok' name='addlogo'></span></li> -->
                        <li></li>
                    </ul>
                    
                    <!-- <hr class="end_centent"> -->
                </div> 

            </div><!-- end upload logo -->
            </form>
            <!-- ********************************************************* -->
        <div class="content_slideshow"><!-- Star content 2 2.5 -->
                <h1>แก้ไขภาพสไลด์โชว์</h1>
                <hr class="hr_content">
              <form action="insert_img.php" method="POST" enctype="multipart/form-data">    
                <div class="photoslider">
                  <input type="file" name="main" id="imgSlid" class='btn-upload' value='อัพโหลดภาพ'> <input type="submit" value="ยืนยันการเพิ่มรูป" class='btn-ok' name='addimg'>
                  <p class='textred'style='color:red; font-size:16px'>จะแสดงเฉพาะ 4 รูปภาพ ล่าสุดเท่านั้น</p>
                  <table> 
                  <thead>
                    <tr>
                      <th>รูปภาพ</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  <tbody>
                                
                        <?php 
                           

                             include_once('connectDB.php'); 
                              $queryimg="SELECT  * FROM tbsild order by ID DESC limit 4";
                              $resultimg=mysqli_query($conn,$queryimg);
                              while($rs = mysqli_fetch_array($resultimg)){
                               echo "
                                <tr>
                                      <td class='cell_img1'><img src='../adminBPC/upload_imgslider/$rs[Himg1]'</td>
                                      <td class='cell_btn1'><button class='btn-delete' type='submit' name='delete' value='$rs[ID]' onClick=\"return confirm('คุณแน่ใจนะที่จะลบรูปภาพนี้?');\" >ลบ</button></td>
                                </tr>
                                
                              
                               ";}
                              
                        ?>
                      </form>
                      
                  </tbody>
                </table></div>
                <hr class="end_centent">
                
                <!-- <p>เลือกภาพที่มีอยู่ : <select name="photo_slide" id="photo_slide">
                    <option value="" class="Select_slideshow_1" ></option></p> 
                </select>
                <div class="photoPreview">
                    <img src="https://via.placeholder.com/800x400" alt="" id="photoPreview_slideshow">
                    <ul class="Gbtn-photopreview">
                        <li class="btn-upload">อัพโหลดภาพ</li>
                        <li class="btn-delete">ลบ</li>
                    </ul> 
                </div> -->
                    <!-- <hr class="hr_height_center"> -->
                    <form action="update_home.php" method="post">
                    <?php
                    include_once('connectDB.php');
                    $queryConnectyion="SELECT * FROM tbpage";
                    $resultConnecttoin=mysqli_query($conn,$queryConnectyion);
                    $res = mysqli_fetch_assoc($resultConnecttoin);
                    ?>
<form action="update_home.php" method="POST">
            <div class="content_sayhi">
                    <div class="msgsayhi">
                        <h1>ข้อความที่ต้องการให้แสดง</h1>
                        <hr class="hr_content">
                            <div class="text-head">
                           

                                <span class="span-head">หัวข้อ : </span> <input type="text" name="topic" onkeyup="countTextJs1()" maxlength="60"  id="input-topic" value=<?php echo "'$res[Topic]'"?>> <br>
                                            <p>(ความยาวไม่เกิน 60 ตัวอักษร)<span id='numspan'> <span id='rs_txtForJs1'></span>/60</span></p> 
                                <span class="span-head">เนื้อหา : </span> <input type="text" name="title" id="input-topic2" onkeyup="countTextJs2()" maxlength="60"  value=<?php echo "'$res[Tittle]'"?>><br>
                                            <p>(ความยาวไม่เกิน 60 ตัวอักษร)<span id='numspan'><span id='rs_txtForJs2'></span>/60</span></p> 
                             </div>
                             <hr class="end_centent">
                    </div><!-- end msg sayhi -->

                  <div class="content_foot">
                      <h1>แก้ไขด้านใต้เว็บไซต์</h1>
                      <hr class="hr_content">
                        <!-- content -->
                      <div class="address">ที่อยู่ : <textarea name="address" id="" cols="40" rows="5" ><?php echo $res['Text']?></textarea> </div> 
                      <div class="photo">เบอร์โทรศัพท์ : <input type="tel" name="phone" id="" value=<?php echo $res['Phone']?>></div>  
                      <hr class="end_centent">

                  </div>
                  
            </div> <!-- end content sayhi -->
            <div class="ok">
     <input type="submit" name='updateconnect' value="บันทึก" class="btn-ok"></div>
    </form>
   <hr class="end_centent_head">
        </div> <!-- end content 2, 2.5 slideshow Text -->

        </form>
     <!-- end content 2,2.5 -->

      <!-- ********************************************************* -->
   
        <div class="content_news">
        <form action="update_news.php" method="POST">
            <a href="../adminBPC/news.php"> <input type="button" value="เพิ่มข่าวสาร" class="btn-add"></a>
            <h1>ข่าวสาร</h1>
                <hr class="hr_content">
                <!-- Bootstarp Tables --> 
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"style="text-align: center;">หัวเรื่อง</th>
                        <th scope="col" style="text-align: center;">เนื้อหา</th>
                        <th scope="col"style="text-align: center;">รูป</th>
                        <th scope="col"style="text-align: center;">สถานะ</th>
                        <th scope="col"style="text-align: center;">แก้ไข</th>
                        <th scope="col"style="text-align: center; ">ลบ</th>
                      </tr>
                    </thead>
                    <tbody class="content-table">
                    <?php
                  include_once('connectDB.php');

                    // $query = "SELECT * FROM tbnews";
                    // $result = mysqli_query($conn,$query);
                    while($rs1 = mysqli_fetch_array($nquerynews)){
                    echo "<tr>
                    <th >$rs1[Title]</th>
                    <td  class='cell_text'><span class='text-overflow'>$rs1[Text]</span></td>
                    <td class='cell_img'><img src='../adminBPC/upload_news/$rs1[Newimg]' alt='' class='photo-new'></td>";
                    if($rs1["Status"]== 1){
                     echo "<td class='cell_status'><img src='../adminBPC/pic/icons8-checkmark-64.png' alt=''></td>
                     ";}else{
                      echo "<td class='cell_status'><img src='../adminBPC/pic/icons8-delete-64.png' alt=''></td>
                      ";
                     }
                    echo "<td class='cell_btn'><button class='btn-ok' type='submit' name='update' value='$rs1[ID]'>แก้ไข</button></td>
                    <td class='cell_btn'><button class='btn-delete' type='submit' name='delete' value='$rs1[ID]' onClick=\"return confirm('คุณแน่ใจใช่หรือไม่ที่จะลบข้อมูลทั้งหมดของ $rs1[Title] ?');\">ลบ</button></td>
                  </tr>";}
                  ?>
                     
                    </tbody>
                  </table>
                  </form>
                  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>       

                  <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination" >
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav> -->
                  <hr class="end_centent">
        </div> 
        <!-- *************************End Content news***************************** -->

            </form>

                <hr class="end_centent">
        </div><!-- ************* End content 5 award *************-->
        <!-- ********************************************************** -->

    </div>  <!--End All Content -->
    
        <footer>
            <div class="foot">
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript">
 function countTextJs1(){//ฟังก์ชั่นนับจำนวนตัวอักษรรวมช่องว่าง
  var txtForJs1=document.getElementById('input-topic').value;
  var countTxt=txtForJs1.length;
    document.getElementById('rs_txtForJs1').innerHTML=countTxt
 }
 function countTextJs2(){//ฟังก์ชั่นนับจำนวนตัวอักษรรวมช่องว่าง
  var txtForJs1=document.getElementById('input-topic2').value;
  var countTxt=txtForJs1.length;
    document.getElementById('rs_txtForJs2').innerHTML=countTxt
 }

</script>
</body>
</html>
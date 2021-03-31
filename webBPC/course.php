<?php
        include_once('connectDB.php');
        $yearch="2561";
        $query="SELECT * FROM tbcouse ";
        $result=mysqli_query($conn,$query);
        if(isset($_POST['Year'])){
        $yearch=$_POST['Year'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หลักสูตร</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/course.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="border_top_course"></div>
        <div class="container-header">
            <div class="grid-nav">
            <div class="logo">
           <a href="home.php"> <img src="../adminBPC/pic/Image 12224.png" alt="" ></a>

            </div>
            
          
            <ul class="menu">
                <li><a href="home.php" >หน้าหลัก<br> <span>Home</span> <div class="border-menu"></div> </a></li>
                <li><a>หลักสูตร<br><span>Course</span><div class="border-menu"></div></a> 
                <ul class="dropdown-content">
                    <li><a href="course.php" >หลักสูตร<br><span>(Course)</span><div class="border-menu"></div></a></li>
                    <li><a href="Facilty.php" >คณะอาจารย์<br><span>(Department)</span><div class="border-menu"></div></a></li>
                    <li><a href="WorkAndAwards.php">ผลงานและรางวัล<br><span>(Work and Awards)</span><div class="border-menu"></div></a></li>
                </ul>
                </li>
                <li><a href="Yearbook.php">ทำเนียบรุ่น<br><span>Alumni</span><div class="border-menu"></div></a></li>
                <li><a href="photo.php">ภาพกิจกรรม<br><span>Photo</span><div class="border-menu"></div></a></li>
                <li><a href="QA.php">คำถามยอดฮิต<br><span>Q&A</span><div class="border-menu"></div></a></li>
                <li><a href="content.php">ติดต่อ<br> <span>Contact</span> <div class="border-menu"></div></a></li>
            </ul>
            
      
        </div>
        </div>
        </header>
        <!-- ************************** Header ************************** -->
        <div class="select-course" id='div'> 
            <label for="year_course">หลักสูตรปี </label> <br>
           
            <form action="course.php" method="POST">
                <?php 
                // include_once("connectDB.php");
                // $select_posts = "SELECT * FROM tbcouse order by Year DESC";
                // $result=mysqli_query($conn,$select_posts);
                // while($rs=mysqli_fetch_array($result)){  

                // echo" value='$rs[Year]'>พ.ศ. $rs[Year]";}
                
                
                ?>
                 <?php while ($rs = mysqli_fetch_array($result)): ?>
                        <button name="Year" type="submit"  class='btn_download' value=<?php echo "'$rs[Year]'"?>><?php echo "พ.ศ.".$rs['Year'];?> </button><br>
                 <?php endwhile;?>
                <!-- <option value="พ.ศ.2556">พ.ศ.2556</option> --></form>
         
        </div>
        <div class="content">
            <div class="main">
                        <div class="head">
                                <h1>หลักสูตร</h1>
                                    <div class="border-content-t"></div>
                                <h1>[ Course ]</h1>
                        </div>
                      
                    <!-- select database tbmajor -->
                   <?php
                   ?>
                        <?php 
                        
                        $queryDataCouse="SELECT * FROM tbcouse WHERE Year ='$yearch'";  
                        $resultData=mysqli_query($conn,$queryDataCouse);
                        $res = mysqli_fetch_assoc($resultData);
                        // $select_posts = "SELECT * FROM tbcouse ";
                        // $result=mysqli_query($conn,$select_posts);
                        // $rs=mysqli_fetch_array($result);
                        $nameth=$res['nameTH'];
                        $nameeng=$res['nameENG'];
                        $namefullth=$res['Namefullth'];
                        $nameshotth=$res['Nameshotth'];
                        $namefulleng=$res['Namefulleng'];
                        $nameshoteng=$res['Nameshoteng'];
                    
                        $credit=$res['Credit'];
                        $qualifications=$res['Qualifications'];
                        $course1=$res['Course1'];
                        $course2=$res['Course2'];
                         
                        ?> 
                       
                        
                       
                        <div class="top-content">
                                    <h1><?php echo" $nameshotth";?></h1>
                                    <p>หลักสูตร  <?php echo" $namefullth ";?></p>
                                    <p class="name_eng_course_topshow"><?php echo"$nameeng ";?></p>
                                <br><p>รายละเอียดหลักสูตร</p>
                                    <div class="border-top"></div>
                        </div>

                            <div class="grid-content">
                                <div class="left">
                                        <h1>ชื่อเต็ม (ไทย)</h1>
                                        <p> <?php echo" $nameth ";?></p>   
                                        <h1>ชื่อย่อ (ไทย)</h1>
                                        <p><?php echo" $nameshotth";?></p>   
                                        <h1>ชื่อเต็ม (อังกฤษ)</h1>
                                        <p><?php echo"$nameeng ";?></p>   
                                        <h1>ชื่อย่อ (อังกฤษ)</h1>
                                        <p><?php echo"$nameshoteng ";?></p>   
                                    <div class="gb_course">
                                    <h1>กลุ่มวิชา</h1>
                                    <?php  
                                         include_once("connectDB.php");
                                         $queryMajor="SELECT * FROM tbmajor WHERE Year ='$yearch'";
                                        $resultMajor=mysqli_query($conn,$queryMajor);
                                         while($rsMajor=mysqli_fetch_array($resultMajor)){  
                                        
                                    echo"
                                            <p>$rsMajor[Name]<a href='deGCoures.php?id=$rsMajor[ID]'><input type='button' value='ดูรายละเอียดเพิ่มเติม' class='btn_bluegoto'></a></p>
                                            
                                         ";}?>
                                   </div>
                                
                                    </div>
                                <div class="right">
                                    
                                    <h1>จำนวนหน่วยกิตที่เรียนทั้งหมด</h1>
                                    <p><?php echo" $credit";?> หน่วยกิต</p>   
                                    <h1>คุณสมบัติผู้เข้าศึกษา</h1>
                                    <p><?php echo" $qualifications";?></p>   
                                    <h1>รูปแบบหลักสูตร</h1>
                                    <h2>ภาคปกติ</h2>
                                    <p> <?php echo" $course1";?></p>  
                                    <?php  
                                         include_once("connectDB.php");
                                         $select_postsp4 = "SELECT * FROM tbp4 WHERE Year = '$yearch'";
                                         $resultp4=mysqli_query($conn,$select_postsp4);
                                         while($rsp4=mysqli_fetch_array($resultp4)){  
                                        
                                    echo"
                                            <p> $rsp4[Name]<a href='deP4.php?id=$rsp4[ID]'><input type='button' value='ดูรายละเอียดเพิ่มเติม' class='btn_bluegoto'></a></p>
                                            
                                         ";}?> 
                                    <!-- <p>- หลักสูตรระดับปริญญาตรี 4 ปี เทียบโอนรายวิชา <a href="deGCoures.php"><input type="button" value="ดูรายละเอีนดเพิ่มเติม" class="btn_bluegoto"></a></p>                                -->
                                </div>
                             </div>
                    <div class="bottom"> 
                        <h1>สภาพแวดล้อม</h1>
                        <div class="area_grid">
                              <?php
                                include_once("connectDB.php");
                                $select_posts = "SELECT * FROM tbimg ";
                                $result=mysqli_query($conn,$select_posts);
                                while($rs=mysqli_fetch_array($result)){ 
                                    echo"
                                                <div class='grid_item'><img src='../adminBPC/upload_img/$rs[Environmentimg1]' ></div> ";
                                 }
                              ?>                  
                            <!-- <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div>
                            <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div>
                            <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div>
                            <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div>
                            <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div>
                            <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div>
                            <div class="grid_item"><img src="https://via.placeholder.com/280x200" alt=""></div> -->
                        </div>
                        
                    </div>
            </div>
        </div>
        <!-- ************************** Content ************************** -->
        <footer>
            <div class="border"></div>
            <div class="foot">
            
            <?php
           include_once('footer.php');

            ?>
                
            
        
    
            </div>
            <div class="bread">
                <span>© 2020 BITRUMTR. All Rights Reserved. <br> </span>
                         <span>© Design & Development by BIT15</span>
               
            </div>
        </footer>
        <!-- ************************** Footer ************************** -->
<script>


</script>
    </body>
</html>
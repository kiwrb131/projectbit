<?php require_once 'connectDB.php'?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดหลักสูตรระดับปริญญาตรี 4 ปี เทียบโอนรายวิชา</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/deP4.css">

</head>
<body>
    <header>
        <div class="border"></div>
        <div class="container-header">
            <div class="grid-nav">
            <div class="logo">
            <a href="home.php"> <img src="../adminBPC/pic/Image 12224.png" alt="" ></a>

            </div>
            
          
            <ul class="menu">
                <li><a href="home.php" >หน้าหลัก<br> <span>Home</span> <div class="border-menu"></div></a> </li>
                <li><a>หลักสูตร<br><span>Course</span><div class="border-menu"></div></a> 
                <ul class="dropdown-content">
                    <li><a href="course.php" class="active">หลักสูตร<br><span>(Course)</span><div class="border-menu"></div></a></li>
                    <li><a href="Facilty.php" >คณะอาจารย์<br><span>(Department)</span><div class="border-menu"></div></a></li>
                    <li><a href="WorkAndAwards.php">ผลงานและรางวัล<br><span>(Work and Awards)</span><div class="border-menu"></div></a></li>
                </ul>
            </li>
                <li><a href="Yearbook.php">ทำเนียบรุ่น<br><span>Alumni</span><div class="border-menu"></div></a></li>
                <li><a  href="photo.php">ภาพกิจกรรม<br><span>Photo</span><div class="border-menu"></div></a></li>
                <li><a href="QA.php">คำถามยอดฮิต<br><span>Q&A<div class="border-menu"></div></a></li>
                <li><a href="content.php">ติดต่อ<br> <span>Contact</span><div class="border-menu"></div> </a></li>
            </ul>
            
            
      
        </div>
        </div>
        </header>
        <?php
          if(isset($_GET['id'])){
            $id = $_GET["id"];
            $select_posts = "SELECT * FROM tbp4 where ID ='$id'";
            $result=mysqli_query($conn,$select_posts);
            $rs=mysqli_fetch_array($result);
            $name=$rs['Name'];
            $text=$rs["Text"];
          
        }
            
        ?>
        <!-- end header -->
        <!-- start section -->
        <div class="container">
            <div class="container-detall">
                <h1><?php echo"$name";?></h1>
            <div class="border-content-t"></div>
                
                
                
                <!-- end zone -->
                    

                    <!-- <div class="pic">
                    <img src="https://via.placeholder.com/500x300" alt="">
                    </div> -->
                    <div class="data">
                                <h3>รายละเอียด </h3><p class='data_content' name=''><?php echo"$text";?></p>
                    </div>
            </div> <!-- end all data -->
            
        </div>
        

        <!-- end section -->
    <!-- start footer -->
    <footer>
        <div class="border"></div>
        <div class="foot">
        
            <img src="pic/Image 12224.png" alt="" class="logo-f">
            <div class="adddese"><span>มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ บพิตรพิมุข จักรวรรดิ</span>
                <div class="add"> <span>ที่อยู่:</span>
                    <span>264 ถนน จักรวรรดิ แขวง จักรวรรดิ์ เขตสัมพันธวงศ์ กรุงเทพมหานคร 10100</span>
                    
                </div>
                <span>เบอร์โทรติดต่อ:</span>
                <span>02-222-2814</span>
            </div>
       
        </div>
            <div class="social">
                <img src="../webBPC/pic/facebook.png" alt="">
                <img src="../webBPC/pic/line.png" alt="">
            </div>
            
        
    

        </div>
        <div class="bread">
            <span>© 2020 BITRUMTR. All Rights Reserved. <br> </span>
                     <span>© Design & Development by BIT15</span>
           
        </div>
    </footer>
             
</body>
</html>
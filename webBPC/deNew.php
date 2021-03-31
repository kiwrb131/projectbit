<?php require_once 'connectDB.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดข่าวสาร</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/deNew.css">

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
                    <li><a href="course.php" >หลักสูตร<br><span>(Course)</span><div class="border-menu"></div></a></li>
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
        <!-- end header -->
        <!-- start section -->
        <div class="container">
            <div class="container-detall">
                <h1>ข่าวสาร</h1>
            <div class="border-content-t"></div>
                <h1>[ News ]</h1>
            <?php 
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $select_posts = "SELECT * FROM tbnews Where ID ='$id'";
                    // $query="SELECT * FROM tbnews WHERE ID ='$id'";
                    $result=mysqli_query($conn,$select_posts);
                    
                    while($rs=mysqli_fetch_array($result)){

                        $original_date = $rs['Date'];
                    // Creating timestamp from given date
                    $timestamp = strtotime($original_date);
                    // Creating new date format from that timestamp
                    $new_date = date("d-m-Y", $timestamp);
            echo "  <div class='navi'>
            <a href='new.php'>ข่าวสาร</a> > $rs[Title]</div><br>
                <div class='con_head'>
                    <h2>$rs[Title]</h2>
                    <div class='hr_head'></div>
                    <p>วันที่ลงประกาศ : $new_date</p>
                </div>
                <div class='zoneimgslider'>
                     
              
              
                            <img   id='myImg' src='../adminBPC/upload_news/$rs[Newimg]' style='width: 50%; height: 50%;border-radius: 8px;'>

                           
                      
                </div>
                
                    

                   
                    <div class='data'>
                                <h3>รายละเอียด </h3><p class='data_content' name=''>$rs[Text] </p>
                    </div>
            </div> <!-- end all data -->"; 
             
                  }
                }
            ?>
           
        </div>
        
 <!-- <div class="pic">
                    <img src="../adminBPC/upload_news/$rs[Newimg]" alt="">
                    </div> -->
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
             <script>
            

            </script>
                
</body>
</html>
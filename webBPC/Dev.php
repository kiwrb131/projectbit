
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../webBPC/Dev.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
     <title>กลุ่มวิชา</title>
     <link rel="stylesheet" href="../webBPC/headandFooter.css">
 </head>
 <body>
     
 
 <!-- start header -->
 <header> <div class="border"></div>
   
    <div class="container-header">
    
        <div class="grid-nav">
            
        <div class="logo">
        <a href="home.php"> <img src="../adminBPC/pic/Image 12224.png" alt="" ></a>

        </div>
        
      
            <ul class="menu">
                <li><a href="home.php">หน้าหลัก<br> <span>Home</span> <div class="border-menu"></div></a></li>
                <li><a href="course.php" class="active">หลักสูตร<br><span>Course</span></a> <div class="border-menu"></div>
                    <ul class="dropdown-content">
                        <li><a href="Facilty.php" >คณะอาจารย์<br> <span>(Department)</span><div class="border-menu"></div></a></li>
                        <li><a href="WorkAndAwards.php">ผลงานและรางวัล<br><span>(Work and Awards)</span><div class="border-menu"></div></a></li>
                    </ul>
                </li>
                <li><a href="Yearbook.php">ทำเนียบรุ่น<br><span>Yearbook</span><div class="border-menu"></div></a></li>
                <li><a href="photo.php">ภาพกิจกรรม<br><span>Photo</span><div class="border-menu"></div></a></li>
                <li><a href="QA.php">คำถามยอดฮิต<br><span>Q&A</span><div class="border-menu"></div></a></li>
                <li><a href="content.php">ติดต่อ<br> <span>Contact</span><div class="border-menu"></div> </a></li>
            </ul>
        
  
    </div>
    </div>
    </header>
    <!-- start section -->
    <div class="container">
        <div class="container-detall">
        <h1 >การพัฒนาซอฟต์แวร์</h1>
        <div class="border-content-top-t"></div>
        <div class="detallAll">
        <img src="https://via.placeholder.com/400x400" alt="">
        <div class="detall">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</div>
    </div>
    </div>

    </div>
     <!-- start footer -->
     <footer>    <div class="border"></div>
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
</body>
</html>
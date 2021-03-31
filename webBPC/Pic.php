<?php require_once 'connectDB.php'?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../webBPC/Pic.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ภาพกิจกรรม</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
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
                <li><a class="active" href="photo.php">ภาพกิจกรรม<br><span>Photo</span></a><div class="border-menu"></div></li>
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
                <h1>กิจกรรม</h1>
            <div class="border-content-t"></div>
                <h1>[ Activity ]</h1>
                
                <?php 
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $select_posts = "SELECT * FROM tbatvite Where ID ='$id'";
                    // $query="SELECT * FROM tbnews WHERE ID ='$id'";
                    $result=mysqli_query($conn,$select_posts);
                    
                    while($rs=mysqli_fetch_array($result)){
                        $original_date = $rs['Date'];
                        // Creating timestamp from given date
                        $timestamp = strtotime($original_date);
                        // Creating new date format from that timestamp
                        $new_date = date("d-m-Y", $timestamp);
                        
            echo "  <div class='navi'>
            <a href='photo.php'>ภาพกิจกรรม</a> > $rs[Title]</div><br>
                <div class='con_head'>
                    <h2>$rs[Title]</h2>
                    <div class='hr_head'></div>
                    <p>วันที่ลงประกาศ : $new_date </p>
                </div>
                <div class='zoneimgslider'>
                     <div class='mySlides' >
                            <img   src='../adminBPC/upload_award/$rs[Atvite_1]' >
                          
                        </div>
                     <div class='mySlides' >
                            <img   src='../adminBPC/upload_award/$rs[Atvite_2]' >
                        </div>
                     <div class='mySlides' >
                            <img   src='../adminBPC/upload_award/$rs[Atvite_3]' >
                        </div>
                     <div class='mySlides' >
                            <img   src='../adminBPC/upload_award/$rs[Atvite_4]' >
                        </div>

                      
                        <a class='prev' onclick='plusSlides(-1)'>❮</a>
                        <a class='next' onclick='plusSlides(1)'>❯</a>

                      

                        <div class='row'>
                            <div class='column'>
                            <img class='demo cursor' src='../adminBPC/upload_award/$rs[Atvite_1]' style='width:100%' onclick='currentSlide(1)' >
                            </div>
                           
                            <div class='column'>
                            <img class='demo cursor' src='../adminBPC/upload_award/$rs[Atvite_2]' style='width:100%' onclick='currentSlide(2)' >
                            </div>
                            <div class='column'>
                            <img class='demo cursor' src='../adminBPC/upload_award/$rs[Atvite_3]' style='width:100%' onclick='currentSlide(3)' >
                            </div>
                            <div class='column'>
                            <img class='demo cursor' src='../adminBPC/upload_award/$rs[Atvite_4]' style='width:100%' onclick='currentSlide(4)' >
                            </div>
                           
                        </div>
                </div>
                
                    

                   
                    <div class='data'>
                                <h3>รายละเอียด </h3><p class='data_content' name=''>$rs[Text] </p>
                    </div>
            </div> <!-- end all data -->"; 
             
                  }
                }
            ?>
            
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
             <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>
</body>
</html>
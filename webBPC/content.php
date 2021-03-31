<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การติดต่อ</title>
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/content.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <header><div class="border"></div>
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
                <li><a href="content.php"class="active">ติดต่อ<br> <span>Contact</span> </a><div class="border-menu"></div></li>
            </ul>
            
      
        </div>
        </div>
        </header>
        <!-- ************************** Header ************************** -->
        <div class="content">
            <div class="main">
                <div class="head">
                    <h1>ติดต่อ</h1>
                    <div class="border-content-t"></div>
                    <h1>[ Contact ]</h1>
                </div>
                <div class="grid-content">
                    <div class="left">
                        <?php
                        include_once('connectDB.php');
                        $query = "SELECT * FROM tbcon WHERE ID = '1'";
                        $result = mysqli_query($conn,$query);
                        $res = mysqli_fetch_assoc($result);
                        echo"
                                <h1>ที่อยู่  </h1><span>$res[Addres]</span>
                                    <h1>เบอร์โทรศัพท์  </h1><span>$res[Phone]</span>
                                    <h1>ติดต่อช่องทางออนไลน์ </h1> <div><a href='$res[Facebook]'><input type='button' value='Facebook' class='fb' ></a>  <a href='$res[Li]'><input class='line' type='button' value='Line'></a></div>
                                    
                                </div>
                                <div class='right'>
                                    <form action='insert_contact.php' method='post'>
                                    <div class='r_inside'>
                                        <h1>ส่งข้อความหรือข้อเสนอแนะ</h1>
                                        <p><input type='text' name='name' id='' placeholder='ชื่อ - นามสกุล'></p>
                                        <textarea name='text' id='' cols='52' rows='4' placeholder='กรุณาพิมพ์ข้อความ...'></textarea>
                                        <input type='submit' name='submit'value='Send' class='inbox'>
                                    </div></form> ";?>
                    </div>
                    
                    </div>
                    <div class="bottom">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15501.977111099113!2d100.50624140189775!3d13.749039785829519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafff18267f1cfdce!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lij4Liy4LiK4Lih4LiH4LiE4Lil4Lij4Lix4LiV4LiZ4LmC4LiB4Liq4Li04LiZ4LiX4Lij4LmMIOC4muC4nuC4tOC4leC4o-C4nuC4tOC4oeC4uOC4giDguIjguLHguIHguKPguKfguKPguKPguJTguLQ!5e0!3m2!1sth!2sth!4v1605060570590!5m2!1sth!2sth" ></iframe>
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

    </body>
</html>
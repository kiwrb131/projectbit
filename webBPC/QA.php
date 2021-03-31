
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>คำถามยอดฮิต</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/QA.css">
</head>
<body>
    <!-- start header -->
    <header>
        <div class="border"></div>
        <div class="container-header">
            <div class="grid-nav">
            <div class="logo">
            <a href="home.php"> <img src="../adminBPC/pic/Image 12224.png" alt="" ></a>

            </div>
            
          
            <ul class="menu">
                <li><a href="home.php" >หน้าหลัก<br> <span>Home</span><div class="border-menu"></div> </a> </li>
                <li><a>หลักสูตร<br><span>Course</span><div class="border-menu"></div></a> 
                <ul class="dropdown-content">
                    <li><a href="course.php" >หลักสูตร<br><span>(Course)</span><div class="border-menu"></div></a></li>
                    <li><a href="Facilty.php" >คณะอาจารย์<br><span>(Department)</span><div class="border-menu"></div></a></li>
                    <li><a href="WorkAndAwards.php">ผลงานและรางวัล<br><span>(Work and Awards)</span><div class="border-menu"></div></a></li>
                </ul>
                </li>
                <li><a href="Yearbook.php">ทำเนียบรุ่น<br><span>Alumni</span><div class="border-menu"></div></a></li>
                <li><a href="photo.php">ภาพกิจกรรม<br><span>Photo</span><div class="border-menu"></div></a></li>
                <li><a href="QA.php"class="active">คำถามยอดฮิต<br><span>Q&A</span></a><div class="border-menu"></div></li>
                <li><a href="content.php">ติดต่อ<br> <span>Contact</span> <div class="border-menu"></div></a></li>
            </ul>
            
        </div>
        </div>
        </header>
        <!-- end header -->
        <!-- start section -->
        <div class="container">
            
            <h1>คำถามยอดฮิต</h1>
            <div class="border-content-t"></div>
            <h2>[ Questions and Answers ]</h2>
            <div class="QA">

            <?php
            include_once('connectDB.php');
            $query="SELECT * FROM tbqa WHERE Status=1 ";
            $result=mysqli_query($conn,$query);
            while($rs=mysqli_fetch_array($result)){
            echo "<button class='questionActive'>Q: $rs[Q]</button>
                    <button class='answer'>A: $rs[A]</button>";
            }
            ?>
                </div>
        </div>
            
        </div>

        <script>
                    var coll = document.getElementsByClassName("questionActive");
                        var i;

                        for (i = 0; i < coll.length; i++) {
                        coll[i].addEventListener("click", function() {
                            this.classList.toggle("activee");
                            var content = this.nextElementSibling;
                            if (content.style.maxHeight){
                            content.style.maxHeight = null;
                            } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                            } 
                        });
                        }
</script>

        <!-- end section -->
         <!-- start footer -->
    <footer>
        <div class="border"></div>
        <div class="foot">
        
        <?php
           include_once('footer.php');

            ?>
        
        </div>
        <div class="bread">
            <span>© 2020 BITRUMTR. All Rights Reserved.</span><br>
             <span>© Design & Development by BIT15</span>
           
        </div>
    </footer>
    <!-- end footer -->

</body>
</html>
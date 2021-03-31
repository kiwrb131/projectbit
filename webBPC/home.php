<?php 

                 include_once("connectDB.php");
               
                 
                
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <script src="slider.js"></script>
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
<link rel="stylesheet" href="../webBPC/home.css">
    <title>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</title>
</head>
<body>
    <!-- start header -->
    <header><div class="border"></div>
    <div class="container-header">
        <div class="grid-nav">
        <div class="logo">
        <?php
            // include_once('connectDB.php');
            // $query="SELECT * FROM tbpage";
            // $result=mysqli_query($conn,$query);
            // while($rs=mysqli_fetch_array($result)){
            // echo "<button class='questionActive'>Q: $rs[target_dir]</button>";
            // }
      ?> 
                   <a href="home.php"> <img src="../adminBPC/pic/Image 12224.png" alt="" ></a>

        </div>
        
      
        <ul class="menu">
            <li><a href="home.php" class="active">หน้าหลัก<br> <span>Home</span> </a> <div class="border-menu"></div></li>
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
            <li><a href="content.php">ติดต่อ<br> <span>Contact</span><div class="border-menu"></div> </a></li>
        </ul>
        
  
    </div>
    </div>
    </header>

    <!-- start section -->
    
        <!-- start container of section -->
            <div class="container" >
                <!-- ทดลอง -->  
                <div class="zone1slider">
                <div class="slideshow-container">
                <?php
                                    include_once('connectDB.php');
                                    $query="SELECT  * FROM tbsild order by ID DESC limit 4";
                                    $result=mysqli_query($conn,$query);
                                    while($rs=mysqli_fetch_array($result)){
                                    echo "  
                                            <div class='mySlides fade'>
                                                <img src='../adminBPC/upload_imgslider/$rs[Himg1]' >
                                            </div>
                                        ";
                                    }
                            ?>
                       

                     
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                        </div>
                        <br>
                        
                        <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot" ></span> 
                        <span class="dot" ></span> 
                       
                    </div>
                              <script src="slider.js"></script>
                </div>
            <!-- ทดลอง -->
         
                <!-- <img src="https://via.placeholder.com/800x400" class="pic_promode"> -->

              
           
        
      
            <!-- start wellcome -->
            <!-- <div class="imgw"> -->
           <div class='wellcome'>
               
            <?php
                    include_once('connectDB.php');
                    $query="SELECT * FROM tbpage";
                    $result=mysqli_query($conn,$query);
                    while($rs=mysqli_fetch_array($result)){
                    echo "  
                            <h1>$rs[Topic]</h1>
                            <h2>$rs[Tittle]</h2>
                        ";
                    }
             ?>
            </div>
                 <!-- <h2>Business information technology</h2> -->
            <!-- </div> 
       -->
            
            <!-- start new -->
    <div class="head-1"> 
        <div class="head"><h1>- ข่าวสาร -</h1> </div>
        <div class="border-content-home"></div>
        <div class="news">
                  
                    
             <div class="grid-content">
                 
                <?php 
                 include_once("connectDB.php");
                 $nqueryNews=mysqli_query($conn,"SELECT *  from  tbnews WHERE Status=1 order by Date DESC limit 4" );
                    while($rsNews = mysqli_fetch_array($nqueryNews)){
                echo "<div class='content-new'>
                        <a class='name-news' href='deNew.php?id=$rsNews[ID]' >
                            <div class='item_new'>
                            <img src='../adminBPC/upload_news/$rsNews[Newimg]' alt=''><br>
                            <p>$rsNews[Title] </p> 
                            <div class='span-content'> 
                                <span>$rsNews[Text] </span>
                            </div></div></a>
                        </div>";
                        
                    }?>
               
<!-- 
               <div class="content-new">
                 <a class='name-news' href="">
                     <div class="item_new">
                    <img src="https://via.placeholder.com/300x200" alt=""><br>
                    <p>Name</p> 
                     <div class="span-content"> 
                         <span >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus ipsa, dolorum quo aperiam magni earum necessitatibus sit accusamus, </span>
                     </div></div></a>
                </div> -->
                <div class="goto"><a href="new.php"><input type="button" value="คลิกเพื่อไปยังหน้าข่าวสาร" class="btn_download"></a></div>  

            </div> <!-- end grid-content-->
        </div> <!-- end new-->
         
    </div>  <!-- end head-new-->
    <div>
        <div class="content-port">

            <!-- start activity -->
            <div class="activity">
                <div class="head"><h1>- ภาพกิจกรรม -</h1></div>
                 <div class="border-content-home"></div>
                 <div class='act_arrey_grid'>
                            <?php 
                        include_once("connectDB.php");
                        $nqueryAct=mysqli_query($conn,"SELECT *  from  tbatvite WHERE Status=1 order by Date DESC limit 4" );
                            while($rsActivity = mysqli_fetch_array($nqueryAct)){
                        echo "    
                                    <a href='pic.php?id=$rsActivity[ID]' ><div class='act_grid_item'>
                                        <img src='../adminBPC/upload_award/$rsActivity[Atvite_1]' alt=''>
                                        <div class='overlay1'>
                                            <div class='text'>$rsActivity[Title]</div>
                                        </div>
                                    </div></a>";      
                            }?>
                        <div class="goto"><a href="photo.php"><input type="button" value="คลิกเพื่อไปยังหน้ากิจกรรม" class="btn_download"></a></div>       
                </div>
            </div>
            <div class="newss">
                <div class="head"><h1>- ผลงานและรางวัล -</h1></div>
                <div class="border-content-home"></div>
                <div class="new_arrey_grid">
                <?php 
                 include_once("connectDB.php");
                 $nqueryAwar=mysqli_query($conn,"SELECT *  from  tbawar WHERE Status=1 order by Date DESC limit 2" );
                    while($rsAwar = mysqli_fetch_array($nqueryAwar)){
                echo "
                <a href='deAward.php?id=$rsAwar[ID]' >
                <div class='new_grid_item'>
                      <img src='../adminBPC/upload_award/$rsAwar[Awar_1]' alt=''>
                    <div class='overlay1'>
                        <div class='text'>$rsAwar[Title]</div>
                    </div>
                </div></a>";
                        
                    }?>                
                <div class="goto"><a href="WorkAndAwards.php"><input type="button" value="คลิกเพื่อไปยังหน้าผลงานและรางวัล" class="btn_goto"></a></div>       
            </div>                     
         </div><!-- start content-port Act-->

            </div>
            <!-- start Award-->

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
        <!-- <div class="bread">
            <span>© 2020 BITRUMTR. All Rights Reserved. <br> </span>
                     <span>© Design & Development by BIT15</span>
           
        </div> -->
    </footer>
    <div class="bread">
            <span>© 2020 BITRUMTR. All Rights Reserved. <br> </span>
                     <span>© Design & Development by BIT15</span>
           
        </div>
     <!-- Optional JavaScript devbanban.com-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
                    
    <!-- slider -->
    
</body>
</html>

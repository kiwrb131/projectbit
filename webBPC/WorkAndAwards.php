<?php 
                        include_once('connectDB.php');
        $query=mysqli_query($conn,"SELECT COUNT(ID) FROM `tbawar` WHERE Status=1 ");
        $row = mysqli_fetch_row($query);
      
        $rows = $row[0];
      
        $page_rows = 5;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
      
        $last = ceil($rows/$page_rows);
      
        if($last < 1){
          $last = 1;
        }
      
        $pagenum = 1;
      
        if(isset($_GET['pn'])){
          $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
        }
      
        if ($pagenum < 1) {
          $pagenum = 1;
        }
        else if ($pagenum > $last) {
          $pagenum = $last;
        }
      
        $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
      
        $nquery=mysqli_query($conn,"SELECT * from  tbawar WHERE Status=1 order by Date DESC  $limit");
      
        $paginationCtrls = '';
      
        if($last != 1){
      
          if ($pagenum > 1) {
            $previous = $pagenum - 1;
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn_Previous">Previous</a> &nbsp; &nbsp; ';
            
                for($i = $pagenum-4; $i < $pagenum; $i++){
                  if($i > 0){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn_click">'.$i.'</a> &nbsp; ';
                  }
              }
            }
            
              $paginationCtrls .= ''.$pagenum.' &nbsp; ';
            
              for($i = $pagenum+1; $i <= $last; $i++){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn_click">'.$i.'</a> &nbsp; ';
                if($i >= $pagenum+4){
                  break;
                }
              }
            
            if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn_Previous">Next</a> ';
            }
              }
  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลงานและรางวัล</title>
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/WorkAndAwards.css">

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

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
                <li><a href="Yearbook.php">ทำเนียบรุ่น<br><span>Alumni</span><div class="border-menu"></div></a></li>
                <li><a href="photo.php">ภาพกิจกรรม<br><span>Photo</span><div class="border-menu"></div></a></li>
                <li><a href="QA.php">คำถามยอดฮิต<br><span>Q&A</span><div class="border-menu"></div></a></li>
                <li><a href="content.php">ติดต่อ<br> <span>Contact</span><div class="border-menu"></div> </a></li>
            </ul>
            
      
            </div>
        </div>
        </header>
        <!-- end header -->
        <!-- start section -->
        <div class="title">
            <h1>ผลงานและรางวัล</h1>
            <div class="border-content-t"></div>
        <h1>[Work and Awards]</h1>
        </div>
           <div class="container">

                <!-- <div class="year-study">
                    <h1 class="year-type">ลบออก</h1>
                    <button class="active-year">ลบออก</button><br>
                    <button>ลบออก</button><br>
                    <button>ลบออก</button><br>
                    <button>ลบออก</button><br>
                    </div>
                     -->
                
               
            <div class="container-detall">
                <div class="goto">
                    <a href="WorkAndAwards.php"><button class="btn-news">ผลงานและรางวัล</button></a>
                    <a href="new.php" ><button class='btn-notact'>ข่าวสาร</button></a>
                </div>
                <div class="detallFonews">
                    <?php 
                        include_once('connectDB.php');
                            while($rs = mysqli_fetch_array($nquery))
                            {
                              $original_date = $rs['Date'];
                    // Creating timestamp from given date
                    $timestamp = strtotime($original_date);
                    // Creating new date format from that timestamp
                    $new_date = date("d-m-Y", $timestamp);
                            echo "
                            <div class='news'> 
                                <div class='photo'  ><img id='myImg' src='../adminBPC/upload_award/$rs[Awar_1]' alt=''></div> 
                              <div class='news-detall'>
                                 <a href='deAward.php?id=$rs[ID]' >$rs[Title]</a>

                                 <div id='myModal' class='modal'>
                                 <span class='close'>&times;</span>
                                 <img class='modal-content' id='img01'>
                                 <div id='caption'></div>
                               </div>

                                 <div class='date'>$new_date</div>
                                    <div class='detall'>
                                                <span>รายละเอียด:</span>
                                                <span class='texttable'>$rs[Text]</span>
                                    </div>
                              </div> 
                            </div> ";}
                    ?>
                 </div>
                  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>       
                  <!-- <div class="news">
                    <div class="photo"><img src="https://via.placeholder.com/500x300" alt=""></div> 
                    <div class="news-detall">
                        <a href="">นักศึกษาสารสนเทศทุกระดับชั้นปี แข่งขัน เขียนภาษา Java</a>
                        <div class="detall">
                            <span>รายละเอียด:</span>
                            <span>lorem et, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</span>
                        </div>
                    </div> 
                </div>
                <div class="news">
                    <div class="photo"><img src="https://via.placeholder.com/500x300" alt=""></div> 
                  
                    <div class="news-detall">
                        <a href="">นักศึกษาสารสนเทศทุกระดับชั้นปี แข่งขัน เขียนภาษา Java</a>
                        <div class="detall">
                            <span>รายละเอียด:</span>
                            <span>lorem et, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="news">
                    <div class="photo"><img src="https://via.placeholder.com/500x300" alt=""></div> 
                   
                    <div class="news-detall">
                        <a href="">นักศึกษาสารสนเทศทุกระดับชั้นปี แข่งขัน เขียนภาษา Java</a>
                        <div class="detall">
                            <span>รายละเอียด:</span>
                            <span>lorem et, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</span>
                        </div>
                    </div>
                    </div>
                </div> -->
        </div>
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
                <span>© 2020 BITRUMTR. All Rights Reserved. <br> </span>
                         <span>© Design & Development by BIT15</span>
            </div>
        </footer>
    <!-- end footer -->
   
</body>
</html>
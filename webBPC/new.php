<?php 

                        include_once('connectDB.php');
        $query=mysqli_query($conn,"SELECT COUNT(ID) FROM `tbnews`  WHERE Status=1  ");
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
      
        $nquery=mysqli_query($conn,"SELECT * from  tbnews  WHERE Status=1  order by Date DESC $limit ");
      
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
        <title>ข่าวสาร</title>
        <link rel="stylesheet" href="../webBPC/headandFooter.css">
        <link rel="stylesheet" href="../webBPC/new.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   
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
                    <li><a href="QA.php">คำถามยอดฮิต<br><span>Q&A</span><div class="border-menu"></div></a></li>
                    <li><a href="content.php">ติดต่อ<br> <span>Contact</span><div class="border-menu"></div> </a></li>
                </ul>
                
          
                </div>
            </div>
            </header>
            <!-- end header -->
            <!-- start section -->
            <div class="title">
                <h1>ข่าวสาร</h1>
                <div class="border-content-t"></div>
            <h1>(News)</h1>
            </div>
                <div class="container">
                    
                   
                <div class="container-detall">
                    <a href="WorkAndAwards.php"><button class='btn-notact'>ผลงานและรางวัล</button></a>
                    <a href="new.php"><button class="btn-news">ข่าวสาร</button></a>

                    <div class="detallFonews">
                     <?php
                        include_once('connectDB.php');
                            while($rs = mysqli_fetch_array($nquery))
                            {$original_date = $rs['Date'];
                              // Creating timestamp from given date
                              $timestamp = strtotime($original_date);
                              // Creating new date format from that timestamp
                              $new_date = date("d-m-Y", $timestamp);
                            echo " 
                            <div class='news'> 
                                <div class='photo'><img src='../adminBPC/upload_news/$rs[Newimg]' alt=''></div> 
                              <div class='news-detall'>
                              <div class='date'>$new_date</div>
                                 <a href='deNew.php?id=$rs[ID]'   name='click_title'>$rs[Title] </a>
                                    <div class='detall'>
                                                <span>รายละเอียด:</span>
                                                <span class='texttable'>$rs[Text]</span>
                                    </div>
                              </div>  
                            </div> ";}
                              ?></form>
                        <div id="pagination_controlsa"><?php echo $paginationCtrls; ?></div>       
                    </div>   <!-- end detallFonews -->
                    
                </div> <!-- end container-detall -->
            </div>  <!-- end content -->
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
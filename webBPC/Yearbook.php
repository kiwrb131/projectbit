<?php require_once 'connectDB.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../webBPC/Yearbook.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../webBPC/headandFooter.css">
    <link rel="stylesheet" href="../webBPC/Yearbook.css">
    <title>ทำเนียบรุ่น</title>
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
                <li><a href="Yearbook.php"class="active">ทำเนียบรุ่น<br><span>Alumni</span></a><div class="border-menu"></div></li>
                <li><a href="photo.php">ภาพกิจกรรม<br><span>Photo</span><div class="border-menu"></div></a></li>
                <li><a href="QA.php">คำถามยอดฮิต<br><span>Q&A</span><div class="border-menu"></div></a></li>
                <li><a href="content.php">ติดต่อ<br> <span>Contact</span> <div class="border-menu"></div></a></li>
            </ul>
      
        </div>
        </div>
        </header>
        <!-- end header -->
        <!-- start section -->
        <div class="title">
        <?php
                        
                        $nquery="SELECT * from  tbyear WHERE Year ='$_POST[yearch]'AND Status = '1'";
                        $result=mysqli_query($conn,$nquery);
                        $res = mysqli_fetch_array($result);
        ?>
            <h1>ทำเนียบรุ่นที่ <?php echo" $res[Year]";?></h1>
            <div class="border-content-t"></div>

        <h1>[ Alumni ]</h1>
        </div>
        <div class="container">
            <div class="year-study">
                <h1 class="year-type">รุ่น</h1>
                <form action="Yearbook.php" method="POST">
                    <div class="yeararea" id="div">
                        
                         <?php 
                             include_once('connectDB.php');
                            $nquery="SELECT * from  tbyear WHERE Status = '1' order by Year DESC ";
                             $result=mysqli_query($conn,$nquery);
                           
                             while($rs = mysqli_fetch_array($result))
                             {
                               $year = $rs['Year'];
                             echo " <button type='submit' name='yearch' value='$rs[Year]'  class='btn'>$rs[Year]</button> ";
                             }
                        ?>   
                    </div>
            </div>
            </form>
                <div class="container-photo">
                    <?php
                        
                     $nquery="SELECT * from  tbyear WHERE Year ='$_POST[yearch]'AND Status = '1'";
                     $result=mysqli_query($conn,$nquery);
                     while($res = mysqli_fetch_array($result))
                     {
                     echo " 
                             <img class='photo' src='../adminBPC/upload_yearbook/$res[Yearimg]'>";
                      }
                    
                    
                    ?>
                </div>
                    <!-- <img class='photo' src="../webBPC/pic/wall/B1.jpg" alt=""> -->
                 
                <div class='sumtable'>
                    <table id='myTable'>
                        
                    <th style='width:25%'>รหัสนักศึกษา</th><th >รายชื่อสมาชิก</th><th>ประสบการณ์</th>
                               
                        
                            <?php                             
                                    // $nquery="SELECT * from  tbyear  ";
                                    $query="SELECT * FROM tbstu WHERE Year ='$_POST[yearch]'";

                                    $resultstu=mysqli_query($conn,$query);
                                    while($re = mysqli_fetch_array($resultstu))
                                    {
                                    echo " <tr>
                                            <td>$re[ID]</td>
                                            <td>$re[name]</td>
                                            <td>$re[expert]</td>
                                            </tr>
                                        ";
                                    }    
                            ?> 
                       
                    </table>
                </div>
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
    <script>
function getdat(ahref) {
  var x = ahref.getAttribute("alt"); 
//i = 1 for reserved header 
  for(var i=1;i<document.getElementById("myTable").rows.length;i++){
    var row = document.getElementById("myTable").rows[i];
    if (row.cells[2].innerHTML == x){ //PARTNO
        row.style.display = "";
    }else{
        row.style.display = "none";
    }
  }
}
// Add active class to the current button (highlight it)
var header = document.getElementById('div');
var btns = header.getElementsByClassName('btn');
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click', function() {
  var current = document.getElementsByClassName('active_year');
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(' active_year', '');
  }
  this.className += ' active_year';
  });
}

</script>

</body>
</html>
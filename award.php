<?php include_once("loginDB.php");?>
<?php 
        $query=mysqli_query($conn,"SELECT COUNT(ID) FROM `tbawar` ");
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
      
        $nquery=mysqli_query($conn,"SELECT * from  tbawar  order by Date DESC  $limit");
      
        $paginationCtrls = '';
      
        if($last != 1){
      
        if ($pagenum > 1) {
      $previous = $pagenum - 1;
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';
      
          for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
            }
        }
      }
      
        $paginationCtrls .= ''.$pagenum.' &nbsp; ';
      
        for($i = $pagenum+1; $i <= $last; $i++){
          $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
          if($i >= $pagenum+4){
            break;
          }
        }
      
      if ($pagenum != $last) {
      $next = $pagenum + 1;
      $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
      }
        }
  ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลงานและรางวัล</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminBPC/head_sideAndFooter.css">
    <link rel="stylesheet" href="../adminBPC/award.css">
</head>
<body> 
<form action="loginDB.php" method="POST">

    <div class="head-con">
    <div class="nav_logo">
        <img src="../adminBPC/pic/Image 12224.png" alt="" >
   </div>

    <div class="nav_logout">
        <div class="logout">
            <h1>User :
                <span id="nameuser"><?php echo $_SESSION['username'];?></span> 
                    <button class="btn-logout" type="submit" name="logout">Logout</button>
                    </form>
            </h1>
        </div>
    </div>
    <div class="menu">
        <div class="bg-menu">
            <h1>จัดการเว็บไซต์</h1>
                    <hr>
                    <ul class="ul-menu">
                      <a href="home.php"><li > หน้าหลักเว็บไซต์</li></a>
                     <li class="showli"> <a href="course.php">หลักสูตร</a> <span style='font-size:25px; float: right; position: relative; right: 10px;'>&or;</span> <ul class="dropdown">
                          <a href="professor.php"><li>คณะอาจารย์</li></a>
                          <a href="award.php"><li class="active">ผลงานและรางวัล</li></a></li>
                      </ul>
                      <a href="Yearbook.php"><li>ทำเนียบรุ่น</li></a>
                      <a href="activity.php"><li> ภาพกิจกรรม</li></a>
                      <a href="QA.php"><li>คำถาม QA</li></a>
                      <a href="contact.php"><li>การติดต่อ</li></a>
                     <a href="massage.php"><li>กล่องข้อความ</li></a>
                      <a href="update_admin.php"><li>Admin</li></a>
                    </ul>
        </div>
    </div>
    <div class="content">
        <div class="head-text">
            <h1>ผลงานและรางวัล</h1>
        </div>
        <div class="content-inside">
          <div class="headA">
          <a href="update_award.php"><input type="button" value="เพิ่มผลงาน" class="btn-add"></a>
          </div>
<!-- table -->
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"style="text-align: center;">หัวเรื่อง</th>
        <th scope="col" style="text-align: center;">เนื้อหา</th>
        <th scope="col"style="text-align: center;">รูป</th>
        <th scope="col"style="text-align: center;">สถานะ</th>
        <th scope="col"style="text-align: center;">แก้ไข</th>
        <th scope="col"style="text-align: center; ">ลบ</th>
      </tr>
    </thead>
    <tbody class="content-table">
    <form action="insert_update_award.php" method="POST">
    <?php
                  include_once('connectDB.php');
                    // $query = "SELECT * FROM tbawar";
                    // $result = mysqli_query($conn,$query);
                    // while($rs = mysqli_fetch_array($result))
                   
                   while($rs = mysqli_fetch_array($nquery))
                    {
                    echo "<tr>
                    <th >$rs[Title]</th>
                    <td  class='cell_text'><span class='text-overflow'>$rs[Text]</span></td>
                    <td class='cell_img'><img src='../adminBPC/upload_award/$rs[Awar_1]' alt='' class='photo-new'></td>";
                    if($rs["Status"]== 1){
                     echo "<td class='cell_status'><img src='../adminBPC/pic/icons8-checkmark-64.png' alt=''></td>
                     ";}else{
                      echo "<td class='cell_status'><img src='../adminBPC/pic/icons8-delete-64.png' alt=''></td>
                      ";
                     }
                    echo "<td class='cell_btn'><button class='btn-ok' type='submit' name='update' value='$rs[ID]'>แก้ไข</button></td>
                    <td class='cell_btn'><button class='btn-delete' type='submit' name='delete' value='$rs[ID]' onClick=\"return confirm('คุณแน่ใจใช่หรือไม่ที่จะลบข้อมูลทั้งหมดของ $rs[Title] ?');\">ลบ</button></td>
                  </tr>";}
                  ?>
          </form>
    </tbody>
  </table>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>       

  <!-- <nav aria-label="Page navigation example">
    <ul class="pagination" >
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav> -->
    <hr class="end_centent">
</div><!-- ************* End content 5 award *************-->
</div>
<script language="JavaScript">
	// function chkConfirm()
	// {
	// 	if(confirm('ต้องการลบข้อมูลนี้หรือไม่')==true)
	// 	{
      
	// 		alert('ลบ');
	// 	}
	// 	else
	// 	{
	// 		alert('You selected to cancel.');
	// 	}
	// }
</script>
</body>
</html>
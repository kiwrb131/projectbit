<?php
ob_start();
                    include_once('connectDB.php');

 if(isset($_POST['addimg'])){
    $queryID = "SELECT MAX(ID) AS Maxid FROM tbsild";
    $id=mysqli_query($conn,$queryID);
    $rs = mysqli_fetch_array($id);

    $pulsID= $rs['Maxid'];
    $pulsID = $pulsID+1;

    $target_dir = "upload_imgslider/";
    $filenameMain=$_FILES["main"]["name"];
    $target_fileMain = $target_dir.basename($filenameMain);
   

      if(move_uploaded_file($_FILES['main']['tmp_name'],$target_fileMain)){ 
      $query = "INSERT INTO tbsild (ID,Himg1) 
      VALUE('$pulsID','$filenameMain')";
      $result=mysqli_query($conn,$query);
            if($result){ 
                // $message = "บันทึกสำเร็จ";
                //  echo "<script type='text/javascript'>alert('$message');</script>";
                echo '<script language="javascript">';
                echo 'alert("บันทึกสำเร็จ")';
                echo '</script>';
                header('location: home.php');
            }else{
                echo '<script language="javascript">';
                    echo 'alert("บันทึกไม่สำเร็จ")';
                echo '</script>';
                header("location: home.php");
            }}else{
                 echo "error";}
            }

if(isset($_POST['delete'])){
                $value = $_POST['delete'];
                $query="DELETE FROM tbsild WHERE ID = '$value'";
                $resultDEL=mysqli_query($conn,$query);
                if($resultDEL) {
                    echo "<h1>$value</h1>";
                    header("location: home.php");
                }
               
                }
?>
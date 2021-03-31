<?php
include_once("connectDB.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $text=$_POST['text'];
   
     $queryID = "SELECT MAX(ID) AS Maxid FROM tbcontact";
     $id=mysqli_query($conn,$queryID);
    $rs = mysqli_fetch_array($id);
     $pulsID= $rs['Maxid'];
    
    
    $pulsID = $pulsID+1;
    
    $query = "INSERT INTO tbcontact(ID,tex,ne) 
    VALUE('$pulsID','$text','$name')";
    $result = mysqli_query($conn,$query);
    
    if($result){
       echo "เพิ่มข้อมูลสำเร็จ";
       header("location:content.php");
    }else{
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }
    }

?>
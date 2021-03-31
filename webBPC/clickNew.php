<?php 
include_once('connectDB.php');
// if(isset($_POST['btn-ok'])){
//     $queryID = "SELECT MAX(ID) AS Maxid FROM tbatvite";
//     $id=mysqli_query($conn,$queryID);
//     $rs = mysqli_fetch_array($id);
//     $pulsID= $rs['Maxid'];
//     $pulsID = $pulsID+1;
    
    
//     $toppic = $_POST['TItle'];
//     $date = $_POST['date'];
//     $status = $_POST['status'];
//     $detell = $_POST['description'];
//     $target_dir = "upload_award/";
//     $filenameMain=$_FILES["main"]["name"];
//     $filenameActivity = $_FILES["activity"]['name'];
//     $target_fileMain = $target_dir.basename($filenameMain);
//     $target_fileActivity = $target_dir.basename($filenameActivity);

//     if(move_uploaded_file($_FILES['main']['tmp_name'],$target_fileMain)){
//         if(move_uploaded_file($_FILES['activity']['tmp_name'],$target_fileActivity))
//         echo "File is valid, and was successfully uploaded.\n";
//         $query = "INSERT INTO tbatvite(ID,Title,Text,Date,Atvite_1,Atvite_2,Status) 
//         VALUE('$pulsID','$toppic','$detell','$date','$filenameMain','$filenameActivity','$status')";
//         $result=mysqli_query($conn,$query);
//         if($result){
//          header("location:deNew.php");
//         }else{
//             echo 'error';
           
//         }}else{
//             echo "error";
            
//             }

//         }
        // if(isset($_POST['delete'])){
        //     $value = $_POST['delete'];
        //     $query="DELETE FROM tbatvite WHERE ID = '$value'";
        //     $resultDEL=mysqli_query($conn,$query);
        //     $result;
        //    echo "<h1>$value</h1>";
        //     header("location:activity.php");
        //     }
          
?>
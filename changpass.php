<?php
   include_once("connectDB.php");
   session_start();
if(isset($_POST['changpass'])){
 
    $username=$_POST['nameAdmin'];
    $passwordnew = $_POST['newpass1'];
    $passwordnewSURE = $_POST['newpass2'];
    $passwordold= mysqli_real_escape_string($conn,$_POST['oldpass']);
   
    $query = "SELECT Password FROM tbadmin WHERE Password = '$passwordold'";
    $result = mysqli_query($conn,$query);
    
    if($passwordnew===$passwordnewSURE){
    if(mysqli_num_rows($result) == 1){
        $queryUpdate="UPDATE tbadmin SET Name ='$username',Password='$passwordnew' WHERE Name = '$username'";
         $res=mysqli_query($conn,$queryUpdate);
   
        header("location:update_admin.php");
    }else{
        // array_push($error,"usernameหรือ password ผิด");
        // $_SESSION['error']="error";
        echo "error";
        
    }}else{
       echo "รหัสผ่านไม่ตรงกัน";
    }
    }
    if(isset($_POST['register'])){
        $queryID = "SELECT MAX(ID) AS Maxid FROM tbadmin";
        $id=mysqli_query($conn,$queryID);
        $rs = mysqli_fetch_array($id);
        $pulsID= $rs['Maxid'];
        $pulsID = $pulsID+1;

        
        $password = $_POST['add-password1'];
        $username = mysqli_real_escape_string($conn,$_POST['add-admin']);
        $passwordChrck = $_POST['add-password2'];
        $major = $_POST['major'];
        $query="SELECT Name FROM tbadmin WHERE Name ='$username'";
        $result = mysqli_query($conn,$query);
        if($password === $passwordChrck){
            if(mysqli_num_rows($result) != 1){
                $queryInsert="INSERT INTO tbadmin(ID,Name,Password,Status)VALUE('$pulsID','$username','$password','$major')";
                $resultInsert = mysqli_query($conn,$queryInsert);
                if($resultInsert){
                    header('location:update_admin.php');
                    unset($_SESSION['passerror']);
                    unset($_SESSION['usererror']);
                }
            }else{
                $_SESSION['usererror']="ชื่อusernameนี้ มีอยู่แล้ว";
                header('location:update_admin.php');
            }
        }else{
               
            $_SESSION['passerror']="ยืนยันรหัสผ่านไม่ตรงกัน";
            header('location:update_admin.php');
            echo $_SESSION['passerror'];
        }

    }
    if(isset($_POST['delete'])){
        $id=$_POST['delete'];
        $query="DELETE FROM tbadmin WHERE ID = '$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            header('location:update_admin.php');
        }else{
            echo "error";
        }
        
    }
    ?>
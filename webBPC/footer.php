<?php
    include_once('connectDB.php'); 
                    $query="SELECT * FROM tbpage";
                    $result=mysqli_query($conn,$query);
                    $rs=mysqli_fetch_array($result);

echo " <img src='../webBPC/pic/Image 12224.png' alt='' class='logo-f'>
            <div class='adddese'><span>มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ บพิตรพิมุข จักรวรรดิ</span>
                <div class='add'> <span>ที่อยู่:</span>
                    <span>$rs[Text]</span>
                    
                </div>
                <span>เบอร์โทรติดต่อ:</span>
                <span>$rs[Phone]</span>
            </div>
       
        </div>
           ";
            ?>
            <?php 
            include_once('connectDB.php'); 
            $query="SELECT * FROM tbcon";
            $result=mysqli_query($conn,$query);
            $rs=mysqli_fetch_array($result);
            echo" <div class='social'>
           <a href='$rs[Facebook]'> <img src='../webBPC/pic/facebook.png'alt=''></a>
           <a href='$rs[Li]'> <img src='../webBPC/pic/line.png' alt=''></a>
        </div>";
            ?>
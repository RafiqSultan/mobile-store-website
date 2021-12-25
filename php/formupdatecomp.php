<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet"  href="../css/insertcompany.css">
    <meta charset="utf-8">

    <title>Mobile STORE</title>
<link rel="icon" href="logo.png">
    </head>
<body style="background-image: url(../image/mobile_store.jpg); ">
           <div class="bb">
    <a href="../html/updateshow.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>

    <div class="signin">
        <h2>UPDATE COMPANY </h2>
        <form action="" method="post">
            <input type="text" placeholder="ENTER THE ID OF COMPANY " name="comp_id" >
    <input type="text" placeholder="ENTER THE NAME OF COMPANY " name="namecompany" >
<button type="submit" name="update">Update</button>
   
        </form>
         </div>
        </body >


</html>



<?php
include("connect.php");
 
 if( isset($_POST['comp_id']))
         {
            $id=$_POST['comp_id'];
            $qq=mysqli_query($connect,"UPDATE `company`  SET company_name='$_POST[namecompany]' WHERE company_number='$id'");
             
             if(!$qq)
                 echo "<h2>".'errr'."</h2>";
             else
             {
                 echo "ok";
                 header("location:../php/selectcompany.php");
                 exit;
                 
             }
         }
    
    mysqli_close($connect);
    ?>
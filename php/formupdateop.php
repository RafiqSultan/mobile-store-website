<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet"  href="../css/insertcompany.css">
    <meta charset="utf-8">
    <title>Mobile STORE</title>

    </head>
<body style="background-image: url(../image/mobile_store.jpg); ">
           <div class="bb">
    <a href="../html/updateshow.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
    <div class="signin">
        <h2>UPDATE OPRATION </h2>
        <form action="" method="POST">
            <input type="text" placeholder="ENTER THE ID  OF  OPRATION " name="op_id" >
    <input type="text" placeholder="ENTER THE NAME OF OPRATION " name="nameopration" >
<button type="submit" name="update">Update</button>
   
        </form>
         </div>
        </body>


</html>

<!-- 
if (isset($_POST['id']))
{
    $id = $_POST['id']; -->


<?php
include("connect.php");
         if( isset($_POST['op_id']))
         {
            $id=$_POST['op_id'];
            $qq=mysqli_query($connect,"UPDATE `opration`  SET opration_name='$_POST[nameopration]' WHERE opration_number='$id'");
             if(!$qq)
                 echo "<h2>".'errr'."</h2>";
             else
             {
                 echo "ok";
                 header("location:../php/selectopration.php");
                 exit;
                 
             }
         }
    
    mysqli_close($connect);
    ?>





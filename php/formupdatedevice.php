<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
    <title>Mobile STORE</title>
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="../css/add_device.css">
        <body style="background-image: url(../image/mobile_store.jpg); background-image-repeat:no-repeat">
                   <div class="bb">
    <a href="../html/updateshow.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
           <form action="" method="post">
            <div class="signin">
                <div  class="continar">
                    <h2>UPDATE DEVICE</h2>
                    <ul>
                
                        
            <li>    <label>Name of Device</label>
                <input type="text" name="add_device" placeholder="Enter The Name of Device" autofocus  >
                        </li>
                        <li>    <label>ID of Device</label>
                <input type="text" name="device_id" placeholder="Enter ID oF Device" autofocus required >
                        </li>
      <li>
                    <label>Number of Copies</label>
                        <input type="number" name="numberofcopies" placeholder="Enter The Number of Copies"></li>
                        <li>
                            <label>Verison of Device</label>
                <input type="text"  name="version" placeholder="Enter The Version">
                        </li>

                        <li>
                        <br><br><br><br><br><br><br><br><br>
            <button type="submit">Update</button>
                        </li>
                        <li>
                    <label>Price of Device</label>
                        <input type="number" name="price" placeholder="Enter The Price of Device">
                    </li>

                    </ul>        
            </div>
            </div>
            </form>
        </body >
    </head>
</html>



<?php
include("connect.php");

         
if( isset($_POST['device_id']))
         {
            $id=$_POST['device_id'];
             
              $qq=mysqli_query($connect,"UPDATE `device`  SET device_name='$_POST[add_device]',version='$_POST[version]',device_price='$_POST[price]',number_of_copy='$_POST[numberofcopies]' WHERE device_number='$id'");            
             
             if(!$qq)
                 echo "<h2>".'errr'."</h2>";
             else
             {
                 header("location:select.php");
                 exit;
                 
             }
         }
    
    mysqli_close($connect);
    ?>

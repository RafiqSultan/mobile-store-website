<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet"  href="../css/select.css">
    <meta charset="utf-8">
    <title>Mobile store STORE</title>
     <style type="text/css">
          h2,p,h3,h4
        {
            opacity: 0.8;
            box-shadow: 10px 10px 44px 1px black;
            color: aliceblue;
            border: 4px solid skyblue;
          padding: 10px;
            text-align: center;
            
        }

    </style>
    </head>
<body style="background-image: url(../image/mobile_store.jpg); ">
<div class="bb">
    <a href="../html/main.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>

        </body>


</html>

<?php
$host="127.0.0.1";
$password="";
$usfer="root";
$database="mobile-store";
  $connect=mysqli_connect($host,$usfer,$password,$database);
    if(mysqli_connect_errno())
    {
        die ("filed connection").mysqli_connect_error();
    }


if(isset($_POST['save'])) 
{
    $ss=$_POST['search'];
     $query=" SELECT `device_number`, `company_number`, `device_name`, `version`, `opration_number`, `category_number`, `device_price`, `number_of_copy` FROM `device` WHERE device_name LIKE '%$ss%'";
     
    
    if($result=mysqli_query($connect,$query))
    {
        if(mysqli_num_rows($result)>0)
        {
              echo"<table border=1>";
              echo"<tr>";
          echo"<th>device number</th>";
            echo"<th>company number</th>";
            echo"<th>device name</th>";
            echo"<th>version device</th>";
            echo"<th>opration number</th>";
            echo"<th>category kind</th>";
            echo"<th>device price</th>";
            echo"<th>number of copy</th>";
              echo"</tr>";
               
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>".$row['device_number']."</td>";
                echo"<td>".$row['company_number']."</td>";
                echo"<td>".$row['device_name']."</td>";
                 echo"<td>".$row['version']."</td>";
                echo"<td>".$row['opration_number']."</td>";
                echo"<td>".$row['category_number']."</td>";
                 echo"<td>".$row['device_price']."</td>";
                echo"<td>".$row['number_of_copy']."</td>";
            
            echo "</tr>";
            }
             echo"</table>";
        
        }
        else
        {
         echo "<p>null record</p>";    
        }
    }
    else
    {
        echo "thats problem is select $query.or not found.".mysqli_error($connect)."<br>";
    }
}
    mysqli_close($connect);
    ?>
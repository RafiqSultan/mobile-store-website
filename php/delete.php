<!doctype html>
<head>
    <style type="text/css">

        h2
        {
            opacity: 0.8;
            box-shadow: 10px 10px 44px 1px black;
            color: aliceblue;
            border: 4px solid skyblue;
          padding: 10px;
            text-align: center;
            
        }
    </style>
   <link rel="stylesheet"  href="../css/select.css">
</head>
<body  style="background-image: url(../image/mobile_store.jpg); ">
<div class="bb">
    <a href="../html/deleteshow.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
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
else
{
}
     $query="SELECT `device_number`, `company_number`, `device_name`, `version`, `opration_number`, `category_number`, `device_price`, `number_of_copy` FROM `device` ";
    
  
    if($result=mysqli_query($connect,$query))
    {
        if(mysqli_num_rows($result)>0)
        {
              echo"<table border=1>";
              echo"<tr>";
           echo"<th>device number</th>";
            echo"<th>company name</th>";
            echo"<th>device name</th>";
            echo"<th>version device</th>";
            echo"<th>opration</th>";
            echo"<th>category kind</th>";
            echo"<th>device price</th>";
            echo"<th>number of copy</th>";
            echo"<th>delete</th>";
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
                 echo"<td>"."<a href='delete.php?id=$row[0]'>delete.</td>";
                      echo "</tr>";  
            }
            echo"</table>";
            
            }
        else
        {
         echo "null record";    
        }
        $a=$_GET['id'];
         if($a)
         {
           
            $qq=mysqli_query($connect,"DELETE FROM `device` WHERE device_number='$a'");
             if(!$qq)
                 echo "<h2>".'errr'."</h2>";
             else
             {
                 echo "ok";
                 header("location:delete.php?id=");
                 exit;
                 
             }
         }
    }
    mysqli_close($connect);
    ?>
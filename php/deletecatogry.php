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
<body style="background-image: url(../image/mobile_store.jpg); ">
           <div class="bb">
    <a href="../html/deleteshow.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
<?php
include("connect.php"); 
   $query="SELECT `category_number`, `category_name` FROM `category`";
    
  
    if($result=mysqli_query($connect,$query))
    {
        if(mysqli_num_rows($result)>0)
        {
              echo"<table border=1>";
              echo"<tr>";
         echo"<th>category number</th>";
            echo"<th>category name</th>";
            echo"<th>delete</th>";
              echo"</tr>";
               
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                  echo"<tr>";
           echo"<td>".$row['category_number']."</td>";
                echo"<td>".$row['category_name']."</td>";
                 echo"<td>"."<a href='deletecatogry.php?id=$row[0]'>delete.</td>";
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
           
            $qq=mysqli_query($connect,"DELETE FROM `category` WHERE category_number='$a'");
             if(!$qq)
                 echo "<h2>".'errr'."</h2>";
             else
             {
                 
                 header("location:deletecatogry.php?id=");
                 exit;
                 
             }
         }
    }
    mysqli_close($connect);
    ?>
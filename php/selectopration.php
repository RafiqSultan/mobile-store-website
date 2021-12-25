<?php
include("connect.php");
?>
<!doctype html>
<head>
               <div class="bb">
    <a href="../html/selectmain.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
    <style type="text/css">
         h2
        {
            width: 20%;
            opacity: 0.8;
            box-shadow: 10px 10px 44px 1px black;
            color: aliceblue;
            border: 4px solid skyblue;
          padding: 10px;
            text-align: center;
            
        }
        img
{
    transition: all .2s ease-in-out;
}
img:hover
{
    transform: scale(1.1,1.1);
        box-shadow: 1px 1px 4px  white;
    opacity: 0.7;
}
        
    </style>
   <link rel="stylesheet"  href="../css/select.css">
</head>
<body style="background-image: url(../image/mobile_store.jpg); ">
    
</body>
<?php
    $query="SELECT `opration_number`, `opration_name` FROM `opration` ";
    if($result=mysqli_query($connect,$query))
    {
        if(mysqli_num_rows($result)>0)
        {
              echo"<table border=1>";
              echo"<tr>";
         echo"<th>opration number</th>";
            echo"<th>opration name</th>";
              echo"</tr>";
               
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>".$row['opration_number']."</td>";
                echo"<td>".$row['opration_name']."</td>";
           
            
            echo "</tr>";
            }
             echo"</table>";
            mysqli_free_result($result);
        }
        else
        {
         echo "null record";    
        }
    }
    else
    {
        echo "thats problem is select $query.".mysqli_error($connect)."<br>";
    }
    ?>
</boy>
   
<?php

mysqli_close($connect);
?>

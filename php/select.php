<?php
include("connect.php");
?>
<!doctype html>
<head>
               <div class="bb">
    <a href="../html/selectmain.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
    <link rel="stylesheet" href="../css/select.css">
    <style type="text/css">
  
         h2
        {
            width: 20%;
            opacity: 0.8;
            box-shadow: 10px 10px 44px 1px black;
            color: aliceblue;
            border: 1px solid skyblue;
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
        
body {
    background-size: cover;
    background-repeat: no-repeat;   
    background-attachment: fixed; 
}
table {
 
  border-collapse: collapse;
  border: 1px solid #38678f;
  margin: 100px auto;
  background: white;
}
th {
  background: steelblue;
  
    height: -30px;
  font-weight: lighter;
  text-shadow: 0 1px 0 #38678f;
  color: white;
  border: 1px solid #38678f;
  box-shadow: inset 0px 1px 2px #568ebd;
  transition: all 0.2s;
}
tr {
  border-bottom: 1px solid #cccccc;
}
tr:last-child {
  border-bottom: 0px;
}
td {
   
    text-align: center;
  border-right: 1px solid #cccccc;
  padding: 1px;
  transition: all 0.2s;
}
td:last-child {
  border-right: 0px;
}
    
        
    </style>
   
</head>
<body style="background-image: url(../image/mobile_store.jpg); ">
    
</body>
<?php
    $query=" select `device_number`,`company_name`,`device_name`,`version`,`opration_name`,`category_name`,`device_price`,`number_of_copy`
from device,company,opration,category WHERE (
(SELECT device.company_number=company.company_number)
and 
   (SELECT device.opration_number=opration.opration_number)
    AND
    (SELECT device.category_number=category.category_number)
)

ORDER by `device_number` ASC";
    if($result=mysqli_query($connect,$query))
    {
        if(mysqli_num_rows($result)>0)
        {
              echo"<table border=2>";
              echo"<tr>";
          echo"<th>device number</th>";
            echo"<th>company name</th>";
            echo"<th>device name</th>";
            echo"<th>version device</th>";
            echo"<th>opration</th>";
            echo"<th>category kind</th>";
            echo"<th>device price</th>";
            echo"<th>number of copy</th>";
              echo"</tr>";
               
            while($row=mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>".$row['device_number']."</td>";
                echo"<td>".$row['company_name']."</td>";
                echo"<td>".$row['device_name']."</td>";
                 echo"<td>".$row['version']."</td>";
                echo"<td>".$row['opration_name']."</td>";
                echo"<td>".$row['category_name']."</td>";
                 echo"<td>".$row['device_price']."</td>";
                echo"<td>".$row['number_of_copy']."</td>";
            
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
    </body>
<?php
mysqli_close($connect);
?>
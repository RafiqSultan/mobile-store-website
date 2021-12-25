
<!doctype html>
<head>
             <div class="bb">
    <a href="../html/addcategory.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
    <style type="text/css">
        body
        {
    background-size: cover;
    background-repeat: no-repeat;   
    background-attachment: fixed; 
        }
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
<body style="background-image: url(../image/elec_deviess.jpg); "></body>

<?php
include("connect.php");
    $game_opration=$_POST['nameopration'] ;
  

$query="INSERT INTO `opration`(`opration_name`) VALUES ('$game_opration')";
   if($result=mysqli_query($connect,$query))
   {
       echo "<h2> Imsert Ok</h2>";
   }
   else
      echo "thats problem is select $query.".mysqli_error($connect)."<br>";


?>
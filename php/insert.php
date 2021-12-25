
<!doctype html>
<head>
    <style>
         h2
        {
            opacity: 0.8;
            box-shadow: 10px 10px 44px 1px black;
            color: aliceblue;
            border: 4px solid skyblue;
          padding: 10px;
            text-align: center;
            
        }
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border-top: 8px solid #FFC107;    width: 60%;
    box-shadow: 0px 0px 25px #636363;
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
p {
		color: black;
	}
 .modal-header h2 {
color : #726198;}
 .modal-footer h3 {
color : #726198;}
.close {
    color: white;
    background: #ffc107;
    border: 2px solid rgba(255, 152, 0, 0.49);
    border-radius: 3px;
    padding: 5px 30px 5px 30px;
    float: right;
    font-family: sans-serif;
    cursor: pointer;
    box-shadow: 2px 2px 20px #fff;
    transition: box-shadow 0.3s;
}
.close:hover,
.close:focus {
    box-shadow: 2px 2px 20px #9e9e9e;
  
}
.modal-header {
    padding: 2px 16px;
    color: #616161;
    margin-right: 5px;
    margin-left: 5px;
    border-bottom: 1px solid #a7a7a7;
}

.modal-footer {
    padding: 2px 16px;
    color: #616161;
    margin-right: 5px;
    margin-left: 5px;
    border-top: 1px solid #a7a7a7;
    
}

    </style>
   <link rel="stylesheet"  href="../css/select.css">
</head>
<body style="background-image: url(../image/elec_deviess.jpg); ">

<?php

include("connect.php");

    $device_name=$_POST['add-device'] ;
    $device_op=$_POST['opdevice'] ;
    $device_copies=$_POST['numberofcopies'] ;
    $device_version=$_POST['version'] ;
    $device_compony=$_POST['addcompany'] ;
    $device_date=$_POST['date'] ;
    $device_price=$_POST['price'] ;
    $device_type=$_POST['type_of_device'] ;
  

    $query=" INSERT INTO `device` (`device_name`,`company_number`  , `version`, `opration_number`, `category_number`, `device_price`, `number_of_copy`) VALUES
    ('$device_name',(SELECT `company_number` FROM `company` WHERE 
    company_name ='$device_compony'),$device_version,(SELECT `opration_number` FROM `opration` WHERE opration_name ='$device_op'),(SELECT `category_number` FROM `category` WHERE `category_name`='$device_type'),$device_price,$device_copies)";
       if($result=mysqli_query($connect,$query))
       {
        header("location:add_device.php");
       }
       else
          echo "thats problem is select $query.".mysqli_error($connect)."<br>";

    ?>

</body>
</html>


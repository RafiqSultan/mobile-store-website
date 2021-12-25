<?php
session_start();
if(isset($_POST['save']))
{
 $User =($_POST['username']);
 $Pwd =($_POST['password']);
 if (!empty ($User)&&($Pwd))
{

//$conntion=mysqli_connect('127.0.0.1','root','','kingdome') or die (' No conntion');
include("connect.php");


$sql="SELECT * FROM `employee`  WHERE username='$User' AND password='$Pwd'";
 $sqli_reuslt=mysqli_query($connect,$sql) or die('Sql Not Execution');

 $sqli_reuslt_array=mysqli_fetch_assoc($sqli_reuslt);
 $id =$sqli_reuslt_array ['employee_number'];

 if($id==1)
{
     $_session['username']="$username";
     $_session['password']="$password";
     
     echo "WELCOM  ".$username;
 header ("location:../html/main.html");

}
else if($id==3)
{
    header ("location:../html/main.html");
}
     
else
echo "erorr in  username or password !";

}
}
?>
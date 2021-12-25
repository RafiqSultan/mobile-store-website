<?php
session_start();
if(!isset( $_SESSION ["logout"]))
{
   
    header("Location:../index.html");
    exit;
    
}
    else
    
echo "back";


?>
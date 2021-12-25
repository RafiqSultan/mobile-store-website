<?php

include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
    <title>Mobile Store</title>   
        <link rel="stylesheet"  href="../css/add_device.css">
        <style>
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 25%;
    top: 15%;
    width: 50%;
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
    border-top: 8px solid #FFC107;    width: 50%;
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
h2 {
color : #726198;
align-items: center;}
h3 {
color : #726198;}
.close {
    color: 726198;
    background: #ffc107;
    border: 2px solid rgba(255, 152, 0, 0.49);
    border-radius: 3px;
    padding: 5px 30px 5px 30px;
    float: right;
    font-family: sans-serif;
    cursor: pointer;
    box-shadow: 2px 2px 20px #fff;
    transition: box-shadow 0.3s;
    margin-right: 175px;

}
.close:hover,
.close:focus {
    box-shadow: 2px 2px 20px #9e9e9e;
  
}
.modal-header {
    padding: 2px 180px;
    /* width=1000px; */
    width: 800px;
    color: #616161;
    margin-right: 5px;
    margin-left: -80px;
    border-bottom: 1px solid #a7a7a7;
}


</style>

        </head>
        
        <body style="background-image: url(../image/mobile_store.jpg); ">
           

            <form action="../php/insert.php" method="post">
                <div class="bb">
    <a href="../html/main.html"><img  src="../img/backk.png" title="BACK TO THE MAIN MENUE" ></a>
    </div>
            <div class="signin">
                <div  class="continar">
                    <h2>ADD Device</h2>
                    <ul>
                    <li>
                <label>Photo of Device</label>
                        <input type="file" name="photo" >
                        </li>
            <li>    <label>Name of Device</label>
                <input type="text" name="add-device" placeholder="Enter The Name of device" autofocus required >
                        </li>
      <li>
                    <label>Number of Copies</label>
                        <input type="number" name="numberofcopies" placeholder="Enter The Number of device" required></li>
                        <li>
                            <label>Verison of Device</label>
                <input type="text"  name="version" placeholder="Enter The Version" required>
                        </li>
                     <li>    <label>Name of Company</label>
                          <select name="addcompany" required>
               <?php  
                $query="SELECT `company_name` FROM `company` ";
                $result=mysqli_query($connect,$query);
                
                while($row=mysqli_fetch_array($result))
                {
                echo "<option>".$row[0]."</option>";
              
                }
                      
         ?>
                     </select>
                     </li>
                        
               <li> <label>Date of Device</label>
                   <input type="date" name="date" placeholder="Date of  Device" required ></li>
                           <li> <label>Price of Device</label>
                   <input type="number" name="price" placeholder="Price of Device"  required></li>
                        
                        <li>   <label>Type of Opration</label>
                 <select name="opdevice" required>
            <?php  
                $query="SELECT `opration_name` FROM `opration`";
                $result=mysqli_query($connect,$query);
                
                while($row=mysqli_fetch_array($result))
                {
                echo "<option>".$row[0]."</option>";
              
                }
                      
         ?>
                     </select>
                     </li>
                        
            <li>
                <label>Type of Category</label>
                 <select name="type_of_device" required>
            <?php  
                $query="SELECT `category_name` FROM `category`";
                $result=mysqli_query($connect,$query);
                
                while($row=mysqli_fetch_array($result))
                {
                echo "<option>".$row[0]."</option>";
              
                }
                      
         ?>
                     </select>
                     </li>
                        <li>
            <button type="submit" id="myBtn">SAVE</button>
                        </li>
                    </ul>        
            </div>
            </div>
            </form>

            <div id="myModal" class="modal">

  <div class="modal-content">
    <div class="modal-header">
      <h2>ADD SUCCESSFUL</h2>
    </div>
	
    <!-- <div class="modal-footer"> -->
      <h3>  <span class="close">OK</span></h3>
    </div>
  <!-- </div> -->
</div>
<!-- </form> -->

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
        </body>  
</html>
<?php 
session_start(); 
include "db_conn.php";

$usname=$_SESSION['user-name'];
$_SESSION['user-id']=$usname;
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
    <link rel="stylesheet" href ="./frontend/css/index.css">
</head>
<body>
    <div class="container" >
    <form class="form "  action="editprofile1.php " method="post">
     	<h2 class="form__title">update</h2>
     
         <div  class="form__input-group">
         <label>Bio</label>
     	<input class="form__input" type="text" 
                 name="bio" 
                 placeholder="Intoduce yourself"><br>
         </div>
         
<div  class="form__input-group">
<label>State where you can offer your services</label>
     	<input class="form__input" type="text" 
                 name="place" 
                 placeholder="State"><br>
</div>
         
<div  class="form__input-group">
<label>Rate/Day</label>
     	<input class="form__input" type="number" 
                 name="rate" 
                 placeholder="Rate per day"><br>
</div>

     	<div  class="form__input-group">
         <label>Phone Number</label>
          <input  class="form__input" type="tel" 
                 name="phone" 
                 placeholder="Phone Number"><br>
         </div>

       

     	<button class="form__button" type="submit">Update</button>
         <p class="form__text">
         <a class="form__link " href="home.php" >Back</a>
         </p>
          
     </form>
    </div>
    

</body>
</html>
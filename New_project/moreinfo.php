<!DOCTYPE html>
<html>
<head>
	<title>Profile Setup</title>
	<link rel="stylesheet" href ="./frontend/css/index.css">
</head>
<body>
    <div class="container">
    <form class="form " action="detailstorage.php" method="post">
     	<h2 class="form__title">Tell more about yourself</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

<div class="form__input-group"> 
<label>Bio</label>
     	<input class="form__input" type="text" 
                 name="bio" 
                 placeholder="Intoduce yourself"><br>

</div>
  
        
<div class="form__input-group">
<label>State where you can offer your services</label>
     	<input class="form__input" type="text" 
                 name="place" 
                 placeholder="State"><br>
</div>

                


                 <div class="form__input-group">
                 <label>Rate/Day</label>
     	<input  class="form__input" type="number" 
                 name="rate" 
                 placeholder="Rate per day"><br>
                 </div>

     	
 <div class="form__input-group">
 <label>Phone Number</label>
          <input class="form__input" type="tel" 
                 name="phone" 
                 placeholder="Phone Number"><br>
 </div>
         

     	<button class="form__button" type="submit">Finish</button>
         <p>
         <a  href="index.php"   class="form__link ">Set up Later</a>
         </p>
         
     </form>
    </div>

</body>
</html>
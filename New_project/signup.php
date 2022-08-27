<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href ="./frontend/css/index.css">
</head>
<body>
    <div class="container">
    <form class="form " action="signup-check.php" method="post">
     	<h2 class="form__title">SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="form__input-group">
          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" class="form__input"
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text"  class="form__input"
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
          </div>

          
<div class="form__input-group">
<label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"  class="form__input"
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" class="form__input"
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
</div>
         

<div class="form__input-group">
<label>Password</label>
     	<input type="password" class="form__input"
                 name="password" 
                 placeholder="Password"><br>
</div>
     	
        
            <div class="form__input-group">
            <label >Re Password</label>
          <input class="form__input" type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
            </div>     
          

     	<button class="form__button" type="submit">Sign Up</button>
         <p class="form__text"> 
         <a href="index.php"  class="form__link">Already have an account?</a>
         </p>
         
         <div class="nav__link hide">
          <a href="pageone.php">home</a>
          
        </div>
        
     </form>
    </div>
    
</body>
</html>
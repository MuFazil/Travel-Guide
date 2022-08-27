<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href ="./frontend/css/index.css">
</head>
<body>

<div class="container">
     <form action="login.php" class="form" id="login" method="post">
	 <h1 class="form__title">Login</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<div class="form__input-group">
		 <label>User Name</label>
		 <div class="form__message--error"></div>
         <input type="text" name="uname" class="form__input" autofocus placeholder="User name">
                <div class="form__input-error-message"></div>
            
		 </div>
		
		 <div class="form__input-group">
		 <label>Password</label>
		 <div class="form__message--error">
                <input type ="password" name="password" class ="form__input " autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
		 </div>

     	
           
     	
		 <button class="form__button" type ="submit">Continue</button>
         
		  <p class="form__text">
                <a  class="form__link " id ="linkCreateAccount" href ='signup.php'>Don't have an account? Create Account</a>
            </p>
			<div class="nav__link hide">
          <a href="pageone.php">home</a>
          
        </div>
     </form>
</div>
</body>
</html>
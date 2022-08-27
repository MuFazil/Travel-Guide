<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['bio']) && isset($_POST['place'])
    && isset($_POST['rate']) && isset($_POST['phone']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$bio = validate($_POST['bio']);
	$rate = validate($_POST['rate']);

	$place = validate($_POST['place']);
	$phone = validate($_POST['phone']);

	//$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($bio)) {
		header("Location: signup.php?error=Bio is required");
	    exit();
	}else if(empty($place)){
        header("Location: signup.php?error=Place is required");
	    exit();
	}
	else if(empty($rate)){
        header("Location: signup.php?error=Rate is required");
	    exit();
	}

	else if(empty($phone)){
        header("Location: signup.php?error=Phone is required");
	    exit();
	}

	/*else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();*/
	
    

    else{

		// hashing the password
        //$pass = md5($pass);

	   // $sql = "SELECT * FROM users WHERE username='$uname' ";
	//	$result = mysqli_query($conn, $sql);

		//if (mysqli_num_rows($result) > 0) {
		//	header("Location: signup.php?error=The username is taken try another&$user_data");
	    //    exit();
		//}else {
            
          // $guideid=$_SESSION['id'];
        $uname=$_SESSION['username'];
       


           $sql2 = "INSERT INTO guide(username, bio, place,rate,phone) VALUES('$uname', '$bio', '$place','$rate', '$phone')";
           $result2 = mysqli_query($conn, $sql2);


        $sql = "SELECT users.username as myusr ,users.id as idmine ,guide.rate as grate,guide.phone as gphone,
        guide.place as gplace,guide.bio as gbio,
        users.name as username
         FROM users,guide WHERE users.username='$uname'  AND guide.username=users.username";
        $result = mysqli_query($conn, $sql);
      
		if (mysqli_num_rows($result) === 1)
         { 
			$row = mysqli_fetch_assoc($result);
            if ($row['myusr'] === $uname)
            {
            	$_SESSION['username'] = $row['myusr'];
            	$_SESSION['name'] = $row['username'];
            	$_SESSION['id'] = $row['idmine'];
                $_SESSION['rate'] = $row['grate'];
                $_SESSION['place'] = $row['gplace'];
                $_SESSION['bio'] = $row['gbio'];
                $_SESSION['phone'] = $row['gphone'];
            	header("Location: home.php");
		        exit();
            }
		}


         //  if ($result2) {
          //  header("Location: home.php");
           	 //header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }
        }
           else {
	           	header("Location: signup.php?error=unknown error occurred");
                   
		        exit();
           }
		

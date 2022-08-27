<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// encrypting the password
        $pass = md5($pass);

        
		//$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $sql = "SELECT users.username as myusr ,users.password as uspass ,users.id as idmine ,guide.rate as grate,
        guide.phone as gphone,guide.place as gplace ,guide.bio as gbio,
        users.name as usename
         FROM users,guide WHERE users.username='$uname'  AND guide.username=users.username";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['myusr'] === $uname && $row['uspass'] === $pass) {
            	$_SESSION['username'] = $row['myusr'];
            	$_SESSION['name'] = $row['usename'];
            	$_SESSION['id'] = $row['idmine'];
                $_SESSION['rate'] = $row['grate'];
                $_SESSION['phone'] = $row['gphone'];
                $_SESSION['place'] = $row['gplace'];
                $_SESSION['bio'] = $row['gbio'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
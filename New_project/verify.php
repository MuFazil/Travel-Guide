<?php session_start(); 
include "db_conn.php";

if (isset($_POST['place']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$place = validate($_POST['place']);
	
    
      
      
         
       // $_SESSION['username']=$userr;

           


        $sql = "SELECT users.username as myusr ,users.id as idmine ,guide.rate as grate,guide.phone as gphone,
        guide.place as gplace,guide.bio as gbio,
        users.name as username
         FROM users,guide WHERE guide.place='$place'  AND guide.username=users.username";
        $result = mysqli_query($conn, $sql);
      
		if (mysqli_num_rows($result) === 1)
         { 
			$row = mysqli_fetch_assoc($result);
            if ($row['gplace'] === $place)
            {
            	$_SESSION['username'] = $row['myusr'];
            	$_SESSION['name'] = $row['username'];
            	$_SESSION['id'] = $row['idmine'];
                $_SESSION['rate'] = $row['grate'];
                $_SESSION['place'] = $row['gplace'];
                $_SESSION['bio'] = $row['gbio'];
                $_SESSION['phone'] = $row['gphone'];
            	header("Location: homeview.php");
		        exit();
            }
		}

	         exit();
           
        }
           else {
	           	header("Location: signup.php?error=unknown error occurred");
                   
		        exit();
           }

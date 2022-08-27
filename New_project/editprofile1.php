
<?php 
session_start(); 
include "db_conn.php";
$usname=$_SESSION['user-id'];

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

$sql = "SELECT * from guide WHERE username='$usname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $usname) {

     if($row['bio']!=$bio){
        $sql = "UPDATE guide SET bio='$bio'WHERE username='$usname'";
        $result = mysqli_query($conn, $sql);
        
     }
     if($row['place']!=$place){
        $sql = "UPDATE guide SET place='$place'WHERE username='$usname'";
        $result = mysqli_query($conn, $sql);
        
     }
     if($row['rate']!=$rate){
        $sql = "UPDATE guide SET rate='$rate'WHERE username='$usname'";
        $result = mysqli_query($conn, $sql);
        
     }

     if($row['phone']!=$phone){
        $sql = "UPDATE guide SET phone='$phone'WHERE username='$usname'";
        $result = mysqli_query($conn, $sql);
        
     }
     $_SESSION['bio'] = $row['bio'];
        $_SESSION['rate'] = $row['rate'];
        $_SESSION['place'] = $row['place'];
        $_SESSION['phone'] = $row['phone'];

     $sql1 = "SELECT * from users WHERE username='$usname'";
     $result1 = mysqli_query($conn, $sql1);

     if (mysqli_num_rows($result1) === 1) {
        $row = mysqli_fetch_assoc($result1);
        if ($row['username'] === $usname) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];

        }}
        
        header("Location: index.php");


        exit();
    }}

}

?>

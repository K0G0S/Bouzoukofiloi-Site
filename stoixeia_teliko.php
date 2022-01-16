<?php

session_start();

$email = "";
$username = "";

$db = mysqli_connect('localhost' , 'root' , '' , 'userdata');

$email = mysqli_real_escape_string($db, $_POST['Email']);
$username = mysqli_real_escape_string($db, $_POST['Username']);
$role = mysqli_real_escape_string($db, $_POST['Role']);


if(empty($email)) {array_push($errors, "Βάλε κάποιο έγκυρο email");}
if(empty($username)) {array_push($errors, "Βάλε κάποιο username");}
if(empty($password)) {array_push($errors, "Βάλε κάποιον κωδικό");}
if(empty($role)) {array_push($errors, "Επίλεξε ιδιότητα");}

$user_check_query = "SELECT * FROM data WHERE Username = '$Username' LIMIT 1";
$user_check_query = "SELECT * FROM data WHERE Email = '$Email' LIMIT 1";
$results = mysqli_query($db, user_check_query);
$user = mysqli_fetch_assoc($result);

if($user)
{
	if($user['Username'] == $Username) {array_push($errors, "Το Username αυτό υπάρχει είδη");}
	if($user['Email'] == $Email) {array_push($errors, "Το Email αυτό υπάρχει είδη");}
}

if(count($errors) == 0 ){
	$password = md5($Password);
	$query = "INSERT INTO user ( Email, Username, Password ) VALUES ( $Email, $Username, $Password )";
	mysqli_query($db,$query);
	$_SESSION['Username'] = $Username;
	$_SESSION['success'] = "Συνδεθήκατε";
	header('location: anakinoseis.php');}
?>
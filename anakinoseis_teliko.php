<?php

session_start();

if(isset($_SESSION['Username'])){

$_SESSION['msg'] = "Συνδεθήτε για να δείτε την σελίδα";
header("location : login.html");
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['Username']);
	header("location : login.html");
}

<!DOCTYPE html>
<html>
<head>
	<title>Ανακοινώσεις</title>
</head>
<body>
	<div>
	<h1>
		<?php
		echo $_SESSION['succuess'];
		unset($_SESSION['succuess'];
		?>
	</div>
<?php endif ?>

<?php if(isset($_SESSION['Username'])) ; ?>
	<h3>Καλώς ήρθες <strong><?php echo $_SESSION['username']; ?></strong></h3>
	<button><a href="login.html='1'"></a></button>
</body>
</html> 
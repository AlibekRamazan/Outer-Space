<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My account</title>
	<link rel="stylesheet" type="text/css" href="#">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="theme">
      <h1>My account</h1>
	</div>
	<div class="php">
		
            <p>Hello, <?=$_COOKIE['user']?> !To log out, click <a href="exit.php">here</a>.</p>

		<p>Name: <?php echo($_SESSION['fullname']); ?></p>
		<p>Date of birth: <?php echo($_SESSION['dateofbirth']); ?></p>
		<p>Email: <?php echo($_SESSION['email']); ?></p>
        <p>Mobile number: <?php echo($_SESSION['mobile']); ?></p>
        <p>Gender: <?php echo($_SESSION['gender']); ?></p>
        <p>Your course: <?php echo($_SESSION['yourcourse']); ?></p>
        <p>UNI ID Number: <?php echo($_SESSION['uniid']); ?></p>
        <p>Degree level: <?php echo($_SESSION['degreelevel']); ?></p>
        <p>Speciality: <?php echo($_SESSION['speciality']); ?></p>
        <p>Number of group: <?php echo($_SESSION['numberofgroup']); ?></p>
        <p>Language of instruction: <?php echo($_SESSION['language']); ?></p>
       
	</div>

</body>
</html>
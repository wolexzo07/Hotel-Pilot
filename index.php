<?php
	session_start();
	include("xe-lib/xe-library74.php");
	$pageToken = sha1(uniqid());
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOTEL PILOT :: Hotel Management Software</title>
	<?php include("topLib.php");?>
  </head>
  <body>

	<?php 
		include("navbar.php");
		include("quickReserve.php");
		include("bg-img.php");
	?>
	
	<script src="js/index.js"></script>
  </body>
</html>
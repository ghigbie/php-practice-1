<?php
	
	// Constants
	define("TITLE", "If Statements");
	define("LESSON_NUMBER", 10);
	define("NAME", "Bubba");
	
	
	// Custom Variables
	$year = date("Y");

	$a = 50;
	$b = 200;
	$display = "";
	$display = 'moo';
	if ($a > $b){
		$display = "Yup, $a is greater than $b";
	}else{
		$display = "The world is a sham!";
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo LESSON_NUMBER; ?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php echo $display ?>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo year; ?> - <?php echo NAME; ?>/small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

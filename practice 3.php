<?php
	
	// Constants
	define("TITLE", "Associative Arrays");
	define("LESSON_NUMBER", 7);
	
	// Custom Variables
	$creep_factor = 14;
	$growth_days = 32;
	$name = "Bubba";
	
	// Moustache Associative Array
	$moustaches = array(
					name => 'Handlebar',
					creep_factor => 14,
					growth_days => 32,
	);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo LESSON_NUMBER ?>: <small><<?php echo TITLE ?>/small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo $moustaches[name] ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $moustaches[creep_factor] ?></strong> and takes <strong><?php echo $moustaches[growth_days] ?> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y") ?> - <?php echo $name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

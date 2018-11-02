<?php
	
	// Constants
	define('LESSON', 17);
	define('TITLE', 'String Operators');
	define('NAME', 'Bubba');
	define('YEAR', date('Y'));
	
	// Custom Variables
	$a = "Hola";


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo LESSON; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					$b = $a . ", mis amigos.";
					echo "<p>$b</p>";
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$a .= ", mis amigos.";
					echo "<p>$a</p>";
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo YEAR; ?> - <?php echo NAME; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

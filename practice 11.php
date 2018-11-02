<?php
	
	// Constants
	define('LESSON', 16);
	define('TITLE', 'Arithetic Operators');
	define('NAME', 'Bubba');
	define('YEAR', date('Y'));
	
	// Custom Variables


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
				
				<h3>Addition <code>+</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = $a + $b;
					echo "<p>$a + $b = $c</p>";
				?>
				
				<h3>Subtraction <code>-</code></h3>
				<?php
					$c = $a - $b;
					echo "<p>$a - $b = $c</p>";
				?>
				
				<h3>Multiplication <code>*</code></h3>
				<?php
					$c = $a * $b;
					echo "<p>$a x $b = $c</p>";
				?>
				
				<h3>Division <code>/</code></h3>
				<?php
					$c = $a / $b;
					echo "<p>$a / $b = $c</p>";
				?>
				
				<h3>Modulus <code>%</code></h3>
				<?php
					$c = $a % $b;
					echo "<p>$a % $b = $c</p>";
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

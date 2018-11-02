<?php
	
	// Constants
	define('TITLE', 'Assignment Operators');
	define('LESSON', 18);
	define('NAME', 'Bubba');
	define('YEAR', date("Y"));
	
	// Custom Variables


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TTILE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo LESSON; ?>: <small> <?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 40;
					$b = 40;
					$a += $b;
					echo $a;
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = 80;
					$b = 100;
					$a -= $b;
					echo $a;
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 3;
					$b = 500;
					$a *= $b;
					echo $a
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$a = 18;
					$b = 30;
					$a /= $b;
					echo $a
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					
					$a = 60;
					$b = 90;
					$a %= $b;
					echo $a;

				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = 'Hola';
					$b = ' Mis amigos';
					$a .= $b;
					echo $a;
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo YEAR ?> - <?php echo NAME ?>/small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

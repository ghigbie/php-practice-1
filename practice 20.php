<?php
	
	// Constants
	define("TITLE", "Simple Arguments");
	
	// Custom Variables
	$myName	= "Brad Hussey";
	$lessonNum	= 25;

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
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>One Argument</h3>
				<?php
					
					function surfing($location){
						echo "We are surfing in $location <br>";
					}

					surfing("Hawaii");
					surfing("California");
					surfing("Japan");
					
				?>
				
				<h3>Two Arguments</h3>
				<?php
				    function product($a, $b){
						$product = $a * $b;
						echo "The product of two numbers, $a and $b is $product.";
					}
					// your code here
					product(3, 5);
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

<?php
	
	// Constants
	define("TITLE", "Foreach Loop");
	
	// Custom Variables
	$name = "Bubba";
	$lessonNum	= 21;
	$moustaches = array("Handlebar", "Salvidor Dali", "Fu Manchu");
	$cats = array ("Persian", "Noweigian", "Russian Blue");
	$dogs = array ("Labrador", "Golden", "French Bulldog", "English Bulldog");
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
				
				<?php
				 
				    foreach ($moustaches as $moustache){
						echo "I love the $moustache moustache. <br>";
					}
					echo "<br>";
					echo "<br>";

					foreach ($cats as $cat){
						echo "I love the $cat cat. <br>";
					}
					echo "<br>";
					echo "<br>";

					foreach ($dogs as $dog){
						echo "I love the $dog dog. <br>";
					}
					echo "<br>";
					echo "<br>";
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

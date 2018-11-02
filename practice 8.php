<?php
	
	// Constants
	define("TITLE", "If, Else, Else if");
	define("NAME", "bubba");
	// Custom Variables
	$year = date("Y");
	$creature = 'Human';
	$rhino = 'rhino';
	$language = 'French';
	$target_language = 'German';
	$age = 30;
	$target_age = 20;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP - <?php echo TTILE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<?php 
				if($creature == 'Human'){
					echo "Welcome, $creature! Please leave the black $rhino alone.";
				}
				?>

				<h3>Another Example</h3>
				<p>
					<?php
						if($age < $target_age){
							echo "You are younger than $target_age years old.";
						}else{
							echo "You must be more than $target_age years old.";
						}
					?>
				</p>
				<h3>A Combination</h3>
				<p><?php 
					if($language == $target_language && $create == 'Human'){
						echo "Welcome, $creature! Please leave the black $rhino alone.";
					}else if($language == $target_language){
						echo "You must speak $target_language.";
					}else{
						echo "Well then, you do not speak $target_language, nor are you a $rhino.";
					}
					?>
				</p>

			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $year; ?> - <?php echo NAME ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

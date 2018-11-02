<?php
	
	// Constants
	define("TITLE", "Comparison Operators");
	define("LESSON", 14);
	define("NAME", "Bubba");
	// Custom Variables
	$age = 25.32;
	$favortie_number = "1";
	$here = "Mexico";

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
			
			<h1>Tutorial <?php echo LESSON ?> <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3>Equal <code>==</code></h3>
				<?php
					if($age == 25.32){
						echo "<p>Your age is equal to $age</p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if($favortie_number === "1"){
						echo "<p>Your favorite number is a string called \"1\"</p>";
					}elseif($favortie_number === 1){
						echo "<p>Your favorite number is an integer</p>";
					}else{
						echo "<p>You must have a different favorite number.</p>";
					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if($here != "Canada"){
						echo "<p>Excuse me, señor. You must not be from around here.</p>";
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if($age !== "25.32"){
						echo "<p>You are not exactly the string \"$age\".</p>";
					}else{
						echo "<p>You are exactly the string \"$age\".</p>";
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if(LESSON < 15){
						echo "<p>You have\'t quite made it to lesson 15, yet.</p>";
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if(LESSON > 10){
						echo "<p>You\'ve made it past lesson 10!</p>";
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if(LESSON <= 14){
						echo "<p>14 is less than or equal to 14.</p>";
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if(LESSON >= 14){
						echo "<p>14 is greater than or equal to 14.</p>";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y") ?> - <?php echo NAME; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

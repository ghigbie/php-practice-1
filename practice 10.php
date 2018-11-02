<?php
	
	// Constants
	define('LESSON', 15);
	define('TITLE', 'Logical Operators');
	define('NAME', 'Bubba');

	// Custom Variables
	$user = 'user';
	$password = 'password';
	$is_child = True;
	$is_senior = True;
	$has_cat = True;


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
				
				<h3>And <code>and</code></h3>
				<?php
					if($user === 'user' and $password === 'password'){
						echo "<p>Login info is correct.</p>";
					}else{
						echo "<p>Login info is not correct.</p>";
					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if($is_child or $is_senior){
						echo "<p>You get a discount.</p>";
					}else{
						echo "<p>You do not get a discount.</p>";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					if(!$has_cat){
						echo "<p>You have a dog.</p>";
					}else{
						echo "<p>You have a cat.</p>";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					if($user === 'user' && $password === 'password'){
						echo "<p>Login info is correct.</p>";
					}else{
						echo "<p>Login info is not correct.</p>";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					if($is_child || $is_senior){
						echo "<p>You get a discount.</p>";
					}else{
						echo "<p>You do not get a discount.</p>";
					}
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo NAME; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

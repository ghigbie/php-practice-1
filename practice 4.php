<?php

	// Constants
	define("TTILE", "Arrays");
	define("NAME", "Bubba");

	// Variables
	$year = date("Y");

	// Arrays
	$people = array(
		array(
			name => "Carter",
			country => "Canada",
			type => "adult",
			moustache => "handlebar",
			color => "black"
		),
		array (
			name => "Rodrigo",
			country => "Uruguay",
			type => "teenager",
			moustache => "Fu Manchu",
			color => "brown"
		),
		array (
			name => "Giovanni",
			country => "Italy",
			type => "child",
			moutstache => "Salvidaor Dali",
			color => "blonde"
		)
		);
	$countries = array('Canada', 'Uruguay', 'Italy');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $people[0][name]; ?> from <?php echo $countries[0]; ?></h3>
				<p><?php echo $people[0][name] ?> is quite the <?php echo $people[0][type] ?>! He sports a solid <?php echo $people[0][moustache] ?> Moustache that is <?php echo $people[0][color] ?> in colour.</p>
				
				<h3><?php echo $people[1][name]; ?> from <?php echo $countries[1]; ?></h3>
				<p><?php echo $people[1][name] ?> is quite the <?php echo $people[1][type] ?>! He sports a solid <?php echo $people[1][moustache] ?> Moustache that is <?php echo $people[1][color] ?> in colour.</p>
				
				<h3><?php echo $people[2][name]; ?> from <?php echo $countries[2]; ?></h3>
				<p><?php echo $people[2][name] ?> is quite the <?php echo $people[2][type] ?>! He sports a solid <?php echo $people[2][moustache] ?> Moustache that is <?php echo $people[2][color] ?> in colour.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo $year ?> - <?php echo NAME ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>

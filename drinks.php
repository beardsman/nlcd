<?php include "scripts/utility.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php pageHeader("DRINKS");?> <!-- THIS LOADS THE HEADER TAGS, JAVASCRIPT, CSS, ETC -->
	
	
	</head>
	
	<body class="bdDrinks">
		<div class="pageWrapper">
			<?php pageNav("DRINKS");?> <!-- THIS LOADS THE LEFT PANEL, LOGO, NAV, ETC -->
			
			<div class="contentWrapper" id="mainContent">
				<h1>DRINKS</h1>
					
				<img src="images/drinksPhoto.png"/>
				<div class="drinkList">
					<ul>
						<li><a href="brewed.php">BREWED</a></li>
						<li><a href="espressoshots.php">SPECIALTY ESPRESSO SHOTS</a></li>
						<li><a href="espresso.php">ESPRESSO BEVERAGES</a></li>
						<li><a href="teas.php">TEAS</a></li>
						<li><a href="uncoffee.php">I DON'T LIKE COFFEE BUT I STILL WANT TO HANG OUT</a></li>
						<!--<li><a href="customize">ALL KINDS OF OPTIONS</a></li>-->
					<ul>
				</div>
			
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>
	</body>
</html>
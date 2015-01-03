<?php include "scripts/utility.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php pageHeader("HOME");?> <!-- THIS LOADS THE HEADER TAGS, JAVASCRIPT, CSS, ETC -->
	
	</head>
	
	<body class="bdDrinks">
		<div class="pageWrapper">
			<?php pageNav("HOME");?> <!-- THIS LOADS THE LEFT PANEL, LOGO, NAV, ETC -->
			<div class="contentWrapper" id="mainContent">
				<h1>DONUTS</h1>
				
				<ul class="rslides">
					<li><img src="images/donuts/chocolate_glazed.jpeg" /></li>
					<li><img src="images/donuts/fritter.jpeg" /></li>
					<li><img src="images/donuts/funkfetti.jpeg" /></li>
					<li><img src="images/donuts/cookies.jpeg" /></li>
					<li><img src="images/donuts/glazed.jpeg" /></li>
				</ul>

				<br /><br />
				<h3>Plain Glazed, Chocolate Iced, Cinnamon Sugar, Funnel Cake, and Cinnamonkeys are available every day.</h3>
				<h3>Other donuts have limited availability.</h3>
				
			</div>
		
			<div style="clear:both;"></div>
			
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>		
	</body>	
</html>
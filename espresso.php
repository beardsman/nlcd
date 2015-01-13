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
				<h1>ESPRESSO BEVERAGES</h1>
				<br />
				
                                        <p class="brews"><strong>AMERICANO:</strong>  Espresso shots pulled into hot water.</p>
                                        <p class="brews"><strong>LATTE:</strong>  Steamed milk over shots of espresso.</p>
                                        <p class="brews"><strong>MOCHA:</strong>  Steamed milk over shots of espresso with chocolate. Topped with whipped cream.</p>
					<p class="brews"><strong>CAPPUCINO:</strong>  Steamed milk over shots with extra foam.</p>
					<p class="brews"><strong>CARAMEL MACCHIATO:</strong>  Steamed milk over vanilla syrup, topped with caramel and finished with shots of espresso.</p>
				
				<div style="clear:both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '75px' });
		</script>		
	</body>	
</html>
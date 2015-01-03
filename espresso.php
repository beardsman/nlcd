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
				
					<p class="brews"><strong>DOUBLE SHOT:</strong>  Freshly ground, high temperature brewed drip coffee available in two different roast profiles daily.</p>
					<p class="brews"><strong>ESPRESSO MACHIATO:</strong>  Choose any of our whole bean coffee to be freshly ground and slow-poured into your cup.</p>
					<p class="brews"><strong>ESPRESSO CON PANNA:</strong>  Choose any of our whole bean coffee to be brewed in a press for maximum extraction.  Provides multiple cups.</p>
					<p class="brews"><strong>DOLCE VELOCE:</strong>  Freshly ground, high temperature drip coffee with freshly steamed milk.</p>
					<p class="brews"><strong>AMERICANO:</strong>  Brewed coffee over ice with cream and sweetened with a flavor of your choice.</p>
					<p class="brews"><strong>CORTADO:</strong>  Freshly ground, high temperature brewed coffee with a shot of espresso.</p>
					<p class="brews"><strong>CRISA:</strong>  Choose any whole bean coffee and have it ice brewed using the Japanese method.</p>
					<p class="brews"><strong>CUBANO:</strong>  Choose any whole bean coffee and have it ice brewed using the Japanese method.</p>
				
				<div style="clear:both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '75px' });
		</script>		
	</body>	
</html>
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
				<h1>SPECIALIZED ESPRESSO SHOTS</h1>
				<br />
				
					<p class="brews"><strong>DOUBLE SHOT:</strong>  Two espresso shots pulled into a demitasse.</p>
					<p class="brews"><strong>ESPRESSO MACHIATO:</strong>  Two espresso shots pulled over steamed milk foam.</p>
					<p class="brews"><strong>ESPRESSO CON PANNA:</strong>  Two espresso shots layered with homemade whipped cream.</p>
					<p class="brews"><strong>DOLCE VELOCE:</strong>  Layers of French vanilla syrup, cream, and espresso.</p>
					<p class="brews"><strong>CORTADO:</strong>  A double shot blended with freshly steamed milk in a four ounce shot glass.</p>
                                        <p class="brews"><strong>CUBANO:</strong>  Espresson infused with raw sugar.</p>
					<p class="brews"><strong>CRISA:</strong>  A double cubano shot blended with steamed milk.</p>

				
				<div style="clear:both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '40px', maxFontSize: '60px' });
		</script>		
	</body>	
</html>
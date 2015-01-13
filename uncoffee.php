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
				<h1>UN-COFFEE DRINKS</h1>
				<br />
				
					<p class="brews"><strong>THE UNCLE DON:</strong>  Raspberry and white chocolate in freshly steamed milk topped with whipped cream.</p>
					<p class="brews"><strong>HOT CHOCOLATE:</strong>  The classic. Chocolate and steamed milk topped with whipped cream.</p>
					<p class="brews"><strong>CANDY APPLE SPICE:</strong>  Hot, spiced apple cider topped with whipped cream and caramel.</p>
					<p class="brews"><strong>ITALIAN SODA:</strong>  Soda water with your favorite combination of syrups.</p>
					<p class="brews"><strong>TEA LATTES:</strong>  Combine almost any whole leaf tea with freshly steamed milk.</p>
				
				<div style="clear:both;"></div>

			
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>		
	</body>	
</html>
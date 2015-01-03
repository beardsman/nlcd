<?php include "scripts/utility.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php pageHeader("COFFEE");?> <!-- THIS LOADS THE HEADER TAGS, JAVASCRIPT, CSS, ETC -->
	
	</head>
	
	<body class="bdDrinks">
		<div class="pageWrapper">
			<?php pageNav("DRINKS");?> <!-- THIS LOADS THE LEFT PANEL, LOGO, NAV, ETC -->
			
			<div class="contentWrapper" id="mainContent">
					<h1>
					WHOLE BEAN COFFEE
					</h1>
					
					<h3>Roasters we prefer:</h3>
					
					<a href="http://natescoffee.com/"><img src="images/natescoffee.jpeg" style="width:40%;"/></a>

					
					
					
					
				</div>
			
				<div style="clear:both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '75px' });
		</script>

	</body>
</html>
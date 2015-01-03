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
				<h1>BULK ORDERS</h1>				
					
					<div class="column six">
						<h1>Donuts</h1>
						<h2>Plain Glazed Pricing</h2><br />
						<table style="width:80%;margin:0 auto;font-size:20px;">
							<tr><td>1-5 Dozen</td><td><strong>$8.99</strong> / dozen</td></tr>
							<tr><td>6-10 Dozen</td><td><strong>$8.49</strong> / dozen</td></tr>
							<tr><td>11+ Dozen</td><td><strong>$7.99</strong> / dozen</td></tr>
							<tr><td colspan="2">MIXED DONUTS WILL RECEIVE <strong>10%</strong> OFF A LA CARTE PRICING</td></tr>
						</table>
					</div>
					<div class="column six">
						<h1>Coffee</h1>
						<h2>Coffee Pricing</h2><br />
						<table style="width:80%;margin:0 auto;font-size:20px;">
							<tr><td>JOE TO GO</td><td><strong>$15.00</strong></td><td>serves 10-12</td></tr>
							<tr><td>SMALL CAMBRO</td><td><strong>$45.00</strong></td><td>serves 25-30</td></tr>
							<tr><td>LARGE CAMBRO</td><td><strong>$85.00</strong></td><td>serves 90-100</td></tr>
							<tr><td colspan="3">Comes with Cups, Lids, Creams, and Sugars</td></tr>
						</table>
					</div>
					
					<div style="clear:both;"></div>

					<div class="column six">
						<img src="images/bunchofdonuts.jpeg" style="width:80%;padding:20px 0;" />
					</div>
					<div class="column six">
						<img src="images/traveler.jpeg" style="width:80%;padding:20px 0;" />
					</div>
					<div style="clear:both;"></div>
					
                                        <h3><a href="locations.php" style="color: #FFF">CONTACT US TO ORDER</a></h3>
			
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>		
	</body>	

</html>
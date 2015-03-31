<?php include "scripts/utility.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php pageHeader("HOURS");?> <!-- THIS LOADS THE HEADER TAGS, JAVASCRIPT, CSS, ETC -->
	
	</head>
	
	<body class="bdDrinks">
		<div class="pageWrapper">
			<?php pageNav("HOURS");?> <!-- THIS LOADS THE LEFT PANEL, LOGO, NAV, ETC -->
			<div class="contentWrapper" id="mainContent">
				<h1>OUR HOURS</h1>
				<br />
				<img src="images/opensign.png" />
                                <!-- <h5><b>Holiday Hours</b></h5>
                                <h3>12/24: 6A-12P</h3>
                                <h3>12/25 - 1/1: CLOSED</h3>
                                
                                <h5><b>Regular Hours</b></h5> -->
                                <h5>M-F: 6A-5P</h5>
                                <h5>SA: 7A-4P (Limestone)</h5>
                                <h5>SA: 7A-6P (Clays Mill)</h5>
                                <h5>SU: 8A-1P</h5>

			
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '75px' });
		</script>		
	</body>	
</html>
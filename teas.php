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
				<h1>TEAS</h1>
				<br />
                                <a href="http://www.townshendstea.com/"><img src="images/teas/townhends_logo.jpg" style="width:30%" /></a>
				
				<br /><br /><br />
				<table style="width:90%;margin:0 auto;text-align:center;font-family:'Cabin Sketch';font-size:30px;">
					<tr><td><img src="images/teas/teas_3.jpeg" style="width:150px;" />Assam {Irish Breakfast}<br /><br /></td>
					<td><img src="images/teas/teas_13.jpeg" style="width:150px;" />Creme de la Earl Grey<br /><br /></td></tr>
                                        
                                        <tr><td><img src="images/teas/teas_17.jpeg" style="width:150px;" />Mount Hood Vanilla<br /><br /></td>
					<td><img src="images/teas/teas_20.jpeg" style="width:150px;" />Lady Londonderry<br /><br /></td></tr>
                                        
                                        <tr><td><img src="images/teas/teas_24.jpeg" style="width:150px;" />Strawberry Sencha<br /><br /></td>
					<td><img src="images/teas/teas_32.jpeg" style="width:150px;" />Gunpowder<br /><br /></td></tr>
                                        
                                        <tr><td><img src="images/teas/teas_49.jpeg" style="width:150px;" />Masala Chai<br /><br /></td>
					<td><img src="images/teas/teas_67.jpeg" style="width:150px;" />Cinnamon Rooibos<br /><br /></td></tr>
                                        
                                        <tr><td><img src="images/teas/teas_71.jpeg" style="width:150px;" />After Dark<br /><br /></td>
					<td><img src="images/teas/teas_77.jpeg" style="width:150px;" />Apple Spice<br /><br /></td></tr>
					
					<tr><td><img src="images/teas/teas_79.jpeg" style="width:150px;"/>Peppermint<br /><br /></td>
					</tr>
				</table>
				<div style="clear:both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>		
	</body>	
</html>
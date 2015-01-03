<?php

	function pageHeader($currentPage)
	{
		echo '		<link rel="stylesheet" type="text/css" href="css/global.css" />'."\n";
		echo '		<link href="http://fonts.googleapis.com/css?family=Cabin+Sketch|Roboto:700,400,300,100" rel="stylesheet" type="text/css">'."\n";
		echo '		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />'."\n";
		echo '		<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>'."\n";
		echo '		<script src="scripts/jquery.fittext.js" type="text/javascript"></script>'."\n";
		echo '		<script src="scripts/coffee.js" type="text/javascript"></script>'."\n";
		echo'		<script type="text/javascript" src="scripts/responsiveslides.min.js"></script>'."\n";
		echo '		<title>North Lime Coffee and Donuts</title>'."\n";
	}
	
	function pageNav($currentPage)
	{
		#$navStyle = ' whiteNav';
		#$navBack = '';
                $navStyle = ' blackNav';
                $navBack = ' style="background-color:#AA9;"';
		
		echo '		<div class="navWrapper" style="position:relative;">'."\n";
		
		
		
		echo '			<div id="navBack"'.$navBack.'></div>'."\n";
		echo '			<a href="index.php"><img src="images/northlime_logo_sm.png" class="logo" /></a>'."\n";
		
		echo '<div class="mobileNav">'."\n";
                echo '<nav>'."\n";
                echo '<select>'."\n";
                echo '<option value="" selected="selected">Site Select</option>'."\n"; 
                echo '<option value="index.php">Home</option>'."\n";
                echo '<option value="locations.php">Locations</option>'."\n";
                echo '<option value="hours.php">Hours</option>'."\n";
                echo '<option value="donuts.php">Donuts</option>'."\n";
                echo '<option value="drinks.php">Drinks</option>'."\n";
                echo '</select>'."\n";
                echo '</nav>'."\n";
                echo '</div>'."\n";
		
		echo '			<div class="navigation'.$navStyle.'">'."\n";
		echo '				<ul>'."\n";
                echo '					<li><a href="locations.php">LOCATIONS</a></li>'."\n";
                echo '					<li><a href="hours.php">HOURS</a></li>'."\n";
		echo '					<li><a href="donuts.php">DONUTS</a></li>'."\n";
		echo '					<li><a href="drinks.php">DRINKS</a></li>'."\n";
		echo '					<li><a href="coffee.php">COFFEE</a></li>'."\n";
		#echo '					<li><a href="media.php">MEDIA</a></li>'."\n";
		echo '					<li><a href="bulk.php">BULK ORDERS</a></li>'."\n";
		echo '					<li><a href="about.php">ABOUT US</a></li>'."\n";
		echo '				</ul>'."\n";
		echo '			</div>'."\n";
		echo '		</div>'."\n";
	}
	



?>
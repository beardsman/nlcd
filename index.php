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
					<!-- <img src="images/muganddonuts.jpeg" /> -->
                                        <!-- <img src="images/cat-christmas-donut.jpg" style="box-shadow: 10px 10px 5px #888888;" /> -->
                                        <br />
					<div class="columns fiveCol">
						<h1>-MONTHLY SPECIAL-</h1>
						<!-- <span class="specials green">PEPPERMINT WHITE CHOCOLATE</span> -->
					</div>
                                        <img src="images/donuts/hot_chocolate.jpg" width="50%" style="width:100%;max-height: 550px;box-shadow: 10px 10px 5px #888888;"/>
                                        <br /><br /><br /><br />
					<div class="columns fiveCol">
						<h1>-TODAY'S SPECIAL-</h1>
                                                <h2>See our Twitter feeds for today's specials!</h2>
                                                <a href="http://www.twitter.com/northlimelex"><img src="images/twitter_limestone.jpg" style="width:100%;max-height: 550px;border: 5px solid #000000;box-shadow: 0px 0px 20px 0px #888888;"/></a>
                                                <br /><br />
                                                <a href="http://www.twitter.com/NLCDClaysMill"><img src="images/twitter_claysmill.jpg" style="width:100%;max-height: 550px;border: 5px solid #000000;box-shadow: 0px 0px 20px 0px #888888;"/></a>
                                                <br /><br />
					</div>
			
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>		
	</body>
</html>
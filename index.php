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
						<h1>-TODAY'S SPECIAL-</h1>
                                                <h2>See our Twitter feeds for today's specials!</h2>
                                                <a class="clickpic" href="http://www.twitter.com/northlimelex"><img class="clickpic" src="images/twitter_limestone.jpg" /></a>
                                                <br /><br />
                                                <a class="clickpic" href="http://www.twitter.com/NLCDClaysMill"><img class="clickpic" src="images/twitter_claysmill.jpg" /></a>
                                                <br /><br />
					</div>
			
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		</script>		
	</body>
</html>
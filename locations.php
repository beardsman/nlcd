<?php include "scripts/utility.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php pageHeader("LOCATIONS");?> <!-- THIS LOADS THE HEADER TAGS, JAVASCRIPT, CSS, ETC -->
	
	</head>
	<body class="bdDrinks">
		<div class="pageWrapper">
			<?php pageNav("LOCATIONS");?> <!-- THIS LOADS THE LEFT PANEL, LOGO, NAV, ETC -->
			
			<div class="contentWrapper" id="mainContent">
                            <h1>LOCATIONS</h1>
                                <div class="column six">
					<h1>North Limestone</h1>
                                        <div style="margin:0 auto;width:80%">
                                            <h2 class="emailText">575 N. Limestone St.</h2>
                                            <h2 class="emailText">Lexington, KY 40508</h2><br />
                                            <h2 class="emailText">859.414.6694</h2><br />
                                            
                                            <div style="text-align:center;width:100%;">
                                                <h2 class="emailText">limestone@northlimelex.com</h2><br />
						<a href="http://www.facebook.com/northlimelex"><img src="images/facebook-icon.png" style="width:100%;max-width:76px;display:inline;"/></a>
                        			<a href="http://www.twitter.com/northlimelex"><img src="images/twitter-icon.png" style="width:100%;max-width:76px;display:inline;"/></a>
                                            </div>
                                            
                                            <img src="images/outsideofstore.png" style="width:80%;min-height: 184px;margin:20px 40px;box-shadow: 10px 10px 5px #888888;" />
                                        </div>
				</div>
                            
                                <div class="column six">
					<h1>Clays Mill</h1>
                                        <div style="margin:0 auto;width:80%">
                                            <h2 class="emailText">3101 Clays Mill Rd.</h2>
                                            <h2 class="emailText">Lexington, KY 40503</h2><br />
                                            <h2 class="emailText">859.303.6114</h2><br />
                                            <div style="text-align:center;">
                                                <h2 class="emailText">claysmill@northlimelex.com</h2><br />
						<a href="http://www.facebook.com/NLCDClaysMill"><img src="images/facebook-icon.png" style="width:100%;max-width:76px;display:inline;"/></a>
                        			<a href="http://www.twitter.com/NLCDClaysMill"><img src="images/twitter-icon.png" style="width:100%;max-width:76px;display:inline;"/></a>
                                            </div>
                                            
                                            <img src="images/bar.jpg" style="width:80%;max-height: 184px;box-shadow: 10px 10px 5px #888888;margin:20px 40px;" />
                                        </div>
				</div>
			
                                <div style="clear:both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			$("h1").fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
                        $(".emailText").fitText(1, { minFontSize: '14px', maxFontSize: '30px' });
		</script>		
	</body>
</html>
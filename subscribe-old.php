<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Subscribe to PoopBuddy</title>
	<?php include "includes/scripts.php"; ?>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="mainContent">
		<div class="row">
			<div class="large-12 columns">
				<h2>Subscribe Today.</h2>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns text-center">
				<img src="<?php echo WEBROOT; ?>img/MonthlyPoopBuddy3_1024x1024.png" alt="Monthly" />
				<h3 class="subheader">$10 / Month</h3>
				<form action="https://poopbuddy.foxycart.com/cart" method="post" accept-charset="utf-8">
					<input type="hidden" name="name" value="PoopBuddy Subscription (Billed Monthly)" />
					<input type="hidden" name="category" value="SUBSCRIPTION" />
					<input type="hidden" name="price" value ="10" />
					<input type="hidden" name="sub_frequency" value="1m" />
					<input type="hidden" name="sub_startdate" value="10" />
					<input class="toggle_gift" type="checkbox" /> This is a gift <br />
					<div class="whofor hide">
						<input type="text" name="shipto" placeholder="Who is this gift for?" />
					</div>		
					<input type="submit" class="medium button" value="Get It" />
				</form>

			</div>
			<div class="large-4 columns text-center">
				<img src="<?php echo WEBROOT; ?>img/3MonthsPoopBuddy2_1024x1024.png" alt="Monthly" />
				<h3 class="subheader">$9 / Month</h3>
				<form action="https://poopbuddy.foxycart.com/cart" method="post" accept-charset="utf-8">
					<input type="hidden" name="name" value="PoopBuddy Subscription (Billed Every 3 Months)" />
					<input type="hidden" name="category" value="SUBSCRIPTION" />
					<input type="hidden" name="price" value ="27" />
					<input type="hidden" name="sub_frequency" value="3m" />
					<input type="hidden" name="sub_startdate" value="10" />
					<input class="toggle_gift" type="checkbox" /> This is a gift <br />
					<div class="whofor hide">
						<input type="text" name="shipto" placeholder="Who is this gift for?" />
					</div>					
					<input type="submit" class="medium button" value="Get It" />
				</form>
			</div>
			<div class="large-4 columns text-center">
				<img src="<?php echo WEBROOT; ?>img/6MonthsPoopBuddy2_1024x1024.png" alt="Monthly" />
				<h3 class="subheader">$8 / Month </h3>
				<form action="https://poopbuddy.foxycart.com/cart" method="post" accept-charset="utf-8">
					<input type="hidden" name="name" value="PoopBuddy Subscription (Billed Every 6 Months)" />
					<input type="hidden" name="category" value="SUBSCRIPTION" />
					<input type="hidden" name="price" value ="48" />
					<input type="hidden" name="sub_frequency" value="6m" />
					<input type="hidden" name="sub_startdate" value="10" />
					<input class="toggle_gift" type="checkbox" /> This is a gift <br />
					<div class="whofor hide">
						<input type="text" name="shipto" placeholder="Who is this gift for?" />
					</div>		
					<input type="submit" class="medium button" value="Get It" />
				</form>
			</div>			
		</div>

	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>

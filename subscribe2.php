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
			<div class="large-12 columns text-center">
				<h2>Choose your PoopBuddy.</h2>
				<img src="<?php echo WEBROOT; ?>img/poopbuddy-package.jpg" "PoopBuddy" />
			</div>
		</div>
		<div class="row subfigurator">
			<div class="large-1 columns">
				1
			</div>
			<div class="large-11 columns ">
				<ul class="button-group even-3">
					<li><a href="#" class="secondary button">Small Dog <br />(Under 20 lbs)</a></li>
					<li><a href="#" class="secondary button">Medium Dog <br />(20 to 40 lbs)</a></li>
					<li><a href="#" class="secondary button">Large Dog <br />(Over 40 lbs)</a></li>
  				</ul>	
  			</div>
  		</div>
 		<div class="row subfigurator">
			<div class="large-1 columns">
				2
			</div>
			<div class="large-11 columns"> 		
  				<ul class="button-group even-2">
					<li><a href="#" class="secondary button">Subscription.</a></li>
					<li><a href="#" class="secondary button">This is a Gift.</a></li>
  				</ul>	
  			</div>
  		</div>
  		<div class="row subfigurator">
  			<div class="large-1 columns">
  				3
  			</div>
  			<div class="large-11 columns">
  				<input type="text" placeholder="What is the lucky dog&rsquo;s name?" />
  			</div>
  		</div>	
		<div class="row subfigurator">
			<div class="large-1 columns">
				4
			</div>
			<div class="large-11 columns">  		
   				<ul class="button-group even-3">
					<li><a href="#" class="secondary button">1 Month</a></li>
					<li><a href="#" class="secondary button">3 Months</a></li>
					<li><a href="#" class="secondary button">6 Months</a></li>
  				</ul>		 
			</div>		
		</div>
		<div class="row">
			<div class="large-12 columns text-center">
				<form action="https://poopbuddy.foxycart.com/cart" method="post">
					<input type="hidden" name="name" value="One Month PoopBuddy" />
					<input type="hidden" name="code" value="MONTH-POOPBUDDY" />
					<input type="hidden" name="image" value="http://poopbuddy.herokuapp.com/img/poopbuddy-package.jpg" />

					<input type="hidden" name="price" value="10" />
					<input type="hidden" name="sub_frequency" />
					<input type="hidden" name="sub_startdate" />
					<input type="hidden" name="sub_enddate" />
					<input type="hidden" name="shipto" />
					<input class="primary button" type="submit" value="Add to Cart" />
				</form>				
			</div>
		</div>
		
	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>

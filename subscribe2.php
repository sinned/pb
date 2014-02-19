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
				<h3>1</h3>
			</div>
			<div class="large-11 columns ">
				<ul id="subscription-size" class="button-group even-3">
					<li><a href="#" class="secondary button" data-size="Small Dog"><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Under 20 pounds.">Small Dog</span></a></li>
					<li><a href="#" class="secondary button" data-size="Medium Dog"><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="20 to 40 pounds">Medium Dog</span></a></li>
					<li><a href="#" class="secondary button" data-size="Large Dog"><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Over 40 pounds">Large Dog</a></li>
  				</ul>	
  			</div>
  		</div>
  		<div class="row subfigurator">
  			<div class="large-1 columns">
  				<h3>2</h3>
  			</div>
  			<div class="large-11 columns">
  				<input id="whofor" type="text" placeholder="What is the lucky dog&rsquo;s name?" />
  			</div>
  		</div>	
		<div class="row subfigurator">
			<div class="large-1 columns">
				<h3>3</h3>
			</div>
			<div class="large-11 columns">  		
   				<ul id="subscription-choice" class="button-group even-3">
					<li><a href="#" class="secondary button" data-name="Monthly PoopBuddy Subscription, Billed Monthly" data-pricetext="Price: $10 / month" data-freq="1m" data-price="10" data-code="POOPBUDDY-SUBSCRIPTION-1MO">1 Month</a></li>
					<li><a href="#" class="secondary button" data-name="Monthly PoopBuddy Subscription, Billed Every 3 Months" data-pricetext="Price: $9 / month <br /><small>(10% off! $27 for 3 months)</small>" data-freq="3m" data-price="27" data-code="POOPBUDDY-SUBSCRIPTION-3MO"><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="10% off per month!">3 Months</span></a></li>
					<li><a href="#" class="secondary button" data-name="Monthly PoopBuddy Subscription, Billed Every 6 Months" data-pricetext="Price: $8 / month <br /><small>(20% off! $48 for 6 months)</small>" data-freq="6m" data-price="48" data-code="POOPBUDDY-SUBSCRIPTION-6MO"><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="20% off per month!">6 Months</span></a></li>
  				</ul>		 
			</div>		
		</div>
		<div class="row subfigurator">
			<div class="large-1 columns">
			</div>
			<div class="large-11 columns">
				<h3 id="pricetext">Price: $10 / month</h3>
			</div>
		</div>
		<div class="row">
			<div class="large-1 columns"> 
			</div>
			<div class="large-11 columns text-center">
				<form id="subform" action="https://poopbuddy.foxycart.com/cart" method="post">
					<input type="hidden" name="name" value="Monthly PoopBuddy Subscription, Billed Monthly" />
					<input type="hidden" name="code" value="POOPBUDDY-SUBSCRIPTION-1MO" />
					<input type="hidden" name="size" value="Small Dog" />
					<input type="hidden" name="image" value="http://poopbuddy.herokuapp.com/img/poopbuddy-package.jpg" />

					<input type="hidden" name="price" value="10" />
					<input type="hidden" name="sub_frequency" value="1m" />
					<input type="hidden" name="sub_startdate" value="11" />
					<input type="hidden" name="sub_enddate" />
					<input type="hidden" name="shipto" />
					<input style="width:100%" class="round primary button" type="submit" value="Add to Cart" />
				</form>				
			</div>
		</div>
		
	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>

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
				<img style="width:300px;margin-bottom:10px;" src="<?php echo S3IMGROOT; ?>img/PoopBuddy-green-theme.png" "PoopBuddy" />
				<img style="width:300px;margin-bottom:10px;" src="<?php echo S3IMGROOT; ?>img/PoopBuddy-July-theme.png" "PoopBuddy" />
				<img style="width:300px;margin-bottom:10px;" src="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme.png" "PoopBuddy" />
			</div>
		</div>
		<div class="row subfigurator">
			<div class="large-1 columns">
				<h3>1</h3>				
			</div>
			<div class="large-11 columns">
				<ul class="button-group even-2">
					<li><a id="thisisforme" href="#" class="clearprice secondary button">This is for me</a></li>
					<li><a id="thisisagift" href="#" class="clearprice secondary button">This is a gift</a></li>
				</ul>
			</div>
		</div>
  		<div class="row subfigurator">
  			<div class="large-1 columns">
  				<h3>2</h3>
  			</div>
  			<div class="large-11 columns">
  				<input id="whofor" type="text" placeholder="Who&rsquo;s the lucky dog?" />
  			</div>
  		</div>			
		<div class="row subfigurator">
			<div class="large-1 columns">
				<h3>3</h3>
			</div>
			<div class="large-11 columns ">
				<ul id="subscription-size" class="button-group even-3">
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Under 20 pounds."><a href="#" class="secondary button" data-size="Small Dog">Small Dog</a></span></li>
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="20 to 40 pounds"><a href="#" class="secondary button" data-size="Medium Dog">Medium Dog</a></span></li>
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="Over 40 pounds"><a href="#" class="secondary button" data-size="Large Dog">Large Dog</a></span></li>
  				</ul>	
  			</div>
  		</div>

		<div id="subscription-row" class="row subfigurator hide">
			<div class="large-1 columns">
				<h3>4</h3>
			</div>
			<div class="large-11 columns">  		
   				<ul id="subscription-choice" class="product-choice button-group even-3">
					<li><a href="#" class="secondary button" data-name="PoopBuddy Subscription, Monthly" data-img="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme-100.jpg" data-pricetext="$10 / month + Free Shipping" data-freq="1m" data-price="10" data-code="POOPBUDDY-SUBSCRIPTION-1MO">Monthly</a></li>
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="10% off!"><a href="#" class="secondary button" data-name="PoopBuddy Subscription, 3 Months" data-img="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme-100.jpg" data-pricetext="$9 / month + Free Shipping <br /><small>(Save 10% with 3 months of goodies)</small>" data-freq="3m" data-price="27" data-code="POOPBUDDY-SUBSCRIPTION-3MO">3 months of goodies</a></span></li>
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="20% off!"><a href="#" class="secondary button" data-name="PoopBuddy Subscription, 6 Months" data-img="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme-100.jpg" data-pricetext="$8 / month + Free Shipping <br /><small>(Save 20% with 6 months of goodies)</small>" data-freq="6m" data-price="48" data-code="POOPBUDDY-SUBSCRIPTION-6MO">6 months of goodies</a></span></li>
  				</ul>		 
			</div>		
		</div>
		<div id="giftsubscription-row" class="showifgift row subfigurator hide">
			<div class="large-1 columns">
				<h3>4</h3>
			</div>
			<div class="large-11 columns">  		
   				<ul id="giftsubscription-choice" class="product-choice button-group even-2">
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="10% off per month!"><a href="#" class="secondary button" data-name="PoopBuddy Gift Subscription, 3 Months" data-img="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme-100.jpg" data-pricetext="$27 + Free Shipping" data-freq="" data-price="27" data-code="POOPBUDDY-GIFT-SUBSCRIPTION-3MO">3 months of goodies</a></span></li>
					<li><span data-tooltip data-options="disable-for-touch:true" class="has-tip" title="20% off per month!"><a href="#" class="secondary button" data-name="PoopBuddy Gift Subscription, 6 Months" data-img="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme-100.jpg" data-pricetext="$48 + Free Shipping" data-freq="" data-price="48" data-code="POOPBUDDY-GIFT-SUBSCRIPTION-6MO">6 months of goodies</a></span></li>
  				</ul>		 
			</div>		
		</div>

		<div class="showifgift row hide">
			<div class="large-1 columns">
				<h3>5</h3>
			</div>
			<div class="large-11 columns">
				<input id="giftemail_input" name="GiftEmail" type="text" placeholder="Giftee's Email Address?" />
			</div>
		</div>		

		<div class="showifgift row hide">
			<div class="large-1 columns">
				<h3>6</h3>
			</div>
			<div class="large-11 columns">
				<h6>Gift Message</h6>
				<textarea id="giftmessage_input" name="GiftMessage" cols="35" rows="6"></textarea>
			</div>
		</div>				

		<div class="row subfigurator">
			<div class="large-1 columns">
			</div>
			<div class="large-11 columns">
				<h3 id="pricetext"></h3>
			</div>
		</div>
		<div class="row">
			<div class="large-1 columns"> 
			</div>
			<div class="large-11 columns text-center">
				<form id="subform" action="https://poopbuddy.foxycart.com/cart" method="post">
					<input type="hidden" name="name" value="PoopBuddy Subscription, 1 Month" />
					<input type="hidden" name="code" value="POOPBUDDY-SUBSCRIPTION-1MO-RECUR" />
					<input type="hidden" name="image" value="<?php echo S3IMGROOT; ?>img/PoopBuddy-November-theme-100.jpg" />					
					<input type="hidden" name="size" value="" />
					<input type="hidden" name="price" value="10" />
					<input type="hidden" name="sub_frequency" value="1m" />
					<input type="hidden" name="sub_startdate" value="10" />
					<input type="hidden" name="sub_enddate" />
					<input type="hidden" name="shipto" />
					<input type="hidden" name="Gift_Email" value="" />
					<input type="hidden" name="Gift_Message" value="" />
					<input id="addtocart" style="width:100%" class="round primary button disabled" disabled type="submit" value="Add to Cart" />
				</form>				
			</div>
		</div>
		
	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>

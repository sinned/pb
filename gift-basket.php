<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Give a Gift of PoopBuddy</title>
	<?php include "includes/scripts.php"; ?>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="mainContent">
		<div class="row">
			<div class="large-12 columns text-center">
				<h2>A Doggy Gift of Ruv ($35)</h2>
			</div>
		</div>
		<div class="row">
			<div class="large-3 large-offset-1 columns">
				<img src="<?php echo WEBROOT; ?>img/gift-ruv.png" "PoopBuddy Gift Basket" />
			</div>
			<div class="large-7 columns">
				<ul>
					<li>6 rolls of PoopBuddy&trade; eco-friendly poop bags</li>
					<li>1 Bag Buddy&trade; (blue or pink), a lightweight leash attachment used to hold empty or filled waste bags</li>
					<li>4 Two Sisters Bakery hand baked treats, all natural, 100% organic and made in the USA</li>
					<li>1 sachet of lavender </li>
					<li>1 personalized card</li>
				</ul>
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
		<div class="row subfigurator hide">
			<div class="large-1 columns">
				<h3>3</h3>
			</div>
			<div class="large-11 columns">  		
   				<ul id="subscription-choice" class="button-group even-3">
					<li><a href="#" class="success secondary button" data-name="PoopBuddy Gift Basket" data-pricetext="Price: $35" data-freq="" data-price="35" data-code="POOPBUDDY-GIFTBASKET">Gift Basket</a></li>
  				</ul>		 
			</div>		
		</div>
		<div class="row">
			<div class="large-1 columns">
				<h3>4</h3>
			</div>
			<div class="large-11 columns">
				<h6>Gift Message</h6>
				<textarea id="giftmessage_input" name="GiftMessage" cols="35" rows="6"></textarea>
			</div>
		<div class="row subfigurator">
			<div class="large-1 columns">
			</div>
			<div class="large-11 columns">
				<h3 id="pricetext">Price: $35</h3>
			</div>
		</div>		
		<div class="row">
			<div class="large-1 columns"> 
			</div>
			<div class="large-11 columns text-center">
				<form id="subform" action="https://poopbuddy.foxycart.com/cart" method="post">
					<input type="hidden" name="name" value="PoopBuddy Gift Basket" />
					<input type="hidden" name="code" value="POOPBUDDY-GIFT-BASKET" />
					<input type="hidden" name="size" value="Small Dog" />
					<input type="hidden" name="image" value="http://poopbuddy.herokuapp.com/img/gift-ruv.png?cb=1" />
					<input type="hidden" name="price" value="35" />
					<input type="hidden" name="shipto" />
					<input type="hidden" name="Gift_Message" value="" />			
					<input style="width:100%" class="round primary button" type="submit" value="Add to Cart" />
				</form>				
			</div>
		</div>
		
	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>

<?php
switch ($_SERVER['SERVER_NAME']) {
  case 'localhost':
    define('WEBROOT', '/pb/');
  break;
  default:
    define('WEBROOT', '/');
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>^^store_name^^ Checkout</title>
    <link rel="shortcut icon" href="<?php echo WEBROOT; ?>img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="https://^^store_domain^^/themes/standard/styles.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	if (window.location.hash.search(/utma/) == -1 && typeof(fc_json.custom_fields['ga']) != "undefined") {
		if (fc_json.custom_fields['ga'].length > 0) {
			window.location.hash = fc_json.custom_fields['ga'].replace( /\&amp;/g, '&' );
		}
	}
</script>
 
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-41730942-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_setAllowAnchor', true]);
  _gaq.push(['_trackPageview', '/checkout']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
 
<script type="text/javascript" charset="utf-8">
	function ga_tracker() {
		if (typeof(fc_json.custom_fields['ga']) != "undefined" && jQuery('#fc_payment_method_paypal').is(":checked") == true) {
			_gaq.push(['_trackPageview', '/paypal_payment']);
			// setTimeout('return true;', 250); // TODO
		}
	}
	FC.checkout.overload('validateAndSubmit', 'ga_tracker', null);
</script>
</head>

<body id="checkout">
    <div id="pageContainer" style="width:760px; margin:0px auto;">
        <a href="<?php echo WEBROOT; ?>"><img style="width:300px;" src="<?php echo WEBROOT; ?>img/poopbuddy-logo.png" alt="PoopBuddy" title="PoopBuddy" /></a>
        <br />
        ^^cart^^
        ^^checkout^^

        <!-- Spread the love! Show everyone you use an awesome ecommerce platform -->
        <div id="fc_powered_by" style="width: 100px; margin: 0 auto; padding: 0 0 20px;">
            <a href="http://www.foxycart.com/#utm_source=foxycart_template&utm_medium=logo&utm_campaign=powered_by" title="We chose FoxyCart for easy, SEO ecommerce" target="_blank">
                <img src="//cdn.foxycart.com/static/images/foxycart_logos/powered-by-foxycart-100x40.png" alt="Powered by FoxyCart Ecommerce" />
            </a>
        </div>

    </div>
</body>
</html>

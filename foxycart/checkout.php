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

<script type="text/javascript" charset="utf-8">
  //<![CDATA[
  jQuery(document).ready(function() {
 
    /* BEGIN CUSTOM LOCATION LOGIC */
    FC.locations.limitCountriesTo(["US"], "shipping");
 
    /* END CUSTOM LOCATION LOGIC */
 
    FC.locations.updateFoxyComplete(true);
  });
  //]]>
</script>
 
<script type="text/javascript" charset="utf-8">
  //<![CDATA[
  // Country/State Helper Functions v1.1
  // Do not modify the following functions
 
  FC.locations.removeCountries = function(countries, locationArrayNames) {
    if (typeof countries == "undefined") { return false }
    if (typeof countries == "string") { countries = [countries]; }
    locationArrayNames = FC.locations.validateLocationArrayNames(locationArrayNames);
 
    for (l in locationArrayNames) {
      var locationArray = FC.locations.getLocationArray(locationArrayNames[l]);
      for (var c in countries) {
        if (typeof locationArray[countries[c]] == "undefined") { break; }
        delete locationArray[countries[c]];
      }
    }
 
    return true;
  }
 
  FC.locations.limitCountriesTo = function(countries, locationArrayNames) {
    if (typeof countries == "undefined") { return false }
    if (typeof countries == "string") { countries = [countries]; }
    locationArrayNames = FC.locations.validateLocationArrayNames(locationArrayNames);
 
    for (l in locationArrayNames) {
      var newLocations = {};
      var locationArray = FC.locations.getLocationArray(locationArrayNames[l]);
      for (var c in countries) {
        if (typeof locationArray[countries[c]] == "undefined") { break; }
        newLocations[countries[c]] = locationArray[countries[c]];
      }
 
      // Prevent the countries being set to nothing
      if (newLocations == {}) { return false; }
 
      if (locationArrayNames[l] == "customer") {
        FC.locations.config.locations = newLocations;
      } else {
        FC.locations.config.shippingLocations = newLocations;
      }
    }
    return true;
  }
 
  FC.locations.removeStates = function(country, states, locationArrayNames) {
    if (typeof country == "undefined" || typeof states == "undefined") { return false }
    if (typeof states == "string") { states = [states]; }
    locationArrayNames = FC.locations.validateLocationArrayNames(locationArrayNames);
 
    for (l in locationArrayNames) {
      var locationArray = FC.locations.getLocationArray(locationArrayNames[l]);
      if (typeof locationArray[country] == "undefined") { return false; }
      for (var s in states) {
        if (typeof locationArray[country].r[states[s]] == "undefined") { break; }
        delete locationArray[country].r[states[s]];
      }
    }
    return true;
  }
 
  FC.locations.limitStatesTo = function(country, states, locationArrayNames) {
    if (typeof country == "undefined" || typeof states == "undefined") { return false }
    if (typeof states == "string") { states = [states]; }
    locationArrayNames = FC.locations.validateLocationArrayNames(locationArrayNames);
 
    for (l in locationArrayNames) {
      var newLocations = {};
      var locationArray = FC.locations.getLocationArray(locationArrayNames[l]);
      if (typeof locationArray[country] == "undefined") { return false; }
      for (var s in states) {
        if (typeof locationArray[country].r[states[s]] == "undefined") { break; }
        newLocations[states[s]] = locationArray[country].r[states[s]];
      }
 
      if (locationArrayNames[l] == "customer") {
        FC.locations.config.locations[country].r = newLocations;
      } else {
        FC.locations.config.shippingLocations[country].r = newLocations;
      }
    }
    return true;
  }
 
  FC.locations.updateFoxyComplete = function(blockErrors) {
    FC.checkout.config.evaluateAjaxRequests = false;
 
    FC.checkout.setAutoComplete("customer_country");
    if (jQuery("#customer_country_name") != "") {
      FC.checkout.validateLocationName("customer_country");
    }
    if (jQuery("#customer_state_name").val() != "") {
      FC.checkout.validateLocationName("customer_state");
    }
    if (blockErrors) {
      FC.checkout.updateErrorDisplay("customer_country_name", false);
      FC.checkout.updateErrorDisplay("customer_state_name", false);
    }
    if (!FC.checkout.config.hasMultiship) {
      FC.checkout.setAutoComplete("shipping_country");
      if (jQuery("#shipping_country_name") != "") {
        FC.checkout.validateLocationName("shipping_country");
      }
      if (jQuery("#shipping_state_name") != "") {
        FC.checkout.validateLocationName("shipping_state");
      }
      if (blockErrors) {
        FC.checkout.updateErrorDisplay("shipping_country_name", false);
        FC.checkout.updateErrorDisplay("shipping_state_name", false);
      }
 
      FC.checkout.config.evaluateAjaxRequests = true;
      FC.checkout.updateShipping(-1);
      FC.checkout.updateTaxes(-1);
    } else {
      for (var i = 0; i < FC.checkout.config.multishipDetails.length; i++) {
        FC.checkout.setAutoComplete("shipto_" + i + "_country");
        if (jQuery("#shipto_" + i + "_country_name") != "") {
          FC.checkout.validateLocationName("shipto_" + i + "_country");
        }
        if (jQuery("#shipto_" + i + "_state_name") != "") {
          FC.checkout.validateLocationName("shipto_" + i + "_state");
        }
        if (blockErrors) {
          FC.checkout.updateErrorDisplay("shipto_" + i + "_country_name", false);
          FC.checkout.updateErrorDisplay("shipto_" + i + "_state_name", false);
        }
      }
 
      FC.checkout.config.evaluateAjaxRequests = true;
      for (var i = 0; i < FC.checkout.config.multishipDetails.length; i++) {
        FC.checkout.updateShipping(i);
        FC.checkout.updateTaxes(i);
      }
    }
  }
 
  FC.locations.getLocationArray = function(locationArrayNames) {
    return (locationArrayNames == "customer") ? FC.locations.config.locations : FC.locations.config.shippingLocations;
  }
 
  FC.locations.validateLocationArrayNames = function(locationArrayNames) {
    if (typeof locationArrayNames == "undefined" || locationArrayNames == "" || locationArrayNames == "both") { locationArrayNames = ["customer", "shipping"]; }
    if (typeof locationArrayNames == "string") { locationArrayNames = [locationArrayNames]; }
    return locationArrayNames;
  }
  //]]>
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

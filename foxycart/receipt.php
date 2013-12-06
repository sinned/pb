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
    <title>^^store_name^^ Receipt</title>
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
  _gaq.push(['_trackPageview', '/receipt']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
 
^^receipt_only_begin^^
^^analytics_google_ga_async^^
^^receipt_only_end^^

<!-- Google Code for Subscribed Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 990593985;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "GOg8CMf_-QcQwYet2AM";
var google_conversion_value = 0;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/990593985/?value=0&amp;label=GOg8CMf_-QcQwYet2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</head>

<body id="checkout">
    <div id="pageContainer" style="width:760px; margin:0px auto;">
        <a href="<?php echo WEBROOT; ?>"><img style="width:300px;" src="<?php echo WEBROOT; ?>img/poopbuddy-logo.png" alt="PoopBuddy" title="PoopBuddy" /></a>
        <br />      
        ^^cart^^
        ^^receipt^^
    </div>
</body>
</html>

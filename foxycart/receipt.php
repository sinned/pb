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

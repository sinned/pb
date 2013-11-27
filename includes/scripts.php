<?php
define('S3IMGROOT','http://i.poopbuddy.com/');
switch ($_SERVER['SERVER_NAME']) {
	case 'localhost':
		define('WEBROOT', '/pb/');
	break;
	default:
		define('WEBROOT', '/');
}
?>
<link rel="shortcut icon" href="<?php echo WEBROOT; ?>img/favicon.png" type="image/png" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/custom.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/normalize.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/app.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/jquery.bxslider.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo WEBROOT; ?>js/vendor/custom.modernizr.js"></script>
<!-- start Dropifi --> <script type='text/javascript' src='https://s3.amazonaws.com/dropifi/js/widget/dropifi_widget.min.js'></script><script type='text/javascript'>document.renderDropifiWidget('f5b6a5f3cdb5a8370a48ef8ffa70a5ee-1384393592402');</script> <!-- end Dropifi -->


<?php 
/* "new" universal tracking GA code
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41730942-1', 'poopbuddy.com');
  ga('send', 'pageview');

</script>
*/
?>


<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-41730942-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_setAllowAnchor', true]);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>

<script type="text/javascript" charset="utf-8">
fcc.events.cart.preprocess.add(function(e, arr) {
  if (arr['cart'] == 'checkout' || arr['cart'] == 'updateinfo' || arr['output'] == 'json') {
    return true;
  }
  if (arr['cart'] == 'checkout_paypal_express') {
    _gaq.push(['_trackPageview', '/paypal_checkout']);
    return true;
  }
  _gaq.push(['_trackPageview', '/cart']);
  return true;
});
fcc.events.cart.process.add_pre(function(e, arr) {
  var pageTracker = _gat._getTrackerByName();
  jQuery.getJSON('https://' + storedomain + '/cart?' + fcc.session_get() + '&h:ga=' + escape(pageTracker._getLinkerUrl('', true)) + '&output=json&callback=?', function(data){});
  return true;
});
</script>


<script src="<?php echo WEBROOT; ?>js/vendor/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo WEBROOT; ?>js/vendor/jquery.bxslider.min.js" type="text/javascript" charset="utf-8"></script>

<!-- BEGIN FOXYCART FILES -->
<link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8" />
<script src="//cdn.foxycart.com/poopbuddy/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
<!-- END FOXYCART FILES -->
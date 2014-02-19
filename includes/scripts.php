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
<link rel="shortcut icon" href="<?php echo S3IMGROOT; ?>img/favicon.png" type="image/png" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/custom.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/normalize.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/app.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/jquery.bxslider.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<script src="<?php echo S3IMGROOT; ?>js/vendor/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo S3IMGROOT; ?>js/foundation.min.js"></script>

<script src="<?php echo S3IMGROOT; ?>js/vendor/jquery.bxslider.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo S3IMGROOT; ?>js/vendor/custom.modernizr.js"></script>

<!-- Foundation 3 for IE 8 and earlier -->
<!--[if lt IE 9]>
  <link rel="stylesheet" href="<?php echo WEBROOT; ?>css/foundation3/normalize.css">
  <link rel="stylesheet" href="<?php echo WEBROOT; ?>css/foundation3/foundation.css">
  <link rel="stylesheet" href="<?php echo WEBROOT; ?>css/foundation3/app.css">
<![endif]-->

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

<!-- BEGIN FOXYCART FILES -->
<link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8" />
<script src="//cdn.foxycart.com/poopbuddy/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
<!-- END FOXYCART FILES -->
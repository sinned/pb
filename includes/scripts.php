<?php
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
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/normalize.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/app.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/custom.css" />

<script src="js/vendor/custom.modernizr.js"></script>
<!-- BEGIN FOXYCART FILES -->
<link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="//cdn.foxycart.com/poopbuddy/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
<!-- END FOXYCART FILES -->
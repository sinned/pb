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
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/custom.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/normalize.css" />
<link rel="stylesheet" href="<?php echo WEBROOT; ?>stylesheets/app.css" />

<script src="<?php echo WEBROOT; ?>js/vendor/custom.modernizr.js"></script>
<!-- BEGIN FOXYCART FILES -->
<link rel="stylesheet" href="//cdn.foxycart.com/static/scripts/colorbox/1.3.23/style1_fc/colorbox.css?ver=1" type="text/css" media="screen" charset="utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="//cdn.foxycart.com/poopbuddy/foxycart.colorbox.js?ver=2" type="text/javascript" charset="utf-8"></script>
<!-- END FOXYCART FILES -->

<!-- start Dropifi --> <script type='text/javascript' src='https://s3.amazonaws.com/dropifi/js/widget/dropifi_widget.min.js'></script><script type='text/javascript'>document.renderDropifiWidget('f5b6a5f3cdb5a8370a48ef8ffa70a5ee-1384393592402');</script> <!-- end Dropifi -->
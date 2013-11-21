<div class="row">
	<div class="large-12 columns text-center">
		<img style="margin:-8px;" src="<?php echo S3IMGROOT; ?>img/doggy-peeking.png" alt="Peeking Dog" />
	</div>
</div>
<section id="footer">
	<div class="row">
		<div class="large-12 column">
			<ul class="inline-list left">
				<li><a href="<?php echo WEBROOT;?>about/">About</a></li>
				<li><a href="<?php echo WEBROOT;?>faq/">FAQ</a></li>
			</ul>
			<ul class="inline-list right socialmedia">
				<li><a href="http://www.facebook.com/poopbuddy"><img src="<?php echo WEBROOT; ?>img/facebook-green.png" /></a></li>
				<li><a href="http://www.twitter.com/getpoopbuddy"><img src="<?php echo WEBROOT; ?>img/twitter-green.png" /></a></li>
				<li><a href="http://www.pinterest.com/getpoopbuddy"><img src="<?php echo WEBROOT; ?>img/pinterest-green.png" /></a></li>
				<li><a href="http://www.instagram.com/getpoopbuddy"><img src="<?php echo WEBROOT; ?>img/instagram-green.png" /></a></li>				
			</ul>
			<br style="clear:both;"/>

	        <!-- Begin MailChimp Signup Form -->
			<div class="right" id="mc_embed_signup2">
			<form action="http://poopbuddy.us7.list-manage.com/subscribe/post?u=7cccd32f632de3c4496407d9b&amp;id=4caf43e792" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<label for="mce-EMAIL">Join for news &amp; offers!</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email" required>
			    <input type="submit" value="Sign Me Up!" name="subscribe" id="mc-embedded-subscribe" class="small button" style='background:#fcb318 !important; color:#fff;'>
			</form>
			</div>
			<!--End mc_embed_signup-->				

			<br style="clear:both;"/>
			<p>&copy;2013 Poop Buddy</p>
		</div>
	</div>
</section>

<div id="squeezeModal" class="reveal-modal" style="max-width:800px; border:10px solid #02bdb8;background:url('<?php echo WEBROOT; ?>img/squeeze.png') no-repeat right #fff">
    <a class="close-reveal-modal">&#215;</a>

    <div class="row">
    	<div class="large-7 columns">
    		<h1>Sign Up For 50% Off!</h1>
    		<p>Join our pack to get your welcome discount, special offer alerts, contests and more.
			<!-- Begin MailChimp Signup Form -->

			<div id="mc_embed_signup">
			<form action="http://poopbuddy.us7.list-manage2.com/subscribe/post?u=7cccd32f632de3c4496407d9b&amp;id=4caf43e792" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				<div class="clear"><input type="submit" value="Sign Me Up!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</form>
			</div>
			<!--End mc_embed_signup-->
			<p><small>*Offer valid for first-time registrants only</small></p>
		</div>
		<div class="large-5 columns">
		</div>
	</div>
</div>

<script>
document.write('<script src=' +
('__proto__' in {} ? '<?php echo WEBROOT; ?>js/vendor/zepto' : '<?php echo WEBROOT; ?>js/vendor/jquery') +
'.js><\/script>')
</script>

<script src="<?php echo WEBROOT; ?>js/app.js"></script>
<script src="<?php echo WEBROOT; ?>js/foundation.min.js"></script>

<script>
$(document).foundation();
</script>
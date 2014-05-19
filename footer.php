	</div>
</section>

<footer id="footer">
  <div class="row">
    <div class="columns">
    <a href="http://www.facebook.com/" target="_blank"><i class="fi-social-facebook social-icon"></i></a>
    <a href="http://www.twitter.com/" target="_blank"><i class="fi-social-twitter social-icon"></i></a>
    <a href="http://www.flickr.com/" target="_blank"><i class="fi-social-flickr social-icon"></i></a>
    <a href="http://www.foursquare.com/" target="_blank"><i class="fi-social-foursquare social-icon"></i></a>
    <a href="http://plus.google.com/" target="_blank"><i class="fi-social-google-plus social-icon"></i></a>
    <a href="http://www.instagram.com/" target="_blank"><i class="fi-social-instagram social-icon"></i></a>
    <a href="http://www.linkedin.com/" target="_blank"><i class="fi-social-linkedin social-icon"></i></a>
    <a href="http://www.pinterest.com/" target="_blank"><i class="fi-social-pinterest social-icon"></i></a>
    <a href="http://www.vimeo.com/" target="_blank"><i class="fi-social-vimeo social-icon"></i></a>
    <a href="http://www.youtube.com/" target="_blank"><i class="fi-social-youtube social-icon"></i></a>
		<?php do_action('foundationPress_before_footer'); ?>
		<?php dynamic_sidebar("footer-widgets"); ?>
		<?php do_action('foundationPress_after_footer'); ?>
		<p>&copy; Copyright <?php bloginfo('name'); ?>. <a href="http://ww.dealerfire.com/" target="_blank">Automotive Marketing by DEALERFIRE</a>.</p>
    </div>
  </div>
</footer>
<a class="exit-off-canvas"></a>
	
  <?php do_action('foundationPress_layout_end'); ?>
  </div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
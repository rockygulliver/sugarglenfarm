<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->
	
		<footer id="colophon" class="site-footer" role="contentinfo">
		 <div class="wrapper">

			<?php get_sidebar( 'footer' ); ?>

	   <p id="copyright" class="center clear">All content &copy;2012-<?php date_default_timezone_set('America/Boston'); echo date("Y"); ?> Michele Authier / Sugar Glen Farm.</p>
		 </div><!-- .wrapper -->			
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	<script type="text/javascript">
	 jQuery(document).ready(function($){
	 
	  // add Archive link below Recent Posts	
	  $('#recent-posts-2').children('ul').after('<h2><a href="http://sugarglenfarm.com/archive">Archive ></a></h2>');

	  // random header image
	  var headerArray = ['corral-feeder.jpg','garden.jpg','hank-kitchen.jpg','hank-snow.jpg','hydrangea.jpg','kitchen-seedlings.jpg','little-hank.jpg','seed-beds.jpg','sugar-shack.jpg','hank-header.jpg'];    
	  var random = headerArray[Math.floor(Math.random() * headerArray.length)];
	  $('#masthead').css('background-image','url("http://www.sugarglenfarm.com/wp-content/themes/sugarglenfarm/images/' + random + '")' ); 

	  // tiny nit-picky padding thing for pagination
	  // ensure a perfect circle for one-digit current pages
	  if ($('.page-numbers.current').text() <= 9) {
	   $('.page-numbers.current').css('padding-left', '.9em').css('padding-right','.9em');
 	  }

	 });
	</script>
	
</body>
</html>
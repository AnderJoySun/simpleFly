<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Power By WordPress & all-in<br/>
			CopyRight © 2013 - 2015 舞影凌风 All Rights Reserved
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
<!--回到顶部start-->
<div class="back-to-top"></div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
			$(".back-to-top").fadeIn(800);
		} else {
			$(".back-to-top").fadeOut(800);
		}
	});
	$(".back-to-top").click(function () {
		$('body,html').animate({scrollTop: 0}, 600);
		return false;
	});
</script>
<!--回到顶部end-->
</body>
</html>
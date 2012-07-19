<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #main -->
		<footer role="contentinfo">
			
			<div class="col-three">
				<div id="plus-one">
					<!-- Place this tag where you want the +1 button to render -->
					<g:plusone annotation="none"></g:plusone>
					
					<!-- Place this render call where appropriate -->
					<script type="text/javascript">
						window.___gcfg = {lang: 'en-GB'};
						
						(function() {
							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							po.src = 'https://apis.google.com/js/plusone.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						})();
					</script>
				</div>
				<p class="copyright">Copyright 2008-2012 Simon Owen Design</p>
			</div>
			
			<ul id="social" class="col-three nmr">
				<li><a href="http://twitter.com/simonowendesign">t</a></li>
				<li><a href="http://flickr.com/simonowendesign">f</a></li>
				<li><a href="http://linkedin.com/in/simonowendesign">l</a></li>
				<li><a href="http://youtube.com/simonowendesign">y</a></li>
				<li><a href="http://github.com/simonowendesign">g</a></li>
			</ul>
			
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
		</footer><!-- footer -->
		
		<!-- Scroll to the Top -->
		<script type="text/javascript" src="<?php bloginfo( 'template_url'); ?>/js/jquery.scrollTo-1.4.0-min.js"></script>
		<div class="scroll-wrap">
			<a href="#top" class="scroll">Going up?</a>
		</div>
		
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
		</div><?php /* wrap - END */ ?>
	</body>
</html>
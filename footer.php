<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="footer" role="contentinfo">
				<div class="site-info">
					<p class="site">© 2016 Pokérrito</p>
          <a href="<?php echo get_page_link( get_page_by_title( terms )->ID ); ?>" class="terms">terms & conditions</a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
					<div class="col-md-6 footer-left text-right">
						<?php 
						if (!dynamic_sidebar('footer-left')) {
							/* translators: %s WordPress with link. */
							printf('<a href="https://www.inscamidemar.cat/" rel="">INS Camí de Mar</a>');
							// echo ' | ';
							// /* translators: %s Bootstrap Basic with link. */
							// printf(__('Theme: %s', 'bootstrap-basic'), '<a href="https://rundiz.com" rel="nofollow">Bootstrap Basic</a>');
						} 
						?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>

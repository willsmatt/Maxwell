					<footer class="footer" role="contentinfo">
					<div id="inner-footer" class="row">
						<div class="large-3 medium-12 columns">
                            <?php the_field('footer_info_left', 'option'); ?>

	    				</div>
                        <div class="large-3 medium-4 columns">
                            <h5>Product</h5>
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
                        <div class="large-3 medium-4 columns">
                            <h5>Company</h5>
							<nav role="navigation">
	    						<?php joints_footer_links_two(); ?>
	    					</nav>
	    				</div>
                       <div class="large-3 medium-4 columns">
                           <?php the_field('footer_info_right', 'option'); ?>
	    				</div>

						<div class="large-12 medium-12 columns terms-nav">
							<a href="/terms">Terms of use</a> • <a href="/privacy">Privacy pledge</a>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>
</html> <!-- end page -->

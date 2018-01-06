<?php
/*
Template Name: Request Demo
*/
?>
<?php get_header(); ?>
<div class="maxwell-general">
	<div class="row">
		    <main id="main" class="large-6 large-offset-3 medium-8 medium-offset-2 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'demo' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
</div>
</div>		   
		

<?php get_footer(); ?>
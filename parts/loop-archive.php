<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<div class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</div> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_excerpt('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	
	</footer> <!-- end article footer -->				    						
</article> <!-- end article -->
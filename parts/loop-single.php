<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<div class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </div> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	
	</footer> <!-- end article footer -->	
						
		
													
</article> <!-- end article -->
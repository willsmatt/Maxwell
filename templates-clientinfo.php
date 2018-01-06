<?php
/*
Template Name: Client Info
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	
<div id="asdf">
<div class="client-hero">
    <div class="row">
        <div class="large-6 medium-6 small-12 columns intro">
            <?php the_content();?>
        </div>  
            <div class=" small-12 medium-6 large-6 columns">
            <img src="<?php the_field('client_info_image'); ?>">
</div>
       
        
       

    <div id="request" class="small-12 large-5 medium-12 columns">
      <div class="sticky request-form">
          
          <?php
            function processForm() {
                $emailGet = $_GET['email'];
                $url = "/request-a-demo?email=" . $emailGet;
                header("Location: $url");
                exit;
            }
            ?>
          
          
          <form class="form-inline" action="/request-a-demo" accept-charset="UTF-8" method="get">
              <div class="input-group">
                <input type="email" name="email" id="email" class="input-group-field input-request" placeholder="Enter email address" required="required" autofocus="autofocus">
                <div class="input-group-button">
                  <input type="submit" class="button btn-request" value="Request Demo">
                </div>
              </div>
          </form>    
        
      </div>
    </div>
    </div>

</div>
  
<div id="featured-tabs">
<div class="row">
    
<div class="large-8 medium-12 small-12 columns">  
<?php if ( have_rows( 'feature_sections' ) ) : ?>
    <?php $i = 0; ?>
	<?php while ( have_rows( 'feature_sections' ) ) : the_row(); ?>

        <?php $i++; ?>
        

<div class="featured-tab">
    <div class="row">
        <div class="large-12 medium-12 columns">
            <h2><?php the_sub_field( 'section_title' ); ?></h2>
            <div class="row collapse">
                <div class="medium-4 hide-for-small-only columns">
                    <ul class="vertical tabs" data-tabs id="feature-tabs-<?php echo $i; ?>">
                        <?php if ( have_rows( 'feature_tabs' ) ) : ?>
                            <?php $b = 0; ?>
                            <?php while ( have_rows( 'feature_tabs' ) ) : the_row(); ?>
                            <?php $b++; ?>
                                <?php if ($b == "1") { ?>
                                    <li class="tabs-title is-active"><a href="#panel-<?php echo $i; ?>-<?php echo $b; ?>" aria-selected="true"><?php the_sub_field( 'tab_title' ); ?></a></li>
                                <?php } else { ?>
                                    <li class="tabs-title"><a href="#panel-<?php echo $i; ?>-<?php echo $b; ?>" aria-selected="true"><?php the_sub_field( 'tab_title' ); ?></a></li>
                                <?php } ?>
                            
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="medium-8 columns">
                    <div class="tabs-content" data-tabs-content="feature-tabs-<?php echo $i; ?>">
                        
                        <?php if ( have_rows( 'feature_tabs' ) ) : ?>
                            <?php $a = 0; ?>
                            <?php while ( have_rows( 'feature_tabs' ) ) : the_row(); ?>
                            <?php $a++; ?>
                               
                                
                                <?php if ($a == "1") { ?>
                                 <div class="tabs-panel is-active" id="panel-<?php echo $i; ?>-<?php echo $a; ?>">
                               
                                    <h3 class="show-for-small-only"><?php the_sub_field( 'tab_title' ); ?></h3>
                                    <p><?php the_sub_field( 'tab_overview' ); ?></p>
                                    <?php $tab_image = get_sub_field( 'tab_image' ); ?>
                                    <?php if ( $tab_image ) { ?>
                                        <?php echo wp_get_attachment_image( $tab_image, 'full' ); ?>
                                    <?php } ?>
                                </div>
                        
                                <?php } else { ?>
                        
                                <div class="tabs-panel" id="panel-<?php echo $i; ?>-<?php echo $a; ?>">
                                    
                                    <h3 class="show-for-small-only"><?php the_sub_field( 'tab_title' ); ?></h3>
                                    <p><?php the_sub_field( 'tab_overview' ); ?></p>
                                    <?php $tab_image = get_sub_field( 'tab_image' ); ?>
                                    <?php if ( $tab_image ) { ?>
                                        <?php echo wp_get_attachment_image( $tab_image, 'full' ); ?>
                                    <?php } ?>
                                </div>    
                                    
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                        
    
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    </div>

      
<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>  
    </div>
    <div id="price-card" class="large-4 medium-12 small-12 columns" data-sticky-container>
    <div class="sticky card" data-sticky data-top-anchor="price-card" data-btm-anchor="featured-tabs:bottom" data-sticky-on="large">
      <div class="card-divider">
        <?php the_field('pricing_info'); ?>

      </div>
      <div class="card-section">
        <a href="/pricing">Compare plans <i class="fa fa-lg fa-angle-right" aria-hidden="true"></i></a>
      </div>
    </div>
</div> 
    </div>
    </div>
</div>
<div class="home-demo">
    <div class="row">
        <div class="large-4 columns play-copy">
        <p>Designed for loan officers and their borrowers</p>
            <a href="https://vimeo.com/219134397" class="popup-vimeo demo-video"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Play Demo</a>
        </div>
        <div class="large-8 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-ss.png">
        </div>
    </div>
</div>


</div>



<?php endwhile; endif; ?>
<?php get_footer(); ?>

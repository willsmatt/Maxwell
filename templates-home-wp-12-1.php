<?php
/*
Template Name: Home WP
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="maxwrap">
    <?php if ( is_front_page() ) { ?>
   
<div class="maxwell-alert callout" data-closable style="margin:0px;position:fixed;bottom:0px;z-index:999;">
    <div class="row">
  <div class="large-6 columns"><h5>Dear Maxwell Visitor,</h5>
  <p>Brian Fraser, a husband, father, incredible originator and Maxwell customer was lost in the senseless Las Vegas massacre. Support his wife and four kids as they navigate this loss.</p>
      <a href="https://www.gofundme.com/j8f37g-brians-family" class="button  btn-maxwell">Support the Fraser Family</a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gofund.png" class="gofund">
    </div>
    <div class="large-6 columns">
  
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brianfraser.png">
    </div>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
    </div>    
</div>
<?php } else {
   
}?>
<div class="home-hero">
    <div class="row">
        <div class="large-4 medium-5 small-12 columns hero-align">
            <?php the_content(); ?>
            <div class="columns small-6 right" data-sticky-container>
   
            </div>
        </div>
        
        <img id="wrap" src="<?php echo get_template_directory_uri(); ?>/assets/images/header-1.png" class="hero-img"  >

        <!--<a href="https://vimeo.com/219134397" class="hero-video popup-vimeo"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Hear from Jim at Moderne Mortgage Demo</a> -->
    
        <div id="request" class="small-12 large-5 columns"  >
      <div class="sticky request-form" >
          
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


  

<div class="home-features">
    
    


    <?php
        $counter = 0;
        if( have_rows('alternating_teasers') ): 
        while ( have_rows('alternating_teasers') ) : the_row(); 
    ?>
    
        <?php if ($counter % 2 === 0) :?>
            <div class="row flexbox-container">
                <div class="large-6 small-12 columns ">
                    <?php the_sub_field( 'teaser_copy' ); ?>
                </div>
                <div class="large-6 small-12 columns">
                    <?php if ( get_sub_field( 'teaser_image' ) ) { ?>
                        <img src="<?php the_sub_field( 'teaser_image' ); ?>" />
                    <?php } ?>
                </div>
            </div>
        <?php else: ?>
            <div class="row flexbox-container">
        
                <div class="large-6 large-push-6 small-12 columns">
                    <?php the_sub_field( 'teaser_copy' ); ?>
                </div>
                <div class="large-6 large-pull-6 small-12 columns">
                    <?php if ( get_sub_field( 'teaser_image' ) ) { ?>
                        <img src="<?php the_sub_field( 'teaser_image' ); ?>" />
                    <?php } ?>

                </div>
            </div>
        <?php endif; ?>
    
    <?php 
        $counter++; 
        endwhile; 
        endif; 
    ?>

</div>
<div class="home-demo">
    <div class="row">
        <div class="large-4 columns play-copy">
        <?php the_field( 'demo_copy' ); ?>
            <a href="<?php the_field( 'demo_video_url' ); ?>" class="popup-vimeo demo-video"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Hear From Our Customers</a>
        </div>
        <div class="large-8 columns">
            <?php if ( get_field( 'demo_image' ) ) { ?>
                <img src="<?php the_field( 'demo_image' ); ?>" />
            <?php } ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="large-12 columns text-center pricing-intro">
    <h5>Simple pricing, powerful features</h5>
    
    </div>

</div>
<div class="home-pricing">
    <div class="row">
        <div class="large-6 columns first">
            <?php if ( get_field( 'loan_officers_image' ) ) { ?>
                <img src="<?php the_field( 'loan_officers_image' ); ?>" />
            <?php } ?>
            <?php the_field( 'loan_officer_copy' ); ?>
        </div>
        <div class="large-6 columns second">
            <?php if ( get_field( 'lending_team_image' ) ) { ?>
                <img src="<?php the_field( 'lending_team_image' ); ?>" />
            <?php } ?>
            <?php the_field( 'lending_team_copy' ); ?>
        </div>
    
    </div>


</div>
<div class="home-logos">
    <div class="row text-center">
        <?php $logo_set_1_images = get_field( 'logo_set_1' ); ?>
        <?php if ( $logo_set_1_images ) :  ?>
            <?php foreach ( $logo_set_1_images as $logo_set_1_image ): ?>
               <div class="large-2 small-6 columns">
                    <img src="<?php echo $logo_set_1_image['url']; ?>" alt="<?php echo $logo_set_1_image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<div class="home-integration">
    <div class="row">
        <div class="large-6 large-offset-3 columns text-center">
            <?php the_field( 'integration_copy' ); ?>
            <!--<a href="#">Learn More <i class="fa fa-lg fa-angle-right" aria-hidden="true"></i></a>-->
        </div>
    </div>
</div>
<!--
<div class="home-stories">
    <div class="row stories-intro">
        <div class="large-12 text-center">
            <h5>Customer Stories</h5>
        </div>
    </div>
    <div class="row">
        <div class="large-6 small-12 columns">
            <div class="item"  >
                <a href="#"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Customer Story</a>
            </div>
        </div>
        <div class="large-6 small-12 columns">
            <div class="item"  >
                <a href="#"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Customer Story</a>
            </div>
        </div>

    </div>
</div> -->
<div class="teams-logos">
    <div class="row">
        <div class="large-12 columns text-center teams-intro"><h5>Join the many teams on maxwell.</h5></div>
    </div>
    <div class="row">
        <?php $logo_set_2_images = get_field( 'logo_set_2' ); ?>
        <?php if ( $logo_set_2_images ) :  ?>
            <?php foreach ( $logo_set_2_images as $logo_set_2_image ): ?>
                <div class="large-3 medium-4 small-6 columns">
                    <img src="<?php echo $logo_set_2_image['url']; ?>" alt="<?php echo $logo_set_2_image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        
        
    </div>
</div>

<div class="resources">
    <div class="row">
        <div class="large-12 columns text-center intro"><h5>Resources for Loan Officers</h5></div>
    </div>
    <div class="row">
       
                <div class="large-6 medium-6 small-12 columns">
                    <a href="/playbook"><div class="ebook-promo">
                        <span>eBook Download</span>
                        <h3>The Mortgage Communication Playbook</h3>
                        <a href="/playbook">Learn More</a>
                        </div></a>
                </div>
            
        
    </div>
</div>


</div>    
    
</div>


</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

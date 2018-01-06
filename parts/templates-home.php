<?php
/*
Template Name: Home WP
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="maxwrap">
<div class="home-hero">
    <div class="row">
        <div class="large-4 medium-5 small-12 columns hero-align">
            <?php the_content(); ?>
            <div class="columns small-6 right" data-sticky-container>
   
</div>
        </div>
        
        <img id="wrap" src="<?php echo get_template_directory_uri(); ?>/assets/images/header-1.png" class="hero-img"  >

        <!--<a href="https://vimeo.com/219134397" class="hero-video popup-vimeo"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Hear from Jim at Moderne Mortgage</a> -->
    
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
            <a href="<?php the_field( 'demo_video_url' ); ?>" class="popup-vimeo demo-video"><i class="fa fa-2x fa-play-circle" aria-hidden="true"></i> Play Demo</a>
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lo-ilo.png">
            <h3>Loan officers</h3>
            <p>Power your growth with technology. Maxwell enables LOs and their teams to transform their work, impress their borrowers, and close loans faster.</p>
            <a href="/loan-officers">Pricing & Features <i class="fa fa-lg fa-angle-right" aria-hidden="true"></i></a>
        </div>
        <div class="large-6 columns second">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teams-illo.png">
            <h3>Lending Teams</h3>
            <p>Teams benefit from collaboration, with one common system of record for borrower documents, communication, and reporting.</p>
            <a href="/teams">Pricing & Features <i class="fa fa-lg fa-angle-right" aria-hidden="true"></i></a>
        </div>
    
    </div>


</div>
<div class="home-logos">
    <div class="row text-center">
        <div class="large-2 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/cb-insights.png">
        </div>
        <div class="large-2 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/housingwire.png">
        </div>
        <div class="large-2 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/nationalmortgagenews.png">
        </div>
        <div class="large-2 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/scotsmanguide.png">
        </div>
        <div class="large-2 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/wired.png">
        </div>
        <div class="large-2 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/xconomy.png">
        </div>
    </div>
</div>
<div class="home-integration">
    <div class="row">
        <div class="large-6 large-offset-3 columns text-center">
            <h3>Maxwell integrates experiences that matter most.</h3>
            <p>Customize your Maxwell experience with our API and pre-integrated partners through our Connected Apps platform. Choose from verification services, loan origination systems, doc prep services, home insurance providers and more.</p>
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
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/american-pacific.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/c2.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/guaranty.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/opendoor-logo.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/prmi-logo.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/greenpath.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/aspire.png">
        </div>
        <div class="large-3 medium-4 small-6 columns">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/colonial-mortgage-logo.png">
        </div>
        
       
        
    </div>
</div>
    


</div>    
    
</div>


</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<div class="about-hero">
    <div class="row">
        <div class="large-6 medium-6 small-12 columns hero-align">
            
        </div>
       
       

    </div>

</div>

<div class="row" style="margin-top:-80px;">
    <div class="large-12 columns">
        <div class="callout">
        <div class="row">
            <div class="large-7 medium-6 columns">
            <?php the_field( 'about_intro' ); ?>
</p>
        </div>
        <div class="large-5 medium-6 columns text-center sub">
           <?php the_field( 'about_stats' ); ?>
    
            </div>
        
        </div>
            </div>
    </div>
    

</div>
<div class="row about-intro">
    <div class="large-7 medium-6 columns">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-story.jpg">
    </div>
    <div class="large-5 medium-6 columns">
        <?php the_field( 'our_story' ); ?>
    </div>

</div>
<div id="build">
<div class="row" data-equalizer data-equalize-on="small">
    <div class="small-12 medium-6 columns" data-equalizer-watch>
        <div class="build-copy">
    <?php the_field( 'value_content' ); ?>
    </div>
    </div>
    <div class="small-12 medium-6 columns" data-equalizer-watch>
        <div class="build-bg">
        
        </div>
    
    </div>

</div>
    </div>

<?php get_footer(); ?>

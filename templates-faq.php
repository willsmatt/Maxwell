<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="faq-hero">
    <div class="row">
        <div class="large-4 medium-6 small-12 columns">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="row links">
        <ul data-magellan data-offset="80">
          <li class="large-4 medium-4 small-12 columns"><a href="#howitworks" class="button">How it works</a></li>
          <li class="large-4 medium-4 small-12 columns"><a href="#accountsbilling" class="button">Accounts &amp; Billing</a></li>
          <li class="large-4 medium-4 small-12 columns"><a href="#techsupport" class="button">Technical Support</a></li>
        </ul>
    </div>

</div>

<div class="row faq">
    <div class="large-6 columns">
        <?php the_content(); ?>
    </div>
    

</div>


<?php endwhile; endif; ?>
<?php get_footer(); ?>

<?php
/*
Template Name: Playbook
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	
<div id="wrap">
<div class="playbook-hero">
    <div class="row">
        <div class="large-6 medium-6 small-12 columns intro">
            Free eBook
            <h1>The Mortgage<br> Communication Playbook</h1>
        </div>  
            <div class=" small-12 medium-6 large-5 columns hide-for-small-only">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/playbook.png">
</div>
       
        

    </div>

</div>
  

<div class="row">
    <div id="price-card" class="large-5 large-push-7 medium-12 small-12 columns playbook" data-sticky-container>
    <div class="sticky card" data-sticky data-top-anchor="price-card" data-btm-anchor="featured-tabs:bottom" data-sticky-on="large">
      <div class="card-divider">
          <p><strong>Download your free copy today</strong></p>
          <div id="playbook">
        <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
hbspt.forms.create({
portalId: '2192240',
formId: 'c177be11-c344-4230-9b32-b65ecdf5c06b',
target:'#playbook',
css: ''
});
</script>
        </div>
      </div>
      
    </div>
</div> 
    <div class="large-6 large-pull-6 columns general-content">
    <p>Providing a stress-free mortgage experience to your borrowers is ideally high on your priorities. Satisfied customers help build your brand, drive referrals, and just as importantly, make you more happy in your work. What’s more, poor discipline around communication steals your productivity. All those inbound emails, voicemails and texts are traps on your time.</p>

<p>In this whitepaper, we summarize why great communication is critical, how to achieve it, and the results you should expect. For every mortgage advisor out there, communication will be the bedrock of a high-functioning, profitable business.</p>
        
    </div>



    
    </div>
</div>





<?php endwhile; endif; ?>
<?php get_footer(); ?>

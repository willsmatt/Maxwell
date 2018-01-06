<?php
/*
Template Name: Pricing WP
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pricing-hero">
    <div class="row">
        <div class="large-6 medium-10 small-12 columns hero-align">
            <?php the_content(); ?>

        </div>
       
       
        <div id="request" class="small-12 large-5 medium-12 columns">
      <div class="request-form">
          
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

<div class="row price-cards" data-equalizer data-equalize-on="medium">
        <div class="large-4 columns">
            <div class="card" data-equalizer-watch>
              <div class="card-divider">
                <?php the_field( 'starter_info' ); ?>
              </div>
              <div class="card-section">
                  <?php the_field( 'starter_pricing' ); ?>
              </div>
            </div>
        </div>
        <div class="large-4 columns">
            <div class="card" data-equalizer-watch>
              <div class="card-divider">
                <?php the_field( 'professional_info' ); ?>
              </div>
              <div class="card-section">
                  <?php the_field( 'professional_pricing' ); ?>
              </div>
            </div>
        </div>
        <div class="large-4 columns">
            <div class="card" data-equalizer-watch>
              <div class="card-divider">
                <?php the_field( 'enterprise_info' ); ?>
              </div>
              <div class="card-section">
                  <?php the_field( 'enterprise_pricing' ); ?>
              </div>
            </div>
        </div>
    
    </div>
<div class="row pricing-intro">
<div class="large-6 large-offset-3 columns text-center">
    <?php the_field('pricing_table_intro'); ?>
</div>    
    
</div>
<div class="row">
<div class="large-12 columns maxwell-pricing">
    
        
  
    
      <table cellspacing="0">
  <thead>
   
      <tr>
      <th style="padding:0px !important;"><ul class="tabs" data-tabs id="fk-tabs" style="border:0px;">
  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Starter</a></li>
  <li class="tabs-title popular"><a href="#panel2">Profressional</a></li>
        <li class="tabs-title"><a href="#panel3">Enterprise</a></li>
</ul> </th></tr>
  </thead>
  <tbody>
    <tr class="tabs-content" data-tabs-content="fk-tabs">
      <td class="fk-features">
      
           <ul class="pricing-table">
               <li></li>
            <li class="pricing-title pricing-feature-left">Features</li>
               
<?php if ( have_rows( 'pricing_table' ) ) : ?>
	<?php while ( have_rows( 'pricing_table' ) ) : the_row(); ?>
        <li class="fk-list-item pricing-feature-left"><strong><?php the_sub_field( 'feature_title' ); ?></strong>
<?php the_sub_field( 'feature_description' ); ?></li>      
		
		
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
   
      
            </ul> 
     
        
        
    </td>
      <td class="fk-feature tabs-panel is-active" id="panel1">
           <ul class="pricing-table starter">
               <li></li>
               <li class="fk-list-item pricing-title">Starter</li>
<?php if ( have_rows( 'pricing_table' ) ) : ?>
    <?php while ( have_rows( 'pricing_table' ) ) : the_row(); ?>
               
        <?php if( get_field('starter_text') ): ?><?php the_sub_field( 'feature_title' ); ?><?php endif; ?>       
        
        <?php if( get_sub_field('starter_text') ): ?>
                <li class="fk-list-item pricing-feature"><div class="mobile-feature-title"><?php the_sub_field( 'feature_title' ); ?></div><?php the_sub_field( 'starter_text' ); ?></li>     
        <?php else: // field_name returned false ?>
            <li class="fk-list-item pricing-feature price-none">&nbsp;</li>
        <?php endif; ?>       

    <?php endwhile; ?>
    <?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>        

    

             
            </ul> 
      </td>
    <td class="fk-feature tabs-panel" id="panel2">
         <ul class="pricing-table">
             <li class="popular"><span class="most-pop">Most Popular</span></li>
                <li class="fk-list-item pricing-title popular">Professional</li>
             
             

<?php if ( have_rows( 'pricing_table' ) ) : ?>
    <?php while ( have_rows( 'pricing_table' ) ) : the_row(); ?>
               
        <?php if( get_field('professional_text') ): ?><?php the_sub_field( 'feature_title' ); ?><?php endif; ?>       
        
        <?php if( get_sub_field('professional_text') ): ?>
                <li class="fk-list-item pricing-feature popular"><div class="mobile-feature-title"><?php the_sub_field( 'feature_title' ); ?></div><?php the_sub_field( 'professional_text' ); ?></li>     
        <?php else: // field_name returned false ?>
            <li class="fk-list-item pricing-feature price-none">&nbsp;</li>
        <?php endif; ?>       

    <?php endwhile; ?>
    <?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>       
              
               
            </ul>   
      </td>
    <td class="fk-feature tabs-panel" id="panel3">
         <ul class="pricing-table enterprise">
             <li></li>
             <li class="fk-list-item pricing-title">Enterprise</li>
  
             <?php if ( have_rows( 'pricing_table' ) ) : ?>
    <?php while ( have_rows( 'pricing_table' ) ) : the_row(); ?>
               
        <?php if( get_field('enterprise_text') ): ?><?php the_sub_field( 'feature_title' ); ?><?php endif; ?>       
        
        <?php if( get_sub_field('enterprise_text') ): ?>
                <li class="fk-list-item pricing-feature"><div class="mobile-feature-title"><?php the_sub_field( 'feature_title' ); ?></div><?php the_sub_field( 'enterprise_text' ); ?></li>     
        <?php else: // field_name returned false ?>
            <li class="fk-list-item pricing-feature price-none">&nbsp;</li>
        <?php endif; ?>       

    <?php endwhile; ?>
    <?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>  
             
               
               
              
               
            </ul>   
      </td>
      
      
   
    
        
    </tr>
   
  </tbody>
</table>


<script>
	var toResizeDelay;
	function delayResize(){
		clearTimeout(toResizeDelay);
		toResizeDelay = setTimeout(function(){ ClearResize(); }, 150);
	}

	function ClearResize(){
		jQuery("ul.pricing-table > li").css("height", "auto");
	//	toResizeDelay = setTimeout(function(){ ActualResize(); }, 250);
		// 767 mob
		// 768 not mob
		if (jQuery(window).width() >= 768)
			ActualResize();
	}

	function ActualResize(){
		var $MaxChildCount = 0;	
		jQuery("ul.pricing-table").each(function( index ) {
			//console.log( index + ": " + $( this ).text() );
			if (jQuery(this).children().length > $MaxChildCount)
				$MaxChildCount = jQuery(this).children().length;	
		});	
		//console.log("$MaxChildCount:"+$MaxChildCount);
		for(i = 0; i < $MaxChildCount; i++){
			var $MaxChildHeight = 0;
			// 1-indexed
			jQuery("ul.pricing-table > li:nth-child("+(i+1)+")").each(function( index ) {
				$valA = jQuery(this).innerHeight();
				$valB = $MaxChildHeight;
				if( $valA > $valB){
					$MaxChildHeight = $valA;
				}
	//			$(this).html($(this).innerHeight() + " ("+i+") mh:"+$MaxChildHeight);
			});
			jQuery("ul.pricing-table > li:nth-child("+(i+1)+")").css("height", $MaxChildHeight+"px");
		}
	}
	jQuery(function() {
		ClearResize();
		jQuery(window).on('resize', function(){
			delayResize();
		});	
	});
</script>    
<?php endwhile; endif; ?>
<?php get_footer(); ?>

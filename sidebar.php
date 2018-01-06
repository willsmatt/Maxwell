<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>
        <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
hbspt.forms.create({
portalId: '2192240',
formId: 'f0678647-b5b9-476b-b150-2cf37d31237e',
    target:'#signup-form',
    css:''
});
</script>
   
    
    <div id="signup-wrapper" class="card">
        <div class="card-divider">
        <h6>Like what you're reading?</h6>
<p>Sign up to receive our blog updates and never miss a thing.</p>
    <div id="signup-form">
        
    </div>
        </div>
        </div>
	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
     
	<?php endif; ?>

</div>
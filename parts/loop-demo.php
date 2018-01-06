<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">



    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
        <?php if ( is_page('request-a-demo') ) { ?>
        <!-- [if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
             hbspt.forms.create({
               portalId: '2192240',
               formId: '825a101c-e704-42fa-8a32-7331dc6a3ffc',
               target:'#request-demo-form',
               css: ''
             });
            </script>
        <div id="request-demo-form">
            </div>
    <?php } ?>



	</section> <!-- end article section -->


</article> <!-- end article -->

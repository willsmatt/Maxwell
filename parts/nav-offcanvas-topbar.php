<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->


<div id="mybar" class="maxwell-main-nav" style="z-index:1;">
    
    <div class="top-bar large-12 columns" id="top-bar-menu">
        
        <div class="top-bar-left maxwell-mobile float-left">
            <ul class="menu">
                <li><a href="https://www.himaxwell.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/maxwell_logo.png"></a></li>
            </ul>
        </div>
        <div class="top-bar-left show-for-large maxwell-nav">
            <?php joints_top_nav(); ?>	
        </div>
        <div class="top-bar-right float-right show-for-large maxwell-nav">
            <ul class="menu">
                <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
                <li><a href="https://www.himaxwell.com/sign_in" target="_blank">Login</a></li>
            </ul>
        </div>
        <div class="top-bar-right maxwell-mobile float-right hide-for-large">
            <ul class="menu">
                <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
                <li><a data-toggle="off-canvas" class="maxwell-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        
    </div>
</div>
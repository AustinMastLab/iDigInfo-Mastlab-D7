<div id="topbar">
    <div class="container">                
                
        <div id="header" class="five columns">
		
        
            <div class="inner">
    
                <?php if ($site_name || $site_slogan): ?>
                <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                
                    <?php if ($site_name): ?>
                    <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">mast<span>lab</span></a>
                    </div>
                    <?php endif; ?>
                    <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                    Advancing Our Understanding of Biodiversity
                    </div>
                    
                
                </div>
                <?php endif; ?>
            </div>
        </div><!-- /#header -->
        
        
        <div id="headnav" class="ten columns">
        
        	 <div id="navigation" class="menu-header">
            <?php if ($page['header']) : ?>
                <?php print drupal_render($page['header']); ?>
                <?php else : ?>
                <?php 
				if (module_exists('i18n_menu')) {
				$main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
				} else { 
				$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
				} ?>
				<div class="content">
				<?php print drupal_render($main_menu_tree); ?>
                </div>
            <?php endif; ?>
            </div>
            
        </div><!-- /#header-right -->
        
    </div>   
</div>

<div id="featured">
<?php 
                 if(isset($node)) {
                    $nid = $node->nid;
                    $theImage = $page['content']['system_main']['nodes'][$nid]['#node'];
                    if($theImage !='') {
                        $picture = $theImage->field_header_image;
                    }
                    if ($picture) {
                        $finalPicture = $picture['und']['0']['filename'];
                    }
                    
                } else {
                    $finalPicture = '/sites/mastlab.org/themes/skeletontheme/images/default_banner.jpg';
                }
                if ($finalPicture) {
                echo '<img src="/sites/mastlab.org/files/'.$finalPicture.'" />';
                } else {
                echo '<img src="/sites/mastlab.org/themes/skeletontheme/images/default_banner.jpg" id="temp-banner" />';
                echo '<div id="cc-caption">Photo: <em>Proteaceae - Hakea</em> <a href="https://www.flickr.com/photos/48991563@N06/9795263875/in/photolist-iHdJ9j-fVA3cS-fVzVq5-fNouji-fNotTP-fNF55q-fVzs41-fVzhFV-fVzvjb-fVzHG4-dkcsPw-fNoCat-fNFmru-fVAbWp-fVA467-fVzYpU-fVzRNB-fVzMSk-fVASET-dkctnJ-dkcr1d-fVAzY9-dkcqLB-fVAsZs-fVAP3c-fVANRy-fVAvLw-fVAEew-fVB1X4-dkcrF1-fNFnMQ-fNoAkD-fNFdkA-fVAC27-fNoLt8-fNoR1e-dkcrYW-dkcpGZ-fNoPDx-fNoRUB-kGnVpr-fVAWPX-fVBd7G-fVAZNn-fVAXAM-fVAZv9-fVB6yb-fVBiqp-fVAN1V-fVB9TC/" target="_blank">Bill &amp; Mark Bell</a></div>';
                }
                ?>
</div>

<div id="wrap">
    <div class="container">
        
        
        
        <?php if ($page['sidebar_first']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="five columns">
            <?php print render($page['sidebar_first']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div id="content" class="six columns">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="content" class="eleven columns">
		<?php } else { ?>
        <div id="content" class="sixteen columns clearfix">    
        <?php } ?>
        
            <?php if ($messages): ?>
                <div id="messages">
                <?php print $messages; ?>
                </div><!-- /#messages -->
            <?php endif; ?>
        
            <div id="main">
            
                
            
                <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                
                <?php print render($title_prefix); ?>
                
                <?php if ($title): ?>
                <h1 class="title" id="page-title">
                  <?php print $title; ?>
                </h1>
                <?php endif; ?>
                
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
                <?php endif; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>
                
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
                
            </div>
        
        </div><!-- /#content -->
        
        <?php if ($page['sidebar_second']): ?>
        <!-- #sidebar-first -->
        <div id="sidebar-second" class="five columns">
            <?php print render($page['sidebar_second']); ?>
        </div><!-- /#sidebar-first -->
        <?php endif; ?>
        
        <div class="clear"></div>
        
        <?php if ($page['featured_left'] || $page['featured_right']): ?>
        <!-- #featured -->
        <div id="featured" class="sixteen columns clearfix">
            
            <?php if ($page['featured_left'] && $page['featured_right']) { ?>
            <div class="one_half">
            <?php print render($page['featured_left']); ?>
            </div>
            
            <div class="one_half last">
            <?php print render($page['featured_right']); ?>
            </div>
            <?php } else { ?>
                
            <?php print render($page['featured_left']); ?>
            <?php print render($page['featured_right']); ?>
            
            <?php } ?>
            
        </div><!-- /#featured -->
        <?php endif; ?>
        
	</div>
        
	<div id="footer" >
        <div class="container">
        	<div class="sixteen columns clearfix">
        
                <div class="sixteen columns">
                <?php if ($page['footer_first']): ?><?php print render($page['footer_first']); ?><?php endif; ?>
                
                <div class="clear"></div>
                
                <?php if ($page['footer']): print render($page['footer']); endif; ?>
                
                <div class="clear"></div>
                
                <div id="credits">
                <?php print(date('Y') . ' ');?>
                Austin Mast
                &nbsp;&nbsp;&nbsp; <a href="http://www.fsu.edu" target="_blank">Florida State University</a>, <a href="http://bio.fsu.edu/" target="_blank">Department of Biological Science</a>
                </div>
                
                <!--  -->
                
                </div>
                
        	</div>
        </div>
    </div>
    
</div> <!-- /#wrap -->
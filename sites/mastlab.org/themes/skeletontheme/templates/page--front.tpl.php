<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <div id="topbar">
    <div class="container">                
                
        <div id="header" class="five columns">
		
        
            <div class="inner">
    
                                <div id="name-and-slogan">
                
                                        <div id="site-name">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                    </div>
                                        <div id="site-slogan">
                    <?php print $site_slogan; ?>
                    </div>
                    
                
                </div>
                            </div>
        </div><!-- /#header -->
        
        
        <div id="headnav" class="ten columns">
        
        	 <div id="navigation" class="menu-header">
                              <div class="region region-header">
                                <?php 
				if (module_exists('i18n_menu')) {
				$main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
				} else { 
				$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
				} ?>
				<?php print drupal_render($main_menu_tree); ?>
                                </div>
                </div>
            
        </div><!-- /#header-right -->
        
    </div>   
</div>


<div class="region region-highlighted">
    
    <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    
</div>

   

        
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
        
            <?php if ($breadcrumb): ?>
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>
            
            <div id="main">
            
                
                
                
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
<div id="wrap">        
	<div id="footer" >
        <div class="container">
        	<div class="sixteen columns clearfix">
        
                <div class="one_third">
                <?php if ($page['footer_first']): ?><?php print render($page['footer_first']); ?><?php endif; ?>
                </div>
                
                <div class="one_third">
                <?php if ($page['footer_second']): ?><?php print render($page['footer_second']); ?><?php endif; ?>
                </div>
                
                <div class="one_third last">
                <?php if ($page['footer_third']): ?><?php print render($page['footer_third']); ?><?php endif; ?>
                </div>
        
                <div class="clear"></div>
                
                <?php if ($page['footer']): print render($page['footer']); endif; ?>
                
                <div class="clear"></div>
                
                <div id="credits">
                © 2014                 Austin Mast
                &nbsp;&nbsp;&nbsp; <a href="/web/20141202075733/http://www.fsu.edu/" target="_blank">Florida State University</a>, <a href="/web/20141202075733/http://bio.fsu.edu/" target="_blank">Department of Biological Science</a>
                </div>
        	</div>
        </div>
    </div>
    
</div> <!-- /#wrap -->
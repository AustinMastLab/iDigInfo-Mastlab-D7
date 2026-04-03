<?php
// $Id$
/**
 * @file
 * Output for main HTML page content.
 */
?>

<div id="container">
  <header id="container_header" class="container-16 section section-header clearfix" role="banner">
    <?php if ($site_name || $site_slogan || $logo): ?>
      <hgroup class="column grid-16">
        <?php if ($logo): ?>
          <a title="<?php print t('Home'); ?>" id="logo" rel="home" href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
        <?php endif; ?>
        <?php if ($site_name): ?>
          <h1 class="site-name"><a title="iDigInfo <?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>"><img src="/sites/idiginfo.org/themes/idiginfo/images/idiginfo_longtext.png" alt="<?php print $site_name; ?>" border="0" /></a></h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>
    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <nav id='main_nav' class='container-16'>
    <?php print render($page['navigation_tabs']); ?>
  </nav>

  <?php print render($page['highlighted']); ?>
  <div id="outermain">
    <div id="main" class="container-16 section section-main clearfix" role="main">
    
    <?php print render($page['staff_nav']); ?>
    
    <div id="content">
        <div class="inner">
        <?php print $messages; ?>
        <?php if ($tabs = render($tabs)): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <div id="main-content" class="clearfix">
        
        
<!-- ********** Start Slideshow ******** -->
<div class="slideshow-container">
	<div id="content-slideshow" class="clearfix">
		<div class="slideshow">
                   <!-- the actual images -->
		<ul class="clearfix">
                    <li id="main-post-1" onclick="location.href='news/director-attends-un-world-data-forum-medellin-colombia';" style="cursor: pointer; background:url(https://idiginfo.org/sites/idiginfo.org/files/un.jpg) top center no-repeat;" title="Director Attends UN World Data Forum in Medellin, Colombia" width="414" height="277"></li>
                    <li id="main-post-2" onclick="location.href='news/director-attends-iucn-world-conservation-congress-abu-dhabi-uae';" style="cursor: pointer; background:url(https://idiginfo.org/sites/idiginfo.org/files/IUCN.jpg) top center no-repeat;" title="Director Attends IUCN World Conservation Congress in Abu Dhabi, U.A.E." width="414" height="277"></li>
		    <li id="main-post-3" onclick="location.href='news/director-attends-united-nations-environment-assembly-nairobi-kenya';" style="cursor: pointer; background:url(/sites/idiginfo.org/themes/idiginfo/images/un-news.jpg) top center no-repeat;" title="Director Attends United Nations Environment Assembly in Nairobi, Kenya" width="414" height="277"></li>
		    <li id="main-post-4" onclick="location.href='news/institute-hosts-inaugural-meeting-advancing-participatory-sciences-florida';" style="cursor: pointer; background:url(/sites/idiginfo.org/themes/idiginfo/images/apsf-news.jpg) top center no-repeat;" title="Institute Hosts inaugural Meeting for Advancing Participatory Sciences in Florida" width="414" height="277"></li>
		</ul>

		</div>
		<!-- the text items -->
		<ul class="slideshow-nav">
                    <li id="post-1" class="clearfix on"><a href="#main-post-1" title="Director Attends UN World Data Forum in Medellin, Colombia">Director Attends UN World Data Forum in Medellin, Colombia</a></li>
                    <li id="post-2" class="clearfix"><a href="#main-post-2" title="Director Attends IUCN World Conservation Congress in Abu Dhabi, U.A.E.">Director Attends IUCN World Conservation Congress in Abu Dhabi, U.A.E.</a></li>
                    <li id="post-3" class="clearfix"><a href="#main-post-3" title="Director Attends United Nations Environment Assembly in Nairobi, Kenya">Director Attends United Nations Environment Assembly in Nairobi, Kenya</a></li>
		    <li id="post-4" class="clearfix"><a href="#main-post-4" title="Institute Hosts inaugural Meeting for Advancing Participatory Sciences in Florida">Institute Hosts inaugural Meeting for Advancing Participatory Sciences in Florida</a></li>
		</ul>
		<div class="slideme"></div>

	</div>

</div>
<!-- ########### End Slideshow ############ -->
        
        
        <div style="width: 278px; margin-left: 640px; padding: 0;" >
        <?php print render($page['content']); ?>
    	</div>
	</div>
      <?php print $feed_icons; ?>
    </div>
    </div>
    <?php if ($sidebar_first = render($page['sidebar_first'])): ?>
      <div id="sidebar-first" class="sidebar <?php print $sidebar_first_grid_classes; ?>">
        <?php print $sidebar_first; ?>
      </div>
    <?php endif; ?>
    <?php if ($sidebar_second = render($page['sidebar_second'])): ?>
      <div id="sidebar-second" class="sidebar <?php print $sidebar_second_grid_classes; ?>">
        <?php print $sidebar_second; ?>
      </div>
    <?php endif; ?>
  </div>
  </div> <!-- End outermain -->
  <div id="subsection">
  	<div id="columns">
  	<div id="col1" class="col start">
 		<?php print render($page['home_one']); ?>
  	</div>
  	<div id="col2" class="col">
  		<?php print render($page['home_two']); ?>
  	</div>
  	<div id="col3" class="col end">
  		<?php print render($page['home_three']); ?>
  	</div>
  	<br clear="all" />
  	</div>
  	
  </div>
  <?php print $breadcrumb; ?>
  <footer id="footer" class="section section-footer clearfix">
    <div class="container-16">
      <?php print render($page['footer']); ?>
      <?php print render($page['copyright']); ?>
    </div>
  </footer>
</div>
<?php if ($collapsible = render($page['collapsible'])): ?>
  <section id="section-collapsible" class="section section-collapsible clearfix">
    <h2 class="collapsible-toggle"><a href="#"><?php print t('Toggle collapsible region'); ?></a></h2>
    <?php print $collapsible; ?>
  </section>
<?php endif; ?>


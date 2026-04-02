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
    
    <div id="content" class="column grid-12">
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
        <div id="main-content" class="clearfix" style="width: 600px;">
          <?php print render($page['content']); ?>
		</div>
		</div>
      <?php print $feed_icons; ?>
    </div>
    
    <?php if ($sidebar_first = render($page['sidebar_first'])): ?>
      <div id="sidebar-first" class="grid-4 omega">
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
  <?php print $breadcrumb; ?>
  <footer id="footer" class="section section-footer clearfix" role="footer">
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

<?php
// $Id$
/**
 * @file
 * Output for main HTML page wrapper.
 */
?><!DOCTYPE html>
<html version="HTML+RDFa 1.0" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" xmlns="http://www.w3.org/1999/xhtml"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>

<div id="headerContainer">
  <div id="headerRule">
    <div id="header">
    <a href="http://www.fsu.edu/"><img src="<?php echo base_path() . path_to_theme(); ?>/images/fsuLogo.png" alt="The Florida State University" id="fsuLogo" /></a>
    
    <!--<form class="headerSearchForm" method="get" onsubmit="return FSU_search(type.value, FSU_URLEncode(keywords.value));" action="">
      <div id="searchBar">
        <select class="headerSearchSelect" name="type">
          <option selected="selected" value="GOOGLE">Web</option>
          <option value="PHFST">Student Directory</option>
          <option value="PHF">Faculty &amp; Staff Directory</option>
          <option value="DEPT">Departments &amp; Services</option>
        </select>
        <input class="headerSearchBox" type="text" onclick="this.value=''" value="Search" size="20" name="keywords"/>
        <input class="headerSubmitSearch" type="image" alt="Submit Search" src="img/fsuSearch2.gif" name="fsuSearch" />
      </div>
    </form>-->

    </div>
  </div>
</div>



  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>

# iDigInfo-Mastlab-D7

Drupal 7 multisite repository for Austin Mast Lab (iDigInfo and mastlab.org).

This repository tracks only the custom code and configuration for the two sites:
- sites/idiginfo.org
- sites/mastlab.org

## Setup Instructions

1. Clone this repo into your Drupal root (or move the contents into the sites/ folder):
   git clone https://github.com/AustinMastLab/iDigInfo-Mastlab-D7.git /path/to/drupal/sites

2. Install Drupal 7 core (not included):
   - Download Drupal 7.103 (or compatible version)
   - Extract it so the structure looks like:
     drupal/
     ├── index.php
     ├── includes/
     ├── modules/
     ├── themes/
     ├── sites/          ← provided by this repo
     ├── .htaccess
     └── current → drupal-7.103 (optional symlink)

3. Restore missing libraries and modules (ignored to keep repo small):
   - Apache Solr + SolrPhpClient
   - Date suite (full)
   - Flexslider + Flexslider Views Slideshow
   - Fontyourface + all submodules
   - Link, References, Insert, Page Title, Google Analytics, Securepages, Menu Target
   - Zen base theme

4. Create settings files (never committed):
   - Copy sites/default/default.settings.php → sites/idiginfo.org/settings.php
   - Copy sites/default/default.settings.php → sites/mastlab.org/settings.php
   - Edit database, base_url, file paths in each

5. Create files directories:
   mkdir -p sites/idiginfo.org/files sites/mastlab.org/files
   chmod -R 775 sites/*/files

6. Run the included update script:
   cd sites
   bash update-multisite.sh

## What is included
- Custom themes (idiginfo, skeletontheme, sky overrides)
- Site-specific modules and template overrides
- sites.php and update-multisite.sh

## What is deliberately NOT included
- Drupal core
- Large libraries and most contrib modules
- Uploaded files (files/, private/)

For questions, contact the Mast Lab team.

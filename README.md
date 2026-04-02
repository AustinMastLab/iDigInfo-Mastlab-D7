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

3. Restore missing modules and libraries using Drush:
   - From the Drupal root, run:
     drush make sites/all/iDigInfo.make --no-core --contrib-destination=sites/all

4. Create settings files:
   - Copy sites/default/default.settings.php → sites/idiginfo.org/settings.php
   - Copy sites/default/default.settings.php → sites/mastlab.org/settings.php
   - Edit database, base_url, and file paths in each settings.php

5. Create files directories:
   mkdir -p sites/idiginfo.org/files sites/mastlab.org/files
   chmod -R 775 sites/*/files

6. Run the update script:
   cd sites
   bash update-multisite.sh

## How to use the Drush make file

After placing Drupal core:
drush make sites/all/iDigInfo.make --no-core --contrib-destination=sites/all

This will download Apache Solr, Date, Flexslider, Fontyourface, Views, Zen theme, and other modules into sites/all/.

## What is included
- Custom themes (idiginfo, skeletontheme)
- Site-specific modules and overrides
- sites.php, update-multisite.sh, iDigInfo.make

## What is NOT included
- Drupal core
- Large libraries and most contrib modules (restored with Drush)
- Uploaded files (files/, private/)

For questions, contact the Mast Lab team.

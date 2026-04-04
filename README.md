### 1. Instructions

```markdown
# iDigInfo-Mastlab-D7

Drupal 7 site for the Institute for Digital Information and Scientific Communication (iDigInfo) and Mast Lab.

## Repository Structure

This repository contains **only custom code**:
- Custom themes (`sites/idiginfo.org/themes/idiginfo/` and `sites/mastlab.org/themes/`)
- Configuration files
- `.gitignore` (properly excludes contrib modules and libraries)

**Contrib modules and libraries are NOT stored in Git** — they are ignored to keep the repository lightweight.

## How to Set Up the Site

### 1. Clone the repository

```bash
git clone https://github.com/AustinMastLab/iDigInfo-Mastlab-D7.git
cd iDigInfo-Mastlab-D7
```

### 2. Set up the Drupal core

```bash
# Make sure you have a clean Drupal 7.103 core
ln -s drupal-7.103 current   # if not already present
```

### 3. Copy production `sites/` directory (Recommended)

The easiest and most reliable way is to copy the `sites/` folder from your working production server:

```bash
# From your local or server
rsync -av user@production-server:/path/to/production/sites/ ./sites/
```

This brings all modules, libraries, settings.php, and files with it.

### 4. Fix permissions

```bash
sudo chown -R www-data:www-data sites/*/files
sudo chown -R www-data:www-data sites/*/private
sudo chmod -R 775 sites/*/files
```

### 5. Update settings.php (if needed)

Edit `sites/idiginfo.org/settings.php` (and `sites/mastlab.org/settings.php`) with the correct database credentials for your environment.

### 6. Clear caches

```bash
rm -rf sites/*/files/cache/* 2>/dev/null
rm -rf sites/*/cache/* 2>/dev/null
```

### 7. Access the site

Point your web server to `/data/web/drupal/current` (or the equivalent path).

Main site: `http://idiginfo.test` (or your domain)

---

## Git Workflow

### On Local Machine (Development)
- Make changes only to custom themes
- Commit and push:

```bash
git add sites/idiginfo.org/themes/idiginfo/
git add sites/mastlab.org/themes/
git commit -m "Update custom theme changes"
git push
```

### On Production Server
To update production:

```bash
cd /data/web/drupal
git pull origin main

# Fix permissions
sudo chown -R idiginfo:www-data .
sudo find . -type d -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;

# Clear caches
rm -rf sites/*/files/cache/* 2>/dev/null || true
rm -rf sites/*/cache/* 2>/dev/null || true
```

---

## Important Notes

- Never commit `sites/all/modules/contrib/` or `sites/all/libraries/`
- Always keep a working copy of the `sites/` directory from production for easy setup
- The `.gitignore` is configured to protect against committing large vendor directories


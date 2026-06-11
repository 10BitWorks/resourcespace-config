<?php
###############################
## ResourceSpace
## Local Configuration Script
###############################

# All custom settings should be entered in this file.
# Options may be copied from config.default.php and configured here.

# MySQL database settings
$mysql_server = 'resourcespace-db';
$mysql_username = 'rs_user';
$mysql_password = 'a248e30d104ab87f';
$mysql_db = 'resourcespace';

# Base URL of the installation
$baseurl = 'https://marketing.10bitworks.org';

# Email settings
$email_notify = 'support+resourcespace@10bitworks.org';
$email_from = 'support+resourcespace@10bitworks.org';
# Secure keys
$scramble_key = '289f94a1493d765a24ee58184a8f45bed6249edc16358e32feafa39688572e9b';
$api_scramble_key = '21d405d29119973d46fd4b65b20ee347f53fbb2096257e9dfd30c9523febd7c5';

# Paths
$imagemagick_path = '/usr/bin';
$ghostscript_path = '/usr/bin';
$ffmpeg_path = '/usr/bin';
$exiftool_path = '/usr/bin';
$pdftotext_path = '/usr/bin';

$applicationname = 'ResourceSpace';
$homeanim_folder = 'filestore/system/slideshow_f99ca72a13641bd';

/*

New Installation Defaults
-------------------------

The following configuration options are set for new installations only.
This provides a mechanism for enabling new features for new installations without affecting existing installations (as would occur with changes to config.default.php)

*/
                                
// Set imagemagick default for new installs to expect the newer version with the sRGB bug fixed.
$imagemagick_colorspace = "sRGB";

$contact_link=false;
$themes_simple_view=true;

$stemming=true;
$case_insensitive_username=true;
$user_pref_user_management_notifications=true;

$use_zip_extension=true;
$collection_download=true;

$ffmpeg_preview_force = true;
$ffmpeg_preview_extension = 'mp4';
$ffmpeg_preview_options = '-f mp4 -b:v 1200k -b:a 64k -ac 1 -c:v libx264 -pix_fmt yuv420p -profile:v baseline -level 3 -c:a aac -strict -2';

$daterange_search = true;
$upload_then_edit = true;

$purge_temp_folder_age=90;
$filestore_evenspread=true;

$comments_resource_enable=true;

$api_upload_urls = array();

$use_native_input_for_date_field = true;
$resource_view_use_pre = true;

$sort_tabs = false;
$maxyear_extends_current = 5;
$thumbs_display_archive_state = true;
$file_checksums = true;
$hide_real_filepath = true;
$annotate_enabled = true;

$plugins[] = "brand_guidelines";
$plugins[] = "wordpress_sso";

# WordPress SSO Configuration
$wordpress_sso_url = 'https://10bitworks.org';
# Using a shared secret read from environment to avoid hardcoding in git
$wordpress_sso_secret = getenv('WP_SSO_SECRET') ?: '10bitworks_sso_fallback_secret_change_me';
$wordpress_sso_auto_create = true;
$wordpress_sso_auto_approve = true;
# The default usergroup ID for auto-created users (2 usually corresponds to General Users)
$wordpress_sso_auto_create_group = 2;

# Allow standard login page alongside SSO
$wordpress_sso_allow_standard_login = true;

# Enable debug logging to troubleshoot CSRF
$debug_log = true;
$debug_log_location = "/var/www/html/filestore/tmp/debug.txt";

# Trust reverse proxy forwarding headers for CSRF/CORS checks
$CORS_whitelist = array('https://marketing.10bitworks.org');
# Enable reverse proxy IP detection
$reverse_proxy_header = 'HTTP_X_FORWARDED_FOR';
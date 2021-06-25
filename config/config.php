<?php

/**
 * SquirrelMail Configuration File
 * Created using the configure script, conf.pl
 */

$config_version = '1.5.0';
$config_use_color = 2;

$org_name      = "SquirrelMail";
$org_logo      = SM_PATH . 'images/sm_logo.png';
$org_logo_width  = '308';
$org_logo_height = '111';
$org_title     = "SquirrelMail";
$signout_page  = '';
$frame_top     = '_top';

$provider_uri     = '';

$provider_name     = '';

$motd = "";

$squirrelmail_default_language = 'en_US';
$default_charset          = 'iso-8859-1';
$show_alternative_names   = false;
$aggressive_decoding   = false;
$lossy_encoding        = false;

$domain                 = 'example.com';
$imapServerAddress      = 'localhost';
$imapPort               = 993;
$useSendmail            = false;
$smtpServerAddress      = 'localhost';
$smtpPort               = 25;
$sendmail_path          = '/usr/sbin/sendmail';
$sendmail_args          = '-i -t';
$pop_before_smtp        = false;
$pop_before_smtp_host   = '';
$imap_server_type       = 'dovecot';
$invert_time            = false;
$optional_delimiter     = 'detect';
$encode_header_key      = '';

$default_folder_prefix          = '';
$trash_folder                   = 'INBOX.Trash';
$sent_folder                    = 'INBOX.Sent';
$draft_folder                   = 'INBOX.Drafts';
$default_move_to_trash          = true;
$default_move_to_sent           = true;
$default_save_as_draft          = true;
$show_prefix_option             = false;
$list_special_folders_first     = true;
$use_special_folder_color       = true;
$auto_expunge                   = true;
$default_sub_of_inbox           = true;
$show_contain_subfolders_option = false;
$default_unseen_notify          = 2;
$default_unseen_type            = 1;
$auto_create_special            = true;
$delete_folder                  = false;
$noselect_fix_enable            = false;

$data_dir                 = '/var/local/squirrelmail/data/';
$attachment_dir           = '/var/local/squirrelmail/attach/';
$dir_hash_level           = 0;
$default_left_size        = '150';
$force_username_lowercase = false;
$default_use_priority     = true;
$hide_sm_attributions     = false;
$default_use_mdn          = true;
$edit_identity            = true;
$edit_name                = true;
$hide_auth_header         = false;
$disable_thread_sort      = false;
$disable_server_sort      = false;
$allow_charset_search     = true;
$allow_advanced_search    = 0;

$time_zone_type           = 0;

$config_location_base     = '';

$disable_plugins          = false;
$disable_plugins_user     = '';


$user_theme_default = 0;
$user_themes[0]['PATH'] = 'none';
$user_themes[0]['NAME'] = 'Default';
$user_themes[1]['PATH'] = SM_PATH . 'css/blue_gradient/';
$user_themes[1]['NAME'] = 'Blue Options';

$icon_theme_def = 1;
$icon_theme_fallback = 3;
$icon_themes[0]['PATH'] = 'none';
$icon_themes[0]['NAME'] = 'No Icons';
$icon_themes[1]['PATH'] = 'template';
$icon_themes[1]['NAME'] = 'Template Default Icons';
$icon_themes[2]['PATH'] = SM_PATH . 'images/themes/default/';
$icon_themes[2]['NAME'] = 'Default Icon Set';
$icon_themes[3]['PATH'] = SM_PATH . 'images/themes/xp/';
$icon_themes[3]['NAME'] = 'XP Style Icons';

$templateset_default = 'default';
$templateset_fallback = 'default';
$rpc_templateset = 'default_rpc';
$aTemplateSet[0]['ID'] = 'default';
$aTemplateSet[0]['NAME'] = 'Default';
$aTemplateSet[1]['ID'] = 'default_advanced';
$aTemplateSet[1]['NAME'] = 'Advanced';

$default_fontsize = '';
$default_fontset = '';

$fontsets = array();
$fontsets['serif'] = 'serif';
$fontsets['verasans'] = 'bitstream vera sans,verdana,sans-serif';
$fontsets['comicsans'] = 'comic sans ms,sans-serif';
$fontsets['sans'] = 'helvetica,arial,sans-serif';
$fontsets['tahoma'] = 'tahoma,sans-serif';

$default_use_javascript_addr_book = false;
$addrbook_dsn = '';
$addrbook_table = 'address';

$prefs_dsn = '';
$prefs_table = 'userprefs';
$prefs_user_field = 'user';
$prefs_user_size = 128;
$prefs_key_field = 'prefkey';
$prefs_key_size = 64;
$prefs_val_field = 'prefval';
$prefs_val_size = 65536;

$addrbook_global_dsn = '';
$addrbook_global_table = 'global_abook';
$addrbook_global_writeable = false;
$addrbook_global_listing = false;

$abook_global_file = '';
$abook_global_file_writeable = false;

$abook_global_file_listing = true;

$abook_file_line_length = 2048;

$no_list_for_subscribe = false;
$smtp_auth_mech        = 'none';
$smtp_sitewide_user    = '';
$smtp_sitewide_pass    = '';
$imap_auth_mech        = 'login';
$use_imap_tls          = 1;
$use_smtp_tls          = 0;
$display_imap_login_error = false;
$session_name          = 'SQMSESSID';
$only_secure_cookies     = true;
$disable_security_tokens = false;
$check_referrer          = '';
$use_transparent_security_image = true;

$use_iframe = false;
$ask_user_info = true;
$use_icons = true;

$use_php_recode = false;
$use_php_iconv = false;

$buffer_output = false;

$allow_remote_configtest = false;
$secured_config = true;
$sq_https_port = 443;
$sq_ignore_http_x_forwarded_headers = true;
$sm_debug_mode = SM_DEBUG_MODE_OFF;


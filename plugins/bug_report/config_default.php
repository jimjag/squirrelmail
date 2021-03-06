<?php
/**
 * Bug Report plugin - default configuration file
 *
 * This file contains default Bug Report plugin configuration options.
 * Plugin's site configuration should be stored in config/bug_report_config.php
 * or plugins/bug_report/config.php file.
 *
 * @copyright 2005-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: config_default.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package plugins
 * @subpackage bug_report
 */

/**
 * Admin email
 * @global string $bug_report_admin_email
 */
$bug_report_admin_email = '';

/**
 * Controls availability of bug_report plugin to end users.
 * If option is set to false, only interface admins can use 
 * bug_report plugin. If option is set to true and admin email
 * is set, bug_report plugin can be used by other interface 
 * users. Information about setting administrative users can be
 * found in plugins/bug_report/README 
 * @global boolean $bug_report_allow_users
 */
$bug_report_allow_users = false;

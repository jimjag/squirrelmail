<?php

/**
 * Administrator plugin - Setup script
 *
 * Plugin allows remote administration.
 *
 * @author Philippe Mingo
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: setup.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package plugins
 * @subpackage administrator
 */

/**
 * Init the plugin
 * @access private
 */
function squirrelmail_plugin_init_administrator() {
    global $squirrelmail_plugin_hooks;

    $squirrelmail_plugin_hooks['optpage_register_block']['administrator'] =
        'squirrelmail_administrator_optpage_register_block';
}

/**
 * Register option block
 * @access private
 */
function squirrelmail_administrator_optpage_register_block() {
    /** add authentication functions */
    include_once(SM_PATH . 'plugins/administrator/auth.php');

    if ( adm_check_user() ) {
        global $optpage_blocks;

        $optpage_blocks[] = array(
            'name' => _("Administration"),
            'url'  => SM_PATH . 'plugins/administrator/options.php',
            'desc' => _("This module allows administrators to manage SquirrelMail main configuration remotely."),
            'js'   => false
            );
    }
}

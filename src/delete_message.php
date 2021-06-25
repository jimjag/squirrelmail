<?php

/**
 * delete_message.php
 *
 * Deletes a meesage from the IMAP server
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: delete_message.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 */

define('PAGE_NAME', 'delete_message');

/**
 * Include the SquirrelMail initialization file.
 */
include('../include/init.php');
error_box('delete_message.php script is obsolete since 1.5.1.');
$oTemplate->display('footer.tpl');

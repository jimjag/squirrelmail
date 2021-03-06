<?php

/**
 * addrbook_popup.php
 *
 * Frameset for the JavaScript version of the address book.
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: addrbook_popup.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 * @subpackage addressbook
 */

/** This is the addrbook_popup page */
define('PAGE_NAME', 'addrbook_popup');

/**
 * Include the SquirrelMail initialization file.
 */
include('../include/init.php');

displayHtmlHeader($org_title .': '. _("Addresses"), '', false, true);

$oTemplate->display('addressbook_popup.tpl');



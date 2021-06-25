<?php

/**
 * index.php
 *
 * This file simply takes any attempt to view source files and sends those
 * people to the login screen. At this point no attempt is made to see if the
 * person is logged in or not.
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: index.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package plugins
 * @subpackage spamcop
 */

header('Location: ../index.php');

?>
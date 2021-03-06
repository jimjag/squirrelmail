<?php

/**
  * SquirrelMail Test Plugin
  * @copyright 2006-2021 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: functions.php 14886 2021-02-05 19:29:03Z pdontthink $
  * @package plugins
  * @subpackage test
  */

/**
  * Add link to menu at top of content pane
  *
  * @return void
  *
  */
function test_menuline_do() {

    global $oTemplate, $nbsp;
    $output = makeInternalLink('plugins/test/test.php', 'Test', 'right')
            . $nbsp . $nbsp;
    return array('menuline' => $output);

}



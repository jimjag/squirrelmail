<?php
/**
 * read_message_priority.php
 *
 * Tempalte to return the message priority
 * 
 * The following variables are available in this template:
 *      $message_priority - Priority setting as set in the message.
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: read_message_priority.tpl 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 * @subpackage templates
 */

/** add required includes **/
include_once(SM_PATH . 'templates/util_read.php');

/** extract template variables **/
extract($t);

/** Begin template **/
echo priorityStr($message_priority);
?>
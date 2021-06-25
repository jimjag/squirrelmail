<?php
/**
 * compose_newwin_close.tpl
 *
 * Description
 * 
 * The following variables are available in this template:
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: compose_newwin_close.tpl 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 * @subpackage templates
 */

/** add required includes **/

/** extract template variables **/
extract($t);

/** Begin template **/
?>
<div class="compose">
<table class="close" cellspacing="0">
 <tr>
  <td>
   <input type="button" value="<?php echo _("Close"); ?>" onclick="self.close()" />
  </td>
 </tr>
</table>
</div>
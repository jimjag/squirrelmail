<?php
/**
 * empty_foler.tpl
 *
 * Message displayed when the folder is empty
 * 
 * There are no variables available to this template.
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: empty_folder.tpl 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 * @subpackage templates
 */
 
// Get template variables
extract($t);
?>
<div class="sqm_emptyFolderWrapper">
 <table class="sqm_emptyFolder" cellspacing="1">
  <tr>
   <td>
    <em><?php echo _("THIS FOLDER IS EMPTY"); ?></em>
   </td>
  </tr>
 </table>
</div>
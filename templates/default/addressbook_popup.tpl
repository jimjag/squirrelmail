<?php
/**
 * addressbook_popup.tpl
 *
 * Description
 * 
 * The following variables are available in this template:
 *
 * @copyright 1999-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: addressbook_popup.tpl 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 * @subpackage templates
 */

/** add required includes **/

/** extract template variables **/
extract($t);

/** Begin template **/
?>
<frameset rows="95,*" border="0">
    <frame name="abookmain"
           marginwidth="0"
           scrolling="no"
           border="0"
           src="addrbook_search.php?show=form" />
    <frame name="abookres"
           marginwidth="0"
           border="0"
           src="addrbook_search.php?show=blank" />
</frameset>

</html>


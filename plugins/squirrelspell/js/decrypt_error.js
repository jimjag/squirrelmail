/**
 * decrypt_error.js
 *
 * Some client-side form-checks. Trivial stuff.
 *
 * @author Konstantin Riabitsev <icon at duke.edu>
 * @copyright 2001-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: decrypt_error.js 14886 2021-02-05 19:29:03Z pdontthink $
 */

function AYS(){
  if (document.forms[0].delete_words.checked && document.forms[0].old_key.value){
    alert (ui_candel);
    return false;
  }
  
  if (!document.forms[0].delete_words.checked && !document.forms[0].old_key.value){
    alert(ui_choice);
    return false;
  }
  if (document.forms[0].delete_words.checked)
    return confirm(ui_willdel);
  return true;
}
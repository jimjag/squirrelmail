<?php

/**
 * Name:   Spice of Life
 * Date:   October 20, 2001
 * Comment Generates random colors for each frame,
 *         featuring either a dark or light background.
 *
 * @author Jorey Bump
 * @copyright 2000-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: spice_of_life.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package squirrelmail
 * @subpackage themes
 */

/** Prevent direct script loading */
if (isset($_SERVER['SCRIPT_FILENAME']) && $_SERVER['SCRIPT_FILENAME'] == __FILE__) {
    die();
}

/** light(1) or dark(0) background? **/
$bg = mt_rand(0,1);

/** range delimiter **/
$bgrd = $bg * 128;

for ($i = 0; $i <= 16; $i++) {
    /** background/foreground toggle **/
    if ($i == 0 or $i == 3 or $i == 4 or $i == 5 or $i == 9 or $i == 10 or $i == 12 or $i == 16) {
        /** background **/
        $cmin = 0 + $bgrd;
        $cmax = 127 + $bgrd;
    } else {
        /** text **/
        $cmin = 128 - $bgrd;
        $cmax = 255 - $bgrd;
    }

    /** generate random color **/
    $r = mt_rand($cmin,$cmax);
    $g = mt_rand($cmin,$cmax);
    $b = mt_rand($cmin,$cmax);

    /** set array element as hex string with hashmark (for HTML output) **/
    $color[$i] = sprintf('#%02X%02X%02X',$r,$g,$b);
}

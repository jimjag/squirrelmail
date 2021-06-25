<?php

/**
 * Sample Fortune plugin configuration file
 *
 * Configuration defaults to /usr/games/fortune with short quotes
 *
 * @copyright 2004-2021 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: config_sample.php 14886 2021-02-05 19:29:03Z pdontthink $
 * @package plugins
 * @subpackage fortune
 */

/**
 * Command that is used to display fortune cookies
 * @global string $fortune_command
 * @since 1.5.2
 */
$fortune_command = '/usr/games/fortune -s';

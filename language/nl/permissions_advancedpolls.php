<?php
/**
 *
 * Advanced Polls [Dutch]
 *
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 * @author Translation by Beun12 (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1466206) & </Solidjeuh> (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1544706)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
 * EXTENSION-DEVELOPERS PLEASE NOTE
 *
 * You are able to put your permission sets into your extension.
 * The permissions logic should be added via the 'core.permissions' event.
 * You can easily add new permission categories, types and permissions, by
 * simply merging them into the respective arrays.
 * The respective language strings should be added into a language file, that
 * start with 'permissions_', so they are automatically loaded within the ACP.
 */

// User Permissions
$lang = array_merge($lang, array(
	'ACL_F_SEEVOTERS'	=> 'Kan stemmers van de peilingen bekijken',
	'ACL_M_SEEVOTERS'	=> 'Kan stemmers van de peilingen bekijken',
));

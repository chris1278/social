<?php
/**
*
* Social Network Icons extension for the phpBB Forum Software package.
*
* @copyright (c) 2019 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	// SETTINGS
	'ACP_SOCIAL_ICONS_PERMISSION_BEFORE'		=> 'Im <b>ACP/Berechtigungen</b> kann in den ',
	'ACP_SOCIAL_ICONS_PERMISSION_AFTER'			=> ' unter <b>Diverses</b> einstellt werden, wer die Social Icons Links sehen darf.',
	'ACP_SOCIAL_ICONS_USERS_PERMISSIONS'		=> 'Benutzerrechten',
	'ACP_SOCIAL_ICONS_GROUPS_PERMISSIONS'		=> 'Gruppenrechten',
	'ACP_SOCIAL_ICONS'							=> 'Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE'				=> 'Einstellungen für Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE_EXPLAIN'		=> 'Hier Können Sie die Einstellungen für die Extension Social Media Icons vornehmen.',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE'			=> 'Link-Einstellungen für Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE_EXPLAIN'	=> 'Hier können Sie die Verlinkungen für die Extension Social Media Icons vornehmen.',
	'ACP_SOCIAL_ICONS_SETTINGS'					=> 'Alg.-Einstellungen',
	'ACP_SOCIAL_ICONS_LINKS_SETTINGS'			=> 'Link-Einstellungen',
	'SOCIAL_ICONS_ENABLE'						=> 'Social Media Icons aktivieren',
	'SOCIAL_ICONS_ENABLE_EXPLAIN'				=> 'Wenn deaktiviert, wird die Extension Social Media Icons abgeschaltet, ohne die Extension zu deaktivieren.<br><br>Standard: "JA"',
	'SOCIAL_ICONS_POSITION'						=> 'Position der Social Media Icons',
	'SOCIAL_ICONS_POSITION_EXPLAIN'				=> 'Bestimmen Sie hier wo die Social Media Icons angezeigt werden sollen.<br><br>Standard: "Unter der Statistikanzeige"',
	'SOCIAL_ICONS_FORUMLIST_BEFORE'				=> 'Über der Navbar',
	'SOCIAL_ICONS_FORUMLIST_AFTER'				=> 'Unter der Navbar',
	'SOCIAL_ICONS_ONLINE_LIST_BEFORE'			=> 'Über der Statistikanzeige',
	'SOCIAL_ICONS_STATISTICS_AFTER'				=> 'Unter der Statistikanzeige',
	'SOCIAL_ICONS_IN_NAVBAR'					=> 'Innerhalb der Navbar als Menü',
	'SOCIAL_ICONS_IN_HEADER'					=> 'Zeigt die Icon´s im Headerbereich an',
	'SOCIAL_ICONS_UPDATE'						=> 'Social Media Icons Einstellungen geändert.',
	'SHOW_SOCIAL_ICONS_ALL'						=> 'Zeige Soicial Media Icons überall',
	'SHOW_SOCIAL_ICONS_ALL_EXPLAIN'				=> 'Zeigt Social Media Icons auf allen Positionen gleichzeitig an. Dies dient zu Testzwecken.<br><br>Standard: "Nein"',
	'SOCIAL_ICONS_DISABLED'						=> 'Die Extension "Social Media Icons" ist deaktiviert!',
	'SHOW_SOCIAL_ICONS_ALL_ALARM'				=> 'Achrung! Sie haben im moment die Option "Zeige Soicial Media Icons überall" aktiv. Denken Sie daran nach dem testen diese wieder abzuschalten.<br> Die Option ist nicht für dauereinsatz gedacht.',
	'ICONS_HEADER_INDEX'						=> 'Die Header-Icon´s auf allen Seiten anzeigen',
	'ICONS_HEADER_INDEX_EXPLAIN'				=> 'Zeigt die Icons auf allen Seiten durchgehend an. Ansonsten werden die Icons nur auf der Index Seite angezeigt. <br><br> Nur für die Option "Zeigt die Icon´s im Header" <br><br>Standard: nicht aktiv',
	'ACTIV'										=> 'Aktiv',
	'NOT_ACTIV'									=> 'Nicht aktiv',
	'ICONS_HEADER_INDEX_INFO'					=> '<br><br><b>Um diese einstellung nutzen zu können,<br> mus als Position "Zeigt die Icon´s im Header" <br>ausgewählt werden.</b>',


	// Permission
	'ACL_U_VIEW_SOCIAL_ICONS'					=> 'Kann die Social Media Einstellungen sehen',

	// INFO
	'SOCIAL_ICONS_VERSION_COPY'					=> 'phpBB Extension - Social Media Icons- Version %s - Powered by Chris1278',

));
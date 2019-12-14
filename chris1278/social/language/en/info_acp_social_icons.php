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
	'ACP_SOCIAL_ICONS_PERMISSION_BEFORE'		=> 'In <b>ACP/Permissions</b> into the ',
	'ACP_SOCIAL_ICONS_PERMISSION_AFTER'			=> ' can be setting under <b>Miscellaneous</b>, who can see the Social Icon Links.',
	'ACP_SOCIAL_ICONS_USERS_PERMISSIONS'		=> 'User permissions',
	'ACP_SOCIAL_ICONS_GROUPS_PERMISSIONS'		=> 'Group permissions',
	'ACP_SOCIAL_ICONS'							=> 'Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE'				=> 'Settings for Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE_EXPLAIN'		=> 'Here you can make the settings for the extension social media icons.',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE'			=> 'Link-Settings for Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE_EXPLAIN'	=> 'Here you can make the links for the extension social media icons.',
	'ACP_SOCIAL_ICONS_SETTINGS'					=> 'Alg.-Einstellungen',
	'ACP_SOCIAL_ICONS_LINKS_SETTINGS'			=> 'Link-Einstellungen',
	'SOCIAL_ICONS_ENABLE'						=> 'Enable Social Media Icons',
	'SOCIAL_ICONS_ENABLE_EXPLAIN'				=> 'If disabled, the extension social media icons will be turned off without disabling the extension. <br> <br> Default: "YES"',
	'SOCIAL_ICONS_POSITION'						=> 'Position of the Social Media Icons',
	'SOCIAL_ICONS_POSITION_EXPLAIN'				=> 'Define here where the social media icons should be displayed. <br> <br> Default: "Under the statistics display"',
	'SOCIAL_ICONS_FORUMLIST_BEFORE'				=> 'Above the Navbar',
	'SOCIAL_ICONS_FORUMLIST_AFTER'				=> 'Below the Navbar',
	'SOCIAL_ICONS_ONLINE_LIST_BEFORE'			=> 'About the statistics display',
	'SOCIAL_ICONS_STATISTICS_AFTER'				=> 'Under the statistics display',
	'SOCIAL_ICONS_IN_NAVBAR'					=> 'Within the Navbar as a menu',
	'SOCIAL_ICONS_IN_HEADER'					=> 'Show the Icon´s in the Header',
	'SOCIAL_ICONS_UPDATE'						=> 'Social Media Icons Settings are updated..',
	'SHOW_SOCIAL_ICONS_ALL'						=> 'Show Soicial Media Icons everywhere',
	'SHOW_SOCIAL_ICONS_ALL_EXPLAIN'				=> 'Displays social media icons in all positions at the same time. This is for testing purposes. <br> <br> Default: "No"',
	'SOCIAL_ICONS_DISABLED'						=> 'The  Extension "Social Media Icons" is deactivated!',
	'SHOW_SOCIAL_ICONS_ALL_ALARM'				=> 'Danger! At the moment you have the option "Show social media icons everywhere" active. Remember to turn it off after testing. <br> The option is not intended for long-term use.',
	'ICONS_HEADER_INDEX'						=> 'Show Header-Icon´s on all pages',
	'ICONS_HEADER_INDEX_EXPLAIN'				=> 'Displays the icons on all pages throughout. Otherwise, the icons are only displayed on the index page. <br> <br> Only for the option "Shows the icons in the header" <br> <br> Default: not active',
	'ACTIV'										=> 'Enabled',
	'NOT_ACTIV'									=> 'Not enabled',
	'ICONS_HEADER_INDEX_INFO'					=> '<br> <br> <b> To be able to use this setting, <br> must be selected as position "Show the icons in the header" <br> </ b>',


	// Permission
	'ACL_U_VIEW_SOCIAL_ICONS'					=> 'Can see the social media settings',

// INFO
	'SOCIAL_ICONS_VERSION_COPY'				=> 'phpBB Extension - Social Media Icons- Version %s - Powered by Chris1278',

));	
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
	'ACP_SOCIAL_ICONS_PERMISSION_BEFORE'		=> 'With <b> phpbb´s own authorization system </b> you can change the settings of the ',
	'ACP_ANDOR'									=> ' and respectively or the ',
	'ACP_SOCIAL_ICONS_PERMISSION_AFTER'			=> ' under <b> Miscellaneous </b> you can set who can see the social icons links.',
	'ACP_SOCIAL_ICONS_USERS_PERMISSIONS'		=> 'user rights',
	'ACP_SOCIAL_ICONS_GROUPS_PERMISSIONS'		=> 'group rights',
	'ACP_SOCIAL_ICONS'							=> 'Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE'				=> 'General settings for social media icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE_EXPLAIN'		=> 'Here you can make the general settings for the Extension Social Media Icons.',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE'			=> 'Link settings for social media icons',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE_EXPLAIN'	=> 'Here you can make all the link settings for the social media icons. <br> <br> <b> Swap icons or Upload your own icons: </b> <br> <br> To exchange icons or upload your own icons you have to Upload the icon files via FTP into the directory <b> / ext / chris1278 / social / icons </b>. <br> Make sure that the size of the icons is 32px * 32px.',
	'ACP_SOCIAL_ICONS_SETTINGS'					=> 'General Settings',
	'ACP_SOCIAL_ICONS_LINKS_SETTINGS'			=> 'Link Settings',
	'SOCIAL_ICONS_ENABLE'						=> 'Social Media Icons activate',
	'SOCIAL_ICONS_ENABLE_EXPLAIN'				=> 'If deactivated, the extension Social Media Icons is switched off without uninstalling the extension. <br> <br> <b> Standard: "YES" </b>',
	'SOCIAL_ICONS_POSITION'						=> 'Position of social media icons',
	'SOCIAL_ICONS_POSITION_EXPLAIN'				=> 'Here you determine where the social media icons should be displayed. <br> <br> <b> Standard: "Show under statistics" </b>',
	'SOCIAL_ICONS_FORUMLIST_BEFORE'				=> 'Over the Navbar',
	'SOCIAL_ICONS_FORUMLIST_AFTER'				=> 'Under the navbar',
	'SOCIAL_ICONS_ONLINE_LIST_BEFORE'			=> 'Show above the statistics',
	'SOCIAL_ICONS_STATISTICS_AFTER'				=> 'Show below the statistics',
	'SOCIAL_ICONS_IN_NAVBAR'					=> 'Within the Navbar as a menu',
	'SOCIAL_ICONS_IN_HEADER'					=> 'Shows the icons in the header',
	'SOCIAL_ICONS_UPDATE'						=> 'Social media icons settings changed.',
	'SHOW_SOCIAL_ICONS_ALL'						=> 'Show social media icons in all positions',
	'SHOW_SOCIAL_ICONS_ALL_EXPLAIN'				=> 'Displays the social media icons in all positions at the same time. This is for testing purposes. <br> <br> <b> Standard: "No" </b>',
	'ICONS_HEADER_INDEX'						=> 'Show the header icons on all pages',
	'ICONS_HEADER_INDEX_EXPLAIN'				=> 'Displays the icons continuously on all pages. Otherwise, the icons are only displayed on the index page. <br> <br> Only for the position "Shows the icons in the header" <br> <br> <b> Standard: "Not active" </b>',
	'ACTIV'										=> 'active',
	'NOT_ACTIV'									=> 'Not active',
	'SOCIAL_ICONS_LINKS_EXTERN'					=> 'Open pages externally',
	'SOCIAL_ICONS_LINKS_EXTERN_EXPLAIN'			=> 'Opens the page to be loaded in a new window / tab. If you do not want this then simply deactivate it. But then the page loads where the forum is. <br> <br> <b> Standard: "Yes" </b>',
	'ACP_SOCIAL_FICONS_ALL_ENABLE'				=> 'Font Awesome Icons or Standard Icons',
	'ACP_SOCIAL_FICONS_ALL_ENABLE_EXPLAIN'		=> 'With this setting you choose whether you want to use standard icons (icon files) or Font Awesome icons for the standard views. <br> <br> <b> Standard: Standard icons (file) </b>',
	'FICONS'									=> 'Standard-Icons (file)',
	'SICONS'									=> 'Font Awesome Icons',
	'SOCIAL_ICONS_IN_NAVBAR2'					=> '<b>  <- Font Awesome Icon for the position "Within the Navbar as a menu" </b>',
	'SOCIAL_FICONS_STANDARD'					=> '<b>  <- Font Awesome icon for the remaining positions</b>',
	'SOCIAL_ICONS_POSS2_ENABLE'					=> 'Box View',
	'SOCIAL_ICONS_POS2_ENABLE_EXPLAIN'			=> 'Here you can choose whether the position "Show under statistics" is with or without a box view (similar to the optics of the forum categories). This option is suitable, for example, if you e.g. B. have installed the extension <a href="https://reyno41.bplaced.net/phpbb/viewtopic.php?f=41&t=205"> <b> "Statblock" </b> </a> from kirk to adapt this display to the visual appearance. <br> <br> <b> Standard: "No" </b> ',
	
	//Language For Links
	'ACP_LINKPLACEOLDER'						=> 'z.B. https://phpbb.de',
	'ACP_FICON'   								=> 'Font Awesome Icon',
	'ACP_FICON_EXPLAIN'							=> 'Enter the name of a <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"> <strong> Font Awesome Icons Version 4.7.0 </ strong> </a> symbol to be used with the page link. <br> <br> This icon is then used for the position "Within the Navbar as a menu". But can also be used as an icon for the other options. <br> <br> <b> Standard: </b>',
	

	'ACP_FACEBOOK_URL'							=> 'Facebook-Link',
	'ACP_FACEBOOK_URL_EXPLAIN'					=> 'Enter the link here. But pay attention to the absolute spelling. z. B. https://www.phpbb.de always with HTTPS: // or HTTP: // only phpbb.de would not be loaded.',
	'ACP_FACEBOOK_ICON_DATEI'					=> 'Filename of the icon',
	'ACP_FACEBOOK_ICON_DATEI_EXPLAIN'			=> 'Insert the icon file name here. Pay attention to the correct spelling of upper and lower case.',
	'ACP_FACEBOOK_ICON'							=> 'The current icon',
	'ACP_FACEBOOK_ICON_EXPLAIN'					=> 'Here you see the preview of the currently used icon.',
	'ACP_FACEBOOK_FICON_DATEI'					=> 'The current Fontawesome icon',
	'ACP_FACEBOOK_FICON_DATEI_EXPLAIN'			=> 'Here you can see the preview of the Font Awesome icon currently in use.',
	
	
	'ACP_TWITTER_URL'							=> 'Twitter-Link',
	'ACP_TWITTER_URL_EXPLAIN'					=> 'Enter the link here. But pay attention to the absolute spelling. z. B. https://www.phpbb.de always with HTTPS: // or HTTP: // only phpbb.de would not be loaded.',
	'ACP_TWITTER_ICON_DATEI'					=> 'Filename of the icon',
	'ACP_TWITTER_ICON_DATEI_EXPLAIN'			=> 'Insert the icon file name here. Pay attention to the correct spelling of upper and lower case.',
	'ACP_TWITTER_ICON'							=> 'The current icon',
	'ACP_TWITTER_ICON_EXPLAIN'					=> 'Here you see the preview of the currently used icon.',
	'ACP_TWITTER_FICON_DATEI'					=> 'The current Font Awesome Icons',
	'ACP_TWITTER_FICON_DATEI_EXPLAIN'			=> 'Here you can see the preview of the Font Awesome icon currently in use.',
	
	
	
	
	'ACP_ACT'									=> 'Activate social media icon',
	'ACP_ACT_EXPLAIN'							=> 'Select here whether you want to activate the icon or not.',
	




	// Permission
	'ACL_U_VIEW_SOCIAL_ICONS'					=> 'Can see the social media settings',

	// INFO
	'SOCIAL_ICONS_VERSION_COPY'				=> 'phpBB Extension - Social Media Icons- Version %s - Powered by Chris1278',
));	
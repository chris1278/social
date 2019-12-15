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
	'ACP_SOCIAL_ICONS_PERMISSION_BEFORE'		=> 'Mit dem <b>phpbb eigenem Berechtigungssystem</b> kann über die Einstellungen der  ',
	'ACP_ANDOR'									=> ' und bzw. oder den ',
	'ACP_SOCIAL_ICONS_PERMISSION_AFTER'			=> ' unter <b>Diverses</b> einstellt werden, wer die Social Icons Links sehen darf.',
	'ACP_SOCIAL_ICONS_USERS_PERMISSIONS'		=> 'Benutzerrechten',
	'ACP_SOCIAL_ICONS_GROUPS_PERMISSIONS'		=> 'Gruppenrechten',
	'ACP_SOCIAL_ICONS'							=> 'Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE'				=> 'Allgemeine-Einstellungen für Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_TITLE_EXPLAIN'		=> 'Hier können Sie die allgemeinen Einstellungen für die Extension Social Media Icons vornehmen.',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE'			=> 'Link-Einstellungen für Social Media Icons',
	'ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE_EXPLAIN'	=> 'Hier können Sie  alle Link Einstellungen für die Social Media Icons vornehmen.<br><br><b> Icons tauschen bzw. Eigene Icons Hochladen:</b><br><br> Um Icons zu tauschen oder eigene Icons hochzuladen müssen Sie die Icon-Dateien mittels FTP in das Verzeichnis<b>/ext/chris1278/social/icons</b> hochladen.<br> Achten Sie darauf das die Größe der Icons 32px*32px ist.',
	'ACP_SOCIAL_ICONS_SETTINGS'					=> 'Algemeine-Einstellungen',
	'ACP_SOCIAL_ICONS_LINKS_SETTINGS'			=> 'Link-Einstellungen',
	'SOCIAL_ICONS_ENABLE'						=> 'Social Media Icons aktivieren',
	'SOCIAL_ICONS_ENABLE_EXPLAIN'				=> 'Wenn deaktiviert, wird die Extension Social Media Icons abgeschaltet, ohne die Extension zu deinstallieren.<br><br><b>Standard: "JA"</b>',
	'SOCIAL_ICONS_POSITION'						=> 'Position der Social Media Icons',
	'SOCIAL_ICONS_POSITION_EXPLAIN'				=> 'Bestimmen Sie hier wo die Social Media Icons angezeigt werden sollen.<br><br><b>Standard: "Unter der Statistik anzeigen"</b>',
	'SOCIAL_ICONS_FORUMLIST_BEFORE'				=> 'Über der Navbar',
	'SOCIAL_ICONS_FORUMLIST_AFTER'				=> 'Unter der Navbar',
	'SOCIAL_ICONS_ONLINE_LIST_BEFORE'			=> 'Über der Statistik anzeigen',
	'SOCIAL_ICONS_STATISTICS_AFTER'				=> 'Unter der Statistik anzeigen',
	'SOCIAL_ICONS_IN_NAVBAR'					=> 'Innerhalb der Navbar als Menu',
	'SOCIAL_ICONS_IN_HEADER'					=> 'Zeigt die Icon´s im Header',
	'SOCIAL_ICONS_UPDATE'						=> 'Social Media Icons Einstellungen geändert.',
	'SHOW_SOCIAL_ICONS_ALL'						=> 'Zeige Social Media Icons auf allen Positionen',
	'SHOW_SOCIAL_ICONS_ALL_EXPLAIN'				=> 'Zeigt die Social Media Icons auf allen Positionen gleichzeitig an. Dies dient zu Testzwecken.<br><br><b>Standard: "Nein"</b>',
	'ICONS_HEADER_INDEX'						=> 'Die Header-Icon´s auf allen Seiten anzeigen',
	'ICONS_HEADER_INDEX_EXPLAIN'				=> 'Zeigt die Icons auf allen Seiten durchgehend an. Ansonsten werden die Icons nur auf der Index Seite angezeigt. <br><br> Nur für die Position "Zeigt die Icon´s im Header" <br><br><b>Standard: "Nicht aktiv"</b>',
	'ACTIV'										=> 'Aktiv',
	'NOT_ACTIV'									=> 'Nicht aktiv',
	'SOCIAL_ICONS_LINKS_EXTERN'					=> 'Seiten extern Öffnen',
	'SOCIAL_ICONS_LINKS_EXTERN_EXPLAIN'			=> 'Öffnet die zu ladende Seite in einem neuen Fenster/Tab. Falls Sie das nicht möchten dann deaktivieren Sie das einfach. Aber dann lädt die Seite dort wo dann das Forum ist.<br><br><b>Standard: "Ja"</b>',
	'ACP_SOCIAL_FICONS_ALL_ENABLE'				=> 'Font Awesome Icons oder Standard Icons',
	'ACP_SOCIAL_FICONS_ALL_ENABLE_EXPLAIN'		=> 'Mit dieser Einstellung wählen Sie aus, ob Sie Standard Icons (Icon-Dateien) oder Font Awesome Icons nutzen wollen für die Standard-Ansichten.<br><br><b>Standard: Standard-Icons (Datei)</b> ',
	'FICONS'									=> 'Standard-Icons (Datei)',
	'SICONS'									=> 'Font Awesome Icons',
	'SOCIAL_ICONS_IN_NAVBAR2'					=> '<b>  <- Font Awesome Icon für die Position "Innerhalb der Navbar als Menu"</b>',
	'SOCIAL_FICONS_STANDARD'					=> '<b>  <- Font Awesome Icon für die restlichen Positionen</b>',
	'SOCIAL_ICONS_POSS2_ENABLE'					=> 'Box-Ansicht',
	'SOCIAL_ICONS_POS2_ENABLE_EXPLAIN'			=> 'Hier können Sie aussuchen, ob die Position "Unter der Statistik anzeigen" mit oder ohne Box-Ansicht ist (ähnlich der Optik der Forenkategorien). Diese Option ist beispielsweise gut geeignet, wenn Sie z. B. die Extension <a href="https://reyno41.bplaced.net/phpbb/viewtopic.php?f=41&t=205"><b>"Statblock"</b></a> von kirk installiert haben, um diese Anzeige der Optik anzupassen.<br> <br><b>Standard: "Nein"</b> ',
	
	//Language For Links
	'ACP_LINKPLACEOLDER'						=> 'z.B. https://phpbb.de',
	'ACP_FICON'   								=> 'Font Awesome Icon',
	'ACP_FICON_EXPLAIN'							=> 'Geben Sie hier den Namen eines <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome Icons Version 4.7.0</strong></a> Symbols ein, das mit dem Seitenlink verwendet werden soll.<br><br> Dieses Icon wird dann für die Position "Innerhalb der Navbar als Menu" verwendet. Kann aber auch als Icon für die anderen Optionen verwendet werden.<br><br><b>Standard:</b> ',
	

	'ACP_FACEBOOK_URL'							=> 'Facebook-Link',
	'ACP_FACEBOOK_URL_EXPLAIN'					=> 'Tragen Sie hier den Link ein. Achten Sie aber auf die absolute Schreibweise. z. B. https://www.phpbb.de immer mit HTTPS:// bzw. HTTP:// nur phpbb.de würde nicht geladen werden.',
	'ACP_FACEBOOK_ICON_DATEI'					=> 'Dateiname des Icons',
	'ACP_FACEBOOK_ICON_DATEI_EXPLAIN'			=> 'Fügen Sie hier den Dateinamen des Icons ein. Achten Sie auf die korrekte Schreibweise auch auf Groß- und Kleinschreibung.',
	'ACP_FACEBOOK_ICON'							=> 'Das aktuelle Icon',
	'ACP_FACEBOOK_ICON_EXPLAIN'					=> 'Hier sehen Sie die Vorschau auf das aktuell verwendete Icon.',
	'ACP_FACEBOOK_FICON_DATEI'					=> 'Das aktuelle Fontawesome-Icon',
	'ACP_FACEBOOK_FICON_DATEI_EXPLAIN'			=> 'Hier sehen Sie die Vorschau auf das aktuell verwendete Font Awesome Icon.',
	
	
	'ACP_TWITTER_URL'							=> 'Twitter-Link',
	'ACP_TWITTER_URL_EXPLAIN'					=> 'Tragen Sie hier den Link ein. Achten Sie aber auf die absolute Schreibweise. z. B. https://www.phpbb.de immer mit HTTPS:// bzw. HTTP:// nur phpbb.de würde nicht geladen werden.',
	'ACP_TWITTER_ICON_DATEI'					=> 'Dateiname des Icons',
	'ACP_TWITTER_ICON_DATEI_EXPLAIN'			=> 'Fügen Sie hier den Dateinamen des Icons ein. Achten Sie auf die korrekte Schreibweise auch auf Groß- und Kleinschreibung.',
	'ACP_TWITTER_ICON'							=> 'Das aktuelle Icon',
	'ACP_TWITTER_ICON_EXPLAIN'					=> 'Hier sehen Sie die Vorschau auf das aktuell verwendete Icon.',
	'ACP_TWITTER_FICON_DATEI'					=> 'Das aktuelle Font Awesome Icons',
	'ACP_TWITTER_FICON_DATEI_EXPLAIN'			=> 'Hier sehen Sie die Vorschau auf das aktuell verwendete Font Awesome Icon.',
	
	
	
	
	'ACP_ACT'									=> 'Social Media Icon Aktivieren',
	'ACP_ACT_EXPLAIN'							=> 'Wählen Sie hier aus, ob Sie das Icon so aktivieren wollen oder nicht.',
	




	// Permission
	'ACL_U_VIEW_SOCIAL_ICONS'					=> 'Kann die Social Media Einstellungen sehen',

	// INFO
	'SOCIAL_ICONS_VERSION_COPY'				=> 'phpBB Extension - Social Media Icons- Version %s - Powered by Chris1278',
));
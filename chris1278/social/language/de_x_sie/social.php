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
		'SOCIAL_MEDIA_ICONS'						=> 'Social Media Link´s',
		'S_FACEBOOK'								=> 'Facebook',
		'S_TWITTER'									=> 'Twitter',
//Ab hier können Sie weitere Sprachvariabeln einfügen, für Ihre Icons in der Ansicht "Innerhalb der Navbar als Menü". Nutzen Sie  bitte genau so das nachfolgende Format:
//
// 'S_XXX'			=> 'ZZZ',  
//
// Wobei xxx und zzz hier als Platzhalter dienen. Wenn Sie jetzt z.B. anstelle der Platzhalter instagramm nemen möchten dann machen Sie folgendes:
//
//	'S_INSTAGRAM'  <-- hier bitte drauf achten das alle Buchstaben Gross geschrieben sind. Dann können Sie  in der html datei als Sprachvariabeln
//
// nähmlich folgendes nutzen: {S_INSTAGRAM}  In dem Fall würde dort das erscheinen was in dem Beispiel als ZZZ steht. 
//
// z.B. 'S_INSTAGRAM'			=> 'Hier das erscheint als text dort wo Sie die Variabel {S_INSTAGRAM} in der html Datei einsetzten. Hier müssen Sie dann drauf achten das die Rechtschreibung stimmt.'
//
// Ende der Info 



));
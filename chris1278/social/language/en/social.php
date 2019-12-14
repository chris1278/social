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
//From here you can add more language variables, for your icons in the view "Within the navbar as menu". Please use exactly the following format:
//
// 'S_XXX'			=> 'ZZZ',  
//
// Where xxx and zzz serve as placeholders. If you now, for example, instead of taking the placeholder Instagram then do the following:
//
//	'S_INSTAGRAM'  <-- Please make sure that all letters are capitalized. Then you can use the HTML file as the language parabola
//
// Namely use the following: {S_INSTAGRAM}  In that case there would appear what in the example stands as ZZZ.
//
// z.B. 'S_INSTAGRAM'			=> 'Here's what appears as text where you put the variable {S_INSTAGRAM} in the html file. Here you have to pay attention that the spelling is correct.'
//
// End of Info 



));
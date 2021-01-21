<?php
/**
*
* Social Network Icons extension for the phpBB Forum Software package.
*
* @copyright (c) 2019 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\social;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$is_enableable = true;

		$user = $this->container->get('user');
		$user->add_lang_ext('chris1278/social', 'social');
		$lang = $user->lang;
			if (!( (phpbb_version_compare(PHPBB_VERSION, '3.2.8', '>=') )) )
			{
			$lang['EXTENSION_NOT_ENABLEABLE'] .= '<br>' . $user->lang('ERROR_MSG_3112_MISTMATCH');
			$is_enableable = false;
			}
		$user->lang = $lang;

		return $is_enableable;
	}
}

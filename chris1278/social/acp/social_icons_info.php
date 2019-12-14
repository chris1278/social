<?php
/**
*
* Social Network Icons extension for the phpBB Forum Software package.
*
* @copyright (c) 2019 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\social\acp;

class social_icons_info
{
	function module()
	{
		return array(
			'filename'	=> '\chris1278\social\acp\social_icons_module',
			'title'		=> 'ACP_SOCIAL_ICONS',
			'version'	=> '1.0.2',
			'modes'		=> array(

				'settings'		=> array(
					'title'		=> 'ACP_SOCIAL_ICONS_SETTINGS',
					'auth'		=> 'ext_chris1278/social && acl_a_board',
					'cat'		=> array('ACP_SOCIAL_ICONS'),
				),
				
				'link_settings'		=> array(
					'title'		=> 'ACP_SOCIAL_ICONS_LINKS_SETTINGS',
					'auth'		=> 'ext_chris1278/social && acl_a_board',
					'cat'		=> array('ACP_SOCIAL_ICONS'),
				),
			),
		);
	}
}
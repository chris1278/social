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

class social_module
{
	function module()
	{
		return array(
			'filename'	=> '\chris1278\social\acp\social_general',
			'title'		=> 'ACP_COCIAL',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'		=> array(
					'title'		=> 'ACP_SOCIAL_GENERAL',
					'auth'		=> 'ext_chris1278/social && acl_a_board',
					'cat'		=> array('ACP_SOCIAL'),
				),
			),
		);
		return array(
			'filename'	=> '\chris1278\social\acp\social_settings',
			'title'		=> 'ACP_SOCIAL',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings2'		=> array(
					'title'		=> 'ACP_SOCIAL_SETTINGS',
					'auth'		=> 'ext_chris1278/social && acl_a_board',
					'cat'		=> array('ACP_SOCIAL'),
				),
			),
		);
	}
}

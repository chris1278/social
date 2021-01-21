<?php
/**
*
* Social Network Icons extension for the phpBB Forum Software package.
*
* @copyright (c) 2019 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\social\migrations;

class acp_module extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SOCIAL'
			)),
			array('module.add', array('acp', 'ACP_SOCIAL', array(
				'module_basename'	=> '\chris1278\social\acp\social_general',
				'module_langname'	=> 'ACP_SOCIAL_GENERAL',
				'module_mode'		=> 'general',
				'module_auth'		=>  'ext_chris1278/social && acl_a_board',
			))),
			array('module.add', array('acp', 'ACP_SOCIAL', array(
				'module_basename'	=> '\chris1278\social\acp\social_settings',
				'module_langname'	=> 'ACP_SOCIAL_SETTINGS',
				'module_mode'		=> 'settings',
				'module_auth'		=>  'ext_chris1278/social && acl_a_board',
			))),
		);
	}

	public function revert_schema()
	{
		return array(
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SOCIAL'
			)),
			array('module.remove', array('acp', 'ACP_SOCIAL', array(
				'module_basename'	=> '\chris1278\social\acp\social_general',
				'module_langname'	=> 'ACP_SOCIAL_GENERAL',
				'module_mode'		=> 'general',
				'module_auth'		=>  'ext_chris1278/social && acl_a_board',
			))),
			array('module.remove', array('acp', 'ACP_SOCIAL', array(
				'module_basename'	=> '\chris1278\social\acp\social_settings',
				'module_langname'	=> 'ACP_SOCIAL_SETTINGS',
				'module_mode'		=> 'settings',
				'module_auth'		=>  'ext_chris1278/social && acl_a_board',
			))),
		);
	}
}

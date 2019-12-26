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

class v_1_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['social_icons_version']) && version_compare($this->config['social_icons_version'], '1.0.1', '>=');
	}

	static public function depends_on()
	{
		return array('\chris1278\social\migrations\v_0_1_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('social_icons_version', '1.0.1')),
			array('config.add', array('social_icons_enable', 1)),
			array('config.add', array('show_social_icons_all', 0)),
			array('config.add', array('social_icons_position', 5)),
			array('permission.add', array('u_view_social_icons', true, 'u_')),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SOCIAL_ICONS'
			)),

			array('module.add', array(
				'acp',
				'ACP_SOCIAL_ICONS',
				array(
					'module_basename'	=> '\chris1278\social\acp\social_icons_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}

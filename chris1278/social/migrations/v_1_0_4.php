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

class v_1_0_4 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\social\migrations\database_update');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('social_icons_version', '1.0.4')),
		);
	}
}

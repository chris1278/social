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

class database_install extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\social\migrations\permission');
	}

	public function update_schema()
	{
		return array(
			'add_tables'		=> array(
			$this->table_prefix . 'chris1278_social'	=> array(
					'COLUMNS'		=> array(
						'chris1278_name'				=> array('VCHAR:255', ''),
						'chris1278_value'				=> array('VCHAR:255', ''),
						'is_dynamic'				=> array('BOOL',  0),
					),
					'PRIMARY_KEY'	=> array('chris1278_name'),
					'KEYS'			=> array(
						'is_dynamic'			=> array('INDEX', 'is_dynamic'),
					),

				),
			)
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'		=> array(
				$this->table_prefix . 'chris1278_social',
			),
		);
	}
}

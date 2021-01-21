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

class permission extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\social\migrations\acp_module');
	}

	public function update_data()
	{
		return array(
			array('permission.add', array('u_view_social')),
			array('permission.permission_set', array('ADMINISTRATORS'		, 'u_view_social', 'group')),
			array('permission.permission_set', array('GLOBAL_MODERATORS'	, 'u_view_social', 'group')),
			array('permission.permission_set', array('REGISTERED'			, 'u_view_social', 'group')),
			array('permission.permission_set', array('NEWLY_REGISTERED'		, 'u_view_social', 'group')),
			array('permission.permission_set', array('GUESTS'				, 'u_view_social', 'group')),
		);
	}

	public function revert_schema()
	{
		return array(
			array('permission.remove', array('u_view_social')),
			array('permission.permission_remove', array('ADMINISTRATORS'		, 'u_view_social', 'group')),
			array('permission.permission_remove', array('GLOBAL_MODERATORS'		, 'u_view_social', 'group')),
			array('permission.permission_remove', array('REGISTERED'			, 'u_view_social', 'group')),
			array('permission.permission_remove', array('NEWLY_REGISTERED'		, 'u_view_social', 'group')),
			array('permission.permission_remove', array('GUESTS'				, 'u_view_social', 'group')),
		);
	}
}

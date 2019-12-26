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

class v_1_0_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\social\migrations\v_1_0_1');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('social_icons_version', '1.0.2')),
			/*Allgemeine Einstellungen*/
			array('config.add', array('show_social_header_icons_all', 0)),
			array('config.add', array('social_icons_links_extern', 1)),
			array('config.add', array('social_ficons_all_enable', 0)),
			array('config.add', array('social_icons_pos2_enable', 0)),

			/*Link einstellungen*/
			array('config.add', array('social_facebook_url', '')),
			array('config.add', array('social_facebook_url_enable', 1)),
			array('config.add', array('social_facebook_icon', 'social_facebook.png')),
			array('config.add', array('social_facebook_ficon', 'fa-facebook-official')),

			array('config.add', array('social_twitter_url', '')),
			array('config.add', array('social_twitter_url_enable', 1)),
			array('config.add', array('social_twitter_icon', 'social_twitter.png')),
			array('config.add', array('social_twitter_ficon', 'fa-twitter-square')),

			array('module.add', array(
				'acp',
				'ACP_SOCIAL_ICONS',
				array(
					'module_basename'	=> '\chris1278\social\acp\social_icons_module',
					'modes'				=> array('link_settings'),
				),
			)),
		);
	}
}

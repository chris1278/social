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

class v_1_0_3 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\social\migrations\v_1_0_2');
	}

	public function update_data()
	{
		return array(
		array('config.update', array('social_icons_version', '1.0.3')),
		/*Änderung der Variabel namen und löschung der Alten Variabeln Beginn*/
		array('config.add', array('social_url_01', 			(isset($this->config['social_facebook_url'])) ? $this->config['social_facebook_url']				: '')),
		array('config.add', array('social_url_01_enable', 	(isset($this->config['social_facebook_url_enable'])) ? $this->config['social_facebook_url_enable']				: '')),
		array('config.add', array('social_url_01_icon',		(isset($this->config['social_facebook_icon'])) ? $this->config['social_facebook_icon']				: '')),
		array('config.add', array('social_url_01_ficon', 	(isset($this->config['social_facebook_ficon'])) ? $this->config['social_facebook_ficon']				: '')),

		array('config.add', array('social_url_02', 			(isset($this->config['social_twitter_url'])) ? $this->config['social_twitter_url']				: '')),
		array('config.add', array('social_url_02_enable', 	(isset($this->config['social_twitter_url_enable'])) ? $this->config['social_twitter_url_enable']				: '')),
		array('config.add', array('social_url_02_icon',		(isset($this->config['social_twitter_icon'])) ? $this->config['social_twitter_icon']				: '')),
		array('config.add', array('social_url_02_ficon', 	(isset($this->config['social_twitter_ficon'])) ? $this->config['social_twitter_ficon']				: '')),

		array('config.remove', array('social_facebook_url', '')),
		array('config.remove', array('social_facebook_url_enable', 1)),
		array('config.remove', array('social_facebook_icon', 'social_facebook.png')),
		array('config.remove', array('social_facebook_ficon', 'fa-facebook-official')),

		array('config.remove', array('social_twitter_url', '')),
		array('config.remove', array('social_twitter_url_enable', 1)),
		array('config.remove', array('social_twitter_icon', 'social_twitter.png')),
		array('config.remove', array('social_twitter_ficon', 'fa-twitter-square')),
		/*Änderung der Variabel namen und löschung der Alten Variabeln Ende*/

		array('config.add', array('social_icons_anzahl', 9)),
		array('config.add', array('icons_navmenu_index', 0)),

		array('config.add', array('social_name_01', 'Facebook')),
		array('config.add', array('social_name_02', 'Twitter')),

		array('config.add', array('social_url_03', '')),
		array('config.add', array('social_name_03', '')),
		array('config.add', array('social_url_03_enable', 0)),
		array('config.add', array('social_url_03_icon', '')),
		array('config.add', array('social_url_03_ficon', '')),

		array('config.add', array('social_url_04', '')),
		array('config.add', array('social_name_04', '')),
		array('config.add', array('social_url_04_enable', 0)),
		array('config.add', array('social_url_04_icon', '')),
		array('config.add', array('social_url_04_ficon', '')),

		array('config.add', array('social_url_05', '')),
		array('config.add', array('social_name_05', '')),
		array('config.add', array('social_url_05_enable', 0)),
		array('config.add', array('social_url_05_icon', '')),
		array('config.add', array('social_url_05_ficon', '')),

		array('config.add', array('social_url_06', '')),
		array('config.add', array('social_name_06', '')),
		array('config.add', array('social_url_06_enable', 0)),
		array('config.add', array('social_url_06_icon', '')),
		array('config.add', array('social_url_06_ficon', '')),

		array('config.add', array('social_url_07', '')),
		array('config.add', array('social_name_07', '')),
		array('config.add', array('social_url_07_enable', 0)),
		array('config.add', array('social_url_07_icon', '')),
		array('config.add', array('social_url_07_ficon', '')),

		array('config.add', array('social_url_08', '')),
		array('config.add', array('social_name_08', '')),
		array('config.add', array('social_url_08_enable', 0)),
		array('config.add', array('social_url_08_icon', '')),
		array('config.add', array('social_url_08_ficon', '')),

		array('config.add', array('social_url_09', '')),
		array('config.add', array('social_name_09', '')),
		array('config.add', array('social_url_09_enable', 0)),
		array('config.add', array('social_url_09_icon', '')),
		array('config.add', array('social_url_09_ficon', '')),

		array('config.add', array('social_url_10', '')),
		array('config.add', array('social_name_10', '')),
		array('config.add', array('social_url_10_enable', 0)),
		array('config.add', array('social_url_10_icon', '')),
		array('config.add', array('social_url_10_ficon', '')),
		);
	}
}

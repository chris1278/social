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

class database_update extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\chris1278\social\migrations\database_install');
	}

	public function update_data()
	{
		return array(

			array('custom', array(array($this, 'import_social'))),
		);
	}

	public function import_social()
	{

		$sqlary = array(
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_icons_enable', '1', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('show_social_icons_all', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_icons_position', '5', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('show_social_header_icons_all', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_icons_links_extern', '1', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_ficons_all_enable', '1', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_icons_pos2_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('icons_navmenu_index', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('amount_of_boxes', '2', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_01', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_02', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_03', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_04', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_05', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_06', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_07', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_08', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_09', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_10', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_01_enable', '1', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_02_enable', '1', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_03_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_04_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_05_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_06_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_07_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_08_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_09_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_10_enable', '0', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_01_ficon', 'fa-facebook-official', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_02_ficon', 'fa-twitter-square', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_03_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_04_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_05_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_06_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_07_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_08_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_09_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_10_ficon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_01_icon', 'social_facebook.png', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_02_icon', 'social_twitter.png', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_03_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_04_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_05_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_06_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_07_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_08_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_09_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_url_10_icon', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_01', 'facebook', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_02', 'twitter', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_03', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_04', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_05', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_06', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_07', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_08', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_09', '', '0');",
		"INSERT INTO  " . $this->table_prefix . 'chris1278_social' . " (chris1278_name, chris1278_value, is_dynamic) VALUES ('social_name_10', '', '0');",
		);

		foreach ($sqlary as $sql)
		{
			$this->db->sql_query($sql);
		}
	}
}

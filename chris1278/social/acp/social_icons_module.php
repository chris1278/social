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

class social_icons_module
{
public $u_action;
	public function main($id, $mode)
	{
		global $user, $cache, $request, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpbb_container, $phpbb_ext_manager, $phpEx, $language;

		$language	= $phpbb_container->get('language');

		$this->root_path = $phpbb_root_path . 'ext/chris1278/social/';
		$this->user = $user;
		$this->cache = $cache;
		$this->template = $template;
		$this->config = $config;
		$this->request = $request;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->phpbb_admin_path = $phpbb_admin_path;
		$this->php_ext = $phpEx;
		$this->phpbb_ext_manager = $phpbb_ext_manager;

		add_form_key('acp_social_icons');
		$error = '';

		switch ($mode)
		{

		// General SETTINGS

			case 'settings':

			$this->tpl_name = 'acp_social_icons_settings';
			$this->page_title = $this->user->lang['ACP_SOCIAL_ICONS_PAGE_TITLE'];

			$submit = $request->is_set_post('submit');
			if ($submit)
			{
				if (!check_form_key('acp_social_icons'))
				{
				trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
				}
				$config->set('social_icons_enable', $request->variable('social_icons_enable', 1));
				$config->set('show_social_icons_all', $request->variable('show_social_icons_all', 0));
				$config->set('social_icons_position', $request->variable('social_icons_position', ''));
				$config->set('show_social_header_icons_all', $request->variable('show_social_header_icons_all', 0));
				$config->set('social_icons_enable', $request->variable('social_icons_enable', 1));
				$config->set('social_icons_links_extern', $request->variable('social_icons_links_extern', 1));
				$config->set('social_ficons_all_enable', $request->variable('social_ficons_all_enable', 0));
				$config->set('social_icons_pos2_enable', $request->variable('social_icons_pos2_enable', 0));
				$config->set('icons_navmenu_index', $request->variable('icons_navmenu_index', 0));
				trigger_error($this->user->lang['SOCIAL_ICONS_UPDATE'] . adm_back_link($this->u_action));
			}

			$template->assign_vars(array(
				'SOCIAL_ICONS_ENABLE'				=> (!empty($config['social_icons_enable'])) ? true : false,
				'SOCIAL_ICONS_ENABLE'				=> ($this->config['social_icons_enable']) ? true : false, // Message
				'SHOW_SOCIAL_ICONS_ALL'				=> (!empty($config['show_social_icons_all'])) ? true : false,
				'SHOW_SOCIAL_ICONS_ALL'				=> ($this->config['show_social_icons_all']) ? true : false, // Message
				'SOCIAL_ICONS_POSITION'				=> (isset($config['social_icons_position'])) ? $config['social_icons_position'] : '',
				'SOCIAL_ICONS_VERSION'				=> $this->user->lang('SOCIAL_ICONS_VERSION_COPY', $this->config['social_icons_version']),
				'SHOW_SOCIAL_HEADER_ICONS_ALL'		=> (!empty($config['show_social_header_icons_all'])) ? true : false,
				'SHOW_SOCIAL_HEADER_ICONS_ALL'		=> ($this->config['show_social_header_icons_all']) ? true : false, // Message
				'SOCIAL_ICONS_LINKS_EXTERN'			=> (!empty($config['social_icons_links_extern'])) ? true : false,
				'SOCIAL_ICONS_LINKS_EXTERN'			=> ($this->config['social_icons_links_extern']) ? true : false, // Message
				'SOCIAL_FICONS_ALL_ENABLE'			=> (!empty($config['social_ficons_all_enable'])) ? true : false,
				'SOCIAL_FICONS_ALL_ENABLE'			=> ($this->config['social_ficons_all_enable']) ? true : false, // Message
				'SOCIAL_ICONS_POS2_ENABLE'			=> (!empty($config['social_icons_pos2_enable'])) ? true : false,
				'SOCIAL_ICONS_POS2_ENABLE'			=> ($this->config['social_icons_pos2_enable']) ? true : false, // Message
				'ICONS_NAVMENU_INDEX'				=> (!empty($config['icons_navmenu_index'])) ? true : false,
				'ICONS_NAVMENU_INDEX'				=> ($this->config['icons_navmenu_index']) ? true : false, // Message

				'U_USER_PERMISSIONS'			=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_user_global'),
				'U_GROUP_PERMISSIONS'			=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_group_global'),
				'U_ACTION'						=> $this->u_action,
			));
			break;

			// Link SETTINGS

			case 'link_settings':

			$this->tpl_name = 'acp_social_icons_link_settings';
			$this->page_title = $this->user->lang['ACP_SOCIAL_ICONS_PAGE_LINKS_TITLE'];

			$submit = $request->is_set_post('submit');
			if ($submit)
			{
				if (!check_form_key('acp_social_icons'))
				{
				trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
				}
				$config->set('social_url_01', utf8_normalize_nfc($request->variable('social_url_01', '', true)));
				$config->set('social_name_01', utf8_normalize_nfc($request->variable('social_name_01', '', true)));
				$config->set('social_url_01_enable', $request->variable('social_url_01_enable', 1));
				$config->set('social_url_01_icon', utf8_normalize_nfc($request->variable('social_url_01_icon', '', true)));
				$config->set('social_url_01_ficon', utf8_normalize_nfc($request->variable('social_url_01_ficon', '', true)));

				$config->set('social_url_02', utf8_normalize_nfc($request->variable('social_url_02', '', true)));
				$config->set('social_name_02', utf8_normalize_nfc($request->variable('social_name_02', '', true)));
				$config->set('social_url_02_enable', $request->variable('social_url_02_enable', 1));
				$config->set('social_url_02_icon', utf8_normalize_nfc($request->variable('social_url_02_icon', '', true)));
				$config->set('social_url_02_ficon', utf8_normalize_nfc($request->variable('social_url_02_ficon', '', true)));

				$config->set('social_url_03', utf8_normalize_nfc($request->variable('social_url_03', '', true)));
				$config->set('social_name_03', utf8_normalize_nfc($request->variable('social_name_03', '', true)));
				$config->set('social_url_03_enable', $request->variable('social_url_03_enable', 0));
				$config->set('social_url_03_icon', utf8_normalize_nfc($request->variable('social_url_03_icon', '', true)));
				$config->set('social_url_03_ficon', utf8_normalize_nfc($request->variable('social_url_03_ficon', '', true)));

				$config->set('social_url_04', utf8_normalize_nfc($request->variable('social_url_04', '', true)));
				$config->set('social_name_04', utf8_normalize_nfc($request->variable('social_name_04', '', true)));
				$config->set('social_url_04_enable', $request->variable('social_url_04_enable', 0));
				$config->set('social_url_04_icon', utf8_normalize_nfc($request->variable('social_url_04_icon', '', true)));
				$config->set('social_url_04_ficon', utf8_normalize_nfc($request->variable('social_url_04_ficon', '', true)));

				$config->set('social_url_05', utf8_normalize_nfc($request->variable('social_url_05', '', true)));
				$config->set('social_name_05', utf8_normalize_nfc($request->variable('social_name_05', '', true)));
				$config->set('social_url_05_enable', $request->variable('social_url_05_enable', 0));
				$config->set('social_url_05_icon', utf8_normalize_nfc($request->variable('social_url_05_icon', '', true)));
				$config->set('social_url_05_ficon', utf8_normalize_nfc($request->variable('social_url_05_ficon', '', true)));

				$config->set('social_url_06', utf8_normalize_nfc($request->variable('social_url_06', '', true)));
				$config->set('social_name_06', utf8_normalize_nfc($request->variable('social_name_06', '', true)));
				$config->set('social_url_06_enable', $request->variable('social_url_06_enable', 0));
				$config->set('social_url_06_icon', utf8_normalize_nfc($request->variable('social_url_06_icon', '', true)));
				$config->set('social_url_06_ficon', utf8_normalize_nfc($request->variable('social_url_06_ficon', '', true)));

				$config->set('social_url_07', utf8_normalize_nfc($request->variable('social_url_07', '', true)));
				$config->set('social_name_07', utf8_normalize_nfc($request->variable('social_name_07', '', true)));
				$config->set('social_url_07_enable', $request->variable('social_url_07_enable', 0));
				$config->set('social_url_07_icon', utf8_normalize_nfc($request->variable('social_url_07_icon', '', true)));
				$config->set('social_url_07_ficon', utf8_normalize_nfc($request->variable('social_url_07_ficon', '', true)));

				$config->set('social_url_08', utf8_normalize_nfc($request->variable('social_url_08', '', true)));
				$config->set('social_name_08', utf8_normalize_nfc($request->variable('social_name_08', '', true)));
				$config->set('social_url_08_enable', $request->variable('social_url_08_enable', 0));
				$config->set('social_url_08_icon', utf8_normalize_nfc($request->variable('social_url_08_icon', '', true)));
				$config->set('social_url_08_ficon', utf8_normalize_nfc($request->variable('social_url_08_ficon', '', true)));

				$config->set('social_url_09', utf8_normalize_nfc($request->variable('social_url_09', '', true)));
				$config->set('social_name_09', utf8_normalize_nfc($request->variable('social_name_09', '', true)));
				$config->set('social_url_09_enable', $request->variable('social_url_09_enable', 0));
				$config->set('social_url_09_icon', utf8_normalize_nfc($request->variable('social_url_09_icon', '', true)));
				$config->set('social_url_09_ficon', utf8_normalize_nfc($request->variable('social_url_09_ficon', '', true)));

				$config->set('social_url_10', utf8_normalize_nfc($request->variable('social_url_10', '', true)));
				$config->set('social_name_10', utf8_normalize_nfc($request->variable('social_name_10', '', true)));
				$config->set('social_url_10_enable', $request->variable('social_url_10_enable', 0));
				$config->set('social_url_10_icon', utf8_normalize_nfc($request->variable('social_url_10_icon', '', true)));
				$config->set('social_url_10_ficon', utf8_normalize_nfc($request->variable('social_url_10_ficon', '', true)));

				$config->set('social_icons_anzahl', $request->variable('social_icons_anzahl', ''));
				trigger_error($this->user->lang['SOCIAL_ICONS_UPDATE'] . adm_back_link($this->u_action));

			}

			$template->assign_vars(array(
				'SOCIAL_ICONS_ANZAHL'				=> (isset($config['social_icons_anzahl'])) ? $config['social_icons_anzahl'] : '',

				'SOCIAL_URL_01'						=> (isset($config['social_url_01'])) ? $config['social_url_01'] : '',
				'SOCIAL_NAME_01'					=> (isset($config['social_name_01'])) ? $config['social_name_01'] : '',
				'SOCIAL_URL_01_ENABLE'				=> (!empty($config['social_url_01_enable'])) ? true : false,
				'SOCIAL_URL_01_ENABLE'				=> ($this->config['social_url_01_enable']) ? true : false, // Message
				'SOCIAL_URL_01_ICON'				=> (isset($config['social_url_01_icon'])) ? $config['social_url_01_icon'] : '',
				'SOCIAL_URL_01_FICON'				=> (isset($config['social_url_01_ficon'])) ? $config['social_url_01_ficon'] : '',

				'SOCIAL_URL_02'						=> (isset($config['social_url_02'])) ? $config['social_url_02'] : '',
				'SOCIAL_NAME_02'					=> (isset($config['social_name_02'])) ? $config['social_name_02'] : '',
				'SOCIAL_URL_02_ENABLE'				=> (!empty($config['social_url_02_enable'])) ? true : false,
				'SOCIAL_URL_02_ENABLE'				=> ($this->config['social_url_02_enable']) ? true : false, // Message
				'SOCIAL_URL_02_ICON'				=> (isset($config['social_url_02_icon'])) ? $config['social_url_02_icon'] : '',
				'SOCIAL_URL_02_FICON'				=> (isset($config['social_url_02_ficon'])) ? $config['social_url_02_ficon'] : '',

				'SOCIAL_URL_03'						=> (isset($config['social_url_03'])) ? $config['social_url_03'] : '',
				'SOCIAL_NAME_03'					=> (isset($config['social_name_03'])) ? $config['social_name_03'] : '',
				'SOCIAL_URL_03_ENABLE'				=> (!empty($config['social_url_03_enable'])) ? true : false,
				'SOCIAL_URL_03_ENABLE'				=> ($this->config['social_url_03_enable']) ? true : false, // Message
				'SOCIAL_URL_03_ICON'				=> (isset($config['social_url_03_icon'])) ? $config['social_url_03_icon'] : '',
				'SOCIAL_URL_03_FICON'				=> (isset($config['social_url_03_ficon'])) ? $config['social_url_03_ficon'] : '',

				'SOCIAL_URL_04'						=> (isset($config['social_url_04'])) ? $config['social_url_04'] : '',
				'SOCIAL_NAME_04'					=> (isset($config['social_name_04'])) ? $config['social_name_04'] : '',
				'SOCIAL_URL_04_ENABLE'				=> (!empty($config['social_url_04_enable'])) ? true : false,
				'SOCIAL_URL_04_ENABLE'				=> ($this->config['social_url_04_enable']) ? true : false, // Message
				'SOCIAL_URL_04_ICON'				=> (isset($config['social_url_04_icon'])) ? $config['social_url_04_icon'] : '',
				'SOCIAL_URL_04_FICON'				=> (isset($config['social_url_04_ficon'])) ? $config['social_url_04_ficon'] : '',

				'SOCIAL_URL_05'						=> (isset($config['social_url_05'])) ? $config['social_url_05'] : '',
				'SOCIAL_NAME_05'					=> (isset($config['social_name_05'])) ? $config['social_name_05'] : '',
				'SOCIAL_URL_05_ENABLE'				=> (!empty($config['social_url_05_enable'])) ? true : false,
				'SOCIAL_URL_05_ENABLE'				=> ($this->config['social_url_05_enable']) ? true : false, // Message
				'SOCIAL_URL_05_ICON'				=> (isset($config['social_url_05_icon'])) ? $config['social_url_05_icon'] : '',
				'SOCIAL_URL_05_FICON'				=> (isset($config['social_url_05_ficon'])) ? $config['social_url_05_ficon'] : '',

				'SOCIAL_URL_06'						=> (isset($config['social_url_06'])) ? $config['social_url_06'] : '',
				'SOCIAL_NAME_06'					=> (isset($config['social_name_06'])) ? $config['social_name_06'] : '',
				'SOCIAL_URL_06_ENABLE'				=> (!empty($config['social_url_06_enable'])) ? true : false,
				'SOCIAL_URL_06_ENABLE'				=> ($this->config['social_url_06_enable']) ? true : false, // Message
				'SOCIAL_URL_06_ICON'				=> (isset($config['social_url_06_icon'])) ? $config['social_url_06_icon'] : '',
				'SOCIAL_URL_06_FICON'				=> (isset($config['social_url_06_ficon'])) ? $config['social_url_06_ficon'] : '',

				'SOCIAL_URL_07'						=> (isset($config['social_url_07'])) ? $config['social_url_07'] : '',
				'SOCIAL_NAME_07'					=> (isset($config['social_name_07'])) ? $config['social_name_07'] : '',
				'SOCIAL_URL_07_ENABLE'				=> (!empty($config['social_url_07_enable'])) ? true : false,
				'SOCIAL_URL_07_ENABLE'				=> ($this->config['social_url_07_enable']) ? true : false, // Message
				'SOCIAL_URL_07_ICON'				=> (isset($config['social_url_07_icon'])) ? $config['social_url_07_icon'] : '',
				'SOCIAL_URL_07_FICON'				=> (isset($config['social_url_07_ficon'])) ? $config['social_url_07_ficon'] : '',

				'SOCIAL_URL_08'						=> (isset($config['social_url_08'])) ? $config['social_url_08'] : '',
				'SOCIAL_NAME_08'					=> (isset($config['social_name_08'])) ? $config['social_name_08'] : '',
				'SOCIAL_URL_08_ENABLE'				=> (!empty($config['social_url_08_enable'])) ? true : false,
				'SOCIAL_URL_08_ENABLE'				=> ($this->config['social_url_08_enable']) ? true : false, // Message
				'SOCIAL_URL_08_ICON'				=> (isset($config['social_url_08_icon'])) ? $config['social_url_08_icon'] : '',
				'SOCIAL_URL_08_FICON'				=> (isset($config['social_url_08_ficon'])) ? $config['social_url_08_ficon'] : '',

				'SOCIAL_URL_09'						=> (isset($config['social_url_09'])) ? $config['social_url_09'] : '',
				'SOCIAL_NAME_09'					=> (isset($config['social_name_09'])) ? $config['social_name_09'] : '',
				'SOCIAL_URL_09_ENABLE'				=> (!empty($config['social_url_09_enable'])) ? true : false,
				'SOCIAL_URL_09_ENABLE'				=> ($this->config['social_url_09_enable']) ? true : false, // Message
				'SOCIAL_URL_09_ICON'				=> (isset($config['social_url_09_icon'])) ? $config['social_url_09_icon'] : '',
				'SOCIAL_URL_09_FICON'				=> (isset($config['social_url_09_ficon'])) ? $config['social_url_09_ficon'] : '',

				'SOCIAL_URL_10'						=> (isset($config['social_url_10'])) ? $config['social_url_10'] : '',
				'SOCIAL_NAME_10'					=> (isset($config['social_name_10'])) ? $config['social_name_10'] : '',
				'SOCIAL_URL_10_ENABLE'				=> (!empty($config['social_url_10_enable'])) ? true : false,
				'SOCIAL_URL_10_ENABLE'				=> ($this->config['social_url_10_enable']) ? true : false, // Message
				'SOCIAL_URL_10_ICON'				=> (isset($config['social_url_10_icon'])) ? $config['social_url_10_icon'] : '',
				'SOCIAL_URL_10_FICON'				=> (isset($config['social_url_10_ficon'])) ? $config['social_url_10_ficon'] : '',
			));
			break;
		}
	}
}

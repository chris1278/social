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
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpbb_container, $phpbb_ext_manager, $phpEx; $language;

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
				$config->set('social_facebook_url', utf8_normalize_nfc($request->variable('social_facebook_url', '', true)));
				$config->set('social_facebook_url_enable', $request->variable('social_facebook_url_enable', 1));
				$config->set('social_facebook_icon', utf8_normalize_nfc($request->variable('social_facebook_icon', '', true)));
				$config->set('social_facebook_ficon', utf8_normalize_nfc($request->variable('social_facebook_ficon', '', true)));
				
				
				
				$config->set('social_twitter_url', utf8_normalize_nfc($request->variable('social_twitter_url', '', true)));
				$config->set('social_twitter_url_enable', $request->variable('social_twitter_url_enable', 1));
				$config->set('social_twitter_icon', utf8_normalize_nfc($request->variable('social_twitter_icon', '', true)));
				$config->set('social_twitter_ficon', utf8_normalize_nfc($request->variable('social_twitter_ficon', '', true)));
	
				
				
				trigger_error($this->user->lang['SOCIAL_ICONS_UPDATE'] . adm_back_link($this->u_action));
				
			}

			$template->assign_vars(array(
				'SOCIAL_FACEBOOK_URL'				=> (isset($config['social_facebook_url'])) ? $config['social_facebook_url'] : '',
				'SOCIAL_FACEBOOK_URL_ENABLE'		=> (!empty($config['social_facebook_url_enable'])) ? true : false,
				'SOCIAL_FACEBOOK_URL_ENABLE'		=> ($this->config['social_facebook_url_enable']) ? true : false, // Message
				'SOCIAL_FACEBOOK_ICON'				=> (isset($config['social_facebook_icon'])) ? $config['social_facebook_icon'] : '',
				'SOCIAL_FACEBOOK_FICON'				=> (isset($config['social_facebook_ficon'])) ? $config['social_facebook_ficon'] : '',
				
				
				'SOCIAL_TWITTER_URL'				=> (isset($config['social_twitter_url'])) ? $config['social_twitter_url'] : '',
				'SOCIAL_TWITTER_URL_ENABLE'			=> (!empty($config['social_twitter_url_enable'])) ? true : false,
				'SOCIAL_TWITTER_URL_ENABLE'			=> ($this->config['social_twitter_url_enable']) ? true : false, // Message
				'SOCIAL_TWITTER_ICON'				=> (isset($config['social_twitter_icon'])) ? $config['social_twitter_icon'] : '',
				'SOCIAL_TWITTER_FICON'				=> (isset($config['social_twitter_ficon'])) ? $config['social_twitter_ficon'] : '',
				
				


			));
			break;
		}
	}
}
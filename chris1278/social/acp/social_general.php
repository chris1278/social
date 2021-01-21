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

class social_general
{
	var $u_action;
	public function main()
	{

		global $user, $request, $template, $phpEx, $phpbb_admin_path, $config, $phpbb_container;

		$this->user 				= $user;
		$this->request				= $request;
		$this->template 			= $template;
		$this->php_ext 				= $phpEx;
		$this->phpbb_admin_path 	= $phpbb_admin_path;
		$this->config				= $config;
		$this->chris1278_config	 	= $phpbb_container->get('chris1278.social.chris1278_config');

		add_form_key('acp_social');
		$this->tpl_name = 'acp_social_general';
		$this->page_title = $this->user->lang['ACP_SOCIAL_GENERAL'];
		$submit					= $this->request->is_set_post('submit');

		if ($submit)
		{
			if (!check_form_key('acp_social'))
			{
			trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$this->chris1278_config->set('social_icons_enable', $this->request->variable('social_icons_enable', ''));
			$this->chris1278_config->set('show_social_icons_all', $this->request->variable('show_social_icons_all', ''));
			$this->chris1278_config->set('social_icons_position', $this->request->variable('social_icons_position', ''));
			$this->chris1278_config->set('show_social_header_icons_all', $this->request->variable('show_social_header_icons_all', ''));
			$this->chris1278_config->set('social_icons_links_extern', $this->request->variable('social_icons_links_extern', ''));
			$this->chris1278_config->set('social_ficons_all_enable', $this->request->variable('social_ficons_all_enable', ''));
			$this->chris1278_config->set('social_icons_pos2_enable', $this->request->variable('social_icons_pos2_enable', ''));
			$this->chris1278_config->set('icons_navmenu_index', $this->request->variable('icons_navmenu_index', ''));
			trigger_error($this->user->lang['SOCIAL_UPDATE'] . adm_back_link($this->u_action));
		}

			$template->assign_vars(array(
			'SOCIAL_ICONS_VERSION'				=> $this->user->lang('SOCIAL_ICONS_VERSION_COPY', $this->config['social_icons_version']),
			'SOCIAL_ICONS_ENABLE'				=> $this->chris1278_config['social_icons_enable'],
			'SHOW_SOCIAL_ICONS_ALL'				=> $this->chris1278_config['show_social_icons_all'],
			'SOCIAL_ICONS_POSITION'				=> $this->chris1278_config['social_icons_position'],
			'SHOW_SOCIAL_HEADER_ICONS_ALL'		=> $this->chris1278_config['show_social_header_icons_all'],
			'SOCIAL_ICONS_LINKS_EXTERN'			=> $this->chris1278_config['social_icons_links_extern'],
			'SOCIAL_FICONS_ALL_ENABLE'			=> $this->chris1278_config['social_ficons_all_enable'],
			'SOCIAL_ICONS_POS2_ENABLE'			=> $this->chris1278_config['social_icons_pos2_enable'],
			'ICONS_NAVMENU_INDEX'				=> $this->chris1278_config['icons_navmenu_index'],
			'U_USER_PERMISSIONS'				=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_user_global'),
			'U_GROUP_PERMISSIONS'				=> append_sid("{$phpbb_admin_path}index.$this->php_ext" ,'i=permissions&amp;mode=setting_group_global'),
			'U_ACTION'							=> $this->u_action,
		));
	}
}

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

class social_settings
{
	var $u_action;
	public function main()
	{
		global $user, $request, $template, $phpbb_container;

		$this->user 				= $user;
		$this->request				= $request;
		$this->template 			= $template;
		$this->chris1278_config	 	= $phpbb_container->get('chris1278.social.chris1278_config');

		add_form_key('acp_social');
		$this->tpl_name = 'acp_social_settings';
		$this->page_title = $this->user->lang['ACP_SOCIAL_SETTINGS'];
		$submit					= $this->request->is_set_post('submit');

		if ($submit)
		{
			if (!check_form_key('acp_social'))
			{
			trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			$this->chris1278_config->set('amount_of_boxes', $this->request->variable('amount_of_boxes', ''));
			$this->chris1278_config->set('social_url_01', $this->request->variable('social_url_01', ''));
			$this->chris1278_config->set('social_name_01', $this->request->variable('social_name_01', ''));
			$this->chris1278_config->set('social_url_01_enable', $this->request->variable('social_url_01_enable', ''));
			$this->chris1278_config->set('social_url_01_icon', $this->request->variable('social_url_01_icon', ''));
			$this->chris1278_config->set('social_url_01_ficon', $this->request->variable('social_url_01_ficon', ''));
			$this->chris1278_config->set('social_url_02', $this->request->variable('social_url_02', ''));
			$this->chris1278_config->set('social_name_02', $this->request->variable('social_name_02', ''));
			$this->chris1278_config->set('social_url_02_enable', $this->request->variable('social_url_02_enable', ''));
			$this->chris1278_config->set('social_url_02_icon', $this->request->variable('social_url_02_icon', ''));
			$this->chris1278_config->set('social_url_02_ficon', $this->request->variable('social_url_02_ficon', ''));
			$this->chris1278_config->set('social_url_03', $this->request->variable('social_url_03', ''));
			$this->chris1278_config->set('social_name_03', $this->request->variable('social_name_03', ''));
			$this->chris1278_config->set('social_url_03_enable', $this->request->variable('social_url_03_enable', ''));
			$this->chris1278_config->set('social_url_03_icon', $this->request->variable('social_url_03_icon', ''));
			$this->chris1278_config->set('social_url_03_ficon', $this->request->variable('social_url_03_ficon', ''));
			$this->chris1278_config->set('social_url_04', $this->request->variable('social_url_04', ''));
			$this->chris1278_config->set('social_name_04', $this->request->variable('social_name_04', ''));
			$this->chris1278_config->set('social_url_04_enable', $this->request->variable('social_url_04_enable', ''));
			$this->chris1278_config->set('social_url_04_icon', $this->request->variable('social_url_04_icon', ''));
			$this->chris1278_config->set('social_url_04_ficon', $this->request->variable('social_url_04_ficon', ''));
			$this->chris1278_config->set('social_url_05', $this->request->variable('social_url_05', ''));
			$this->chris1278_config->set('social_name_05', $this->request->variable('social_name_05', ''));
			$this->chris1278_config->set('social_url_05_enable', $this->request->variable('social_url_05_enable', ''));
			$this->chris1278_config->set('social_url_05_icon', $this->request->variable('social_url_05_icon', ''));
			$this->chris1278_config->set('social_url_05_ficon', $this->request->variable('social_url_05_ficon', ''));
			$this->chris1278_config->set('social_url_06', $this->request->variable('social_url_06', ''));
			$this->chris1278_config->set('social_name_06', $this->request->variable('social_name_06', ''));
			$this->chris1278_config->set('social_url_06_enable', $this->request->variable('social_url_06_enable', ''));
			$this->chris1278_config->set('social_url_06_icon', $this->request->variable('social_url_06_icon', ''));
			$this->chris1278_config->set('social_url_06_ficon', $this->request->variable('social_url_06_ficon', ''));
			$this->chris1278_config->set('social_url_07', $this->request->variable('social_url_07', ''));
			$this->chris1278_config->set('social_name_07', $this->request->variable('social_name_07', ''));
			$this->chris1278_config->set('social_url_07_enable', $this->request->variable('social_url_07_enable', ''));
			$this->chris1278_config->set('social_url_07_icon', $this->request->variable('social_url_07_icon', ''));
			$this->chris1278_config->set('social_url_07_ficon', $this->request->variable('social_url_07_ficon', ''));
			$this->chris1278_config->set('social_url_08', $this->request->variable('social_url_08', ''));
			$this->chris1278_config->set('social_name_08', $this->request->variable('social_name_08', ''));
			$this->chris1278_config->set('social_url_08_enable', $this->request->variable('social_url_08_enable', ''));
			$this->chris1278_config->set('social_url_08_icon', $this->request->variable('social_url_08_icon', ''));
			$this->chris1278_config->set('social_url_08_ficon', $this->request->variable('social_url_08_ficon', ''));
			$this->chris1278_config->set('social_url_09', $this->request->variable('social_url_09', ''));
			$this->chris1278_config->set('social_name_09', $this->request->variable('social_name_09', ''));
			$this->chris1278_config->set('social_url_09_enable', $this->request->variable('social_url_09_enable', ''));
			$this->chris1278_config->set('social_url_09_icon', $this->request->variable('social_url_09_icon', ''));
			$this->chris1278_config->set('social_url_09_ficon', $this->request->variable('social_url_09_ficon', ''));
			$this->chris1278_config->set('social_url_10', $this->request->variable('social_url_10', ''));
			$this->chris1278_config->set('social_name_10', $this->request->variable('social_name_10', ''));
			$this->chris1278_config->set('social_url_10_enable', $this->request->variable('social_url_10_enable', ''));
			$this->chris1278_config->set('social_url_10_icon', $this->request->variable('social_url_10_icon', ''));
			$this->chris1278_config->set('social_url_10_ficon', $this->request->variable('social_url_10_ficon', ''));
			trigger_error($this->user->lang['SOCIAL_UPDATE'] . adm_back_link($this->u_action));
		}

			$template->assign_vars(array(
			'AMOUNT_OF_BOXES'					=> $this->chris1278_config['amount_of_boxes'],
			'SOCIAL_URL_01'						=> $this->chris1278_config['social_url_01'],
			'SOCIAL_NAME_01'					=> $this->chris1278_config['social_name_01'],
			'SOCIAL_URL_01_ENABLE'				=> $this->chris1278_config['social_url_01_enable'],
			'SOCIAL_URL_01_ICON'				=> $this->chris1278_config['social_url_01_icon'],
			'SOCIAL_URL_01_FICON'				=> $this->chris1278_config['social_url_01_ficon'],
			'SOCIAL_URL_02'						=> $this->chris1278_config['social_url_02'],
			'SOCIAL_NAME_02'					=> $this->chris1278_config['social_name_02'],
			'SOCIAL_URL_02_ENABLE'				=> $this->chris1278_config['social_url_02_enable'],
			'SOCIAL_URL_02_ICON'				=> $this->chris1278_config['social_url_02_icon'],
			'SOCIAL_URL_02_FICON'				=> $this->chris1278_config['social_url_02_ficon'],
			'SOCIAL_URL_03'						=> $this->chris1278_config['social_url_03'],
			'SOCIAL_NAME_03'					=> $this->chris1278_config['social_name_03'],
			'SOCIAL_URL_03_ENABLE'				=> $this->chris1278_config['social_url_03_enable'],
			'SOCIAL_URL_03_ICON'				=> $this->chris1278_config['social_url_03_icon'],
			'SOCIAL_URL_03_FICON'				=> $this->chris1278_config['social_url_03_ficon'],
			'SOCIAL_URL_04'						=> $this->chris1278_config['social_url_04'],
			'SOCIAL_NAME_04'					=> $this->chris1278_config['social_name_04'],
			'SOCIAL_URL_04_ENABLE'				=> $this->chris1278_config['social_url_04_enable'],
			'SOCIAL_URL_04_ICON'				=> $this->chris1278_config['social_url_04_icon'],
			'SOCIAL_URL_04_FICON'				=> $this->chris1278_config['social_url_04_ficon'],
			'SOCIAL_URL_05'						=> $this->chris1278_config['social_url_05'],
			'SOCIAL_NAME_05'					=> $this->chris1278_config['social_name_05'],
			'SOCIAL_URL_05_ENABLE'				=> $this->chris1278_config['social_url_05_enable'],
			'SOCIAL_URL_05_ICON'				=> $this->chris1278_config['social_url_05_icon'],
			'SOCIAL_URL_05_FICON'				=> $this->chris1278_config['social_url_05_ficon'],
			'SOCIAL_URL_06'						=> $this->chris1278_config['social_url_06'],
			'SOCIAL_NAME_06'					=> $this->chris1278_config['social_name_06'],
			'SOCIAL_URL_06_ENABLE'				=> $this->chris1278_config['social_url_06_enable'],
			'SOCIAL_URL_06_ICON'				=> $this->chris1278_config['social_url_06_icon'],
			'SOCIAL_URL_06_FICON'				=> $this->chris1278_config['social_url_06_ficon'],
			'SOCIAL_URL_07'						=> $this->chris1278_config['social_url_07'],
			'SOCIAL_NAME_07'					=> $this->chris1278_config['social_name_07'],
			'SOCIAL_URL_07_ENABLE'				=> $this->chris1278_config['social_url_07_enable'],
			'SOCIAL_URL_07_ICON'				=> $this->chris1278_config['social_url_07_icon'],
			'SOCIAL_URL_07_FICON'				=> $this->chris1278_config['social_url_07_ficon'],
			'SOCIAL_URL_08'						=> $this->chris1278_config['social_url_08'],
			'SOCIAL_NAME_08'					=> $this->chris1278_config['social_name_08'],
			'SOCIAL_URL_08_ENABLE'				=> $this->chris1278_config['social_url_08_enable'],
			'SOCIAL_URL_08_ICON'				=> $this->chris1278_config['social_url_08_icon'],
			'SOCIAL_URL_08_FICON'				=> $this->chris1278_config['social_url_08_ficon'],
			'SOCIAL_URL_09'						=> $this->chris1278_config['social_url_09'],
			'SOCIAL_NAME_09'					=> $this->chris1278_config['social_name_09'],
			'SOCIAL_URL_09_ENABLE'				=> $this->chris1278_config['social_url_09_enable'],
			'SOCIAL_URL_09_ICON'				=> $this->chris1278_config['social_url_09_icon'],
			'SOCIAL_URL_09_FICON'				=> $this->chris1278_config['social_url_09_ficon'],
			'SOCIAL_URL_10'						=> $this->chris1278_config['social_url_10'],
			'SOCIAL_NAME_10'					=> $this->chris1278_config['social_name_10'],
			'SOCIAL_URL_10_ENABLE'				=> $this->chris1278_config['social_url_10_enable'],
			'SOCIAL_URL_10_ICON'				=> $this->chris1278_config['social_url_10_icon'],
			'SOCIAL_URL_10_FICON'				=> $this->chris1278_config['social_url_10_ficon'],
			'U_ACTION'							=> $this->u_action,
		));
	}
}

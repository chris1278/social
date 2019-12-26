<?php
/**
*
* Social Network Icons extension for the phpBB Forum Software package.
*
* @copyright (c) 2019 (Christian-Esch.de)
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace chris1278\social\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $php_ext;

	/**
	* Constructor
	*
	* @param \phpbb\auth\auth						$auth					Authentication object
	* @param \phpbb\config\config					$config					Config object
	* @param \phpbb\db\driver\driver_interface		$db						Database object
	* @param \phpbb\request\request					$request				Request object
	* @param \phpbb\template\template				$template				Template object
	* @param \phpbb\user							$user					User object
	* @param string									$phpbb_root_path		phpbb_root_path
	* @param string									$php_ext				php_ext
	* @access public
	*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $language, $root_path, $php_ext, \phpbb\collapsiblecategories\operator\operator $operator = null)
	{
		$this->auth			= $auth;
		$this->config		= $config;
		$this->db			= $db;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
		$this->operator		= $operator;
}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'				=> 'load_language_on_setup',
			'core.permissions'				=> 'permissions',
			'core.page_header_after'		=> 'show_social_icons',
			'core.page_header'				=> 'collaps',
		);
	}

	/**
	* Load language during user setup
	*
	* @param object $event The event object
	* @return null
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'	=> 'chris1278/social',
			'lang_set'	=> 'social',
		);

			if (defined('ADMIN_START'))
			{
			$lang_set_ext[] = array(
				'ext_name'	=> 'chris1278/social',
				'lang_set' => 'info_acp_social_icons',
			);
		}

		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Load permission event
	*/
	public function permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions += array(
			'u_view_social_icons'		=> array(
			'lang'					=> 'ACL_U_VIEW_SOCIAL_ICONS',
			'cat'					=> 'misc'
		),
	);
		$event['permissions'] = $permissions;
	}

	public function show_social_icons($event)
	{
		if ($this->auth->acl_get('u_view_social_icons'))
		{
			$this->template->assign_vars(array(
				'SOCIAL_ICONS_ENABLE'			=> $this->config['social_icons_enable'],
				'SHOW_SOCIAL_ICONS_ALL'			=> $this->config['show_social_icons_all'],
				'SOCIAL_ICONS_POSITION'			=> $this->config['social_icons_position'],
				'SHOW_SOCIAL_HEADER_ICONS_ALL'	=> $this->config['show_social_header_icons_all'],
				'SOCIAL_ICONS_LINKS_EXTERN'		=> $this->config['social_icons_links_extern'],
				'SOCIAL_FICONS_ALL_ENABLE'		=> $this->config['social_ficons_all_enable'],
				'SOCIAL_ICONS_POS2_ENABLE'		=> $this->config['social_icons_pos2_enable'],
				'SOCIAL_ICONS_ANZAHL'			=> $this->config['social_icons_anzahl'],
				'ICONS_NAVMENU_INDEX'			=> $this->config['icons_navmenu_index'],

				/* Einstellungen für die verlinkungen*/

				'SOCIAL_URL_01'					=> $this->config['social_url_01'],
				'SOCIAL_NAME_01'				=> $this->config['social_name_01'],
				'SOCIAL_URL_01_ENABLE'			=> $this->config['social_url_01_enable'],
				'SOCIAL_URL_01_ICON'			=> $this->config['social_url_01_icon'],
				'SOCIAL_URL_01_FICON'			=> $this->config['social_url_01_ficon'],

				'SOCIAL_URL_02'					=> $this->config['social_url_02'],
				'SOCIAL_NAME_02'				=> $this->config['social_name_02'],
				'SOCIAL_URL_02_ENABLE'			=> $this->config['social_url_02_enable'],
				'SOCIAL_URL_02_ICON'			=> $this->config['social_url_02_icon'],
				'SOCIAL_URL_02_FICON'			=> $this->config['social_url_02_ficon'],

				'SOCIAL_URL_03'					=> $this->config['social_url_03'],
				'SOCIAL_NAME_03'				=> $this->config['social_name_03'],
				'SOCIAL_URL_03_ENABLE'			=> $this->config['social_url_03_enable'],
				'SOCIAL_URL_03_ICON'			=> $this->config['social_url_03_icon'],
				'SOCIAL_URL_03_FICON'			=> $this->config['social_url_03_ficon'],

				'SOCIAL_URL_04'					=> $this->config['social_url_04'],
				'SOCIAL_NAME_04'				=> $this->config['social_name_04'],
				'SOCIAL_URL_04_ENABLE'			=> $this->config['social_url_04_enable'],
				'SOCIAL_URL_04_ICON'			=> $this->config['social_url_04_icon'],
				'SOCIAL_URL_04_FICON'			=> $this->config['social_url_04_ficon'],

				'SOCIAL_URL_05'					=> $this->config['social_url_05'],
				'SOCIAL_NAME_05'				=> $this->config['social_name_05'],
				'SOCIAL_URL_05_ENABLE'			=> $this->config['social_url_05_enable'],
				'SOCIAL_URL_05_ICON'			=> $this->config['social_url_05_icon'],
				'SOCIAL_URL_05_FICON'			=> $this->config['social_url_05_ficon'],

				'SOCIAL_URL_06'					=> $this->config['social_url_06'],
				'SOCIAL_NAME_06'				=> $this->config['social_name_06'],
				'SOCIAL_URL_06_ENABLE'			=> $this->config['social_url_06_enable'],
				'SOCIAL_URL_06_ICON'			=> $this->config['social_url_06_icon'],
				'SOCIAL_URL_06_FICON'			=> $this->config['social_url_06_ficon'],

				'SOCIAL_URL_07'					=> $this->config['social_url_07'],
				'SOCIAL_NAME_07'				=> $this->config['social_name_07'],
				'SOCIAL_URL_07_ENABLE'			=> $this->config['social_url_07_enable'],
				'SOCIAL_URL_07_ICON'			=> $this->config['social_url_07_icon'],
				'SOCIAL_URL_07_FICON'			=> $this->config['social_url_07_ficon'],

				'SOCIAL_URL_08'					=> $this->config['social_url_08'],
				'SOCIAL_NAME_08'				=> $this->config['social_name_08'],
				'SOCIAL_URL_08_ENABLE'			=> $this->config['social_url_08_enable'],
				'SOCIAL_URL_08_ICON'			=> $this->config['social_url_08_icon'],
				'SOCIAL_URL_08_FICON'			=> $this->config['social_url_08_ficon'],

				'SOCIAL_URL_09'					=> $this->config['social_url_09'],
				'SOCIAL_NAME_09'				=> $this->config['social_name_09'],
				'SOCIAL_URL_09_ENABLE'			=> $this->config['social_url_09_enable'],
				'SOCIAL_URL_09_ICON'			=> $this->config['social_url_09_icon'],
				'SOCIAL_URL_09_FICON'			=> $this->config['social_url_09_ficon'],

				'SOCIAL_URL_10'					=> $this->config['social_url_10'],
				'SOCIAL_NAME_10'				=> $this->config['social_name_10'],
				'SOCIAL_URL_10_ENABLE'			=> $this->config['social_url_10_enable'],
				'SOCIAL_URL_10_ICON'			=> $this->config['social_url_10_icon'],
				'SOCIAL_URL_10_FICON'			=> $this->config['social_url_10_ficon'],

			));
		}
	}
	public function collaps($event)
	{
		if ($this->operator !== null)
		{
			$fid = 'socialicons'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'S_SOCIALICONS_HIDDEN' => $this->operator->is_collapsed($fid),
				'U_SOCIALICONS_COLLAPSE_URL' => $this->operator->get_collapsible_link($fid),
			));
		}
	}
}

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
	/** @var \chris1278\social\core\chris1278_config */
	protected $chris1278_config;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var string PHP extension */
	protected $php_ext;

	/**
	* Constructor
	*
	* @param \chris1278\cookie\core	$chris1278_config			chris1278_config object
	* @param \phpbb\config\config $config							config_object
	* @param \phpbb\template\template			$template				Template object
	* @param string						$php_ext				php_ext
	* @access public
	*/

	public function __construct(\phpbb\auth\auth $auth, \chris1278\social\core\chris1278_db $chris1278_config, \phpbb\config\config $config, \phpbb\template\template $template, $language, $php_ext, \phpbb\collapsiblecategories\operator\operator $operator = null)
	{
		$this->auth					= $auth;
		$this->chris1278_config		= $chris1278_config;
		$this->config				= $config;
		$this->template				= $template;
		$this->php_ext				= $php_ext;
		$this->operator				= $operator;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	*/

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'				=>	'load_language_on_setup',
			'core.permissions'				=>	'permissions',
			'core.page_header_after'		=> 	'show_social_icons',
			'core.page_header'				=> 	'collaps',
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
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Load permission event
	*/

	public function permissions($event)
	{
			$permissions = $event['permissions'];
			$permissions['u_view_social'] = array('lang' => 'ACL_U_VIEW_SOCIAL', 'cat' => 'misc');
			$event['permissions'] = $permissions;
	}

	/**
	* Settings or the Socialicons-Extension
	*/

	public function show_social_icons()
	{
		if ($this->auth->acl_get('u_view_social'))
		{
			$social_icons_enable					= $this->chris1278_config['social_icons_enable'];
			$show_social_icons_all					= $this->chris1278_config['show_social_icons_all'];
			$social_icons_position					= $this->chris1278_config['social_icons_position'];
			$show_social_header_icons_all			= $this->chris1278_config['show_social_header_icons_all'];
			$social_icons_links_extern				= $this->chris1278_config['social_icons_links_extern'];
			$social_ficons_all_enable				= $this->chris1278_config['social_ficons_all_enable'];
			$social_icons_pos2_enable				= $this->chris1278_config['social_icons_pos2_enable'];
			$icons_navmenu_index					= $this->chris1278_config['icons_navmenu_index'];
			$amount_of_boxes						= $this->chris1278_config['amount_of_boxes'];
			$social_url_01							= $this->chris1278_config['social_url_01'];
			$social_url_02							= $this->chris1278_config['social_url_02'];
			$social_url_03							= $this->chris1278_config['social_url_03'];
			$social_url_04							= $this->chris1278_config['social_url_04'];
			$social_url_05							= $this->chris1278_config['social_url_05'];
			$social_url_06							= $this->chris1278_config['social_url_06'];
			$social_url_07							= $this->chris1278_config['social_url_07'];
			$social_url_08							= $this->chris1278_config['social_url_08'];
			$social_url_09							= $this->chris1278_config['social_url_09'];
			$social_url_10							= $this->chris1278_config['social_url_10'];
			$social_name_01							= $this->chris1278_config['social_name_01'];
			$social_name_02							= $this->chris1278_config['social_name_02'];
			$social_name_03							= $this->chris1278_config['social_name_03'];
			$social_name_04							= $this->chris1278_config['social_name_04'];
			$social_name_05							= $this->chris1278_config['social_name_05'];
			$social_name_06							= $this->chris1278_config['social_name_06'];
			$social_name_07							= $this->chris1278_config['social_name_07'];
			$social_name_08							= $this->chris1278_config['social_name_08'];
			$social_name_09							= $this->chris1278_config['social_name_09'];
			$social_name_10							= $this->chris1278_config['social_name_10'];
			$social_url_01_enable					= $this->chris1278_config['social_url_01_enable'];
			$social_url_02_enable					= $this->chris1278_config['social_url_02_enable'];
			$social_url_03_enable					= $this->chris1278_config['social_url_03_enable'];
			$social_url_04_enable					= $this->chris1278_config['social_url_04_enable'];
			$social_url_05_enable					= $this->chris1278_config['social_url_05_enable'];
			$social_url_06_enable					= $this->chris1278_config['social_url_06_enable'];
			$social_url_07_enable					= $this->chris1278_config['social_url_07_enable'];
			$social_url_08_enable					= $this->chris1278_config['social_url_08_enable'];
			$social_url_09_enable					= $this->chris1278_config['social_url_09_enable'];
			$social_url_10_enable					= $this->chris1278_config['social_url_10_enable'];
			$social_url_01_icon						= $this->chris1278_config['social_url_01_icon'];
			$social_url_02_icon						= $this->chris1278_config['social_url_02_icon'];
			$social_url_03_icon						= $this->chris1278_config['social_url_03_icon'];
			$social_url_04_icon						= $this->chris1278_config['social_url_04_icon'];
			$social_url_05_icon						= $this->chris1278_config['social_url_05_icon'];
			$social_url_06_icon						= $this->chris1278_config['social_url_06_icon'];
			$social_url_07_icon						= $this->chris1278_config['social_url_07_icon'];
			$social_url_08_icon						= $this->chris1278_config['social_url_08_icon'];
			$social_url_09_icon						= $this->chris1278_config['social_url_09_icon'];
			$social_url_10_icon						= $this->chris1278_config['social_url_10_icon'];
			$social_url_01_ficon					= $this->chris1278_config['social_url_01_ficon'];
			$social_url_02_ficon					= $this->chris1278_config['social_url_02_ficon'];
			$social_url_03_ficon					= $this->chris1278_config['social_url_03_ficon'];
			$social_url_04_ficon					= $this->chris1278_config['social_url_04_ficon'];
			$social_url_05_ficon					= $this->chris1278_config['social_url_05_ficon'];
			$social_url_06_ficon					= $this->chris1278_config['social_url_06_ficon'];
			$social_url_07_ficon					= $this->chris1278_config['social_url_07_ficon'];
			$social_url_08_ficon					= $this->chris1278_config['social_url_08_ficon'];
			$social_url_09_ficon					= $this->chris1278_config['social_url_09_ficon'];
			$social_url_10_ficon					= $this->chris1278_config['social_url_10_ficon'];

			$this->template->assign_vars(array(
				'SOCIAL_ICONS_ENABLE'				=> $social_icons_enable,
				'SHOW_SOCIAL_ICONS_ALL'				=> $show_social_icons_all,
				'SOCIAL_ICONS_POSITION'				=> $social_icons_position,
				'SHOW_SOCIAL_HEADER_ICONS_ALL'		=> $show_social_header_icons_all,
				'SOCIAL_ICONS_LINKS_EXTERN'			=> $social_icons_links_extern,
				'SOCIAL_FICONS_ALL_ENABLE'			=> $social_ficons_all_enable,
				'SOCIAL_ICONS_POS2_ENABLE'			=> $social_icons_pos2_enable,
				'ICONS_NAVMENU_INDEX'				=> $icons_navmenu_index,
				'AMOUNT_OF_BOXES'					=> $amount_of_boxes,
				'SOCIAL_URL_01'						=> $social_url_01,
				'SOCIAL_NAME_01'					=> $social_name_01,
				'SOCIAL_URL_01_ENABLE'				=> $social_url_01_enable,
				'SOCIAL_URL_01_ICON'				=> $social_url_01_icon,
				'SOCIAL_URL_01_FICON'				=> $social_url_01_ficon,
				'SOCIAL_URL_02'						=> $social_url_02,
				'SOCIAL_NAME_02'					=> $social_name_02,
				'SOCIAL_URL_02_ENABLE'				=> $social_url_02_enable,
				'SOCIAL_URL_02_ICON'				=> $social_url_02_icon,
				'SOCIAL_URL_02_FICON'				=> $social_url_02_ficon,
				'SOCIAL_URL_03'						=> $social_url_03,
				'SOCIAL_NAME_03'					=> $social_name_03,
				'SOCIAL_URL_03_ENABLE'				=> $social_url_03_enable,
				'SOCIAL_URL_03_ICON'				=> $social_url_03_icon,
				'SOCIAL_URL_03_FICON'				=> $social_url_03_ficon,
				'SOCIAL_URL_04'						=> $social_url_04,
				'SOCIAL_NAME_04'					=> $social_name_04,
				'SOCIAL_URL_04_ENABLE'				=> $social_url_04_enable,
				'SOCIAL_URL_04_ICON'				=> $social_url_04_icon,
				'SOCIAL_URL_04_FICON'				=> $social_url_04_ficon,
				'SOCIAL_URL_05'						=> $social_url_05,
				'SOCIAL_NAME_05'					=> $social_name_05,
				'SOCIAL_URL_05_ENABLE'				=> $social_url_05_enable,
				'SOCIAL_URL_05_ICON'				=> $social_url_05_icon,
				'SOCIAL_URL_05_FICON'				=> $social_url_05_ficon,
				'SOCIAL_URL_06'						=> $social_url_06,
				'SOCIAL_NAME_06'					=> $social_name_06,
				'SOCIAL_URL_06_ENABLE'				=> $social_url_06_enable,
				'SOCIAL_URL_06_ICON'				=> $social_url_06_icon,
				'SOCIAL_URL_06_FICON'				=> $social_url_06_ficon,
				'SOCIAL_URL_07'						=> $social_url_07,
				'SOCIAL_NAME_07'					=> $social_name_07,
				'SOCIAL_URL_07_ENABLE'				=> $social_url_07_enable,
				'SOCIAL_URL_07_ICON'				=> $social_url_07_icon,
				'SOCIAL_URL_07_FICON'				=> $social_url_07_ficon,
				'SOCIAL_URL_08'						=> $social_url_08,
				'SOCIAL_NAME_08'					=> $social_name_08,
				'SOCIAL_URL_08_ENABLE'				=> $social_url_08_enable,
				'SOCIAL_URL_08_ICON'				=> $social_url_08_icon,
				'SOCIAL_URL_08_FICON'				=> $social_url_08_ficon,
				'SOCIAL_URL_09'						=> $social_url_09,
				'SOCIAL_NAME_09'					=> $social_name_09,
				'SOCIAL_URL_09_ENABLE'				=> $social_url_09_enable,
				'SOCIAL_URL_09_ICON'				=> $social_url_09_icon,
				'SOCIAL_URL_09_FICON'				=> $social_url_09_ficon,
				'SOCIAL_URL_10'						=> $social_url_10,
				'SOCIAL_NAME_10'					=> $social_name_10,
				'SOCIAL_URL_10_ENABLE'				=> $social_url_10_enable,
				'SOCIAL_URL_10_ICON'				=> $social_url_10_icon,
				'SOCIAL_URL_10_FICON'				=> $social_url_10_ficon,
				));
		}
	}

	/**
	* Settings or the Collapsible Kategorie Extensions
	*/

	public function collaps()
	{
		if ($this->operator !== null)
		{
			$fid = 'social'; // can be any unique string to identify your extension's collapsible element
			$this->template->assign_vars(array(
				'S_SOCIAL_HIDDEN' => $this->operator->is_collapsed($fid),
				'U_SOCIAL_COLLAPSE_URL' => $this->operator->get_collapsible_link($fid),
			));
		}
	}
}

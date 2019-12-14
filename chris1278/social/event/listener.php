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
	 public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $language, $root_path, $php_ext)
	{
		$this->auth			= $auth;
		$this->config		= $config;
		$this->db			= $db;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->root_path	= $root_path;
		$this->php_ext		= $php_ext;
		
}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'				=> 'load_language_on_setup',
			'core.permissions'				=> 'permissions',
			'core.page_header_after'		=> 'show_social_icons',
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
				
				
				/* Einstellungen für die verlinkungen*/
				
				'U_SOCIAL_FACEBOOK_URL'			=> $this->config['social_facebook_url'],
				'SOCIAL_FACEBOOK_URL_ENABLE'	=> $this->config['social_facebook_url_enable'],
				'SOCIAL_FACEBOOK_ICON'			=> $this->config['social_facebook_icon'],
				'SOCIAL_FACEBOOK_FICON'			=> $this->config['social_facebook_ficon'],

				
				
				'U_SOCIAL_TWITTER_URL'			=> $this->config['social_twitter_url'],
				'SOCIAL_TWITTER_URL_ENABLE'		=> $this->config['social_twitter_url_enable'],
				'SOCIAL_TWITTER_ICON'			=> $this->config['social_twitter_icon'],
				'SOCIAL_TWITTER_FICON'			=> $this->config['social_twitter_ficon'],

				
				
				
			));
		}
	}
}